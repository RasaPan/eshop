<?php 

    $active='Home';
    include("includes/header.php");

?>


<div class="container" id="slider"><!-- container pradzia  -->

	<div class="col-md-12"><!-- col-md-12 pradzia -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide pradzia -->
               
               <ol class="carousel-indicators"><!-- carousel-indicators pradzia -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   
                   
               </ol><!-- carousel-indicators pabaiga -->
               
               <div class="carousel-inner"><!-- carousel-inner praddzia -->
                   
                  
                   <?php
				   
				   $get_slides = "select * from slider LIMIT 0,1";
				   
				   $run_slides= mysqli_query($con,$get_slides);
				   
				   while($row_slides=mysqli_fetch_array($run_slides)){
					   
					   $slide_name = $row_slides['slide_name'];
					   $slide_image = $row_slides['slide_image'];
					   
					   echo "
					   
					   <div class='item active'>
					   
					   <img src='Administratorius/slides_images/$slide_image'>
					   
					   
					   </div>
					   
					   ";
				   }
				   $get_slides = "select * from slider LIMIT 1,2";
				   
				   $run_slides= mysqli_query($con,$get_slides);
				   
				   while($row_slides=mysqli_fetch_array($run_slides)){
					   
					   $slide_name = $row_slides['slide_name'];
					   $slide_image = $row_slides['slide_image'];
					   
					   echo "
					   
					   <div class='item'>
					   
					   <img src='Administratorius/slides_images/$slide_image'>
					   
					   
					   </div>
					   
					   ";
				   }
				   ?>
                  
                   
               </div><!-- carousel-inner pabaiga -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control pradzia -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Atgal</span>
                   
               </a><!-- left carousel-control pabaiga -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control pradzia -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Pirmyn</span>
                   
               </a><!-- left carousel-control pabaiga -->
               
           </div><!-- carousel slide pabaiga -->
           
       </div><!-- col-md-12 pabaiga-->
	
</div><!-- container pabaiga  -->

<div id="advantages">
	<div class="container"><!-- container pradzia  -->
	
		<div class="same-height-row"><!-- same-height-row pradzia  -->
		
			<div class="col-sm-6"><!-- col-sm-8 pradzia  -->
			
				<div class="box same-height"><!-- box same-height pradzia -->
				
				<h3> Niekada nebuvau taip lengvai užsisakiusi prekių!</h3>
					<p> Nijolė, 23, Vilnius </p>
				
				</div><!-- box same-height pabaiga -->
			
			</div><!-- col-sm-8 pabaiga -->
			
			<div class="col-sm-6"><!-- col-sm-8 pradzia  -->
			
				<div class="box same-height"><!-- box same-height pradzia -->
				
				<h3> Pati mėgstamiausia drabužių parduotuvė!</h3>
					<p> Vitalijus, 40, Kretinga </p>
				
				</div><!-- box same-height pabaiga -->
			
			</div><!-- col-sm-8 pabaiga -->
			
		</div><!-- same-height-row pabaiga  -->
		
	</div><!-- container pabaiga -->
</div>

<div id="hot"><!-- hot pradzia  -->

	<div class="container"><!-- container pradzia  -->
	
		<div class="col-md-12"><!-- col-md-12 pradzia  -->
		
			<h2>
			Naujausi pasiūlymai
			</h2>
		
		</div><!-- col-md-12 pabaiga  -->
	
	</div><!-- container pabaiga  -->

</div><!-- hot pabaiga  -->

<div id="content" class="container"><!-- container pradzia  -->

	<div class="row"><!-- row pradzia  -->
	
	<?php
	
	getPro();
	
	?>
	
	</div><!-- row pabaiga  -->
	
</div><!-- container pabaiga  -->

<?php

	include ("includes/footer.php");

?>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

</body>
</html>