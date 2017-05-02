<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {    

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model("teamModel");
    }
    /**
     * Carga el vector con el equipo 
     */
    public function index() {        
        $name_tournament=($_GET['name_tournament']);        
        $this->data['teams'] = $this->teamModel->getTeams($name_tournament);
        $this->load->view("teams", $this->data);
    }

    public function insertTeam() {
        $name = $this->input->post("name_tournament");
        $data['name'] = $this->input->post("name");
        $this->teamModel->insertTeam($data,$name);
    }
}