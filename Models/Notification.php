<?php

    class Notification extends System {
        private $visibile;
        private $icona;
        static public $colore_led = 'White';

        public function __construct($_mittente, $_destinatario, $_oggetto, $_contenuto, $visibile, $icona){

            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto);
            $this->icona = $icona;
            $this->visibile = $visibile;
        }     
        
        public function getIcona(){
            return $this->icona;
        }

        public function getVisibilita(){
            return $this->visibile;
        }

        public function invio(){
            return 'Notifica inviata';
        }

        public function onClick(){
            return 'Apro l\'applicazione collegata al bottone';
        }
    }
?>