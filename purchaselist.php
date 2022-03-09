<?php require "header.php"?>

<!--main content-->
<div class="container">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Purchase Table</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Purchase Table</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <a href="addpurchase.php" class="btn btn-info btn-sm mb-3" role="button" aria-pressed="true">Add New Purchase</a>

    <!-- purchase DataTable -->
    <div class="card mx-auto mb-4 border-info">
        <div class="card-header bg-secondary text-white">Purchase Table</div>
        <div class="card-body">
            <span id="sucess_message"></span>
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Item</th>
                            <th scope="col">Purchase Amount</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Purchase Date</th>
                            <th scope="col">Remark</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Awba</td>
                            <td>AAAA</td>
                            <td>80500</td>
                            <td>1200</td>
                            <td>  2/3/2021 </td>
                            <td>This is good</td>
                            <td class="justify-content-between">
                                <i class="fas fa-edit text-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                                <i class="fas fa-trash-alt ml-2 text-danger" data-toggle="modal" data-target="#delete"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Commet</td>
                            <td>AAAA</td>
                            <td>80500</td>
                            <td>1200</td>
                            <td>  2/3/2021 </td>
                            <td>This is good</td>
                            <td class="justify-content-between">
                                <i class="fas fa-edit text-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                                <i class="fas fa-trash-alt ml-2 text-danger" data-toggle="modal" data-target="#delete"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Shwe Nagar</td>
                            <td>AAAA</td>
                            <td>80500</td>
                            <td>1200</td>
                            <td>  2/3/2021 </td>
                            <td>This is good</td>
                            <td class="justify-content-between">
                                <i class="fas fa-edit text-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i>
                                <i class="fas fa-trash-alt ml-2 text-danger" data-toggle="modal" data-target="#delete"></i>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!--purchased dataTable--> 
    
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
                <label for="recipient-cname" class="col-form-label">Company Name</label>
                <input type="text" class="form-control" id="recipient-cname">
            </div>
            <div class="form-group">
                <label for="recipient-item" class="col-form-label">Item</label>
                <input type="text" class="form-control" id="recipient-item">
            </div>
            <div class="form-group">
                <label for="recipient-pamount" class="col-form-label">Purchase Amount</label>
                <input type="text" class="form-control" id="recipient-pamount">
            </div>
            <div class="form-group">
                <label for="recipient-discount" class="col-form-label">Discount</label>
                <input type="text" class="form-control" id="recipient-discount">
            </div>
            <div class="form-group">
                <label for="recipient-pdate" class="col-form-label">Purchase Date</label>
                <input type="date" class="form-control" id="recipient-pdate">
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
<!--main content-->
<?php require "footer.php"?>
