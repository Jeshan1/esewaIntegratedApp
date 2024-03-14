<?php include 'dbcon.php';
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
//var_dump($result);
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Esewa Payment Gateway</title>
		<link rel="stylesheet" href="bootstrap.min.css">
		<script src="bootstrap.bundle.min.js"></script>
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->
	</head>
	<body>
		<div class="container">
			<div class="pt-md-5">
				<h1 class="">Products</h1>
				<div class="row">
					
					<?php while( $product = mysqli_fetch_assoc($result)) {?>
					<div class="col-md-4">
						<div class="card" stylea="width: 18rem;">
							<div class="imagecontainer" style="height: 400px;">
								<img src="image/<?php echo $product['image']?>" class="card-img-top" alt="..." style="width: 100%; height: 100%;">
							</div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $product['title'];?></h5>
								<p class="card-text">Rs. <?php echo $product['amount'];?></p>
								<p class="card-text"><?php echo $product['description'];?></p>

								<form method="post" action="checkout.php">
									<input type="hidden" name="product_id" value="<?php echo $product['id'];?>">
									<input type="submit" name="submit" value="Buy Now" class="btn btn-success">
								</form>
							</div>
						</div>
					</div>
					<?php }?>
					
				</div>
			</div>
		</div>
	</body>
</html>