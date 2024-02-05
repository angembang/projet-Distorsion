<?php
class CategoryManager extends AbstractManager
{
    // Fonction pour création des catégories
    public function createCategory($name)
    {
        $query = $this->db->prepare("INSERT INTO categories(name)VALUES(:name)");
        $parameters = [
            "name"=> $name
            ];
            
        $query->execute($parameters);
    }
    
    // Fonction pour affichage des categories
    public function getCategories()
    {
        $query = $this->db->prepare("SELECT * FROM categories");
        
        $query->execute();
       $categories= $query->fetchAll(PDO::FETCH_ASSOC);
       
       $categoryData = [];
       
       if($categories)
       {
           foreach($categories as $category)
           {
               $currentCategory = new Category($category['name']);
               $currentCategory->setId($cayegory['id']);
               
               $categoryData[] = $currentCategory;
           }
       } 
        return $categoryData;
        
    
    }
}