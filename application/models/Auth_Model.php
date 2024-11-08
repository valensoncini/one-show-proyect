<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertar_usuario($user_data)
    {
        $this->db->insert('users', $user_data);
    }

    public function insertar_cliente($client_data)
    {
        $this->db->insert('clientes', $client_data);

    }


    public function traer_por_mail($email)
    {
        $query = $this->db->get_where('users', ['email' => $email]);
        return $query->row();
    }


    public function actualizar_user($id, $data)
    {
        $this->db->update('users',$data, ['id_user' => $id] );
    }

    public function eliminar_user($id)
    {
        $this->db->delete('users', ['id_user' => $id] );
    }
	
	

}


