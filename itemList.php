<?php require "header.php"?>
<!--main content-->
<div class="container-fluid">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Item List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Item List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
            
    <a href="add-item.php" class="btn btn-info btn-sm mb-3" role="button" aria-pressed="true">Add New Item</a>

    <!-- Item DataTable -->
    <div class="card mx-auto mb-4 border-info">
        <div class="card-header bg-secondary text-white">Item Table</div>
        <div class="card-body">
            <span id="sucess_message"></span>
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Canpany Name</th>
                        <th scope="col">Categories</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Code</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Purchase Price</th>
                        <th scope="col">Retail Price</th>
                        <th scope="col">Wholesale Price</th>
                        <th scope="col">Description</th>
                        <th>Action</th>
                        <th>Available</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Awaba</td>
                            <td>paung that say</td>
                            <td>tat toe 1578</td>
                            <td>tt001</td>
                            <td>bag</td>
                            <td>50000</td>
                            <td>55000</td>
                            <td>53000</td>
                            <td>.....</td>
                            <td><i style="cursor:pointer" class="fas fa-user-edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                            <i style="color:red;" class="fas fa-trash-alt ml-2" data-toggle="modal" data-target="#delete"></i></td>
                            <td><input type="checkbox" class="ml-1 bordered border-1 form-check-input" name="" id=""></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Awaba</td>
                            <td>paung that say</td>
                            <td>tat toe 1578</td>
                            <td>tt001</td>
                            <td>bag</td>
                            <td>50000</td>
                            <td>55000</td>
                            <td>53000</td>
                            <td>.....</td>
                            <td><i style="cursor:pointer" class="fas fa-user-edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                            <i style="color:red;" class="fas fa-trash-alt ml-2" data-toggle="modal" data-target="#delete"></i></td>
                            <td><input type="checkbox" class="ml-1 bordered border-1 form-check-input" name="" id=""></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Awaba</td>
                            <td>paung that say</td>
                            <td>tat toe 1578</td>
                            <td>tt001</td>
                            <td>bag</td>
                            <td>50000</td>
                            <td>55000</td>
                            <td>53000</td>
                            <td>.....</td>
                            <td><i style="cursor:pointer" class="fas fa-user-edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                            <i style="color:red;" class="fas fa-trash-alt ml-2" data-toggle="modal" data-target="#delete"></i></td>
                            <td><input type="checkbox" class="ml-1 bordered border-1 form-check-input" name="" id=""></td>
                        </tr>
                        
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!--item dataTable-->
    
        <!--edit modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Name</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-code" class="col-form-label">Code</label>
                    <input type="text" class="form-control" id="recipient-code">
                </div>
                <div class="form-group">
                    <label for="recipient-quantity" class="col-form-label">Quantity</label>
                    <input type="number" class="form-control" id="recipient-quantity">
                </div>
                <div class="form-group">
                    <label for="recipient-unit" class="col-form-label">Unit</label>
                    <input type="text" class="form-control" id="recipient-unit">
                </div>
                <div class="form-group">
                    <label for="recipient-pprice" class="col-form-label">Purchase Price</label>
                    <input type="text" class="form-control" id="recipient-pprice">
                </div>
                <div class="form-group">
                    <label for="recipient-retail" class="col-form-label">Retail%</label>
                    <input type="text" class="form-control" id="recipient-retail">
                </div>
                <div class="form-group">
                    <label for="recipient-wholesale" class="col-form-label">Wholesale%</label>
                    <input type="text" class="form-control" id="recipient-wholesale">
                </div>
                <div class="form-group">
                    <label for="recipient-des" class="col-form-label">Description</label>
                    <input type="text" class="form-control" id="recipient-des">
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
            </div>
        </div>
        </div>
        <!--edit modal-->


        <!--delete Modal -->
        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLable" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteLable">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               Sure?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Ok</button>
            </div>
            </div>
        </div>
        </div>
        <!--delete modal-->
</div>
<!--main content-->

<?php require "footer.php"?>