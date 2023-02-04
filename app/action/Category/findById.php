<?php

    $category = new Category();
    $data = $category->findById($_GET['id']);
    $data = $data->fetch(PDO::FETCH_ASSOC);

?>