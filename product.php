<html>
	<head>
		<meta charset ="utf-8">
			<meta name ="viewport" content="width=device-width">
			<meta name="description" content="Affordable Web Design For Small And Medium-sized Companies">
			<meta name="author" content="Martin Kinkead">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Cinemagic</title>
			<link rel="stylsheet" herf="./css/style.css">
	</head>
	<body>
		<header>
			<div class="container">
				<div id="branding">
					<h1> <span class="highlight">pro</span>ducts</h1>
				</div>
				<nav>
					<ul>
					<li class="current"><a href="index.html">Home</a></li>
					<li><a href="product.php">Product</a></li>
					<li><a href="#">Booking</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contactus.html">Contactus</a></li>
					<li  class="current"><a
	herf="products.php">Products</a><li>
					<li><a href="ligin.php">Login</a><li>
				</ul>
			</nav>
			</div>
	</header>
	<section class="main">
		<div class="container">
			<article id="main-col">
				<h1 class="page-title">
					Products
					</h1>
					<p>
	
	<?php
	
		session_start();
		include('./db.php');
		$status="";
		if (isset($_POST['product_code']) && $_POST['product_code']!=""){
			$code = $_POST['product_code'];
			$result = mysqli_query(
			$con,
			"SELECT & FROM `products` WHERE product_code`='$code'"
			);
			
	$row = mysqli_fetch_assoc($result);
	$name = $row['product_name'];
	$code = $row['product_code'];
	$price = $row['product_price'];
	$image = $row['product_image'];
	
	$cartArray = array(
		$code=>array(
		'nmae'=>$nmae,
		'code'=>$code,
		'price'=>price,
		'quantity'=>1,
		'image'=>$image)
	);
	
	if(empty($_SESSION["shopping_cart"])) {
		$_SESSION["shopping_cart"] = $cartArray;
		$status = "<div class='box'>Product is added to your cart!</div>";
	}else{
		$array_keys = array_keys($_SESSION["shopping_cart"]);
		if(in_array($code,$array_keys)) {
			$status = "<div class='box' style='color:red;'>
			Product is already added to your cart!</div>";
		} else {
		$_SESSION["shopping_cart"] = array_merge(
		$_SESSION["shopping_cart"],
		$cartArray
		);
		$status = "<div class='box'>Product is added to your cart!</div>";
		}
	}
		
	}
	?>
	
	<?php
	if(!empty($_SESSION["shopping_cart"])) {
		$cart_count = count(array_keys($_SESSION["shopping_cart"]));
		?>
		<div class="cart_div">
		<a href="cart.php"><img src="images/cart1.png" /> Cart<span>
		<?php echo $cart_count; ?></span></a>
		</div>
	<?php
	}
	?>
	
	<div class="grid-container">
	
	<?php
	
	$result = mysqli_query($con, "SELECT * FROM `products`");
	
	while($row = mysqli_fetch_assoc($result)){
		echo "
		
		<div class='grid-item'>
				<form mrthod='post' action=''>
						<div class='product_wrapper'>
						<input type='hidden' name='product_code'
	value=".$row['product_code']."/>
								<img style='height:191px;width:264px;'
	src='".$row['product_image']."' />
								<input type='hidden' name='product_code'
	value=".$row['product_code']." />
								<div class='name'>".$row['product_name']."</div>
								<div class='price'>£".$row['product_price']."</div>
								<button type='submit' class='buy'>Buy Now</button>
							</form>
							</div>
						</div>";
					}
			mysqli_close($con);
			?>
			
			<div style="clear:both;"></div>
			
			<div class="message_box" style="margin:10px 0px;">
			<?php echo $status; ?>
			</div>
			