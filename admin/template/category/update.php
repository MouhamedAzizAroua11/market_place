<?php
    require_once "../app/action/Category/findById.php";
?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Update this category</h6>
                <form method="POST" action="../app/action/Category/update.php?id=<?php echo $data['id'] ?>">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="title" name="title" placeholder="title" value="<?php echo $data['title'] ?>" />
                        <label for="floatingInput">Title</label>
                    </div>  
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="description" id="description" placeholder="write the description"><?php echo $data['description'] ?></textarea>
                        <label for="floatingPassword">description</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </from>
            </div>
        </div>
    </div>
</div>