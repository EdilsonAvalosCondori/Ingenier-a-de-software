<?php
class Transacciones_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function insertar_transaccion($data) {
        return $this->db->insert('transacciones', $data);
    }

    public function obtener_ingresos() {
        $this->db->select_sum('monto');
        $this->db->where('tipo', 'Ingreso');
        $query = $this->db->get('transacciones');
        return $query->row()->monto;
    }

    public function obtener_gastos() {
        $this->db->select_sum('monto');
        $this->db->where('tipo !=', 'Ingreso');
        $query = $this->db->get('transacciones');
        return $query->row()->monto;
    }

    public function obtener_transacciones() {
        $query = $this->db->get('transacciones');
        return $query->result();
    }
}
?>


