function eksport_data() {
$this->db->select('kd_model, nama_model,
deskripsi');
$this->db->from('t_model');
return $this->db->get();
}