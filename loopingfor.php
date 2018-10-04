<?php
//Looping for

//parameter  1 = inisiasi
//parameter 2 = kondisi


for($i = 0; $i < 6; $i++)
{
    if($i > 0){
        for($j = 0; $j <= $i; $j++){
            echo $i." ";
        }
    }else{
        echo $i;   
    }
    echo "<br>";
}



?>