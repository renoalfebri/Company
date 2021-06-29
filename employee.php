<?php
    class employee{
        var $enama;
        var $title;
        var $salary;
        function method($enamaa) {
            $this->enama->$enamaa;
        }

        public function seteNama($enamaa){
            $this->enama=$enamaa;
        }

        public function geteNama(){
            return $this->enama;
        }

        public function setTitle($titlee){
            $this->title=$titlee;
        }

        public function getTitle(){
            return $this->title;
        }

        public function setSalary($salaryy){
            $this->salary=$salaryy;
        }

        public function getSalary(){
            return $this->salary;
        }
    }
?>