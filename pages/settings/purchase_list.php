<div class="container-fluid">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=purchase_order'">
        <span class="glyphicon glyphicon-plus"></span> New Purchase Order
    </button>
    <button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
    	CLOSE <span class="glyphicon glyphicon-remove"></span>
    </button>
    <div class="table-responsive history-tbl">
        <caption><h4>Purchase Order List</h4></caption>
    	<table class="table table-striped table-compact table-hover purchase-list display">
    		<?php include_once '../fns/get_po_history.php'; ?>
    	</table>
    </div>
</div>