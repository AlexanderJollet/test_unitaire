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
        public function verifNames() {
            return !empty($this->prenom) && !empty($this->nom);
        }
    
        public function verifEmail(filter_var($email, FILTER_VALIDATE_EMAIL) {
            return !empty($this->email);
        }
    
        public function verifAge() {
            return !empty($this->age) && $this->age >= 13;
        }

        public function isValid(){
            return $this->verifNames() && $this->verifEmail() && $this->verifAge();
        }

        public function setEmail($email) {
            $this->email = $email;
        }
        public function setNom($nom) {
            $this->nom = $nom;
        }

        public function setPrenom($prenom) {
            $this->prenom = $prenom;
        }        
    
        public function setAge($age) {
            $this->age = $age;
        }
    }