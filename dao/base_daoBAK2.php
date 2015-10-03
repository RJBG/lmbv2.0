<?php  
	include_once '../conn/connection.php';

	/**
	* CRUD functions seen here
	*/
	class DAO extends dataBase
	{
		// Check login function
		function check_login($user, $pass)
		{
			try {
				$sql = "SELECT * FROM users WHERE username=? AND password=?";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($user, $pass));
				$result = $stmt->rowCount();
				if ($result <= 0) {
					return "no data";
				} else {
					foreach ($stmt as $key => $value) {
						$_SESSION['NAME'] = $value[3];
					}
					return "success";
				}
				
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		// Retrieve data functions for MAKING SALE
		function get_store_id_ms()
		{
			try {
				$sql = "SELECT * FROM store";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$count = $stmt->rowCount();
				$result = "<option disabled selected>Select option</option>";
				foreach ($stmt as $key => $value) {
					$result = $result . "<option value='" . $value[0] ."'>" . $value[2] . "</option>";
				}

				if ($count <= 0) {
					return "<option disabled>Store list empty</option>";
				} else {
					return $result;
				}
				
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function get_sale_history()
		{
			try {
				$sql = "SELECT * FROM  `sales_receipt` ORDER BY  `srID` DESC LIMIT 0, 30";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				if ($stmt->rowCount() > 0) {
					$result = "<thead>
						<tr>
						<th>Date</th>
						<th>Status</th>
						<th>Price Level</th>
						<th>Discount</th>
						<th>Subtotal</th>
						<th>No.of Items</th>
						<th>Tax Percent</th>
						<th>Tax</th>
						<th>Total</th>
						<th>Total Qty</th>
						<th>SO ID</th>
						<th>Options</th>
						</tr>
					</thead>";

					foreach ($stmt as $key => $rows) {
						$result = $result . "<tr>
							<td>".$rows['date']."</td>
							<td>".$rows['status']."</td>
							<td>".$rows['priceLevel']."</td>
							<td>".$rows['discount']."</td>
							<td>".$rows['subTotal']."</td>
							<td>".$rows['noOfItems']."</td>
							<td>".$rows['taxPer']."</td>
							<td>".$rows['tax']."</td>
							<td>".$rows['total']."</td>
							<td>".$rows['totalQty']."</td>
							<td>".$rows['soID']."</td>
							<td><!-- Single Button -->
                            
                            <div class='btn-group'>
                                <button type='button' class='btn btn-default btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    Select Action <span class='caret'></span>
                                </button>
                                    <ul class='dropdown-menu'>
                                        <li><a href='#'>View</a></li>
                                        <li><a href='#'>Edit</a></li>
                                        <li role='separator' class='divider'></li>
                                        <li><a href='#'>Delete</a></li>
                                    </ul>
                            </div>
                            <!-- End Single Button -->
                            </td>
						</tr>";
					}
					return $result;
				} else {
					return "<div class='col-lg-5'>
						<div class='alert alert-info alert-dismissable'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Info!</strong> Sorry, No Records Found at this time.
						</div>
					</div>";
				}
				
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function sales_order_list_ms($so_ID)
		{
			try {
				$sql = "SELECT * FROM sale_order WHERE soID = ?";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($so_ID));
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		// Retrieve data functions for CUSTOMER ORDER
		function get_customer_list()
		{
			try {
				$sql = "SELECT * FROM customer";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$count = $stmt->rowCount();
				$result = "<option disabled selected>Select option</option>";
				foreach ($stmt as $key => $value) {
					$result = $result . "<option value='" . $value["customerID"] ."'>" . $value["lastName"] . ", " . $value["firstName"] . "</option>";
				}

				if ($count <= 0) {
					return "<option disabled>Customer list empty</option>";
				} else {
					return $result;
				}
				
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function get_customer_table()
		{
			try {
				$sql = "SELECT * FROM customer ORDER BY companyID DESC LIMIT 0, 30";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$result = "";
				if ($stmt->rowCount() > 0) {
					$result = "<thead>
						<tr>
							<th>Company Name</th> 
							<th>Company ID</th>
							<th>Last Name</th>
							<th>First Name</th>
							<th>MI</th>
							<th>Phone</th>
							<th>Telephone</th>
							<th>Creation Date</th>
							<th>Options</th>
						</tr>
					</thead>";

					foreach ($stmt as $key => $rows) {
						$result = $result . "<tr>
			                <td>".$rows['company']."</td>
			                <td>".$rows['companyID']."</td>
					  		<td>".$rows['lastName']."</td>
					  		<td>".$rows['firstName']."</td>
					  		<td>".$rows['mi']."</td>
					  		<td>".$rows['phone']."</td>
			                <td>".$rows['telephone']."</td>
					  		<td>".$rows['creationDate']."</td>
			                 <td><!-- Single Button -->
                            
                            <div class='btn-group'>
                                <button type='button' class='btn btn-default btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    Select Action <span class='caret'></span>
                                </button>
                                    <ul class='dropdown-menu'>
                                        <li><a href='#'>View</a></li>
                                        <li><a href='#'>Edit</a></li>
                                        <li role='separator' class='divider'></li>
                                        <li><a href='#'>Delete</a></li>
                                    </ul>
                            </div>
                            <!-- End Single Button -->
                            </td>
						</tr>";
					}
				} else {
					$result = "<div class='col-lg-5'>
		                <div class='alert alert-info alert-dismissable'>
		                	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
		                	<span class='glyphicon glyphicon-info-sign'></span> Sorry, No Records Found at this time.
		                </div>
		            </div>";
				}
				return $result;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function push_customer($company, $companyID, $firstName, $mi, $lastName, $phone, $telephone)
		{
			try {
				$sql = "INSERT INTO customer (company,companyID,firstName,mi,lastName,phone,telephone,creationDate) VALUES (?,?,?,?,?,?,?,NOW())";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($company, $companyID, $firstName, $mi, $lastName, $phone, $telephone));
				return "success";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		// Vendor functions
		function push_vendor($code, $name)
		{
			try {
				$sql = "INSERT INTO vendor (vendorCode, companyName) VALUES(?,?)";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($code, $name));
				return "success";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function get_vendor_list()
		{
			try {
				$sql = "SELECT * FROM vendor";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$count = $stmt->rowCount();
				$result = "<option disabled selected>Select option</option>";
				foreach ($stmt as $key => $value) {
					$result = $result . "<option value='" . $value["vendorID"] ."'>" . $value["vendorCode"] . ":" . $value["companyName"] . "</option>";
				}

				if ($count <= 0) {
					return "<option disabled>Vendor list empty</option>";
				} else {
					return $result;
				}
				
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function get_vendor_table()
		{
			try {
				$sql = "SELECT * FROM vendor ORDER BY vendorID DESC LIMIT 0, 30";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$result = "";
				if ($stmt->rowCount() > 0) {
					$result = "<thead>
                        <tr>
                            <th>Venodr Code</th>
                            <th>Company Name</th>
                            <th>Options</th>
                        </tr>
                    </thead>";
                    foreach ($stmt as $key => $rows) {
                    	$result = $result . "<tr>
                            <td>".$rows['vendorCode']."</td>
                            <td>".$rows['companyName']."</td>
                            
                            <td><!-- Single Button -->
                            
                            <div class='btn-group'>
                                <button type='button' class='btn btn-default btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    Select Action <span class='caret'></span>
                                </button>
                                    <ul class='dropdown-menu'>
                                        <li><a href='#'>View</a></li>
                                        <li><a href='#'>Edit</a></li>
                                        <li role='separator' class='divider'></li>
                                        <li><a href='#'>Delete</a></li>
                                    </ul>
                            </div>
                            <!-- End Single Button -->
                            </td>
                        </tr>";
                    }
				} else {
					$result = "<div class='col-lg-5'>
                        <div class='alert alert-info alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                            Sorry, No Records Found at this time.
                        </div>
                    </div>";
				}
				return $result;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		// Department function here
		function get_department_list()
		{
			try {
				$sql = "SELECT * FROM department";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$count = $stmt->rowCount();
				$result = "<option disabled selected>Select option</option>";
				foreach ($stmt as $key => $value) {
					$result = $result . "<option value='" . $value["deptID"] ."'>" . $value["deptCode"]. ":" . $value["deptName"] . "</option>";
				}

				if ($count <= 0) {
					return "<option disabled>Department list empty</option>";
				} else {
					return $result;
				}
				
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function get_department_table()
		{
			try {
				$sql = "SELECT * FROM department ORDER BY deptID DESC LIMIT 0, 30";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$result = "";
				if ($stmt->rowCount() > 0) {
					$result = "<thead>
						<tr>
			                <th>Department Code</th>
			                <th>Department Name</th>
			                <th>Tax Code</th>
			                <th>Margin %</th>
			                <th>Markup %</th>
			                <th>Options</th>
			            </tr>
					</thead>";

					foreach ($stmt as $key => $rows) {
						$result = $result . "<tr>
							<td>".$rows['deptCode']."</td>
			                <td>".$rows['deptName']."</td>
							<td>".$rows['taxCode']."</td>
							<td>".$rows['margin']."</td>
							<td>".$rows['markup']."</td>
			               <td><!-- Single Button -->
                            
                            <div class='btn-group'>
                                <button type='button' class='btn btn-default btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    Select Action <span class='caret'></span>
                                </button>
                                    <ul class='dropdown-menu'>
                                        <li><a href='#'>View</a></li>
                                        <li><a href='#'>Edit</a></li>
                                        <li role='separator' class='divider'></li>
                                        <li><a href='#'>Delete</a></li>
                                    </ul>
                            </div>
                            <!-- End Single Button -->
                            </td>
						</tr>";
					}
				} else {
					$result = "<div class='col-lg-5'>
		                <div class='alert alert-info alert-dismissable'>
		                	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
		                	Sorry, No Records Found at this time. 
		                </div>
		            </div>";
				}
				return $result;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function push_department($deptCode, $deptName, $taxCode, $margin, $markup)
		{
			try {
				$sql = "INSERT INTO department (deptCode,deptName,taxCode,margin,markup) VALUES (?,?,?,?,?)";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($deptCode, $deptName, $taxCode, $margin, $markup));
				return "success";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		// Store Management functions here
		function get_store_table()
		{
			try {
				$sql = "SELECT * FROM store ORDER BY storeID";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$result = "";
				if ($stmt->rowCount() > 0) {
					$result = "<tr>
						<th>Store Code</th>
						<th>Store Name</th>
						<th>Address</th>
						<th>MSC 1</th>
						<th>MSC 2</th>
						<th>MSC 3</th>
						<th></th>
					</tr>";
					foreach ($stmt as $key => $rows) {
						$result = $result . "<tr>
							<td>" . $rows['storeCode'] ."</td>
							<td>" . $rows['storeName'] ."</td>
							<td>" . $rows['storeAddress'] ."</td>
							<td>" . $rows['misc1'] ."</td>
							<td>" . $rows['misc2'] ."</td>
							<td>" . $rows['misc3'] ."</td>
							<td><a href='index.php?page=edit_store&storeID=$rows[storeID]'>
				                <span class='glyphicon glyphicon-pencil'></span> Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp; 
								<a href='delete_department.php?deptID=$rows[storeID]'>
								<span class='glyphicon glyphicon-trash'></span> Delete</a>
							</td>
						</tr>";
					}
				} else {
					$result = "<div class='col-lg-5'>
		                <div class='alert alert-info alert-dismissable'>
		                	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
		                	Sorry, No Records Found at this time. 
		                </div>
		            </div>";
				}
				return $result;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function push_store($storeCode, $storeName, $storeAddress, $misc1, $misc2, $misc3)
		{
			try {
				$sql = "INSERT INTO store (storeCode, storeName, storeAddress, misc1, misc2, misc3) VALUES (?,?,?,?,?,?)";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($storeCode, $storeName, $storeAddress, $misc1, $misc2, $misc3));
				return "success";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		// ITEM Management
		function get_item_table($query)
		{
			try {
				$sql = "";
				$stmt = "";
				if ($query == "") {
					$sql = "SELECT * FROM item ORDER BY itemID";
					$stmt = dataBase::getInstance()->prepare($sql);
					$stmt->execute();
				} else {
					$sql = "SELECT * FROM item WHERE storeID = ? ORDER BY itemID";
					$stmt = dataBase::getInstance()->prepare($sql);
					$stmt->execute(array($query));
				}
				
				$result = "";
				if ($stmt->rowCount() > 0) {
					$result = "<tr>
						<th>Item Name</th>
						<th>Item Type</th>
						<th>Description</th>
						<th>Attribute</th>
						<th>Size</th>
						<th>Store ID</th>
						<th>Department</th>
						<th>Vendor</th>
						<th>Item No.</th>
						<th>Receipt No.</th>
						<th>UPC</th>
						<th>Order Cost</th>
						<th>Alt. Lookup</th>
						<th>Store Reorder Point</th>
						<th>Company Reorder Point</th>
						<th>Sell Unit</th>
						<th>Order Unit</th>
						<th>Base Unit</th>
						<th>Item Unit 2</th>
						<th>Item Unit 3</th>
						<th>Item Unit 4</th>
						<th>On Hand Quantity</th>
						<th>Store Reorder Point</th>
						<th>Regular Price</th>
						<th>Order Cost</th>
					</tr>";
					foreach ($stmt as $key => $value) {
						// Getting the vendor name
						$vendor_name_sql = dataBase::getInstance()->prepare("SELECT companyName FROM vendor WHERE vendorID = ?");
						$vendor_name_sql->execute(array($value['vendorID']));
						$vendor = "";
						foreach ($vendor_name_sql as $key => $ven_result) {
							$vendor = $ven_result["companyName"];
						}
						// getting the department name
						$dept_name_sql = dataBase::getInstance()->prepare("SELECT deptName FROM department WHERE deptID = ?");
						$dept_name_sql->execute(array($value['deptID']));
						$dept = "";
						foreach ($dept_name_sql as $key => $dept_result) {
							$dept = $dept_result["deptName"];
						}
						// getting the store name
						$store_name_sql = dataBase::getInstance()->prepare("SELECT storeName FROM store WHERE storeID = ?");
						$store_name_sql->execute(array($value['storeID']));
						$store = "";
						foreach ($store_name_sql as $key => $store_result) {
							$store = $store_result["storeName"];
						}
						// Getting additional data of Item from STORE_ITEM table
						$store_item_sql = dataBase::getInstance()->prepare("SELECT * FROM store_item WHERE itemID = ?");
						$store_item_sql->execute(array($value['itemID']));
						$ohq = "";
						$srp = "";
						$rp = "";
						$oc = "";
						foreach ($store_item_sql as $key => $store_item_result) {
							$ohq = $store_item_result["onHandQuantity"];
							$srp = $store_item_result["storeReorderPoint"];
							$rp = $store_item_result["regularPrice"];
							$oc = $store_item_result["orderCost"];
						}

						$result = $result . "<tr>
							<td>" . $value['itemName'] ."</td>
							<td>" . $value['itemType'] ."</td>
							<td>" . $value['itemDes'] ."</td>
							<td>" . $value['attribute'] ."</td>
							<td>" . $value['size'] ."</td>
							<td>" . $store ."</td>
							<td>" . $dept ."</td>
							<td>" . $vendor ."</td>
							<td>" . $value['itemNo'] ."</td>
							<td>" . $value['receiptNo'] ."</td>
							<td>" . $value['UPC'] ."</td>
							<td>" . $value['orderCost'] ."</td>
							<td>" . $value['alternateLookup'] ."</td>
							<td>" . $value['reorderPointByStore'] ."</td>
							<td>" . $value['companyReorderPoint'] ."</td>
							<td>" . $value['usualSellUnit'] ."</td>
							<td>" . $value['usualOrderUnit'] ."</td>
							<td>" . $value['baseUnit'] ."</td>
							<td>" . $value['itemUnit2'] ."</td>
							<td>" . $value['itemUnit3'] ."</td>
							<td>" . $value['itemUnit4'] ."</td>
							<td>" . $ohq . "</td>
							<td>" . $srp . "</td>
							<td>" . $rp . "</td>
							<td>" . $oc . "</td>
						</tr>";
					}
				} else {
					$result = "<div class='col-lg-5'>
		                <div class='alert alert-info alert-dismissable'>
		                	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
		                	Sorry, No Records Found at this time. 
		                </div>
		            </div>";
				}
				return $result;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function push_item($itemName, $itemType, $deptID, $vendorID, $itemDes, $attribute, $size, $itemNo, $receiptNo, 
			$UPC, $orderCost, $alternateLookup, $reorderPointByStore, $companyReorderPoint, $usualSellUnit, $usualOrderUnit, 
			$baseUnit, $itemUnit2, $itemUnit3, $itemUnit4, $onHandQuantity, $storeReorderPoint, $regularPrice, $orderCost)
		{
			try {
				$store_sql = "SELECT * FROM store";
				$item_sql = "INSERT INTO item 
					(storeID, itemType, deptID, vendorID, itemName, itemDes, attribute, size, itemNo, receiptNo, UPC, 
						orderCost, alternateLookup, reorderPointByStore, companyReorderPoint, usualSellUnit, usualOrderUnit, 
						baseUnit, itemUnit2, itemUnit3, itemUnit4) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$store_item_sql = "INSERT INTO store_item (itemID, storeID, onHandQuantity, storeReorderPoint, regularPrice, 
					orderCost) VALUES (?,?,?,?,?,?)";
				$store = dataBase::getInstance()->prepare($store_sql);
				$store->execute();

				foreach ($store as $key => $value) {
					$item = dataBase::getInstance()->prepare($item_sql);
					$item->execute(array($value["storeID"], $itemType, $deptID, $vendorID, $itemName, $itemDes, $attribute, $size
						,$itemNo, $receiptNo, $UPC, $orderCost, $alternateLookup, $reorderPointByStore, $companyReorderPoint
						,$usualSellUnit, $usualOrderUnit, $baseUnit, $itemUnit2, $itemUnit3, $itemUnit4));

					$last_id = dataBase::getInstance()->prepare("SELECT * FROM item WHERE itemID =(SELECT max(itemID) FROM item)");
					$last_id->execute();
					$id_result = "";
					foreach ($last_id as $key => $id_data) {
						$id_result = $id_data["itemID"];
					}

					$store_item = dataBase::getInstance()->prepare($store_item_sql);
					$store_item->execute(array($id_result, $value["storeID"], $onHandQuantity, $storeReorderPoint, $regularPrice, $orderCost));
				}
				return "success";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

	}
?>