<!--?php /* Template Name: COMPOSITE */ ?-->
<?php get_header(); ?>
	<header>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="205"></a></h1>
		</header>
		<div class="wrapper">
			<div class="localNav">
				<h2><a id="back" href="<?php echo esc_url( home_url( '/' ) ); ?>">works</a></h2>
			</div>
<?php if (have_posts()) :while(have_posts()):the_post();
	$id = get_the_ID();
	$cats = get_the_terms( $post->ID, 'comp_cat' );
	foreach( $cats as $cat ) { $catname = $cat -> name; };
	global $wpdb;
	$query = "SELECT meta_id,post_id,meta_key,meta_value FROM $wpdb->postmeta WHERE post_id = $post->ID ORDER BY meta_id ASC";
	$cf = $wpdb->get_results($query, ARRAY_A);
	$pics = array();
	$size = array();
	$caption = array();
	$shadows = array();
	$centering = array();
	foreach( $cf as $row ){
		if( $row['meta_key'] == "photolist" ){
			array_push( $pics, $row['meta_value'] );
		}
		if( $row['meta_key'] == "size" ){
			array_push( $size, $row['meta_value'] );
		}
		if( $row['meta_key'] == "captions" ){
			array_push( $txt, $row['meta_value'] );
		}
		if( $row['meta_key'] == "shadow" ){
			array_push( $shadows, $row['meta_value'] );
		}
		if( $row['meta_key'] == "centering" ){
			array_push( $centering, $row['meta_value'] );
		}
	}
	$length = count( $pics ); ?>
			<section class="compositeWrap">
				<div class="composite">
				<?php if( get_post_meta($id,"subTitle",true)):?>
				<h1 class="compTitle"><?php echo get_post_meta($id,"title",true); ?></h1>
				<h2 class="subTitle"><?php echo get_post_meta($id,"subTitle",true); ?></h2>
				<?php else: ?>
				<h1 class="compTitle"><?php echo the_title(); ?></h1>
				<?php endif; ?>
				<p class="compTag"><?php echo $catname ?></p>
				<div class="compWidth">
		<?php for( $i = 0; $i < $length; $i ++ ){
			$photos = wp_get_attachment_image_src($pics[$i], 'full');
			$class = strtolower($size[$i]);
			$txtS = str_replace("</br>","<br />",$txt[$i]);
			$txtT = strip_tags($txt[$i]);
			$shadow = strtolower($shadows[$i]);
			$center = strtolower($centering[$i]);
			echo '<img class="lazy '. $class[0] . ' '. $shadow[0] . ' '. $center[0] . '" data-original="'. $photos[0] . '">';
		}?>
<?php endwhile; ?><?php endif; ?>
				</div>
					<div class="clear"></div>
						<?php the_content(); ?>
					
				</section>
			</section>
		<div class="back"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">back</a></div>
		</div><!-- wrapper -->			
					
<?php get_footer(); ?>