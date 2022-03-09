<?php require "header.php"?>
<!--main content-->
<div class="container">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Customer List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Customer List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header --> 

    <a href="add-customer.php" class="btn btn-secondary btn-sm mb-3" role="button" aria-pressed="true">Add New Customer</a>

    <!-- customer DataTable -->
    <div class="card mx-auto mb-4 border-info">
      <div class="card-header bg-secondary text-white">Customer Table</div>
      <div class="card-body">
        <span id="sucess_message"></span>
        <div class="table-responsive">
          <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
              <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone-number</th>
            <th >Remark</th>
            <th> Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Aung Aung</td>
                <td>Mandalay</td>
                <td>09-----</td>
                <td>Lorem ipsum dolor sit, amet consectetur</td>
                <td><i style="cursor:pointer" class="fas fa-user-edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                <i style="color:red;" class="fas fa-trash-alt ml-2" data-toggle="modal" data-target="#delete"></i></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Tun Tun</td>
                <td>Shwe Bo</td>
                <td>09-----</td>
                <td>Lorem ipsum dolor sit, amet consectetur</td>
                <td><i style="cursor:pointer" class="fas fa-user-edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                <i style="color:red;" class="fas fa-trash-alt ml-2" data-toggle="modal" data-target="#delete"></i></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>KyawKyaw</td>
                <td>Sagaing</td>
                <td>09----</td>
                <td>Lorem ipsum dolor sit, amet consectetur</td>
                
                <td><i style="cursor:pointer" class="fas fa-user-edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                <i style="color:red;"class="fas fa-trash-alt ml-2" data-toggle="modal" data-target="#delete"></i></td>
            </tr>
            </tbody>
            <tfoot>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <!--customer dataTable-->

    
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
                            <label for="recipient-address" class="col-form-label">Address</label>
                            <input type="text" class="form-control" id="recipient-address">
                        </div>
                        <div class="form-group">
                            <label for="recipient-ph" class="col-form-label">Phone Number</label>
                            <input type="phone" class="form-control" id="recipient-ph">
                        </div>
                        <div class="form-group">
                            <label for="recipient-remark" class="col-form-label">Remark</label>
                            <input type="text" class="form-control" id="recipient-remark">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Change</button>
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
     
<?php require "footer.php"?>