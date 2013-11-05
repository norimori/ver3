//Dynamically add menu items

//Document on ready
$(function() {
	var menu = $(".row col-md-6"); //grabs 2 columns in row
	console.log("should be 2: " + menu.length);

	var i; //iterator
	var item; //current menu item
	var itemOptionName; //HTML name of item
	var itemOptionDescription;// HTML description of item
	var pizzaType; //Meat or Vegetarian
	var place; //where to append item
	for (i = 0; i < com.dawgpizza.menu.pizzas.length; i++) {
		item = com.dawgpizza.menu.pizzas[i]; //Current pizza
		if(item.vegetarian) {
			pizzaType = 'vegetarian';
		} else {
			pizzaType = 'meat';
		}
		itemOptionName = $(document.createElement('dt'));
		itemOptionName.html(item.name);
		place = $(".col-md-6").find('.' + pizzaType);
		place.append(itemOptionName);
		itemOptionDescription = $(document.createElement('dd'));
		itemOptionDescription.html(item.description);
		place.append(itemOptionDescription);
		place.append('<br>');

		//Get prices of item
		var prices = ". $" + item.prices[0];
		var j;
		for (j = 1; j < item.prices.length; j++) {
			prices = prices + ", " + item.prices[j];
		}
		place.append($('<span/>', {'class': 'cost'}, {'text': prices}));
	}
});