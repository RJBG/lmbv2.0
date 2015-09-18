<div class="container">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=vendor'">
        <span class="glyphicon glyphicon-list"></span> Vendor List
    </button><br><br>

    <div id="msg" class="alert alert-danger alert-dismissable">
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <strong>Warning!</strong> Please fill the form.
    </div>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#department">Vendor Info</a></li>
        <li><a data-toggle="tab" href="#additional_info">Custom</a></li>
        <li><a data-toggle="tab" href="#picture_option">History</a></li>
        <button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
            CLOSE <span class="glyphicon glyphicon-remove"></span>
        </button><br><br>
    </ul>

    <div class="tab-content">
    	<div id="department" class="tab-pane fade in active">
    		<form method="post">
    			<fieldset>
                    <h4>Add Vendor</h4>
    				<div class="col-lg-2">
    					<div class="form-group">
                            <label>Vendor Code</label>
                        	<input class="form-control input-box" name="vendorCode" type="text">
                        </div>
                        <div class="form-group">
                            <label>Company Name </label>
                            <input class="form-control input-box" name="companyName" type="text">
                        </div>
    				</div>
    			</fieldset>
    			<div class="pull-right">
    				<br><br>
                    <button type="button" class="btn btn-primary btn-sm" id="addVendorForm">
                    	<span class="glyphicon glyphicon-save"></span> Add Vendor
                    </button>
                </div>
    		</form>
    	</div>

    	<div id="additional_info" class="tab-pane fae in">
    		<h4>Custom</h4>
    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    	</div>

    	<div id="picture_option" class="tab-pane fade in">
    		<h4>History</h4>
    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    	</div>
    </div>

</div>
<br>