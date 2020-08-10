<?php
	//do_action('flatsome_before_blog');
?>

<?php if(!is_single() && get_theme_mod('blog_featured', '') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>
<div class="row row-large <?php if(get_theme_mod('blog_layout_divider', 1)) echo 'row-divided ';?>">
	
	<div class="post-sidebar large-3 col">
		<?php get_sidebar(); ?>
	</div><!-- .post-sidebar -->

	<div class="large-9 col medium-col-first">
	<div class="breadcrumbs">
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('
	<p id="breadcrumbs">','</p>');
	}
	?>
	</div>
	<?php if(!is_single() && get_theme_mod('blog_featured', '') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>
	<?php
		if(is_single()){
			get_template_part( 'template-parts/posts/single');
			comments_template();
		} elseif(get_theme_mod('blog_style_archive', '') && (is_archive() || is_search())){
			?>
			<h1 class="entry-title"><?php single_term_title(); ?> </h1>
			<?php
			get_template_part( 'template-parts/posts/archive', get_theme_mod('blog_style_archive', '') );
		} else{
			
			get_template_part( 'template-parts/posts/archive', get_theme_mod('blog_style', 'normal') );
		}	?>
	</div> <!-- .large-9 -->

</div><!-- .row -->

<?php
	do_action('flatsome_after_blog');
?>
