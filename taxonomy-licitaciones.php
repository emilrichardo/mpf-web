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
          
        
            <?php
          //the_archive_title( '<h1>', '</h1>' );
          single_term_title( '<h1>', '</h1>');
          the_archive_description( '<div>', '</div>' );
        ?>
  
  
    
          
          <span class="center-square"></span>
        </div>

         <?php // wp_list_categories(); ?>

         
        <nav class="menu-filter">
          <ul class="row around-xs"><?php // str_replace("title=\"View all posts filed under ","",wp_list_categories('use_desc_for_title=0&exclude=1,2,3,4,5&title_li=&hierarchical=1')); ?>
          </ul>
        </nav> 

        <div class="noticias-list">
        <?php   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <div class="bg-box item-noticia"  itemprop="itemListElement" id="post-<?php the_ID(); ?>" >          
            <div class=" row middle-xs start-xs">
              
              <div class="col-xs-12 col-md-12">
                <div class="caption">
                  <span><span class="mes"><?php the_time('M'); ?></span>
           <span class="anio"><?php the_time('Y'); ?></span></span>
                  <h3><?php the_title(); ?></h3>
                  <a href="<?php the_permalink(); ?>" class="btn btn-default btn-lg" title="<?php printf( esc_attr__( 'Permalink to %s', 'typical' ), the_title_attribute( 'echo=0' ) ); ?>" itemprop="url" rel="bookmark">Ver más <i class="fa fa-angle-right "></i></a>
                </div>
              </div>
            </div>
          </div><!-- item -->
          <?php endwhile; // end of the loop. ?>
        </div><!-- noticias-list -->
      </div><!-- 8 col -->
    </div><!-- end row -->
  </div>

     

<?php get_footer(); ?>