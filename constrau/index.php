<?php get_header(); ?>
<?php 
$blog_layout = apply_filters( 'constrau_theme_sidebar','' ); 
$blog_template = apply_filters( 'constrau_blog_template', '' );
?>
<div class="wrap_site <?php echo esc_attr($blog_layout); ?>">
	<div id="main-content" class="main">

		<div class="<?php echo esc_attr($blog_template); ?>">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php 
				switch ($blog_template) {
					case 'grid_v1':
					get_template_part( 'content/blog', 'grid_v1' );
					break;

					case 'grid_v2':
					get_template_part( 'content/blog', 'grid_v2' );
					break;

					case 'classic_v1':
					get_template_part( 'content/blog', 'classic_v1' );
					break;

					case 'classic_v2':
					get_template_part( 'content/blog', 'classic_v2' );
					break;

					default:
					get_template_part( 'content/blog', 'classic_v1' );
					break;
				}?>
			<?php endwhile; ?>
		</div>

		<div class="pagination-wrapper">
			<?php constrau_pagination_theme(); ?>
		</div>

		<?php else : ?>
			<?php get_template_part( 'content/content', 'none' ); ?>
		<?php endif; ?>

	</div> <!-- #main-content -->
	<?php get_sidebar(); ?>
</div> <!-- .wrap_site -->

<?php get_footer(); ?>