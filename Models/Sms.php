<?php

    class Sms extends System {

        private $not_lettura;
        public $notifica_risposta;

        static public $colore_led = 'Green';

        public function __construct($_mittente, $_destinatario, $_oggetto, $_contenuto, $not_lettura, $notifica_risposta){

            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto);
            $this->not_lettura = $not_lettura;
            $this->notifica_risposta = $notifica_risposta;
        }     
        

        public function getLettura(){
            return $this->not_lettura;
        }

        public function getNotificaMessaggio(){
            return $this->notifica_risposta; 
             
        }

        public function invio(){
            return 'Messaggio inviato';
        }

        public function risposta(){
            return 'Grazie per avermi risposto';
        }
    }
?>