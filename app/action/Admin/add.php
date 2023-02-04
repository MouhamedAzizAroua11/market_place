<?php

    require_once('../../connection/Connection.php');
    require_once('../../models/Admin.php');

    if((isset($_POST['email'])) && (isset($_POST['fullName'])) && (isset($_POST['isSuperAdmin'])) && (isset($_FILES['photo']['name']) && (isset($_POST['password']))))
    {
        $admin = new Admin();
        $admin->setEmail($_POST['email']);
        $admin->setFullName($_POST['fullName']);
        $admin->setIssuperadmin($_POST['isSuperAdmin']);
        $admin->setPassword(sha1($_POST['password']));
        // $admin->setPhoto((isset($_POST['img_submit']))
        //     $img_name = $_FILES['img_upload']['name'];
        //     $tmp_img_name = $_FILES['img_upload']['tmp_name'];
        //     $folder = 'image/';
        //     move_uploaded_file($tmp_img_name,$folder.$img_name);
        //     echo "<script>alert('Inserted');</script>";
        
        // }); 
        if($admin->add() == 1)
        {
            echo "good";
            // $session = new Session();
            // $session->connect($admin->getEmail(),$admin->getFullName(),'../../../Admin/index.php',3600);
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