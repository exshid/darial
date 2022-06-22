<div class="archivetop">
<?php if (is_category()) {
                        } if(is_author()){


                            ?> <div class="authorsidebar"> <?php echo get_avatar( get_the_author_meta('user_email') , 150 ); ?> <h3 style="color: whitesmoke"><?php echo get_the_author() ;?></h3></div><?php
                        }
                            else{
                           the_archive_title();
                                }?>
                        <p><?php the_archive_description(); ?>
        </div>



