<?php  
	//The VAT rate percentage.
$vat = 15;

//The price, excluding VAT.
$priceExcludingVat = 300;

//Calculate how much VAT needs to be paid.
$vatToPay = ($priceExcludingVat / 100) * $vat;

echo"total Vat of $priceExcludingVat is : ".$vatToPay . "\n";

//The total price, including VAT.
$totalPrice = $priceExcludingVat + $vatToPay;
echo"<br />"."Total Price with Vat : ";
echo number_format($totalPrice, 2);

 
  ?>  