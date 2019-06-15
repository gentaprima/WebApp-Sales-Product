
<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="<?= base_url() ?>assets/dashboard/img/img-02.png" alt="" width="205"  height="60"/></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="">
                             <a class="<?php if(!empty($activehome)){echo $activehome;}  ?>"title="Dashboard" href="<?= base_url() ?>dashboard/"><i class="fa big-icon fa-home icon-wrap" aria-hidden="true"></i><span class="mini-click-non">Dashboard</span></a></li>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-files-o icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li>
                                    <a title="Table Realisasi Sales" href="<?= base_url() ?>dashboard/realisasi_sales" class="<?php if(!empty($activesales)){ echo $activesales;} ?>"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i><span class="mini-sub-pro">Table Realisasi Sales</span>
                                    </a>
                                </li>

                                <li>
                                    <a title="Table Realisasi Product" class="<?php if(!empty($activeproduct)){ echo $activeproduct;} ?>" href="<?= base_url() ?>dashboard/realisasi_product"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i><span class="mini-sub-pro">Table Realisasi Product</span>
                                </a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="">
                            <a class="<?php if(!empty($activeusers)){echo $activeusers;}  ?>"title="Dashboard" href="<?= base_url() ?>dashboard/users/"><i class="fa big-icon fa-users icon-wrap" aria-hidden="true"></i><span class="mini-click-non">Users</span></a></li>
                        </li>
                        <li class="">
                            <a class="<?php if(!empty($activesetting)){echo $activesetting;}  ?>"title="Dashboard" href="<?= base_url() ?>dashboard/settings/"><i class="fa big-icon fa-gear icon-wrap" aria-hidden="true"></i><span class="mini-click-non">Settings</span></a></li>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>