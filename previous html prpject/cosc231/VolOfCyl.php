<!DOCTYPE html>
<html lang="en-US">
<!-- Created by Todd Shmayda on 3/23/2021 -->
<html>
<head>
<title>Computing the Volume of a Cylinder in PHP</title>
<link rel="stylesheet" type="text/css" href="../myStyles/01FirstCSSdocument.css">
</head>
<body>
<div class="topnav">
<h2>Computing the Volume of a Cylinder</h2>

<h2>Program by: Todd</h2>
<?php
//variables
$radius = rand(1,1000)/10;
$length = rand(1,1000)/10;
$area = pi()*$radius*$radius;
$volume = $area*$length;
//code
echo "This program will take the radius and length of a cylinder, given as real numbers, and will compute the area and volume of the cylinder, also displayed as real numbers.<br><br>";
echo "Random number radius of the cylinder: " . $radius . "<br>";
echo "Random number of the length of the cylinder: " . $length . "<br>";
echo "<h2>Results:</h2>";
echo "The area is " . number_format($area, 4) . "<br>";
echo "The volume is " . number_format($volume, 1);
?>
</div>
</body>
</html>