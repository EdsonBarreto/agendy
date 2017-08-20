<?php
require_once("config/autoloader.php");

$obj = new Pessoa();

$obj->setName("Agendy Application");

echo($obj->getName());
