<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all()
    {
        $query = $this->db->get('evento');
        return $query->result();
    }

    public function get_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM evento where idEvento = ?", array($id));
        return $query->row();
    }


    public function crear_evento($data_producto)
    {
        $this->db->insert('evento', $data_producto);
    }

    public function actualizar_evento($id, $data)
    {
        $this->db->update('evento',$data, ['idEvento' => $id] );
    }

    public function eliminar_evento($id)
    {
        $this->db->delete('evento', ['idEvento' => $id] );
    }

    public function actualizar_disponibilidad($id, $nueva_dispo)
    {
        $this->db->where('idEvento', $id);
        $this->db->update('evento', array('disponibilidad' => $nueva_dispo));

    }

}