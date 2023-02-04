<?php

    require_once('../../connection/Connection.php');
    require_once('../../models/Product.php');

    
    if((isset($_POST['title'])) && (isset($_POST['description'])) && (isset($_FILES['image']["name"])) && (isset($_POST['mark_id']))&&(isset($_POST['category_id'])))
    {
        $product = new Product();
        $product->setTitle($_POST['title']);
        $product->setDescription($_POST['description']);
        $product->setImage($_FILES['image']["name"]);
        $product->setMark_id(($_POST['mark_id'])); 
        $product->setCategory_id($_POST['category_id']);
        if($product->add() == 1)
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