<?Php
session_start();
?>
<!doctype html public "-//w3c//dtd html 3.2//en">
<html>

<head>
<title>Session Cart removal on selection</title>
</head>

<body>
<?Php

while (list ($key, $val) = each ($_SESSION['cart'])) { 
echo "$key -> $val <br>"; 
unset($_SESSION['cart'][$key]);
}

//unset($_SESSION['cart']);
echo "<br><br> All items removed from Cart .. <br><br>";
echo "Number of Items in the cart = ".sizeof($_SESSION['cart'])." <br>";
require "menu.php";
?>
</body>
</html>
