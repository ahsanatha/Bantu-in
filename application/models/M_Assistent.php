<?php 

class M_Assistent extends CI_Model{

    public function regisAst($data)
    {
        $this->db->insert('asisten',$data);
    }
    public function cekAst($data){
        return $this->db->get_where('asisten', $data);
    }
    public function getAst($id){
        return $this->db->get_where('asisten',['idAsisten'=>$id])->row_array();
    }
    public function editAst($data){
        $query = 'update asisten set nama = "'.$data['nama'].'",nik = "'.$data['nik'].'",tglLahir = "'.$data['tglLahir'].'",alamat = "'.$data['alamat'].'",deskripsi = "'.$data['deskripsi'].'",nomorTelpon = "'.$data['nomorTelpon'].'",instansi = "'.$data['instansi'].'" where idAsisten = '.$_SESSION['idUser'].' ';
        $this->db->query($query);
    }
    public function getAss($kat)
    { //data semua asisten
        $this->db->where('kategori',$kat);
		return $this->db->get('asisten');
    }
}?>