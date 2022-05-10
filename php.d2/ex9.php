<?php
$age = 25;
function estIlMajeure($age){
    if ($age >= 18)
    return true;
    elseif ($age < 18)
    return false;
}
echo estIlMajeure($age);
?>