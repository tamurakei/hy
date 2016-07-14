<?php $args = array(
'numberposts' => 1,
'post_type' => 'product',
'order'=> 'DESC',
'posts_per_page' => 1,
);
$the_query = new WP_Query( $args );?>
<?php if( $the_query->have_posts() ): ?>
<?php while($the_query->have_posts()): $the_query->the_post();?>

		<div class="articleWrap">
			<div class="article">


				<div class="articleTxt">
					<?php $image = get_field('image');?>
					<img class="p_img" src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>">

					<div class="description">
						<div class="itembox">
							<h2 class="articleTitle"><?php the_field('name'); ?></h2>
							<p class="price"><?php the_field('price'); ?></p>
							<?php if(get_field('button')): if(get_field('button') == "visible"): ?>
							<div class="buybutton">
								<a href="http://store.healthy-yummy.com/items/2301472" target="_blank">ADD TO BAG</a>
							</div>
							<?php endif;  endif; ?>
						</div>
						<div class="copy"><?php the_field('copy'); ?></div>
						<div class="policy"><?php the_field('policy'); ?></div>
						<div class="txt"><?php the_field('text'); ?></div>
						<div class="material"><?php the_field('material'); ?></div>
					</div>
				</div>
				<!-- //.articleTxt -->

			</div>
		</div>
<?php endwhile; endif; ?>
