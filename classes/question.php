<?php
    require_once '../config/connection.php';

    class Question extends Connection
    {
        public $id;
        public $question;
        public $choice;
        public $answer;
        public $descriptopn;

        public function __construct($id=NULL, $qus='', $des='')
        {
            $this->id = $id;
            $this->question = $qus;
            $this->description = $des;
        }

        function getdataCompet(){
            $seq = "SELECT * FROM questions WHERE $this->id = id";
            $con = $this->connect();
                       
        }
    }
?>