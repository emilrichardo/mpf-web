<?php get_header(); ?><!-- HEADER ########################-->



<div class="margin-body"  data-spy="affix" data-offset-top="90"></div>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



  <div class="container">

  <ol class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</ol>
    
    <div class="row center-xs">
      <div class="col-md-10">
        <article>
          

          <div class="page-title">
          <h5><?php echo do_shortcode('[types field="antetitulo"]'); ?></h5>
            <h1><?php the_title(); ?></h1>
            <p><span class="mes"><?php the_time('M'); ?></span>
           <span class="anio"><?php the_time('Y'); ?></span></p>

            <span class="center-square"></span>
          </div>
          
          <div class="lead excerpt"><?php echo do_shortcode('[types field="bajada"]'); ?></div>

          <p class="excerpt lead">
            
          </p>
          <br>

          
         
          <section class="galeria <?php echo do_shortcode('[types field="ocultar-galeria-slider"]'); ?>">
            <div class="galey-system <?php echo do_shortcode('[types field="opciones-de-galeria-y-slider"]'); ?>">
            <div>
            <?php echo(types_render_field( 'galeria-de-fotos', array( 'separator' => '</div><div>' ) )); ?>
              
              </div>
            </div>
          </section>

          <div class="feature-single <?php echo do_shortcode('[types field="ocultar-feature"]'); ?>">
            <?php the_post_thumbnail('large', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
          </div>
           


          <section class="content-single text-left">
            <?php the_content(); ?>

          </section>
        </article>

        
      </div><!-- 8 col -->
    </div><!-- end row -->
  </div>
<?php endwhile ;?>
    <?php endif ;?>


	

<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

