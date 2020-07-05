<div class="content-wrapper" style="min-height: 448px;">

	<!-- Page Title -->
	<section class="content-header">
		<div class="header-icon">
			<i class="pe-7s-note2"></i>
		</div>
		<div class="header-title">
			<h1>Add Product</h1>
			<!-- <small class="">Manage your credit customer</small> -->
			<ol class="breadcrumb">
				<li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
				<li><a href="#">Product</a></li>
				<li class="active">Add Product</li>
			</ol>
		</div>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<?php echo $this->session->flashdata('message'); ?>
			<div class="col-sm-12">
				<!--add supplier category-->
				<div class="panel panel-bd lobidrag invent-main">
					<div class="panel-heading">
						<div class="panel-title">
							<h4>Add Product</h4>
							<?php if($this->session->flashdata("udate_msg")){
								echo $this->session->flashdata("udate_msg");
							} ?>
						</div>
					</div>

					<!-- form here -->

					<div class="panel-body addit">
						<form action="add-product" method="post" accept-charset="utf-8" enctype="multipart/form-data">


							<div class="row">
										<div class="col-sm-5">
										<label for="expire_date" class=" col-form-label">Product Name
											<i class="text-danger">*</i>
										</label><br>
											<input class="form-control" id="category_name" name="product_name" type="text" required>
										</div>
								<div class="col-sm-5">
									<label for="expire_date" class=" col-form-label">Orignial Price
										<i class="text-danger">*</i>
									</label><br>
									<input class="form-control" id="category_name" name="original_price" type="text" required>

								</div>
							</div>
							<div class="row">

								<div class="col-sm-5">
									<label for="expire_date" class=" col-form-label">Discounted Price
										<i class="text-danger">*</i>
									</label><br>
									<input class="form-control" id="category_name" name="discounted_price" type="text" required>
								</div>
									<div class="col-sm-5">
										<label for="expire_date" class=" col-form-label"> Video
											<i class="text-danger">*</i>
										</label><br>
										<input class="form-control" id="category_name" name="video" type="file" required accept=".mp4,.3gp,.flv,.mp3">
									</div>

							</div>
							<div class="row">

								<div class="col-sm-5">
									<label for="expire_date" class=" col-form-label">Product Image
										<i class="text-danger">*</i>
									</label><br>
									<input class="form-control"  name="product_image[]" type="file" required accept=".JPEG,.GIF,.PNG" multiple>
								</div>
								<div class="col-sm-5">
									<label for="expire_date" class=" col-form-label"> Slider Image
										<i class="text-danger">*</i>
									</label><br>
									<input class="form-control"  name="slider_image[]" type="file" required accept=".JPEG,.GIF,.PNG" multiple>
								</div>

							</div>
							<div class="row">

								<div class="col-sm-10">
									<label for="expire_date" class=" col-form-label">Product Discription
										<i class="text-danger">*</i>
									</label><br>
									<textarea class="form-control" id="category_name" name="product_description" type="text" required></textarea>
								</div>
							</div>

							<div class="form-group row" style="margin-top: 10px;">
								<div class="col-sm-10">
									<button type="submit" value="Yes" name="addproduct"class="btn btn-large btn-success" style="padding: 7px;font-size: 21px; float: right;">Save</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>



<!-- footer -->
<footer class="main-footer">
	<strong>
		Copyright © 2019 <a href="http://hhmarineproducts.com" target="_blank">HH Marine Products.</a>  All rights reserved.  	</strong>
	<!-- <i class="fa fa-heart color-green"></i> -->
</footer>

</div>
<!-- ./wrapper -->



<div id="toTop" class="btn back-top" style="display: none;">
	<span class="ti-arrow-up"></span>
</div>
</body>
</html>
