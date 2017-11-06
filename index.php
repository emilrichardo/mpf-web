<?php get_header(); ?>



<section class="welcome bg-primary  text-light h-100 ">

	<div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        
        <source src="<?php echo get_template_directory_uri(); ?>/images/video.mp4" type="video/mp4">
        
    </video>
</div>
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-md-8 col-11">
					<h2 class="font-weight-light">¡Bienvenidos al sitio web del Ministerio Público Fiscal de Santiago del Estero!</h2>
					<p class="lead my-4 d-none d-md-inline-block">
					Conozca los servicios que brinda el organismo tanto a las víctimas y testigos de delitos como a todos aquellos que quieran conocer el trabajo del MPF.</p>
					
						<a href="<?php echo home_url('/'); ?>el-ministerio" class="btn  btn-outline-light mt-md-0 mt-2">
							<i class="fa fa-plus-circle"></i> Sobre el MPF
						</a>
						<a href="<?php echo home_url('/'); ?>el-ministerio/circunscripciones" class="btn  btn-outline-light mt-md-0 mt-2">
							<i class="fa fa-map-marker"></i> Circunscripciones
						</a>
						<a href="<?php echo home_url('/'); ?>noticias" class="btn  btn-success mt-md-0 mt-2">
							<i class="fa  fa-newspaper-o"></i> Sección Noticias
						</a>
					
				</div>
			</div>
		</div>
	</section>


<!-- secciones -->
<?php include("secciones/noticias.php") ?>
<?php include("secciones/ministerio.php") ?>
<?php include("secciones/memorias.php") ?>

<!-- footer -->
<?php get_footer(); ?>