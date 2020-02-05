<!DOCTYPE html>
<html lang="lt">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1">
	<title>Internetine parduotuve </title>
	<link rel="stylesheet" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/styles.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

<div id="top"> <!-- Virsus-->

	<div class="container"> <!-- Container pradzia-->
	
		
			<div class="col-md-6 offer"><!-- col-md-6 offer pradzia-->
				<a href="#" class ="btn btn-success btn-sm">Sveiki!</a>
				<a href="checkout.php">4 daiktai Jusu krepselyje | Bendra suma: 300e </a>
			</div><!-- col-md-6 offer pabaiga -->
		
		<div class="col-md-6"><!-- col-md-6 pradzia-->
			<ul class="menu"><!-- meniu pradzia-->
				<li> 
					<a href="../customer_register.php">Registracija</a>
				</li>
				<li>
					<a href="../checkout.php">Profilis</a>
				</li>
				<li>
					<a href="../cart.php">Prekių krepšelis</a>
				</li>
				<li>
					<a href="../checkout.php">Prisijungti</a>
				</li>
			</ul><!-- meniu pabaiga-->
		</div><!-- col-md-6 pabaiga-->
	</div><!-- Container pabaiga-->


</div><!-- Virsaus pabaiga-->

<div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default pradzia -->

<div class="container"><!-- container pradzia -->
           
           <div class="navbar-header"><!-- navbar-header pradzia -->
               
               <a href="../index.php" class="navbar-brand home"><!-- navbar-brand home pradzia -->
                   
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
                       
                       <li>
                           <a href="../index.php">Pagrindinis </a>
                       </li>
                       <li >
                           <a href="../shop.php">Parduotuvė</a>
                       </li>
                       <li  class="active">
                           <a href="my_account.php">Mano paskyra</a>
                       </li>
                       <li>
                           <a href="../cart.php">Prekių krepšelis</a>
                       </li>
                       <li>
                           <a href="../contact.php">Susisiekite</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left pabaiga -->
                   
               </div><!-- padding-nav pabaiga -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary pradzia -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>4 daiktai Jūsų krepšelyje</span>
                   
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
   
<div id="content"><!-- content pradzia -->

	<div class="container"><!-- container pradzia -->
		
		<div class="col-md-3"><!-- col-md-3 pradzia -->
		
			<?php

			include ("includes/sidebar.php");

			?>
		
		</div><!-- col-md-3 pabaiga -->
		
		<div class="col-md-9"><!-- col-md-9 pradzia -->
		
			<div class="box"><!-- box pradzia -->
			
				<h1 align="center"> Patvirtinkite savo užsakyma </h1>
				
				<form action="confirm.php" method="post.php" enctype="multipart/form-data"><!-- form pradzia -->
				
					<div class="form-group"><!-- form-group pradzia -->
					
						<label> Užsakymo nr. </label>
						
						<input type="text" class="form-control" name="invoice_no" required>
					
					</div><!-- form-group pabaiga -->
					
					<div class="form-group"><!-- form-group pradzia -->
					
						<label> Kiekis</label>
						
						<input type="text" class="form-control" name="amount_sent" required>
					
					</div><!-- form-group pabaiga -->
					
					<div class="form-group"><!-- form-group pradzia -->
					
						<label> Pasirinkite apmokėjimo būdą:</label>
						
						<select name="payment_mode" class="form-control">
						
							<option>Pasirinkite apmokėjimo būdą </option>
							<option>El.Bankininkyste </option>
							<option>PaySera </option>
						</select>
					
					</div><!-- form-group pabaiga -->
					
					<div class="form-group"><!-- form-group pradzia -->
					
						<label> Kiekis</label>
						
						<input type="text" class="form-control" name="amount_sent" required>
					
					</div><!-- form-group pabaiga -->
				
				</form><!-- form pabaiga -->
			
			</div><!-- box pabaiga -->
			
		
		</div><!-- col-md-9 pabaiga -->
			
		</div><!-- container pabaiga -->
	
</div><!-- content pabaiga -->


   
<?php

	include ("includes/footer.php");

?>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>	