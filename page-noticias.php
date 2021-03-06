<?php get_header(); ?><!-- HEADER ########################-->

<div class="margin-body"  data-spy="affix" data-offset-top="90"></div>





  <div class="container">

   <ol class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</ol>

    <div class="row center-xs">
      <div class="col-xs-12 col-md-10">
        <div class="page-title">
          <h1>Noticias y novedades</h1>
          <span class="center-square"></span>
        </div>
        <nav class="menu-filter">
          <ul class="row around-xs"><?php str_replace("title=\"View all posts filed under ","",wp_list_categories('use_desc_for_title=0&exclude=1,2,3,4,5&title_li=&hierarchical=1')); ?>
          </ul>
        </nav> 

        <?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1,  )); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>
        <div class="noticias-list">


          <!-- the loop -->
  <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

          <div class="bg-box item-noticia">
            <div class=" row middle-xs start-xs">
              <div class="col-xs-12 col-md-6">
                <div class="feature">
                  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium' , ['class' => 'img-responsive img-wide']); ?></a>
                </div>
              </div>
              <div class="col-xs-12 col-md-6">
                <div class="caption">
                  <span><span class="mes"><?php the_time('M'); ?></span>
           <span class="anio"><?php the_time('Y'); ?></span></span>
                  <h3><?php the_title(); ?></h3>
                  <a href="<?php the_permalink() ?>" class="btn btn-default btn-lg">Ver más <i class="fa fa-angle-right "></i></a>
                </div>
              </div>
            </div>
          </div><!-- item --> 
          <?php endwhile; ?>

       
        </div><!-- noticias-list -->
          <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


      </div><!-- 8 col -->
    </div><!-- end row -->
  </div>


  





<!-- FOOTER ########################--> 
<?php get_footer(); ?> 