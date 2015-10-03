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
                    <fieldset class="add-item-form col-lg-6">
                        <legend>Item Details</legend>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label>Item Type</label>
                                <select class="form-control input-box" name="itemType">
                                    <option>Inventory</option>
                                    <option>Non-Inventory</option>
                                    <option>Service</option>
                                    <option>Assembly</option>
                                    <option>Group</option>
                                </select>                                               
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Department</label>
                                <select class="form-control input-box" name="deptID" required>
                                    <?php include_once '../fns/get_department_list.php'; ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Vendor</label>
                                <select class="form-control input-box" name="vendorID" required>
                                    <?php include_once '../fns/get_vendor_list.php'; ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Item Name</label>
                                <input class="form-control input-box" name="itemName" type="text" placeholder="" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Description</label>
                                <textarea class="form-control input-box" name="itemDes"></textarea>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Attribute</label>
                                <input class="form-control input-box" name="attribute" type="text" placeholder="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Size</label>
                                <input class="form-control input-box" name="size" type="text" placeholder="">                                                
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="add-item-form col-lg-5">
                        <legend>Item Lookup</legend>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label>Item #</label>
                                <input class="form-control input-box" name="itemNo" type="number" value="<?php include_once '../fns/get_item_count.php'; ?>">                                                
                            </div>
                            <div class="form-group col-sm-6">
                                <label>UPC</label>
                                <input class="form-control input-box" name="UPC" type="text" placeholder="">                                                
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Alternate Lookup</label>
                                <input class="form-control input-box" name="alternateLookup" type="text" placeholder="">                                                
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="add-item-form col-lg-5">
                        <legend>Price & Cost</legend>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Regular Price</label>
                                <input class="form-control input-box" name="regularPrice" type="number" step="0.01" min="0.01" value="0.00">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Order Cost</label>
                                <input class="form-control input-box" name="orderCost" type="number" step="0.01" min="0.01" value="0.00">
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="col-lg-12">
                        <fieldset class="add-item-form col-lg-5">
                            <legend>Quantity</legend>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>On Hand Quantity</label>
                                    <input class="form-control input-box" name="onHandQuantity" type="number" value="0">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Company Reorder Point</label>
                                    <input class="form-control input-box" name="companyReorderPoint" type="number" value="0">                                                
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Reorder Point by Store</label>
                                    <input class="form-control input-box" name="reorderPointByStore" type="number" value="0">                                                
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="add-item-form col-lg-5">
                            <legend>Unit of Measure</legend>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Unit of Measure</label>
                                    <div class="input-group">
                                        <select class="form-control input-box" name="baseUnit">
                                            <?php include_once '../fns/get_uom_list.php'; ?>
                                        </select>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default" title="Add new unit of measure" data-toggle="modal" data-target="#new_uom">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </span>
                                        <div id="new_uom" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                        <h4 class="modal-title">New Unit of Measure</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <label>Unit Name</label>
                                                                    <input type="text" name="unitName" class="form-control input-box" required>
                                                                </div>
                                                                <div class="input-group">
                                                                    <label>Base Unit</label>
                                                                    <input type="number" name="baseUnit" min="0" class="form-control input-box" value="0">
                                                                </div>
                                                                <div class="input-group">
                                                                    <label>Base Unit name</label>
                                                                    <input type="text" name="baseUnitName" class="form-control input-box">
                                                                </div>
                                                                <div class="input-group">
                                                                    <label>No. of Base Unit</label>
                                                                    <input type="number" name="noOfBaseUnit" min="0" class="form-control input-box" value="0">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="pull-right">
                                                            <button class="btn btn-primary btn-sm" type="button" id="push-uom2">
                                                                <span class="glyphicon glyphicon-save"></span> Add Unit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </fieldset>

                    <!-- <div class="col-lg-6 add-item-form">
                        
                        
                            
                    </div> -->

                    <!-- <div class="col-lg-3 add-item-form">
                        
                    </div> -->

                    <!-- <div class="col-lg-3 add-item-form">
                        
                    </div> -->
                </fieldset>

                <!-- <fieldset>
                    <h4>Addtional Information</h4>
                    <hr>
                    <div>
                        
                        
                    </div>
                </fieldset> -->
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
            <fieldset>
                <div class="form-group col-lg-3">
                    <label>Reciept No.</label>
                    <input class="form-control input-box" name="receiptNo" type="text" placeholder="">
                </div>

                <div class="form-group col-lg-3">
                    <label>Usual Sell Unit</label>
                    <input class="form-control input-box" name="usualSellUnit" type="number" value="0">
                </div>

                <div class="form-group col-lg-3">
                    <label>Usual Order Unit</label>
                    <input class="form-control input-box" name="usualOrderUnit" type="number" value="0">
                </div>
                <div class="form-group col-lg-3">
                    <label>base Unit</label>
                    <input class="form-control input-box" name="baseUnit" type="number" placeholder="">
                </div>
                <div class="form-group col-lg-3">
                    <label>Item Unit 2</label>
                    <input class="form-control input-box" name="itemUnit2" type="number" value="0">
                </div>
                <div class="form-group col-lg-3">
                    <label>Item Unit 3</label>
                    <input class="form-control input-box" name="itemUnit3" type="number" value="0">
                </div>
                <div class="form-group col-lg-3">
                    <label>Item Unit 4</label>
                    <input class="form-control input-box" name="itemUnit4" type="number" value="0">
                </div>

                <div class="form-group col-lg-3">
                    <label>Store Reorder Point</label>
                    <input class="form-control input-box" name="storeReorderPoint" type="number" value="0">
                </div>
                    
                <div class="form-group col-lg-3">
                    <label>Order Cost</label>
                    <input class="form-control input-box" name="orderCost" type="number" value="0">                                                
                </div>
            </fieldset>
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