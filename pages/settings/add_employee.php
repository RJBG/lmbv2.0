<div class="container">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=employee'">
        <span class="glyphicon glyphicon-list"></span> Employee List
    </button><br><br>

    <div id="msg" class="alert alert-danger alert-dismissable">
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <strong>Warning!</strong> Please fill the form.
    </div>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#department">Employee</a></li>
        <li><a data-toggle="tab" href="#additional_info">Addtional Info</a></li>
        <li><a data-toggle="tab" href="#picture_option">History</a></li>
        <button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
            CLOSE <span class="glyphicon glyphicon-remove"></span>
        </button><br><br>
    </ul>

    <div class="tab-content">
    	<div id="department" class="tab-pane fade in active">
    		<form method="post">
    			<fieldset>
                    <legend><h3>Employee Information</h3></legend>
    				<div class="col-lg-3">
    					<div class="form-group">
                            <label>Store</label>
                        	<select class="form-control input-box" name="employee">
                                <?php include_once '../fns/get_store_list.php'; ?>   
                            </select>
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input class="form-control input-box" name="firstName" maxlength="30" type="text">
                        </div>
                        <div class="form-group">
                            <label>M.I</label>
                            <input class="form-control input-box" name="mi" maxlength="1" type="text">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control input-box" name="lastName" maxlength="30" type="text">
                        </div>
                        <div class="form-group">
                            <label>Employee ID</label>
                            <input class="form-control input-box" name="empID" maxlength="20" type="text">
                        </div>
    				</div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Phone</label>
                            <input class="form-control input-box" name="phone" type="number">
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input class="form-control input-box" name="telephone" type="number">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input class="form-control input-box" name="address" step="a" type="text">
                        </div>
                        <div class="form-group">
                            <label>Userame</label>
                            <input class="form-control input-box" name="username" maxlength="30" type="text">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control input-box" name="password" maxlength="30" type="text">
                        </div>
                    </div>
    			</fieldset>
    			<div class="pull-right">
    				<br><br>
                    <button type="button" class="btn btn-primary btn-sm" id="push-employee">
                    	<span class="glyphicon glyphicon-save"></span> Add Employee
                    </button>
                </div>
    		</form>
    	</div>

    	<div id="additional_info" class="tab-pane fade in">
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