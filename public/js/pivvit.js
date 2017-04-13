$(document).ready(function(){

//declare total amount var
var total=0;

$('.cj_purchase').each(function(){
	var quantity=$(this).find('.cj_quantity').text();
	var price=$(this).find('.cj_price').text();

	//convert to number
	quantity=parseInt(quantity);
	price=parseInt(price);

	//calculate subtotal for each purchase
	var subtotal=quantity*price;

	var total=total+subtotal;

	//assign the subtotal to this purchase
	$(this).find('.cj_purchase').text(subtotal);

});

//assign the total amount
$('.cj_total').text(total);


}); //END JQ