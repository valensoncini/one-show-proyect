<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_Model');
        $this->load->model('Clientes_Model');
    }


    public function index()
    {
        if($this->session->userdata('logged') == true)
        {
            if($this->session->userdata('rol') == 'admin')
            {
                $data = [
                    'path' => 'home/home_admin'
                ];
                $this->load->view('auth/main_auth', $data);

            }else{
                $data = [
                    'heading' => 'Error',
                    'message' => 'Usted no es un Administrador'
                ];
                $this->load->view('errors/cli/error_404', $data);

            }
        }else{
            $data = [
                'heading' => 'Error',
                'message' => 'Usted no es un Administrador'
            ];
            $this->load->view('errors/cli/error_404', $data);

        }
        


    }


    public function forms_registro()
    {
        $data = [
            'path' => 'auth/registro'
        ];

        $this->load->view('auth/main_auth', $data);
    }

    public function registro()
    {
        //Vista que va a ver el cliente principalmente, el cual guardo sus datos como cliente y los datos de usuario

        $this->form_validation->set_rules('nombre_completo', 'NOMBRE COMPLETO', 'required');
        $this->form_validation->set_rules('mail', 'EMAIL', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('iden', 'IDENTIFICACION', 'required|max_length[15]|min_length[8]');
        $this->form_validation->set_rules('tel', 'TELEFONO', 'required');
        $this->form_validation->set_rules('pass', 'CONTRASEÑA', 'required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('confirm-pass', 'CONFIRMAR CONTRASEÑA', 'required|matches[pass]');

        if($this->form_validation->run() == false)
        {
            $this->session->set_flashdata('errors', $this->form_validation->error_array());
            redirect('Auth/forms_registro');
        }

        $user_data = [
            'email' => $this->input->post('mail'),
            'contraseña' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
            'rol' => 'cliente'
        ];

        $client_data = [
            'email' => $this->input->post('mail'),
            'nombre_completo' => $this->input->post('nombre_completo'),
            'identificacion' => $this->input->post('iden'),
            'telefono' => $this->input->post('tel')
        ];


        $this->Auth_Model->insertar_usuario($user_data);
        $this->Auth_Model->insertar_cliente($client_data);

        redirect('Auth/forms_login');


    }

    public function forms_login()
    {
        $data = [
            'path' => 'auth/login'
        ];

        $this->load->view('auth/main_auth', $data);
    }

    
    public function login()
    {
        

        $this->form_validation->set_rules('email', 'EMAIL', 'required');
        $this->form_validation->set_rules('pass', 'CONTRASEÑA', 'required');

        if($this->form_validation->run() == false)
        {
            $this->session->set_flashdata('errors', $this->form_validation->error_array());
            redirect('Auth/forms_login');
        }

        $user = $this->Auth_Model->traer_por_mail($this->input->post('email'));
        $cliente = $this->Clientes_Model->get_by_email($this->input->post('email'));

        if($user != null && password_verify($this->input->post('pass'), $user->contraseña))
        {
            $this->session->set_userdata('id_user', $user->id_user);
            $this->session->set_userdata('cliente', $cliente->id_cliente);
            $this->session->set_userdata('email', $user->email);
            $this->session->set_userdata('rol', $user->rol);
            $this->session->set_userdata('logged', true);

            if($user->rol == 'admin')
            {   
                $this->load->view('home/home_admin');
            }elseif($user->rol == 'cliente')
            {
               redirect('User_Cliente/index');
            }

        }else{
            $this->session->set_flashdata('errors', ['login_error' => 'Credenciales Incorrectos']);
            redirect('Auth/forms_login');
        }



    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('User_Cliente/index');
    }



}