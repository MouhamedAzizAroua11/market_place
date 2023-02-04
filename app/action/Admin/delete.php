<?php

    require_once ('../../connection/Connection.php');
    require_once ('../../models/Admin.php');
    if(isset($_GET['id']))
    {
        $admin= new Admin();
        if ($admin->delete($_GET['id']))
        {
            echo "Deleting of admin successfully has been completed";  
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