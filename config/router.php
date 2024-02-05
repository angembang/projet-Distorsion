<?php
class Router
{
    public function __construct()
    {
        // Initialisation du routeur 
    }
    public function handleRequest(array $get):void
    {
         // Créer les instances de PageController et homecontroller
         $page = new PageController();
         $home = new HomeController();

        //  Vérifier si la clé route est définie dans la requête GET existe et vaut `"a-propos
        if(isset($get["route"]) && $get["route"]=== "about")
        {
            $page -> about();
        } else if (isset($get["route"]) && $get["route"] === "chat")
        {
          // appeler la méthode contact
          $page -> chat();
        } else if(!isset($get["route"]))
        {
           $page -> home();
        } 
    }
}