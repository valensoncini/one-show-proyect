<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Clientes_Model');
        $this->load->model('Auth_Model');
    }

    public function index()
    {
        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }

        $data = [
            'clientes' => $this->Clientes_Model->get_all(),
            'path' => 'clientes/index'
        ];

        $this->load->view('clientes/main', $data);
    }

    public function ver_cliente($id)
    {
        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }
        $result = $this->Clientes_Model->get_by_id($id);

        if($result == null){
            show_404();
        }

        $data = [
            'cliente' =>  $result,
            'path' => 'clientes/ver'
        ];

        $this->load->view('clientes/main', $data);
    }


    public function vista_actualizar($id)
    {
        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
            
        }

        $result = $this->Clientes_Model->get_by_id($id);

        if($result == null){
            show_404();
        }

        $data = [
            'cliente' =>  $result,
            'path' => 'clientes/actualizar'
        ];

        $this->load->view('clientes/main', $data);

    }

    
    public function actualizar_client($id)
    {

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }
        $data_cliente = [
            'nombre_completo' => $this->input->post('nombre_completo'),
            'identificacion' => $this->input->post('identificacion'),
            'email' => $this->input->post('email'),
            'telefono' => $this->input->post('tel'),
            'estado' => $this->input->post('estado')
        ];

        $data_user = [
            'email' => $this->input->post('email'),
        ];
        $this->Auth_Model->actualizar_user($id, $data_user);
        $this->Clientes_Model->actualizar_cliente($id, $data_cliente);
        redirect('Clientes/index');
    }


    public function eliminar($id)
    {

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }
        $this->Auth_Model->eliminar_user($id);
        $this->Clientes_Model->eliminar_cliente($id);
        redirect('Clientes/index');
    }

    


}