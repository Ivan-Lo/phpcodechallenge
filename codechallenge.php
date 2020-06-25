<?php
//coded by Ivan Lo

//beginning of function with string parameters

function myfunction($orderID,$orderNumber,$salesTax,$amount,$terminal,$currency,$type,$avsStreet,$avsZip,$customerCode,$cardID,$cardHolderName,$cardNumber,$cardExpiry,$cardCVV) {

//masking input for cardnumber,cardexpiry and cardcvv
    $cardNumber=str_repeat("*", strlen($cardNumber));
    $cardExpiry=str_repeat("*", strlen($cardExpiry));
    $cardCVV=str_repeat("*", strlen($cardCVV));

//display data with masking
  echo "[orderID] => $orderID/ [orderNumber] => $orderNumber/ [salesTax] => $salesTax/ [amount] => $amount/ [terminal] => $terminal/ [currency] => $currency
  / [type] => $type/ [avsStreet] => $avsStreet/ [avsZip] => $avsZip/ [customerCode] => $customerCode/ [cardID] => $cardID/ [cardHolderName] => $cardHolderName/ [cardNumber] => $cardNumber
  / [cardExpiry] => $cardExpiry/ [cardCVV] => $cardCVV";
}

//start function
myfunction(212939129,"INV10001",1.00,21.00,5,1,"purchase","123 Road","A1A 2B2","CST1001",18951828182,"John Smith",5454545454545454,1025,100)



?>