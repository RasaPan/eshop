<?php

include("includes/db.php");
include_once("functions/functions.php");
?>
<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu pradzia  -->
	<div class="panel-heading"><!-- panel-heading pradzia  -->
		<h3 class="panel-title"> Produktų kategorijos </h3>
	</div><!-- panel-heading pabaiga  -->
	
	<div class="panel-body"><!-- panel-body pradzia  -->
	
		<ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu pradzia  -->
		<?php
			getPCats();
		?>
		</ul><!-- nav nav-pills nav-stacked category-menu pabaiga  -->
		
	</div><!-- panel-body pabaiga  -->
	
</div><!-- panel panel-default sidebar-menu pabaiga  -->

<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu pradzia  -->
	<div class="panel-heading"><!-- panel-heading pradzia  -->
		<h3 class="panel-title"> Kategorijos </h3>
	</div><!-- panel-heading pabaiga  -->
	
	<div class="panel-body"><!-- panel-body pradzia  -->
	
		<ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu pradzia  -->
		
		<?php
		
			getCats();
			
			?>
	
		</ul><!-- nav nav-pills nav-stacked category-menu pabaiga  -->
		
	</div><!-- panel-body pabaiga  -->
	
</div><!-- panel panel-default sidebar-menu pabaiga  -->