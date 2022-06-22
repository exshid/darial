<div id="background">
<?php $postbycategory = new WP_Query (array(
    'posts_per_page' => 1,
    'category_name' => 'uncategorized',
                                    'post_type' => 'post',
                                    'order' => 'DESC',
                                )); while ($postbycategory->have_posts()){
                                    $postbycategory->the_post(); ?>

<h1 id="heading2"><a href="<?php the_permalink(); ?>">
<?php the_title(); ?></a></h1>

        <p id="content">"<?php
      if (has_excerpt()) {
          echo get_the_excerpt();
      } else {
      echo wp_trim_words(get_the_content(), 40);} ?>
        </p>
        <?php }; wp_reset_postdata(); ?>
    </div>
