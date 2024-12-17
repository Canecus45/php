<?php
function returnBool()
    {
    $var = (int)(math.random_int(0, 100));
    if ($var % 2) {
        return TRUE;
        } else {
        return FALSE;
        }

    }

if (returnBool()) {
    echo "Sembra che ha ritornato un bool positivo";
    } else {
    echo "Sembra che ha ritornato un bool negativo";
    //
    /**/
    }
?>