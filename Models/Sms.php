<?php

    class Sms extends System {
        private $risposta;
        private $not_lettura;
        public $notifica_risposta;

        static public $colore_led = 'Green';

        public function __construct($_mittente, $_destinatario, $_oggetto, $_contenuto, $risposta, $not_lettura, $notifica_risposta){

            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto);
            $this->risposta = $risposta;
            $this->not_lettura = $not_lettura;
            $this->notifica_risposta = $notifica_risposta;
        }     
        
        public function getRisposta(){
            return $this->risposta;
        }

        public function getLettura(){
            return $this->not_lettura;
        }

        public function getNotificaMessaggio(){
            if($this->notifica_risposta === true){
                return '<i class="fa-solid fa-check-double" style="color: #2495ff;"></i>';
            }
            else {
                return '<i class="fa-solid fa-check-double" style="color: #000;"></i>';
            }
        }
    }
?>