<?php

    class Login extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelLogin');
        }

        public function index()
        {
            if($this->session->userdata('masuk') != TRUE)
            {
                $this->load->view('v_login/index');
            }else{
                $base = base_url();
                redirect($base.'dashboard/');
            }
            
        }

        public function auth()
        {
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $cekEmail = $this->ModelLogin->cekEmail($email);
            if($cekEmail -> num_rows() > 0)
            {
                $data = $cekEmail->row_array();
                $hashPassword = $data['password'];

                if( password_verify($password,$hashPassword) )
                {
                    
                    $password = $hashPassword;
                    $authuser = $this->ModelLogin->authUser($email,$password);
                    if($authuser -> num_rows() > 0)
                    {
                        $date = date('d-m-Y H:i:s');
                        $this->session->set_userdata('masuk',TRUE);
                        $this->session->set_userdata('ses_id', $data['username']);
                        $this->session->set_userdata('ses_email',$data['email']);

                        //Update Last Login
                        $queryUpdate = "UPDATE tbl_user SET last_login = ? Where email = ?";
                        $this->db->query($queryUpdate,array($date,$data['email']));
                        $base = base_url();
                        redirect($base.'dashboard/');
                    }else{
                        $this->session->set_flashdata('message','sorry, Password not valid !');
                        $base = base_url();
                        redirect($base);
                    }
                }else{
                    $this->session->set_flashdata('message','sorry, Password not valid !');
                    $base = base_url();
                    redirect($base);
                }
                
            }else{
                $this->session->set_flashdata('message','Sorry, Email not Found');
                $base = base_url();
                redirect($base); 
            }
        }

        public function logout()
        {
            $this->session->sess_destroy();
            $base = base_url();
            redirect($base);
        }
    }