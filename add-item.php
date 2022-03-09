 <?php require "header.php"?>
           <!-- Main content -->
           <div class="content-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 class="m-0">
                                    Add Item
                                </h1>
                            </div><!-- /.col -->
                            
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Add Item </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
<!--for add item-->
                <form id="add-item">
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="categories">Company Name</label>
                                <select id="categories" name="categories" class="form-control" aria-label="categories">
                                    <option selected>Chose Company Name</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab 95</option>
                                    <option value="mercedes">Mercedes SLK</option>
                                    <option value="audi">Audi TT</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="categories">Categories</label>
                                <select id="categories" name="categories" class="form-control" aria-label="categories">
                                    <option selected>Chose Categories</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab 95</option>
                                    <option value="mercedes">Mercedes SLK</option>
                                    <option value="audi">Audi TT</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="itemName">Item Name</label>
                                <input type="text" class="form-control" id="itemName">
                                </div> 
                            </div>
                            <div class="col-md-4">
                                    <label for="code">Code</label>
                                    <input type="text" class="form-control" id="code">
                            </div>                        
                            <!-- <div class="col-4">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" id="quantity">
                            </div> -->
                            <div class="col-md-4">
                                <label for="unit">Unit</label>
                                <input type="text" class="form-control" id="unit">
                            </div>
                            
                        </div>
                        <div class="row form-group">
                            <div class="col-4">
                                <label for="price">Purchase Price</label>
                                <input type="text" class="form-control" id="price">
                            </div>
                            <div class="col-4">
                                <label for="retail">Retail Price</label>
                                <input type="text" class="form-control" id="retail">
                            </div>
                            <div class="col-4">
                                    <label for="wholeSale">Wholesale Price</label>
                                    <input type="text" class="form-control" id="wholeSale">
                            </div>
                        
                        </div>

                        <div class="row form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success px-4">Add</button>
                        <button type="reset" class="btn btn-outline-danger">Cancel</button>
                    </div>
                </form>
                <!--for add item-->
                
           <?php require "footer.php"?>