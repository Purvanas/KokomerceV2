<?php
namespace fr\ensitech\tpjsf\entity;

class Commande {
    private $id;
    private $numero;
    private $dateCreation;
    private $dateLivraison;
    private $totaleRemise;
    private $fraisExpedition;
    private $totalGeneral;
    private $adresseFacturation; // Assumer que c'est une instance de la classe Adresse
    private $adresseLivraison;   // Assumer que c'est une instance de la classe Adresse
    private $cartePaiementDefaut;// Assumer que c'est une instance de la classe CartePaiement
    private $utilisateur;        // Assumer que c'est une instance de la classe User
    private $lignesCommande;     // Assumer que c'est un tableau de lignes de commande

    // Getters and setters
    public function getId() {
        return $this->id;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero(string $numero) {
        $this->numero = $numero;
    }

    public function getDateCreation() {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation) { // Le type dépend de la façon dont la date est gérée
        $this->dateCreation = $dateCreation;
    }

    public function getDateLivraison() {
        return $this->dateLivraison;
    }

    public function setDateLivraison($dateLivraison) { // Le type dépend de la façon dont la date est gérée
        $this->dateLivraison = $dateLivraison;
    }

    public function getTotaleRemise() {
        return $this->totaleRemise;
    }

    public function setTotaleRemise(float $totaleRemise) {
        $this->totaleRemise = $totaleRemise;
    }

    public function getFraisExpedition() {
        return $this->fraisExpedition;
    }

    public function setFraisExpedition(float $fraisExpedition) {
        $this->fraisExpedition = $fraisExpedition;
    }

    public function getTotalGeneral() {
        return $this->totalGeneral;
    }

    public function setTotalGeneral(float $totalGeneral) {
        $this->totalGeneral = $totalGeneral;
    }

    public function getAdresseFacturation() {
        return $this->adresseFacturation;
    }

    public function setAdresseFacturation(Adresse $adresseFacturation) {
        $this->adresseFacturation = $adresseFacturation;
    }

    public function getAdresseLivraison() {
        return $this->adresseLivraison;
    }

    public function setAdresseLivraison(Adresse $adresseLivraison) {
        $this->adresseLivraison = $adresseLivraison;
    }

    public function getCartePaiementDefaut() {
        return $this->cartePaiementDefaut;
    }

    public function setCartePaiementDefaut(CartePaiement $cartePaiementDefaut) {
        $this->cartePaiementDefaut = $cartePaiementDefaut;
    }

    public function getUtilisateur() {
        return $this->utilisateur;
    }

    public function setUtilisateur(User $utilisateur) {
        $this->utilisateur = $utilisateur;
    }

    public function getLignesCommande() {
        return $this->lignesCommande;
    }

    public function setLignesCommande($lignesCommande) { // Le type dépend de la structure des lignes de commande
        $this->lignesCommande = $lignesCommande;
    }
}
?>
