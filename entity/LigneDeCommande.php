<?php
namespace fr\ensitech\tpjsf\entity;

class LigneDeCommande {
    private $id;
    private $quantite;
    private $prixUnitaire;
    private $remiseArticle;
    private $commande; // Assuming Commande is another class, you should include or use it
    private $article; // Assuming Article is another class, you should include or use it

    // Getter for id
    public function getId() {
        return $this->id;
    }

    // Setter for id
    public function setId($id) {
        $this->id = $id;
    }

    // Getter for quantite
    public function getQuantite() {
        return $this->quantite;
    }

    // Setter for quantite
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    // Getter for prixUnitaire
    public function getPrixUnitaire() {
        return $this->prixUnitaire;
    }

    // Setter for prixUnitaire
    public function setPrixUnitaire($prixUnitaire) {
        $this->prixUnitaire = $prixUnitaire;
    }

    // Getter for remiseArticle
    public function getRemiseArticle() {
        return $this->remiseArticle;
    }

    // Setter for remiseArticle
    public function setRemiseArticle($remiseArticle) {
        $this->remiseArticle = $remiseArticle;
    }

    // Getter for commande
    public function getCommande() {
        return $this->commande;
    }

    // Setter for commande
    public function setCommande($commande) {
        $this->commande = $commande; // Assurez-vous que $commande est une instance de la classe Commande
    }

    // Getter for article
    public function getArticle() {
        return $this->article;
    }

    // Setter for article
    public function setArticle($article) {
        $this->article = $article; // Assurez-vous que $article est une instance de la classe Article
    }
}
