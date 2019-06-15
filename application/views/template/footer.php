<div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &copy; 2019 <a href="https://colorlib.com/wp/templates/">Telkom Indonesia</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- jquery
		============================================ -->
        <script src="<?= base_url() ?>assets/dashboard/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/data-table/bootstrap-table.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/data-table/tableExport.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/data-table/data-table-active.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/data-table/bootstrap-editable.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/editable/jquery.mockjax.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/editable/mock-active.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/editable/select2.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/editable/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/editable/bootstrap-editable.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/chart/jquery.peity.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?= base_url() ?>assets/dashboard/js/main.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/sweet-alert.js"></script>
   <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
   <script>
    window.onload = function(){
        var a = document.getElementById("messages").innerHTML;
          if(a.trim() != ""){
            swal({
            title: "Success!",
            text: a,
            icon: "success",
            button: "OK!",
            });
          }
        var c = document.getElementById("test").innerHTML;
          if(c.trim() != ""){
            swal({
            title: "Warning!",
            text: c,
            icon: "warning",
            button: "OK!",
            });
          }
          var b = document.getElementById("failed").innerHTML ;
          if(b.trim() != "")
          {
            swal({
            title: "Warning!",
            text: b,
            icon: "warning",
            button: "OK!",
            });
          }
      
    }
   
    function updateDataUsers(username,email){
      document.getElementById("headerform").innerHTML = "Form Update Users";
      document.getElementById('username').value = username;
      document.getElementById('uemail').value = email;
      document.getElementById("form-modal").action = "http://localhost/telkom/dashboard/updateusers/".concat(username);
    }

    function editDataProduct(kode,nama)
    {
      document.getElementById("HeaderForm").innerHTML = "Form Update Product";
      document.getElementById("label1").innerHTML = "Kode Product";
      document.getElementById("label2").innerHTML = "Nama Product";
      document.getElementById("form1").value = kode;
      document.getElementById("form2").value = nama;
      document.getElementById("form2").name = "nama_product";
      document.getElementById("form-modal").action = "http://localhost/telkom/dashboard/updateproduct/".concat(kode);  
    }

    function editDataChannel(kode,nama)
    {
      document.getElementById("HeaderForm").innerHTML = "Form Update Channel";
      document.getElementById("label1").innerHTML = "Kode Channel";
      document.getElementById("label2").innerHTML = "Nama Channel";
      document.getElementById("form1").value = kode;
      document.getElementById("form2").value = nama;
      document.getElementById("form2").name = "nama_channel";
      document.getElementById("form-modal").action = "http://localhost/telkom/dashboard/updatechannel/".concat(kode);
    }

    function hapusDataProduct(kode)
    {
      document.getElementById("delete").href="http://localhost/telkom/dashboard/deleteproduct/".concat(kode);
    }

    function hapusDataChannel(kode)
    {
      document.getElementById("delete").href="http://localhost/telkom/dashboard/deletechannel/".concat(kode);
    }

    function tambahDataChannel()
    {
      document.getElementById("HeaderForm").innerHTML = "Form Insert Channel";
      document.getElementById("label1").innerHTML = "Kode Channel";
      document.getElementById("label2").innerHTML = "Nama Channel";
      document.getElementById("form1").removeAttribute('readonly');
      document.getElementById("form1").name = "kode_channel";
      document.getElementById("form2").name = "nama_channel";
      document.getElementById("form1").placeholder = "Type Your Kode Channel Here ...";
      document.getElementById("form2").placeholder = "Type Your Nama Channel Here ...";
      document.getElementById("form-modal").action = "http://localhost/telkom/dashboard/insertchannel/"; 
    }

    function tambahDataProduct()
    {
      document.getElementById("HeaderForm").innerHTML = "Form Insert Product";
      document.getElementById("label1").innerHTML = "Kode Product";
      document.getElementById("label2").innerHTML = "Nama Product";
      document.getElementById("form1").removeAttribute('readonly');
      document.getElementById("form1").name = "kode_product";
      document.getElementById("form2").name = "nama_product";
      document.getElementById("form1").placeholder = "Type Your Kode Product Here ...";
      document.getElementById("form2").placeholder = "Type Your Nama Product Here ...";
      document.getElementById("form-modal").action = "http://localhost/telkom/dashboard/insertproduct/";
    }

    function addData()
    {
      document.getElementById("HeaderForm").innerHTML = "Form Add Business";
      document.getElementById("form-modal").action = "http://localhost/telkom/dashboard/insertbusiness/";

    }
    function editData(id,nama_sales,lokasi,channel,kode_channel,pelanggan,layanan,kode_layanan,bandwith,prospek,deal)
    {
      document.getElementById("HeaderForm").innerHTML = "Form Update Business";
      document.getElementById("form-modal").action = "http://localhost/telkom/dashboard/updatebusiness/".concat(id);
      document.getElementById("form-sales").value = nama_sales; 
      document.getElementById("form-lokasi").value = lokasi; 
      document.getElementById("form-channel2").innerHTML = channel; 
      document.getElementById("form-channel2").value = kode_channel; 
      document.getElementById("form-pelanggan").value = pelanggan;
      document.getElementById("form-layanan").innerHTML = layanan;
      document.getElementById("form-layanan").value = kode_layanan;
      document.getElementById("form-bw").value = bandwith;
      var a = document.getElementById("cekDeal").innerHTML ;
      var b = document.getElementById("cekProspek").innerHTML ;
      if(a != null)
      {
        document.getElementById("form-prospek").value = deal;
      }else if(b != null){
        document.getElementById("form-prospek").value = prospek;
      }
    }

   function hapusData(id)
   {
     document.getElementById("delete").href = "http://localhost/telkom/dashboard/deletebusiness/".concat(id);
   }

   function deleteUsers(id)
   {
     document.getElementById("btndelete").href = "http://localhost/telkom/dashboard/deleteusers/".concat(id);
   }
  </script>
</body>

</html>