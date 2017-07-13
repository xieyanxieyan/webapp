<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/12
 * Time: 13:58
 */
class User_model extends CI_Model
{
    public function get_by_username_password($username,$password){
        return $this->db->get_where('t_user',array(
            'username'=>$username,
            'password'=>$password
        ))->row();
    }
    public function check_username($username){
        return $this->db->get_where('t_user',array(
           'username'=>$username
        ))->row();
    }
    public function insert_user($username,$password)
    {
       $data = array(
           'username'=>$username,
           'password'=>$password
       );
        $this->db->insert('t_user',$data);
        return $this->db->affected_rows();
    }

}