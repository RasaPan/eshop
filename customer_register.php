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
		
		<div class="col-md-9"><!-- col-md-9 pradzia-->
		
			<div class="box"><!-- box pradzia-->
			
				<div class="box-header"><!-- box-header pradzia-->
				
					<center><!-- center pradzia-->
					
						<h2> REGISTRACIJA </h2>
						
					
					</center><!-- center pabaiga-->
					
					<form action="customer_register.php" method="post" enctype="multipart/form-data"><!-- form pradzia-->
					
						<div class="form-group"><!-- form-group pradzia-->
						
							<label>Jūsų vardas</label>
							
							<input type="text" class="form-control" name="c_name" required>
						
						</div><!-- form-group pabaiga-->
						
						<div class="form-group"><!-- form-group pradzia-->
						
							<label>Jūsų elektroninis paštas</label>
							
							<input type="text" class="form-control" name="c_email" required>
						
						</div><!-- form-group pabaiga-->
						
						<div class="form-group"><!-- form-group pradzia-->
						
							<label>Slaptažodis</label>
							
							<input type="password" class="form-control" name="c_pass" required></input>
						
						</div><!-- form-group pabaiga-->
						
						  <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Šalis</label>
                               
                               <input type="text" class="form-control" name="c_country" required>
                               
                           </div><!-- form-group Finish -->

						
						<div class="form-group"><!-- form-group pradzia-->
						
							<label>Miestas</label>
							
							<input type="text" class="form-control" name="c_city" required></input>
						
						</div><!-- form-group pabaiga-->
						
						<div class="form-group"><!-- form-group pradzia-->
						
							<label>Telefono nr</label>
							
							<input type="text" class="form-control" name="c_contact" required></input>
						
						</div><!-- form-group pabaiga-->
						
							<div class="form-group"><!-- form-group pradzia-->
						
							<label>Adresas</label>
							
							<input type="text" class="form-control" name="c_address" required></input>
						
						</div><!-- form-group pabaiga-->
						
						</div><!-- form-group pabaiga-->
						
							<div class="form-group"><!-- form-group pradzia-->
						
							<label>Jūsų profilio nuotrauka</label>
							
							<input type="file" class="form-control" name="c_image" required></input>
						
						</div><!-- form-group pabaiga-->
						
						<div class="text-center">
						
							<button type="submit" name="register" class="btn  btn-primary">
							
							<i class="fa fa-heart"></i> Registruotis
						</button>
						</div>
					
					</form><!-- form pabaiga-->
				
				</div><!-- box-header pabaiga-->
			
			</div><!-- box pabaiga-->
		
		</div><!-- col-md-9 pradzia-->
		
		
		
</div><!-- container pabaiga -->
	
</div><!-- content pabaiga -->


   
<?php

	include ("includes/footer.php");

?>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>

<?php

if(isset($_POST['register'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    $c_ip = getRealIpUser();
    
    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
	
	move_uploaded_file($c_image_tmp,"vartotojas/customer_images/$c_image");
	
	    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";

	
	 $run_customer = mysqli_query($con,$insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    

	
	if($check_cart>0){
		$_SESSION['customer_email']=$c_email;
		
		echo "<script>alert('Jūs buvote sėkmingai priregistruotas')</script>";
		
		echo "<script>window.open('checkout.php','_self')</script>";
	}else{
		/// CIA JEIGU REGISTRUOJASI BE KREPSELIO ///
		$_SESSION['customer_email']=$c_email;
		
		echo "<script>alert('Jūs buvote sėkmingai priregistruotas')</script>";
		
		echo "<script>window.open('index.php','_self')</script>";
	}
}

?>