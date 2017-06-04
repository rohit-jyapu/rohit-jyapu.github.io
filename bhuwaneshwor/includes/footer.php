<nav class="yellow">
		<div class="center clearfix">
			<?php include ('includes/nav.php') ?>

			<div class="navbox">
				<img src="images/blacklogo.png" alt="blogo image">
			</div>
		</div>
</nav>

	<div class="botbot">
		<div class="center">
			<div class="whitebox clearfix">

			<div>

				<a href="#">
				<img src="images/icon-facebook.png" alt="facebook icon">
				</a>
				
				<div>

					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
				</div>

			</div>

			<div>
				<h4>Website Design<br>
					Development & Contents</h4>
				<a href="#"><img src="images/halftone-design.png" alt="hd logo"></a>
			</div>

			<div>
			<h5>&copy; 2013 Bhuvaneswor Traders.<br>
					All Rights Reserved </h5>
			</div>

			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="slick/slick/slick.js" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".centerr").slick({
        dots: false,
        infinite: true,
        centerMode: false,
        slidesToShow: 4,
        slidesToScroll: 1
      });

    });
  </script>	