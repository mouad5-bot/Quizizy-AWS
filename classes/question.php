<?php
    require_once '../config/connection.php';

    class Question extends Connection
    {
        public $id ;
        public $question;
        public $choices = [];
        public $answer;
        public $description;

        public function __construct($id, $qus, $des)
        {
            $this->id = $id;
            $this->question = $qus;
            $this->description = $des;
        }

        function getdataCompet()
        {
            $sql = "SELECT * FROM choices WHERE $this->id = id_ques";
            $conn = Connection::connect();
            $stmt = $conn->prepare($sql); 
            $stmt->execute();   
            $arr =  $stmt->fetchAll(PDO::FETCH_ASSOC);

            for($i=0; $i < count($arr); $i++)
            {
                $this->choices[]= $arr[$i]['choices'];
                if($arr[$i]['isCorrect'] == 1)
                {
                    $this->answer = $i;
                }
            }
            return $this;     
        } 
    }

?>