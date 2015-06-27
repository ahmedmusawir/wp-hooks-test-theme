<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	
 	<h4><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>

 	<?php
		$categories = get_the_category();
		// var_dump($categories); die();
		$separator = '  ';
		$output = '';
		if($categories){
			foreach($categories as $category) {

				$desc = strip_tags( category_description( $category->cat_ID ) );


				$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'
				.$category->cat_name .'</a>'.$separator . "  ( " . $desc . " ) <br>" ;
			}
		echo trim($output, $separator);
		}
	?>


 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

 	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


 	<!-- Display the Post's content in a div box. -->

 	<div class="entry">
 		<?php //the_content(); ?>
 		<?php the_excerpt(); ?>
 	</div>
 	<section>

 		<?php

 			$arg1 = '<table class="u-full-width">
 					<thead>
	 					<tr>
	 						<th>Name</th><th>Age</th><th>Sex</th><th>Location</th>
	 					</tr>
 					</thead>';

			$arg2 = '	<tbody>
							<tr><td>Dave Gamache</td><td>26</td><td>Male</td><td>San Francisco</td></tr>
							<tr><td>Dwayne Johnson</td><td>42</td><td>Male</td><td>Hayward</td></tr>
						</tbody>
					</table>';
 

 			do_action( 'my_table_action', $arg1, $arg2 ); 

 		?>
 	</section>

<?php endwhile; else : ?>

	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>

