<?php 
    class User {
        $email;
        $nom;
        $prenom;
        $age;
        public function __construct($email, $nom, $prenom, $age)
        {
            $this->$email = $email;
            $this->$nom = $nom;
            $this->$prenom = $prenom;
            $this->$age = $age;
        }
    }