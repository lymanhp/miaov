<?php
header('content-type:text/html;charset="utf-8"');
error_reporting(0);

$username = $_GET['username']; //通过get方式提交，就用get方式获取，获取的usename为表单的name属性值
$age = $_GET['age'];

echo "你的名字：{$username}，年龄：{$age}";