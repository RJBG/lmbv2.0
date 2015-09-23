<div class="container">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=make_sale'">
        <span class="glyphicon glyphicon-plus"></span> Make a Sale
    </button>
    <button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
    	CLOSE <span class="glyphicon glyphicon-remove"></span>
    </button><br><br>
    <div class="history-tbl">
        <caption>Sale History</caption>
    	<table class="table table-striped table-compact table-hover">
    		<?php include_once '../fns/get_sale_history.php'; ?>
    	</table>
        <nav>
      <ul class="pagination pagination">
        <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
      </ul>
    </nav>
    </div>
</div>