<?php require "header.php"?>
<!-- Main content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        Add Customer
                    </h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Customer </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!--for add customer-->                                           
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="customerName"> Name</label>
                <input type="text" class="form-control" id="customerName" >
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Enter address">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
            </div>
            <div class="form-group">
                <label>Remark</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success px-4">Add</button>
            <button type="reset" class="btn btn-outline-danger">Cancel</button>
        </div>     
    </form>
    <!--for add customer-->
<!--main content-->
                
<?php require "footer.php"?>