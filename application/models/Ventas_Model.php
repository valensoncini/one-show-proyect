<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all()
    {
        $query = $this->db->get('venta');
        return $query->result();
    }

    public function get_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM venta where id_venta = ?", array($id));
        return $query->row();
    }


    public function actualizar_venta($id, $data)
    {
        $this->db->update('venta',$data, ['id_venta' => $id] );
    }

    public function eliminar_venta($id)
    {
        $this->db->delete('venta', ['id_venta' => $id] );
    }

}