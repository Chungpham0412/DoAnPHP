<?php include "header.php"; 
//sanr phaam lien qua
$pro = mysqli_query($connection,"SELECT * FROM product WHERE status = 1 LIMIT 10");

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$query= mysqli_query($connection,"SELECT * FROM product WHERE id = $id");
$pro_detail = mysqli_fetch_assoc($query);

?>
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="product-preview">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="public/images/content/products/product-1.jpg">
							<img src="public/images/content/products/product-1.jpg" alt="">
						</li>
						<li data-thumb="public/images/content/products/product-1-1.jpg">
							<img src="public/images/content/products/product-1-1.jpg" alt="">
						</li>
						<li data-thumb="public/images/content/products/product-1-2.jpg">
							<img src="public/images/content/products/product-1-2.jpg" alt="">
						</li>
						<li data-thumb="public/images/content/products/product-1-3.jpg">
							<img src="public/images/content/products/product-1-3.jpg" alt="">
						</li>
						<li data-thumb="public/images/content/products/product-1-4.jpg">
							<img src="public/images/content/products/product-1-4.jpg" alt="">
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="summary entry-summary">

				<h1 style="padding:0 0 20px 0; text-align: center; font-weight: bold; font-family: Time New Roman; font-size: 30px"><?php echo $pro_detail['name']  ?></h1>

								<span class="amount" style="padding: 15px 0">
									<?php if($pro_detail['sale_price']==0) :?>
										<div class="product-thumb-info-content">
											<span class="price pull-left" style="text-decoration: none"><?php echo $pro_detail['price']." "."VNĐ" ; ?></span>
										</div>
									<?php elseif ($pro_detail['sale_price']>0) :?>
										<div class="product-thumb-info-content">
											<span class="pull-leftl" style="text-decoration: line-through"><?php echo $pro_detail['price']." "."VNĐ" ; ?></span>
											<span class="item-cat"><span class="price pull-left"><?php echo $pro_detail['sale_price']." "."VNĐ" ?></span></span>
										</div>
									<?php endif; ?>
								</span>
								<div class="clearfix"></div>
								<ul class="list-inline list-select clearfix">
									<li>
										<div class="list-sort">
											<select class="formDropdown">
												<option>Select Size</option>
										
	
											</select>
										</div>
									</li>
									<li class="color"><a href="#" class="color1"></a></li>
									<li class="color"><a href="#" class="color2"></a></li>
									<li class="color"><a href="#" class="color3"></a></li>
									<li class="color"><a href="#" class="color4"></a></li>
								</ul>

								<form method="post" class="cart">
									<div class="quantity pull-left">
										<input type="button" class="minus" value="-">
										<input type="text" class="input-text qty" title="Qty" value="1" name="quantity" min="1" step="1">
										<input type="button" class="plus" value="+">
									</div>
									
									<button href="#" class="btn btn-primary btn-icon"><i class="fa fa-shopping-cart"></i> Add to cart</button>
								</form>

								<ul class="list-unstyled product-meta">
									<li>Sku: 54329843</li>
									<li>Categories: <a href="#">Leather</a> <a href="#">Jeans</a> <a href="#">Men</a></li>
									<li>Tags: <a href="#">Shoes</a> <a href="#">Jeans</a> <a href="#">Men</a> <a href="#">T-shirt</a></li>
								</ul>

								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Description</a> </h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in">
											<div class="panel-body"> 
												<p>Korem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. qui dolorem ipsum quia dolor sit amet.</p>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Addition Information</a> </h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
											<div class="panel-body"> <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p> </div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Reviews (3)</a> </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="panel-body post-comments">
												<ul class="comments">
													<li>
														<div class="comment">
															<div class="img-circle"> <img class="avatar" width="50" alt="" src="public/images/content/blog/avatar.png"> </div>
															<div class="comment-block">
																<span class="comment-by"> <strong>Frank Reman</strong></span>
																<span class="date"><small><i class="fa fa-clock-o"></i> January 12, 2013</small></span>
																<p>Lorem ipsum dolor sit amet.</p>
															</div>
														</div>
													</li>
													<li>
														<div class="comment">
															<div class="img-circle"> <img class="avatar" width="50" alt="" src="public/images/content/blog/avatar.png"> </div>
															<div class="comment-block">
																<span class="comment-by"> <strong>Frank Reman</strong></span>
																<span class="date"><small><i class="fa fa-clock-o"></i> July 11, 2014</small></span>
																<p>Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae</p>
															</div>
														</div>
													</li>
													<li>
														<div class="comment">
															<div class="img-circle"> <img class="avatar" width="50" alt="" src="public/images/content/blog/avatar.png"> </div>
															<div class="comment-block">
																<span class="comment-by"> <strong>Frank Reman</strong></span>
																<span class="date"><small><i class="fa fa-clock-o"></i> July 11, 2014</small></span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<section class="products-slide">
					<div class="container">
						<h2 class="title"><span>Sản phẩm liên quan</span></h2>
						<div class="row">
							<div id="owl-product-slide" class="owl-carousel product-slide">
								<?php foreach ($pro as $p) {?>
								<div class="col-md-12">
									<div class="item product">
									<div class="product-thumb-info">
										<div class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<a href="product_detail.php?id=<?php echo $p['id'] ?>">
													<span><i class="fa fa-external-link"></i></span>
												</a>
												<a href="handling_cart.php?id=<?php echo $p['id']?>" class="add-to-cart-product">
													<span><i class="fa fa-shopping-cart"></i></span>
												</a>
											</span>
											<img alt="" class="img-responsive" src="uploads/<?php echo $p['image'] ?>">
										</div>
										<?php if($p['sale_price']==0) :?>
										<div class="product-thumb-info-content" style="height: 30px">
											<span class="price pull-right" style="text-decoration: none"><?php echo number_format($p['price'])." "."đ" ; ?></span>
											<h4><a href=""><?php echo $p['name'] ?></a></h4>
										</div>
										<?php elseif ($p['sale_price']>0) :?>
										<div class="product-thumb-info-content" style="height: 30px">
											<span class="price_ pull-right" style="text-decoration: line-through"><?php echo number_format($p['price'])." "."đ" ; ?></span>
											<h4><a href=""><?php echo $p['name'] ?></a></h4>
											<span class="item-cat"><small><a href="#">Giá khuyến mãi </a> </small> <span class="price pull-right"><?php echo number_format($p['sale_price'])." "."đ" ?></span></span>
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
				<?php include "footer.php" ?>