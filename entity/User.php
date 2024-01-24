<?php
namespace fr\ensitech\tpjsf\entity;

class User {
    private $id;
    private $type;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $dateNaissance;

    // Getter pour l'ID
    public function getId() {
        return $this->id;
    }

    // Setter pour l'ID
    public function setId($id) {
        $this->id = $id;
    }

    // Getter pour le type
    public function getType() {
        return $this->type;
    }

    // Setter pour le type
    public function setType($type) {
        $this->type = $type;
    }

    // Getter pour le nom
    public function getNom() {
        return $this->nom;
    }

    // Setter pour le nom
    public function setNom($nom) {
        $this->nom = $nom;
    }

    // Getter pour le prénom
    public function getPrenom() {
        return $this->prenom;
    }

    // Setter pour le prénom
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    // Getter pour l'email
    public function getEmail() {
        return $this->email;
    }

    // Setter pour l'email
    public function setEmail($email) {
        $this->email = $email;
    }

    // Getter pour le mot de passe
    public function getPassword() {
        return $this->password;
    }

    // Setter pour le mot de passe
    public function setPassword($password) {
        $this->password = $password;
    }

    // Getter pour la date de naissance
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    // Setter pour la date de naissance
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }
}
