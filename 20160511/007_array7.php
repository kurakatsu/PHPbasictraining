<?php

$a = array(
      0 => array(
        0 => "りんご",
        1 => "ごりら",
        2 => "らっぱ",
      ),
      1 => array(
        0 => "ぱせり",
        1 => "りす",
        2 => "すみれ",
      ),
      2 => array(
        0 => "れんげ",
        1 => "げたばこ",
        2 => "こあら",
      ),

);
var_dump($a);
echo "<br>";
foreach($a as $key1 => $array){
    foreach($array as $key2 => $value){
    echo $key1 . " " . $key2 . " " . $value .  "<br>";
}
}
?>
