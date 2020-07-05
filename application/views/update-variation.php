<div class="content-wrapper" style="min-height: 448px;">

	<!-- Page Title -->
	<section class="content-header">
		<div class="header-icon">
			<i class="pe-7s-note2"></i>
		</div>
		<div class="header-title">
			<h1>Add Variation</h1>
			<!-- <small class="">Manage your credit customer</small> -->
			<ol class="breadcrumb">
				<li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
				<li><a href="#">Product Variation</a></li>
				<li class="active">Add Variation</li>
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
							<h4>Add Variation</h4>
							<?php if($this->session->flashdata("udate_msg")){
								echo $this->session->flashdata("udate_msg");
							} ?>
						</div>
					</div>

					<!-- form here -->

					<div class="panel-body addit">
						<form action="<?=base_url();?>dashboard/editvariation" method="post" accept-charset="utf-8">
							<input type="hidden" name="variationid" value="<?php echo $getvariationproduct['id'];?>">
							<div class="row">
								<div class="col-sm-10">
									<label for="expire_date" class=" col-form-label">Variation Name
										<i class="text-danger">*</i>
									</label><br>
									<input class="form-control" id="category_name" name="variation_name" type="text" required value="<?php echo $getvariationproduct['variation_name'];?>">
								</div>
							</div>
							<div class="form-group row" style="margin-top: 10px;">
								<div class="col-sm-10">
									<button type="submit" value="Yes" name="updatevariation"class="btn btn-large btn-success" style="padding: 7px;font-size: 21px; float: right;">Save</button>
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

