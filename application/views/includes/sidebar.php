<?php
//echo "<pre>";
$admin_id = $this->session->userdata('login_data');
$admin_id['role'];

?>
<aside class="main-sidebar">
    <!-- sidebar -->
    <div class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel text-center">
           <!--  <div class="image">
                <img src="assets/images/user2-160x160.png" class="img-circle" alt="User Image">
            </div> -->
            <div class="info">
                <p>Super Med Menu</p>
                <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
            </div>
        </div>
        <!-- sidebar menu -->
        <ul class="sidebar-menu">
            <?php if($admin_id['role'] == "admin") {?>
            <li class="">
                <a href="<?=base_url();?>"><i class="ti-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <span class="label label-success pull-right"></span>
                    </span>
                </a>
            </li>
            <!-- Purchase menu start -->
            <li class="treeview">
                <a href="#">
                    <i class="ti-shopping-cart"></i><span>Purchase</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="<?=base_url();?>Admin/add_purchases">Add Purchase</a></li>
                    <!--<li><a href="<?=base_url();?>Admin/manage_purchases">Manage Purchase</a></li>-->
                </ul>
            </li>
            <!-- Purchase menu end -->
            <!-- Invoice menu start -->
            <li class="treeview">
                <a href="#">
                    <i class="ti-layout-accordion-list"></i><span>Invoice</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="<?=base_url();?>Admin/sale_invoice">Sale Invoice</a></li>
                    <!--<li><a href="<?=base_url();?>Admin/manage_invoice">Manage Invoice </a></li>-->
                </ul>
            </li>
            <!-- Invoice menu end -->

            <!-- Product menu start -->
            <li class="treeview">
                <a href="#">
                    <i class="ti-bag"></i><span>Item</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="<?=base_url();?>Admin/add_Item">Add Item</a></li>
                    <li><a href="<?=base_url();?>Admin/manage_Item">Manage Item</a></li>
                </ul>
            </li>
            <!-- Product menu end -->

            <!-- Customer menu start -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-handshake-o"></i><span>Customer</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="<?=base_url();?>Admin/add_customer">Add Customer</a></li>
                    <li><a href="<?=base_url();?>Admin/manage_customer">Manage Customer</a></li>
                    <!-- <li><a href="Ccustomer/credit_customer">Credit Customer</a></li>
                    <li><a href="Ccustomer/paid_customer">Paid Customer</a></li> -->
                </ul>
            </li>
            <!-- Customer menu end -->

            <!-- Category menu start -->
            <li class="treeview">
                <a href="#">
                    <i class="ti-tag"></i><span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="<?=base_url();?>Admin/add_category">Add Category</a></li>
                    <li><a href="<?=base_url();?>Admin/manage_category">Manage Category</a></li>
                </ul>
            </li>
            <!-- Category menu end -->

            <!-- Supplier menu start -->
            <li class="treeview">
                <a href="#">
                    <i class="ti-user"></i><span>Supplier</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="<?=base_url();?>Admin/add_supplier">Add Supplier</a></li>
                    <li><a href="<?=base_url();?>Admin/manage_supplier">Manage Supplier</a></li>
                                    </ul>
            </li>
            <!-- Supplier menu end -->
            <li class="treeview">
                <a href="#">
                    <i class="ti-pencil-alt"></i><span>Expense</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="<?=base_url();?>Admin/add_Expense">Add Expense</a></li>
                                    </ul>
            </li>

            


            <li class="treeview">
                <a href="#">
                    <i class="ti-bar-chart"></i><span>Payment</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="<?=base_url();?>Admin/add_payment">Add Payment</a></li>
                    <li><a href="<?=base_url();?>Admin/payment_to_supplier">Payment to Supplier</a></li>
                </ul>
            </li>


            <!-- Search menu start --
            <li class="treeview  ">
                <a href="#">
                    <i class="ti-search"></i><span>Search</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="Csearch/Item">Item</a></li>
                    <li><a href="Csearch/customer">Customer </a></li>
                    <li><a href="Csearch/invoice">Invoice </a></li>
                    <li><a href="Csearch/purchase">Purchase </a></li>
                </ul>
            </li>
            <!-- Search menu end -->


            <!-- Accounts menu start --
            <li class="treeview  ">
                <a href="#">
                    <i class="ti-pencil-alt"></i><span>Accounts</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="Csettings/table_create">Create Accounts </a></li>
                    <li><a href="Csettings/table_list">Manage Accounts </a></li>
                    <li><a href="Caccounts">Income</a></li>
                    <li><a href="Caccounts/outflow">Expense</a></li>
                    <li><a href="Caccounts/add_tax">Add Tax</a></li>
                    <li><a href="Caccounts/manage_tax">Manage Tax</a></li>
                    <li><a href="Caccounts/summary">Accounts Summary</a></li>
                    <li><a href="Caccounts/cheque_manager">Cheque Manager</a></li>
                    <li><a href="Caccounts/closing">Closing</a></li>
                    <li><a href="Caccounts/closing_report">Closing Report</a></li>
                </ul>
            </li>
            <!-- Accounts menu end -->

            <!-- Report menu start -->
            <li class="treeview  ">
                <a href="#">
                    <i class="ti-book"></i><span>Reports</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url();?>Admin/customer_report_page">Customer Reports</a></li>
                    <li><a href="<?=base_url();?>Admin/supplier_report_page">Supplier Reports</a></li>
                    <li><a href="<?=base_url();?>Admin/stock_report_page">Stock Reports</a></li>
                    <li><a href="<?=base_url();?>Admin/payment_report_page">Payment Reports</a></li>
                    <li><a href="<?=base_url();?>Admin/Expense_report_page">Purchase Expense Reports</a></li>
                    <li><a href="<?=base_url();?>Admin/Sale_Expense_report_page">Sale Expense Reports</a></li>

                </ul>
            </li>
            <!-- Report menu end -->

            <!-- Account menu start -->
            <li class="treeview  ">
                <a href="#">
                    <i class="fa fa-users"></i><span>Profit And Loss</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url();?>Admin/profit_loss_report_page">P & L Report</a></li>
                </ul>
            </li>
            
            <li class="treeview  ">
                <a href="#">
                    <i class="ti-book"></i><span>Database</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url();?>Admin/export_database">Export Database</a></li>

                </ul>
            </li>
            <li class="treeview  ">
                <a href="#">
                    <i class="ti-tag"></i><span>Settings</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url();?>Admin/change_password">Change Password</a></li>

                </ul>
            </li>
            <!-- Account menu end -->

            <!-- Bank menu start --
            <li class="treeview  ">
                <a href="#">
                    <i class="ti-briefcase"></i><span>Bank</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="Csettings/index">Add New Bank</a></li>
                    <li><a href="Csettings/bank_list">Manage Bank</a></li>
                </ul>
            </li>
            <!-- Bank menu end -->

            <!-- Software Settings menu start --
            <li class="treeview  ">
                <a href="#">
                    <i class="ti-settings"></i><span>Software Settings</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="Company_setup/manage_company">Manage Company</a></li>
                    <li><a href="User">Add User</a></li>
                    <li><a href="User/manage_user">Manage Users </a></li>
                    <li><a href="Language">Language </a></li>
                    <li><a href="Cweb_setting">Setting </a></li>
                </ul>
            </li>
            <!-- Software Settings menu end -->
            <?php } ?>
            <?php if($admin_id['role'] == "sale") {?>
            <li class="treeview">
                <a href="#">
                    <i class="ti-layout-accordion-list"></i><span>Invoice</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="<?=base_url();?>Admin/sale_invoice">Sale Invoice</a></li>
                    <!--<li><a href="<?=base_url();?>Admin/manage_invoice">Manage Invoice </a></li>-->
                </ul>
            </li>
            <!-- Invoice menu end -->

            <?php } ?>
            <?php if($admin_id['role'] == "purchase") {?>
            
                        <!-- Purchase menu start -->
            <li class="treeview">
                <a href="#">
                    <i class="ti-shopping-cart"></i><span>Purchase</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="<?=base_url();?>Admin/add_purchases">Add Purchase</a></li>
                    <!--<li><a href="<?=base_url();?>Admin/manage_purchases">Manage Purchase</a></li>-->
                </ul>
            </li>
            <!-- Purchase menu end -->
            <?php } ?>
        </ul>
    </div> <!-- /.sidebar -->
</aside>
