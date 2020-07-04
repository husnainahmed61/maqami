
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
			<!--			--><?php //if($admin_id['role'] == "admin") {?>
			<li class="">
				<a href="#"><i class="ti-dashboard"></i> <span>Dashboard</span>
					<span class="pull-right-container">
                        <span class="label label-success pull-right"></span>
                    </span>
				</a>
			</li>
			<!-- Purchase menu start -->
			<li class="treeview">
				<a href="#">
					<i class="ti-shopping-cart"></i><span>Product</span>
					<span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
				</a>
				<ul class="treeview-menu" style="display: none;">
					<li><a href="product">Add Product</a></li>
					<li><a href="view-product">List Product</a></li>
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
					<li><a href="#">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div> <!-- /.sidebar -->
</aside>
