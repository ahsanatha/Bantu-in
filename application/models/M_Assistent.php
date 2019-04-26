<?php 

class M_Assistent extends CI_Model{

    public function regisAst($data)
    {
        $this->db->insert('asisten',$data);
    }
}?>