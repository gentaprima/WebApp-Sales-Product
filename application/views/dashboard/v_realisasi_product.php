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
                <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">
                                <br>
                                <ul class="mailbox-list">
                                    <?php foreach($product as $row){ ?>
                                        <li class="">
                                            
                                            <a href="<?= base_url() ?>dashboard/realisasi_product/<?= $row['kode_product']; ?>/"> <i class="fa fa-table"></i> <?= $row['nama_product']; ?> </a>
                                            
                                        </li>
                                    <?php } ?>
                                </ul>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Products <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                          <!-- <button data-toggle="tooltip" title="export" class="pd-setting-ed"><a href="<?= base_url() ?>export" target="_blank" class="export">Export </a><i class="glyphicon glyphicon-export icon-share" aria-hidden="true"></i></button> -->
                                          <?php  if( $this->session->flashdata('message') ){ ?>
                                        <p style="display:none;" id="message"><?= $this->session->flashdata('message'); ?></p>
                                    <?php } ?>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="id">NO</th>
                                                <th data-field="tanggal" >Tanggal</th>
                                                <th data-field="bulan" >Penawaran</th>
                                                <th data-field="company" >Visit</th>
                                                <th data-field="price" >Deal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($business)) { ?>
                                                <?php $i = 1; $a= 0; $b=0; $c=0; foreach($business as $row){ ?>
                                                <tr> 
                                                    <td><?= $i++ ;?></td>
                                                    <td><?= $row['tgl']; ?></td>
                                                  
                                                    <td>
                                                        <?= $penawaran[$c] ?>
                                                       <?php $c++; ?>
                                                    </td>
                                                    <td>
                                                        <?= $visit[$b] ?>
                                                       <?php $b++; ?>
                                                    </td>
                                                    <td>
                                                       <?= $deal[$a] ?>
                                                       <?php $a++; ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            <tr>
                                                <?php if(!empty($countDeal) || !empty($countPenawaran) || !empty($countVisit)){ ?>
                                                <td colspan="2"><b><center>TOTAL</center></b></td>
                                                <td><b><?= $countPenawaran; ?></b></td>
                                                <td><b><?= $countVisit; ?></b></td>
                                                <td><b><?= $countDeal; ?></b></td>   
                                                <?php } ?>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        