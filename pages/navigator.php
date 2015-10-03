<div class="container">
	<div class="alert alert-default alert-dismissable">
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <span class="glyphicon glyphicon-info-sign"></span>
        Hello! Welcome to <strong class="black"> LMB<small> Construction</small></strong>. This is your navigation page.
	</div>

	<!-- Navigation starts here -->

	<!-- POINT OF SALE menu set -->
	<fieldset class="col-md-11 panel panel-default">
		<legend class="scheduler-border">
			<div class="dropdown">
				<button class="btn dropdown-toggle btn-default" data-toggle="dropdown"><strong>Point of Sale </strong><!--<span class="caret"></span>--></button>
				<!-- <ul class="dropdown-menu">
					<li><a href="#">Empty</a></li>
				</ul> -->
			</div>
		</legend>

		<div class="col-xs-2">
			<button class="btn-link icon" onclick="location.href='?page=customer_order'">
				<center>
					<img src="../images/icons/custo_order.png" width="80px" draggable="false">
				</center>
				<div>
					<center><h5>Sales Order</h5></center>
				</div>
			</button>
		</div>
		<div class="col-xs-1">
			<br><br>
			<img src="../images/icons/arrow.png" width="45px">
		</div>
		<div class="col-xs-2">
			<button class="btn-link icon" onclick="location.href='?page=under_cons'">
				<center>
					<img src="../images/icons/custo_orderlist.png" width="80px" draggable="false">
				</center>
				<div>
					<center><h5>SO History</h5></center>
				</div>
			</button>
		</div>

		<div class="col-xs-1"></div>
		
		<div class="col-xs-2">
			<button class="btn-link icon" onclick="location.href='?page=make_sale'">
				<center>
					<img src="../images/icons/mke_sale.png" width="80px" draggable="false">
				</center>
				<div>
					<center><h5>Delivery</h5></center>
				</div>
			</button>
		</div>
		<div class="col-xs-1">
			<br><br>
			<img src="../images/icons/arrow.png" width="45px">
		</div>
		<div class="col-xs-2">
			<button class="btn-link icon" onclick="location.href='?page=sale_history'">
				<center>
					<img src="../images/icons/sale_hist.png" width="80px" draggable="false">
				</center>
				<div>
					<center><h5>DR History</h5></center>
				</div>
			</button>
		</div>
	</fieldset>

	<!-- CUSTOMER menu set -->
	<fieldset class="col-sm-4 panel panel-default">
		<legend class="scheduler-border">
			<div class="dropdown">
				<button class="btn dropdown-toggle btn-default" data-toggle="dropdown"><strong>Customer </strong><span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="index.php?page=add_customer">New Customer</a></li>
				</ul>
			</div>
		</legend>

		<div class="col-xs-4">
			<button class="btn-link icon" onclick="location.href='?page=customer'">
				<center>
					<img src="../images/icons/customers.png" width="80px" draggable="false">
				</center>
				<div>
					<center><h5>Customers</h5></center>
				</div>
			</button>
		</div>
		<div class="col-xs-2">
			<br><br>
			<img src="../images/icons/arrow.png" width="45px">
		</div>
		<div class="col-xs-4">
			<button class="btn-link icon" onclick="location.href='?page=under_cons'">
				<center>
					<img src="../images/icons/custo_cent.png" width="80px" draggable="false">
				</center>
				<div>
					<center><h5>Centers</h5></center>
				</div>
			</button>
		</div>
	</fieldset>

	<!-- INVENTORY menu set -->
	<fieldset class="col-md-7 panel panel-default">
		<legend class="scheduler-border">
			<div class="dropdown">
				<button class="btn dropdown-toggle btn-default" data-toggle="dropdown"><strong>Inventory </strong><span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="?page=department">Department List</a></li>
					<li><a href="?page=add_department">New Department</a></li>
				</ul>
			</div>
		</legend>

		<div class="col-xs-3">
			<button class="btn-link icon" onclick="location.href='?page=add_item'">
				<center>
					<img src="../images/icons/add.png" width="80px" draggable="false">
				</center>
				<div>
					<center><h5>Add New Item</h5></center>
				</div>
			</button>
		</div>
		<div class="col-xs-1">
			<br><br>
			<img src="../images/icons/arrow.png" width="45px">
		</div>
		<div class="col-xs-3">
			<button class="btn-link icon" onclick="location.href='?page=items'">
				<center>
					<img src="../images/icons/item.png" width="80px" draggable="false">
				</center>
				<div>
					<center><h5>Items</h5></center>
				</div>
			</button>
		</div>
		<div class="col-xs-1"></div>
		<div class="col-xs-3">
			<button class="btn-link icon" onclick="location.href='?page=under_cons'">
				<center>
					<img src="../images/icons/price_man.png" width="80px" draggable="false">
				</center>
				<div>
					<center><h5>Price Manager</h5></center>
				</div>
			</button>
		</div>
	</fieldset>

	<!-- REPORTS tab -->
	

	<!-- SEARCH tab -->
	

	<!-- PURCHASING menu set -->
	<fieldset class="col-md-11 panel panel-default">
		<legend class="scheduler-border">
			<div class="dropdown">
				<button class="btn dropdown-toggle btn-default" data-toggle="dropdown"><strong>Purchasing </strong><span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="?page=add_vendor">New Vendor</a></li>
				</ul>
			</div>
		</legend>

		<div class="col-xs-2">
			<button class="btn-link icon" onclick="location.href='?page=under_cons'">
				<center>
					<img src="../images/icons/rece.png" width="80px" draggable="false">
				</center>
				<div>
					<center><h5>Recieve Item</h5></center>
				</div>
			</button>
		</div>
		<div class="col-xs-1">
			<br><br>
			<img src="../images/icons/arrow.png" class="img-round" width="45px">
		</div>
		<div class="col-xs-2">
			<button class="btn-link icon" onclick="location.href='?page=under_cons'">
				<center>
					<img src="../images/icons/rece_h .png" width="80px" draggable="false">
				</center>
				<div>
					<center><h5>Recieve History</h5></center>
				</div>
			</button>
		</div>
		<div class="col-xs-2">
			<button class="btn-link icon" onclick="location.href='?page=purchase_order'">
				<center>
					<img src="../images/icons/pos.png" width="80px" draggable="false">
				</center>
				<div>
					<center><h5>Make a Purchase Order</h5></center>
				</div>
			</button>
		</div>
		<div class="col-xs-1">
			<br><br>
			<img src="../images/icons/arrow.png" class="img-round" width="45px">
		</div>
		<div class="col-xs-2">
			<button class="btn-link icon" onclick="location.href='?page=purchase_list'">
				<center>
					<img src="../images/icons/po.png" width="80px" draggable="false">
				</center>
				<div>
					<center><h5>Purchase Order List</h5></center>
				</div>
			</button>
		</div>
		<div class="col-xs-2">
			<button class="btn-link icon" onclick="location.href='?page=vendor'">
				<center>
					<img src="../images/icons/ven.png" width="80px" draggable="false">
				</center>
				<div>
					<center><h5>Vendors</h5></center>
				</div>
			</button>
		</div>
	</fieldset>
</div>