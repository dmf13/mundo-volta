<?php
/**
 * Página de Vídeos
 *
 * PHP version 5
 *
 * LICENSE: Comercial.
 *
 * @category  Wordpress_Theme
 * @package   
 * @author    Danielle <danielle@agenciai3.com.br>
 * @copyright 2013 Agência I3 (www.agenciai3.com.br)
 * @license   http://www.php.net/license/3_02.txt  PHP License 3.01
 * @version   SVN: $Id$
 * @link      /azul-azul/page-videos.php
 * @since     Arquivo disponível desde Release 0.1
 */

get_header();

if (have_posts()) {
    ?>
   <div class="content-left">
   	<?php
    while (have_posts()) {
        the_post();
		?>
		<?php

		$args = array(
			'posts_per_page'  => -1,
			'orderby'         => 'post_date',
			'order'           => 'ASC',
			'post_type'       => 'foto'
		);

		$fotos = get_posts($args);
		if ($fotos) {
		    ?>
            <?php
			foreach ($fotos as $foto) {
			    ?>
		        <article>
					<div class="article-theme">
						<div class="article-header">
							<div class="date">
								<span></span>
								<div class="date-line">
								    
									<span><?php echo get_the_date('M'); ?></span>
								 	<?php echo get_the_date('j'); ?>
								</div>
							</div>
							<h3><a href="<?php the_permalink(); ?>"><?php echo $foto->post_title; ?></a></h3>
						</div>
						<div class="article-content">
							<?php echo get_the_post_thumbnail($foto->ID, 'full'); ?>
							<?php echo $foto->post_content; ?>
						</div>
						<div class="article-bottom">
								<span class="referencia">COMPARTILHE</span>
								<span class="article-social">				
                                         	<a class="sm-1" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank">Facebook</a>
	                                        <a class="sm-2" href="https://twitter.com/share?url=<?php echo the_permalink(); ?>" target="_blank">Tweet</a>
	                                        <a class="sm-3" href="//www.pinterest.com/pin/create/button/?url=<?php echo the_permalink(); ?>&media=<?php if(function_exists('the_post_thumbnail')) echo wp_get_attachment_url(get_post_thumbnail_id()); ?>&description=<?php echo get_the_title(); ?>" class="pin-it-button" data-pin-do="buttonPin" data-pin-config="above"></a>
	     
	     									
								</span>
							
								<span class="comentario-pub">
									DEIXE UM COMENTÁRIO
								</span>
								<span class="comentario-view">
									<p>VER COMENTARIOS</p>
								</span>			
							
						</div>
					</div>

				</article>
					


		        <?php
			} // end foreach clientes
			?>
	        
	        <span class="clear"></span><?php


				

		} //endif $fotos
	} // end while have_posts
	?>
        
</div>
<!-- end of .content-left -->

<?php
} // end if have_posts
			get_sidebar();
			?>
<?php
get_footer();
?>