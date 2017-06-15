<?php
$data = $_POST['data'][0];
$result = "";
var_dump($data);
foreach($data as $x=>$x_value)
 {
 $result  .="\"".  $x . "\"=\"" . $x_value."\",";
 
 }
 $res = substr( $result,0,-1);
echo  '{'.$res.'}';
?>