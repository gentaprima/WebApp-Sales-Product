<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Data Table</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Products <span class="table-project-n">Data</span> Table<a onClick="addData()" data-toggle="modal" data-target="#FormModelEdit" style="float:right;" ><i class="fa fa-plus"></i></a></h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                    <p style="display:none;" id="messages"><?= $this->session->flashdata('message'); ?></p>
                                    <p style="display:none;" id="test"><?= $this->session->flashdata('failed'); ?></p>
                                          <!-- <button data-toggle="tooltip" title="export" class="pd-setting-ed"><a href="<?= base_url() ?>export" target="_blank" class="export">Export </a><i class="glyphicon glyphicon-export icon-share" aria-hidden="true"></i></button> -->
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="" data-click-to-select="true" data-toolbar="#toolbar">
                                       
                                        <thead>
                                            <tr>
                                                <th data-field="id">NO</th>
                                                <th data-field="tanggal" >Tanggal</th>
                                                <th data-field="bulan" >Bulan</th>
                                                <th data-field="company" >Nama Sales</th>
                                                <th data-field="price" >Lokasi Visit</th>
												<th data-field="date" >Channel</th>
												<th data-field="task" >Pelanggan</th>
												<th data-field="layanan" >Layanan</th>
												<th data-field="bandwith" >Bandwith</th>
												<th data-field="prospek" >Prospek</th>
												<th data-field="deal" >Deal</th>
												<th data-field="" >Settings</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; foreach($business as $row){ ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $row['tanggal']; ?></td>
                                                <td><?= $row['bulan']; ?></td>
                                                <td><?= $row['nama_sales']; ?></td>
												<td><?= $row['lokasi']; ?></td>
												<td><?= $row['nama_channel']; ?></td>
                                                <td><?= $row['pelanggan']; ?></td>
												<td><?= $row['nama_product']; ?></td>
												<td><?= $row['bandwith']; ?></td>
												<td id="cekProspek" ><?= $row['prospek']; ?></td>
                                                <td id="cekDeal"><?= $row['deal']; ?></td>
                                                <td>
                                            
                                                <button data-toggle="tooltip" class="pd-setting-ed">
                                                 <a onClick="editData(<?= $row['id'] ;?>,'<?= $row['nama_sales']; ?>','<?= $row['lokasi']; ?>','<?= $row['nama_channel']; ?>','<?= $row['kode_channel']; ?>','<?= $row['pelanggan']; ?>','<?= $row['nama_product']; ?>','<?= $row['kode_product']; ?>','<?= $row['bandwith'];?>','<?= $row['prospek']; ?>','<?= $row['deal'] ;?>')" data-toggle="modal" data-target="#FormModelEdit">
                                                 <i class="glyphicon glyphicon-edit icon-share" aria-hidden="true"></i>
                                                </a>
                                                </button>
                                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                                                <a onClick="hapusData(<?= $row['id'] ;?>)" data-toggle="modal" data-target="#AlertModalalert"><i class="glyphicon glyphicon-trash icon-share" aria-hidden="true"></i>
                                                </a>
                                                </button>
                                                </td>
                                                
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="FormModelEdit" class="modal modal-adminpro-general FullColor-popup-DangerModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-4">
                                        <h4 class="modal-title" id="HeaderForm">Form Add Users</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    
                                    <div class="modal-body">
                                        <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                                        <form id="form-modal" method="post">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro" id="label1">Tanggal</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" readonly id="form-date"   class="form-control" name="date" value="<?= date('d-M-Y'); ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro" id="label2">Nama Sales</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="sales" id="form-sales" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro" id="label2">Lokasi</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="lokasi" id="form-lokasi" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro" id="label2">Channel</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <select name="channel" id="form-channel" class="form-control">
                                                            <option id="form-channel2" value="">-- Select Channel --</option>
                                                            <?php foreach($channel as $row){ ?>
                                                            <option  value="<?= $row['kode_channel'] ?>"><?= $row['nama_channel'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro" id="label2">Pelanggan</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="pelanggan" id="form-pelanggan" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro" id="label2">Layanan</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <select   name="layanan" class="form-control">
                                                            <option id="form-layanan" value="">-- Select Layanan --</option>
                                                            <?php foreach($product as $row){ ?>
                                                            <option  value="<?= $row['kode_product'] ?>"><?= $row['nama_product'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro" id="label2">Bandwith</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="bandwith" id="form-bw" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro" id="label2">Prospek</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <select  id="form-prospek" name="prospek" class="form-control">
                                                            <option id="form-prospek" value="">-- Select Penawaran --</option>
                                                            <option value="Penawaran">Penawaran</option>
                                                            <option value="Visit">Visit</option>
                                                            <option value="deal">deal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                         
                                    </div>
                                    <div class="modal-footer">
                                            <div class="form-group-inner">
                                                <div class="login-btn-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3"></div>
                                                        <div class="col-lg-9">
                                                            <div class="login-horizental cancel-wp pull-left">
                                                                <button class="btn btn-white" type="submit">Cancel</button>
                                                                <button id="btn" class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- ALERT MODAL -->
<div id="AlertModalalert" class="modal modal-adminpro-general FullColor-popup-AlertModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <span class="adminpro-icon adminpro-warning modal-check-pro information-icon-pro"></span>
                                        <h2>Are You Sure ?</h2>
                                        <p>Once deleted, you will not be able to recover this file!</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" href="#">Cancel</a>
                                        <a id="delete" href="#">Process</a>
                                    </div>
                                </div>
                            </div>
                        </div>
