<div class="container">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=add_store'">
        <span class="glyphicon glyphicon-plus"></span> Add Store
    </button>
    <button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
    	CLOSE <span class="glyphicon glyphicon-remove"></span>
    </button><br><br>
    <div class="history-tbl">
    	<table class="table table-striped table-compact table-hover">
            <caption>Store list</caption>
    		<?php include_once '../fns/get_store_table.php'; ?>
    	</table>
    </div>
</div>