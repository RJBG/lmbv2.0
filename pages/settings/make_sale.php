<div class="container">
	<div class="pull-right">
       <button type="button" class="btn btn-sm btn-danger" onclick="window.location.href='?page=navigator'">
        	CLOSE<span class="glyphicon glyphicon-remove"></span>
        </button>
    </div>
	<ul class="nav nav-tabs">
		<li class="active">
			<a href="#new_sale" data-toggle="tab"> New Sale Receipt </a>
		</li>
	</ul>

	<div class="tab-content">
		<div id="new_sale" class="tab-pane fade in active row">
			<form method="post">
				<div class="col-lg-5">
                    <div class="form-group">
                        <label> Item Name(s)</label>
                        <input id="item_name" type="text" data-type="itemName" class="form-control txt-auto item_search input-box" placeholder="Search item here.." autocomplete="on">
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="form-group">
                        <label> SO#</label>
                        <input id="SO-no" type="text" class="form-control input-box" name="SO-no" value="<?php
                                if(isset($_SESSION['soID'])){
                                    echo $_SESSION['soID'];                                                        
                                } 
                                ?>" 
                                placeholder="SO" required>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="form-group">
                        <label>Store Name</label>
                        <select class="form-control input-box"  name="store">
                            <?php include_once '../fns/get_store_list.php'; ?>
                        </select>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Select Date</label>
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control" name="date" />
                    </div>
                </div>
			</form>

			<div class="table-responsive col-md-12">
				<table id="receive-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Item #</th>
                            <th>Item Name</th>
                            <th class="col-xs-4">Description &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                            <th>Attribute</th>
                            <th>Size</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Ext. Price</th>
                            <th>Unit</th>
                            <th>Alternate Lookup</th>
                            <th>Actions</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>

	<div class="modal-footer">
        <button class="btn btn-sm btn-default" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
        </button>
        <button type="submit" form="addvendorForm" value="submit" name="addStoreBtn" class="btn btn-sm btn-primary">
            <span class="glyphicon glyphicon-save"></span> Save
        </button>
    </div>
</div>