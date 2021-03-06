<?php get_header( $name ); ?>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container main-content">
  
    <section class="row">
      
      <article class="two-thirds column">
        
          <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content' ); ?>
          <?php endwhile; ?>

          <?php alpha_paging_nav(); ?>
            
          <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
          <?php endif; ?>  


      </article>

      <aside class="one-third column">
        
       <?php get_sidebar(); ?>

      </aside>

    </section>

  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <?php get_footer( $name ); ?>
