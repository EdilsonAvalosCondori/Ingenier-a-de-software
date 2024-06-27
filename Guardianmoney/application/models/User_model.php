<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function get_user_by_email($email){
        $this->db->where('usuario', $email); // Cambiado 'email' a 'usuario' para coincidir con tu base de datos
        $query = $this->db->get('usuarios');
        return $query->row();
    }
}
?>
