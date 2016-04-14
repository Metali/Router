<?php

class TeamController {
    public function __construct() {}
    public function index() { echo "Team controller, index method"; }
}

include('Router.php');

Router::get('/', function() {
	echo "home";
});

Router::get('/team', 'TeamController#index');