<?php

    $mark = new Mark();
    $data = $mark->findById($_GET['id']);
    $data = $data->fetch(PDO::FETCH_ASSOC);

?>