$(document).ready(function(){

//declare total amount var
var total=444;

$('.cj_purchase').each(function(){
	var quantity=$(this).find('.cj_quantity').text();
	var price=$(this).find('.cj_price').text();
	//convert to number
	quantity=Number(quantity);
	price=Number(price);


	//calculate subtotal for each purchase
	var subtotal=quantity*price;

	//assign the subtotal to this purchase
	$(this).find('.cj_subtotal').text(subtotal);



	total=total+subtotal;



});

//assign the total amount
total=total.toFixed(2);
$('.cj_total').text(total);


}); //END JQ