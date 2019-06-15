<?php

    class ModelLogin extends CI_Model{

        public function cekEmail($email)
        {
            $sql = "SELECT * from tbl_user where email = ?";
            $querybind = $this->db->query($sql,$email);
            return $querybind;
        }

        public function authUser($email,$password)
        {
            $sql = "SELECT * from tbl_user where email = ? and password = ?";
            $querybind = $this->db->query($sql,array($email,$password));
            return $querybind;
        }
    }