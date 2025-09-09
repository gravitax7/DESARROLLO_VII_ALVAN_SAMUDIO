<?php

    function calcular_promocion($antiguedad_meses){

        if($antiguedad_meses < 3){
            return 0;
        } elseif($antiguedad_meses >= 3 && $antiguedad_meses <= 12){
            return 0.08;
        }elseif($antiguedad_meses >= 13 && $antiguedad_meses <= 24){
            return 0.12;
        }elseif($antiguedad_meses >24){
            return 0.2;
        }

    function calcular_seguo_medico($cuota_base){
        return $cuota_base * 0.05;
    }

    function calcular_cuota_final($cuota_base, $descuento_porcentaje, $seguro_medico){
        $descuento = ($cuota_base * $descuento_porcentaje) /100 ;
        return $cuota_base - $descuento + $seguro_medico;
    }
?>