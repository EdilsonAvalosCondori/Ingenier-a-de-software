<?php
class Salario_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function insertar_salario($data) {
        return $this->db->insert('salarios', $data);
    }

    public function insertar_presupuesto($data) {
        return $this->db->insert('presupuestos', $data);
    }

    public function insertar_ahorros($data) {
        return $this->db->insert('ahorros', $data);
    }

    public function obtener_salarios() {
        $query = $this->db->get('salarios');
        return $query->result();
    }

    public function obtener_presupuestos() {
        $query = $this->db->get('presupuestos');
        return $query->result();
    }

    public function obtener_ahorros() {
        $query = $this->db->get('ahorros');
        return $query->result();
    }
}
?>




