<div class="container">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=add_vendor'">
        <span class="glyphicon glyphicon-plus"></span> Add Vendor
    </button>
    <button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
    	CLOSE <span class="glyphicon glyphicon-remove"></span>
    </button><br><br>
    <div class="table-responsive history-tbl">
    	<table class="table table-striped table-compact table-hover">
            <caption>Vendor list</caption>
    		<?php include_once '../fns/get_vendor_table.php'; ?>
    	</table>
    </div>
</div>