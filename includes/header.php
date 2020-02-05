<?php 

session_start();
include("includes/db.php");
include("functions/functions.php");

?>

<?php 

if(isset($_GET['pro_id'])){
   
	
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from produktai where product_id='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_product = mysqli_fetch_array($run_product);
    
    $p_cat_id = $row_product['p_cat_id'];
    
    $pro_title = $row_product['product_title'];
    
    $pro_price = $row_product['product_price'];
    
    $pro_desc = $row_product['product_desc'];
    
    $pro_img = $row_product['product_img'];
    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
}

?>



<!DOCTYPE html>
<html lang="lt">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1">
	<title>Internetine parduotuve </title>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
	
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

<div id="top"> <!-- Virsus-->

	<div class="container"> <!-- Container pradzia-->
	
		
			<div class="col-md-6 offer"><!-- col-md-6 offer pradzia-->
				<a href="#" class ="btn btn-success btn-sm">
				<?php 
				
				if(!isset($_SESSION['customer_email'])){
					echo "Sveiki!";
				}
				else{
					
					echo "Sveiki: " . $_SESSION['customer_email'] ."";
					
				}
				?>
				
				</a>
				<a href="checkout.php"><?php items(); ?> daiktai Jusu krepselyje | Bendra suma: <?php total_price(); ?></a>
			</div><!-- col-md-6 offer pabaiga -->
		
		<div class="col-md-6"><!-- col-md-6 pradzia-->
			<ul class="menu"><!-- meniu pradzia-->
				<li> 
					<a href="customer_register.php">Registracija</a>
				</li>
				<li>
					<a href="vartotojas/my_account.php">Profilis</a>
				</li>
				<li>
					<a href="cart.php">Prekių krepšelis</a>
				</li>
				<li>
					<a href="checkout.php">
					
					<?php
					if(!isset($_SESSION['customer_email'])){
					echo "<a href='checkout.php'>Prisijungti</a>";
				}
				else{
					
					echo "<a href='logout.php'>Atsijungti</a>";
					
				}
					
					
					?>
					
					</a>
				</li>
			</ul><!-- meniu pabaiga-->
		</div><!-- col-md-6 pabaiga-->
	</div><!-- Container pabaiga-->


</div><!-- Virsaus pabaiga-->

<div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default pradzia -->

<div class="container"><!-- container pradzia -->
           
           <div class="navbar-header"><!-- navbar-header pradzia -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home pradzia -->
                   
                   <img src="images/logo.png" alt="logo" class="hidden-xs">
                   <img src="images/logo2.png" alt="logo" class="visible-xs">
                   
               </a><!-- navbar-brand home pabaiga -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header pabaiga -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse pradzia -->
               
               <div class="padding-nav"><!-- padding-nav pradzia -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left pradzia -->
                       
                       <li class="<?php if($active=='Home') echo"active"; ?>">
                           <a href="index.php">PAGRINDINIS</a>
                       </li>
                       <li class="<?php if($active=='Shop') echo"active"; ?>">
                           <a href="shop.php">PARDUOTUVĖ</a>
                       </li>
                       <li class="<?php if($active=='Account') echo"active"; ?>">
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout.php'>MANO PASKYRA</a>";
                               
                           }else{
                               
                              echo"<a href='Vartotojas/my_account.php?my_orders'>MANO PASKYRA</a>"; 
                               
                           }
                           
                           ?>
                           
                       </li>
                       <li class="<?php if($active=='Cart') echo"active"; ?>">
                           <a href="cart.php">PREKIŲ KREPŠELIS</a>
                       </li>
                       <li class="<?php if($active=='Contact') echo"active"; ?>">
                           <a href="contact.php">SUSISIEKITE</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left pabaiga -->
                   
               </div><!-- padding-nav pabaiga -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary pradzia -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span><?php items(); ?> daiktai Jūsų krepšelyje</span>
                   
               </a><!-- btn navbar-btn btn-primary pabaiga -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right pradzia -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn pradzia -->
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-primary navbar-btn pabaiga -->
                   
               </div><!-- navbar-collapse collapse right pabaiga -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix pradzia -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form pradzia -->
                       
                       <div class="input-group"><!-- input-group pradzia -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn pradzia -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary pradzia -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary pabaiga -->
                           
                           </span><!-- input-group-btn pabaiga  -->
                           
                       </div><!-- input-group pabaiga  -->
                       
                   </form><!-- navbar-form pabaiga  -->
                   
               </div><!-- collapse clearfix pabaiga  -->
               
           </div><!-- navbar-collapse collapse pabaiga  -->
           
       </div><!-- container pabaiga  -->
       
   </div><!-- navbar navbar-default pabaiga  -->