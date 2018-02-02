<header data-spy="affix" data-offset-top="90">
		<div class="top-nav">
			<div class="container">
				<div class="row between-xs">
					<div class="col-md-6">
						<span class="tel-h"><i class="fa fa-phone-square"></i>(0385) 4504700</span>
						<span class="dir-h hidden-xs">
							<span><i class="fa  fa-map-marker"></i> Nueva Dirección</span> Yrigoyen 706, Santiago del Estero Capital
						</span>
					</div>
					<div class="col-md-6 text-right hidden-xs sesion-login">

						 
							<?php  global $current_user; wp_get_current_user(); ?>
							<?php if ( is_user_logged_in() ) {
								echo '<i class"fa fa-user"></i>';
						    	echo ' <span>¡Hola</span> <span class="name-user">' . $current_user->display_name . "\n". '</span> !';
						    	echo '<i class="fa  fa-sign-out"></i>';
						     	wp_loginout(home_url('/loguot'));
								} else {
									echo '<a  data-toggle="modal" href="#login-box" class="btn-login"><i class="fa fa-lock"></i>';
								    echo ' Iniciar sesión';
								    echo '</a>';
								}
							?>
							

						

						<span>
						<?php // global $current_user; wp_get_current_user(); ?>
						<?php // if ( is_user_logged_in() ) { 
						 //echo 'Usuario: ' . $current_user->user_login . "\n"; 
						 // echo 'Hola' . $current_user->display_name . "\n"; } 
						//else { wp_loginout(); } ?>
						</span>
						

						

						<?php //global $current_user;
						//wp_get_current_user();
						//echo 'Username: ' . $current_user->user_login . "\n";
						//echo 'User display name: ' . $current_user->display_name . "\n";
						?>
						 



						 	


					</div>
				</div>
			</div>
		</div> <!-- finaliza top nav -->
		<nav class="main">
			<div class="container">
				<div class="row between-xs middle-xs">
					<figure class="col-xs-10 col-md-5 row bottom-xs">
						<a href="<?php echo home_url('/'); ?>"><img class="logo-white" src="<?php echo get_template_directory_uri(); ?>/images/logo-mpf-w.svg" alt="Ministerio Público Fiscal"><img class="logo-blue" src="<?php echo get_template_directory_uri(); ?>/images/logo-mpf-b.svg" alt="Ministerio Público Fiscal"></a>
						<br>
						<span class="hidden">Ministerio Público Fiscal <br>
							<small>Poder Judicial - Santiago del Estero</small>
						</span>					
					</figure>
					<button type="button" class="navbar-toggle collapsed visible-xs" data-toggle="collapse" data-target="#nav" aria-expanded="false">
							<i class="fa fa-navicon"></i>
						</button>

						<?php wp_nav_menu( array( 
						'theme_location' => 'header-menu', 
						'container' => 'span', 
						'menu_class'=>'menu-principal row between-xs col-md-7 hidden-xs collapse', 
						'menu_id'=> 'nav',
						// 'before'=>'<i class="fa ico-nav"></i>', 
						'after'=> '<span class="span-line"></span>' ) ); ?>


					<!-- <ul id="nav" class="menu-principal row between-xs col-md-7 hidden-xs collapse">
						<li class="link-home"><a href="index.php">Inicio</a><span class="span-line"></span></li>
						<li class="link-about"><a href="el-ministerio.php">Institucional</a><span class="span-line"></span></li>
						<li class="link-noticias"><a href="noticias.php">Noticias</a><span class="span-line"></span></li>
						<li class="link-circunscripciones"><a href="circunscripciones.php"><i class="fa fa-map-marker color-green"></i> Circunscripciones</a><span class="span-line"></span></li>
						<li class="link-contact"><a href="contacto.php">Contacto</a><span class="span-line"></span></li>
						<div class="close-hidden"  data-toggle="collapse" data-target="#nav" aria-expanded="false">
							
						</div>
					</ul> -->

					
				</div>

			</div>
		</nav>
	</header>

	<!-- Modal -->
	<div class="modal fade" id="login-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" >Iniciar sesión</h4>

	      </div>
	      <div class="modal-body">
	        <?php wp_login_form( $args
				 = array(
				 	'form_id'=> 'miform',
				 	'id_username'    => 'usuario_login',
				 	'label_username' => __( 'Usuario' ),
					'label_password' => __( 'Contraseña' ),
					'redirect'       => site_url('/usuarios'),
				 	) 
				 ); ?> 

				 
	      </div>
	      
	    </div>
	  </div>
	</div> <!-- modal -->


	



