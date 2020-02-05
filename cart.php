
   <?php
$active='Cart';
include("includes/header.php");

?>

   <div class="content"><!-- content pradzia -->
   
	<div class="container">

	<div class="box"><!-- box pradzia -->

	
		<form action="cart.php" method="post" enctype="multipart/form-data"><!-- form pradzia -->
		
			<h1> Prekių krepšelis </h1>
		<?php
		
		$ip_add = getRealIpUser();
                       
                       $select_cart = "select * from cart where ip_add='$ip_add'";
                       
                       $run_cart = mysqli_query($con,$select_cart);
                       
                       $count = mysqli_num_rows($run_cart);
		
		?>
			
			<p class="text-muted"> Savo krepšelyje turite <?php echo $count; ?> prekes(-ių) </p>
			
			<div class="table-responsive"><!-- table-responsive pradzia -->
			
				<table class="table"><!-- table pradzia -->
				
					<thead><!-- thead pradzia -->
					
						<tr><!-- tr pradzia -->
						
							<th colspan="2"> Prekė </th>
							<th>Kiekis</th>
							<th>Kaina</th>
							<th>Dydis</th>
							<th colspan="1">Ištrinti</th>
							<th colspan="2">Iš viso</th>
						
						</tr><!-- tr pabaiga -->
						
					</thead><!-- thead pabaiga -->
					
					<tbody><!-- tbody pradzia -->
					
					<?php 
					
					    $total = 0;
                                   
                                   while($row_cart = mysqli_fetch_array($run_cart)){
                                       
                                     $pro_id = $row_cart['p_id'];
                                       
                                     $pro_size = $row_cart['size'];
                                       
                                     $pro_qty = $row_cart['qty'];
                                       
                                       $get_products = "select * from produktai where product_id='$pro_id'";
                                       
                                       $run_products = mysqli_query($con,$get_products);
                                       
                                       while($row_products = mysqli_fetch_array($run_products)){
                                           
                                           $product_title = $row_products['product_title'];
                                           
                                           $product_img = $row_products['product_img'];
                                           
                                           $only_price = $row_products['product_price'];
                                           
                                           $sub_total = $row_products['product_price']*$pro_qty;
                                           
                                           $total += $sub_total;

						
						
						
						
					
					
					?>
					 
						<tr><!-- tr pradzia -->
						
							<td>
							
								<img class="image-responsive" src="administratorius/produktai/<?php  echo $product_img; ?> " alt="2 nuotrauka">
							
							</td>
							
							<td>
							
								<a href="details.php/pro_id=$pro_id"><?php  echo $product_title; ?></a>
								
							</td>
							
							<td>
							
							<?php  echo $pro_qty; ?>
							</td>
							
							<td>
							
							<?php  echo $only_price; ?>
							</td>
						
							<td>
							
							<?php  echo $pro_size; ?>
							</td>
							
							
							<td>
							
						 <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">

						
							</td>
							
							<td>
							
							<?php  echo $sub_total; ?>
							</td>
						
						
						</tr><!-- tr pabaiga -->
					<?php } } ?> 
					
					</tbody><!-- tbody pabaiga -->
					
					<tfoot><!-- tfoot pradzia -->
					
						<tr><!-- tr pradzia -->
						
							<th colspan="5">Iš viso:</th>
							<th colspan="2"><?php  echo $total; ?> eu</th>
						
						</tr><!-- tr pabaiga -->
				
					</tfoot><!-- tfoot pabaiga -->
				
				</table><!-- table pabaiga -->
			
			</div><!-- table-responsive pabaiga -->
			
		<div class="box-footer"><!-- box-footer pradzia-->
		
			<div class="pull-left"><!--pull-left pradzia-->
			
				<a href="index.php" class="btn btn-default"><!--btn btn-default pradzia-->
				
					<i class="fa fa-chevron-left"></i> Tęsti apsipirkimą
				
				</a><!--btn btn-default pabaiga-->
			
			</div><!--pull-left pabaiga-->
		
		<div class="pull-right"><!--pull-right pradzia-->
			
				<button type="submit" name="update" value="Update Cart" class="btn btn-defaul">
				
					<i class="fa fa-refresh"></i> Atnaujinti krepšelį
					
				</button>
				
				<a href="checkout.php" class="btn btn-primary">
				
					Apmokėjimas <i class="fa fa-chevron-right"></i>
	
				
				</a><!--btn btn-primary pabaiga-->
			
			</div><!--pull-right pabaiga-->
		
		</div><!-- box-footer pabaiga-->
		
		</form><!-- form pabaiga -->
	
	</div><!-- box pabaiga -->
	
<?php

     function update_cart(){
                    
                    global $con;
                    
                    if(isset($_POST['update'])){
                        
                        foreach($_POST['remove'] as $remove_id){
                            
                            $delete_product = "delete from cart where p_id='$remove_id'";
                            
                            $run_delete = mysqli_query($con,$delete_product);
                            
                            if($run_delete){
                                
                                echo "<script>window.open('cart.php','_self')</script>";
			}
			
		}
	}
}
       echo @$up_cart = update_cart();

 ?>
</div>

</div><!-- content pabaiga -->
   
   <?php

	include ("includes/footer.php");

?>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>