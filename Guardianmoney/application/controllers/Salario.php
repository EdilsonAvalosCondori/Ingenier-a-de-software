<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salario extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Salario_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'session'));
    }

    public function index(){
        $this->load->view('salario/panel'); // Esta es la vista correcta del panel
    }

    public function ingresar(){
        $this->form_validation->set_rules('salario', 'Salario', 'required|numeric');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('salario/ingresar');
        } else {
            $data = array(
                'salario' => $this->input->post('salario'),
                'usuario_id' => $this->session->userdata('user_id') // Aseg��rate de que el ID del usuario est�� en la sesi��n
            );
            $this->Salario_model->insertar_salario($data);
            $this->session->set_flashdata('success', 'Salario ingresado correctamente');
            redirect('salario'); // Redirigir a la vista del panel con todas las opciones
        }
    }

    public function presupuesto(){
        $this->form_validation->set_rules('categoria', 'Categor��a', 'required');
        $this->form_validation->set_rules('monto', 'Monto', 'required|numeric');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('salario/presupuesto');
        } else {
            $data = array(
                'usuario_id' => $this->session->userdata('user_id'), // Asumiendo que tienes el id del usuario en la sesi��n
                'categoria' => $this->input->post('categoria'),
                'monto' => $this->input->post('monto'),
                'fecha' => date('Y-m-d')
            );
            $this->Salario_model->insertar_presupuesto($data);
            $this->session->set_flashdata('success', 'Presupuesto ingresado correctamente');
            redirect('salario'); // Redirigir a la vista del panel con todas las opciones
        }
    }

    public function ahorros(){
        $this->form_validation->set_rules('monto', 'Monto', 'required|numeric');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('salario/ahorros');
        } else {
            $data = array(
                'usuario_id' => $this->session->userdata('user_id'), // Asumiendo que tienes el id del usuario en la sesi��n
                'monto' => $this->input->post('monto'),
                'fecha' => date('Y-m-d')
            );
            $this->Salario_model->insertar_ahorros($data);
            $this->session->set_flashdata('success', 'Ahorros ingresados correctamente');
            redirect('salario'); // Redirigir a la vista del panel con todas las opciones
        }
    }

    public function revision(){
        $user_id = $this->session->userdata('user_id'); // Obtener el ID del usuario de la sesi��n
        $data['salarios'] = $this->Salario_model->obtener_salarios($user_id);
        $data['presupuestos'] = $this->Salario_model->obtener_presupuestos($user_id);
        $data['ahorros'] = $this->Salario_model->obtener_ahorros($user_id);
        $this->load->view('salario/revision', $data);
    }

    public function panel(){
        $this->load->view('salario/panel'); // Aseg��rate de que esta vista cargue el panel correcto
    }
}
?>











