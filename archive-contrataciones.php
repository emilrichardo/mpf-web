<?php get_header(); ?><!-- HEADER ########################-->  

<div class="bg-infosss">
  
  
    <div class="container">
   <ol class="breadcrumb bg-white text-uppercase d-flex align-items-center" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
  </ol>
  
  
  
  
    
     
    
        <div class="row text-center justify-content-center">
          <div class="col-12 col-md-10">
            <div class="page-title">
               
              <span class="center-square"></span>
            </div>

            
            <div class="row justify-content-center align-items-center">
              <div class="col-md-4">
                <h1>Contrataciones</h1>
                
              </div>
             
            </div>
  
  
    
            
    
   
            <div class="noticias-list mt-5 ">
    
    <?php   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
              <!-- the loop -->


              

              


              <table class="table table-striped text-left rounded border  my-5 
              <?php   // Get terms for post
                  $terms = get_the_terms( $post->ID , 'tipo' );
                 // Loop over each item since it's an array
                  if ( $terms != null ){
                   foreach( $terms as $term ) {
                 // Print the name method from $term which is an OBJECT
                     print $term->slug ;
                 // Get rid of the other data stored in the object, since it's not needed
                     unset($term);
                   } } ?> <?php   // Get terms for post
               $terms = get_the_terms( $post->ID , 'contratacion' );
               // Loop over each item since it's an array
               if ( $terms != null ){
               foreach( $terms as $term ) {
               // Print the name method from $term which is an OBJECT
               print $term->slug ;
               // Get rid of the other data stored in the object, since it's not needed
               unset($term);
              } } ?>

              " >

                
                
                <thead>
                  <tr>
                    
                    
                    <th colspan="2"  class="text-center"><h5><?php $terms = get_the_terms($post->ID, 'contratacion');foreach($terms as $term){echo $term->name;} ?></h5></th>
                    
                  </tr>
                </thead>
                

                <tbody>
                  <tr>
                    
                    <td>Tipo y N°:</td>
                    <td><strong><?php echo do_shortcode('[types field="tipo-y-n"]'); ?></strong></td>
                    
                  </tr>
                  <tr>
                    
                    <td>Objeto:</td>
                    <td><h4 class="fw-light"><?php the_title(); ?></h4></td>
                    
                  </tr>
                  <tr>
                    
                    <td>Fecha de Apertura:</td>
                    <td><?php echo do_shortcode('[types field="fecha-de-apertura"]'); ?></td>
                    
                  </tr>
                  <tr>
                    
                    <td>Monto estimado:</td>
                    <td><?php echo do_shortcode('[types field="monto-estimado"]'); ?></td>
                    
                  </tr>
                  <tr>
                    
                    <td>Documentación:</td>
                    <td>  




                      





                      <a  href="<?php echo(types_render_field('documentacion')); ?>" target="blank">

                      <?php echo(types_render_field('documentacion-button', array(  'output'=> 'html' ) )); ?>

                        </a>

                        <a href="<?php echo(types_render_field('documentacion-2')); ?>" target="blank">

                      <?php echo(types_render_field( 'documentacion-button2', array( 'output'=> 'html'  ) )); ?>

                        </a>
                      

                      
                     


                      
                      
                    </td>
                    
                  </tr>
                </tbody>
              </table>
     
    
              
              <?php endwhile; // end of the loop. ?>
             
    
           
            </div><!-- noticias-list -->
              
    
   
    
    
          </div><!-- 8 col -->
        </div><!-- end row -->
      </div>
  
  
  
  
   </div>
  

     

<?php get_footer(); ?>