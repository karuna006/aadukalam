$('.location_search').change(function(){
	window.location.href ="products.php?location="+this.value;
	console.log("1");
});
$('#search').click(function(){
	$('#form').submit(function (e) {
		e.preventDefault();
		location_search = $('#agileinfo_search').value();
		window.location.href ="products.php?location="+location_search;
		console.log("2");
	});

});
$('.product_search').click(function(){
	console.log("i am in");
	// console.log($(this).attr('value'));
	window.location.href = "products.php?location="+localStorage.getItem("location")+"&category="+$(this).attr('value');
	console.log("3");
});