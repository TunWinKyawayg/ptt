<?php require "header.php"?>
<!--main content-->
<div class="container">

     <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Company List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Company List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-header -->

        <button class="btn btn-secondary btn-sm mb-3" data-toggle="modal" data-target="#addModal" data-whatever="@getbootstrap">Add New Company</button>

    <!-- company DataTable -->
    <div class="card mx-auto mb-4 border-info">
      <div class="card-header bg-secondary text-white">Company Table</div>
      <div class="card-body">
        <span id="sucess_message"></span>
        <div class="table-responsive">
          <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
              <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Company Name</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Awba</td>
                <td>5.12.2021</td>
                <td><i style="cursor:pointer" class="fas fa-edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                <i style="color:red;" class="fas fa-trash-alt ml-2" data-toggle="modal" data-target="#delete"></i></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Awba</td>
                <td>5.12.2021</td>
                <td><i style="cursor:pointer" class="fas fa-edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                <i style="color:red;" class="fas fa-trash-alt ml-2" data-toggle="modal" data-target="#delete"></i></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Awba</td>
                <td>5.12.2021</td>
                <td><i style="cursor:pointer" class="fas fa-edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                <i style="color:red;" class="fas fa-trash-alt ml-2" data-toggle="modal" data-target="#delete"></i></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Awba</td>
                <td>5.12.2021</td>
                <td><i style="cursor:pointer" class="fas fa-edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                <i style="color:red;" class="fas fa-trash-alt ml-2" data-toggle="modal" data-target="#delete"></i></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Awba</td>
                <td>5.12.2021</td>
                <td><i style="cursor:pointer" class="fas fa-edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                <i style="color:red;" class="fas fa-trash-alt ml-2" data-toggle="modal" data-target="#delete"></i></td>
            </tr>
            </tbody>
            <tfoot>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <!--company dataTable-->

        <!-- add company model -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Add Company</h5>
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
                                <label for="recipient-name" class="col-form-label">Date</label>
                                <input type="date" class="form-control" id="recipient-name">
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add company model -->

        <!-- edit modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Company</h5>
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
                    <label for="recipient-name" class="col-form-label">Date</label>
                    <input type="date" class="form-control" id="recipient-email">
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
</div>
<!--main content-->
<?php require "footer.php"?>