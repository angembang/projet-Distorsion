<?php
require "config/autoload.php";
// Instancier le routeur
$route = new Router();
// Passer la superglobale $_GET à la méthode handleRequest du routeur
$route -> handleRequest($_GET);