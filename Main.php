<?php
// Your code here!
/* 

Burgerking sells three items: 
VegBurger which needs 2 breads & 1 veg pattice
NonVegBurger which needs 2 breads & 1 non-veg pattice
TikkiBurger which needs 2 breads & 1 tikki pattice

Given bread quantity, veg pattice quantity, non-veg pattice quantity, tikki pattice quantity & price of all 3 items

Print the total maximum possible profit by making all possible items based on bread availability 

Also, test for all inputs, we would change all the values while testing, the quantity values as well as price

And program has to be optimal with respect to time & space complexity

*/

$breads = 15;
$vegPattice = 3;
$nonVegPattice = 2;
$TikkiPattice = 1;
$priceVegBurger = 100;
$priceNonVegBurger = 125;
$priceTikkiBurger = 112;

$maxProfit = 0;


if($breads>1){
$maxNonVegBurgerCount = min($breads / 2, $nonVegPattice);
$maxProfit += $maxNonVegBurgerCount * $priceNonVegBurger;
$breads -= $maxNonVegBurgerCount * 2;
$nonVegPattice -= $maxNonVegBurgerCount;
}


if($breads>1){
$maxTikkiBurgerCount = min($breads / 2, $TikkiPattice);
$maxProfit += $maxTikkiBurgerCount * $priceTikkiBurger;
$breads -= $maxTikkiBurgerCount * 2;
$TikkiPattice -= $maxTikkiBurgerCount;
}


if($breads>1){
   $maxVegBurgerCount = min($breads / 2, $vegPattice);
$maxProfit += $maxVegBurgerCount * $priceVegBurger;
$breads -= $maxVegBurgerCount * 2;
$vegPattice -= $maxVegBurgerCount; 
}


print("The total maximum possible profit: " . $maxProfit);

?>


