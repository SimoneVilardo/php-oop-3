<?php

    class Sms extends System {
        private $risposta;
        private $not_lettura;

        public function __construct($_mittente, $_destinatario, $_oggetto, $_contenuto, $risposta, $not_lettura){

            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto);
            $this->risposta = $risposta;
            $this->not_lettura = $not_lettura;
        }     
        
        public function getRisposta(){
            return $this->risposta;
        }

        public function getLettura(){
            return $this->not_lettura;
        }
    }
?>