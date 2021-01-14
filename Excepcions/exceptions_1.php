<?php
/*function discountCalculation_without($discount,$percentage,$price){
  //calculate the final amount after applying the discount and return it
  //considering $discount as a %
if($percentage !=0 ){
  $discountCalculation=($price * $discount)/$percentage;
  return $price - $discountCalculation;
  }
  return "Value has to be greater than 0";
  echo discountCalculation_without(10,0,50);
}*/
// using exceptions


function discountCalculation($discount,$percentage,$price)
{
  //calculate the final amount after applying the discount and return it
  //considering $discount as a %
if($percentage ==0 )
  throw new Exception("El precentatge no pot ser 0");
  else
  return ($price * $discount)/$percentage;
}

  try {
    $discount =10;
    $price=50;
    $percentage=1;
    echo discountCalculation($discount,$percentage,$price);
  }
    catch (Exception $e) {
      echo "S'ha capturat l'excepcio: " . $e->getMessage() . "<br>";
    }
?>
