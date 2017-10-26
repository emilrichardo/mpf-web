
<div class="top-nav bg-dark text-light py-1">
			<div class="container">
				<span class="tel-h mr-2"><i class="fa fa-phone-square text-info"></i> (0385) 4504700</span>
				<span class="dir-h hidden-xs ml-5 text-secondary d-none d-md-inline-block">
					<span class="badge badge-success text-dark"><i class="fa  fa-map-marker"></i> Nueva dirección</span>
					<small>Yrigoyen 706, Santiago del Estero Capital</small>
				</span>
						<div class="float-right">
							<?php  global $current_user; wp_get_current_user(); ?>
								<?php if ( is_user_logged_in() ) {
									echo '<i class"fa fa-user"></i>';
							    	echo ' <span>¡Hola</span> <span class="name-user">' . $current_user->display_name . "\n". '</span> !';
							    	echo '<i class="fa  fa-sign-out"></i>';
							     	wp_loginout(home_url(''));
									} else {
										echo '<a  data-toggle="modal" href="#login-box" class="btn float-right btn-primary btn-sm py-0 text-info"><i class="fa fa-lock"></i>';
									    echo ' Iniciar sesión';
									    echo '</a>';
									}
								?></div>
			</div>
		</div><!-- end top-nav -->


<header id="header" class="header  sticky-top bg-white">
		<nav class="navbar navbar-expand-lg navbar-light bg-white w-100">
		  <div class="container">
		  	
		  		<div class="row d-flex justify-content-end w-100 pl-3 pl-md-0">
		  			<a class="navbar-brand mr-auto" href="<?php echo home_url('/'); ?>">
		  				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-mpf.svg" alt="">
		  				<h1 class="d-none">Ministerio Público Fiscal</h1>
		  			</a>
		  			
		  			<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		  			 <i class="fa fa-navicon"></i>
		  			</button>
		  							
		  			
					<div class="collapse navbar-collapse col-md-7 text-right" id="navbarNavDropdown">
				  		<?php wp_nav_menu( array( 
						'theme_location' => 'header-menu', 
						'container' => 'span', 
						'menu_class'=>'navbar-nav text-uppercase', 
						'menu_id'=> 'nav',
						// 'before'=>'<i class="fa ico-nav"></i>', 
						'after'=> '<span class="span-line"></span>' ) ); ?>
					</div>
		  		</div>


		  		
		  	
		  </div><!-- container -->
		</nav>
		
	</header><!-- /header -->


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
					'redirect'       => site_url('/wp-admin'),
				 	) 
				 ); ?> 

				 
	      </div>
	      
	    </div>
	  </div>
	</div> <!-- modal -->


	



