<div class="container">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=add_department'">
        <span class="glyphicon glyphicon-plus"></span> Add Department
    </button>
    <button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
    	CLOSE <span class="glyphicon glyphicon-remove"></span>
    </button><br><br>
    <div class="table-responsive history-tbl">
        <caption>Department list</caption>
    	<table class="table table-striped table-compact table-hover">
    		<?php include_once '../fns/get_department_table.php'; ?>
    	</table>
    </div>
</div>