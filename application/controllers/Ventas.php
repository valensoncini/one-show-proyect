<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ventas_Model');
        $this->load->model('Eventos_Model');
       
    }

    public function index()
    {

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }
        $data = [
            'ventas' => $this->Ventas_Model->get_all(),
            'path' => 'ventas/index'
        ];

        $this->load->view('ventas/main', $data);
    }

    public function ver_venta($id)
    {

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }
        $result = $this->Ventas_Model->get_by_id($id);

        if($result == null){
            show_404();
        }

        $data = [
            'venta' =>  $result,
            'path' => 'ventas/ver'
        ];

        $this->load->view('ventas/main', $data);
    }


    public function vista_actualizar($id)
    {

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }

        $result = $this->Ventas_Model->get_by_id($id);

        if($result == null){
            show_404();
        }

        $data = [
            'venta' =>  $result,
            'path' => 'ventas/actualizar'
        ];

        $this->load->view('ventas/main', $data);

    }

    
    public function actualizar_venta($id)
    {

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }
        $result_venta = $this->Ventas_Model->get_by_id($id);
        $result_evento = $this->Eventos_Model->get_by_id($result_venta->fk_id_evento);

        $data = [
            'cant_tickets' => $this->input->post('cantidad'),
            'total' => $result_evento->precio * $this->input->post('cantidad'),
            'estado' => $this->input->post('estado')
        ];

        $this->Ventas_Model->actualizar_venta($id, $data);
        redirect('Ventas/index');
  
    }


}