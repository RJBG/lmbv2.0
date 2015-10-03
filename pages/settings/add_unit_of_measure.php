<div class="container">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=add_item'">
        <span class="glyphicon glyphicon-plus"></span> Add Item
    </button><br><br>

    <div id="msg" class="alert alert-danger alert-dismissable">
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <strong>Warning!</strong> Please fill the form.
    </div>

    <ul class="nav nav-tabs">
    	<li class="active">
    		<a href="#NUOM" data-toggle="tab" class="silver">New Unit of Measure</a>
    	</li>
    	<li>
    		<a href="#UOMH" data-toggle="tab" class="silver">History</a>
    	</li>
    	<button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
            CLOSE <span class="glyphicon glyphicon-remove"></span>
        </button><br><br>
    </ul>

    <div class="tab-content">
    	<div id="NUOM" class="tab-pane fade in active">
    		<form method="post">
    			<fieldset>
    				<div class="input-group input-group-sm">
	    				<label class="form-label">Unit Name</label>
	    				<input type="text" name="unitName" class="form-control input-box" required>
	    			</div><br>

	    			<div class="input-group input-group-sm">
	    				<label class="form-label">Base Unit</label>
	    				<input type="number" name="baseUnit" min="0" class="form-control input-box" value="0">
	    			</div><br>

	    			<div class="input-group input-group-sm">
	    				<label class="form-label">Base Unit name</label>
	    				<input type="text" name="baseUnitName" class="form-control input-box">
	    			</div><br>

	    			<div class="input-group input-group-sm">
	    				<label class="form-label">No. of Base Unit</label>
	    				<input type="number" name="noOfBaseUnit" min="0" class="form-control input-box" value="0">
	    			</div>
    			</fieldset>
    			<div class="pull-right">
                    <br><br>
                    <button class="btn btn-primary btn-sm" type="button" id="push-uom">
                        <span class="glyphicon glyphicon-save"></span> Add Unit
                    </button>
                </div>
    		</form>
    	</div>

    	<div id="UOMH" class="tab-pane fade in">
    		<fieldset>
    			<table class="table table-compact table-striped UOM-table">
    				<?php include_once '../fns/get_uom_table.php'; ?>
    			</table>
    		</fieldset>
    	</div>
    </div>
</div>