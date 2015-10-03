<html>
<head>
	<title>LMB Construction | Enterprise Resource Planning System [<?php echo date('m/d/Y'); ?>]</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- <meta http-equiv="refresh" content="40"> -->
    <link href="../images/logo.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body> <!-- oncontextmenu="return false" -->
	<div id="wrap">
		<?php  
			session_start();

			if (!isset($_SESSION['NAME'])) {
				header("location: login.php");
			}
			
			include_once "../layout/header.php";
		?>
		<div class="container-fluid">
			<?php
				function include_once_func($goto)
				{
					include_once dirname(__FILE__).$goto;
				}
				
				if (isset($_GET['page'])) {
					if ($_GET['page'] == "navigator") {
						$page = "/navigator.php";
					}
					elseif ($_GET['page'] == "make_sale" ) {
						$page = "/settings/make_sale.php";
					}
					elseif ($_GET['page'] == "sale_history" ) {
						$page = "/settings/sale_history.php";
					}
					elseif ($_GET['page'] == "customer_order" ) {
						$page = "/settings/customer_order.php";
					}
					elseif ($_GET['page'] == "vendor" ) {
						$page = "/settings/vendor.php";
					}
					elseif ($_GET['page'] == "add_vendor" ) {
						$page = "/settings/add_vendor.php";
					}
					elseif ($_GET['page'] == "items" ) {
						$page = "/settings/items.php";
					}
					elseif ($_GET['page'] == "add_item" ) {
						$page = "/settings/add_item.php";
					}
					elseif ($_GET['page'] == "store" ) {
						$page = "/settings/store.php";
					}
					elseif ($_GET['page'] == "add_store" ) {
						$page = "/settings/add_store.php";
					}
					elseif ($_GET['page'] == "customer" ) {
						$page = "/settings/customer.php";
					}
					elseif ($_GET['page'] == "add_customer" ) {
						$page = "/settings/add_customer.php";
					}
					elseif ($_GET['page'] == "department" ) {
						$page = "/settings/department.php";
					}
					elseif ($_GET['page'] == "add_department" ) {
						$page = "/settings/add_department.php";
					}
					elseif ($_GET['page'] == "employee" ) {
						$page = "/settings/employee.php";
					}
					elseif ($_GET['page'] == "add_employee" ) {
						$page = "/settings/add_employee.php";
					}
					elseif ($_GET['page'] == "add_unit_of_measure" ) {
						$page = "/settings/add_unit_of_measure.php";
					}
					elseif ($_GET['page'] == "purchase_list" ) {
						$page = "/settings/purchase_list.php";
					}
					elseif ($_GET['page'] == "purchase_order" ) {
						$page = "/settings/purchase_order.php";
					}
					elseif ($_GET['page'] == "under_cons") {
						$page = "/settings/under_construction.php";
					}
				} else {
					$page = "/navigator.php";
				}

				if (isset($page)) {
					include_once_func($page);
				}
			?>

			<div id="push"></div>
		</div>
	</div>
	<?php
			include_once "../layout/footer.php";
	?>
     <script type = "text/javascript" >
        function preventBack(){window.history.forward();}
        setTimeout("preventBack()", 0);
        window.onunload=function(){null};
    </script>
    
    <script language="JavaScript">
    document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
           //alert('No F-12');
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
    document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
    </script> 
</body>
</html>