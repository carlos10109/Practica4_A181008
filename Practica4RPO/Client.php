<?php
require_once "lib/nusoap.php";
$client = new nusoap_client("http://localhost/Practica4RPO/Server.php");

$bug = $client->getError();
if($bug){
    echo "<h2>Constructor ERROR</h2><pre>" .$bug . "</pre>";
}

$result = $client->call("ObtenerMarcasCoche", array("date" => "Automoviles"));
if ($client -> fault) {
    echo "<h2>Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
}
else {
    $bug = $client->getError();
    if($bug) {
        echo "<h2>ERROR</h2><pre>" . $bug . "</pre>";   
    }
    else {
        echo "<center><h2>Marcas De Automoviles</h2></center><pre>";
        echo $result;
        echo "</pre>";
    }
}


?>