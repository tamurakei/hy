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