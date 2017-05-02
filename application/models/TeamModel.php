<?php

class TeamModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }		
	
    /**
     * inserta un equipo a la base de datos
     * @param type $data
     */
    public function insertTeam($data,$name) {
        $r = $this->db->query("select id_tournament from tournament where name = '$name'");        
        $r = $r->result();        
        $data['id_tournament'] = $r[0]->id_tournament;
        $this->db->insert('team', $data);
    }
    /**
     * Retorna un vector todos los equipos de la base de datos
     * @return type $data or false
     */
    public function getTeams($name) {
        $data = $this->db->query("select te.* from team te, tournament tr 
                                  where te.id_tournament = tr.id_tournament 
                                  and te.id_tournament = (select id_tournament 
                                  from tournament where name = '$name') ;");
        if ($data->num_rows() > 0) {
            $data = $data->result();
            return $data;
        } else {
            return false;
        }
    }    
}
