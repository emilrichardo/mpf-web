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
            <p></p>

            <span class="center-square"></span>
          </div>
          
          <div class="lead excerpt"><?php echo do_shortcode('[types field="bajada"]'); ?></div>

          <p class="excerpt lead">
            
          </p>
         
          <section class="carousel-single">
            <ul class="single-slider">
            <li>
            <?php echo(types_render_field( 'carrusel-de-imagenes', array( 'separator' => '</li><li>' ) )); ?>
              
              </li>
            </ul>
          </section>
           <?php the_post_thumbnail('large', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>


          <section class="content-single text-left">
            <?php echo do_shortcode('[types field="publicacion"]'); ?>
            <?php the_content() ?>


            <?php
            $args = array(
                'post_type'      => 'page',
                'posts_per_page' => -1,
                'post_parent'    => $post->ID,
                'order'          => 'ASC',
                'orderby'        => 'menu_order'
             );


            $parent = new WP_Query( $args );

            if ( $parent->have_posts() ) : ?>

                <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

                    <div id="parent-<?php the_ID(); ?>" class="parent-page bg-info padd-section">

                        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_content() ?>

                        

                    </div>

                <?php endwhile; ?>

            <?php endif; wp_reset_query(); ?>



          </section>
        </article>

        





        
      </div><!-- 8 col -->
    </div><!-- end row -->
  </div>
<?php endwhile ;?>
    <?php endif ;?>

<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

