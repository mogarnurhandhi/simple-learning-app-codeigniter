<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						<br>
						Copyrights &copy; 2023 All Rights Reserved by UNIPMA Madiun.<br>
						
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a target="_blank" href="https://www.facebook.com/unipma/" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a target="_blank" href="https://twitter.com/unipma" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a target="_blank" href="//www.youtube.com/@unipma" class="social-icon si-small si-borderless si-youtube">
								<i class="icon-youtube-play"></i>
								<i class="icon-youtube-play"></i>
							</a>

							
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> rektorat@unipma.ac.id <span class="middot">&middot;</span> <i class="icon-headphones"></i> +62 351 456292  <span class="middot"></span>
					</div>

			</div><!-- #copyrights end -->

			</div>
			
		</footer> <!-- #footer end -->


		

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>

	<script type="text/javascript">
		jQuery(document).ready(function($){
			$( '#vertical-nav nav ul li:has(ul)' ).addClass('sub-menu');
			$( '#vertical-nav nav ul li:has(ul) > a' ).append( ' <i class="icon-angle-down"></i>' );

			$( '#vertical-nav nav ul li:has(ul) > a' ).click( function(e){
				var element = $(this);
				$( '#vertical-nav nav ul li' ).not(element.parents()).removeClass('active');
				element.parent().children('ul').slideToggle( function(){
					$(this).find('ul').hide();
					$(this).find('li.active').removeClass('active');
				});
				$( '#vertical-nav nav ul li > ul' ).not(element.parent().children('ul')).not(element.parents('ul')).slideUp();
				element.parent('li:has(ul)').toggleClass('active');
				e.preventDefault();
			});
		});
		

	</script>

</body>
</html>