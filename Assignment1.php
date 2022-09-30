<?php 
$a = (int)readline("Enter the first number less than 100: ");
$b = (int)readline("Enter the second number less than 100: ");

while ($a > 100 || $b > 100) {
	echo "One of the numbers you entered are more than 100. Enter them again.\n";
	$a = (int)readline("Enter the first number less than 100: ");
	$b = (int)readline("Enter the second number less than 100: ");
	
}

if ($a == 0 || $b == 0) {
	exit();
} elseif ($a < 100 && $b < 100) {
	echo($a * $b);
}
?>





