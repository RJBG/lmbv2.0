<div class="container">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=add_customer'">
        <span class="glyphicon glyphicon-plus"></span> Add Customer
    </button>
    <button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
    	CLOSE <span class="glyphicon glyphicon-remove"></span>
    </button>
    <div class="history-tbl">
        <caption><h2>Employee list</h2></caption>
    	<table class="table table-striped table-compact table-hover employee-table display">
    		<?php include_once '../fns/get_employee_table.php'; ?>
    	</table>        
    </div>
</div>