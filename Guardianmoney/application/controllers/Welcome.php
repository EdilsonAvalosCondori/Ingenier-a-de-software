<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url')); // Cargar los helpers necesarios
        $this->load->library(array('form_validation', 'session')); // Cargar las librer���as necesarias
        $this->load->model(array('Consultas', 'Salario_model')); // Cargar los modelos correctamente
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    public function diego() {
        echo "hola Katia";
        $a = 3;
        $b = 10;
        $c = $a + $b;
        echo "$a + $b = $c";
    }

    public function verificaingreso() {
        $username = $this->input->post("user");
        $password = $this->input->post("pass");
        $resultado = $this->Consultas->login($username, $password);
        if ($resultado) {
            // Set session data
            $this->session->set_userdata('username', $username);
            $this->session->set_userdata('user_id', $resultado->id); // Aseg���rate de guardar el ID del usuario en la sesi���n
            $this->session->set_userdata('logged_in', TRUE);

            // Redirigir al panel
            redirect('welcome/panel');
        } else {
            // Configurar un mensaje de error y redirigir a la p���gina de inicio de sesi���n
            $this->session->set_flashdata('error', 'Incorrect username or password');
            redirect('welcome/index');
        }
    }

    public function panel() {
        // Check if user is logged in
        if (!$this->session->userdata('logged_in')) {
            redirect('welcome/index');
        }
        $this->load->view('panel1');
    }

    public function logout() {
        // Destroy session data
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('welcome/index');
    }

    public function show_register() {
        $this->load->view('register');
    }

    public function register() {
        // Set form validation rules
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed
            $this->load->view('register');
        } else {
            // Get input values
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Register the user
            if ($this->Consultas->register($username, $password)) {
                // Set success message and redirect to login
                $this->session->set_flashdata('success', 'Usuario registrado exitosamente.');
                redirect('welcome/index');
            } else {
                // Set error message and reload the register view
                $this->session->set_flashdata('error', 'Error al registrar el usuario. Intentalo de nuevo.');
                $this->load->view('register');
            }
        }
    }
}
?>


