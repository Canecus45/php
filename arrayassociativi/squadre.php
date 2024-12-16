<?php

$squadre = array(
        "Milan" => array( "nome"=>"milan",
                "città"=>"Milano",
                "fondazione"=>"16-12-1899",
                "stadio"=>"San siro",
                "capacità"=>80018
                ),
        "Inter" => array( "nome"=>"Inter",
                "città"=>"Milano",
                "fondazione"=>"09-03-1908",
                "stadio"=>"San siro",
                "capacità"=>80018
                ),
        "Venezia"=> array( "nome=>Venezia"
                "città"=>"Venezia",
                "fondazione"=>"14-12-1907",
                "stadio"=>"Pier Luigi Penzo",
                "capacità"=>12048
               )
            );

require_once("squadre.inc.php");

squadra_per_citta($squadre, "Milano");

squadra_per_nome($squadre, "Milan");

tutte_squadre($squadre);
?>