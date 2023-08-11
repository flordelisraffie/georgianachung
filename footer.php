<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>
	<span class="et_pb_scroll_top et-pb-icon"></span>
<?php endif;
if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>
			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>
		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>
				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->
			<?php endif; ?>
				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
				?>
						<p id="footer-info"><a href="http://readersmagnet.com/" target="_blank" class="rm-favicon"> <span class="copy-right">©</span> <?php echo date('Y');?></a> by <?php bloginfo(); ?>. All Rights Reserved. Powered by <a href="http://readersmagnet.com/" target="_blank">ReadersMagnet</a></p>
				
						<div class="custom-menu-social-links">
						<ul class="et-menu-social-icons">
							<li class="et-social-facebook">
								<a href="#" target="_blank"><i class="icon-facebook"></i></a>
							</li>
							<li class="et-social-pinterest">
								<a href="#" target="_blank"><i class="icon-pinterest"></i></a>
							</li>
							<li class="et-social-tumblr">
								<a href="#" target="_blank"><i class="icon-tumblr"></i></a>
							</li>
						</ul>
					</div>

					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->
		<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>
		
		<!-- scroll to top -->
		<p id="back-top">
			<a href="#top"><span><i class="icon-up"></i></span></a>
		</p>

	</div> <!-- #page-container -->

<script type="text/javascript">
(function($) {
    var $animation_elements = $('.et-waypoint'),
        $window = $(window);
  
    function check_if_in_view() {
        var window_height = $window.height(),
            window_top_position = $window.scrollTop(),
            window_bottom_position = (window_top_position + window_height);
  
        $animation_elements.each(function() {
            var $element = $(this),
                element_height = $element.outerHeight(),
                element_top_position = $element.offset().top,
                element_bottom_position = (element_top_position + element_height);
  
            //check to see if this element is within viewport
            if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                $element.addClass('et-animated');
            } else {
                $element.removeClass('et-animated');
            }
        });
    }
  
    $window.on('scroll resize', check_if_in_view);
})(jQuery);
</script>
	
<!--
	!!!READ ME BEFORE ADDING JAVASCRIPT!!!
	NOTE: 
	 - Add all other javascript at Divi-Child/js/divi-child-script.js
	 - Always put comments on you javascript, the following info should be present (description, added by, date)
-->

	<?php wp_footer(); ?>
</body>
</html>
