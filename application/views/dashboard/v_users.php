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
                                            <li><a href="<?= base_url() ?>dashboard/">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Users</span>
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
                                    
                                    <p style="display:none;" id="messages"><?= $this->session->flashdata('message'); ?></p>
                                    <p style="display:none;" id="test"><?= $this->session->flashdata('failed'); ?></p>

                                    
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                          <button data-toggle="tooltip" onClick="" title="Add Users" class="btn btn-custon-rounded-four btn-danger "><a class="Danger danger-color" href="#" data-toggle="modal" data-target="#DangerModalhdbgcl"style="color:#fff;" >Add Users <i class="glyphicon glyphicon-plus icon-share" aria-hidden="true"></i></a></button>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="" data-click-to-select="true" data-toolbar="#toolbar">
                                       
                                        <thead>
                                            <tr>
                                                <th data-field="id">#</th>
                                                <th data-field="username" >Username</th>
                                                <th data-field="Email" >Email</th>
                                                <th data-field="Last Login" >Last Login</th>
												<th data-field="settings" >Settings</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i= 1; foreach($users as $row) { ?>
                                            <tr>
                                                <td><?= $i++ ; ?></td>
                                                <td><?= $row['username']; ?></td>
                                                <td><?= $row['email']; ?></td>
                                                <td><?= $row['last_login']; ?></td>
                                                <td>
                                                    <center>
                                                        <button onClick="updateDataUsers('<?= $row['username']; ?>','<?= $row['email']; ?>')" data-toggle="tooltip" title="Add Users" class=" "><a class="Danger danger-color"  data-toggle="modal" data-target="#FormModelEdit" ><i class="glyphicon glyphicon-edit icon-share" aria-hidden="true"></i></a></button>
                                                   
                                                        <button id=""  data-toggle="tooltip" title="Add Users" class=" "><a onClick="deleteUsers('<?= $row['username']; ?>')"  class="Danger danger-color"  data-toggle="modal" data-target="#AlertModalalert" ><i class="glyphicon glyphicon-trash icon-share" aria-hidden="true"></i></a></button>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="DangerModalhdbgcl" class="modal modal-adminpro-general FullColor-popup-DangerModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-4">
                                        <h4 class="modal-title">Form Add Users</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    
                                    <div class="modal-body">
                                        <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                                        <form action="<?= base_url() ?>dashboard/insertUsers/" method="post">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Username</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="username" placeholder="Type Your Username Here ..." class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Email</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="email" name="email" placeholder="Type Your Email Here ..." class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Password</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="password" name="password" placeholder="Type Your Password here ..." class="form-control" />
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
                                                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
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
        <div id="FormModelEdit" class="modal modal-adminpro-general FullColor-popup-DangerModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-4">
                                        <h4 class="modal-title" id="headerform">Form Add Users</h4>
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
                                                        <label class="login2 pull-right pull-right-pro">Username</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" readonly id="username" name="username" placeholder="Type Your Username Here ..." class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Email</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="email" id="uemail" name="email" placeholder="Type Your Email Here ..." class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Password</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="password" name="password" placeholder="Type Your Password here ..." class="form-control" />
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
                                        <a id="btndelete" >Process</a>
                                    </div>
                                </div>
                            </div>
                        </div>

