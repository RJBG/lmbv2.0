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
            <a href="#name_add" data-toggle="tab" style="color:silver;"> Name and Address </a>
        </li>
        <li>
            <a href="#add_info" data-toggle="tab" style="color:silver;"> Additional Info </a>
        </li>
        <li>
            <a href="#history" data-toggle="tab" style="color:silver;"> History </a>
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
                        <div class="form-group form-group-sm">
                            <label>Company Name</label>
                            <!-- <input type="hidden" name="customerID" value="<?php echo $id;?>" placeholder=""> -->
                            <input class="form-control input-box" name="company" type="text" placeholder="" autofocus required>
                        </div>
                        <div class="form-group form-group-sm">
                            <label>Company ID</label>
                            <input class="form-control input-box" name="companyID" type="text" placeholder="">                                                
                        </div>

                        <div class="form-group form-group-sm">
                            <label>First Name</label>
                            <input class="form-control input-box" name="firstName" type="text" placeholder="">                                                
                        </div>
                        <div class="form-group form-group-sm">
                            <label>M.I</label>
                            <input class="form-control input-box" name="mi" type="text" placeholder="">                                                
                        </div>
                        <div class="form-group form-group-sm">
                            <label>Last Name</label>
                            <input class="form-control input-box" name="lastName" type="text" placeholder="">                                                
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group form-group-sm">
                            <label>Phone</label>
                                <input class="form-control input-box" name="phone" type="text" placeholder="">
                        </div>
                        <div class="form-group form-group-sm">
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
            <fieldset>
                <legend><h4>Addtional Information here</h4></legend>
                <div class="form-group form-group-sm col-sm-2">
                    <label>Alternative contact</label>
                        <input class="form-control input-box" name="alternativeContact" type="text" placeholder="">
                </div>
                <div class="form-group form-group-sm col-sm-2">
                    <label>Alternative Phone</label>
                        <input class="form-control input-box" name="alternativePhone" type="text" placeholder="">
                </div>
                <div class="form-group form-group-sm col-sm-2">
                    <label>City</label>
                        <input class="form-control input-box" name="city" type="text" placeholder="">
                </div>
                <div class="form-group form-group-sm col-sm-2">
                    <label>ZIP Code</label>
                        <input class="form-control input-box" name="zipcode" type="text" placeholder="">
                </div>
                <div class="form-group form-group-sm col-sm-2">
                    <label>Street</label>
                        <input class="form-control input-box" name="street" type="text" placeholder="">
                </div>
                <div class="form-group form-group-sm col-sm-2">
                    <label>Street 2</label>
                        <input class="form-control input-box" name="street2" type="text" placeholder="">
                </div>
                <div class="form-group form-group-sm col-sm-4">
                    <label>Ship Address</label>
                        <textarea class="form-control input-box" name="shipAddress" type="text" placeholder=""></textarea>
                </div>
            </fieldset>
        </div>

        <div id="history" class="tab-pane fade in">
            <h4>Customer History</h4>
            <table class='table table-compact table-striped table-hover customer-history-table display'>
            <?php include_once '../fns/get_customer_history.php'; ?>
            </table>
        </div>
    </div>

</div>
<br>