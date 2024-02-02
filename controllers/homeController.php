<?php

class HomeController
{
    public function index()
    {
        // Afficher la liste des catégories, salons, et messages
        //  utiliser les gestionnaires de modèle pour récupérer les données nécessaires
       

        
     

        // Appeler la vue correspondante 

    }

    public function createCategory()
    {
        // Traiter la création d'une nouvelle catégorie
        // utiliser le gestionnaire de modèle pour ajouter la catégorie à la base de données
      

        // Rediriger l'utilisateur vers la page d'accueil après la création de la catégorie
        // header('Location: /home/index');
        // exit();
    }

    public function createChannel()
    {
        // Traiter la création d'un nouveau salon dans une catégorie
        // ...

        // Rediriger l'utilisateur vers la page d'accueil après la création du salon
        // header('Location: /home/index');
        // exit();
    }

    public function sendMessage()
    {
        // Traiter l'envoi d'un nouveau message dans un salon
        

        // Rediriger l'utilisateur vers la page d'accueil après l'envoi du message
        // header('Location: /home/index');
        // exit();
    }
}