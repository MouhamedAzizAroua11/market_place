<?php

    require_once('../../connection/Connection.php');
    require_once('../../models/Category.php');
    
    if((isset($_POST['title'])) && (isset($_POST['description']))
    )
    {
        $category = new Category();
        $category->setTitle($_POST['title']);
        $category->setDescription($_POST['description']);   
        if($category->add() == 1)
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
        echo "You should enter valid input";
    }
?>