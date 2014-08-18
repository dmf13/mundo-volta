<?php
/**
 * Arquivo que carrega as configurações de programação do tema wordpress
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category  Wordpress_Theme
 * @package   
 * @author    Danielle <danielle@agenciai3.com.br>
 * @copyright 2013 Agência I3 (www.agenciai3.com.br)
 * @license   http://www.php.net/license/3_02.txt  PHP License 3.01
 * @version   SVN: $Id$
 * @link      /mundo-em-volta/functions.php
 * @since     Arquivo disponível desde Release 0.1
 */


// Arquivos adicionais
//require 'functions/theme_options.php';
//require 'functions/pagination.php';
require 'functions/post_types.php';
//require 'functions/taxonomies.php';
require 'functions/metaboxes.php';

/*
     * This theme supports all available post formats by default.
     * See http://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
    ) );


/**
     * Adicionando suporte a Thumbnails 
     * @return none
     * @author Agência I3 Developer <developer@agenciai3.com.br> */
        add_theme_support('post-thumbnails', array( 'page' ) );
        set_post_thumbnail_size( 1100, 412 );


// Adicionando suporte a Thumbnails e Menus
add_theme_support('post-thumbnails');
//add_theme_support('menus');


/**
 *
 * Adiciona o item de menu no Admin do Tema
 *
 * @return none
 * @author Agência I3 Developer <developer@agenciai3.com.br>
 *
 *
 */

    if (function_exists('register_nav_menus')) {
        register_nav_menus(
            array(
                'header-menu' => 'Header Menu', 
                'footer-menu' => 'Footer Menu'
            )
        );
    }



/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override twentyten_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 * @since Twenty Ten 1.0
 * @uses register_sidebar
 */
function mundoemvolta_widgets_init() {
    // Area 1, located at the top of the sidebar.
    register_sidebar( array(
        'name' => __( 'Primary Widget Area', 'mundoemvolta' ),
        'id' => 'primary-widget-area',
        'description' => __( 'Add widgets here to appear in your sidebar.', 'mundoemvolta' ),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
    register_sidebar( array(
        'name' => __( 'Secondary Widget Area', 'mundoemvolta' ),
        'id' => 'secondary-widget-area',
        'description' => __( 'An optional secondary widget area, displays below the primary widget area in your sidebar.', 'twentyten' ),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
    register_sidebar( array(
        'name' => __( 'Tertiary Widget Area', 'mundoemvolta' ),
        'id' => 'tertiary-widget-area',
        'description' => __( 'An optional tertiary widget area, displays below the primary widget area in your sidebar.', 'twentyten' ),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Area 3, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'mundoemvolta' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'An optional widget area for your site footer.', 'mundoemvolta' ),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Area 4, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'mundoemvolta' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'An optional widget area for your site footer.', 'mundoemvolta' ),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Area 5, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'mundoemvolta' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'An optional widget area for your site footer.', 'mundoemvolta' ),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Area 6, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'mundoemvolta' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'An optional widget area for your site footer.', 'mundoemvolta' ),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'mundoemvolta_widgets_init' );



/**
 * Displays navigation to next/previous post when applicable.
*
* @since Twenty Thirteen 1.0
*
* @return voidSS
*/
function twentythirteen_post_nav() {
    global $post;

    // Don't print empty markup if there's nowhere to navigate.
    $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
    $next     = get_adjacent_post( false, '', false );

    if ( ! $next && ! $previous )
        return;
    ?>
    <nav class="navigation post-navigation" role="navigation">
        <h1 class="screen-reader-text"><?php _e( 'Post navigation', 'twentythirteen' ); ?></h1>
        <div class="nav-links">

            <?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'twentythirteen' ) ); ?>
            <?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'twentythirteen' ) ); ?>

        </div><!-- .nav-links -->
    </nav><!-- .navigation -->
    <?php
}
if ( ! function_exists( 'twentythirteen_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own twentythirteen_entry_meta() to override in a child theme.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
function twentythirteen_entry_meta() {
    if ( is_sticky() && is_home() && ! is_paged() )
        echo '<span class="featured-post">' . __( 'Sticky', 'twentythirteen' ) . '</span>';

    if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
        twentythirteen_entry_date();

    // Translators: used between list items, there is a space after the comma.
    $categories_list = get_the_category_list( __( ', ', 'twentythirteen' ) );
    if ( $categories_list ) {
        echo '<span class="categories-links">' . $categories_list . '</span>';
    }

    // Translators: used between list items, there is a space after the comma.
    $tag_list = get_the_tag_list( '', __( ', ', 'twentythirteen' ) );
    if ( $tag_list ) {
        echo '<span class="tags-links">' . $tag_list . '</span>';
    }

    // Post author
    if ( 'post' == get_post_type() ) {
        printf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
            esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
            esc_attr( sprintf( __( 'View all posts by %s', 'twentythirteen' ), get_the_author() ) ),
            get_the_author()
        );
    }
}
endif;

if ( ! function_exists( 'twentythirteen_entry_date' ) ) :
/**
 * Prints HTML with date information for current post.
 *
 * Create your own twentythirteen_entry_date() to override in a child theme.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param boolean $echo Whether to echo the date. Default true.
 * @return string The HTML-formatted post date.
 */
function twentythirteen_entry_date( $echo = true ) {
    if ( has_post_format( array( 'chat', 'status' ) ) )
        $format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'twentythirteen' );
    else
        $format_prefix = '%2$s';

    $date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
        esc_url( get_permalink() ),
        esc_attr( sprintf( __( 'Permalink to %s', 'twentythirteen' ), the_title_attribute( 'echo=0' ) ) ),
        esc_attr( get_the_date( 'c' ) ),
        esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
    );

    if ( $echo )
        echo $date;

    return $date;
}
endif;

if ( ! function_exists( 'twentythirteen_the_attached_image' ) ) :
/**
 * Prints the attached image with a link to the next attached image.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
function twentythirteen_the_attached_image() {
    $post                = get_post();
    $attachment_size     = apply_filters( 'twentythirteen_attachment_size', array( 724, 724 ) );
    $next_attachment_url = wp_get_attachment_url();

    /**
     * Grab the IDs of all the image attachments in a gallery so we can get the URL
     * of the next adjacent image in a gallery, or the first image (if we're
     * looking at the last image in a gallery), or, in a gallery of one, just the
     * link to that image file.
     */
    $attachment_ids = get_posts( array(
        'post_parent'    => $post->post_parent,
        'fields'         => 'ids',
        'numberposts'    => -1,
        'post_status'    => 'inherit',
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'order'          => 'ASC',
        'orderby'        => 'menu_order ID'
    ) );

    // If there is more than 1 attachment in a gallery...
    if ( count( $attachment_ids ) > 1 ) {
        foreach ( $attachment_ids as $attachment_id ) {
            if ( $attachment_id == $post->ID ) {
                $next_id = current( $attachment_ids );
                break;
            }
        }

        // get the URL of the next image attachment...
        if ( $next_id )
            $next_attachment_url = get_attachment_link( $next_id );

        // or get the URL of the first image attachment.
        else
            $next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
    }

    printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
        esc_url( $next_attachment_url ),
        the_title_attribute( array( 'echo' => false ) ),
        wp_get_attachment_image( $post->ID, $attachment_size )
    );
}
endif;

/**
 * Returns the URL from the post.
 *
 * @uses get_url_in_content() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return string The Link format URL.
 */
function twentythirteen_get_link_url() {
    $content = get_the_content();
    $has_url = get_url_in_content( $content );

    return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

/**
 * Extends the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Active widgets in the sidebar to change the layout and spacing.
 * 3. When avatars are disabled in discussion settings.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function twentythirteen_body_class( $classes ) {
    if ( ! is_multi_author() )
        $classes[] = 'single-author';

    if ( is_active_sidebar( 'sidebar-2' ) && ! is_attachment() && ! is_404() )
        $classes[] = 'sidebar';

    if ( ! get_option( 'show_avatars' ) )
        $classes[] = 'no-avatars';

    return $classes;
}
add_filter( 'body_class', 'twentythirteen_body_class' );

/**
 * Adjusts content_width value for video post formats and attachment templates.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
function twentythirteen_content_width() {
    global $content_width;

    if ( is_attachment() )
        $content_width = 724;
    elseif ( has_post_format( 'audio' ) )
        $content_width = 484;
}
add_action( 'template_redirect', 'twentythirteen_content_width' );

/**
 * Add postMessage support for site title and description for the Customizer.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 * @return void
 */
function twentythirteen_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'twentythirteen_customize_register' );

/**
 * Binds JavaScript handlers to make Customizer preview reload changes
 * asynchronously.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_customize_preview_js() {
    wp_enqueue_script( 'twentythirteen-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20130226', true );
}
add_action( 'customize_preview_init', 'twentythirteen_customize_preview_js' );
