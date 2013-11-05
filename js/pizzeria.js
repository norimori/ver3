//Dynamically add menu items

//Document on ready
$(function() {
	var menu = $(".row col-md-6"); //grabs 2 columns in row
	console.log("should be 2" + menu.length);
	var i; //iterator
	var item; //current menu item
	for (i = 0; i < com.dawgpizza.menu.pizzas.length; i++) {
		console.log(i);
	}
});