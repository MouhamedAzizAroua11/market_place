<?php
    session_start();
    require_once('../../connection/Connection.php');
    require_once('../../models/Mark.php');
    if(isset($_GET['id']))
    {
        if((isset($_POST['title']))&& (isset($_POST['description']) ))
        {
            $mark = new Mark();
            $mark->setTitle($_POST['title']);
            $mark->setDescription($_POST['description']);
            if($mark->update($_GET['id']))
            {
                echo "good";
            }
            else
            {
                echo "Bad";
            }
        }
        else
        {
            echo "Error";
        }
    }
    else
    {
        echo "There is no parameter";
    }
?>