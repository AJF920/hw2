<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Feedback</title>
</head>
<body>
<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$result = 0;
$temp = 0;

print"<table><tr><td>Number 1</td><td>Operator 1</td><td>Number 2</td><td>Operator 2</td><td>Number 3</td><td>Results</td></tr>";
print"<tr><td>$num1</td><td>$op1</td><td>$num2</td><td>$op2</td><td>$num3</td>";
if (!is_numeric($num1) || !is_numeric($num2) || !is_numeric($num3)) {
    $result = "ERROR";
}else{
if ($op1 == '*' || $op1 == '/'){
    if ($op1 == '*'){
        $temp = $num1 * $num2;
    }
    if ($op1 == '/'){
        $temp = $num1 / $num2;
    }
    if ($op2 == '+'){
        $result = $temp + $num3;
    }
    if ($op2 == '-'){
        $result = $temp - $num3;
    }
    if ($op2 == '/'){
        $result = $temp / $num3;
    }
    if ($op2 == '*'){
        $result = $temp * $num3;
    }
}
elseif ($op2 == '*' || $op2 == '/'){
    if ($op2 == '*'){
        $temp = $num2 * $num3;
    }
    if ($op2 == '/'){
        $temp = $num2 / $num3;
    }
    if ($op1 == '+'){
        $result = $temp + $num1;
    }
    if ($op1 == '-'){
        $result = $num1 - $temp;
    }
}
}

print"<td>$result</td></tr></table>";
?>
</body>
</html>