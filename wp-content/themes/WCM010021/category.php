<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
get_header(); ?>
<header>
		<div class="page-title">
			<div class="page-title-inner">
				<h1 class="entry-title-main"><?php printf( __( 'Category Archives: %s', 'templatemela' ), single_cat_title( '', false ) ); ?></h1>
				<?php templatemela_breadcrumbs(); ?>
			</div>
		</div>
      
		<?php
		// Show an optional term description.
		$term_description = term_description();
		if ( ! empty( $term_description ) ) :
			printf( '<div class="taxonomy-description">%s</div>', $term_description );
		endif;
		?>
</header>
<div id="main-content" class="main-content blog-page blog-list <?php echo esc_attr(tm_sidebar_position()); ?>">
<div class="main-content-inner">
<section id="primary" class="content-area">
  <div id="content" class="site-content" role="main">
    <?php if ( have_posts() ) : ?>
    
    <!-- .archive-header -->
    <?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
					endwhile;
					// Previous/next page navigation.
					templatemela_paging_nav();
				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );
				endif;
			?>
  </div>
  <!-- #content -->
</section>
<!-- #primary -->


<?php
get_sidebar( 'content' );
get_sidebar();?>
</div>
</div>
<?php 
get_footer(); ?>
