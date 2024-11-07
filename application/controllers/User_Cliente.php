<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User_Cliente extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Eventos_Model');
        $this->load->model('UserCliente_Model');
        $this->load->model('Clientes_Model');
        $this->load->model('Contacto_Model');
    }


    public function index()
    {
        $data = [
            'eventos' => $this->Eventos_Model->get_all(),
            'path' => 'user_cliente/index'
          
        ];


        $this->load->view('user_cliente/home', $data);

    }


    public function compra($id_evento)
    {

        $result = $this->Eventos_Model->get_by_id($id_evento);

        if($result == null){
            show_404();
        }

        $data = [
            'evento' => $result,
            'path' => 'user_cliente/compras'
           
        ];

        $this->load->view('user_cliente/home', $data);

    }


    public function confirmar_compra($id_evento)
    {


        if($this->session->userdata('logged') == false)
        {
            $this->session->set_flashdata('warning_log', 'Antes de Comprar debe iniciar sesion o Registrarse!');
            redirect('Auth/forms_login');
        }



        $result = $this->Eventos_Model->get_by_id($id_evento);
        $cliente = $this->Clientes_Model->get_by_email($this->session->userdata('email'));
        
        $pdf_compra = [
            'nombre' => $result->nombre,
            'fecha' => $result->fecha,
            'cant_tickets' => $this->input->post('cantidad'),
            'total' => $result->precio * $this->input->post('cantidad')
        ];

        $data = [
            'fk_id_cliente' => $cliente->id_cliente,
            'fk_id_evento' => $id_evento,
            'cant_tickets' => $this->input->post('cantidad'),
            'total' => $result->precio * $this->input->post('cantidad'),
            'estado' => 'activa'
        ];

      //  $this->session->set_flashdata('pdfPath', base_url('uploads/comprobante_compra_' . time() . '.pdf'));


        $nueva_dispo = $result->disponibilidad - $this->input->post('cantidad');
        $this->Eventos_Model->actualizar_disponibilidad($id_evento, $nueva_dispo);
        $id =  $this->UserCliente_Model->agregar_venta($data);
        $this->session->set_flashdata('compra_success', 'compra realizada!');

        redirect('User_Cliente/mostrar_resumen/'. $id);
        
    }


    public function mostrar_resumen($id)
    {

        $result = $this->UserCliente_Model->get_by_id($id);
        $evento = $this->Eventos_Model->get_by_id($result->fk_id_evento);
        $cliente = $this->Clientes_Model->get_by_id($result->fk_id_cliente);

        if($result == null || $evento == null || $cliente == null)
        {
            show_404();
        }

        $data = [
            'venta' => $result,
            'evento' => $evento,
            'cliente' => $cliente
        ];

        $this->load->view('user_cliente/resumen_compra', $data);

    }

    /*
    public function generar_pdf($data_compra)
    {
        require_once(APPPATH . 'libraries/TCPDF-main/tcpdf.php');

        $pdf = new TCPDF();
        $pdf->AddPage();

        $pdf->SetFont('helvetica', '', 12);

        $html = "<h1>RESUMEN DE COMPRA</h1>
                <p>Gracias por tu compra. Aqui tienes el resumen de tu compra!</p>
                <p><strong>Evento:</strong>" . $data_compra['nombre'] . "</p>
                <p><strong>Fecha:</strong> " . $data_compra['fecha'] . "</p>
                <p><strong>Cantidad de Tickets:</strong>" . $data_compra['cant_tickets'] . "</p>
                <p><strong>Total:</strong>" . $data_compra['total'] . "</p>";
    
        
        $pdf->writeHTML($html, true, false, true, false, '');      
        $pdfPath = FCPATH . 'uploads/comprobante_compra_' . time() . '.pdf';
        $pdf->Output($pdfPath, 'F'); // Guardar en el servidor
        
        return  $pdfPath;    

    }*/


    public function mostrar_mis_entradas($id_cliente)
    {
        
        $result_ventas = $this->UserCliente_Model->traer_por_id_cliente($id_cliente);

        $eventos = [];

        foreach ($result_ventas as $venta) 
        {
            $evento = $this->Eventos_Model->get_by_id($venta->fk_id_evento);
            if($evento)
            {

                $eventos[] = [
                    'evento' => $evento,
                    'venta' => $venta
                ];
            }
        }

        $data = [
            'path' => 'user_cliente/mis_entradas',
            'evento' => $eventos
            
        ];


        //$pdfPath = $this->generar_pdf($pdf_compra);

       

        $this->load->view('user_cliente/home', $data);
        
        

    }


    public function show_eventos()
    {
        $data = [
            'path' => 'user_cliente/shows',
            'eventos' => $this->Eventos_Model->get_all()
            
        ];

        $this->load->view('user_cliente/home', $data);

    }

    public function preguntas_frecuentes()
    {
        $data = [
            'path' => 'user_cliente/preguntas',
        ];

        $this->load->view('user_cliente/home', $data);

    }

    public function contacto()
    {
        $data = [
            'path' => 'user_cliente/contacto'
        ];

        $this->load->view('user_cliente/home', $data);

    }

    public function recibir_contacto()
    {
        $this->form_validation->set_rules('name', 'NOMBRE COMPLETO', 'required');
        $this->form_validation->set_rules('mail', 'EMAIL', 'required');
        $this->form_validation->set_rules('tel', 'TELEFONO', 'required|max_length[15]|min_length[8]');
        $this->form_validation->set_rules('consulta', 'CONSULTA', 'required');

        if($this->form_validation->run() == false)
        {
            $this->session->set_flashdata('errors_consulta', $this->form_validation->error_array());
            redirect('User_Cliente/contacto');
        }


        $data_consulta = [
            'nombre_contacto' => $this->input->post('name'),
            'email_contacto' => $this->input->post('mail'),
            'telefono_contacto' => $this->input->post('tel'),
            'consulta' => $this->input->post('consulta')
        ];
        
        $this->Contacto_Model->crear_consulta($data_consulta);
        $this->session->set_flashdata('success', 'Consulta recibida! Pronto nos estaremos contactando!');
        redirect('User_Cliente/contacto');





    }



    

    
}