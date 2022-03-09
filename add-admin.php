 <?php require "header.php"?>
<!-- Main content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        Add Admin
                    </h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Admin </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!--for add admin -->
      <form>
         <div class="card-body">
            <div class="form-group">
                <label for="adminName"> Name</label>
                <input type="text" class="form-control" id="adminName" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
                
            </div>
            <button type="submit" class="btn btn-success px-4">Add</button>
            <button type="reset" class="btn btn-outline-danger">Cancel</button>
               
        </div>

        <div class="card-footer">
            
        </div>
      </form> 
    <!--for add admin-->
<!--main content
                
<?php require "footer.php"?>