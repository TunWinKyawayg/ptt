 <?php require "header.php"?>
           <!-- Main content -->
           <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">
                                    Add General Cost
                                </h1>
                            </div><!-- /.col -->

                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Add General Cost</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
<!--for add-general-cost-->
                <form id="add-general-cost">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="cost">Cost</label>
                            <input type="text" class="form-control" id="cost">
                        </div>
                        <div class="form-group">
                            <label for="enrollDate">Enrolled Date</label>
                            <input type="date" class="form-control" id="enrollDate">
                        </div>                   
                        <div class="form-group">
                            <label>Remark</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success px-4">Add</button>
                        <button type="reset" class="btn btn-outline-danger">Cancel</button>
                    </div>
                </form>
    <!--for add-general-cost-->
                
           <?php require "footer.php"?>