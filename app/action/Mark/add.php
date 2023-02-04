<?php


    require_once('../../connection/Connection.php');
    require_once('../../models/mark.php');
    if((isset($_POST['title'])) && (isset($_POST['description'])))
    {
        $mark = new Mark();
        $mark->setTitle($_POST['title']);
        $mark->setDescription($_POST['description']);
        //$mark->setImage($_FILES['image']['name']);
        if($mark->add() == 1)
        {
            echo "good";
        }
        else
        {
            echo "bad";
        }
    }
    else
    {
        echo "Error there are";
    }
?>