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
          <h5>Contrataciones:<?php echo do_shortcode('[types field="antetitulo"]'); ?></h5>
            <h1><?php the_title(); ?></h1>
            <p><span class="mes"><?php the_time('M'); ?></span>
           <span class="anio"><?php the_time('Y'); ?></span></p>

            <span class="center-square"></span>
          </div>
          
          <div class="lead excerpt"><?php echo do_shortcode('[types field="bajada"]'); ?></div>

          <p class="excerpt lead">
            
          </p>
          <br>

          
         
         

          


          <section class="content-single text-left">
            <table>
              
              <thead>
                <tr>
                  <th>header</th>
                  <th>header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>data</td>
                  <td>data</td>
                </tr>
              </tbody>
            </table>

            <p>Tipo y N°:</p> <?php echo do_shortcode('[types field="tipo-y-n"]'); ?>

          </section>
        </article>

        
      </div><!-- 8 col -->
    </div><!-- end row -->
  </div>
<?php endwhile ;?>
    <?php endif ;?>


	

<!-- FOOTER ########################--> 
<?php get_footer(); ?> 

