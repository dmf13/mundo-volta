<?php
/**
 * Página de Segurança e listagem das notícias. É utilizada na falta de outros arquivos.
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
 * @link      /mundo-em-volta/page-dicas.php
 * @since     Arquivo disponível desde Release 0.1
 */

get_header();
?>
<div class="content-left">
<?php 
if (have_posts()) {  ?>
	<!-- .content-left -->
	
	<?php
    while (have_posts()) {
        the_post();
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
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>
						<div class="article-content">
							<?php the_content(); ?>
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
										<?php comments_template(); ?>
		
		
	
								</span>
								<span class="comentario-view">
									<p>VER COMENTARIOS</p>
								</span>			
							
						</div>
					</div>

				</article
			
		<?php
		}
	
		?>
				<div class="paginator">
					
				</div><!-- end of .paginator -->
<?php
} ?>
 </div>
<!-- end of .content-left -->


 <?php 
get_sidebar();
get_footer();
?>