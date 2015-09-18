<div class="container">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=customer'">
        <span class="glyphicon glyphicon-list"></span> Customer List
    </button><br><br>

    <div id="msg" class="alert alert-danger alert-dismissable">
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <strong>Warning!</strong> Please fill the form.
    </div>
    
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#name_add" data-toggle="tab"> Name and Address </a>
        </li>
        <li>
            <a href="#add_info" data-toggle="tab"> Additional Info </a>
        </li>
        <li>
            <a href="#history" data-toggle="tab"> History </a>
        </li>
        <button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
            CLOSE <span class="glyphicon glyphicon-remove"></span>
        </button><br><br>
    </ul>

    <div class="tab-content">
        <div id="name_add" class="tab-pane fade in active">
            <form method="post">
                <fieldset>
                    <h4>Name & Contact info</h4>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>Company Name</label>
                            <!-- <input type="hidden" name="customerID" value="<?php echo $id;?>" placeholder=""> -->
                            <input class="form-control input-box" name="company" type="text" placeholder="" autofocus required>
                        </div>
                        <div class="form-group">
                            <label>Company ID</label>
                            <input class="form-control input-box" name="companyID" type="text" placeholder="">                                                
                        </div>

                        <div class="form-group">
                            <label>First Name</label>
                            <input class="form-control input-box" name="firstName" type="text" placeholder="">                                                
                        </div>
                        <div class="form-group">
                            <label>M.I</label>
                            <input class="form-control input-box" name="mi" type="text" placeholder="">                                                
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control input-box" name="lastName" type="text" placeholder="">                                                
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>Phone</label>
                                <input class="form-control input-box" name="phone" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                                <input class="form-control input-box" name="telephone" type="text" placeholder="">                                                
                        </div>
                    </div>
                </fieldset>
                <div class="pull-right">
                    <br><br>
                    <button class="btn btn-primary btn-sm" type="button" id="push-customer">
                        <span class="glyphicon glyphicon-save"></span> Add Customer
                    </button>
                </div>
            </form>
        </div>

        <div id="add_info" class="tab-pane fade in">
            <h4>Addtional Information here</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>

        <div id="history" class="tab-pane fade in">
            <h4>History here</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
    </div>

</div>
<br>