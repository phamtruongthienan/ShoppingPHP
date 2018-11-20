<?php
$str = "// http://localhost:8080/shop2408/tim-kiem/key=ipho/page/2";
// print_r(explode('page',$str));
// echo explode('page',$str)[0];


$x = explode('?',$str,3);


var_dump($x);
echo $x[1];
// if(strpos($str, '?')==NULL) var_dump(explode('?',$str)[1]);
// else var_dump(explode('?',$str)[1]);
die;

?>