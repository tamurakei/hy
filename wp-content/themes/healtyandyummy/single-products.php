<?php get_header(); ?>
	
		<?php if(have_posts()):while(have_posts()):the_post();?>
							
		<div class="articleWrap">
			<div class="article">
				<div class="articleTitle">
				<h2><?php the_field('name'); ?></h2>
			</div>
			<div class="articleTxt">
				<img src="<?php the_field('image'); ?>">
				<p class="copy"><?php the_field('copy'); ?></p>
				<p class="price">¥ <?php the_field('price'); ?> -</p>
				<?php if(get_field('button')): ?>
					<?php if(get_field('button') == "visible"): ?>
				<div class="buybutton">
					Buy It!
				</div>
					<?php endif; ?>
				<?php endif; ?>	
				<hr class="p_divider">
				<p class="txt"><?php the_field('text'); ?></p>

			</div>
		</div>
		<div class="articleFadeU"></div>
		<div class="articleFadeB"></div>
		<div class="clearfix"></div>
		</div>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>