<?php

    require_once ('../../connection/Connection.php');
    require_once ('../../models/Category.php');
    
    if(isset($_GET['id']))
    {
        $category= new Category();
        if ($category->delete($_GET['id']))
        {
            echo "Deleting of category successfully has been completed";  
        }
        else
        {
            echo "Error of deleting" ;
        }
    }
    else
    {
        echo "error";
    }
?>