<?php include("header.html"); ?>
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#pawnee-carousel" data-slide-to="0"></li>
			<li data-target="#pawnee-carousel" data-slide-to="1" class="active"></li>
			<li data-target="#pawnee-carousel" data-slide-to="2"></li>
		</ol>
		<!-- Slides -->
		<div class="carousel-inner">
			<div class="item">
				<img src="img/pizza1.jpg" alt="Pizza Photo">
				<div class="carousel-caption">
					<a href="index.php"><h1>Our Delicious Pizzas</h1></a>
				</div>
			</div>
			<div class="item active">
				<img src="img/pizza-order.jpg" alt="Pizza Order Photo">
				<div class="carousel-caption">
					<a href="menu.php"><h1>Order Up!</h1></a>
				</div>
			</div>
			<div class="item">
				<img src="img/pizza-oven.jpg" alt="Pizza Oven Photo">
				<div class="carousel-caption">
					<a href="about.php"><h1>Crispy and Juicy</h1></a>
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
	</div> <!-- Carousel -->
	<div id="content-text">
		<h2>- Menu -</h2>
		<div class="menu-cat">
			<h3 class="highlights">Pizzas</h3>
			<p class="inline">All our pizzas are made with hand-thrown thin crust, baked in real wood ovens. Choose from one of these sizes:</p>
			<ul class="cost" id="size">
				<li>Small (12")</li>
				<li>Medium (14")</li>
				<li>Large (17")</li>
			</ul>
			<p id="customize">All pizzas can be customized--add a few ingredients, or take a few off--for an extra $2.</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h4>Meat Pies</h4>
				<dl class="meat">
				</dl>
			</div>
			<div class="col-md-6">
				<h4>Vegetarian Pies</h4>
				<dl class="vegetarian">
				</dl>
			</div>
		</div>
		<hr>
		<div class="center-text">
			<h3 class="highlights">Drinks</h3>
			<ul class="drinks">
				<!--<li>Coke, Diet Coke, Sprite, Root Beer, or Irn Bru by the can <span class="cost">($4)</span></li>-->
			</ul>
			<hr>
			<h3 class="highlights">Dessert</h3>
			<ul class="desserts">
				<!--<li>Chocolate Gelato <span class="cost">($8)</span></li>-->
			</ul>
		</div>
	</div>
</main>

<?php include("footer.html"); ?>