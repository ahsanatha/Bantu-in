<?php 

class M_Customer extends CI_Model{

    public function regisCst($data)
    {
        $this->db->insert('pelanggan',$data);
    }
}?>