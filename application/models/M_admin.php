<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
    public function __constructor($db){
        $this->db = $db;
        parent::__construct();
    }

    public function getData($act,$param){
        if($act == 'login'){
            $condition = "email =" . "'" . $param['username'] . "' AND " . "password =" . "'" . md5($param['password']) . "'";
            $this->db->select('*');
            $this->db->from('app_users');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            print_r($this->db->last_query());die;
            if ($query->num_rows() == 1) {
                return true;
            } else {
                return false;
            }
        }elseif($act == 'in_access_login'){
            $condition = "email =" . "'" . $param['username'] . "'";
            $this->db->select('usr.id,usr.username,usr.email,usr.user_role,url.categori');
            $this->db->from('app_users usr');
            $this->db->join('app_users_role url', 'url.id = usr.user_role', 'left');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            print_r($this->db->last_query());die;
            if ($query->num_rows() == 1) {
                return $query->result();
            } else {
                return false;
            }
        }
    }
}