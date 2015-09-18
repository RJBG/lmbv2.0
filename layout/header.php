<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong>LMB Construction</strong></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">File<!-- <span class="caret"></span> --></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=sample">Empty</a></li>
                        <li><a href="#">Empty</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Edit<!-- <span class="caret"></span> --></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=sample">Empty</a></li>
                        <li><a href="#">Empty</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Point of Sale<!-- <span class="caret"></span> --></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=make_sale">New Sale Receipt</a></li>
                        <li><a href="?page=sale_history">Sale History</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customers<!-- <span class="caret"></span> --></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=add_customer">New Customer</a></li>
                        <li><a href="#">Customer Center</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inventory<!-- <span class="caret"></span> --></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=sample">New Item</a></li>
                        <li><a href="?page=add_department">New Department</a></li>
                        <li><a href="?page=add_vendor">New Vendor</a></li>
                        <li><a href="#">Empty</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Item List</a></li>
                        <li><a href="?page=department">Department List</a></li>
                        <li><a href="#">Price Manager</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Purchasing<!-- <span class="caret"></span> --></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=sample">New Receiving Voucher</a></li>
                        <li><a href="#">New Purchase Order</a></li>
                        <li><a href="#">New Vendor</a></li>
                        <li><a href="#">Receive History</a></li>
                        <li><a href="#">Purchase Order List</a></li>
                        <li><a href="#">Vendor List</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employees<!-- <span class="caret"></span> --></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=sample">Employee List</a></li>
                        <li><a href="#">New Employee</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stores<!-- <span class="caret"></span> --></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=store">Manage Store</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports<!-- <span class="caret"></span> --></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=sample">Report Center</a></li>
                    </ul>
                </li>

               <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Preferences</a>
                    <ul class="dropdown-menu">
                       
                    </ul>
                </li>
                -->
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello, <?php echo $_SESSION['NAME']; ?>&nbsp;&nbsp;<span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                       <!-- <span class="dropdown-header user"> </span> -->
                        <li><a href="?page=sample">Rented Vehicles</a></li>
                        <li><a href="#">Unit of Measures</a></li>
                        <li><a href="../fns/logout.php">Logout</a></li>
                        <li><a href="#">Feedback</a></li>
                    </ul>
                </li>
                
                
                    
            </ul>
            
                
        </div>

       
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>