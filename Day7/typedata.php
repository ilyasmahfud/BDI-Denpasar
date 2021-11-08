<?php
    class Mahasiswa {
        public $name;

        public function setName($newName) {
            $this->name = $newName;
        }
        
        public function getName() {
            return $this->name;
        }
    }
?>