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
						</div>
					</div>

					<div class="panel-body">
						<table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
							<tr>
								<th>#</th>
								<th >Name</th>
								<th>Created At</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
							$i = 1;
							foreach($getvariationproduct  as $key => $value) {?>
								<tr>
									<td><?=$i;?></td>
									<td><?=$value['variation_name'];?></td>
									<td><?=$value['created_at'];?></td>
									<td>
										<a href="updatevariation-view/<?php echo $value['id']; ?>" class="btn btn-info btn-sm" title="Edit" style="padding: 5px;">
											<!--											<i class="la la-edit white"></i>-->
											Edit
										</a>
										<a  href="<?php echo base_url();?>dashboard/deleteVariation/<?php echo $value['id'];?>" class="btn btn-danger btn-sm delete">Delete</a
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

    $(document).ready(function(event) {
        $('#example').DataTable();

        $(".delete").click(function(e){
            alert("Are you sure Delete");
            e.preventDefault();
            var href = $(this).attr("href");
            var btn = this;

            $.ajax({
                type: "POST",
                url: href,
                success: function(response) {

                    if (response == "Success")
                    {
                        $(btn).closest('tr').fadeOut("slow");
                    }
                    else
                    {
                        alert("Error");
                    }

                }
            });

        })

    });

</script>

</body>
</html>
