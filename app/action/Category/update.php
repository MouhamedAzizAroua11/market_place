<?php
    session_start();
    require_once('../../connection/Connection.php');
    require_once('../../models/Category.php');
    if (isset($_GET['id'])) 
    {
        if ((isset($_POST['title'])) && (isset($_POST['description']))) {
            $category = new Category();
            $category->setTitle($_POST['title']);
            $category->setDescription($_POST['description']);


            if ($category->update($_GET['id'])) {
                echo "good";
            } else {
                echo "Bad";
            }
        } else {
            echo "Error";
        }
    }
    else
    {
        echo "There is no parameter";
    }
?>