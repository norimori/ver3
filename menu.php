<?php include("header.html"); ?>

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
				<dl>
					<dt>Classic Pepperoni</dt>
					<dd>Pepperoni and Mozzarella on our Spicy Tomato Sauce. <span class="cost">$10/$13/$16</span></dd>
					<dt>The Hawaiian</dt>
					<dd>Canadian Bacon and Pineapple with Mozzarella on a rich Tomato Sauce.  <span class="cost">$12/$14/$17</span></dd>
					<dt>Duck, Duck, Goose</dt>
					<dd>Roasted Duck and Goose with Bacon, Chestnuts on a rich Plum Sauce.  <span class="cost">$15/$17/$19</span></dd>
					<dt>The Bambi</dt>
					<dd>Slow-cooked Venison with Red Cabbage on our famous Black Cherry Sauce.  <span class="cost">$15/$17/$19</span></dd>
					<dt>The Ultimate</dt>
					<dd>Pepperoni, Bacon, Canadian Bacon, Chicken, Duck, Goose, and Ground Beef with Smoked Mozzarella on our Spicy Tomato Sauce. Add Venison or Elk for an extra $2!  <span class="cost">$15/$19/$23</span></dd>
				</dl>
			</div>
			<div class="col-md-6">
				<h4>Vegetarian Pies</h4>
				<dl>
					<dt>Margherita</dt>
					<dd>Mozzarella, Basil, Salt on an Olive Oil Base.  <span class="cost">$10/$13/$16</span></dd>
					<dt>Veggie Madness</dt>
					<dd>Mushroom, Black Olive, Onions, Roasted Garlic, Squash and Roasted Eggplant on our Spicy Tomato Sauce.  <span class="cost">$11/$14/$17</span></dd>
					<dt>Forest Floor</dt>
					<dd>Three kinds of mushrooms with Mozzarella on a herb Tomato Sauce.  <span class="cost">$11/$14/$17</span></dd>
					<dt>Mr. Green</dt>
					<dd>Roasted Chicken with Romano on a Basil Pesto sauce. <span class="cost">$13/$16/$19</span></dd>
					<dt>Purple Monster</dt>
					<dd>Roasted Eggplant and Cabbage stir fried in sesame oil on a rich Plum Sauce.  <span class="cost">$11/$14/$17</span></dd>
				</dl>
			</div>
		</div>
		<hr>
		<div class="center-text">
			<h3 class="highlights">Drinks</h3>
			<ul id="drinks">
				<li>Coke, Diet Coke, Sprite, Root Beer, or Irn Bru by the can <span class="cost">($4)</span></li>
				<li>Rainier Beer by the can <span class="cost">($4)</span></li>
				<li>House Red Wine by the glass or bottle <span class="cost">($10/$40)</span></li>
			</ul>
			<hr>
			<h3 class="highlights">Dessert</h3>
			<ul>
				<li>Chocolate Gelato <span class="cost">($8)</span></li>
				<li>Lemon Sorbet <span class="cost">($7)</span></li>
				<li>Ricotta Cheese Cake <span class="cost">($10)</span</li>
			</ul>
		</div>
	</div>
</main>

<?php include("footer.html"); ?>