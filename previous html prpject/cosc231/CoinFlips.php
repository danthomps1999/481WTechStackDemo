<!DOCTYPE html>
<html lang="en-US">
<!-- Created by Todd Shmayda on 3/29/2021 -->
<html>
<head>
<title>Counting Coin Flips in PHP</title>
<link rel="stylesheet" type="text/css" href="../myStyles/01FirstCSSdocument.css">
</head>
<body>
<div class="topnav">
<h2>Counting Coin Flips</h2>

<h2>Program by: Todd</h2>
<?php
//variables
$headCount = 0;
$tailsCount = 0;
function flips()
{
	$results = array(rand(0,1));
    
    for ($i = 1; $i < 100; $i++)
    {
    	array_push($results,rand(0,1));
    }
    
	for ($i = 1; $i <= 100; $i++)
    {
    	
    	
        if($results[$i-1] == 0)
        {
        	echo "heads, ";
            
           $headCount++;
        }
        else
        {
        	echo "tails, ";
            $tailsCount++;
        }
 		if ($i%10==0)
        {
        	echo "<br>";
        }
	}
}
$n = flips();
//code
echo "<br>This program will count the number of heads and tails by simulating a 100 coin flips.<br><br>";
echo "<h2>Results:</h2>";
echo "Landed on Heads " .$headCount. " times.<br>";
echo "Landed on Tails " .$tailsCount. " times.<br>";
?>
</div>
</body>
</html>