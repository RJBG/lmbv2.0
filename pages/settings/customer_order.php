<div class="container">
    <div class="pull-right">
       <button type="button" class="btn btn-sm btn-danger" onclick="window.location.href='?page=navigator'">
            CLOSE<span class="glyphicon glyphicon-remove"></span>
        </button>
    </div>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#new_customer_order">New Sales Order</a></li>
        <!-- <li><a data-toggle="tab" href="#new_vendor">Add New Vendor</a></li>
        <li><a data-toggle="tab" href="#sales_summary">Sales Order Summary</a></li> -->
    </ul>

    <div class="tab-content">
        <div id="new_customer_order" class="tab-pane fade in active row">
            <form method="post">
                <fieldset>
                    <div class="col-lg-12">
                        <div class="col-sm-3"> 
                           <div class="form-group form-group-sm dropdown">
                                
                                <label>Customer name</label>
                                <div class="input-group input-group-sm">
                                    <input type="hidden" id="customer_id">
                                    <input type="hidden" id="customer_fname">
                                    <input type="hidden" id="customer_lname">

                                    <input class="form-control input-box dropdown-toggle" data-toggle="dropdown" name="customer" id="customer-search" placeholder="Search customer here...">
                                    <ul id="customer-options" class="dropdown-menu"></ul> 
                                    <span class="input-group-btn" title="Add Customer">
                                        <button class="btn btn-default btn-xs" data-toggle="modal" data-target="#customer_add">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </span>
                                </div>
                                <div class="input-group input-group-sm">
                                    <label>Company</label>
                                    <input id="company" class="form-control input-box" readonly>
                                </div>
                            </div>
                            <div id="customer_add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="post">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Add Customer</h4>
                                            </div>
                                            <div class="modal-body row">
                                                <fieldset>
                                                    <div class="col-sm-6">
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
                                                    <div class="col-sm-6">
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

                                                <div id="msg" class="alert alert-danger alert-dismissable text-center container">
                                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                                    <strong>Warning!</strong> Please fill the form.
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary btn-sm" type="button" id="push-customer-to-sale">
                                                    <span class="glyphicon glyphicon-save"></span> Add Customer
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-sm-2">
                            <div class="form-group form-group-sm dropdown">
                                <label>Item Name(s)</label>
                                <input id="item_name" type="text" data-type="itemName" class="form-control  input-box item_search dropdown-toggle" data-toggle="dropdown" placeholder="Search items here..">
                                <ul id="search-options" class="dropdown-menu"></ul>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group form-group-sm">
                                <label>SO #</label>
                                <input type="number" class="form-control input-box" name="item-search">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group form-group-sm">
                                <label>Status</label>
                                <select name="status" class="form-control input-box">
                                    <option>open</option>
                                    <option>pending</option>
                                    <option>closed</option>
                                </select>
                            </div>
                        </div>
                        <!-- Extra -->
                        <div class="col-sm-2">
                            <div class="form-group form-group-sm">
                                <label>Deposit</label>
                                <input type="number" id="dep-bal" name="dep-bal" class="form-control input-box">
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group form-group-sm">
                                <label>Date</label>
                                <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control input-box" name="date" />
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group form-group-sm">
                                <label>Store Name</label>
                                <select class="form-control input-box" name="store">
                                    <?php include_once '../fns/get_store_list.php'; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="panel-body">
                    <div class="table-responsive scrolltable">
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
                    <br>                                   
                    <div class="col-lg-2">
                        <div class="form-group form-group-sm">
                            <label>Comments</label>
                            <textarea name="comment" class="form-control input-box" rows="4" cols="25" placeholder="Your comments here.."></textarea>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group form-group-sm">
                            <label>Number of Items</label>
                            <input type="text" name="no-of-items" id="no-of-items" class="form-control input-box" readonly>
                            <label>Total Quantity</label>
                            <input type="text" name="total-qty" id="total-qty" class="form-control input-box" readonly>
                            <label>SubTotal</label>
                            <div class="input-group">
                                <span class="input-group-addon">₱</span>
                                <input type="text" name="sub-total" id="sub-total" class="form-control totalAdd input-box" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group form-group-sm">
                            <div class="col-sm-4">
                                <label>Price Level</label>
                                <select name="price-level" class="form-control input-box" >
                                    <option>Regular Price</option>
                                    <option>Sale</option>
                                    <option>Employee</option>
                                    <option>Wholesale</option>
                                    <option>Custom Price</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group form-group-sm">
                                    <label>dsc %</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">%</span>
                                        <input type="text" name="dsc-per" id="dsc-per" class="form-control input-box" >
                                    </div>
                                    <label>tax %</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">%</span>
                                        <input type="text" name="tax-per" id="tax-per" class="form-control input-box" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group form-group-sm">
                                    <div class="input-group">
                                        <label>discount</label>
                                        <input type="text" name="discount" id="discount" class="form-control totalSub input-box" >
                                    </div>
                                    <div class="input-group">
                                        <label>tax</label>
                                        <input type="text" name="tax" id="tax" class="form-control totalSub input-box" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 pull-right">
                            <div class="form-group form-group-lg">
                                <label>Total</label>
                                <div class="input-group">
                                    <span class="input-group-addon">₱</span>
                                    <input type="text" name="total" id="total" class="form-control input-box" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pull-right" style="margin-right:10px;">
                    <button type="button" value="Make SO a Sale" name="SO-to-sale" class="btn btn-sm btn-primary" value="blah">
                        <i class="glyphicon glyphicon-check"></i> SO to sale
                    </button>
                    <input class="btn btn-primary btn-sm" type="button" value="Sales Order">
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