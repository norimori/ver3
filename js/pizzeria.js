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
		console.log(place);
		place.append();
		itemOptionDescription = $(document.createElement('dd'));
		itemOptionDescription.html(item.description);
		place.append();
	}
});