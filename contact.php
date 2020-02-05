
   <?php
$active='Contact';include("includes/header.php");

?>
<div id="content"><!-- content pradzia -->

	<div class="container"><!-- container pradzia -->
		
		


		<div class="col-md-12"><!-- col-md-9 pradzia-->
		
			<div class="box"><!-- box pradzia-->
			
				<div class="box-header"><!-- box-header pradzia-->
				
					<center><!-- center pradzia-->
					
						<h2> Susisiekite su mumis! </h2>
						
						<p class="text-muted">
						
						Jei turite neaiškumų - susisiekite
						
						</p>
					
					</center><!-- center pabaiga-->
					
					<form action="contact.php" method="post"><!-- form pradzia-->
					
						<div class="form-group"><!-- form-group pradzia-->
						
							<label>Vardas</label>
							
							<input type="text" class="form-control" name="name" required>
						
						</div><!-- form-group pabaiga-->
						
						<div class="form-group"><!-- form-group pradzia-->
						
							<label>El.paštas</label>
							
							<input type="text" class="form-control" name="email" required>
						
						</div><!-- form-group pabaiga-->
						
						<div class="form-group"><!-- form-group pradzia-->
						
							<label>Žinutė</label>
							
							<textarea name="message" class="form-control"></textarea>
						
						</div><!-- form-group pabaiga-->
						
						<div class="text-center">
						
							<button type="submit" name="submit" class="btn  btn-primary">
							
							<i class="fa fa-heart"></i> Siųsti žinutę
						</button>
						</div>
					
					
					</form><!-- form pabaiga-->
				
				</div><!-- box-header pabaiga-->
			
			</div><!-- box pabaiga-->
			
		
		</div><!-- col-md-12 pradzia-->
		
		
		
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