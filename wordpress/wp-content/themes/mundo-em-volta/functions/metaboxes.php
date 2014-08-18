<?php 
/**
 * Configuração do Metaboxes Adicionais ao tema.
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
 * @package   Azul_Azul
 * @author    Fábio de Assis <fabio@agenciaazul.com.br>
 * @copyright 2013 Agência Azul (www.agenciaazul.com.br)
 * @license   http://www.php.net/license/3_02.txt  PHP License 3.01
 * @version   SVN: $Id$
 * @link      /azul-azul/functions/metaboxes.php
 * @since     Arquivo disponível desde Release 0.1
 */

add_action('do_meta_boxes', 'All_metabox');
add_action('save_post', 'Gmaps_save');
add_action('save_post', 'Case_save');
add_action('save_post', 'Azul_save');
add_action('save_post', 'Color_save');

add_action('save_post', 'Video_save');




/**
 * Inicializa todos os Metaboxes
 *
 * @return none
 * @author Fábio de Assis <fabio@agenciaazul.com.br>
 * add_meta_box( $id, $title, $callback, $post_type, $context, $priority, $callback_args );
 */
function All_metabox()
{
    add_meta_box(
        'url_video_id',
        'Url Video',
        'Video_info',
        'video',
        'normal'
    );
    add_meta_box(
        'gmaps',
        'GoogleMaps',
        'Gmaps_create',
        'unidade',
        'side'
    );    
}

/**
 * Conteudo do Metabox
 * 
 * @param int $post Id do post
 *
 * @return none
 * @author Fábio de Assis <fabio@agenciaazul.com.br>
 */
function Gmaps_create($post)
{
    $video_meta = get_post_meta($post->ID, '_video_meta', true);
    ?>
    <label>Endereço no Google Maps:</label><br />
    <textarea cols="35" name="video_meta"><?php echo $video_meta; ?></textarea><?php
}


/**
 * Salva os Dados do Metabox
 *
 * @return none
 * @author Fábio de Assis <fabio@agenciaazul.com.br>
 */
function Gmaps_save()
{
    global $post;

    // Get our form field
    if ($_POST && isset($_POST['video_meta'])) {
        $video_meta = esc_attr($_POST['video_meta']);
        // Update post meta
        update_post_meta($post->ID, '_video_meta', $video_meta);
    }
}





?>