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


    public function __construct($id, $nom, $description, $prix, $remise, $stock, $isVendable) {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->prix = $prix;
        $this->remise = $remise;
        $this->stock = $stock;
        $this->isVendable = $isVendable;
    }

    // Getters and setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function getRemise() {
        return $this->remise;
    }

    public function setRemise($remise) {
        $this->remise = $remise;
    }

    public function getStock() {
        return $this->stock;
    }

    public function setStock($stock) {
        $this->stock = $stock;
    }

    public function getIsVendable() {
        return $this->isVendable;
    }

    public function setIsVendable($isVendable) {
        $this->isVendable = $isVendable;
    }
}
?>
