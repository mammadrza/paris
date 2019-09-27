<?php


class FrontModel extends CI_Model{

    public function getAll(){
        return $this->db->order_by('id','DESC')->where('status','active')->get('post')->result_array();
    }

    public function getSingle($id)
    {
        return $this->db->where('id',$id)->get('post')->row_array();
    }

}