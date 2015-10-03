<div class="container">
    <div class="pull-right">
       <button type="button" class="btn btn-sm btn-danger" onclick="window.location.href='?page=navigator'">
            CLOSE<span class="glyphicon glyphicon-remove"></span>
        </button>
    </div>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#new_customer_order">New Customer Order</a></li>
        <!-- <li><a data-toggle="tab" href="#new_vendor">Add New Vendor</a></li>
        <li><a data-toggle="tab" href="#sales_summary">Sales Order Summary</a></li> -->
    </ul>

    <div class="tab-content">
        <div id="new_customer_order" class="tab-pane fade in active row">
            <form method="post">
                <fieldset>
                    <div class="col-lg-5">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control input-box">
                                    <option>open</option>
                                    <option>pending</option>
                                    <option>closed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label>Item Name(s)</label>
                                <input id="item_name" type="text" data-type="itemName" class="form-control  input-box item_search" placeholder="Search items here.." autofocus>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-1">
                        <div class="form-group">
                            <label>Deposit</label>
                            <input type="number" id="dep-bal" name="dep-bal" class="form-control input-box">
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>Store Name</label>
                            <select class="form-control input-box" name="store">
                                <?php include_once '../fns/get_store_list.php'; ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control input-box" name="date" />
                        </div>
                    </div>
                </fieldset>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="receive_table" class="table table-striped table-bordered table-hover">
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
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <br> 
                    <div class="col-lg-2"> 
                       <div class="form-group">
                            <label>Customer Info</label>
                                <select class="form-control input-box" name="customer">
                                    <?php include_once '../fns/get_customer_list.php'; ?>
                                </select>                                                
                        </div>
                    </div>                                    
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>Comments</label>
                            <textarea name="comment" class="form-control input-box" rows="4" cols="25" placeholder="Your comments here.."></textarea>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>Number of Items</label>
                            <input type="text" name="no-of-items" id="no-of-items" class="form-control input-box" readonly>
                            <label>Total Quantity</label>
                            <input type="text" name="total-qty" id="total-qty" class="form-control input-box" readonly>
                            <label>SubTotal</label>
                            <input type="text" name="sub-total" id="sub-total" class="form-control totalAdd input-box" readonly>                                            
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Price Level</label>
                            <select name="price-level" class="form-control input-box" >
                                <option>Regular Price</option>
                                <option>Sale</option>
                                <option>Employee</option>
                                <option>Wholesale</option>
                                <option>Custom Price</option>
                            </select>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>dsc %</label>
                                    <input type="text" name="dsc-per" id="dsc-per" class="form-control input-box" >
                                    <label>tax %</label>
                                    <input type="text" name="tax-per" id="tax-per" class="form-control input-box" >                                            
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">                                                
                                    <label>discount</label>
                                    <input type="text" name="discount" id="discount" class="form-control totalSub input-box" >
                                    <label>tax</label>
                                    <input type="text" name="tax" id="tax" class="form-control totalSub input-box" >                                            
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Total</label>
                                <input type="text" name="total" id="total" class="form-control input-box" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pull-right" style="margin-right:10px;">
                    <button type="submit" value="Make SO a Sale" name="SO-to-sale" class="btn btn-sm btn-primary" value="blah">
                        <i class="glyphicon glyphicon-check"></i> SO to sale
                    </button>
                    <input class="btn btn-primary btn-sm" type="submit" value="Sales Order">
                </div>
            </form>
        </div>

        <!-- <div id="new_vendor" class="tab-pane fade in row">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="blue bigger">Add New Vendor</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="row">
                                <div class="col-sm-12 row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="vendorCode"> Vendor Code </label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="vendorCode" placeholder="" class="form-control input-box">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-sm-12 row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="companyName"> Company Name </label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="companyName" placeholder="" class="form-control input-box">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-sm" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span> Cancel
                        </button>                        
                        <button type="button" id="addVendorForm" value="submit" name="addStoreBtn" class="btn btn-sm btn-primary">
                            <span class="glyphicon glyphicon-check"></span> Save
                        </button>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div id="sales_summary" class="tab-pane fade in row">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="blue bigger">Sales Order Summary</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method='post' id="addvendorForm">
                            <div class="row">
                                <div class="col-sm-12 row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="vendorCode"> Vendor Code </label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="vendorCode" placeholder="" class="form-control input-box">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-sm-12 row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="companyName"> Company Name </label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="companyName" placeholder="" class="form-control input-box">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm" data-dismiss="modal">
                            <i class="glyphicon glyphicon-remove"></i> Cancel
                        </button>
                        <button type="submit" form="addvendorForm" value="submit" name="addStoreBtn" class="btn btn-sm btn-primary">
                            <i class="glyphicon glyphicon-check"></i> Save
                        </button>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
</div>
<br>