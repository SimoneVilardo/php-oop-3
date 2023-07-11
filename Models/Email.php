<?php
    class Email extends System {
        public $notifica_invio;

        private $allegato;
        static public $colore_led = 'Yellow';

        public function __construct($_mittente, $_destinatario, $_oggetto, $_contenuto, $notifica_invio){

            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto, );
            $this->notifica_invio = $notifica_invio;

        } 
        
        

        public function getNotificaInvio(){
            if($this->notifica_invio === true){
                return 'Email Consegnata';
            }
            else {
                return 'Email Non Consegnata';
            }
        }
        
        public function getInoltro(){
            return 'Inoltra';
        }

        public function getStampa(){
            return 'Stampa';
        }

        public function getAllegato(){
            return $this->allegato;
        }

        public function setAllegato($allegato){
            return $this->allegato = $allegato;
        }
    }
