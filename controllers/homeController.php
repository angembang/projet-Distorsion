<?php

class HomeController
{
    /*public function displayCategoriesAndSalons()
    {
        // Utilisez CategoryManager pour récupérer les catégories
        $categoryManager = new CategoryManager();
        $categories = $categoryManager->getCategories();

        // Utilisez SalonManager pour récupérer les salons
        $salonManager = new SalonManager();
        $salons = $salonManager->getSalonsByCategory(1);

        // Affichez la liste des catégories et des salons
        return ["categories" => $categories, "salons" => $salons];
    }



    public function displayMessages($salonId)
    {
        // Utilisez MessageManager pour récupérer les messages du salon spécifié
        $messageManager = new MessageManager();
        $messages = $messageManager->getMessagesBySalon($salonId);
        
        // Affichez les messages
        return ['messages' => $messages];
    }

    public function sendMessage($salonId, $content)
    {
        // Utilisez MessageManager pour envoyer un message dans le salon spécifié
        $messageManager = new MessageManager();
        $messageManager->sendMessage($salonId, $content);
    }*/
}