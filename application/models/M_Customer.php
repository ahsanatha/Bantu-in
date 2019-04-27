<?php 

class M_Customer extends CI_Model{

    public function regisCst($data)
    {
        $this->db->insert('pelanggan',$data);
    }

    public function getAss()
	{ //data semua asisten
		$filter = $this->input->get('find');
		$this->db->like('nama', $filter);
 		return $this->db->get("asisten");
    }
    
    public function cekCst($data){
        return $this->db->get_where('pelanggan', $data);
    }
    public function getCst($id){
        return $this->db->get_where('pelanggan',['idPelanggan'=>$id])->row_array();
    }
    public function editCst($data){
        $query = 'update pelanggan set nama = "'.$data["nama"].'",instansi = "'.$data["instansi"].'",noHp = "'.$data["noHp"].'" where idPelanggan = '.$_SESSION['idUser'].' ';
        $this->db->query($query);
    }
}?>