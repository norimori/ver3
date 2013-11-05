//Dynamically add menu items

//Document on ready
$(function() {
	var menu = $(".row col-md-6"); //grabs 2 columns in row
	console.log("should be 2: " + menu.length);

	var i; //iterator
	var item; //current menu item
	for (i = 0; i < com.dawgpizza.menu.pizzas.length; i++) {
		var pizzaType; //Meat or Vegetarian
		item = com.dawgpizza.menu.pizzas[i]; //Current pizza
		if(item.vegetarian) {
			pizzaType = 'vegetarian';
		} else {
			pizzaType = 'meat';
		}
		console.log(pizzaType);
	}
});