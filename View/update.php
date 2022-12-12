<?php require_once 'includes/header.php';?>
	<body>
		<center>
	    <section class="message" style="margin-bottom:150px; margin-top:200px;">
		<h3 class="size">Update Product</h3><br>
		 <form action="?a=update&p=a&id=<?=$_GET['id']?>&o=done" method="post" enctype="multipart/form-data">
                <label>product Name :</label><br>
				<input class="inputA" type="text" value="<?=($action->select('productName',$_GET['id']))['productName']?>" name="productName" required placeholder="Product Name">
				<br>
                <label>product Price :</label><br>
				<input class="inputA" type="text" value="<?=($action->select('productPrice',$_GET['id']))['productPrice']?>" name="productPrice" required placeholder="Product Price">
				<br>
				<label>product Type :</label><br>
				<select class="inputA" required name="productType" id="">
					<option value="<?=($action->select('productType',$_GET['id']))['productType']?>">Type</option>
					<option value="New Arrivals">New Arrivals</option>
					<option value="Features">Features</option>
				</select>
				<br>
                <label>product image :</label><br>
                <input class="inputA " type="file" name="productPic" id="">
				<input class="inputA" style="background-color:#e99c2e; color:white;" name="submit" type="submit" class="Envoyer" value="Envoyer">
		 </form>
	    </section>
</center>
	</body>
<?php require_once 'includes/footer.php';?>
       