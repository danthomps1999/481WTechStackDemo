<!DOCTYPE html>
<html lang="en-US">
<!-- Created by Todd Shmayda on 3/29/2021 -->
<html>
<head>
<title>Fahrenheit to Celsius in PHP</title>
<link rel="stylesheet" type="text/css" href="../myStyles/01FirstCSSdocument.css">
</head>
<body>
<div class="topnav">
<h2>Fahrenheit to Celsius</h2>

<h2>Program by: Todd</h2>
<?php
//variables
function fah()
{
	echo "Fahrenheit:<br>";
	$fahrenheit = array(rand(-50, 120));
	for ($i = 1; $i < 5; $i++)
	{
		 array_push($fahrenheit,rand(-50, 120));
	}
    
    for ($i = 0; $i < 5; $i++)
    {
      echo $fahrenheit[$i]. "<br>";
    }
    
    $celcius = array(($fahrenheit[0] - 32)*5/9);
    for ($i = 1; $i < 5; $i++)
	{
		array_push($celcius,($fahrenheit[$i] - 32)*5/9);
	}
    
    echo "Celcius: <br>";
    for ($i = 0; $i < 5; $i++)
    {
      echo $celcius[$i]. "<br>";
    }
    
    
}
//code
echo "This program generates 5 random temperatures in fahrenheit and computes them into Celcius using a for loop.<br><br>";
$f = fah();

?>
</div>
</body>
</html>