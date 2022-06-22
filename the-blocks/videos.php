<h3 class="videostitle">
  <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
  <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"/>
</svg>VIDEOS</h3>

<div class="container33">
                                <div class="videofirst">
                                <?php $videos = new WP_Query (array(
                                    'posts_per_page' => 1,
                                    'category_name' => 'uncategorized',
                                    'post_type' => 'post',
                                    'order' => 'DESC',
                                )); while ($videos->have_posts()){
                                    $videos->the_post(); ?>

                                            <div class="card-carousel">
                    

                    <div class="card-bottom">
                    <a href="<?php the_permalink(); ?>">
                    <div class="image-container2" style="background-image:url(<?php
 if ( has_post_thumbnail() ) {
  echo get_the_post_thumbnail_url();
  } else {
  bloginfo('template_directory'); ?>/images/default-image.jpg)<?php } ?>">
                        <h3 class="videospan"><?php the_title(); ?></h3></div></a>
                    </div>
                </div>
                <?php }; wp_reset_postdata(); ?>
                        </div>
                        <div class="video">
<?php $videos = new WP_Query (array(
                                    'posts_per_page' => 4,
                                    'category_name' => 'uncategorized',
                                    'post_type' => 'post',
                                    'offset' => 1,
                                    'order' => 'DESC',
                                )); while ($videos->have_posts()){
                                    $videos->the_post(); ?>

                        <div class="card-carousel">

                    <div class="card-bottom">
                    <a href="<?php the_permalink(); ?>"><div class="image-container" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)">
                    <h3 class="videospan"> <?php the_title(); ?> </h3></div></a>
                    </div>
                </div>
                <?php }; wp_reset_postdata(); ?>

            </div>
        </div>
