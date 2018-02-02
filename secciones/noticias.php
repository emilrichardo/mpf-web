


<section id="noticias" class="noticias padd-section bg-gris">
		<div class="container">
			<h2 class="sec">Noticias y Novedades <a href="noticias.php" class="btn btn-primary">Ver todas <i class="fa fa-angle-right "></i></a></h2>

			
			<?php query_posts( array(
					    'category_name'  => 'prensa',
					    'posts_per_page' => 1,
					    'orderby' => 'date',
					    'post_type' => 'post',
					    'meta_key'   => 'wpcf-publicar-home', 
					  	'meta_value' => 'super-noticia',  
					    
					) ); ?>

					<div class="news-primary">
					<?php   if ( have_posts() ) { ?>
				
					
					
					<!-- comienza box super -->
					<div class="bg-box">
						<div class="row middle-xs">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-xs-12 col-md-8">
								<div class="feature">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', ['class' => 'img-responsive img-wide responsive--full']); ?></a>
								</div>
							</div>
							<div class="col-xs-12 col-md-4  center-xs start-md">
								<div class="caption">
									<span><span class="mes"><?php the_time('M'); ?></span>
           <span class="anio"><?php the_time('Y'); ?></span></span>
									<h3><?php the_title(); ?></h3>
									<a href="<?php the_permalink(); ?>" class="btn btn-default btn-lg">Ver más <i class="fa fa-angle-right "></i></a>
								</div>							
							</div>
							<?php endwhile; // end of the loop. ?>

							</div> <!-- en row -->
						</div>

							<br>
							<!-- termina box super -->
							<?php } ?>

							
					</div><!-- columna de 12 -->


						<!-- comienza widget celeste -->
						<div class="col-xs-12 col-md-12 news-primary">	
							<div class="bg-info row text-center padd-section middle-xs center-xs">
								

								
								<div class="col-xs-10 col-md-4">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/fachada.svg" alt="">
								</div>
								<div class="col-xs-10 col-md-5">
									<h2>Conocé el nuevo edificio del Ministerio Público Fiscal </h2>
									<a href="el-edificio.php" class="btn btn-primary btn-lg btn-plus-left">Ver todas las oficinas piso por piso</a>
								</div>
							</div>
						</div><!-- termina widget celeste -->



					

				<?php query_posts( array(
						    'category_name'  => 'prensa',
						    'posts_per_page' => 1,
						    'orderby' => 'date',
						    'post_type' => 'post',
						    'meta_key'   => 'wpcf-publicar-home', 
						  	'meta_value' => 'nota-principal',  
						    
						) ); ?>
						<?php   if ( have_posts() ) { ?>
						<!-- comienza info primaria -->
					<div class=" ">
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="bg-box" <?php post_class(); ?>>
							<div class="row middle-xs">								
								<div class="col-xs-12 col-md-5  center-xs start-md ">							
									
									<div class="caption">
										<span><span><span class="mes"><?php the_time('M'); ?></span>
	           							<span class="anio"><?php the_time('Y'); ?></span></span></span>
										<h3><?php the_title(); ?></h3>
										<br>
										<a href="<?php the_permalink(); ?>" class="btn btn-default btn-lg">Ver más <i class="fa fa-angle-right "></i></a>
									</div>							
								</div>
								<div class="col-xs-12 col-md-7 first-xs last-md">
									<div class="feature">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('medium', ['class' => 'img-responsive img-wide responsive--full']); ?>
									</a>										
									</div>
								</div>								
							</div>
						</div>
						<br>
						<?php endwhile; // end of the loop. ?>
					</div>
					<br>
					<!-- termina info primaria -->
					<?php } ?>


					<!-- box info secundaria -->	
					<?php query_posts( array(
							    'category_name'  => 'prensa',
							    'posts_per_page' => 3,
							    'orderby' => 'date',
							    'post_type' => 'post',
							    'meta_key'   => 'wpcf-publicar-home', 
							  	'meta_value' => 'nota-secundaria',  
							    
							) ); ?>
						<?php   if ( have_posts() ) { ?>
						<div class="">

						<div class="row noticias-secundarias">
						<?php 
						$count = 0;

						while (have_posts()) : the_post(); $count++; 

						    if ( $count == 1 ) echo '<div class="col-xs-12"><div class="bg-box">';
						    if ( $count == 2 ) echo '</div> <br></div><div class="col-xs-12 col-md-8 secundary  secundary-img"><div class="bg-box">';
						    if ( $count > 2 ) echo '</div></div><div class="col-xs-12 col-md-4 font-size-80 secundary secundary-noimg"><div class="bg-box ">';


						    ?>


						    
					
						<div  <?php post_class(array('row middle-xs')); ?> id="post-<?php the_ID(); ?>" >
							<?php if ( $count < 3 ) { ?>
							<div class="col-xs-12 col-md-6">
							<?php } ?>
								<div class="feature">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('medium', ['class' => ' responsive--full']); ?>
									</a>
									
								</div>
							<?php if ( $count < 3 ) { ?>
							</div>
							<?php } ?>
							


							<?php if ( $count < 3 ) { ?>
							<div class="col-xs-12 col-md-6  center-xs start-md ">
							<?php } ?>
								<div class="caption">
									<span><span><span><span class="mes"><?php the_time('M'); ?></span>
           							<span class="anio"><?php the_time('Y'); ?></span></span></span></span>
									<h3><?php the_title(); ?></h3>
									<br>
									<a href="<?php the_permalink(); ?>" class="btn btn-default btn-lg">Ver más <i class="fa fa-angle-right "></i></a>
								</div>

								<?php if ( $count < 3 ) { ?>							
							</div>

							<?php } ?>

							
						</div>
						
					
					<!-- end box secundario -->
					<?php if ( $count > 3 ) { ?>
					
					<?php } ?>


					<?php endwhile; // end of the loop.
					echo "</div> <br></div>";

					 ?>

					 </div>
					 </div>

					
					<?php } ?>

					

				


			</div><!-- end row -->
		</div><!-- end container -->
	</section><!-- seccion noticias -->

	<?php query_posts( array(
					    'category_name'  => 'galeria-de-fotos',
					    'posts_per_page' => 3,
					    'orderby' => 'date',
					    'post_type' => 'post',
					    //'meta_key'   => 'wpcf-publicar-home', 
					  	//'meta_value' => 'super-noticia',  
					    
					) ); ?>

					<?php   if ( have_posts() ) { ?>

					<?php while ( have_posts() ) : the_post(); ?>

						
	<section id="gal-cap" class="gal-cap bg-gris" >
		<div class="container">
			<div class="row between-xs">
				<div class=" col-xs-12 col-md-6 galeria-home">
					<h3 class="subsec"><i class="fa  fa-camera"></i>Galería de fotos</h3>
					<div class="row" id="galery-home">

						<div class="col-xs-12 col-md-4">
						<a href="<?php the_permalink(); ?>">
							<div class="feature">
								<?php the_post_thumbnail( ['class' => ' img-responsive']); ?>							
							</div>
							<h5><?php the_title(); ?></h5>
						</a>
							
						</div>
						
						
					</div><!-- ned row -->
					<script type="text/javascript">
					  $('#galery-home').slickLightbox();
					</script>	

				</div><!-- end gallery -->

				<?php endwhile; // end of the loop. ?>
						<?php } ?>


				<?php query_posts( array(
					    'category_name'  => 'capacitacion',
					    'posts_per_page' => 1,
					    'orderby' => 'date',
					    'post_type' => 'post',
					    //'meta_key'   => 'wpcf-publicar-home', 
					  	//'meta_value' => 'super-noticia',  
					    
					) ); ?>

					<?php   if ( have_posts() ) { ?>

					<?php while ( have_posts() ) : the_post(); ?>

				<div class="col-xs-12 col-md-6 capacitacion">
					<div class="row middle-xs bg-gris2 center-xs start-md">
						<div class="col-xs-12 col-md-5">
							<div class="feature">
<a href="<?php the_permalink(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/images/capacitacion.svg" alt=""></a>							</div>
						</div>
						<div class="col-xs-12 col-md-7">
							<a href="<?php the_permalink(); ?>" target="blank"><!-- <span>30 de agosto y 1 de septiembre</span> -->
								<h4><?php the_title(); ?></h4>
							</a>
						</div>
					</div>
				</div><!-- end capacitacion -->
				<?php endwhile; // end of the loop. ?>
						<?php } ?>
			</div><!-- end row -->
		</div><!-- end container -->
	</section><!-- end galeria y capacitacion -->


<?php query_posts( array(
					    'category_name'  => 'fiscalias-moviles',
					    'posts_per_page' => 1,
					    'orderby' => 'date',
					    'post_type' => 'post',
					    //'meta_key'   => 'wpcf-publicar-home', 
					  	//'meta_value' => 'super-noticia',  
					    
					) ); ?>



					<?php   if ( have_posts() ) { ?>

					<?php while ( have_posts() ) : the_post(); ?>


	<section class="fiscmov bg-gris padd-section" id="fiscalias-moviles">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4 control-fm">
					<div class="bg-info full">
						<h4>Fiscalías móviles</h4>
					</div>
				</div>
				<div class="col-xs-12 col-md-8 fm-item">
					<div class="bg-box">
						<div class="row middle-xs">
							<div class="col-xs-12 col-md-4">
								<div class="feature">
									<?php the_post_thumbnail(medium, ['class' => ' img-responsive']); ?>
									<span class="square45"></span>
								</div>
							</div>
							<div class="col-xs-12 col-md-8">
								<a href="<?php the_permalink(); ?>" ><span>Mayo - 2017</span>
									<h2><?php the_title(); ?></h2>
								</a>
							</div>
						</div>
					</div><!-- end row -->
				</div>
			</div>
		</div>
	</section> <!-- fiscalias moviles -->

	<?php endwhile; // end of the loop. ?>
						<?php } ?>

