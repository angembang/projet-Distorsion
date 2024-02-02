<?php
class CategoryManager extends DataBaseManager
{
    // Fonction pour création des catégories
    public function createCategory($name)
    {
        $query = $this->db->prepare("INSERT INTO categories($name)VALUES(:name)");
        $parameters = [
            "name"=> $name
            ];
            
        $query->execute($parameters);
    }
    
    // Fonction pour affichage des categories
    public function getCategoryByName($name)
    {
        $query = $this->db->prepare("SELECT * FROM categories WHERE name = :name");
        $parameters = [
            "name"=>$name
            ];
        $query->execute($parameters);
        $categoryData = $query->fetch(PDO::FETCH_ASSOC);
        
        if($categoryData)
        {
            $category = new Category(null, $categoryData["name"]);
            return $category;
        }
        // Category non trouvé, retourne null
        return null;
    }
}