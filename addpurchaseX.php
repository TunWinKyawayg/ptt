<?php require "header.php"?>
<!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                         <h1>Add Purchase</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Add Purchase</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
<div class="container">

        <div class="mb-3">
            <form class="row">
                <div class="col-md-6 ms-5">
                    <label for="cusname">Company Name</label>
                    <select class="selectpickerv form-control">
                        <option selected>Chose Company Name</option>
                        <option value="1">Shwe Nagar</option>
                        <option value="2">Awba</option>
                        <option value="3">Min Ma Haw</option>
                        <option value="2">Wi Sar Ra</option>
                    </select>
                </div>   
                <div class="col-md-6">
                    <label for="saleDate" class="form-label">Purchase Date</label>
                    <input type="date" class="form-control" id="saleDate">
                </div>
            </form>
            <form class="row">
                <div class="col-md-6 ms-5">
                    <label for="cusname">Categories</label>
                    <select class="selectpickerv form-control">
                        <option selected>Chose Categorie</option>
                        <option value="1">1111111111</option>
                        <option value="2">2222222222</option>
                        <option value="3">333333333</option>
                        <option value="2">4444444444</option>
                    </select>
                </div>   
                <div class="col-md-6 ms-5">
                    <label for="cusname">Item</label>
                    <select class="selectpickerv form-control">
                         <option selected>Chose Item</option>
                        <option value="1">1111111111</option>
                        <option value="2">2222222222</option>
                        <option value="3">333333333</option>
                        <option value="2">4444444444</option>
                    </select>
                </div>   
            </form>
            <form class="row">
                <div class="col-md-6">
                    <label for="Discount" class="form-label">Discount</label>
                    <input type="text" class="form-control" id="Discount">
                </div>
                <div class="col-md-6">
                     <label for="remark" class="form-label">Remark</label>
                     <textarea class="form-control"></textarea>
                </div>
            </form>
            <form class="row">
                <div class="col-md-2">
                    <input type="button" class="btn btn-success w-100" value="+ Add">
                </div>
                <div class="col-md-2">
                    <input type="button" class="btn btn-outline-danger w-100" value="Cancle">
                </div>
                <div class="col-md-4">    
                </div> 
                <div class="col-md-4">    
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-md-12 mb-3 mt-5">
                <table class="table table-bordered bg-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Item</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Purchase Amount</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Purchase Date</th>
                            <th scope="col">Remark</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <th scope="row">1</th>
                            <td>Awba</td>
                            <td>AAAA</td>
                            <td>4</td>
                            <td>56000</td>
                            <td>3000</td>
                            <td>21.5.2021</td>
                            <td>This is good</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Shwe Nagar</td>
                            <td>AAAA</td>
                            <td>3</td>
                            <td>43000</td>
                            <td>1500</td>
                            <td>24.8.2021</td>
                            <td>This is good</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Commet</td>
                            <td>AAAA</td>
                            <td>5</td>
                            <td>50000</td>
                            <td>2500</td>
                            <td>8.6.2022</td>
                            <td>This is good</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- <div class="col-md-3 d-flex align-items-center">
                <div class="mx-auto px-2">
                    <h2 class='text-center'>Items</h2>
                    <select class="form-control mb-3" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <select class="form-control mb-3" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <input type="button" class="btn btn-info w-100 mb-3 " value="+ Add">
                </div>
            </div> -->

        </div>

        <div class="row">
            <div class="col-md-6">

            </div>
            <divb class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Amount Due 2/22/2021</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <b>
                                <td>Subtotal:</td>
                            </b>
                            <td>65000</td>
                        </tr>
                        <tr>
                            <b>
                                <td>Tax(9.3%)</td>
                            </b>
                            <td>5000</td>
                        </tr>
                        <tr>
                            <b>
                                <td>Shipping</td>
                            </b>
                            <td>2900</td>
                        </tr>
                        <tr>
                            <b>
                                <td>Total</td>
                            </b>
                            <td>72900</td>
                        </tr>
                    </tbody>
                </table>
                <div style="margin-left: 210px;">
                    <button type="submit" class="btn btn-primary">Genrate PDF</button>
                    <button type="submit" class="btn btn-success">Submit Payment</button>
                </div>
            </div>
        </div>
</div>
<?php require "footer.php"?>