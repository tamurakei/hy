<?php get_header(); ?>

	<div id="navwrap">
			<header>
				<h1><img src="<?php echo get_template_directory_uri(); ?>/img/logo_ver.png"  alt="Healty &amp; Yummy"></h1>
			</header>
			<nav>
				<ul>
					
					<?php wp_list_pages('title_li=&depth=1'); ?>
				</ul>
				<div class="clearfix"></div>
			</nav><!--nav-->
			<div class="articleList">
				<ul>
					<?php 
						global $post;
						$args = array( 'posts_per_page' => 5 );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) {
							setup_postdata($post);
							?>
							<li>
								<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>	
							</li>
							<?php
						}
						wp_reset_postdata();
					?>
					
				</ul>
				<div class="clearfix"></div>
			</div><!--articleList-->
			<div class="clearfix"></div>
		</div><!--navWrap-->
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<div class="articleWrap">
		<div class="article">
			<div class="articleTitle">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="articleTxt">
				<?php the_content(); ?> 
			</div>
		</div>
		<div class="articleFadeU"></div>
		<div class="articleFadeB"></div>
		<div class="clearfix"></div>
		</div></div>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>