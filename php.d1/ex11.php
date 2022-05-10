<?php
$a = 0;
while ($a < 20){ 
    if ($a==10){
        echo "<strong>".$a."</strong>";
    }else{
        echo $a;
    }
    echo "<br>"; 
    $a+=2; 
}

?>