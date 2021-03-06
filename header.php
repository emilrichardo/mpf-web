<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?>    <?php wp_title('|',true);?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
	<meta name="description" content="">

	<!-- Estilos css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/styles.css">	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/framework.css">	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/flexboxgrid.min.css">	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/slick.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/slick-lightbox.css">
	
	<!-- Fuentes -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<script src="https://use.fontawesome.com/9d068983ec.js"></script>	
	

	<!-- Scripts-->

<!-- Cambiar el color por #101116 -->
<meta name="theme-color" content="#090921">



</head>

<body <?php body_class(); ?>>

	<?php include("includes/nav.php") ?>
