<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transacciones extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Transacciones_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'session'));
    }

    public function index(){
        $this->load->view('transacciones/index');
    }

    public function agregar_transaccion($tipo){
        $this->form_validation->set_rules('monto', 'Monto', 'required|numeric');
        
        if ($this->form_validation->run() == FALSE) {
            $data['tipo'] = $tipo;
            $this->load->view('transacciones/agregar_transaccion', $data);
        } else {
            $data = array(
                'usuario_id' => $this->session->userdata('user_id'), // Asumiendo que tienes el id del usuario en la sesión
                'tipo' => $tipo,
                'monto' => $this->input->post('monto'),
                'fecha' => date('Y-m-d'),
                'pagado' => $this->input->post('pagado') ? 1 : 0
            );
            $this->Transacciones_model->insertar_transaccion($data);
            $this->session->set_flashdata('success', 'Transacción agregada correctamente');
            redirect('transacciones/index');
        }
    }

    public function pago_agua(){
        $this->agregar_transaccion('Pago Agua');
    }

    public function pago_luz(){
        $this->agregar_transaccion('Pago Luz');
    }

    public function pago_internet(){
        $this->agregar_transaccion('Pago Internet');
    }

    public function caprichos(){
        $this->agregar_transaccion('Caprichos');
    }

    public function agregar_otro_gasto(){
        $this->agregar_transaccion('Otro Gasto');
    }

    public function resumen(){
        $data['ingresos'] = $this->Transacciones_model->obtener_ingresos();
        $data['gastos'] = $this->Transacciones_model->obtener_gastos();
        $data['transacciones'] = $this->Transacciones_model->obtener_transacciones();
        $this->load->view('transacciones/resumen', $data);
    }
}
?>




