<div class="container">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=items'">
        <span class="glyphicon glyphicon-list"></span> Item List
    </button><br><br>

    <div id="msg" class="alert alert-danger alert-dismissable">
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <strong>Warning!</strong> Please fill the form.
    </div>
    
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#item" data-toggle="tab"> New Item </a>
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
        <div id="item" class="tab-pane fade in active">
            <form method="post">
                <fieldset>
                    <h4>Item Information</h4>
                    <hr>
                    <div class="col-lg-3 add-item-form">
                        <div class="form-group">
                            <label>Item Name</label>
                            <input class="form-control input-box" name="itemName" type="text" placeholder="item name here.." autofocus required>
                        </div>
                        <div class="form-group">
                            <label>Item Type</label>
                           <select class="form-control input-box" name="itemType" >
                                <option>Select Option</option>
                                <option name="Inventory">Inventory</option>
                                <option name="Non-Inventory">Non-Inventory</option>
                                <option name="Service">Service</option>
                                <option name="Assembly">Assembly</option>
                                <option name="Group">Group</option>
                           </select>   
                            
                        </div>

                        <div class="form-group">
                            <label>Department</label>
                            <select class="form-control input-box" name="deptID">
                                <?php include_once '../fns/get_department_list.php'; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Vendor</label>
                            <select class="form-control input-box" name="vendorID">
                                <?php include_once '../fns/get_vendor_list.php'; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control input-box" name="itemDes" type="text" placeholder="">                                                
                        </div>
                    </div>

                    <div class="col-lg-3 add-item-form">
                        <div class="form-group">
                            <label>Attribute</label>
                            <input class="form-control input-box" name="attribute" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Size</label>
                            <input class="form-control input-box" name="size" type="text" placeholder="">                                                
                        </div>
                        <div class="form-group">
                            <label>Item No.</label>
                            <input class="form-control input-box" name="itemNo" type="number" value="0">                                                
                        </div>
                        <div class="form-group">
                            <label>Reciept No.</label>
                            <input class="form-control input-box" name="receiptNo" type="text" placeholder="">                                                
                        </div>
                        <div class="form-group">
                            <label>UPC</label>
                            <input class="form-control input-box" name="UPC" type="text" placeholder="">                                                
                        </div>
                    </div>

                    <div class="col-lg-3 add-item-form">
                        <div class="form-group">
                            <label>Order Cost</label>
                            <input class="form-control input-box" name="orderCost" type="text" placeholder="">                                                
                        </div>
                        <div class="form-group">
                            <label>Alternate Lookup</label>
                            <input class="form-control input-box" name="alternateLookup" type="text" placeholder="">                                                
                        </div>
                        <div class="form-group">
                            <label>Store Reorder Point</label>
                            <input class="form-control input-box" name="reorderPointByStore" type="number" value="0">                                                
                        </div>
                        <div class="form-group">
                            <label>Company Reorder Point</label>
                            <input class="form-control input-box" name="companyReorderPoint" type="number" value="0">                                                
                        </div>
                        <div class="form-group">
                            <label>Usual Sell Unit</label>
                            <input class="form-control input-box" name="usualSellUnit" type="number" value="0">                                                
                        </div>
                    </div>

                    <div class="col-lg-3 add-item-form">
                        <div class="form-group">
                            <label>Usual Order Unit</label>
                            <input class="form-control input-box" name="usualOrderUnit" type="number" value="0">                                                
                        </div>
                        <div class="form-group">
                            <label>base Unit</label>
                            <input class="form-control input-box" name="baseUnit" type="text" placeholder="">                                                
                        </div>
                        <div class="form-group">
                            <label>Item Unit 2</label>
                            <input class="form-control input-box" name="itemUnit2" type="number" value="0">                                                
                        </div>
                        <div class="form-group">
                            <label>Item Unit 3</label>
                            <input class="form-control input-box" name="itemUnit3" type="number" value="0">                                                
                        </div>
                        <div class="form-group">
                            <label>Item Unit 4</label>
                            <input class="form-control input-box" name="itemUnit4" type="number" value="0">                                                
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <h4>Addtional Information</h4>
                    <hr>
                    <div>
                        <div class="form-group col-lg-3">
                            <label>On Hand Quantity</label>
                            <input class="form-control input-box" name="onHandQuantity" type="number" value="0">
                        </div>
                        <div class="form-group col-lg-3">
                            <label>Store Reorder Point</label>
                            <input class="form-control input-box" name="storeReorderPoint" type="number" value="0">
                        </div>
                        <div class="form-group col-lg-3">
                            <label>Regular Price</label>
                            <input class="form-control input-box" name="regularPrice" type="number" value="0">
                        </div>
                        <div class="form-group col-lg-3">
                            <label>Order Cost</label>
                            <input class="form-control input-box" name="orderCost" type="number" value="0">                                                
                        </div>
                    </div>
                </fieldset>
                <div class="pull-right">
                    <br><br>
                    <button class="btn btn-primary btn-sm" type="button" id="push-item">
                        <span class="glyphicon glyphicon-save"></span> Add Item
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