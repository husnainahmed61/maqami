<div class="content-wrapper" style="min-height: 448px;">
	<!-- Page Title -->
	<section class="content-header">
		<div class="header-icon">
			<i class="pe-7s-note2"></i>
		</div>
		<div class="header-title">
			<h1>Add Variation In Product</h1>
			<!-- <small class="">Manage your credit customer</small> -->
			<ol class="breadcrumb">
				<li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
				<li><a href="#">Product In Variation</a></li>
				<li class="active">Add Variation In Product</li>
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
						<?php foreach ($variation as $key=> $value){?>

						<form action="<?=base_url();?>dashboard/addvariationvalue" method="post" accept-charset="utf-8">
							<input type="hidden" name="postid" value="<?php echo $productid;?>">
							<input type="hidden" name="variationid" value="<?php echo $value['id'];?>">
							<div class="row">
								<div class="col-sm-12 field<?=$key?>">
									<label for="expire_date" class=" col-form-label" style="border-bottom: 1px solid gainsboro; width: 100%; font-size: 15px;"><?php echo $value['variation_name'];?>
										<i class="text-danger">*</i>
									</label><br><br>
									<div>
										<label  style="float: left; padding-right: 25px;"><?php echo $value['variation_name'];?> Value:</label>
										<input class="form-control" id="input"  name="variation_name[]" type="text" value="" style="width: 45%;">
										<div style="    float: right;margin-top: -34px;">
											<button type="button" class="btn btn-primary add_btn" data-wrapper="field<?=$key?>" data-user='variation_name<?php echo $key;?>[]'>Add More</button>
											<button type="" class="btn btn-danger">Remove</button>
										</div>
									</div>
									</div>
									<div class="form-group row" style="margin-top: 10px;">
										<div class="col-sm-12">
										<br>
										<button type="submit" value="Yes" name="addvariationValue"class="btn btn-info btn-sm" style=" float: right; margin-right: 14px;">Add</button>
									</div>
								</div>
							</div>


						</form>
						<?php } ?>
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
<script>
    $(document).ready(function()
    {
        var x=0;
        var a=x++;
        var maxfield = 50;
        var addbutton = $('.add_btn');
       $(addbutton).click(function(){
            var wrapper = $(this).attr("data-wrapper");
            var wrapperClass= "."+wrapper;
		   $(wrapperClass).append('<div><label id="label" style="float: left; padding-right: 25px;"><?php echo $value['variation_name'];?>Value:</label><br><input class="form-control" id="input"  name="variation_name[]" type="text" required value="" style="width: 45%;"><div style="    float: right;margin-top: -34px;"></div>');

        });
    });
</script>

</body>
</html>


