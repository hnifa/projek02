<?php
class Merk_model extends CI_Model {
    public $id, $nama, $produk;

    public function getAll(){
        $query = $this->db->get('merk');
        return $query->result();
    }
    public function getById($id){
        $query = $this->db->get_where('merk', ['id' => $id]);
        return $query->row();
    } 
    public function simpan($data){
        $sql = "INSERT INTO merk (nama, produk) VALUES (?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE merk SET nama=?, produk=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        $sql = "DELETE FROM merk WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>