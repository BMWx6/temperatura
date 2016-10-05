<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
?>
<?php templatemela_content_after(); ?>
</div>
<!-- .main-content-inner -->
</div>
<!-- .main_inner -->
</div>
<!-- #main -->
<?php templatemela_footer_before(); ?>
<?php if ( is_page_template('page-templates/home.php')):?>
<div class="brand_logo">
	<?php templatemela_get_widget('brandlogo');  ?>	
</div>
<?php endif; ?>
<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="footer-top">  <div class="footer-top-inner"><?php dynamic_sidebar('footer-top-area'); ?></div></div>
  <div class="footer_inner">
    <?php templatemela_footer_inside(); ?>
    <?php get_sidebar('footer'); ?>
	<!-- .footer-bottom -->
  </div>
    <div class="footer-bottom">
	<div class="footer-bottom-container">
		<?php if (is_active_sidebar('fifth-footer-widget-area')) : ?>
	   <div class="footer_left">
		   <div id="fifth" class="fifth-widget footer-widget animated" data-animated="fadeInRight">
			<?php dynamic_sidebar( 'fifth-footer-widget-area' ); ?>
		   </div>
	   </div>
	   <?php endif; ?>
	   <div class="footer_center">
			  <div class="footer-menu-links">
				<?php
							$tm_footer_menu=array(
							'menu' => 'TM Footer Navigation',
							'depth'=> 1,
							'echo' => false,
							'menu_class'      => 'footer-menu', 
							'container'       => '', 
							'container_class' => '', 
							'theme_location' => 'footer-menu'
							);
							echo wp_nav_menu($tm_footer_menu);				    
							?>
			  </div>
			  <!-- #footer-menu-links -->
			  <div class="site-info">  <?php __( 'Copyright', 'templatemela' ); ?> &copy; <?php echo esc_attr(date('Y')); ?> <a href="<?php echo esc_url(get_option('tmoption_footer_link')); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_attr(get_option('tmoption_footer_slog'));?>
				</a>
				<?php do_action( 'templatemela_credits' ); ?>
			  </div>
	    </div>
		<?php if (is_active_sidebar('sixth-footer-widget-area')) : ?>
		<div class="footer_right">	
	  		<?php dynamic_sidebar('sixth-footer-widget-area'); ?>
	  	</div>
		<?php endif; ?>

	 
	  </div>
    </div>
  <!--. Footer inner -->
</footer>
<!-- #colophon -->
<?php templatemela_footer_after(); ?>
</div>
<!-- #page -->
<?php tm_go_top(); ?>
<?php templatemela_get_widget('before-end-body-widget'); ?>
<?php wp_footer(); ?>
</body></html>