<?php
    require_once "../app/action/Category/all.php";
    require_once "../app/action/Mark/all.php";
?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add new product </h6>
                <form method="POST" action="../app/action/Product/add.php" enctype='multipart/form-data'>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="title" name="title" placeholder="title" />
                        <label for="floatingInput">Title</label>
                    </div>  
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="description" id="description" placeholder="write the description" ></textarea>
                        <label for="floatingPassword">description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="category_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <?php
                                echo "<option></option>";
                                while ($tab = $selectCategoriesList->fetch(PDO::FETCH_ASSOC))
                                {
                                    $id=$tab['id'];
                                    $value=$tab['title'];
                                    echo "<option value='$id'>$value</option>";
                                }
                            ?>    
                        </select>
                        <label for="floatingSelect">Category</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="mark_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <?php
                                echo "<option></option>";
                                while ($tab = $selectListMarks->fetch(PDO::FETCH_ASSOC))
                                {
                                    $id=$tab['id'];
                                    $value=$tab['title'];
                                    echo "<option value='$id'>$value</option>";
                                }
                            ?>
                        </select>
                        <label for="floatingSelect">Mark</label>
                    </div>
                    <div class="mb-3">
                                <label for="formFile" class="form-label" >image</label>
                                <input class="form-control bg-dark" type="file" name="image" id="formFile">
                    </div> 
                    <button type="submit" class="btn btn-primary">Save</button>
                </from>
            </div>
        </div>
    </div>
</div>