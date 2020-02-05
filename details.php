<?php 

    
    $active='Krepselis';
    include("includes/header.php");

?>

   
<div id="content"><!-- content pradzia -->

	<div class="container"><!-- container pradzia -->
		
		<div class="col-md-3"><!-- col-md-3 pradzia -->
		
			<?php

			include ("includes/sidebar.php");

			?>
		
		</div><!-- col-md-3 pabaiga -->
		
			<div class="col-md-9"><!-- col-md-9 pradzia -->
			
				<div id="productMain" class="row"><!-- row pradzia -->
				
					<div class="col-sm-6"><!-- col-sm-6 pradzia -->
					
						<div class="mainImage"><!-- mainImage pradzia -->
					
						<div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide pradzia -->
						
							<ol class="carousel-indicators"><!-- carousel-indicators pradzia -->
							
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol><!-- carousel-indicators pabaiga -->
							
							<div class="carousel-inner"><!-- carousel-inner pradzia -->
							
								<div class="item active">
									<center> <img src="administratorius/produktai/<?php echo $pro_img;?>" alt="1 preke"></center>
								</div>
								<div class="item">
									<center> <img src="administratorius/produktai/<?php echo $pro_img;?>" alt="2 preke"></center>
								</div>
								<div class="item">
									<center> <img src="administratorius/produktai/<?php echo $pro_img;?>" alt="3 preke"></center>
								</div>
							</div><!-- carousel-inner pabaiga -->
							
							<a href="#myCarousel" class="left carousel-control" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Atgal</span>
							</a>
						
						<a href="#myCarousel" class="right carousel-control" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Pirmyn</span>
							</a>
						
						</div><!-- carousel slide pabaiga -->
						
						</div><!-- mainImage pabaiga -->
					
					</div><!-- col-sm-6 pabaiga -->
				
					<div class="col-sm-6"><!-- col-sm-6 pradzia -->
							
							<div class="box"><!-- box pradzia -->
								
								<h1 class="text-center"> <?php  echo $pro_title; ?> </h1>
								
								<?php add_cart(); ?>
								
									 <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post"><!-- form-horizontal Begin -->

									
										<div class="form-group"><!-- form-group pradzia-->
										<label for="" class="col-md-5 control-label">Kiekis</label>   
										
										<div class="col-md-7"><!-- col-md-7 pradzia-->
										
											<select name="product_qty" id="" class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											</select>
										</div><!-- col-md-7 pabaiga-->
								</div><!-- form-group pabaiga-->
								
								<div class="form-group"><!-- form-group pradzia-->
										<label for="" class="col-md-5 control-label">Dydis</label>   
										
										<div class="col-md-7"><!-- col-md-7 pradzia-->
										
											<select name="product_size" id="" class="form-control">
											<option>Pasirinkite dydį</option>
											<option>XS</option>
											<option>S</option>
											<option>M</option>
											<option>L</option>
											<option>XL</option>
											</select>
										</div><!-- col-md-7 pabaiga-->
								</div><!-- form-group pabaiga-->
								
								<p class="price"><?php echo $pro_price; ?> eu</p>
								
								<p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Pridėti į krepšelį </button> </p>
								
									</form><!-- form-horizontal method pabaiga-->
							</div><!-- box pabaiga -->
							
							
					</div><!-- col-sm-6 pabaiga -->
				
				</div><!-- row pabaiga -->
				
				
				<div class="box" id="details">
				
				
						<h4>Apie prekę </h4>
						
						<p>
						
						<?php echo $pro_desc; ?>
						</p>
						
						<h4>Dydžiai</h4>
						
						<ul>
						
							<li>XS</li>
							<li>S</li>
							<li>M</li>
							<li>L</li>
							<li>XL</li>
						</ul>
					<hr>
					
				</div>
			
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