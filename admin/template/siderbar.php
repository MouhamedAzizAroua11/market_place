<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;" />
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link active">
                <i class="fa fa-tachometer-alt me-2"></i>
                Dashboard
            </a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>
                    Category
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="mangement_category.php?page=add" class="dropdown-item">Add</a>
                    <a href="mangement_category.php?page=list" class="dropdown-item">List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>
                    Product
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="mangement_product.php?page=add" class="dropdown-item">add</a>
                    <a href="mangement_product.php?page=list" class="dropdown-item">List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-keyboard me-2"></i>
                    Mark
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="mangement_mark.php?page=add" class="dropdown-item">
                        Add
                    </a>
                    <a href="mangement_mark.php?page=list" class="dropdown-item">
                        List
                    </a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-table me-2"></i>Admin</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="mangement_admin.php?page=add" class="dropdown-item">
                            Add
                        </a>
                        <a href="mangement_admin.php?page=list" class="dropdown-item">
                            List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>