<?php

class System {
        public $suono; 
        private $mittente;
        private $destinatario;
        private $oggetto;
        private $contenuto;

        public function __construct(String $mittente, String $destinatario, String $oggetto, String $contenuto, String $suono){
            $this->mittente = $mittente;
            $this->destinatario = $destinatario;
            $this->oggetto = $oggetto;
            $this->contenuto = $contenuto;
            $this->suono = $suono;
        }
        
        // public function getSuono($suono){
        //     return $this->suono = $suono;
        // }

        public function getMittente(){
            return $this->mittente;
        }

        public function getDestinatario(){
            return $this->destinatario;
        }

        public function getOggetto(){
            return $this->oggetto;
        }

        public function getContenuto(){
            return $this->contenuto;
        }

    }
?>