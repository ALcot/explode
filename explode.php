<?php

$str_base = "PHP4,PHP5,PHP6,PHP7";

//ターゲット文字（今回は,）　元の文字列（$str_base）
$str = explode(",",$str_base);

//配列地に確認にvar_dumpを使用
// var_dump($str);


//本当に動作してるの？配列化できてるの？確認
echo $str[0]."<br>";
echo $str[3]."<br>";


?>