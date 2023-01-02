<?php
    require_once '../config/connection.php';

    class Question extends Connection
    {
        public $id ;
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

        function getdataCompet()
        {
            $sql = "SELECT * FROM question ";
            $conn = Connection::connect();
            $stmt = $conn->prepare($sql); 
            $stmt->execute();   
            $arr =  $stmt->fetchAll(PDO::FETCH_ASSOC);
                echo '<pre> ';
                var_dump($arr);
                echo ' </pre>';
        } 
    }
?>