<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;

class BitbucketComponent extends Component {

    private $config;

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
    
    

}
