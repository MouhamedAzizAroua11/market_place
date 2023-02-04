<?php
 require_once('../../connection/Connection.php');
 require_once('../../models/Admin.php');
if(isset($_POST['email'])&&($_POST['password']))
{
    $admin = new Admin();
    $test = $admin->auth($_POST['email'], sha1($_POST['password']));
    if ($test)
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
    echo "invalid parametre";
}

?>