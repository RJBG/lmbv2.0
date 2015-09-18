<div class="container">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=add_customer'">
        <span class="glyphicon glyphicon-plus"></span> Add Customer
    </button>
    <button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
    	CLOSE <span class="glyphicon glyphicon-remove"></span>
    </button><br><br>
    <div class="table-responsive history-tbl">
        <caption>Customer list</caption>
    	<table class="table table-striped table-compact table-hover">
    		<?php include_once '../fns/get_customer_table.php'; ?>
    	</table>
    </div>
</div>