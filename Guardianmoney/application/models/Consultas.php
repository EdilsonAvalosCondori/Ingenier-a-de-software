<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }

    public function register($username, $password) {
        $data = array(
            'usuario' => $username,
            'password' => $password,
        );
        return $this->db->insert('usuarios', $data);
    }

    public function login($username, $password) {
        $this->db->where('usuario', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('usuarios');
        
        if ($query->num_rows() == 1) {
            return $query->row(); 
        } else {
            return false;
        }
    }
}
