<?php
    class company {
        var $nama;
        function method($namaa) {
            $this->nama->$namaa;
        }

        public function setNama($namaa){
            $this->nama=$namaa;
        }

        public function getNama(){
            return $this->nama;
        }
    }
?>