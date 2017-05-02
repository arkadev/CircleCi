<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class unit_test extends CI_Controller {
        public function __construct()
        {
            parent::__construct(); 
			$this->load->library("unit_test");	
			$this->load->model("tournamentModel");
			$this->load->model("teamModel");
        }
		
		public function index(){
			$teams = $this->teamModel->getTeams();
			$tourn = $this->tournamentModel->getPhases();

			for ($i = 0; $i < count($teams); $i++) {
				$names[$i] = $teams[$i]->name;
				$ids[$i] = $teams[$i]->id_team;
			}

			for ($i = 0; $i < count($tourn); $i++) {
				$names_phase[$i] = $tourn[$i]->name;
				$id_phase[$i] = $tourn[$i]->id_phase;
			}

			echo "Unit Test 1 getTeams";
			$test_name = "Es arreglo";
			echo $this->unit->run($teams,'is_array',$test_name);

			echo "Unit Test 2 getTeams";
			$test_name = "Esta vacio";
			echo $this->unit->run((count($teams)>0),true,$test_name);

			echo "Unit Test 3 createTourn";	
			$test_name = "¿Se puede crear un torneo?";
			echo $this->unit->run((count($teams)>2),true,$test_name);

			echo "Unit Test 4 insertTeam";
			$test_name = "Se encuentra el equipo con nombre T1";
			echo $this->unit->run(in_array("T1", $names),true,$test_name);

			echo "Unit Test 5 insertTeam";
			$test_name = "Se encuentra el equipo con identificador 2";
			echo $this->unit->run(in_array("2", $ids),true,$test_name);
			
			echo "Unit Test 6 insertTeam";
			$test_name = "No se encuentra el equipo con nombre T80";
			echo $this->unit->run(in_array("T80", $names),false,$test_name);
			
			echo "Unit Test 7 insertTeam";
			$test_name = "Se encuentra el equipo con identificador 32";	
			echo $this->unit->run(in_array("32", $ids),false,$test_name);

			echo "Unit Test 8 getPhases";
			$test_name = "¿Existe la fase A?";	
			echo $this->unit->run(in_array("A", $names_phase),true,$test_name);

			echo "Unit Test 9 getPhases";
			$test_name = "¿Existe la fase B?";
			echo $this->unit->run(in_array("B", $names_phase),false,$test_name);
		}
}