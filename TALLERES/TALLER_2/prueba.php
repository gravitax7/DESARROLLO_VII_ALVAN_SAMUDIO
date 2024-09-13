<?php
    $arreglo= array();
    for ($i=0;$i<5;$i++){
        if(count($arreglo)==0){
        $arreglo[$i] = "*";
        echo $arreglo[$i];
        }   else{
    array_push($arreglo, "*".$arreglo[$i-1]);
    echo"<br>". $arreglo[$i];
    }
}
?>