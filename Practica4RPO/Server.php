<?php
    require_once "lib/nusoap.php";

    function ObtenerMarcasCoche($date){
        if ($date == "Automoviles") {
            return join("", array(
                "<center><li>Chevrolet</li></center><hr>",
                "<center><li>Nissan</li></center><hr>",
                "<center><li>Ford</li></center><hr>",
                "<center><li>Honda</li></center><hr>",
                "<center><li>BMW</li></center><hr>",
                "<center><li>Volkswagen</li><center><hr>",
                "<center><li>Mercedes-Benz</li><center><hr>",
                "<center><li>Audi</li><center><hr>",
                "<center><li>Renault</li><center><hr>"));
        }
        else {
            return "No hay marcas de Automoviles";
        }
    }
    $server = new soap_server();
    $server -> register("ObtenerMarcasCoche");
    if (!isset ( $HTTP_RAW_POST_DATA) ) $HTTP_RAW_POST_DATA = file_get_contents('php://input');
        $server -> service($HTTP_RAW_POST_DATA);

    
?>