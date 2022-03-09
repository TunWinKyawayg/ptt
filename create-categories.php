 <?php require "header.php"?>
<!-- Main content -->

<!--content-header-->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        Create Categories
                    </h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Categories </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--content-header-->

    <!--for create categories-->
    <form id="create-categories">
        <div class="card-body">
            <div class="form-group">
                <label for="catName"> Name</label>
                <input type="text" class="form-control" id="catName">
            </div>
            <div class="form-group">
                <label for="createdDate">Created Date</label>
                <input type="date" class="form-control" id="createdDate">
            </div>
            <button type="submit" class="btn btn-success px-4">Add</button>
            <button type="reset" class="btn btn-outline-danger">Cancel</button>                  
        </div>
    </form>
    <!--for create categories-->
                
           <?php require "footer.php"?>