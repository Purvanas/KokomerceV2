<?php
namespace Fr\Ensitech\Tpjsf\Entity;

class CartePaiement {
    private $id;
    private $nomProprietaire;
    private $prenomProprietaire;
    private $numero; // Originally byte[] in Java, represented as string in PHP
    private $dateFinValidite;
    private $cryptograme; // Originally byte[] in Java, represented as string in PHP
    private $utilisateur; // Assuming User is another class, you should include it

    public function __construct($nomProprietaire, $prenomProprietaire, $numero, $dateFinValidite, $cryptograme, $utilisateur) {
        $this->nomProprietaire = $nomProprietaire;
        $this->prenomProprietaire = $prenomProprietaire;
        $this->numero = $numero;
        $this->dateFinValidite = $dateFinValidite;
        $this->cryptograme = $cryptograme;
        $this->utilisateur = $utilisateur;
    }

    // Getters and setters for each property
    // ...
}
?>