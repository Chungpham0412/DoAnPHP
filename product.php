<?php 
include "header.php";

$product = mysqli_query($connection,"SELECT * FROM product");
?>		

		<!-- Begin Main -->
		<div role="main" class="main">
			<!-- Begin Main Slide -->

			<!-- End Main Slide -->
			
			<!-- Begin Ads -->
	<!-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"> -->
		
	</div>
			<!-- End Ads -->
			
			<!-- Begin Top Selling -->
			<section class="products-slide">
				<div class="container">
					<br>
					<!-- <h2 class="title" style="font-family: Georgia"><span>Sản phẩm thời trang</span></h2> -->
					<div class="row">
						<div >
						<?php foreach ($product as $pro ) { ?>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 animation">
								<div class="item product">
									<div class="product-thumb-info">
										<div class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<a href="product_detail.php?id=<?php echo $pro['id'] ?>">
													<span><i class="fa fa-external-link"></i></span>
												</a>
												<a href="" class="add-to-cart-product">
													<span><i class="fa fa-shopping-cart"></i></span>
												</a>
											</span>
											<img alt="" class="img-responsive" src="uploads/<?php echo $pro['image'] ?>">
										</div>
										<?php if($pro['sale_price']==0) :?>
										<div class="product-thumb-info-content">
											<span class="price pull-right" style="text-decoration: none"><?php echo $pro['price']." "."VNĐ" ; ?></span>
											<h4><a href=""><?php echo $pro['name'] ?></a></h4>
										</div>
										<?php elseif ($pro['sale_price']>0) :?>
										<div class="product-thumb-info-content">
											<span class="price_ pull-right" style="text-decoration: line-through"><?php echo $pro['price']." "."VNĐ" ; ?></span>
											<h4><a href=""><?php echo $pro['name'] ?></a></h4>
											<span class="item-cat"><small><a href="#">Giá khuyến mãi </a> </small> <span class="price pull-right"><?php echo $pro['sale_price']." "."VNĐ" ?></span></span>
										</div>
										
									<?php endif; ?>
									</div>
								</div>
							</div>
							<?php } ?>

						</div>
					</div>
				</div>
			</section>
			<!-- End Top Selling -->
			
			<!-- Begin Lookbook Women -->

			<!-- End Lookbook Women -->
			
			<!-- Begin New Products -->

			<!-- End New Products -->
			
			<!-- Begin Parallax -->
			

		</div>
			<!-- End Parallax -->
			
			<!-- Begin Latest Blogs -->

			<!-- End Latest Blogs -->
			
		</div>
		<!-- End Main -->
<?php include "footer.php" ?>