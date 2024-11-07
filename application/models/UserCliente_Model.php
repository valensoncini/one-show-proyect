<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCliente_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function agregar_venta($data_venta)
    {
        $this->db->insert('venta', $data_venta);
        $id = $this->db->insert_id();
        return $id;
    }

    public function traer_por_id_cliente($id_cliente)
    {
        $query = $this->db->get_where('venta', array('fk_id_cliente' => $id_cliente));
        return $query->result();
    }

    public function get_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM venta where id_venta = ?", array($id));
        return $query->row();
    }

}