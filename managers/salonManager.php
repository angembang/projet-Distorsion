<?php
class SalonManager extends AbstractManager
{
    // Fonction pour créer les salons
    public function createSalon($id, $category_id, $name)
    {
        $query= $this->db->prepare("INSERT INTO salons(id, category_id, name) VALUES(:id, :category_id, :name)");
        $parameters = [
            "id"=>$id,
            "category_id"=>$category_id,
            "name"=>$name
            ];
        $query->execute($parameters);
        
    }
    
    // Fonction pour afficher les salons d'une catégorie spécifique
    public function getSalonsByCategory($category_id)
    {
       $query= $this->db->prepare("SELECT * FROM salons WHERE category_id= :category_id");
       $parameters = [
            "category_id" => $category_id
        ];
       $query->execute($parameters);
       
        // Retourne un tableau associatif avec les résultats de la requête
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
}