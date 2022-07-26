<?php
$star =(int)readline("masukkan angka")
$i =1;
while ($i <= $star){
    $j=1;
    while ($j<= $i){
        $j++;
        echo "&nbsp *";
    }
    $i++;
    echo "\n";
}
$i=1;
while ($i <= $star){
    $j=$i;
    while ($j<= $star){
        $j++;
        echo "&nbsp *";
    }
    $i++;
    echo "\n";
}
?>