<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;
use Cake\Cache\Cache;

class BitbucketComponent extends Component {

    private $config;
    private $url = "https://api.bitbucket.org/2.0/";
    private $curl;

    public function initialize(array $config) {
        $this->config = Configure::read('Bitbucket');
        $this->curl = curl_init();
    }

    public function getUrl() {
        $url = "https://bitbucket.org/site/oauth2/authorize?";
        $params = [
            "client_id" => $this->config['key'],
            "response_type" => 'token'
        ];
        return $url . http_build_query($params);
    }

    private function post($auth, $data) {

    }

    private function get($url, $auth, array $data = null) {
        if (empty($data)) {
            $url = $url;
        } else {
            $get = http_build_query($data);
            $url = $url . '?' . $get;
        }

        $options = [
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => ['Authorization: Bearer ' . $auth],
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_RETURNTRANSFER => true,
        ];

        curl_setopt_array($this->curl, $options);
        $return = curl_exec($this->curl);

        if (curl_errno($this->curl)) {
            echo 'Request Error:' . curl_error($this->curl);
        }
        return json_decode($return);
    }

    public function getRepositories($Authorization) {

        $user = $this->getUser($Authorization);

        if (($teamsList = Cache::read($user->username . "_teams", "repositories")) === false) {
            $teams = $this->getTeams(1, $Authorization);
            $i = 1;
            $teamsList = $teams->values;
            while (isset($teams->next)) {
                $i++;
                $teams = $this->getTeams($i, $Authorization);
                $teamsList = array_merge($teamsList, $teams->values);
            }
            Cache::write($user->username . "_teams", $teamsList, "repositories");
        }
        if (($teamrepo = Cache::read($user->username . "_repos", "repositories")) === false) {
            $teamrepo = [];
            $i = 1;
            foreach ($teamsList as $team) {
                $repos = $this->getRepoFromTeam($team->team->uuid, $Authorization);
                $teamrepo[$team->team->uuid] = $repos->values;
                while (isset($repos->next)) {
                    $i++;
                    $repos = $this->getRepoFromUser($team->team->uuid, $Authorization, $i);
                    $teamrepo[$team->team->uuid] = array_merge($teamrepo[$team->team->uuid], $teams->values);
                }
            }
            Cache::write($user->username . "_repos", $teamrepo, "repositories");
        }

        dd($user);
    }

    public function getUser($Authorization) {
        return $this->get($this->url . 'user', $Authorization);
    }

    public function getTeams($page, $Authorization) {
        return $this->get($this->url . 'user/permissions/teams', $Authorization, ['page' => $page]);
    }

    public function getRepoFromUser($username, $Authorization, $page = 1) {
        return $this->get($this->url . 'repositories/' . $username, $Authorization, ['page' => $page]);
    }

    public function getRepoFromTeam($team, $Authorization) {
        return $this->get($this->url . 'teams/' . $team . '/repositories', $Authorization);
    }

}
