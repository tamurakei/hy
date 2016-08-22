<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php get_header(); ?>
	
		<?php if(have_posts()):while(have_posts()):the_post();?>
							
		<div class="articleWrap">
			<div class="article">
				<?php /*
				<div class="articleTitle">
				<h2><?php the_field('name'); ?></h2>
				</div>
				*/ ?>
				
				<div class="articleTxt">
					<?php $image = get_field('image');?>
					<a href="<?php echo $image['url']; ?>" class="cboxElement"><img class="p_img alignnone  wp-image-45 colorbox-<?php echo $image['id']; ?>" src="<?php echo $image['url']; ?>"></a>
					<div class="description">
					
					<div class="itembox">
					<h2 class="articleTitle"><?php the_field('name'); ?></h2>
					<p class="price"><?php the_field('saleprice'); ?> - (tax incl.) &nbsp;&nbsp;</p>
					<?php if(get_field('button')): ?>
						<?php if(get_field('button') == "visible"): ?>
					<div class="buybutton">
						<?php echo do_shortcode('[add_to_cart id="203"]'); ?>

					</div>
					
	
						<?php endif; ?>
					<?php endif; ?>	
					</div>
					
					<div class="txt bordertop"><?php the_field('text'); ?></div>
					<div class="policy bordertop"><?php the_field('policy'); ?></div>
					<div class="material bordertop"><?php the_field('material'); ?></div>
					<div class="copy"><?php the_field('copy'); ?></div>
				</div>

			</div>
		</div>
		<div class="clearfix"></div>
		</div>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>
<?php get_footer( 'shop' ); ?>
