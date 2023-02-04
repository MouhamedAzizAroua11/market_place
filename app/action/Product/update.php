<?php
    require_once('../../connection/Connection.php');
    require_once('../../models/Product.php');
    if (isset($_GET['id'])) 
    {
        if (
            (isset($_POST['title'])) && (isset($_POST['description'])) && (isset($_POST['mark_id']))
            && (isset($_POST['category_id']))
        ) 
        {
            $product = new Product();
            $product->setTitle($_POST['title']);
            $product->setDescription($_POST['description']);
            // $product->setMark_id(($_POST['mark_id']));
            // $product->setCategory_id($_POST['category_id']);

            $product->setMark_id($_POST['mark_id']);
            $product->setCategory_id($_POST['category_id']);

            if ($product->update($_GET['id'])) 
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