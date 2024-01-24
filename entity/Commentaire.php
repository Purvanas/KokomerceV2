<?php
namespace fr\ensitech\tpjsf\entity;

class Commentaire {
    private $id;
    private $texte;
    private $note;
    private $article; // Corrigé la faute de frappe 'artcile' en 'article'
    private $utilisateur; // Assuming User is another class, you should include or use it

    // Getter for id
    public function getId() {
        return $this->id;
    }

    // Setter for id
    public function setId($id) {
        $this->id = $id;
    }

    // Getter for texte
    public function getTexte() {
        return $this->texte;
    }

    // Setter for texte
    public function setTexte($texte) {
        $this->texte = $texte;
    }

    // Getter for note
    public function getNote() {
        return $this->note;
    }

    // Setter for note
    public function setNote($note) {
        $this->note = $note;
    }

    // Getter for article
    public function getArticle() {
        return $this->article;
    }

    // Setter for article
    public function setArticle($article) {
        $this->article = $article; // Assurez-vous que $article est une instance de la classe Article
    }

    // Getter for utilisateur
    public function getUtilisateur() {
        return $this->utilisateur;
    }

    // Setter for utilisateur
    public function setUtilisateur($utilisateur) {
        $this->utilisateur = $utilisateur; // Assurez-vous que $utilisateur est une instance de la classe User
    }
}
