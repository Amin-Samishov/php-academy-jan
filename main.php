<?php 
/*
Recipe for omelet with zucchini and shrimp
Eggs - 3 pcs
Milk - 150ml
Zucchini - 1 pcs
Shrimp - 100g
oil - 50ml
Salt - a couple
*/

function cookAnOmlet
(int $eggs,
 int $milk,
 int $zucchini,
 int $shrimp, 
 int $oil, 
 int $salt, 
 string $wishes)
{
    echo
    "1 fry the $shrimp until almost cooked, 
    <br> 2 add $zucchini and fry for a few minutes,
    <br> 3 mix the $eggs and $milk,
    <br> 4 $salt and add to the $shrimp,
    <br> 5 wait 5 minutes and say $wishes";
    /*
pour the oil into the pan, wash the shrimp and fry until tender, stirring, cut the zucchini and add to the shrimp, 
fry for 2-3 minutes, mix the eggs and milk, salt and pour the shrimp and wait 5 minutes. Bon Appetit    */
}
cookAnOmlet(3, 150,  1, 100,  50,  5, 'Bon Appetit');
?>