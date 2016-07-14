<?php get_header(); ?>
	
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
				<p class="price"><?php the_field('price'); ?> - (tax incl.) &nbsp;&nbsp;</p>
				<?php if(get_field('button')): ?>
					<?php if(get_field('button') == "visible"): ?>
				<div class="buybutton">
					<a href="http://store.healthy-yummy.com/items/2301472" target="_blank">ADD TO BAG</a>
				</div>
				<div id="reply_form" class="hidden"><p></p><?php echo do_shortcode( '[contact-form-7 id="4" title="コンタクトフォーム 1"]' ); ?></div>

					<?php endif; ?>
				<?php endif; ?>	
				</div>
					
					
					<div class="copy"><?php the_field('copy'); ?></div>
					<div class="policy bordertop"><?php the_field('policy'); ?></div>
					<div class="txt bordertop"><?php the_field('text'); ?></div>
					<div class="material bordertop"><?php the_field('material'); ?></div>
				</div>

			</div>
		</div>
		<div class="articleFadeU"></div>
		<div class="articleFadeB"></div>
		<div class="clearfix"></div>
		</div>
		<script>
			jQuery.noConflict();
			// Put all your code in your document ready area
			jQuery(document).ready(function($){ 
				// Overlay Contact Form 
				$("button.contact").click(function (event) {
					event.preventDefault();
					$(this).colorbox({
						inline:true, 
						transition:'fade', 
						speed:500,
						width:'80%',
						height:'auto',
						href:"#reply_form",
						onCleanup:function(){ 
							$('#reply_form').hide();  
						}
					});
					$('#reply_form').fadeIn('slow');
				});
			
			});
			</script>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>