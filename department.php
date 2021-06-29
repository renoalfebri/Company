<?php
    class department {
        var $dnama;
        function method($dnamaa) {
            $this->dnama->$dnamaa;
        }

        public function setdNama($dnamaa){
            $this->dnama=$dnamaa;
        }

        public function getdNama(){
            return $this->dnama;
        }
    }
?>