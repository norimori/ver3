<?php include("header.html"); ?>

		<!-- Slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="img/pizza1.jpg" alt="Pizza Photo">
				<div class="carousel-caption">
					<a href="index.php"><h1>Our Delicious Pizzas</h1></a>
				</div>
			</div>
			<div class="item">
				<img src="img/pizza-order.jpg" alt="Pizza Order Photo">
				<div class="carousel-caption">
					<a href="menu.php"><h1>Order Up!</h1></a>
				</div>
			</div>
			<div class="item">
				<img src="img/pizza-oven.jpg" alt="Pizza Oven Photo">
				<div class="carousel-caption">
					<a href="asut.php"><h1>Crispy and Juicy</h1></a>
				</div>
			</div>
		</div> <!-- Slides -->
	    <!-- Left-right controls -->
	    <a class="left carousel-control" href="#pawnee-carousel" data-slide="prev">
	        <span class="icon-prev"></span>
	    </a>
	    <a class="right carousel-control" href="#pawnee-carousel" data-slide="next">
	        <span class="icon-next"></span>
	    </a>
	</div> <!-- Close carousel -->
	<div id="content-text" class="center-text">
		<h1>We are...<img class="we-are" src="img/logo.png" alt="logo"></h1>
		<p>Awesome wood-fired pizza with fresh ingredients baked to order. Come in and eat, or call us for delivery!</p>
		<hr>
		<div class="highlights">
			Hours: 10:00AM - 11:00PM Monday through Saturday<br>
			Call for Delivery: (206) 555-1212<br>
			Address:<br>
			<address class="indent">
				<a href="https://maps.google.com/?q=4306%20University%20Way%20NE,%20Seattle,%20WA%2098105">
				4306 University Way NE <br>
				Seattle, WA 98105<br>
				</a>
			</address>
			Email: <a href="mailto:dawgpizza@gmail.com">dawgpizza@gmail.com</a><br>
			Follow us on Twitter: <a href="https://twitter.com/DawgPizzaSea" class="twitter-follow-button" data-show-count="false">Follow @DawgPizzaSea</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>
		<hr>
		<div id="pizzavid">
			<p>A peak into how we make our pizzas:</p>
			<iframe id="video" width="420" height="315" src="//www.youtube.com/embed/HWL__9yDu8I" allowfullscreen></iframe>
		</div>
		<div id="pizzavid-link">
			<a href="http://www.youtube.com/watch?v=HWL__9yDu8I" target="_blank"><p>VIDEO: Click here for a sneak peak into how we make our pizzas!</p></a>
		</div>
	</div>
</main>

<!-- auto-play the carousel only for Home -->
<script>
    $('.carousel').carousel();
</script>

<?php include("footer.html"); ?>