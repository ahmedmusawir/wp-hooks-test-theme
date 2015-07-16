<?php 
/**
 * content.php
 *
 * The default template for displaying content.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Article header -->
	<header class="entry-header"> <?php
		// If the post has a thumbnail and it's not password protected
		// then display the thumbnail
		if ( has_post_thumbnail() && ! post_password_required() ) : ?>
			
		<?php if ( is_single() ) : ?>

				<figure class="entry-thumbnail"><?php the_post_thumbnail(); ?></figure>


			<?php else : ?>

				<a href="<?php the_permalink(); ?>" rel="bookmark">
					<figure class="entry-thumbnail opacity-hover"><?php the_post_thumbnail(); ?></figure>
				</a>

			<?php endif; ?>


		<?php endif; ?>

		<!-- If single page, display the title -->
		<!-- Else, we display the title in a link -->
		<?php if ( is_single() ) : ?>
			<h3><?php the_title(); ?></h3>
		<?php else : ?>
			<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<?php endif; ?>

		<p class="entry-meta">
			<?php 
				// Display the meta information
				alpha_post_meta();
			?>
		</p>
	</header> <!-- end entry-header -->

	<!-- Article content -->
	<div class="entry-content">
		<?php
			if ( is_search() || !is_single() ) {
				the_excerpt();
			} else {
				// the_excerpt();
				// the_excerpt( __( 'Continue reading &rarr;', 'alpha' ) );
				the_content( __( 'Continue reading &rarr;', 'alpha' ) );

				wp_link_pages();
			}
		?>
	</div> <!-- end entry-content -->

	<!-- Article footer -->
	<footer class="entry-footer">
		<?php 
			// If we have a single page and the author bio exists, display it
			if ( is_single() && get_the_author_meta( 'description' ) ) {
				echo '<h2>' . __( 'Written by ', 'alpha' ) . get_the_author() . '</h2>';
				echo '<p>' . the_author_meta( 'description' ) . '</p>';
			}
		?>
	</footer> <!-- end entry-footer -->
</article>