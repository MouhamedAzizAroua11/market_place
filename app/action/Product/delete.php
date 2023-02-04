<?php

    require_once ('../../connection/Connection.php');
    require_once ('../../models/Product.php');
    
    if(isset($_GET['id']))
    {
        $product= new Product();
        if ($product->delete($_GET['id']))
        {
            echo "Deleting of product successfully has been completed";  
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