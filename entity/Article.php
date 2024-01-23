<?php
namespace Fr\Ensitech\Tpjsf\Entity;

class Article {
    private $id;
    private $nom;
    private $description;
    private $prix;
    private $remise;
    private $stock;
    private $isVendable;
    private $commentaire; // Assuming Commentaire is another class, you should include it

    public function __construct($id, $nom, $description, $prix, $remise, $stock, $isVendable, $commentaire) {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->prix = $prix;
        $this->remise = $remise;
        $this->stock = $stock;
        $this->isVendable = $isVendable;
        $this->commentaire = $commentaire;
    }

    // Getters and setters for each property
    // ...
}
?>