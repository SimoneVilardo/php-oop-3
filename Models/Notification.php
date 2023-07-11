<?php

    class Notification extends System {
        private $icona;
        static public $colore_led = 'White';

        public function __construct($_mittente, $_destinatario, $_oggetto, $_contenuto, $icona){

            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto);
            $this->icona = $icona;
        }     
        
        public function getIcona(){
            return $this->icona;
        }
    }
?>