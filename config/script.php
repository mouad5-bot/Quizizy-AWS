<?php
require_once '../classes/user.php';
require_once '../classes/question.php';

    if(isset($_GET['questions'])) getQuestionAsJson();

    function getQuestionAsJson()
    {
        $objconn = new Connection();

        $allData = "SELECT * FROM questions";
        $conn = $objconn->connect();
        $stmt = $conn->prepare($allData); 
        $stmt->execute();   
        $arr =  $stmt->fetchAll(PDO::FETCH_ASSOC);
        $jsonn;
        for($i=0; $i<count($arr); $i++){
            $qst = new Question($arr[$i]['id'], $arr[$i]['question'], $arr[$i]['description']);
            $jsonn[]= $qst->getdataCompet();
        }

        echo json_encode($jsonn);
    }
?>