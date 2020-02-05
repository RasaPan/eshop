<?php

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
			
				<div class="box"><!-- box pradzia -->
				
				
				
				<?php
					
					if(isset($_GET['edit_account'])){
						include("edit_account.php");
					}
					
					?>
				
					<?php
					
					if(isset($_GET['change_pass'])){
						include("change_pass.php");
					}
					
					?>
					
						<?php
					
					if(isset($_GET['delete_account'])){
						include("delete_account.php");
					}
					
					?>
					
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