<?php get_header(); ?>

	
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<div class="articleWrap">
		<div class="article">
			<div class="articleTitle">
				<h2><?php the_title(); ?> </h2>
			</div>
			
			<div class="articleTxt" id="contactForm">
				<?php the_content(); ?> 
			</div>
			
			<?php /*
			<div class="frommail">
			メールでのお問い合わせはこちら<br>
<a href="mailto:kiyo@healthy-yummy.com" target="_blank">kiyo@healthy-yummy.com</a>
			</div>
			*/ ?>
			
		</div>
	</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>