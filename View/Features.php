<?php require_once 'includes/header.php';?>
        <!--feature start -->
		<section id="feature" class="feature">
			<div class="container">
				<div class="section-header">
					<h1>featured products</h1>
				</div><!--/.section-header-->
				<div class="feature-content">
					<div class="row">
					<?php 
                    require_once 'Controller/productController.php';
                    $test=new productController;
                    $post=$test->getProducts();
                    foreach ($post as $key => $value) { ?>
						<div class="col-sm-3">
							<div class="single-feature">
								<img src="<?=$value['productPic'];?>" alt="feature image">
								<div class="single-feature-txt text-center">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
										<span class="feature-review">(45 review)</span>
									</p>
									<h3><a href="#"><?=$value['productName'];?></a></h3>
									<h5>$<?=$value['productPrice'];?></h5>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.feature-->
		<!--feature end -->
        <?php require_once 'includes/footer.php';?>