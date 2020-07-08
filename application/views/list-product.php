<!-- Manage Customer -->
<div class="content-wrapper" style="min-height: 448px;">

	<!-- Page Title -->
	<section class="content-header">
		<div class="header-icon">
			<i class="pe-7s-note2"></i>
		</div>
		<div class="header-title">
			<h1>Product</h1>

			<!-- <small class="">Manage your credit customer</small> -->
			<ol class="breadcrumb">
				<li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
				<li><a href="#">Product</a></li>
				<li class="active">View Product</li>
			</ol>
		</div>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">

			<div class="col-sm-12">
				<div class="panel panel-bd lobidrag invent-main">
					<div class="panel-heading">
						<div class="panel-title">
							<h4>View Product</h4>
							<?php if($this->session->flashdata("udate_msg")){
								echo $this->session->flashdata("udate_msg");
							} ?>
						</div>
					</div>

					<div class="panel-body">
						<table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
							<tr>
								<th>#</th>
								<th >Product Name</th>
								<th>Product Description</th>
								<th >Original Price</th>
								<th>Discounted Price</th>
								<th>Created At</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
							$i = 1;
							foreach($product  as $key => $value) {?>
								<tr>
									<td><?=$i;?></td>
									<td><?=$value['product_name'];?></td>
									<td><?=$value['product_description'];?></td>
									<td><?=$value['original_price'];?></td>
									<td><?=$value['discounted_price'];?></td>
									<td><?=$value['created_date'];?></td>
									<td>
										<a href="update-product/<?php echo $value['id']; ?>" class="btn btn-info btn-sm" title="Edit" style="padding: 5px;">Edit
										</a>
										<a href="add-variationinproduct/<?php echo $value['id']; ?>" class="btn btn-danger btn-sm" title="Edit" style="padding: 5px;">Add Variation
										</a>
									</td>
								</tr>
								<?php $i++; } ?>
							</tbody>
						</table>
					</div>


				</div>


			</div>

		</div>
	</section>
</div>


<footer class="main-footer">
	<strong>
		Copyright © 2019 <a href="http://hhmarineproducts.com" target="_blank">HH Marine Products.</a>  All rights reserved.  	</strong>
</footer>

</div>



<div id="toTop" class="btn back-top" style="display: none;">
	<span class="ti-arrow-up"></span>
</div>
<script>

    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>

</body>
</html>
