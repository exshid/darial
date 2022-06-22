<div class="outercontain">
<div class="latest_posts_wrapper contentcontainer">
   <?php
      $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
      $latests = new WP_Query(array(
      	'post_type' => 'post',
          'offset' => 1,
      	'paged' => $paged
      ));
      while($latests->have_posts()): $latests->the_post();?>
<div class="content">
                <div class="contentimage"
                style="background-image: url(<?php
 if ( has_post_thumbnail() ) {
  echo get_the_post_thumbnail_url();
  } else {
  bloginfo('template_directory'); ?>/images/default-image.jpg<?php } ?>);">
                    <div class="transparent-box2">
                        <span class="titlespan boxshadow">                <?php echo get_the_category_list(', ');?>
</span>
                    </div>
                </div>
                <div class="contenttext">

                <h2>                    <a href="<?php the_permalink(); ?>">
<?php the_title(); ?></a></h2>
            <div>
                <hr>
                <hr>
            </div>
            <p>
            <?php
      if (has_excerpt()) {
          echo get_the_excerpt();
      } else {
      echo wp_trim_words(get_the_content(), 40);} ?></p>
      <span class="theauthor"> Posted by <?php the_author_posts_link() ?> on <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
  <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg> <?php the_time('F j, Y') ?> 
      </span>
</div>
 </div> <?php  endwhile;
      ?>
</div>
<script>
   var limit = 10,
       page = 1,
       type = 'latest',
       category = '',
       max_pages_latest = <?php echo $latests->max_num_pages ?>
</script>
<?php if ( $latests->max_num_pages > 1 ){
   echo '<div class="load_more text-center">
                    <a href="#" class="btn bg-danger btn-circle btn-inverse btn-load-more rounded-0">Load More</a> 
                </div>';
        }else{?>
<article>
   <h1>Sorry...</h1>
   <p><?php _e('No More Posts Available'); ?></p>
</article>
<?php };
   wp_reset_query();
   ?>

        </div>