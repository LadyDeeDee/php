<?php
function somme($arr){
    $sum = 0;
    foreach($arr as $value){
        $sum += $value;
    }
    return $sum;
}    
    $list = [7, 8];
    echo somme($list)."\n";
?>
