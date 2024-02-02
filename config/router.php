<?php

class Router
{
    public function __construct()
    {
         // Initialisation du routeur
    }
    
    public function handleRequest(array $get): void
    {
        //  Vérifier si la clé route est définie dans la requête GET existe et vaut "a-propos"
        if(isset($get["route"]) && $get["route"] === "a-propos")
        {
            
        } else if(isset($get["route"]) && $get["route"] === "chat")
        {
            
        } else if(!isset($get["route"]))
        {
            
        } else
        {
            
        }
    }
}