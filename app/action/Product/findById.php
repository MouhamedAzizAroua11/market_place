<?php

    $product = new Product();
    $data = $product->findById($_GET['id']);
    $data = $data->fetch(PDO::FETCH_ASSOC);
    $category = new Category();
    $mark = new Mark();
    $category = $category->findById($data['category_id']);
    $mark = $mark->findById($data['mark_id']);
    $category=$category->fetch(PDO::FETCH_ASSOC);
    $mark=$mark->fetch(PDO::FETCH_ASSOC);

?>