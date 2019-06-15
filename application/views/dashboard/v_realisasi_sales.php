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
                                    <h1>Products <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                          <!-- <button data-toggle="tooltip" title="export" class="pd-setting-ed"><a href="<?= base_url() ?>export" target="_blank" class="export">Export </a><i class="glyphicon glyphicon-export icon-share" aria-hidden="true"></i></button> -->
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="" data-click-to-select="true" data-toolbar="#toolbar">
                                       
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Nama Sales</th>
                                                <?php foreach($product as $row){ ?>
                                                <th style="text-align:center;" colspan="3"><?= $row['nama_product']; ?></th>
                                                <?php }  ?>
                                            </tr> 
                                            <tr>
                                                <th>penawaran</th>
                                                <th>visit</th>
                                                <th>deal</th>
                                                <th>penawaran</th>
                                                <th>visit</th>
                                                <th>deal</th>
                                                <th>penawaran</th>
                                                <th>visit</th>
                                                <th>deal</th>
                                                <th>penawaran</th>
                                                <th>visit</th>
                                                <th>deal</th>
                                                <th>penawaran</th>
                                                <th>visit</th>
                                                <th>deal</th>
                                                <th>penawaran</th>
                                                <th>visit</th>
                                                <th>deal</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php //var_dump($business_penawaran[0]);die; ?>
                                        <?php $i= 0; foreach($nama_sales as $row){ ?>
                                            <tr>
                                                <td><?= $row['nama_sales']; ?></td>
                                                <td><center><?= $business_penawaran[0][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[1][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[2][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[3][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[4][$i] ; ?></center></td>
                                                <td><center><?= $business_penawaran[5][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[6][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[7][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[8][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[9][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[10][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[11][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[12][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[13][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[14][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[15][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[16][$i]; ?></center></td>
                                                <td><center><?= $business_penawaran[17][$i]; ?></center></td>
                                                <?php $i++; ?>
                                            </tr>
                                       
                                        <?php }?>
                                          
                                            <tr>
                                                <td><b>TOTAL</b></td>
                                                <td><center><b><?= $business_penawaran[18]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[19]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[20]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[21]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[22]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[23]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[24]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[25]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[26]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[27]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[28]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[29]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[30]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[31]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[32]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[33]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[34]; ?></b></center></td>
                                                <td><center><b><?= $business_penawaran[35]; ?></b></center></td>
                                            </tr>
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>