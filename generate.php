<?php
require "vendor/autoload.php";
require "productos.php";
$gen = new  PHP2WSDL\PHPClass2WSDL("Productos", "http://localhost/soap");
$gen -> generateWSDL();
echo $gen -> dump(); 