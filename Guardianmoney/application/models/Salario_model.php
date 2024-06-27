<?php
class Salario_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    // Método para insertar salario con usuario_id
    public function insertar_salario($data) {
        return $this->db->insert('salarios', $data);
    }

    // Método para insertar presupuesto con usuario_id
    public function insertar_presupuesto($data) {
        return $this->db->insert('presupuestos', $data);
    }

    // Método para insertar ahorros con usuario_id
    public function insertar_ahorros($data) {
        return $this->db->insert('ahorros', $data);
    }

    // Método para obtener salarios filtrados por usuario_id
    public function obtener_salarios($user_id) {
        $this->db->where('usuario_id', $user_id);
        $query = $this->db->get('salarios');
        return $query->result();
    }

    // Método para obtener presupuestos filtrados por usuario_id
    public function obtener_presupuestos($user_id) {
        $this->db->where('usuario_id', $user_id);
        $query = $this->db->get('presupuestos');
        return $query->result();
    }

    // Método para obtener ahorros filtrados por usuario_id
    public function obtener_ahorros($user_id) {
        $this->db->where('usuario_id', $user_id);
        $query = $this->db->get('ahorros');
        return $query->result();
    }
}
?>






