<div class="gallery" id="gll">
                <div class="gallery-image">
                    <?php $slider = new WP_Query (array(
                                    'posts_per_page' => 5,
                                    'category_name' => 'uncategorized',
                                    'post_type' => 'post',
                                    'order' => 'DESC',
                                )); while ($slider->have_posts()){
                                    $slider->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>"><div class="img-box">

                        <img src="<?php the_post_thumbnail_url() ?> " alt="" />


                        <div class="transparent-box25">
                            <div class="rectangle"></div>

                            <div class="caption">
                                <p><a class="sliderlink" href="<?php the_permalink(); ?>"><span class="gallcaption"><?php the_title(); ?></a></span></p>
                    
                            </div>

                    
                    </div>
                    
                    </div></a>
                    <?php }?>
               
                    </div>
                
            </div>
