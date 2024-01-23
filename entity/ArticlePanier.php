<?php
namespace Fr\Ensitech\Tpjsf\Entity;

class ArticlePanier {
    private $id;
    private $article; // Assuming Article is another class, you should include it
    private $quantite;
    private $utilisateur; // Assuming User is another class, you should include it

    public function __construct($id, $article, $quantite, $utilisateur) {
        $this->id = $id;
        $this->article = $article;
        $this->quantite = $quantite;
        $this->utilisateur = $utilisateur;
    }

    // Getters and setters for each property
    // ...
}
?>