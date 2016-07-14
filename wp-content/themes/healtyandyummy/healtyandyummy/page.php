<?php get_header(); ?>

	
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<div class="articleWrap">
		<div class="article">
			<div class="articleTitle">
				<h2><?php the_title(); ?> </h2>
			</div>
			<div class="articleTxt">
				<?php the_content(); ?> 
			</div>
		</div>
			<div class="articleFadeU"></div>
			<div class="articleFadeB"></div>
			<div class="clearfix"></div>
	</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>