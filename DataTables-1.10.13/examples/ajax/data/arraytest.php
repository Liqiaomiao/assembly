<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
var_dump($age);
$result = "";
foreach($age as $x=>$x_value)
 {

$result  .= $x . "=" . $x_value.',';
 
 }
var_dump($result);
$rest = substr($result, 0, -1); 
echo $rest;
?>