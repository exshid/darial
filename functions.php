<?php

function darial_files() {
  wp_enqueue_script('bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js');

  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Maven+Pro&display=swap');
  wp_enqueue_style('darial_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_script('main-darial-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('bootstrap-css', get_theme_file_uri('/css/bootstrap.min.css'));
  wp_enqueue_script('jquery-darial', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
  wp_enqueue_style('darial_light_style', get_theme_file_uri('/css/dark-theme.css'));

  wp_localize_script('main-darial-js', 'darialData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest'),
    'template_url' => get_theme_file_uri()
  ));
}

add_action('wp_enqueue_scripts', 'darial_files');

function darial_features() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');

  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('editor-styles');
  add_editor_style(array('https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap', 'build/style-index.css'));

}

add_action('after_setup_theme', 'darial_features');

function authorBox( $content ) {
 
  global $post;
   
  if ( is_single() && isset( $post->post_author ) ) {
   
  $display_name = get_the_author_meta( 'display_name', $post->post_author );
   
  if ( empty( $display_name ) )
  $display_name = get_the_author_meta( 'nickname', $post->post_author );
   
  $user_description = get_the_author_meta( 'user_description', $post->post_author );
   
  $user_website = get_the_author_meta('url', $post->post_author);
   
  $user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));
   
  if ( ! empty( $display_name ) )
   
  $author_details = '<div class="name-and-picture">' . get_avatar( get_the_author_meta('user_email') , 90 ).'<a href="'. $user_posts .'"><h4 class="author_name">' . $display_name . '</h4></a> </div>';
   
  if ( ! empty( $user_description ) )
   
  $author_details .= '<p class="author_details">' . nl2br( $user_description ). '</p>';
  
  $content = $content . '<div class="author_bio_section" >' . $author_details . '</div>';
  }
  return $content;
  }
   
  add_action( 'the_content', 'authorBox' );
   
  remove_filter('pre_user_description', 'wp_filter_kses');


function get_related_posts( $post_id, $related_count, $args = array() ) {
  $args = wp_parse_args( (array) $args, array(
    'orderby' => 'rand',
    'return'  => 'query',
  ) );

  $related_args = array(
    'post_type'      => get_post_type( $post_id ),
    'posts_per_page' => $related_count,
    'post_status'    => 'publish',
    'post__not_in'   => array( $post_id ),
    'orderby'        => $args['orderby'],
    'tax_query'      => array()
  );

  $post       = get_post( $post_id );
  $taxonomies = get_object_taxonomies( $post, 'names' );

  foreach ( $taxonomies as $taxonomy ) {
    $terms = get_the_terms( $post_id, $taxonomy );
    if ( empty( $terms ) ) {
      continue;
    }
    $term_list                   = wp_list_pluck( $terms, 'slug' );
    $related_args['tax_query'][] = array(
      'taxonomy' => $taxonomy,
      'field'    => 'slug',
      'terms'    => $term_list
    );
  }

  if ( count( $related_args['tax_query'] ) > 1 ) {
    $related_args['tax_query']['relation'] = 'OR';
  }

  if ( $args['return'] == 'query' ) {
    return new WP_Query( $related_args );
  } else {
    return $related_args;
  }
}

class PlaceholderBlock {
  function __construct($name) {
    $this->name = $name;
    add_action('init', [$this, 'onInit']);
  }

  function ourRenderCallback($attributes, $content) {
    ob_start();
    require get_theme_file_path("/the-blocks/{$this->name}.php");
    return ob_get_clean();
  }

  function onInit() {
    wp_register_script($this->name, get_stylesheet_directory_uri() . "/the-blocks/{$this->name}.js", array('wp-blocks', 'wp-editor'));
    
    register_block_type("theblocktheme/{$this->name}", array(
      'editor_script' => $this->name,
      'render_callback' => [$this, 'ourRenderCallback']
    ));
  }
}

new PlaceholderBlock("searchresults");
new PlaceholderBlock("comments");
new PlaceholderBlock("relatedposts");
new PlaceholderBlock("notfound");
new PlaceholderBlock("mypost");
new PlaceholderBlock("navbar");
new PlaceholderBlock("importantpost");
new PlaceholderBlock("postbycategory");
new PlaceholderBlock("latestpostscustom");
new PlaceholderBlock("firstpost");
new PlaceholderBlock("rightsidebar");
new PlaceholderBlock("videos");
new PlaceholderBlock("slider");
new PlaceholderBlock("archiveposts");
new PlaceholderBlock("archivesidebar");
new PlaceholderBlock("page");





class JSXBlock {
  function __construct($name, $renderCallback = null, $data = null) {
    $this->name = $name;
    $this->data = $data;
    $this->renderCallback = $renderCallback;
    add_action('init', [$this, 'onInit']);
  }

  function ourRenderCallback($attributes, $content) {
    ob_start();
    require get_theme_file_path("/the-blocks/{$this->name}.php");
    return ob_get_clean();
  }

  function onInit() {
    wp_register_script($this->name, get_stylesheet_directory_uri() . "/build/{$this->name}.js", array('wp-blocks', 'wp-editor'));
    
    if ($this->data) {
      wp_localize_script($this->name, $this->name, $this->data);
    }

    $ourArgs = array(
      'editor_script' => $this->name
    );

    if ($this->renderCallback) {
      $ourArgs['render_callback'] = [$this, 'ourRenderCallback'];
    }

    register_block_type("theblocktheme/{$this->name}", $ourArgs);
  }
}

new JSXBlock('footercontainer');
new JSXBlock('container');
new JSXBlock('genericheading');
new JSXBlock('footer');
new JSXBlock('genericbutton');

function loadMore() {
  wp_enqueue_script('jquery');
  wp_register_script( 'loadmore_script', get_stylesheet_directory_uri() . '/js/ajax.js', array('jquery') );
  wp_localize_script( 'loadmore_script', 'loadmore_params', array(
      'ajaxurl' => admin_url('admin-ajax.php'),
  ) );

   wp_enqueue_script( 'loadmore_script' );
}

add_action( 'wp_enqueue_scripts','loadMore' );
function loadMoreAjaxHandler(){
  $type = $_POST['type'];
  $category = isset($_POST['category']) ? $_POST['category']: '';
  $args['paged'] = $_POST['page'] + 1;
  $args['post_status'] = 'publish';
  $args['posts_per_page'] =  $_POST['limit'];
  if($type == 'archive'){
      $args['category_name'] = $category;
  }
  query_posts( $args );
  if( have_posts() ) :
      while(have_posts()): the_post();	
?>
<div class="content">
                <div class="contentimage"
                style="background-image: url(<?php
 if ( has_post_thumbnail() ) {
  echo get_the_post_thumbnail_url();
  } else {
  bloginfo('template_directory'); ?>/images/default-image.jpg<?php } ?>);">
                    <div class="transparent-box2">
                        <span class="titlespan">                <?php echo get_the_category_list(', ');?>
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
</div></div>  <?php     endwhile;
  endif;
  die;
}
add_action('wp_ajax_loadmore','loadMoreAjaxHandler');
add_action('wp_ajax_nopriv_loadmore','loadMoreAjaxHandler');



?>
<?php 
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetch(){

    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { action: 'data_fetch', keyword: jQuery('#keyword').val() },
        success: function(data) {
          if (jQuery('#keyword').val().length > 2) {

            jQuery('#datafetch').html( data );
          }
        }
    });

}
</script>

<?php
}

add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){

    $the_query = new WP_Query( array( 'posts_per_page' => 10, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => array('page','post') ) );
    if( $the_query->have_posts() ) :
        echo '<ul>';
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

            <li style="display:flex; margin: 10px;"><a style="color: grey !important" href="<?php echo esc_url( post_permalink() ); ?>"><div class="searchimageclass" style="background-image:url(<?php
 if ( has_post_thumbnail() ) {
  echo get_the_post_thumbnail_url();
  } else {
  bloginfo('template_directory'); ?>/images/default-image.jpg<?php } ?>)"></div></a> <a style="color: grey !important" href="<?php echo esc_url( post_permalink() ); ?>"><?php the_title();?></a></li>

        <?php endwhile;
       echo '</ul>';
        wp_reset_postdata();  
    endif;

    die();
}
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'ThemeOptions' ) ) {

	class ThemeOptions {

		public function __construct() {

			if ( is_admin() ) {
				add_action( 'admin_menu', array( 'ThemeOptions', 'add_admin_menu' ) );
				add_action( 'admin_init', array( 'ThemeOptions', 'register_settings' ) );
			}

		}
		public static function get_theme_options() {
			return get_option( 'theme_options' );
		}
		public static function get_theme_option( $id ) {
			$options = self::get_theme_options();
			if ( isset( $options[$id] ) ) {
				return $options[$id];
			}
		}

		public static function add_admin_menu() {
			add_menu_page(
				esc_html__( 'Theme Settings', 'text-domain' ),
				esc_html__( 'Theme Settings', 'text-domain' ),
				'manage_options',
				'theme-settings',
				array( 'ThemeOptions', 'create_admin_page' )
			);
		}

		public static function register_settings() {
			register_setting( 'theme_options', 'theme_options', array( 'ThemeOptions', 'sanitize' ) );
		}

		public static function sanitize( $options ) {

			if ( $options ) {
				if ( ! empty( $options['select_color'] ) ) {
					$options['select_color'] = sanitize_text_field( $options['select_color'] );
				} else {
					unset( $options['select_color'] );
        }

			}

			return $options;

		}

		public static function create_admin_page() { ?>

			<div class="wrap">

				<h1><?php esc_html_e( 'Theme Options', 'text-domain' ); ?></h1>

				<form method="post" action="options.php">

					<?php settings_fields( 'theme_options' ); ?>

					<table class="form-table">

						<tr valign="top">
							<th scope="row"><?php esc_html_e( 'Color', 'text-domain' ); ?></th>
							<td>
								<?php $value = self::get_theme_option( 'select_color' ); ?>
								<input type="color" name="theme_options[select_color]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>



          </table>

					<?php submit_button(); ?>

				</form>

			</div>
		<?php }

	}
}
new ThemeOptions();

function myprefix_get_theme_option( $id = '' ) {
	return ThemeOptions::get_theme_option( $id );
}
?>
