<?php

class AdminModel extends CI_Model{


    public function checkUser($username,$password)
    {
       return $this->db->where('userName',$username)->where('password',$password)->get('admin')->row_array();
    }


    public function insertNews($data){
        $this->db->insert('post',$data);
    }

    public function getAllPost(){
        return $this->db->order_by('id','DESC')->get('post')->result_array();
    }

    public function deletePost($id)
    {
        $this->db->where('id', $id)->delete('post');
    }

    public function getSinglePost($id)
    {
       return $this->db->where('id',$id)->get('post')->row_array();
    }

    public function updateNews($id,$data)
    {
        $this->db->where('id',$id)->update('post', $data);
    }


}