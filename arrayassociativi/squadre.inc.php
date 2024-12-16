<?php
function squadra_per_nome($vet,$squadra){
    if(array_key_exists($squadra,$vet)){
        echo "la squadra: ".$squadra." è in: "."<hr>";
        //Ciclo con un foreach in corrispondenza della
        //chiave e visualizzo a sua volta chiave e valori
        foreach($vet[$squadra] as $key=>$valute){
            print("$key: $value</br>");
        }
    }
}

function squadra_per_citta($vet,$citta){
    if(array_key_exists($citta,$vet)){
        foreach($vet[$citta] as $key=>$valute){
            if($key == "anno"){
                print("$key: $valute</br>");
            }
        }
    }
}

function tutte_squadre($vet){
    foreach($vet as $squadra){
        echo"$squadra: "
        foreach($squadra as $key => $valute){
                print("$key: $valute</br>");
        }
    }

}
?>