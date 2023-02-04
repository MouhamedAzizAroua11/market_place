<?php

    require_once ('../../connection/Connection.php');
    require_once ('../../models/Mark.php');
    
    if(isset($_GET['id']))
    {
        $mark= new Mark();
        if ($mark->delete($_GET['id']))
        {
            echo "Deleting of mark successfully has been completed";  
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