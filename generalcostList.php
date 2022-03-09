<?php require "header.php"?>
<!--main content-->
<div class="container">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>General Cost List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">General Cost List</li>
                    </ol>
                </div>
                
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    
    <a href="add-general-cost.php" class="btn btn-info btn-sm mb-3" role="button" aria-pressed="true">Add New Cost </a>

    <!-- general cost DataTable -->
    <div class="card mx-auto mb-4 border-info">
        <div class="card-header bg-secondary text-white">General Cost Table</div>
        <div class="card-body">
            <span id="sucess_message"></span>
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cost</th>
                            <th scope="col">Enroll Date</th>
                            <th>Remark</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>250000</td>
                            <td>4.12.2021</td>
                            <td>Lorem ipsum dolor sit, amet consectetur</td>
                            <td><i style="cursor:pointer" class="fas fa-user-edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                            <i style="color:red;" class="fas fa-trash-alt ml-2" data-toggle="modal" data-target="#delete"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>300000</td>
                            <td>1.1.2022</td>
                            <td>Lorem ipsum dolor sit, amet consectetur</td>
                            <td><i style="cursor:pointer" class="fas fa-user-edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                            <i style="color:red;" class="fas fa-trash-alt ml-2" data-toggle="modal" data-target="#delete"></i></td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!--categories dataTable-->
    
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
                <label for="recipient-cost" class="col-form-label">Cost</label>
                <input type="text" class="form-control" id="recipient-cost">
            </div>
            <div class="form-group">
                <label for="recipient-edate" class="col-form-label">Enroll Date</label>
                <input type="date" class="form-control" id="recipient-edate">
            </div>
            <div class="form-group">
                <label for="recipient-remark" class="col-form-label">Remark</label>
                <input type="text" class="form-control" id="recipient-remark">
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