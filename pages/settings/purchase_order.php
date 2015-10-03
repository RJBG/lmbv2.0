<div class="container">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=purchase_list'">
        <span class="glyphicon glyphicon-list"></span> Purchase List
    </button><br><br>
    
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#name_add" data-toggle="tab"> Purchase Order </a>
        </li>
        <button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
            CLOSE <span class="glyphicon glyphicon-remove"></span>
        </button><br><br>
    </ul>

    <div class="tab-content">
        <div id="name_add" class="tab-pane fade in active">
            <form method="post">
                <fieldset>
                    <h4>New Purchase Order</h4>
                    <div>
                        <div class="form-group form-group-sm col-sm-1">
                            <label>PO # <strong class="red">*</strong></label>
                            <input class="form-control input-box" name="POnum" type="text" value="<?php include_once '../fns/get_po_num.php'; ?>" readonly required>
                        </div>
                        <div class="form-group form-group-sm col-sm-2">
                            <label>Vendor <strong class="red">*</strong></label>
                            <select class="form-control input-box" name="vendorID" required>
                                <?php include_once '../fns/get_vendor_list.php'; ?>
                            </select>
                        </div>
                        <div class="form-group form-group-sm col-sm-2">
                            <label>Store</label>
                            <select class="form-control input-box" name="store">
                                <?php include_once '../fns/get_store_list.php'; ?>
                            </select>
                        </div>
                        <div class="form-group form-group-sm col-sm-2">
                            <label>Status</label>
                            <select class="form-control input-box" name="status">
                                <option>Open</option>
                                <option>Pending</option>
                                <option>Closed</option>
                                <option>Suggested</option>
                            </select>
                        </div>
                        <div class="form-group form-group-sm dropdown col-sm-3">
                            <label>Enter Item(s)</label>
                            <input id="item_name" type="text" data-type="itemName" class="form-control  input-box item_search dropdown-toggle" data-toggle="dropdown" placeholder="Search items here..">
                            <ul id="search-options" class="dropdown-menu"></ul>
                        </div>
                        <div class="form-group form-group-sm col-sm-2">
                            <label>Frieght</label>
                            <input class="form-control input-box" name="frieght" type="number" min="0" value="0">
                        </div>
                    </div>

                    <div class="scrolltable col-sm-12">
                        <table class="table table-bordered table-condensed header">
                            <thead>
                                <tr>
                                    <th class='text-center'>Item #</th>
                                    <th class='text-center'>Item Name</th>
                                    <th class='text-center'>Ordered</th>
                                    <th class='text-center'>On-hand</th>
                                    <th class='text-center'>Due</th>
                                    <th class='text-center'>Unit Price</th>
                                    <th class='text-center'>Amount</th>
                                    <th class='text-center'>Actions</th>
                                </tr>
                            </thead>
                        </table>
                        <div class="body">
                            <table id="receive_table" class="table table-striped table-bordered table-hover table-condensed">
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div>
                        <div class="form-group form-group-sm col-sm-2">
                            <label>Disc %</label>
                            <div class="input-group">
                                <span class="input-group-addon">%</span>
                                <input class="form-control input-box" type="number" min="0" step="0.01" name="dscPer" value="0.00">
                            </div>
                            <label>Discount</label>
                            <div class="input-group">
                                <span class="input-group-addon">₱</span>
                                <input class="form-control input-box" type="number" min="0" step="0.01" name="discount" value="0.00" readonly>
                            </div>
                        </div>

                        <div class="form-group form-group-sm col-sm-2">
                            <label>Tax %</label>
                            <div class="input-group">
                                <span class="input-group-addon">%</span>
                                <input class="form-control input-box" type="number" min="0" step="0.01" name="taxPer" value="0.00">
                            </div>
                            <label>Tax</label>
                            <div class="input-group">
                                <span class="input-group-addon">₱</span>
                                <input class="form-control input-box" type="number" min="0" step="0.01" name="tax" value="0.00" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group form-group-sm col-sm-2">
                            <label>Sub Total</label>
                            <div class="input-group">
                                <span class="input-group-addon">₱</span>
                                <input class="form-control input-box" type="number" min="0" step="0.01" name="sub-total" value="0.00" readonly>
                            </div>
                            <label>Fee</label>
                            <div class="input-group">
                                <span class="input-group-addon">₱</span>
                                <input class="form-control input-box" type="number" min="0" step="0.01" name="fee" value="0.00">
                            </div>
                        </div>

                        <div class="form-group form-group-sm col-sm-2">
                            <label>Total</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">₱</span>
                                <input class="form-control input-box" id="total" type="number" min="0" step="0.01" name="total" value="0.00" readonly>
                            </div>
                        </div>

                        <div class="form-group form-group-sm col-sm-4">
                            <label>Comments</label>
                            <textarea name="comments" class="form-control input-box"></textarea>
                        </div>
                    </div>
                </fieldset>

                    <div id="msg" class="alert alert-danger alert-dismissable">
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Warning!</strong> Please fill the form.
                    </div>
                <div class="pull-right">
                    <br><br>
                    <button class="btn btn-primary btn-sm" type="button" id="push-po">
                        <span class="glyphicon glyphicon-save"></span> Add Purchase Order
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
<br>