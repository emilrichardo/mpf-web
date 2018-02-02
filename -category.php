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
          <h1><?php single_cat_title(); ?></h1>
          <span class="center-square"></span>
        </div>
        <!-- <nav class="menu-filter">
          <ul class="row around-xs">
            <li><a href="#">Todas</a></li>
            <li><a href="#">Galería de fotos</a></li>
            <li><a href="#">Capacitación</a></li>
            <li><a href="#">Fiscalias móviles</a></li>
          </ul>
        </nav> -->
        <div class="noticias-list">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

          <?php endwhile ;?>
      <?php endif ;?>

        </div><!-- noticias-list -->
      </div><!-- 8 col -->
    </div><!-- end row -->
  </div>


  


<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

