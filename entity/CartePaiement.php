<?php
namespace Fr\Ensitech\Tpjsf\Entity;

class CartePaiement {
    private $id;
    private $nomProprietaire;
    private $prenomProprietaire;
    private $numero; // Représenté en tant que string en PHP
    private $dateFinValidite;
    private $cryptogramme; // Représenté en tant que string en PHP, 'cryptograme' corrigé en 'cryptogramme'
    private $utilisateur; // Assuming User is another class, you should include or use it

    public function __construct($nomProprietaire, $prenomProprietaire, $numero, $dateFinValidite, $cryptogramme, $utilisateur) {
        $this->nomProprietaire = $nomProprietaire;
        $this->prenomProprietaire = $prenomProprietaire;
        $this->numero = $numero;
        $this->dateFinValidite = $dateFinValidite;
        $this->cryptogramme = $cryptogramme;
        $this->utilisateur = $utilisateur; // Assurez-vous que $utilisateur est une instance de la classe User
    }

    // Getters and setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNomProprietaire() {
        return $this->nomProprietaire;
    }

    public function setNomProprietaire($nomProprietaire) {
        $this->nomProprietaire = $nomProprietaire;
    }

    public function getPrenomProprietaire() {
        return $this->prenomProprietaire;
    }

    public function setPrenomProprietaire($prenomProprietaire) {
        $this->prenomProprietaire = $prenomProprietaire;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getDateFinValidite() {
        return $this->dateFinValidite;
    }

    public function setDateFinValidite($dateFinValidite) {
        $this->dateFinValidite = $dateFinValidite;
    }

    public function getCryptogramme() {
        return $this->cryptogramme;
    }

    public function setCryptogramme($cryptogramme) {
        $this->cryptogramme = $cryptogramme;
    }

    public function getUtilisateur() {
        return $this->utilisateur;
    }

    public function setUtilisateur($utilisateur) {
        $this->utilisateur = $utilisateur; // Assurez-vous que $utilisateur est une instance de la classe User
    }
}
?>
