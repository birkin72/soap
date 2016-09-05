<?php
//ini_set("soap.wsdl_cache_enabled", "0");

$client = new SoapClient("productos.wsdl", array(  
    "location" => "http://localhost/soap/server.php",  
    "trace"=>1, "exceptions"=>1  //optional parameters for debugging  
    )); 
$response = $client->getProductos();

print_r($response); 