<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	
	
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet"> 
	<!-- css link -->
	<?php wp_head() ?>
</head>
<body>
	<header class="navbar-theme">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">MyTheme</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      
		      <ul class="nav navbar-nav navbar-right">
		        <!-- <li><a href="#">Inicio</a></li> -->
		      </ul>
		      <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 
				'container_class' => 'header_menu' ) ); ?>
				<?php } ?>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>






<?php wp_head() ?>