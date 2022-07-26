<?php
$star =(int)readline("masukkan angka");
for ($a=$star;$a>0;$a--){
for ($b=$star;$b>=$a;$b--){
    echo "*";
}
echo "\n";
}
for ($a=1;$a<=$star;$a++){
    for($c=$star; $c>=$a; $c-=1){
        echo "*";
    }
    echo "\n";
}
?>