<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;

class BitbucketComponent extends Component {

    private $config;
    private $url = "https://api.bitbucket.org/2.0/";

    public function initialize(array $config) {
        $this->config = Configure::read('bitbucket');
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
            $ch = curl_init($url);
        } else {
            $get = http_build_query($data);
            $ch = curl_init($url . '?' . $get);
        }
        $options = [
            CURLOPT_HTTPHEADER => ['Authorization: Bearer ' . $auth],
            CURLOPT_TIMEOUT => 10,
            CURLOPT_RETURNTRANSFER => true,
        ];

        curl_setopt_array($ch, $options);
        $return = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Request Error:' . curl_error($ch);
        }

        curl_close($ch);
        return json_decode($return);
    }

    public function getRepositories($Authorization) {
        $user = $this->getUser($Authorization);
        $teams = $this->getTeams(1, $Authorization);
        $i = 1;
        $teamsList = $teams->values;
        while (isset($teams->next)) {
            $i++;
            $teams = $this->getTeams($i, $Authorization);
            $teamsList = array_merge($teamsList, $teams->values);
        }
        $teamrepo = [];
        foreach ($teamsList as $team) {
            $repos = $this->getRepoFromTeam($team->team->uuid, $Authorization);
            $teamrepo[$team->team->display_name] = $repos;
        }
        dd($teamrepo);
    }

    public function getUser($Authorization) {
        return $this->get($this->url . 'user', $Authorization);
    }

    public function getTeams($page, $Authorization) {
        return $this->get($this->url . 'user/permissions/teams', $Authorization, ['page' => $page]);
    }

    public function getRepoFromUser($username, $Authorization) {
        return $this->get($this->url . 'repositories/' . $username, $Authorization);
    }

    public function getRepoFromTeam($team, $Authorization) {
        return $this->get($this->url . 'teams/' . $team . '/repositories', $Authorization);
    }

}
