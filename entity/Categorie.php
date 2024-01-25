<?php
namespace fr\ensitech\tpjsf\entity;

class Categorie {
    private $id;
    private $nom;
    private $remise;
    private $isRemiseCumulable;
    private $articles; // Assuming this is an array of Article objects

    // Getter for id
    public function getId() {
        return $this->id;
    }

    // Setter for id
    public function setId($id) {
        $this->id = $id;
    }

    // Getter for nom
    public function getNom() {
        return $this->nom;
    }

    // Setter for nom
    public function setNom($nom) {
        $this->nom = $nom;
    }

    // Getter for remise
    public function getRemise() {
        return $this->remise;
    }

    // Setter for remise
    public function setRemise($remise) {
        $this->remise = $remise;
    }

    // Getter for isRemiseCumulable
    public function getIsRemiseCumulable() {
        return $this->isRemiseCumulable;
    }

    // Setter for isRemiseCumulable
    public function setIsRemiseCumulable($isRemiseCumulable) {
        $this->isRemiseCumulable = $isRemiseCumulable;
    }

    // Getter for articles
    public function getArticles() {
        return $this->articles;
    }

    // Setter for articles
    public function setArticles($articles) {
        $this->articles = $articles; // This should be an array of Article objects
    }
}
