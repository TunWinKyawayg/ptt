 <?php require "header.php"?>
           <!-- Main content -->
           <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">
                                    Add Salary
                                </h1>
                            </div><!-- /.col -->

                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Add Salary</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
<!--for add salary-->
                <form id="add-salary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="reason"> Reason</label>
                                    <input type="text" class="form-control" id="reason">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="paidDate">Paid Date</label>
                                    <input type="date" class="form-control" id="paidDate">
                                </div>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="amount"> Amount</label>
                            <input type="text" class="form-control" id="amount">
                        </div>
                        <div class="form-group">
                            <label>Remark</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success px-4">Add</button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </div>
                </form>
                <!--for add salary-->
                
           <?php require "footer.php"?>