<div class="content-wrapper" style="min-height: 448px;">

	<!-- Page Title -->
	<section class="content-header">
		<div class="header-icon">
			<i class="pe-7s-note2"></i>
		</div>
		<div class="header-title">
			<h1>Update Product</h1>
			<!-- <small class="">Manage your credit customer</small> -->
			<ol class="breadcrumb">
				<li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
				<li><a href="#">Product</a></li>
				<li class="active">Update Product</li>
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
							<h4>Update Product</h4>
							<?php if($this->session->flashdata("udate_msg")){
								echo $this->session->flashdata("udate_msg");
							} ?>
						</div>
					</div>

					<!-- form here -->

					<div class="panel-body addit">
						<form action="<?=base_url()?>Dashboard/editproduct" method="post" enctype="multipart/form-data">
							<input type="hidden" name="productid" value="<?php echo $getproduct['id'];?>">
							<div class="row">
								<div class="col-sm-6">
									<label for="expire_date" class=" col-form-label">Product Name
										<i class="text-danger">*</i>
									</label><br>
									<input class="form-control" name="product_name" type="text" required value="<?php echo $getproduct['product_name'];?>">
								</div>
								<div class="col-sm-6">
									<label for="expire_date" class=" col-form-label">Actual Price
										<i class="text-danger">*</i>
									</label><br>
									<input class="form-control" name="original_price" type="number" min="0" required value="<?php echo $getproduct['original_price'];?>">

								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<label for="expire_date" class=" col-form-label">Discounted Price
									</label><br>
									<input class="form-control" name="discounted_price" type="number" min="0" value="<?php echo $getproduct['discounted_price'];?>">
								</div>
								<div class="col-sm-6" align="left">
									<label for="expire_date" class=" col-form-label">Product Description
									</label><br>
									<textarea class="form-control" name="product_description" type="text"><?php echo $getproduct['product_description'];?></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<label for="expire_date" class=" col-form-label">Product Images
									</label><br>
									<input class="form-control" id="category_name" name="product_image[]" type="file" multiple accept=".JPEG,.GIF,.PNG">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<?php foreach ($getproductimage as $img) {?>
										<img src="<?=base_url()?>uploads/productimage/<?php echo $img['product_image']?>" class="img-responsive" width="100px" style="float: left;height: 100px; margin: 10px">
									<?php } ?>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<label for="expire_date" class=" col-form-label">Slider Images
									</label><br>
									<input class="form-control" id="category_name" name="slider_image[]" type="file"  multiple accept=".JPEG,.GIF,.PNG" ">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<?php foreach ($getsliderimage as $img) {?>
										<img src="<?=base_url()?>uploads/slider/<?php echo $img['image']?>" class="img-responsive" width="100px" style="float: left;height: 100px; margin: 10px">
									<?php } ?>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<label for="expire_date" class=" col-form-label"> Video
									</label><br>
									<input class="form-control" id="category_name" name="video" type="file" value="<?php echo $getproduct['video'];?>" accept=".mp4,.3gp,.flv,.mp3"><br>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<br>
									<iframe width="100%" height="" src="<?=base_url()?>/uploads/<?php echo $getproduct['video'];?>" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>

							<div class="form-group row" style="margin-top: 10px;">
								<div class="col-sm-12">
									<button type="submit" value="Yes" name="editproduct"class="btn btn-success" style="padding: 7px;font-size: 21px; float: right;">Update Product</button>
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




<div id="toTop" class="btn back-top" style="display: none;">
	<span class="ti-arrow-up"></span>
</div>




</body>
</html>
