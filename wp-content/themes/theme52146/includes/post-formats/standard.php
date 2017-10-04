<?php
	if(has_post_thumbnail()) {
		$post_format = get_post_format();
		$post_image_size = (!is_singular()) ? of_get_option('post_image_size') : of_get_option('single_image_size');
		$blog_layout_type = of_get_option('blog_sidebar_pos');
		$thumb        = get_post_thumbnail_id(); //get img ID
		$img_url      = wp_get_attachment_url($thumb, 'full'); //get img URL
		$img_width    = $blog_layout_type != 'masonry' ? 900 : 450 ; //set width large img
		$img_height   = $blog_layout_type != 'masonry' ? 444 : 222 ; //set height large img
		$figure_class = "large";
		$img_attr = (of_get_option('load_image') == 'false' || of_get_option('load_image')=="")?'':'src="//" data-src="';
		$module_box_atter = $post_format=='image' ? 'rel="prettyPhoto" ' : '' ;
		$post_href = $post_format=='image'? $img_url : get_permalink();
		$post_image_before = (!is_singular() || $post_format=='image') ? '<a '.$module_box_atter.'href="'.$post_href.'" title="'.get_the_title().'" >' : '';
		$post_image_after = (!is_singular() || $post_format=='image') ? '</a>' : '';

		if($post_image_size=='' || $post_image_size=='normal' && $blog_layout_type != 'masonry'){
			$imgdata      = explode(' ', get_the_post_thumbnail());
			$img_width    = intval(substr($imgdata[1], stripos($imgdata[1], '"')+1, strrpos($imgdata[1], '"')-1));
			$img_height   = intval(substr($imgdata[2], stripos($imgdata[2], '"')+1, strrpos($imgdata[2], '"')-1));
			$figure_class = "";
		}
		
		$image = $img_attr.aq_resize($img_url, $img_width, $img_height, true); //resize & crop img
	};
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post__holder'); ?>>
	
	<?php if(!is_singular()) : ?>
		<header class="post-header">
			<?php if(is_sticky()) : ?>
				<h5 class="post-label"><?php echo theme_locals("featured");?></h5>
			<?php endif; ?>
			<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		</header>
		<?php echo '<figure class="featured-thumbnail thumbnail '.$figure_class.'" >'.$post_image_before.'<img src='.$image.' alt="'.get_the_title().'" >'.$post_image_after.'</figure>'; ?>
	<?php endif; ?>

	<?php if(is_singular() && get_post_type() == 'post') : ?>
		<div class="wrapper-left">
			<header class="post-header" style="background-image: url('<?php echo $image ?>')">
				<div class="desc-wrap">
					<div class="row">
						<div class="span5">
							<?php get_template_part('includes/post-formats/post-meta'); ?>

							<div class="title">
								<?php if(is_sticky()) : ?>
									<h5 class="post-label"><?php echo theme_locals("featured");?></h5>
								<?php endif; ?>
								<h2 class="post-title"><?php the_title(); ?></h2>
							</div>
							
						</div>
					</div>
				</div>
				<div class="posts">
					<div class="row">
						<div class="span5">
							<div class="left">
								<a href="#" class="show-posts">More articles</a>
							</div>
							<div class="right">
								<?php previous_post_link('%link'); ?>
								<?php next_post_link('%link'); ?>
							</div>
							<div class="clear"></div>
						</div>
					</div>	
				</div>	
			</header>	
		</div>
	<?php endif; ?>

	<?php if(is_singular() && get_post_type() !== 'post') : ?>
		<header class="post-header">
			<h2 class="post-title"><?php the_title(); ?></h2>
		</header>
		<?php echo '<figure class="featured-thumbnail thumbnail '.$figure_class.'" ><img src='.$image.' alt="'.get_the_title().'" ></figure>'; ?>
	<?php endif; ?>

	<?php if(!is_singular()) : ?>
	<!-- Post Content -->
	<div class="post_content">
		<?php
			if (of_get_option('post_excerpt')=="true" || of_get_option('post_excerpt')=='') { ?>
				<div class="excerpt">
				<?php

				if (has_excerpt()) {
					the_excerpt();
				} else {
					if (!is_search()) {
						$content = get_the_content();
						echo wp_trim_words( $content, 55 );
					} else {
						$excerpt = get_the_excerpt();
						echo wp_trim_words( $excerpt, 55 );
					}
				} ?>
			</div>
		<?php }
			$button_text = of_get_option('blog_button_text') ? apply_filters( 'cherry_text_translate', of_get_option('blog_button_text'), 'blog_button_text' ) : theme_locals("read_more") ;
		?>
		<a href="<?php the_permalink() ?>" class="btn btn-primary"><?php echo $button_text; ?></a>
		<div class="clear"></div>
	</div>

	<?php else :?>
	<!-- Post Content -->
	<div class="post_content">
		<?php the_content(''); ?>
		<div class="clear"></div>
	</div>
	<!-- //Post Content -->
	<?php endif; ?>

</article>