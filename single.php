<?php get_header(); ?><!-- HEADER ########################-->



<div class="margin-body"  data-spy="affix" data-offset-top="90"></div>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



  <div class="container">

  <ol class="breadcrumb my-3  d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</ol>
    
    <div class="row justify-content-center">
      <div class="col-md-11 col-12">
        <article>
          

          <div class="page-title text-center ">
          <h5><?php echo do_shortcode('[types field="antetitulo"]'); ?></h5>
            <h1 class="font-weight-light mt-3"><?php the_title(); ?></h1>
            <p><span class="mes"><?php the_time('M'); ?></span>
           <span class="anio"><?php the_time('Y'); ?></span></p>

            <span class="center-square"></span>
          </div>
          
          <div class="lead excerpt text-center"><?php echo do_shortcode('[types field="bajada"]'); ?></div>

          <p class="excerpt lead">
            
          </p>
          <br>

          <div class="feature-single <?php echo do_shortcode('[types field="ocultar-feature"]'); ?>">
            <?php the_post_thumbnail('large', array('class' => 'img-fluid', 'title' => 'Feature image')); ?>
          </div>

         <!--  <div class="ca-gallery text-center">
            <a href="#galeria" class="btn btn-success btn-img">
              Ver galería de imagenes
            </a>
          </div> -->

          <section class="content-single text-left">
            <?php the_content(); ?>

          </section>
         
          <section id="galeria" class="galeria <?php echo do_shortcode('[types field="ocultar-galeria-slider"]'); ?>">
            <div class="galery-system <?php //echo do_shortcode('[types field="opciones-de-galeria-y-slider"]'); ?>">
            <div>
            <?php echo(types_render_field( 'galeria-de-fotos', array( 'separator' => '</div><div class="mt-3">' ) )); ?>
              
              </div>
            </div>
          </section>

          
        </article>

       

        
      </div><!-- 8 col -->
    </div><!-- end row -->
  </div>
<?php endwhile ;?>
    <?php endif ;?>



<section class="post-related bg-light">

  <div class="container">
    <div class="row py-5  d-flex justify-content-center">
      <div class="col-10">
        <h3 class="h5 text-uppercase title-sec">Noticias relacionadas</h3>
        <hr>
        <div class="row">
    <?php
    
    $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID) ) );
    if( $related ) foreach( $related as $post ) {
    setup_postdata($post); ?>
     
            <div class="col-md-3">
             <div class=" bg-white p-1 ">
                <?php the_post_thumbnail( array(400, 200) , array('class' => ' img-fluid ', 'title' => 'Feature image')); ?>
                          <small> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="d-inline-block p-1"><?php the_title(); ?></a></small>
             </div>
                
            </div>
          
    <?php }
    wp_reset_postdata(); ?>
      
      </div>
    </div>
    </div><!-- row -->
  </div>

</section>






<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

