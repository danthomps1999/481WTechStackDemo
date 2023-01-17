<!DOCTYPE html>
<!-- NumberNames.php-->
<html lang="en-US">
<head>
<title>Computing Number Names in PHP</title>
<link rel="stylesheet" type="text/css" href="../myStyles/01FirstCSSdocument.css">
</head>
<body>
<div class="topnav">
<h2>Computing Number Names</h2>

<h2>Program by: Todd</h2>

<p>This program changes number into their word counterparts using arrays and forms.</p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   First Number: <input type="number" name="num1" min="1" max="10" required><br>
   Second Number: <input type="number" name="num2" min="1" max="10" required><br>
   Third Number: <input type="number" name="num3" min="1" max="10" required><br>
   Fourth Number: <input type="number" name="num4" min="1" max="10" required><br>
   Fifth Number: <input type="number" name="num5" min="1" max="10" required><br>
   <input type="submit">
   <br><br>
</form>

<?php
	$string = array();
	$change_words = array(0 => '', 1 => 'One', 2 => 'Two',
     3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
     7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
     10 => 'Ten');
	 
// define variables and set to empty values
$n1 = $n2 = $n3 = $n4 = $n5 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
   $n1 = test_input($_POST["num1"]);
   $n2 = test_input($_POST["num2"]);
   $n3 = test_input($_POST["num3"]);
   $n4 = test_input($_POST["num4"]);
   $n5 = test_input($_POST["num5"]);
   
   
   if (empty($n1)||empty($n2)||empty($n3)||empty($n4)||empty($n5)) 
   {
       echo "Need all data to begin";
   } 
   else 
   {
       foreach ($_POST as $userinput)
		echo $userinput . " is spelled " . $change_words[$userinput] . "<br>";
   }
}

function test_input($data) 
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>
<div class="topnav">
</body>
</html>