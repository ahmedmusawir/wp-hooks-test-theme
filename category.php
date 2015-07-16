<?php get_header( $name ); ?>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container main-content">
  
    <section class="row">
      
      <article class="two-thirds column">
        
        <?php if ( have_posts() ) : ?>
          <header class="page-header">
            <h3>
              <?php 
                printf( __( 'Category Archives for %s', 'alpha' ), single_cat_title( '', false ) );
              ?>
            </h3>

            <?php 
              // Show an optional category description.
              if ( category_description() ) {
                echo '<p>' . category_description() . '</p>';
              }
            ?>
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
