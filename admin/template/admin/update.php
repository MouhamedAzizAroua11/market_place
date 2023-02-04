<?php
    require_once "../app/action/Admin/findById.php";
?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Update this category</h6>
                <form method="POST" action="../app/action/Admin/update.php?id= <?php echo $data['id'] ?>">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?php echo $data['email'] ?>" />
                        <label for="floatingInput">Email</label>
                    </div>  
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="fullName" id="fullName" placeholder="write the fullName"><?php echo $data['fullName'] ?></textarea>
                        <label for="floatingPassword">description</label>
                    </div>
                    <div class="mb-3">
                                <label for="formFile" class="form-label">image</label>
                                <input class="form-control bg-dark" type="file" id="formFile">
                    </div> 
                    <button type="submit" class="btn btn-primary">Save</button>
                </from>
            </div>
        </div>
    </div>
</div>