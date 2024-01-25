<?php
namespace Fr\Ensitech\Tpjsf\Entity;

class ArticlePanier {
    private $id;
    private $article; // Assuming Article is another class, you should include or use it
    private $quantite;
    private $utilisateur; // Assuming User is another class, you should include or use it

    public function __construct($id, $article, $quantite, $utilisateur) {
        $this->id = $id;
        $this->article = $article; // Assurez-vous que $article est une instance de la classe Article
        $this->quantite = $quantite;
        $this->utilisateur = $utilisateur; // Assurez-vous que $utilisateur est une instance de la classe User
    }

    // Getters and setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getArticle() {
        return $this->article;
    }

    public function setArticle($article) {
        $this->article = $article; // Assurez-vous que $article est une instance de la classe Article
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    public function getUtilisateur() {
        return $this->utilisateur;
    }

    public function setUtilisateur($utilisateur) {
        $this->utilisateur = $utilisateur; // Assurez-vous que $utilisateur est une instance de la classe User
    }
}
?>
