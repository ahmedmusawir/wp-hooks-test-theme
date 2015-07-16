<?php get_header( $name ); ?>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container main-content">
  
    <section class="row">
      
      <article class="two-thirds column">
        
        <?php if ( have_posts() ) : ?>
          <header class="page-header">
            <h3>

            <?php printf( __( 'All posts by %s.', 'alpha' ), get_the_author() ); ?>

            </h3>
              <?php 
                // If the author bio exists, display it.
                if ( get_the_author_meta( 'description' ) ) {
                  echo '<p>' . the_author_meta( 'description' ) . '</p>';
                }
              ?>

              <?php rewind_posts(); ?>
              
          </header>

          <?php while( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
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
