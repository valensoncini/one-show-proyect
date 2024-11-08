<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Contacto_Model');
    }


    public function index()
    {

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }
        $contactos = $this->Contacto_Model->get_all_consulta();

        $data = [
            'path' => 'contacto/index',
            'contacts' => $contactos

        ];

        $this->load->view('contacto/main', $data);
    }


    public function ver_contacto($id)
    {

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }
        $retorno = $this->Contacto_Model->get_contacto_by_id($id);

        $data = [
            'path' => 'contacto/ver',
            'contacto' => $retorno
        ];
        $this->load->view('contacto/main', $data);
    }




}