<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;

if($num1>$num2){
    if($num1>$num3){
        echo "The Largest Number is {$num1}";
    }
    else{
        "The Largest Number is {$num3}";
    }
}

if($num2>$num1){
    if($num2>$num3){
        echo "The Largest Number is {$num2}";
    }
    else{
        echo "The Largest Number is {$num3}";
    }

}
?>