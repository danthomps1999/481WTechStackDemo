<!DOCTYPE html>
<html lang="en-US">
<!-- Created by Todd Shmayda on 3/23/2021 -->
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../myStyles/01FirstCSSdocument.css">
<title>Coverting Feet to Meters in PHP</title>
</head>
<body>
<div class="topnav">
<h2>Converting Feet to Meters By: Todd</h2>
<?php
//variables
$feet = rand(1,1000)/10;
$meters = $feet/3.2808;
//code
echo "This program generates 5 random temperatures in Fehrenheit and computes them into Celsius using a for loop.<br><br>";
echo "Random number in feet: " . number_format($feet, 1) . "<br>";
echo "<h2>Result: " . number_format($feet, 1) . " feet is " . number_format($meters, 4) . " meters</h2>";
?>
</div>
</body>
</html>