<!DOCTYPE HTML>
<html>  
<body>
<form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
Product1: <input type="checkbox" name="product1"><br>
Product2: <input type="checkbox" name="product2"><br>
<input type="submit" name="Submit"><br>
</form>
</body>
</html>

<?php
include 'menu.inc';
function getBasePrice($product) {
    $basePrice = $_GET[$product];
    return [$product, $basePrice];
}

function calculateFinalPrice($product) {
    $basePrice = getBasePrice($product)[1];
    $discountPercentage = 0.1;
    $vatPercentage = 0.15;
    $discountedAmount = $basePrice * $discountPercentage;
    $discountedBasePrice = $basePrice - $discountedAmount;
    $vatAmountCharged = $basePrice * $vatPercentage;
    $finalBasePrice = $basePrice + $vatAmountCharged - $discountedAmount;
    return [$discountedAmount, $discountedBasePrice, $vatAmountCharged, $finalBasePrice];
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // call the product selected name and base price for `product1` and `product2`.
    $productSelected1 = getBasePrice("product1")[0];
    $basePrice1 = getBasePrice("product1")[1];
    $productSelected2 = getBasePrice("product2")[0];
    $basePrice2 = getBasePrice("product2")[1];
    // call the calculated `discounted amount`, `base price after discount`, `vat amount` and `the final price the user will be paying`
    $discountedAmount1 = calculateFinalPrice("product1")[0];
    $discountedBasePrice1 = calculateFinalPrice("product1")[1];
    $vatAmountCharged1 = calculateFinalPrice("product1")[2];
    $vatAmountCharged1 = calculateFinalPrice("product1")[3];
    $discountedAmount2 = calculateFinalPrice("product1")[0];
    $discountedBasePrice2 = calculateFinalPrice("product1")[1];
    $vatAmountCharged2 = calculateFinalPrice("product1")[2];
    $vatAmountCharged2 = calculateFinalPrice("product1")[3];
}

if ($productSelected1) {
    echo "The product {$productSelected1} has base price {$basePrice1},
    the discounted amount is {$discountedAmount1}
    the discounted base price is then {$discountedBasePrice1},
    the amount of VAT charged is {$vatAmountCharged1} and so
    the final price is {$finalBasePrice1}";
} else {
    echo "The product {$productSelected2} has base price {$basePrice2},
    the discounted amount is {$discountedAmount2}
    the discounted base price is then {$discountedBasePrice2},
    the amount of VAT charged is {$vatAmountCharged2} and so
    the final price is {$finalBasePrice2}";
}

?>
<iframe src="task2.txt" height="400" width="1200">
    Your browser does not support iframes.
</iframe>
