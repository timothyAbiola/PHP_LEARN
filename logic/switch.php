<?php
$stdn = fopen("php://stdin", 'r');
print("Enter First Number: ");
$first = (int) fgets($stdn);
print("Enter Second Number: ");
$second = (int) fgets($stdn);
print("Enter Operator: 1.Add\n 2.Subtract\n 3.Multiphy\n 4.Divide\n 5.Modulus\n");
$operator = fgets($stdn);
switch($operator){
    case 1:
        $sum = $first + $second;
        print("Sum: " . $sum );
        break;
    case 2: 
        $minus = $first - $second;
        print("Subtration: " . $minus);
        break;
    case 3:
        $mul = $first * $second;
        print("Multiplication: " . $mul);
        break;
    default : 
        print("Invalid Operation");
        break;
}

?>
