<?php
class MessageManager extends AbstractManager
{
    // Fonction pour afficher les messages du salon sélectionné, ordonnés par date et heure d'envoi 
    public function getMessagesBySalon($salon_id)
    {
        $query = $this->db->prepare("SELECT * FROM messages WHERE salon_id = :salon_id ORDER BY createdAt");
        $parameters = [
            "salon_id" =>$salon_id
            ];
        $query->execute($parameters);
        
        // Retourne un tableau associatif avec les résultats de la requête
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Fonction pour envoyer un message dans un salon
    public function sendMessage($salon_id, $content)
    {
      $query = $this->db->prepare("INSERT INTO messages(salon_id, content, createdAt) VALUES(:salon_id, :content, NOW())");
      $parameters = 
      [
          "salon_id" => $salon_id,
          "content" => $content
          ];
      $query->execute($parameters);
    }
    
}