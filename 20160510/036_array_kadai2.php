<?php
$a = array("お茶", "緑茶", "麦茶", "紅茶", "抹茶");
foreach($a as $tea){
    echo $tea . "<br>";
}
echo "<br>";
$a[5]="研修";
foreach($a as $key => $tea){
    echo $key . " " . $tea . "<br>";
}
?>
