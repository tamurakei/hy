<?php get_header(); ?>


<?php $args = array(
//'numberposts' => 1,
'post_type' => 'post',
'order'=> 'DESC',
'posts_per_page' => -1,
);
$the_query = new WP_Query( $args );?>
<?php if( $the_query->have_posts() ): ?>
<div class="articleWrap">
<h2>PRESS</h2>
<?php while($the_query->have_posts()): $the_query->the_post();?>

		
			<div class="article">
				<div class="articleTitle">
				
				</div>
				<div class="articleTxt">
					<h2 class="articleTitle"><?php the_title(); ?></h2>
					<div class="articleContent">
						<?php the_content(); ?>
					</div>
				</div>
				<!-- //.articleTxt -->

			</div>
	
<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
