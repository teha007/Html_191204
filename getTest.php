<?php

header("Content-Type: text/html; charset=UTF-8");

$name = $_GET['name'];
        $msg = $_GET['msg'];

// 변수의 값을 화면에 보여주기

echo "<h2>$name  ,    $msg </h2>"

?>