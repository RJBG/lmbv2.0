<?php  
    $val = "";
    if (isset($_GET["id"])) {
        $val = $_GET["id"];
    }
?>
<input type="hidden" id="ss" value="<?php echo $val; ?>">
<div class="container-fluid">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=add_item'">
        <span class="glyphicon glyphicon-plus"></span> Add Item 
    </button>
    <button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
    	CLOSE <span class="glyphicon glyphicon-remove"></span>
    </button>
    <div class="history-tbl row">
        <form method="POST" class="col-sm-3">
            <div class="form-group">
                <table id="item-list-table" class="table table-hover">
                    <?php include_once '../fns/get_item_list_table.php'; ?>
                </table>
            </div>
        </form>

        <div class="col-sm-9" id="item-info">
            <h3 class='alert alert-info alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <span class='glyphicon glyphicon-info-sign'></span>
                Choose Item from list and information will be shown here. . .
            </h3>
        </div>
        <!-- <form method="post" class="col-lg-3">
            <div class="form-group">
                <label></label>
                <select class="form-control input-box" name="store" id="store-option">
                    <option value="">View All</option>
                    <?php include_once '../fns/get_store_list.php'; ?>
                </select>
            </div>
        </form>
        
        <div class="table-responsive col-lg-12">
            <caption><h4>Item list</h4></caption>
            <table class="table table-striped table-compact table-bordered table-hover" id="item-table-list">
                <?php include_once '../fns/get_item_table.php'; ?>
            </table>
        </div> -->
    </div>
</div>