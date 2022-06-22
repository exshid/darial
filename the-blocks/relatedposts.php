<?php
 $related = get_related_posts( get_the_ID(), 3 );

if ( $related->have_posts() ):
	?>
<div class="related-posts relatedpostscontainer"> 
			<?php while ( $related->have_posts() ): $related->the_post(); ?>
				<div class="relatedposts relatedpostsphoto" style="background-image:url(<?php
 if ( has_post_thumbnail() ) {
  echo get_the_post_thumbnail_url();
  } else {
  bloginfo('template_directory'); ?>/images/default-image.jpg)<?php } ?>">
                <a href="<?php the_permalink();?>">

                <div class="transparent-box2">

                <span class="titlespan boxshadow"><?php the_title(); ?></span> </div></a>


</div>
			<?php endwhile; ?>
	</div>
	<?php
endif;
wp_reset_postdata();
?>