<div class="panel panel-default sidebar-menu"> <!-- panel panel-default sidebar-menu pradzia -->

	<div class="panel-heading"> <!-- panel-heading pradzia -->
	
		<center>
		
			<img src="customer_images/foto.png" alt="foto">
		
		</center>
		
		</br>
		
		<h3 align="center" class="panel-title"> <!-- panel-title pradzia -->
		
		Vardas: Rasa
		
		<h3> <!-- panel-title pabaiga -->
			
	</div><!-- panel-heading pabaiga -->
		
		<div class="panel-body"><!-- panel-body pradzia -->
		
			<ul class="nav-pills nav-stacked nav"> <!-- nav-pills nav-stacked nav pradzia -->
			
				
				
			
			<li class="<?php if(isset($_GET['edit_account'])){echo"active";}?>">
				
					<a href="my_account.php?edit_account">
					
						<i class="fa fa-pencil"></i>
						Redaguoti profilį
					
					</a>
				
				</li>
				
				<li class="<?php if(isset($_GET['change_pass'])){echo"active";}?>">
				
					<a href="my_account.php?change_pass">
					
						<i class="fa fa-user"></i>
						Pakeisti slaptažodį
					
					</a>
				
				</li>
				
				<li class="<?php if(isset($_GET['delete_account'])){echo"active";}?>">
				
					<a href="my_account.php?delete_account">
					
						<i class="fa fa-trash-o"></i>
						Ištrinti profilį
					
					</a>
				
				</li>
				
		
				
					<a href="logout.php">
					
						<i class="fa fa-sign-out"></i>
					Atsijungti
					
					</a>
				
			
				
			</ul><!-- nav-pills nav-stacked nav pabaiga -->
	
		</div><!-- panel-body pabaiga -->
	
</div><!-- panel panel-default sidebar-menu pabaiga -->