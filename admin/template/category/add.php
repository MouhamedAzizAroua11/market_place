 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add new Category</h6>
                <form method="POST" action="../app/action/Category/add.php">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="title" name="title" placeholder="title" />
                        <label for="floatingInput">Title</label>
                    </div>  
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="description" id="description" placeholder="write the description" ></textarea>
                        <label for="floatingPassword">description</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </from>
            </div>
        </div>
    </div>
</div>