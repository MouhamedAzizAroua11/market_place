<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add new Admin</h6>
                <form action="../app/action/Admin/add.php" method="POST" enctype='multipart/form-data'>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" name="fullName" placeholder="Full name" />
                        <label for="floatingPassword">Full Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="isSuperAdmin" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Is super Admin </option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                        <label for="floatingSelect">Selects</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">image</label>
                        <input class="form-control bg-dark" type="file" id="photo" name="photo" />
                    </div> 
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>