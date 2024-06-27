<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function get_ingresos_by_user($user_id){
        $this->db->where('usuario_id', $user_id);
        $query = $this->db->get('salarios');
        return $query->result();
    }

    public function get_presupuestos_by_user($user_id){
        $this->db->where('usuario_id', $user_id);
        $query = $this->db->get('presupuestos');
        return $query->result();
    }

    public function get_ahorros_by_user($user_id){
        $this->db->where('usuario_id', $user_id);
        $query = $this->db->get('ahorros');
        return $query->result();
    }

    public function get_transacciones_by_user($user_id){
        $this->db->where('usuario_id', $user_id);
        $query = $this->db->get('transacciones');
        return $query->result();
    }
}
?>

