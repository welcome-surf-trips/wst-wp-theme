
<!--FOOTER SIDEBAR-->
<?php if ( is_active_sidebar('foot_sidebar') ) { ?> 
<div id="footer">
    <div class="widgets"><ul><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widgets') ) : ?><?php endif; ?></ul>
            </div>
    </div>
<?php } ?>

	<!--COPYRIGHT TEXT-->
    <div id="copyright">
            <div class="copytext">
           <?php echo of_get_option('footer_textarea'); ?>
            </div>
        <!--FOOTER MENU-->    
            <div id="footmenu"><?php wp_nav_menu( array( 'container_class' => 'menu-footer', 'theme_location' => 'footer', 'depth' => 0, 'fallback_cb' =>false) ); ?></div>
    </div>
</div><!--Center Wrap END-->
<!--Google Analytics-->
<?php if ( of_get_option('ganlytcs_text') ) { ?>
<script type="text/javascript">
	/* <![CDATA[ */
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo of_get_option('ganlytcs_text'); ?>']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  /* ]]> */
</script>
<?php } ?>
<!--Google Analytics END-->
<?php wp_footer(); ?>
</body>
</html>