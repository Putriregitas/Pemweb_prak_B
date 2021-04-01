<?php

    class Bola {
        private $r;

        public function setJari($jari){
            $this->r = $jari;
        }

        public function getJari(){
            return $this->r;
        }

        public function getluas(){
            $hasilLuas = 0;
            $hasilLuas = 4*3.14*$this->r*$this->r;
            return $hasilLuas;
        }

        public function getVolume(){
            $hasilVolum = 0;
            $hasilVolum = 4/3*3.14*$this->r*$this->r*$this->r;
            return $hasilVolum;
        }
    }
?>