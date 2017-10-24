    <?php wp_footer(); ?>
    <section id="footer">
      <p>Bulk Design © 2017</p>
    </section>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/vegas.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/script.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.slides.min.js"></script>
    <script type="text/javascript">
    	//VEGAS
		$(".webdesign").vegas({
		timer:false,
		delay:3000,
		slides: [
		{ src: "<?php bloginfo('template_url');?>/images/webdesign.jpg" },
		{ src: "<?php bloginfo('template_url');?>/images/webdesign2.jpg" },
		],
		overlay: '<?php bloginfo('template_url');?>/js/overlays/01.png'
		});
		$(".designgrafico").vegas({
		timer:false,
		delay:3000,
		slides: [
		{ src: "<?php bloginfo('template_url');?>/images/designgrafico.jpg" },
		{ src: "<?php bloginfo('template_url');?>/images/designgrafico2.jpg" },
		{ src: "<?php bloginfo('template_url');?>/images/designgrafico3.jpg" },
		],
		overlay: '<?php bloginfo('template_url');?>/js/overlays/01.png'
		});
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });
    </script>
  </body>
</html>
