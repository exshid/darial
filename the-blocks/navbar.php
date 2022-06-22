    <style type="text/css">
.relatedposts .transparent-box2,.contentrecent:hover .transparent-box2,
.sidebarcontent:hover .transparent-box2,
.content:hover .transparent-box2,.transparent-box25 { background: linear-gradient(161deg, <?php echo myprefix_get_theme_option( 'select_color' )?>e3 24%, rgba(8, 226, 238, 0) 78%) !important; 
    background-color: rgba(0, 0, 0, 0.5);
}

.relatedposts .transparent-box2:hover,
.transparent-box25:hover{
  background: rgba(0,0,0,0) !important;
}
.designedby,.videostitle,.titlespan {
    background-color: <?php echo myprefix_get_theme_option( 'select_color' )?>;
}
.cat-item,
.tag-cloud-link,
.boxshadow {
    -webkit-box-shadow: -1px -1px 13px 5px <?php echo myprefix_get_theme_option( 'select_color' )?>;
    box-shadow: -1px -1px 23px 5px <?php echo myprefix_get_theme_option( 'select_color' )?>;

}
.videospan {
    color: <?php echo myprefix_get_theme_option( 'select_color' )?> !important;
 }

 .img-box:hover:hover .gallcaption {
    background-color: <?php echo myprefix_get_theme_option( 'select_color' )?> !important;
}
.container33,.container35 {
    background: <?php echo myprefix_get_theme_option( 'select_color' )?> !important;
}
.wp-block-theblocktheme-footer {
    background-color: <?php echo myprefix_get_theme_option( 'select_color' )?>;
}

.wp-block-tag-cloud {
    color: <?php echo myprefix_get_theme_option( 'select_color' )?>;

}

.tag-cloud-link {
    background-color: <?php echo myprefix_get_theme_option( 'select_color' )?>;
    border: 1px solid <?php echo myprefix_get_theme_option( 'select_color' )?>;
}

.cat-item a:hover,
.tag-cloud-link:hover {
    color: <?php echo myprefix_get_theme_option( 'select_color' )?> !important;

}


.cat-item a {

background-color: <?php echo myprefix_get_theme_option( 'select_color' )?>;
border: 1px solid <?php echo myprefix_get_theme_option( 'select_color' )?>;
}

.wp-block-columns {
color: <?php echo myprefix_get_theme_option( 'select_color' )?>;
}
.form-switch .form-check-input {
    border-color: <?php echo myprefix_get_theme_option( 'select_color' )?> !important;
}

.form-switch .form-check-input:checked,
.form-check-input:focus {
    border-color: <?php echo myprefix_get_theme_option( 'select_color' )?> !important;
    box-shadow: 0 0 0 0rem rgb(253 110 23 / 25%) !important;

}

.bg-danger {
    background-color: <?php echo myprefix_get_theme_option( 'select_color' )?> !important;

}

.singlepostimg .bycategories {
    background-color: <?php echo myprefix_get_theme_option( 'select_color' )?>;
}

.authorinner {
    background-color: <?php echo myprefix_get_theme_option( 'select_color' )?>;

}

.writer {
    color: <?php echo myprefix_get_theme_option( 'select_color' )?>;
}

.writer a {
    color: <?php echo myprefix_get_theme_option( 'select_color' )?> !important;
}

.submit {
    background-color: <?php echo myprefix_get_theme_option( 'select_color' )?>;
}


.submit:hover {
    background-color: <?php echo myprefix_get_theme_option( 'select_color' )?>80;
}
::selection{
  background-color: <?php echo myprefix_get_theme_option( 'select_color' )?>88 !important;
}

.archivetop::selection,
.archivetop span::selection {
  color: <?php echo myprefix_get_theme_option( 'select_color' )?>;
}

.archivetop {
    background-color: <?php echo myprefix_get_theme_option( 'select_color' )?>;
}

a.page-numbers {
    color: <?php echo myprefix_get_theme_option( 'select_color' )?> !important;
}

.author_bio_section {

background-color: <?php echo myprefix_get_theme_option( 'select_color' )?>;
}


.alert-info {

background: <?php echo myprefix_get_theme_option( 'select_color' )?> !important;
}


.alert .search-field {
background: <?php echo myprefix_get_theme_option( 'select_color' )?>;
}
.wp-container-1::selection {
    background-color: <?php echo myprefix_get_theme_option( 'select_color' )?>;
}



.form-check-input:checked {
    border-color: <?php echo myprefix_get_theme_option( 'select_color' )?> !important;
}
#tags a {
    color: <?php echo myprefix_get_theme_option( 'select_color' )?> !important;
}

#tags {
    background: <?php echo myprefix_get_theme_option( 'select_color' )?>;
}

#tags a:hover {
    background-color: <?php echo myprefix_get_theme_option( 'select_color' )?>;
}

.form-control:focus {
    box-shadow: 0 0 0 .25rem <?php echo myprefix_get_theme_option( 'select_color' )?>40 !important;
}

a:hover {
    color: #5A052C;
}

.veryimportantpost,#background{
    background-color: <?php echo myprefix_get_theme_option( 'select_color' )?> !important;
}

    </style>
<nav class="navbar bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url() ?>"><?php echo get_bloginfo( 'name' ); ?></a>
    <li class="navitem"><?php echo get_bloginfo( 'description' ); ?></li>
    <button class="btn bg-danger rounded-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightning" viewBox="0 0 16 16">
  <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1H6.374z" style="color: white;"/>
</svg></button>
    <div class="offcanvas offcanvas-start bg-dark" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Today's posts</h5>
    <button type="button" id="canvasdismiss" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <?php $todayposts = new WP_Query (array(
                                    'posts_per_page' => -1,
                                    'post_type' => 'post',
                                    'date_query' => array(
                                        'after' => 'today',
                                    ),
                                )); 
                                if ( $todayposts->have_posts() ) {
	
                                while ($todayposts->have_posts()){
                                    $todayposts->the_post(); ?>
                                    <div class="todaypost"><h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    <div class="theauthor"> Posted by <?php the_author_posts_link() ?> in <?php echo get_the_category_list(', '); ?></div>
</div>
                               <?php } wp_reset_postdata();}  else{?>
                                <div>No post today yet.</div><?php
                               }
                               ?>
  </div>
</div>

  </div>
 

<div class="searchoffcanvas offcanvas offcanvas-start bg-dark" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasSearch" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Search results</h5>
    <button type="button"  id="searchcanvasdismiss"class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body search_result" id="datafetch">
  <ul>
            <li style=" padding: 20px">Type to search...</li>
        </ul>
  </div>
</div>

</nav>
<nav class="navbar secondnavbar navbar-expand-lg sticky-top navbar-dark bg-dark">
  <div class="container-fluid">
  

  
    <button class="navbar-toggler rounded-0 bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <?php wp_nav_menu(array(
						'theme_location' => 'headerMenuLocation',
                        'menu_class'     => 'navitem',
					)); ?>

<li class="nav-item navitem dropdown ">
                                <a class="navitem nav-link dropdown-toggle " href="#" data-bs-toggle="dropdown"> Hover me </a>
                                <ul class="dropdown-menu dropmedown" id="dropdown-menudark dropdown">
                                <div class="sidebarlit ">

                                    <?php $hover = new WP_Query (array(
                            'paged' => get_query_var('paged',1),
                            'posts_per_page' => 4,
                            'category_name' => 'uncategorized',
                            'post_type' => 'post',
                            //'orderby' => 'rand',
                            'order' => 'DESC',
                        )); 
                        while ($hover->have_posts()){
                            $hover->the_post(); ?>

                                        <section>
                                            <img src="<?php
 if ( has_post_thumbnail() ) {
  echo get_the_post_thumbnail_url();
  } else {
  bloginfo('template_directory'); ?>/images/default-image.jpg)<?php } ?>">
                                                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

                                        </section>
                                        <?php } wp_reset_postdata(); ?>
  </div>
                                    </ul>
                            </li>
      </ul>
  
    </div>
  <div class="secondnavcontainer">
    <?php get_search_form(); ?>

          <div class="form-check form-switch">
  <input class="form-check-input bg-danger btn-toggle" type="checkbox" role="switch" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault" aria-label="Dark mode button"></label>
</div>
</div>
  </div>
</nav>


