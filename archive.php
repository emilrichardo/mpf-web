<?php get_header(); ?><!-- HEADER ########################-->  

<div class="margin-body"  data-spy="affix" data-offset-top="90"></div>


  <div class="container">
 <ol class="breadcrumb my-3 bg-white text-uppercase d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</ol>




  
   
  
      <div class="row text-center justify-content-center">
        <div class="col-12 col-md-10">
          <div class="page-title">
             <?php
          //the_archive_title( '<h1>', '</h1>' );
          single_term_title( '<h1>', '</h1>');
          the_archive_description( '<div>', '</div>' );
        ?>
            <span class="center-square"></span>
          </div>
          <hr>



          <nav class="menu-filter my-2  rounded text-uppercase">
            <ul class="d-flex justify-content-around text-secondary">
              
              <?php str_replace("title=\"View all posts filed under ","",
              wp_list_categories('use_desc_for_title=0&exclude=1,2,3,4,5&title_li=&hierarchical=1')); ?>
            </ul>
          </nav> 
          <hr>


  
          
  
 
          <div class="noticias-list mt-5 ">
  
  <?php   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <!-- the loop -->
   
  
            <div class="bg-white item-noticia clearfix">
              <div class=" row justify-content-center align-items-center d-flex ">
                <div class="col-12 col-md-6 clearfix text-center text-md-left">
                  <div class="feature">
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium' , ['class' => 'img-fluid img-wide']); ?></a>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="caption text-md-left py-5 pr-md-4">
                    <span><span class="mes"><?php the_time('M'); ?></span>
             <span class="anio"><?php the_time('Y'); ?></span></span>

                    <a href="<?php the_permalink() ?>"  class="text-dark"><h3 class="fw-light"><?php the_title(); ?></h3></a>

                    <a href="<?php the_permalink() ?>" class="btn btn-outline-secondary ">Ver más <i class="fa fa-angle-right "></i></a>
                  </div>
                </div>
              </div>
            </div><!-- item --> 
            <br>
            <?php endwhile; // end of the loop. ?>
           
  
         
          </div><!-- noticias-list -->
            
  
 
  
  
        </div><!-- 8 col -->
      </div><!-- end row -->
    </div>




   
  

     

<?php get_footer(); ?>