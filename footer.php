			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container-fluid" id="contact">
					<div class="container">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-12 lekton fs-16">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Area 1', 'html5blank') )?>
							</div>
							<div class="col-xl-4 col-lg-4 col-12">
								<div class="d-flex justify-content-around align-items-center">
									<a href="https://www.facebook.com/Nicole-Gouaud-Psychopraticienne-Sophrologue-1490979317619510/" target="blank"><i class="fa fa-facebook-official text-darkgrey fs-20" aria-hidden="true"></i></a>
									<a href="https://www.instagram.com/explore/locations/1490979317619510/nicole-gouaud-psychopraticienne-sophrologue/" target="blank"><i class="fa fa-instagram text-darkgrey fs-20" aria-hidden="true"></i></a>
									<a href="https://www.google.fr/maps/place/Gouaud+Nicole/@44.9678789,-0.3093084,15z/data=!4m2!3m1!1s0x0:0x40bfe57c786c832b?ved=2ahUKEwjfvIz368feAhUtxIUKHRmqCmIQ_BIwD3oECAYQCA" target="_blank"><i class="fa fa-google-plus text-darkgrey fs-16" aria-hidden="true"></i></a>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-12 lekton fs-16 text-right">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Area 2', 'html5blank') )?>
							</div>
						</div>
						<div class="d-flex copyright text-darkgrey justify-content-center mt-30">
							<p class="text-darkgrey text-center fs-12 uppercase ls-3">
								<?php echo date('Y'); ?> | <?php bloginfo('name'); ?>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-109419102-1', 'auto');
		  ga('send', 'pageview');
		</script>
	</body>
</html>
