<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto_Model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function crear_consulta($data_consulta)
    {
        $this->db->insert('contacto', $data_consulta);
    }

    public function get_all_consulta()
    {
        $query = $this->db->get('contacto');
        return $query->result();
    }


    
    public function get_contacto_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM contacto where id_contacto = ?", array($id));
        return $query->row();
    }


}