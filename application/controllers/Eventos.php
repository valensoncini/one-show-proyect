<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Eventos_Model');
    }

    public function index()
    {

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }
        $data = [
            'eventos' => $this->Eventos_Model->get_all(),
            'path' => 'eventos/index'
        ];

        $this->load->view('eventos/main', $data);
    }

    public function ver_evento($id)
    {

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }
        $result = $this->Eventos_Model->get_by_id($id);

        if($result == null){
            show_404();
        }

        $data = [
            'evento' =>  $result,
            'path' => 'eventos/ver'
        ];

        $this->load->view('eventos/main', $data);
    }

    public function crear()
    {

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }

        $data = [
            'path' => 'eventos/crear'
        ];

        $this->load->view('eventos/main', $data);

    }


    public function guardar_evento()
    {

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }
        $img_predeterminada = 'no-image.png';

        if(!empty($_FILES['imagen']['name']))
        {
            $config['upload_path'] = './assets/imgs/uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|doc|docx';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('imagen')) 
            {
                $imagen =  $this->upload->data('file_name');

                $data_evento = [
                    'nombre' => $this->input->post('nombre'),
                    'precio' => $this->input->post('precio'),
                    'descripcion' => $this->input->post('desc'),
                    'fecha' => $this->input->post('fecha'),
                    'disponibilidad' => $this->input->post('dispo'),
                    'estado' => 'activo',
                    'lugar' => $this->input->post('lugar'),
                    'imagen' => $imagen

                ];


             } else 
             {
                $this->session->set_flashdata('image_errors', $this->upload->display_errors());
                redirect('Eventos/crear');
             }

        }else
        {
            $data_evento = [
                'nombre' => $this->input->post('nombre'),
                'precio' => $this->input->post('precio'),
                'descripcion' => $this->input->post('desc'),
                'fecha' => $this->input->post('fecha'),
                'disponibilidad' => $this->input->post('dispo'),
                'estado' => 'activo',
                'lugar' => $this->input->post('lugar'),
                'imagen' => $img_predeterminada
            ];


        }

        $this->Eventos_Model->crear_evento($data_evento);
        redirect('Eventos/index');
    
    }

    public function actualizar($id)
    {

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }

        $result = $this->Eventos_Model->get_by_id($id);

        if($result == null){
            show_404();
        }

        $data = [
            'evento' =>  $result,
            'path' => 'eventos/actualizar'
        ];

        $this->load->view('eventos/main', $data);

    }

    
    public function actualizar_evento($id)
    { 

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }

                $data_evento = [
                    'nombre' => $this->input->post('nombre'),
                    'precio' => $this->input->post('precio'),
                    'descripcion' => $this->input->post('desc'),
                    'fecha' => $this->input->post('fecha'),
                    'disponibilidad' => $this->input->post('dispo'),
                    'estado' => $this->input->post('estado'),
                    'lugar' => $this->input->post('lugar')
                ];

       
         
        $this->Eventos_Model->actualizar_evento($id, $data_evento);
        redirect('Eventos/index');
    }


    public function eliminar($id)
    {

        if($this->session->userdata('rol') != 'admin')
        {
            show_404();
        }
        
        $this->Eventos_Model->eliminar_evento($id);
        redirect('Eventos/index');
    }

    


}