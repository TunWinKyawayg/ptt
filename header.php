<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pyit Tine Taung</title>
    <link rel="shortcut icon" href="dist/img/PTTimg.png" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="dist/css/fallback.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="./plugins/ionicons/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!--data Table-->
    <link rel="stylesheet" href="dist/css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/PTTimg.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                
                    <!-- <div class="input-group">
                        
                            <input id="search-input" type="search" id="form1" class="form-control" placeholder="Search">
                         
                          <a hrfe="" class="d-flex justify-centent-center align-items-center bg-secondary p-2"><i class="fas fa-search fa-sm"></i></a> 
                        
                        
                         
                    </div>
                    -->
                
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-danger navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/PTTimg.png" alt="ptt Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light" style="color:yellow;">ပစ်တိုင်းထောင်</span>
            </a>
        
            <!-- Sidebar -->
            <div class="sidebar">
        
                <!-- Sidebar Menu starts-->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
                        <!--admin-->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Admins
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="add-admin.php" class="nav-link active">
                                        <i class="fas fa-user-plus nav-icon"></i>
                                        <p>Add Admin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="adminList.php" class="nav-link">
                                        <i class="fas fa-list nav-icon"></i>
                                        <p>Admin List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--admin-->
        
                        <!--customer -->
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Customers
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="add-customer.php" class="nav-link active">
                                        <i class="fas fa-user-plus nav-icon"></i>
                                        <p>Add Customer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="customerList.php" class="nav-link">
                                        <i class="fas fa-list nav-icon"></i>
                                        <p>Customer List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--customer-->
        
                        <!--Categories -->
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>
                                    Categories
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="create-categories.php" class="nav-link active">
                                        <i class="fas fa-plus-square nav-icon"></i>
                                        <p>Create Categories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="categoriesList.php" class="nav-link">
                                        <i class="fas fa-list-alt nav-icon"></i>
                                        <p>Categories List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--Categories-->
        
                        <!--Item-->
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-box-open"></i>
                                <p>
                                    Items
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="add-item.php" class="nav-link">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>Add Item </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="itemList.php" class="nav-link">
                                        <i class="fas fa-list-alt nav-icon"></i>
                                        <p>Add List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--item manangent-->

                        <!--Company-->
                        <li class="nav-item ">
                            <a href="company.php" class="nav-link">
                                <i class="nav-icon fas fa-box-open"></i>
                                <p>
                                    Company
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <!--Company-->
        
                        <!--purchases -->
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-coins"></i>
                                <p>
                                    Purchases
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="addpurchase.php" class="nav-link">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>Add Purchase</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="purchaselist.php" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon"></i>
                                        <p>Purchase List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--purchases-->
        
                        <!--sales-->
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-hand-holding-usd"></i>
                                <p>
                                    Sales
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="addsale.php" class="nav-link">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>Add Sale</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="salelist.php" class="nav-link">
                                        <i class="fas fa-list-ol nav-icon"></i>
                                        <p>Sale List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--Sales-->

                        <!--Income-->
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-money-bill-alt"></i>
                                <p>
                                    Income
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="add-income.php" class="nav-link">
                                        <i class="fas fa-plus-square nav-icon"></i>
                                        <p>Add Income</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="incomeList.php" class="nav-link">
                                        <i class="fas fa-list-alt nav-icon"></i>
                                        <p>Income List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- General Cost -->

                        <!--General Cost-->
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>
                                    General Cost
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="add-general-cost.php" class="nav-link">
                                        <i class="fas fa-plus-square nav-icon"></i>
                                        <p>Add General Cost</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="generalcostList.php" class="nav-link">
                                        <i class="fas fa-list-alt nav-icon"></i>
                                        <p>General Cost List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- General Cost -->

                         <!--Salary-->
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-money-check-alt"></i>
                                <p>
                                    Salary
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="add-salary.php" class="nav-link">
                                        <i class="fas fa-plus-square nav-icon"></i>
                                        <p>Add Salary</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="salaryList.php" class="nav-link">
                                        <i class="fas fa-list-alt nav-icon"></i>
                                        <p>Salary List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                         <!--Salary -->

                         <!-- Log out -->
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link">
                                <i class="fas fa-sign-out-alt nav-icon text-danger"></i>
                                <p class="text-danger">Log Out</p>
                            </a>
                        </li>
                        <!-- Log out -->
                    </ul>
                </nav>
                <!-- Sidebar Menu ends-->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">