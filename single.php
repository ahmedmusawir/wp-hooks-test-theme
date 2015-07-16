<?php
/**
 * single.php
 *
 * The template for displaying single posts.
 */
?>

<?php get_header(); ?>
 <div class="container main-content">
  
    <section class="row">

	<div class="two-thirds column" role="main">
		<?php while( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content' ); ?>

			<?php comments_template(); ?>
		<?php endwhile; ?>
	</div> <!-- end main-content -->

	<aside class="one-third column">
        
        <?php get_sidebar(); ?>

    </aside>

   </section>

  </div>

<!-- End Document

<?php get_footer(); ?>