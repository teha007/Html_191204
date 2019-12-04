<?php

header('Content-Type:text/html; charset=utf-8');

$name = $_POST['name'];
$pw = $_POST['pw'];
$gender = $_POST['rg1'];
$msg = $_POST['msg'];
$brand = $_POST['sel'];

// textarea에서 입력된 값중 줄바꿈문자(\n)을 브라우저에
// 출력하면 한줄로 보여지므로 \n을 <br>로 변경해줘야만 함
$msg = nl2br($msg);

echo "$name <br>";
echo "$pw <br>";
echo "$gender <br>";
echo "$msg <br>";
echo "$brand <br>";

// 체크박스에 선택된 값은 여러개일 수 있어서 배열로 받아짐
$fruits = $_POST['fruits']; // 대입된 $fruits 변수는 배열임!!

// 배열의 길이를 구해주는 함수
$len = count($fruits);

//배열의 개수만큼 반복
for ($i = 0; $i < $len; $i++) {
    echo "$fruits[$i], ";
}

?>