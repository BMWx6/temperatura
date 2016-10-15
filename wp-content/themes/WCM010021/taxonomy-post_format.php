<?php
/**
 * The template for displaying Post Format pages
 *
 * Used to display archive-type pages for posts with a post format.
 * If you'd like to further customize these Post Format views, you may create a
 * new template file for each specific one.
 *
 * @todo http://core.trac.wordpress.org/ticket/23257: Add plural versions of Post Format strings
 * and remove plurals below.
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
				<h1 class="entry-title-main">
					<?php
						if ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'templatemela' );
						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'templatemela' );
						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'templatemela' );
						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audio', 'templatemela' );
						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'templatemela' );
						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'templatemela' );
						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'templatemela' );
						else :
							_e( 'Archives', 'templatemela' );
						endif;
					?>
				</h1>
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