<?php 
include "header.php";
//Banner
$banner = mysqli_query($connection,"SELECT * FROM banner where status = 1 ORDER BY ordering ASC");
//Top 10 sell
$product_sale = mysqli_query($connection,"SELECT * FROM product where sale_price > 0 && status = 1 ORDER BY sale_price DESC LIMIT 10");
//man
$product_man = mysqli_query($connection,"SELECT * FROM `category` join `product` on product.category_id = category.id where parent_id = 1 ORDER BY `product`.`name` DESC LIMIT 8");
//women
$product_woman = mysqli_query($connection,"SELECT * FROM `category` join `product` on product.category_id = category.id where parent_id = 2 ORDER BY `product`.`name` DESC LIMIT 8");
?>		
		<!-- Begin Login -->

		<!-- End Login -->
		
		<!-- Begin Main -->
		<div role="main" class="main">
			<!-- Begin Main Slide -->
			<section class="main-slide">
				<div id="owl-main-demo" class="owl-carousel main-demo">
				<?php foreach ($banner as $ban){ ?>
					<div class="item" id="item1"><img src="uploads/<?php echo $ban['image'] ?>" class="img-responsive" alt="Photo">
						<div class="item-caption">
							<div class="item-caption-inner">
								<div class="item-caption-wrap">
									<p class="item-cat"><a href="#"><?php echo $ban['name'] ?></a></p>
									<h2>Up to 50% off<br>on selected items</h2>
									<a href="#" class="btn btn-white hidden-xs">Shop Now</a>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
			</section>
			<!-- End Main Slide -->
			
			<!-- Begin Ads -->
			<section class="highlight">
				<div class="container">
					<div class="row row-narrow">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 animation">
							<div class="cat-item">
								<figure>
									<a href="shop-full-width.html"><img class="img-responsive" alt="" src="public/images/content/products/cat-4.jpg"></a>
									<figcaption>
										<div class="cat-description">
											<h3>Fashion and Style</h3>
											<a href="#">Read More</a>
										</div>
									</figcaption>
								</figure>
							</div>
						</div>
						<div class="col-xs-6 animation">
							<div class="cat-item">
								<figure>
									<a href="shop-full-width.html"><img class="img-responsive" alt="" src="public/images/content/products/cat-5.jpg"></a>
									<figcaption>
										<div class="cat-description">
											<h3>Men’s Shoes</h3>
											<a href="#">Read More</a>
										</div>
									</figcaption>
								</figure>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 animation">
							<div class="cat-item">
								<figure>
									<a href="shop-full-width.html"><img class="img-responsive" alt="" src="public/images/content/products/cat-6.jpg"></a>
									<figcaption>
										<div class="cat-description">
											<h3>Watch Style</h3>
											<a href="#">Read More</a>
										</div>
									</figcaption>
								</figure>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- End Ads -->
			
			<!-- Begin Top Selling -->
			<section class="products-slide">
				<div class="container">
					<h2 class="title"><span>Top Selling</span></h2>
					<div class="row">
						<div id="owl-product-slide" class="owl-carousel product-slide">
						<?php foreach ($product_sale as $pro ) {?>
							<div class="col-md-12 animation">
								<div class="item product">
									<div class="product-thumb-info">
										<div class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<a href="product_detail.php?id=<?php echo $pro['id']?>" class="view-product">
													<span><i class="fa fa-external-link"></i></span>
												</a>
												<a href="" class="add-to-cart-product">
													<span><i class="fa fa-shopping-cart"></i></span>
												</a>
											</span>
											<img alt="" class="img-responsive" src="uploads/<?php echo $pro['image'] ?>">
										</div>

										<div class="product-thumb-info-content">
											<span class="price_ pull-right" style="text-decoration: line-through"><?php echo $pro['price']." "."VNĐ" ; ?></span>
											<h4><a href=""><?php echo $pro['name'] ?></a></h4>
											<span class="item-cat"><small><a href="#">Giá khuyến mãi </a> </small> <span class="price pull-right"><?php echo $pro['sale_price']." "."VNĐ" ?></span></span>
										</div>
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
			<section id="lookbook">
				<div class="container">
					<div class="lookbook">
						<h2><a href="#">Lookbook Women</a></h2>
						<p>Etiam aliquam risus ante, quis ultrices enim porta a. Integer et dolor sit amet enim feugiat faucibus. Donec sit amet egestas orci. Proin facilisis mi ornare turpis sollicitudin; vel rutrum est viverra. Vestibulum hendrerit egestas semper.</p>
					</div>
				</div>
			</section>
			<!-- End Lookbook Women -->
			
			<!-- Begin New Products -->
			<section class="product-tab" style="padding-bottom: 50px">
				<div class="container">
					<h2 class="title"><span>New Products</span></h2>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs pro-tabs text-center animation" role="tablist">
						<li class="active"><a href="#man" role="tab" data-toggle="tab">Nam</a></li>
						<li><a href="#woman" role="tab" data-toggle="tab">Nữ</a></li>
						<!-- <li><a href="#accesories" role="tab" data-toggle="tab">Accesories</a></li> -->
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="man">
							<div class="row">
								<?php foreach ($product_man as $pro_man ) {?>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 animation" >
										<div class="product">
											<div class="product-thumb-info" >
												<div class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<a href="product_detail.php?id=<?php echo $pro_man['id'] ?>">
															<span><i class="fa fa-external-link"></i></span>
														</a>
														<a href="shop-cart-full.html" class="add-to-cart-product">
															<span><i class="fa fa-shopping-cart"></i></span>
														</a>
													</span>
													<img alt="" class="img-responsive" src="uploads/<?php echo $pro_man['image']?>">
												</div>
												<div class="product-thumb-info-content" style="height: 30px">
													<?php if($pro_man['sale_price']==0) :?>
														<div class="product-thumb-info-content">
															<span class="price pull-right" style="text-decoration: none"><?php echo $pro_man['price']." "."VNĐ" ; ?></span>
															<h4><a href=""><?php echo $pro_man['name'] ?></a></h4>
														</div>
														<?php elseif ($pro_man['sale_price']>0) :?>
															<div class="product-thumb-info-content">
																<span class="price_ pull-right" style="text-decoration: line-through"><?php echo $pro_man['price']." "."VNĐ" ; ?></span>
																<h4><a href=""><?php echo $pro_man['name'] ?></a></h4>
																<span class="item-cat"><small><a href="#">Giá khuyến mãi </a> </small> <span class="price pull-right"><?php echo $pro_man['sale_price']." "."VNĐ" ?></span></span>
															</div>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
									<?php }?>
							</div>
						</div>

						<!-- Sản phẩm -->
						<div class="tab-pane" id="woman">
							<div class="row">
								<?php foreach ($product_woman as $pro_woman ) { ?>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 animation">
										<div class="product">
											<div class="product-thumb-info">
												<div class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<a href="product_detail.php?id=<?php echo $pro_woman['id'] ?>">
															<span><i class="fa fa-external-link"></i></span>
														</a>
														<a href="shop-cart-full.html" class="add-to-cart-product">
															<span><i class="fa fa-shopping-cart"></i></span>
														</a>
													</span>
													<img alt="" class="img-responsive" src="uploads/<?php echo $pro_woman['image'] ?>">
												</div>
												<div class="product-thumb-info-content" style="height: 30px">
													<?php if($pro_woman['sale_price']==0) :?>
														<div class="product-thumb-info-content" >
															<span class="price pull-right" style="text-decoration: none"><?php echo $pro_woman['price']." "."VNĐ" ; ?></span>
															<h4><a href=""><?php echo $pro_woman['name'] ?></a></h4>
														</div>
														<?php elseif ($pro_woman['sale_price']>0) :?>
															<div class="product-thumb-info-content">
																<span class="price_ pull-right" style="text-decoration: line-through"><?php echo $pro_woman['price']." "."VNĐ" ; ?></span>
																<h4><a href=""><?php echo $pro_woman['name'] ?></a></h4>
																<span class="item-cat"><small><a href="#">Giá khuyến mãi </a> </small> <span class="price pull-right"><?php echo $pro_woman['sale_price']." "."VNĐ" ?></span></span>
															</div>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						
					</div>
					
				</div>
			</section>
			<!-- End New Products -->
			
			<!-- Begin Parallax -->
			
			<section class="pi-parallax" data-stellar-background-ratio="0.6" >
				<div class="container">
					<div id="owl-text-slide" class="owl-carousel">
						<div class="item">
							<blockquote>
								<p>Design is a funny word. Some people think design means how it looks. But of course, if you dig deeper, it’s really how it works.</p>
								<footer>by <cite title="Steve Jobs">Steve Jobs</cite></footer>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<p>They may forget what you said, but they will never forget how you made them feel.</p>
								<footer>by <cite title="Steve Jobs">Carl W. Buechner</cite></footer>
							</blockquote>
						</div>
					</div>
			
			</section>
		</div>
			<!-- End Parallax -->
			
			<!-- Begin Latest Blogs -->
			<section class="latest-blog">
				<div class="container">
					<h2 class="title"><span>Latest from the blog</span></h2>
					<div class="row">
						<div class="col-xs-6 animation">
							<article class="post">
								<div class="post-image">
									<span class="post-info-act">
										<a href="blog-single.html"><i class="fa fa-caret-right"></i></a>
									</span>
									<img class="img-responsive" src="public/images/content/blog/demo-1.jpg" alt="Blog">
								</div>
								<h3><a href="blog-single.html">Paris Fashion Week S/S 2014: womenswear collections</a></h3>
								<p class="post-meta">15th December 2014</p>
							</article>
						</div>
						<div class="col-xs-6 animation">
							<article class="post">
								<div class="post-image">
									<span class="post-info-act">
										<a href="blog-single.html"><i class="fa fa-camera"></i></a>
									</span>
									<img class="img-responsive" src="public/images/content/blog/demo-2.jpg" alt="Blog">
								</div>
								<h3><a href="blog-single.html">Show tunes: London Fashion Week S/S 2014's runway playlist</a></h3>
								<p class="post-meta">15th December 2014</p>
							</article>
						</div>
					</div>
				</div>
			</section>
			<!-- End Latest Blogs -->
			
		</div>
		<!-- End Main -->
<?php include "footer.php" ?>