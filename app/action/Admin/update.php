<?php
    //session_start();
    require_once('../../connection/Connection.php');
    require_once('../../models/Admin.php');
    if (isset($_GET['id'])) 
    {
        if ((isset($_POST['email'])) && (isset($_POST['fullName'])) && (isset($_POST['isSuperAdmin']))) {
            $admin = new Admin();
            $admin->setEmail($_POST['email']);
            $admin->setFullName($_POST['fullName']);
            $admin->setIssuperadmin($_POST['isSuperAdmin']);


            if ($admin->update($_GET['id'])) {
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