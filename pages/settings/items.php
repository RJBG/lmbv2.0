<div class="container">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=add_item'">
        <span class="glyphicon glyphicon-plus"></span> Add Item
    </button>
    <button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
    	CLOSE <span class="glyphicon glyphicon-remove"></span>
    </button><br><br>
    <div class="history-tbl row">
        <form method="post" class="col-lg-3">
            <div class="form-group">
                <label></label>
                <select class="form-control input-box" name="store" id="store-option">
                    <?php include_once '../fns/get_store_list.php'; ?>
                    <option value="">View All</option>
                </select>
            </div>
        </form>
        
        <div class="table-responsive col-lg-12">
            <caption>Customer list</caption>
            <table class="table table-striped table-compact table-bordered table-hover" id="item-table-list">
                <?php include_once '../fns/get_item_table.php'; ?>
            </table>
        </div>
    </div>
</div>