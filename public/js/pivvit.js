$(document).ready(function(){

//calculate total amount and subamount in baske.blade
//declare total amount var
var total=0;

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


//calculate Total price in home.blade , for the order
$('#item').on('change',function(){
	var price=$(this).find('option:selected').attr('data-price');
	var quantity=$('#quantity').val();
	price=Number(price);
	quantity=Number(quantity);

	var total=price*quantity;
	$('#amount').val(total);
});

//calculate tpotal also when quantity changes
$('#quantity').on('change',function(){
	var price=$('#item').find('option:selected').attr('data-price');
	var quantity=$(this).val();
	price=Number(price);
	quantity=Number(quantity);

	var total=price*quantity;
	$('#amount').val(total);
});



}); //END JQ