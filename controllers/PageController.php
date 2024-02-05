<?php
class PageController
{
    public function home(): void
    {
        $route ="home";
        require "templates/home.phtml";
    }
    
    public function about(): void
    {
        $route = "about";
        // Affichez la page "À propos"
        require "templates/about.phtml";
    }
    
    public function chat(): void
    {
        
        $route = "chat";
        // Affichez la page du chat
        require "templates/chat.phtml";
    }
}