<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all()
    {
        $query = $this->db->get('clientes');
        return $query->result();
    }

    public function get_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM clientes where id_cliente = ?", array($id));
        return $query->row();
    }

    public function get_by_email($email)
    {
        $query = $this->db->query("SELECT * FROM clientes where email = ?", array($email));
        return $query->row();
    }


    public function crear_cliente($client_data)
    {
        $this->db->insert('clientes', $client_data);
    }

    public function actualizar_cliente($id, $data)
    {
        $this->db->update('clientes',$data, ['id_cliente' => $id] );
    }

    public function eliminar_cliente($id)
    {
        $this->db->delete('clientes', ['id_cliente' => $id] );
    }

}