<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Finance_model');
        $this->load->library('session');
    }

    public function index(){
        if(!$this->session->userdata('user_id')){
            redirect('login');
        }

        $user_id = $this->session->userdata('user_id');
        $data['ingresos'] = $this->Finance_model->get_ingresos_by_user($user_id);
        $data['presupuestos'] = $this->Finance_model->get_presupuestos_by_user($user_id);
        $data['ahorros'] = $this->Finance_model->get_ahorros_by_user($user_id);
        $data['transacciones'] = $this->Finance_model->get_transacciones_by_user($user_id);

        $this->load->view('dashboard', $data);
    }
}
?>

