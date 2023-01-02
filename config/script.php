<?php
require_once '../classes/user.php';
require_once '../classes/question.php';

    if(isset($_POST['start'])) $obj->getData();

    $qst = new Question();
   $data = $qst->getdataCompet();
   var_dump($data);
   die;
?>