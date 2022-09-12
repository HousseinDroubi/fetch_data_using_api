<?php
// Post all numbers
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$result=($a*3)+($b*$c)-($a/$b);
// Create Json
$return =[
    "result" => $result,
];
echo json_encode($return);
?>