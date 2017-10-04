<?php get_header(); ?>
<?php cherry_setPostViews(get_the_ID()); ?>
<div class="blog-posts">
	<div class="top-header">
		<div class="left">
			<?php echo __('All articles:', CURRENT_THEME); ?>
		</div>
		<div class="right">
			<a href="#" class="close-posts"><?php echo __('Hide', CURRENT_THEME); ?></a>
		</div>
		<div class="clear"></div>
	</div>

	<ul class="blog-posts-list clearfix">
		<?php $i = 1; ?>
		<?php $custom_query = new WP_Query( array ('posts_per_page' => '4', 'post__not_in' => array($post->ID))  );
		while($custom_query->have_posts()) : $custom_query->the_post(); ?>

			<?php $img_url = wp_get_attachment_url($thumb, 'set_post_thumbnail_size'); //get img URL ?>
			<?php echo $img_url; ?>
			<li class="<?php echo 'item-'.$i; ?>">
				<?php if ( has_post_thumbnail() ) { 
					the_post_thumbnail( array(262, 175) );  
				} ?>
				<div class="desc">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<time><?php the_time('d F') ?></time>
				</div>
			</li>

			<?php $i++; ?>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); // reset the query ?>
	</ul>
</div>
<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="single.php" data-motopress-wrapper-type="content">
				<?php if (of_get_option('title_display_id') == 'yes') { ?>
					<div class="row">
						<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
							<?php get_template_part("static/static-title"); ?>
						</div>
					</div>
				<?php } ?>
				<div class="row">
					<div class="span12" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-single.php">
						<?php get_template_part("loop/loop-single"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>