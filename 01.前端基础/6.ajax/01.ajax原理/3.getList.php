<?php
header('content-type:text/html;charset="utf-8"');
error_reporting(0);

$arr1 = array('leo','momo','zhangsen');

$arr2 = array('username'=>'leo','age'=>32);

echo json_encode($arr1); 
//结果：["leo","momo","zhangsen"] 将arr1输出为数组形式
echo json_encode($arr2); 
//结果：{"username":"leo","age":32} 将arr2转化为json的形式，但是在网页中输出为字符串类型