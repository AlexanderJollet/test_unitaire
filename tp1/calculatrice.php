<?php 
    class Calculatrice {
        public function __construct()
        {
            
        }
    
        public function add($a = 5, $b = 5){
           $c =  $a + $b;
           return $c;
        }

        public function sous($a = 5, $b = 5){
            $c =  $a - $b;
            return $c;
        }
        
        public function multi($a = 5, $b = 5){
            $c =  $a * $b;
            return $c;
        }

        public function div($a = 5, $b = 5){
            $c =  $a / $b;
            return $c;
        }
    }

?>
