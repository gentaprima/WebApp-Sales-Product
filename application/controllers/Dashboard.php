<?php
    class Dashboard Extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            if($this->session->userdata('masuk') != TRUE)
            {
                redirect(base_url());
            }
            $this->load->model('ModelDashboard');
        }

        // <-- INDEX DASHBOARD -->

        public function index()
        {
            $data['activehome'] = "active";
            $data['title'] = "Home Dashboard";
            $data['channel'] = $this->ModelDashboard->getDataChannel();
            $data['product'] = $this->ModelDashboard->getDataProduct();
            $data['business'] = $this->ModelDashboard->getDataBusiness();
            $this->load->view('template/header',$data);
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('template/mobile-menu');
            $this->load->view('dashboard/index',$data);
            $this->load->view('template/footer');
        }

        public function insertBusiness()
        {
            $tanggal = date('d');
            $bulan = date('M');
            $sales = htmlspecialchars($_POST['sales']);
            $lokasi = htmlspecialchars($_POST['lokasi']);
            $channel = htmlspecialchars($_POST['channel']);
            $pelanggan = htmlspecialchars($_POST['pelanggan']);
            $layanan = htmlspecialchars($_POST['layanan']);
            $bandwith = htmlspecialchars($_POST['bandwith']);
            $prospek = htmlspecialchars($_POST['prospek']);
            $tgl = htmlspecialchars($_POST['date']);


            if(!empty($sales) && !empty($lokasi) && !empty($channel) && !empty($pelanggan) && !empty($layanan) && !empty($bandwith) && !empty($prospek))
            {
                if($prospek == "deal")
                {
                    $sendToModel = $this->ModelDashboard->insertBusinessDeal($tanggal,$bulan,$sales,$lokasi,$channel,$pelanggan,$layanan,$bandwith,$prospek,$tgl);
                    if( $sendToModel )
                    {
                        $this->session->set_flashdata('message','Your data has been saved !');
                        redirect(base_url().'dashboard/');
                    }

                }else{
                    $sendToModel = $this->ModelDashboard->insertBusiness($tanggal,$bulan,$sales,$lokasi,$channel,$pelanggan,$layanan,$bandwith,$prospek,$tgl);
                    if( $sendToModel )
                    {
                        $this->session->set_flashdata('message','Your data has been saved !');
                        redirect(base_url().'dashboard/');
                    }
                }
            }else{
                $this->session->set_flashdata('failed','Data Cannot be Empty !!');
                redirect(base_url().'dashboard/');
            }
        }

        public function updateBusiness()
        {
            $id = $this->uri->segment(3);
            $tanggal = date('d');
            $bulan = date('M');
            $sales = htmlspecialchars($_POST['sales']);
            $lokasi = htmlspecialchars($_POST['lokasi']);
            $channel = htmlspecialchars($_POST['channel']);
            $pelanggan = htmlspecialchars($_POST['pelanggan']);
            $layanan = htmlspecialchars($_POST['layanan']);
            $bandwith = htmlspecialchars($_POST['bandwith']);
            $prospek = htmlspecialchars($_POST['prospek']);
            $tgl = htmlspecialchars($_POST['date']);

            if(!empty($sales) && !empty($lokasi) && !empty($channel) && !empty($pelanggan) && !empty($layanan) && !empty($bandwith) && !empty($prospek))
            {
                if($prospek == "deal")
                {
                    $sendToModel = $this->ModelDashboard->updateBusinessDeal($tanggal,$bulan,$sales,$lokasi,$channel,$pelanggan,$layanan,$bandwith,$prospek,$tgl,$id);
                    if( $sendToModel )
                    {
                        $this->session->set_flashdata('message','Your data has been Updated !');
                        redirect(base_url().'dashboard/');
                    }

                }else{
                    $sendToModel = $this->ModelDashboard->updateBusiness($tanggal,$bulan,$sales,$lokasi,$channel,$pelanggan,$layanan,$bandwith,$prospek,$tgl,$id);
                    if( $sendToModel )
                    {
                        $this->session->set_flashdata('message','Your data has been Updated !');
                        redirect(base_url().'dashboard/');
                    }
                }
            }else{
                $this->session->set_flashdata('failed','Data Cannot be Empty !!');
                redirect(base_url().'dashboard/');
            }

        }

        public function deleteBusiness()
        {
            $id = $this->uri->segment(3);
            $sendToModel = $this->ModelDashboard->deleteBusiness($id);
            if($sendToModel)
            {
                $this->session->set_flashdata('message','Your Data has Deleted !');
                redirect(base_url().'dashboard/');
            }
        }

        // <-- INDEX DASHBOARD -->

        // <-- Users -- >

        public function users()
        {
            $data['activeusers'] = "active";
            $data['title'] = "Users Dashboard";
            $data['users'] = $this->ModelDashboard->getDataUsers();
            $this->load->view('template/header',$data);
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('template/mobile-menu');
            $this->load->view('dashboard/v_users',$data);
            $this->load->view('template/footer');
        }

       

        public function insertUsers()
        {
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $hash = password_hash($password,PASSWORD_DEFAULT);  
            $cekUsers = $this->ModelDashboard->checkDataUsers($username,$email);
            if($cekUsers->num_rows() <= 0)
            {
                $sendToModel = $this->ModelDashboard->insertUsers($username,$email,$hash);
                if($sendToModel)
                {
                    $this->session->set_flashdata('message','Your data has been Saved !');
                    $base = base_url();
                    redirect($base.'dashboard/users');
                }
            }else{
                    $this->session->set_flashdata('failed','Sorry, The Email or Useraname has been used !!');
                    $base = base_url();
                    redirect($base.'dashboard/users');  
            }
            
        }

        public function updateUsers()
        {
            $id = $this->uri->segment(3);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $hash = password_hash($password,PASSWORD_DEFAULT);
            
            $sendToModel = $this->ModelDashboard->updateDataUsers($email,$hash,$id);
            if($sendToModel)
            {
                $this->session->set_flashdata('message','Your Data has been Updated !');
                redirect(base_url().'dashboard/users');
            }
        }

        public function deleteUsers()
        {
            $id = $this->uri->segment(3);
            $sendToModel = $this->ModelDashboard->deleteUsers($id);
            if($sendToModel)
            {
                $this->session->set_flashdata('message','Your data has been Deleted !');
                redirect(base_url().'dashboard/users/');
            }
        }

        // <-- Users -- >


        public function realisasi_sales()
        {
            $data['nama_sales'] = $this->ModelDashboard->getDataNameSales();
            $data['business_penawaran'] = $this->ModelDashboard->getDataBusinessBySales();
            $data['product'] = $this->ModelDashboard->getDataProduct();
            $data['count'] = $this->ModelDashboard->getDataCount();
            $data['activesales'] = "active";
            $data['title'] = "Table Realisasi Sales -  Dashboard";
            $this->load->view('template/header',$data);
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('template/mobile-menu');
            $this->load->view('dashboard/v_realisasi_sales',$data);
            $this->load->view('template/footer');
        }

        public function realisasi_product()
        {
            $id = $this->uri->segment(3);
            if(empty($id))
            {
                $data['product'] = $this->ModelDashboard->getDataProduct();
                $data['activeproduct'] = "active";
                $data['title'] = "Table Realisasi Product -  Dashboard";
                $this->load->view('template/header',$data);
                $this->load->view('template/sidebar');
                $this->load->view('template/topbar');
                $this->load->view('template/mobile-menu');
                $this->load->view('dashboard/v_realisasi_product',$data);
                $this->load->view('template/footer');
            }else{
                $data['penawaran'] = $this->ModelDashboard->getDataPenawaranByProduct($id);
                $data['visit'] = $this->ModelDashboard->getDataVisitByProduct($id);
                $data['deal'] = $this->ModelDashboard->getDataDealByProduct($id);
                $data['business'] = $this->ModelDashboard->getDataBusinessByProduct($id);
                $data['product'] = $this->ModelDashboard->getDataProduct();
                $data['countPenawaran'] = $this->ModelDashboard->getDataCountPenawaran($id)->num_rows();
                $data['countVisit'] = $this->ModelDashboard->getDataCountVisit($id)->num_rows();
                $data['countDeal'] = $this->ModelDashboard->getDataCountDeal($id)->num_rows();
                $data['activeproduct'] = "active";
                $data['title'] = "Table Realisasi Product -  Dashboard";
                $this->load->view('template/header',$data);
                $this->load->view('template/sidebar');
                $this->load->view('template/topbar');
                $this->load->view('template/mobile-menu');
                $this->load->view('dashboard/v_realisasi_product',$data);
                $this->load->view('template/footer');
            }
           
        }

        public function insertProduct()
        {
            $kode = htmlspecialchars($_POST['kode_product']);
            $nama_product = htmlspecialchars($_POST['nama_product']);
            if( !empty($kode) && !empty($nama_product) )
            {
                $sendToModel = $this->ModelDashboard->insertProduct($kode,$nama_product);
                if($sendToModel)
                {
                    $this->session->set_flashdata('message','New Product has Been Saved !!');
                    redirect(base_url().'dashboard/settings');
                }
            }else{
                $this->session->set_flashdata('failed','Data Cannot be Empty !!');
                redirect(base_url().'dashboard/settings/');
            }
            
        }

        public function insertChannel()
        {
            $kode = htmlspecialchars($_POST['kode_channel']);
            $nama_channel = htmlspecialchars($_POST['nama_channel']);
            if( !empty($kode) && !empty($nama_channel) )
            {
                $sendToModel = $this->ModelDashboard->insertChannel($kode,$nama_channel);
                if($sendToModel)
                {
                    $this->session->set_flashdata('message','New Channel has Been Saved !!');
                    redirect(base_url().'dashboard/settings/');
                }else{
                    $this->session->set_flashdata('failed','Your Channel Not Saved !');
                    redirect(base_url().'dashboard/settings/');
                }
            }else{
                $this->session->set_flashdata('failed','Data Cannot be Empty !!');
                redirect(base_url().'dashboard/settings/');
            }
           
        }

        
        public function settings()
        {
            $data['product'] = $this->ModelDashboard->getDataProduct();
            $data['channel'] = $this->ModelDashboard->getDataChannel();
            $data['activesetting'] = "active";
            $data['title'] = "Settings -  Dashboard";
            $this->load->view('template/header',$data);
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('template/mobile-menu');
            $this->load->view('dashboard/v_settings',$data);
            $this->load->view('template/footer');
        }

        public function updateProduct()
        {
            $id = $this->uri->segment(3);
            $nama_product = htmlspecialchars($_POST['nama_product']);
            $sendToModel = $this->ModelDashboard->updateProduct($nama_product,$id);
            if($sendToModel)
            {
               $this->session->set_flashdata('message','Your Data has Been Updated');
               redirect(base_url().'dashboard/settings/'); 
            }
        }

        public function updateChannel()
        {
            $id = $this->uri->segment(3);
            $nama_channel = htmlspecialchars($_POST['nama_channel']);
            $sendToModel = $this->ModelDashboard->updateChannel($nama_channel,$id);
            if($sendToModel)
            {
                $this->session->set_flashdata('message','Your Data has Been Updated');
                redirect(base_url().'dashboard/settings/'); 
            }
        }

        public function deleteProduct()
        {
            $id = $this->uri->segment(3);
            $sendToModel = $this->ModelDashboard->deleteProduct($id);
            if( $sendToModel )
            {
                $this->session->set_flashdata('message','Your File has been Deleted!');
                redirect(base_url().'dashboard/settings/');
            }
        }

        public function deleteChannel()
        {
            $id = $this->uri->segment(3);
            $sendToModel = $this->ModelDashboard->deleteChannel($id);
            if( $sendToModel )
            {
                $this->session->set_flashdata('message','Your File has been Deleted!');
                redirect(base_url().'dashboard/settings/');
            }
        }
    }