<?php require_once 'includes/header.php';?>
    <main style="margin-top: 50px;">
        <section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h1>Manage products</h1>
				</div>
				<button class="button" style="width: 100%;">
					<a class="btn btn-primary" style="margin:auto; margin-top: 100px;" href="#addProduct">+ Add Product</a>
				</button>
				<div class="new-arrivals-content">
					<div class="row">
                    <?php 
                    require_once 'Controller/productController.php';
                    $test=new productController;
                    $post=$test->getProducts();
                    foreach ($post as $key => $value) { ?>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="<?=$value['productPic'];?>" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="new-arrival-cart abc">
										<p>
												<span style="margin-right: 10px;"><a href="?p=u&id=<?=$value['productId'];?>"><i class="fa-solid fa-pen-to-square"></i></a></span>
												<span style="margin-left: 10px;"><a href="?p=a&a=delete&id=<?=$value['productId'];?>"><i class="fa-solid fa-trash"></i></a></span>
											    
										</p>
									</div>
								</div>
								<h4><a href="#"><?=$value['productName'];?></a></h4>
								<p class="arrival-product-price">$<?=$value['productPrice'];?></p>
							</div>
						</div>
                    <?php } ?>
					</div>
				</div>
			</div><!--/.container-->
		<p id="addProduct"></p>
		</section>

    </main>
	<center>
		<section class="message" style="margin-bottom:150px;">
		<h3 class="size">Add Product</h3><br>
		 <form action="?a=add&p=a" method="post" enctype="multipart/form-data">
                <label>product Name :</label><br>
				<input class="inputA" type="text" name="productName" placeholder="Product Name">
				<br>
                <label>product Price :</label><br>
				<input class="inputA" type="text" name="productPrice" placeholder="Product Price">
				<br>
                <label>product image :</label><br>
                <input class="inputA " type="file" name="productPic" id="">
				<input class="inputA" style="background-color:#e99c2e; color:white;" name="submit" type="submit" class="Envoyer" value="Envoyer">
		 </form>
	    </section>
	</center>  
    <?php require_once 'includes/footer.php';?>