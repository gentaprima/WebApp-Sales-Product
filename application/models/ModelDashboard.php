<?php

    class ModelDashboard extends CI_Model{

        // <-- USERS -- >

        public function insertUsers($username,$email,$hash)
        {
            $query = "INSERT INTO tbl_user (username,email,password) VALUES (?,?,?)";
            $querybind = $this->db->query($query,array($username,$email,$hash));
            return $querybind;
        }

        public function checkDataUsers($username,$email)
        {
            $query = "SELECT * from tbl_user where username = ? or email = ?";
            $querybind = $this->db->query($query,array($username,$email));
            return $querybind;
        }

        public function updateDataUsers($email,$password,$id)
        {
            $query = "UPDATE tbl_user SET email = ? , password = ? where username = ?";
            $querybind = $this->db->query($query,array($email,$password,$id));
            return $querybind;
        }

        public function getDataUsers()
        {
            $query = "SELECT * from tbl_user";
            return $this->db->query($query)->result_array();
        }

        public function deleteUsers($id)
        {
            $query = "DELETE from tbl_user where username = ?";
            return $this->db->query($query,$id);
        }

        // <-- USERS-->


        // <-- INDEX DASHBOARD -- >

        public function getDataBusiness()
        {
           $query = "SELECT 
                        tbl_unit_business.tanggal,tbl_unit_business.bulan,tbl_unit_business.nama_sales,tbl_unit_business.lokasi,tbl_unit_business.pelanggan,tbl_unit_business.bandwith,tbl_unit_business.prospek,tbl_unit_business.deal,tbl_unit_business.id,tbl_unit_business.kode_product,tbl_unit_business.kode_channel,
                        tbl_product.nama_product,
                        tbl_channel.nama_channel
                        from tbl_unit_business,tbl_product,tbl_channel
                        
                        Where 
                            tbl_unit_business.kode_product = tbl_product.kode_product and
                            tbl_unit_business.kode_channel = tbl_channel.kode_channel 
                        ORDER BY tbl_unit_business.id ASC";
            return $this->db->query($query)->result_array();
        }

        

        public function insertBusinessDeal($tanggal,$bulan,$sales,$lokasi,$channel,$pelanggan,$layanan,$bandwith,$prospek,$tgl)
        {
            $query = "INSERT INTO tbl_unit_business (tanggal,bulan,nama_sales,lokasi,kode_channel,pelanggan,kode_product,bandwith,deal,tgl) VALUES(?,?,?,?,?,?,?,?,?,?)";
            $querybind = $this->db->query($query,array($tanggal,$bulan,$sales,$lokasi,$channel,$pelanggan,$layanan,$bandwith,$prospek,$tgl));
            return $querybind;
        }

        public function insertBusiness($tanggal,$bulan,$sales,$lokasi,$channel,$pelanggan,$layanan,$bandwith,$prospek,$tgl)
        {
            $query = "INSERT INTO tbl_unit_business (tanggal,bulan,nama_sales,lokasi,kode_channel,pelanggan,kode_product,bandwith,prospek,tgl) VALUES(?,?,?,?,?,?,?,?,?,?)";
            $querybind = $this->db->query($query,array($tanggal,$bulan,$sales,$lokasi,$channel,$pelanggan,$layanan,$bandwith,$prospek,$tgl));
            return $querybind;
        }

        public function updateBusinessDeal($tanggal,$bulan,$sales,$lokasi,$channel,$pelanggan,$layanan,$bandwith,$prospek,$tgl,$id)
        {
            $query = "UPDATE tbl_unit_business SET tanggal = ?,bulan = ?, nama_sales = ?, lokasi = ?, kode_channel = ? , pelanggan = ?, kode_product = ?, bandwith = ?,prospek = '', deal = ?, tgl = ? where id = ?";
            $querybind = $this->db->query($query,array($tanggal,$bulan,$sales,$lokasi,$channel,$pelanggan,$layanan,$bandwith,$prospek,$tgl,$id));
            return $querybind;
        }

        public function updateBusiness($tanggal,$bulan,$sales,$lokasi,$channel,$pelanggan,$layanan,$bandwith,$prospek,$tgl,$id)
        {
            $query = "UPDATE tbl_unit_business SET tanggal = ?,bulan = ?, nama_sales = ?, lokasi = ?, kode_channel = ? , pelanggan = ?, kode_product = ?, bandwith = ?, prospek = ?, deal = '' , tgl = ? where id = ?";
            $querybind = $this->db->query($query,array($tanggal,$bulan,$sales,$lokasi,$channel,$pelanggan,$layanan,$bandwith,$prospek,$tgl,$id));
            return $querybind;
        }

        public function deleteBusiness($id)
        {
            $query = "DELETE from tbl_unit_business where id = ?";
            return $this->db->query($query,$id);
        }

        // <-- INDEX DASHBOARD -->

        // <-- SETTINGS -- >
        public function insertProduct($kode,$nama)
        {
            $query = "INSERT INTO tbl_product (kode_product,nama_product) VALUES (?,?)";
            $querybind = $this->db->query($query,array($kode,$nama));
            return $querybind;
        }
        public function insertChannel($kode,$nama)
        {
            $query = "INSERT INTO tbl_channel (kode_channel,nama_channel) VALUES (?,?)";
            $querybind = $this->db->query($query,array($kode,$nama));
            return $querybind;
        }

        public function getDataProduct()
        {
            $query = "SELECT * from tbl_product";
            return  $this->db->query($query)->result_array();
        }

        public function getDataChannel()
        {
            $query = "SELECT * from tbl_channel";
            return  $this->db->query($query)->result_array();
        }

        public function updateProduct($nama,$id)
        {
            $query = "UPDATE tbl_product SET nama_product = ? where kode_product = ?";
            $querybind = $this->db->query($query,array($nama,$id));
            return $querybind; 
        }

        public function updateChannel($nama,$id)
        {
            $query = "UPDATE tbl_channel SET nama_channel = ? where kode_channel = ?";
            $querybind = $this->db->query($query,array($nama,$id));
            return $querybind; 
        }

        public function deleteProduct($id)
        {
            $query = "DELETE from tbl_product where kode_product = ?";
            return $this->db->query($query,$id);
        }

        public function deleteChannel($id)
        {
            $query = "DELETE from tbl_channel where kode_channel = ?";
            return $this->db->query($query,$id);
        }

        // <-- SETTINGS -- >

       
        // <-- TABLE PRODUCT -->
        public function getDataBusinessByProduct($id)
        {
            $query = "SELECT DISTINCT tgl from tbl_unit_business where kode_product = ?";
            $querybind = $this->db->query($query,$id);
            return $querybind->result_array();
        }

        public function getDataPenawaranByProduct($id)
        {
            $datacount = array();
            $i = 0;
            $q = "SELECT * from tbl_unit_business
                 where kode_product = ? and 
                       prospek = ? and 
                       tgl = ?";
            foreach($this->getDataBusinessByProduct($id) as $row)
            {
                $tanggal = $row['tgl'];
                $dump = $this->db->query($q,array($id,'Penawaran',$tanggal))->result_array();
                $datacount[$i] = strval(count($dump));
                $i++;
            }
            return $datacount;
        }
        public function getDataVisitByProduct($id)
        {
            $datacount = array();
            $i = 0;
            $q = "SELECT * from tbl_unit_business
                 where kode_product = ? and 
                       prospek = ? and 
                       tgl = ?";
            foreach($this->getDataBusinessByProduct($id) as $row)
            {
                $tanggal = $row['tgl'];
                $dump = $this->db->query($q,array($id,'Visit',$tanggal))->result_array();
                $datacount[$i] = strval(count($dump));
                $i++;
            }
            return $datacount;
        }

        public function getDataDealByProduct($id)
        {
            $datacount = array();
            $i = 0;
            $q = "SELECT * from tbl_unit_business
                 where kode_product = ? and 
                       deal = ? and 
                       tgl = ?";
            foreach($this->getDataBusinessByProduct($id) as $row)
            {
                $tanggal = $row['tgl'];
                $dump = $this->db->query($q,array($id,'deal',$tanggal))->result_array();
                $datacount[$i] = strval(count($dump));
                $i++;
            }
            return $datacount;
            
        }

        public function getDataCountPenawaran($id)
        {
            $query = "SELECT id as jumlah_penawaran from tbl_unit_business where kode_product = ? and prospek = ?";
            $querybind = $this->db->query($query,array($id,'Penawaran'));
            return $querybind;
        }
        public function getDataCountVisit($id)
        {
            $query = "SELECT id as jumlah_Visit from tbl_unit_business where kode_product = ? and prospek = ?";
            $querybind = $this->db->query($query,array($id,'Visit'));
            return $querybind;
        }
        public function getDataCountDeal($id)
        {
            $query = "SELECT id as jumlah_Deal from tbl_unit_business where kode_product = ? and deal = ?";
            $querybind = $this->db->query($query,array($id,'deal'));
            return $querybind;
        }

        // <-- TABLE PRODUCT -- >

        // <-- TABLE SALES -->
       
        public function getDataNameSales()
        {
            $query= "SELECT nama_sales from tbl_unit_business ";
            return $this->db->query($query)->result_array();
        }

        public function getDataBusinessBySales()
        {
            $datacount = array();
            $i=0;
            
            $queryProspek = "SELECT * from tbl_unit_business where nama_sales = ? and prospek = ? and kode_product= ? ";
            $queryDeal = "SELECT * from tbl_unit_business where nama_sales = ? and deal = ? and kode_product= ? ";
            $queryCountProspek = "SELECT * from tbl_unit_business where prospek = ? and kode_product = ?";
            $queryCountDeal = "SELECT * from tbl_unit_business where deal = ? and kode_product = ?";
            // $get = $this->db->query("SELECT kode_product from tbl_product");
            // $data = $get->result_array();
            // $jumlah = count($data);
            // $a = 0;
            foreach($this->getDataNameSales() as $row) 
            
            {   
                $nama_sales = $row['nama_sales'];

                //Data ASTINET
                $penawaranAST = $this->db->query($queryProspek,array($nama_sales,'Penawaran','AST'))->result_array();
                $visitAST = $this->db->query($queryProspek,array($nama_sales,'Visit','AST'))->result_array();
                $dealAST = $this->db->query($queryDeal,array($nama_sales,'deal','AST'))->result_array();
                $dataPenawaranAST[$i] = strval(count($penawaranAST));
                $dataVisitAST[$i] = strval(count($visitAST));
                $dataDealAST[$i] = strval(count($dealAST));

                //Data HSI
                $penawaranHSI = $this->db->query($queryProspek,array($nama_sales,'Penawaran','HSI'))->result_array();
                $visitHSI = $this->db->query($queryProspek,array($nama_sales,'Visit','HSI'))->result_array();
                $dealHSI = $this->db->query($queryDeal,array($nama_sales,'deal','HSI'))->result_array();
                $dataPenawaranHSI[$i] = strval(count($penawaranHSI));
                $dataVisitHSI[$i] = strval(count($visitHSI));
                $dataDealHSI[$i] = strval(count($dealHSI));

                // Data METRO
                $penawaranMetro = $this->db->query($queryProspek,array($nama_sales,'Penawaran','MTO'))->result_array();
                $visitMetro = $this->db->query($queryProspek,array($nama_sales,'Visit','MTO'))->result_array();
                $dealMetro = $this->db->query($queryDeal,array($nama_sales,'deal','MTO'))->result_array();
                $datapenawaranMetro[$i] = strval(count($penawaranMetro));
                $datavisitMetro[$i] = strval(count($visitMetro));
                $datadealMetro[$i] = strval(count($dealMetro));

                // DATA VPN
                $penawaranVPN = $this->db->query($queryProspek,array($nama_sales,'Penawaran','VPN'))->result_array();
                $visitVPN = $this->db->query($queryProspek,array($nama_sales,'Visit','VPN'))->result_array();
                $dealVPN = $this->db->query($queryDeal,array($nama_sales,'deal','VPN'))->result_array();
                $datapenawaranVPN[$i] = strval(count($penawaranVPN));
                $datavisitVPN[$i] = strval(count($visitVPN));
                $datadealVPN[$i] = strval(count($dealVPN));

                // DATA WICO
                $penawaranWCO = $this->db->query($queryProspek,array($nama_sales,'Penawaran','WCO'))->result_array();
                $visitWCO = $this->db->query($queryProspek,array($nama_sales,'Visit','WCO'))->result_array();
                $dealWCO = $this->db->query($queryDeal,array($nama_sales,'deal','WCO'))->result_array();
                $datapenawaranWCO[$i] = strval(count($penawaranWCO));
                $datavisitWCO[$i] = strval(count($visitWCO));
                $datadealWCO[$i] = strval(count($dealWCO));
                
                //DATA WISTA
                $penawaranWST = $this->db->query($queryProspek,array($nama_sales,'Penawaran','WST'))->result_array();
                $visitWST = $this->db->query($queryProspek,array($nama_sales,'Visit','WST'))->result_array();
                $dealWST = $this->db->query($queryDeal,array($nama_sales,'deal','WST'))->result_array();
                $datapenawaranWST[$i] = strval(count($penawaranWST));
                $datavisitWST[$i] = strval(count($visitWST));
                $datadealWST[$i] = strval(count($dealWST));

                //DATA COUNT AST
                $countPenawaranAST = $this->db->query($queryCountProspek,array('Penawaran','AST'))->result_array();
                $countVisitAST = $this->db->query($queryCountProspek,array('Visit','AST'))->result_array();
                $countDealAST = $this->db->query($queryCountDeal,array('deal','AST'))->result_array();
                $dataCountPenawaranAST = strval(count($countPenawaranAST));
                $dataCountVisitAST = strval(count($countVisitAST));
                $dataCountDealAST = strval(count($countDealAST));
                
                //DATA COUNT HSI
                $countPenawaranHSI = $this->db->query($queryCountProspek,array('Penawaran','HSI'))->result_array();
                $countVisitHSI = $this->db->query($queryCountProspek,array('Visit','HSI'))->result_array();
                $countDealHSI = $this->db->query($queryCountDeal,array('deal','HSI'))->result_array();
                $datacountPenawaranHSI = strval(count($countPenawaranHSI));
                $datacountVisitHSI = strval(count($countVisitHSI));
                $datacountDealHSI = strval(count($countDealHSI));
                

                //DATA COUNT METRO
                $countPenawaranMTO = $this->db->query($queryCountProspek,array('Penawaran','MTO'))->result_array();
                $countVisitMTO = $this->db->query($queryCountProspek,array('Visit','MTO'))->result_array();
                $countDealMTO = $this->db->query($queryCountDeal,array('deal','MTO'))->result_array();
                $datacountPenawaranMTO = strval(count($countPenawaranMTO));
                $datacountVisitMTO = strval(count($countVisitMTO));
                $datacountDealMTO = strval(count($countDealMTO));

                //DATA COUNT VPN
                $countPenawaranVPN = $this->db->query($queryCountProspek,array('Penawaran','VPN'))->result_array();
                $countVisitVPN = $this->db->query($queryCountProspek,array('Visit','VPN'))->result_array();
                $countDealVPN = $this->db->query($queryCountDeal,array('deal','VPN'))->result_array();
                $datacountPenawaranVPN = strval(count($countPenawaranVPN));
                $datacountVisitVPN = strval(count($countVisitVPN));
                $datacountDealVPN = strval(count($countDealVPN));

                //DATA COUNT WICO
                $countPenawaranWCO = $this->db->query($queryCountProspek,array('Penawaran','WCO'))->result_array();
                $countVisitWCO = $this->db->query($queryCountProspek,array('Visit','WCO'))->result_array();
                $countDealWCO = $this->db->query($queryCountDeal,array('deal','WCO'))->result_array();
                $datacountPenawaranWCO = strval(count($countPenawaranWCO));
                $datacountVisitWCO = strval(count($countVisitWCO));
                $datacountDealWCO = strval(count($countDealWCO));

                //DATA COUNT WISTA
                $countPenawaranWST = $this->db->query($queryCountProspek,array('Penawaran','WST'))->result_array();
                $countVisitWST = $this->db->query($queryCountProspek,array('Visit','WST'))->result_array();
                $countDealWST = $this->db->query($queryCountDeal,array('deal','WST'))->result_array();
                $datacountPenawaranWST = strval(count($countPenawaranWST));
                $datacountVisitWST = strval(count($countVisitWST));
                $datacountDealWST = strval(count($countDealWST));
                $i++;
            } 
            // $a = [$dataPenawaranAST,$dataVisitAST,$dataDealAST,$dataPenawaranHSI,$dataVisitHSI,$dataDealHSI,$datapenawaranMetro,$datavisitMetro,$datadealMetro];
            // var_dump($a);die;
            return [$dataPenawaranAST,$dataVisitAST,$dataDealAST,$dataPenawaranHSI,$dataVisitHSI,$dataDealHSI,$datapenawaranMetro,$datavisitMetro,$datadealMetro,$datapenawaranVPN,$datavisitVPN,$datadealVPN,$datapenawaranWCO,$datavisitWCO,$datadealWCO,$datapenawaranWST,$datavisitWST,$datadealWST,$dataCountPenawaranAST,$dataCountVisitAST,$dataCountDealAST,$datacountPenawaranHSI,$datacountVisitHSI,$datacountDealHSI,$datacountPenawaranMTO,$datacountVisitMTO,$datacountDealMTO,$datacountPenawaranVPN,$datacountVisitVPN,$datacountDealVPN,$datacountPenawaranWCO,$datacountVisitWCO,$datacountDealWCO,$datacountPenawaranWST,$datacountVisitWST,$datacountDealWST];
        }

        public function getDataCount()
        {
            
        }
        // <-- TABLE SALES -- >

    }