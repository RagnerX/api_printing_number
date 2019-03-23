<?php

$str1 = "Reformed";
$str2 = "Tech";
$str3 = "ReformedTech";

for( $i=1; $i<=100; $i++ ){

    if($i % 15 == 0){
        echo $str3;
        echo "<br>";
    }elseif($i % 5 == 0){
        echo $str2;
        echo "<br>";
    }elseif($i % 3 == 0){
        echo $str1;
        echo "<br>";
    }else{
        echo $i;
        echo "<br>";
    }

}


?>