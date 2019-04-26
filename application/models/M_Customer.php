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
}?>