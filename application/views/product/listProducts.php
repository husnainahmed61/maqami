<br>

<div class="container">
	<div class="row">
		<?php foreach ($allProducts as $key => $product){?>
			<div class="col-md-4 col-sm-12" style="padding: 10px;">
				<div class="card" style="width: 23rem;">
					<img src="//placehold.it/500x280" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><?=$product['product_name']?></h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="<?=base_url()?><?=$product['uri']?>" class="btn btn-primary">Buy Now!</a>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>

</div>
