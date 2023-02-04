<?php
    require_once "../app/action/Category/all.php";
?>
<script> 
    function del(id) 
    {
        var result = confirm("Do you want to proceed?");
        if (result == true) 
        {
            window.location.assign("../app/action/Category/delete.php?id="+id);
        } 
        else 
        {
            alert("Cancel deleting");
        }    
    }
</script>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">List Catgories</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                            while ($tab = $list->fetch(PDO::FETCH_ASSOC)) 
                            {
                                echo "<tr>";
                                    echo "<td scope='row'>".$tab['id']."</td>";
                                    echo "<td>".$tab['title']."</td>";
                                    echo "<td>".$tab['description']."</td>";
                                    $id = $tab['id'];
                                    echo "<td><a href='mangement_category.php?page=update&id=".$id."'>Update</a></td>";
                                    echo "<td><a href='#' onclick='del($id)'>Delete</a></td>";
                                echo "</tr>";
                            }
                           ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>