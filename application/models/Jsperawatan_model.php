<?php
class Jsperawatan_model extends CI_Model {
    public $id, $nama;

    public function getAll(){
        $query = $this->db->get('jenis_perawatan');
        return $query->result();
    }
    public function getById($id){
        $query = $this->db->get_where('jenis_perawatan', ['id' => $id]);
        return $query->row();
    } 
    public function simpan($data){
        $sql = "INSERT INTO jenis_perawatan (nama) VALUES (?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE jenis_perawatan SET nama=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        $sql = "DELETE FROM jenis_perawatan WHERE id=?";
        $this->db->query($sql, $data);
    }
}

?>