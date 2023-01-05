<?php 
require_once '../config/connection.php';

    class User extends Connection
    {
        public $id ;
        public $fname ;
        public $lname ; 
        public $score ; 
        
        public function __construct ($fn="" , $ln="" , $sco ="")
        {
            $this->id        = NULL;
            $this->firstName = $fn;
            $this->lasttName = $ln;
            $this->score  = $sco;
        }

        public function setFirstName($fn){
            $this->fname = $fn;
        }
        public function setLastName($ln){
            $this->lname = $ln;
        }
        public function setScore($sco){
            $this->score = $sco;
        }

        public function getFirstName(){
            return $this->fname;
        }
        public function getLastName(){
            return $this->lname;
        }
        public function getPassword(){
            return $this->score;
        }
    }
?>