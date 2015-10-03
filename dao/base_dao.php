<?php  
	include_once '../conn/connection.php';

	/**
	* CRUD functions seen here
	*/
	class DAO extends dataBase
	{
		// Easy Access for most used functions
		function easy_vendor($id)
		{
			$sql = "SELECT * FROM vendor WHERE vendorID=?";
			$stmt = dataBase::getInstance()->prepare($sql);
			$stmt->execute(array($id));
			$vendor = "";
			foreach ($stmt as $key => $value) {
				$vendor = $value['companyName'];
			}
			return $vendor;
		}

		function easy_dept($id)
		{
			$sql = "SELECT * FROM department WHERE deptID=?";
			$stmt = dataBase::getInstance()->prepare($sql);
			$stmt->execute(array($id));
			$dept = "";
			foreach ($stmt as $key => $value) {
				$dept = $value["deptName"];
			}
			return $dept;
		}

		function easy_store($id)
		{
			$sql = "SELECT storeName FROM store WHERE storeID = ?";
			$stmt = dataBase::getInstance()->prepare($sql);
			$stmt->execute(array($id));
			$store = "";
			foreach ($stmt as $key => $value) {
				$store = $value["storeName"];
			}
			return $store;
		}

		// Check login function
		function check_login($user, $pass)
		{
			try {
				$sql = "SELECT * FROM users WHERE username=? AND password=?";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($user, $pass));
				$result = $stmt->rowCount();
				if ($result <= 0) {
					$check_user = "SELECT * FROM employee WHERE username=? AND password=?";
					$check_stmt = dataBase::getInstance()->prepare($check_user);
					$check_stmt->execute(array($user, $pass));
					$result = $check_stmt->rowCount();
					if ($result <= 0) {
						return "no data";
					} else {
						foreach ($check_stmt as $key => $value) {
							$_SESSION['NAME'] = $value[3] . ", " . $value[2];
						}
						$_SESSION['USER_LEVEL'] = "Employee";
						return "success";
					}					
				} else {
					foreach ($stmt as $key => $value) {
						$_SESSION['NAME'] = $value[3];
					}
					$_SESSION['USER_LEVEL'] = "Administrator";
					return "success";
				}
				
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		// UNIT OF MEASURE functions
		function push_unit_of_measure($unitName, $baseUnit, $baseUnitName, $noOfBaseUnit)
		{
			try {
				$sql = "INSERT INTO unit_of_measure (unitName, isBaseUnit, baseUnitName, noOfBaseUnit) VALUES(?,?,?,?)";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($unitName, $baseUnit, $baseUnitName, $noOfBaseUnit));
				return "success";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function get_uom_table()
		{
			try {
				$sql = "SELECT * FROM unit_of_measure";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$result = "<thead><tr>
					<th>#</th>
					<th>Unit Name</th>
					<th>Base Unit</th>
					<th>Base Unit Name</th>
					<th>No. of Base Unit</th>
					<th>Actions</th>
				</tr></thead><tbody>";
				foreach ($stmt as $key => $value) {
					$result = $result . "<tr>
						<td>".$value['unitID']."</td>
						<td>".$value['unitName']."</td>
						<td>".$value['isBaseUnit']."</td>
						<td>".$value['baseUnitName']."</td>
						<td>".$value['noOfBaseUnit']."</td>
						<td><!-- Single Button -->
                            
                            <div class='btn-group'>
                                <button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
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
				$result = $result . "</tbody>";
				return $result;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function get_uom_list()
		{
			try {
				$sql = "SELECT * FROM unit_of_measure";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$result = "";
				foreach ($stmt as $key => $value) {
					$result = $result . "<option value='".$value['unitID']."'>".$value['unitName']."</option>";
				}
				return $result;
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
				$result = "";
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
						<th>Actions</th>
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
                                <button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
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

		// CUSTOMER FUNCTIONS
		function get_customer_history()
		{
			$sql = "SELECT * FROM customer ORDER BY creationDate DESC";
			$stmt = dataBase::getInstance()->prepare($sql);
			$stmt->execute();
			$result = "<thead><tr>
				<th>Customer name</th>
				<th>Comp. ID</th>
				<th>Phone</th>
				<th>Telephone</th>
				<th>Creation Date</th>
				<th>Actions</th>
			</tr></thead><tbody>";
			foreach ($stmt as $key => $value) {
				$result = $result . "<tr>
					<td>".$value['lastName'].", ".$value['firstName']." ".$value['mi']."</td>
					<td>".$value['companyID']."</td>
					<td>".$value['phone']."</td>
					<td>".$value['telephone']."</td>
					<td>".$value['creationDate']."</td>
					<td><!-- Single Button -->
                            
                            <div class='btn-group'>
                                <button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
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
			$result = $result . "</tbody>";
			return $result;
		}

		function push_customer($company, $companyID, $firstName, $mi, $lastName, $phone, $telephone, $alternativeContact, 
			$alternativePhone, $city, $zipcode, $street, $street2, $shipAddress)
		{
			try {
				$sql = "INSERT INTO customer (company,companyID,firstName,mi,lastName,phone,telephone,alternativeContact,
					alternativePhone,city,zipcode,street,street2,shipAddress,creationDate) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($company, $companyID, $firstName, $mi, $lastName, $phone, $telephone, $alternativeContact, 
					$alternativePhone, $city, $zipcode, $street, $street2, $shipAddress));
				return "success";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		// Retrieve data functions for CUSTOMER ORDER
		function get_customer_list($key)
		{
			try {
				$sql = "SELECT * FROM customer WHERE (companyID LIKE '%".$key."%') OR (company LIKE '%".$key
					."%') OR (firstName LIKE '%".$key."%') OR (mi LIKE '%".$key."%') OR (lastName LIKE '%".$key."%')";
				if ($key == "") {
					$sql = "SELECT * FROM customer";
				}
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$count = $stmt->rowCount();
				$result = "";
				foreach ($stmt as $key => $value) {
					$result = $result . "<li><a href='#'><input type='hidden' value='" . $value["customerID"] 
					."~" . $value["lastName"] . "~" . $value["firstName"] . "~" . $value["company"] . "'>" 
					. $value["lastName"] . ", " . $value["firstName"] . "</a></li>";
				}

				if ($count <= 0) {
					return "<li>No match found</li>";
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
							<th>Last Name</th>
							<th>First Name</th>
							<th>MI</th>
							<th>Phone</th>
							<th>Telephone</th>
							<th>Actions</th>
						</tr>
					</thead>";

					foreach ($stmt as $key => $rows) {
						$result = $result . "<tr>
			                <td>".$rows['company']."</td>
					  		<td>".$rows['lastName']."</td>
					  		<td>".$rows['firstName']."</td>
					  		<td>".$rows['mi']."</td>
					  		<td>".$rows['phone']."</td>
			                <td>".$rows['telephone']."</td>
			              	<td><!-- Single Button -->
                            
                            <div class='btn-group'>
                                <button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
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

		function push_customer_to_sale($company, $companyID, $firstName, $mi, $lastName, $phone, $telephone)
		{
			try {
				$sql = "INSERT INTO customer (company,companyID,firstName,mi,lastName,phone,telephone,creationDate) VALUES (?,?,?,?,?,?,?,NOW())";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($company, $companyID, $firstName, $mi, $lastName, $phone, $telephone));
				$sql2 = "SELECT * FROM customer WHERE customerID = (SELECT max(customerID) FROM customer)";
				$stmt2 = dataBase::getInstance()->prepare($sql2);
				$stmt2->execute();
				$result = "";
				foreach ($stmt2 as $key => $value) {
					$result = $value["customerID"] . "~" . $value["company"] . "~" .$value["firstName"] . "~" . $value["lastName"];
				}
				return $result;
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
                            <th>Actions</th>
                        </tr>
                    </thead>";
                    foreach ($stmt as $key => $rows) {
                    	$result = $result . "<tr>
                            <td>".$rows['vendorCode']."</td>
                            <td>".$rows['companyName']."</td>
                            	<td><!-- Single Button -->
                            
                            <div class='btn-group'>
                                <button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
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
			                <th>Actions</th>
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
                                <button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    Select Action <span class='caret'></span>
                                </button>
                                    <ul class='dropdown-menu'>
                                        <li><a href='index.php?page=edit_department&deptID=$rows[deptID]'>
				                			<span class='glyphicon glyphicon-pencil'></span> Edit</a>
				                		</li>
                                        <li><a href='delete_department.php?deptID=$rows[deptID]'>
											<span class='glyphicon glyphicon-trash'></span> Delete</a>
										</li>
                                    </ul>
                            </div>
                            <!-- End Single Button -->
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
						<th>Actions</th>
					</tr>";
					foreach ($stmt as $key => $rows) {
						$result = $result . "<tr>
							<td>" . $rows['storeCode'] ."</td>
							<td>" . $rows['storeName'] ."</td>
							<td>" . $rows['storeAddress'] ."</td>
							<td>" . $rows['misc1'] ."</td>
							<td>" . $rows['misc2'] ."</td>
							<td>" . $rows['misc3'] ."</td>
							<td><!-- Single Button -->
                            
                            <div class='btn-group'>
                                <button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    Select Action <span class='caret'></span>
                                </button>
                                    <ul class='dropdown-menu'>
                                        <li><a href='index.php?page=edit_store&storeID=$rows[storeID]'>
				                			<span class='glyphicon glyphicon-pencil'></span> Edit</a>
				                		</li>
                                        <li><a href='delete_department.php?deptID=$rows[storeID]'>
											<span class='glyphicon glyphicon-trash'></span> Delete</a>
										</li>
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
					$sql = "SELECT * FROM store_item ORDER BY itemID";
					$stmt = dataBase::getInstance()->prepare($sql);
					$stmt->execute();
				} else {
					$sql = "SELECT * FROM store_item WHERE storeID = ? ORDER BY itemID";
					$stmt = dataBase::getInstance()->prepare($sql);
					$stmt->execute(array($query));
				}
				
				$result = "";
				if ($stmt->rowCount() > 0) {
					$result = "<tr>
						<th>Item Name</th>
						<th>Item Type</th>
						<th>Attribute</th>
						<th>Size</th>
						<th>On Hand</th>
						<th>Reorder Point</th>
						<th>Regular Price</th>
						<th>Order Cost</th>
						<th>Actions</th>
					</tr>";
					foreach ($stmt as $key => $str) {
						// Getting the item data
						$item_sql = dataBase::getInstance()->prepare("SELECT * FROM item WHERE itemID = ?");
						$item_sql->execute(array($str["itemID"]));
						foreach ($item_sql as $key => $value) {
							// Getting the vendor name
							$vendor = self::easy_vendor($value['vendorID']);
							// getting the department name
							$dept = self::easy_dept($value['deptID']);
							// getting the store name
							$store = self::easy_store($str['storeID']);
							// Getting additional data of Item from STORE_ITEM table
							$ohq = $str["onHandQuantity"];
							$srp = $str["storeReorderPoint"];
							$rp = $str["regularPrice"];
							$oc = $str["orderCost"];

							$result = $result . "<tr>
								<td>" . $value['itemName'] ."</td>
								<td>" . $value['itemType'] ."</td>
								<td>" . $value['attribute'] ."</td>
								<td>" . $value['size'] ."</td>
								<td>" . $ohq . "</td>
								<td>" . $srp . "</td>
								<td>" . $rp . "</td>
								<td>" . $oc . "</td>
								<td>
									<button  type='button' class='btn btn-link btn-sm' data-toggle='modal' data-target='#modal" . $str['siID'] ."'><span class='glyphicon glyphicon-th-list' title='More details'></span></button>
									<div id='modal" . $str['siID'] ."' class='modal fade' role='dialog'>
										<div class='modal-dialog'>
											<div class='modal-content'>
												<div class='modal-header'>
													<button type='button' class='close' data-dismiss='modal'>&times;</button>
	         										<h4 class='modal-title'>" . $value['itemName'] ."</h4>
												</div>
												<div class='modal-body row'>
													<div class='form-group col-lg-4'>
														<label>Store</label>
														<input type='text' class='form-control' value='" . $store ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Department</label>
														<input type='text' class='form-control' value='" . $dept ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Vendor</label>
														<input type='text' class='form-control' value='" . $vendor ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Description</label>
														<input type='text' class='form-control' value='" . $value['itemDes'] ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Item No.</label>
														<input type='text' class='form-control' value='" . $value['itemNo'] ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Receipt No.</label>
														<input type='text' class='form-control' value='" . $value['receiptNo'] ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>UPC</label>
														<input type='text' class='form-control' value='" . $value['UPC'] ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Order Cost</label>
														<input type='text' class='form-control' value='" . $value['orderCost'] ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Alt. Lookup</label>
														<input type='text' class='form-control' value='" . $value['alternateLookup'] ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Store Reorder Point</label>
														<input type='text' class='form-control' value='" . $value['reorderPointByStore'] ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Company Reorder Point</label>
														<input type='text' class='form-control' value='" . $value['companyReorderPoint'] ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Sell Unit</label>
														<input type='text' class='form-control' value='" . $value['usualSellUnit'] ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Order Unit</label>
														<input type='text' class='form-control' value='" . $value['usualOrderUnit'] ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Base Unit</label>
														<input type='text' class='form-control' value='" . $value['baseUnit'] ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Item Unit 2</label>
														<input type='text' class='form-control' value='" . $value['itemUnit2'] ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Item Unit 3</label>
														<input type='text' class='form-control' value='" . $value['itemUnit3'] ."' readonly>
													</div>
													<div class='form-group col-lg-4'>
														<label>Item Unit 4</label>
														<input type='text' class='form-control' value='" . $value['itemUnit4'] ."' readonly>
													</div>
												</div>
												<div class='modal-footer'>
													<button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>Close</button>
												</div>
											</div>
										</div>
									</div>

									<button  type='button' class='btn btn-link btn-sm' data-toggle='modal' data-target='#edit" . $str['siID'] ."'><span class='glyphicon glyphicon-pencil' title='Quick Edit'></span></button>
									<div id='edit" . $str['siID'] ."' class='modal fade' role='dialog'>
									    <div class='modal-dialog'>
									        <div class='modal-content'>
									            <form method='post' action='../fns/edit_store_item.php'>
									                <fieldset>
									                	<div class='modal-header'>
									                		<button type='button' class='close' data-dismiss='modal'>&times;</button>
									                    	<h4><small>Quick Edit</small> <strong>" . $value['itemName'] ."</strong> <small>Information</small></h4>
									                    </div>
									                    <div class='modal-body'>
										                    <div class='row'>
										                        <div class='form-group col-lg-6'>
										                            <label>On Hand Quantity</label>
										                            <input class='form-control input-box' name='onHandQuantity' type='number' min='0' value='". $ohq ."'>
										                        </div>
										                        <div class='form-group col-lg-6'>
										                            <label>Store Reorder Point</label>
										                            <input class='form-control input-box' name='storeReorderPoint' type='number' min='0' value='". $srp ."'>
										                        </div>
										                        <div class='form-group col-lg-6'>
										                            <label>Regular Price</label>
										                            <input class='form-control input-box' name='regularPrice' type='number' min='0' step='0.01' value='". $rp ."'>
										                        </div>
										                        <div class='form-group col-lg-6'>
										                            <label>Order Cost</label>
										                            <input class='form-control input-box' name='orderCost' type='number' min='0' value='". $oc ."'>
										                        </div>
										                        <input name='id' type='hidden' value='" . $str['siID'] ."'>
										                    </div>
										                </div>

										                <div class='modal-footer'>
										                    <button class='btn btn-primary btn-sm' type='submit' class='edit-item'>
										                        <span class='glyphicon glyphicon-edit'></span> Edit Item
										                    </button>
										                    <button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>Close</button>
										                </div>
									                </fieldset>
									            </form>
									        </div>
									    </div>
									</div>

									<button  type='button' class='btn btn-link btn-sm' data-toggle='modal' data-target='#delete" . $str['siID'] ."'><span class='glyphicon glyphicon-trash' title='Delete Item'></span></button>
									<div id='delete" . $str['siID'] ."' class='modal fade' role='dialog'>
									    <div class='modal-dialog'>
									        <div class='modal-content'>
									            <form method='post' action='../fns/delete_store_item.php'>
									                <fieldset>
									                	<div class='modal-header'>
									                		<button type='button' class='close' data-dismiss='modal'>&times;</button>
									                    	<h4><strong>ALERT!</strong> Confirmation Message</h4>
									                    </div>
									                    <div class='modal-body'>
										                    <p>Are you sure to delete <strong>" . $value['itemName'] ."</strong>? Note that all records linked to this item will be removed.</p>
										                    <input type='hidden' name='delete_id' value='".$str["itemID"]."'>
										                </div>

										                <div class='modal-footer'>
										                    <button class='btn btn-primary btn-sm' type='submit' class='delete-item'>
										                        <span class='glyphicon glyphicon-edit'></span> Delete Item
										                    </button>
										                    <button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>Cancel</button>
										                </div>
									                </fieldset>
									            </form>
									        </div>
									    </div>
									</div>
								</td>
							</tr>";
						}
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
				$item_sql = "INSERT INTO item 
					(itemType, deptID, vendorID, itemName, itemDes, attribute, size, itemNo, receiptNo, UPC, 
						orderCost, alternateLookup, reorderPointByStore, companyReorderPoint, usualSellUnit, usualOrderUnit, 
						baseUnit, itemUnit2, itemUnit3, itemUnit4, itemDate) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())";
				$item = dataBase::getInstance()->prepare($item_sql);
					$item->execute(array($itemType, $deptID, $vendorID, $itemName, $itemDes, $attribute, $size
						,$itemNo, $receiptNo, $UPC, $orderCost, $alternateLookup, $reorderPointByStore, $companyReorderPoint
						,$usualSellUnit, $usualOrderUnit, $baseUnit, $itemUnit2, $itemUnit3, $itemUnit4));

				$store_sql = "SELECT * FROM store";
				$store = dataBase::getInstance()->prepare($store_sql);
				$store->execute();

				$store_item_sql = "INSERT INTO store_item (itemID, storeID, onHandQuantity, storeReorderPoint, regularPrice, 
					orderCost) VALUES (?,?,?,?,?,?)";

				foreach ($store as $key => $value) {
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

		function get_item_count()
		{
			try {
				$sql = "SELECT * FROM item";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$count = $stmt->rowCount();
				return $count+1;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function get_item_list($key)
		{
			try {
				$sql = "SELECT * FROM item WHERE itemID LIKE '%".$key."%' OR itemName LIKE '%".$key."%' OR alternateLookup LIKE '%".$key."%'";
				if ($key == "") {
					$sql = "SELECT * FROM item";
				}
				
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$result = "";
				foreach ($stmt as $key => $value) {
					$result = $result . "<li><a href='#' class='selected-item'><input type='hidden' value='".$value["itemID"]."'>" .$value["itemName"]. "</a></li>";
				}
				return $result;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function get_item_data($itemID, $storeID)
		{
			try {
				$sql = "SELECT * FROM item WHERE itemID=?";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($itemID));
				$result = "";
				foreach ($stmt as $key => $value) {
					$result = $value["itemID"] . "~" . $value["itemName"];
				}
				$sql = "SELECT * FROM store_item WHERE itemID=? AND storeID=?";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($itemID, $storeID));
				foreach ($stmt as $key => $value) {
					$result = $result . "~" . $value["onHandQuantity"] . "~" . $value["regularPrice"];
				}
				return $result;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function edit_store_item($onHandQuantity, $storeReorderPoint, $regularPrice, $orderCost, $id)
		{
			try {
				$sql = "UPDATE store_item SET onHandQuantity=?, storeReorderPoint=?, regularPrice=?,  orderCost=? WHERE siID=?";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($onHandQuantity, $storeReorderPoint, $regularPrice, $orderCost, $id));
				return "success";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function delete_store_item($id)
		{
			try {
				$sql = "DELETE FROM item WHERE itemID=?";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($id));
				return "success";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function get_item_list_table()
		{
			try {
				$sql = "SELECT * FROM item";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$result = "<thead><tr><th>Item List</th></tr></thead>";
				foreach ($stmt as $key => $value) {
					$result = $result."<tr>
						<td class='item'>
							<input type='hidden' name='itemID' value='".$value['itemID']."'>".$value["itemName"]."<span></span>
						</td>
					</tr>";
				}
				return $result;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function get_item_list_info($id)
		{
			try {
				$sql = "SELECT * FROM item WHERE itemID=?";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($id));
				$result = "";
				// foreach ($stmt as $key => $value) {
				// 	$result = $value["itemName"]."~".$value["itemID"]."~".$value["itemDes"];
				// }
				foreach ($stmt as $key => $value) {
					$sql2 = "SELECT * FROM store_item WHERE itemID=?";
					$stmt2 = dataBase::getInstance()->prepare($sql2);
					$stmt2->execute(array($value["itemID"]));
					$result2 = "";
					foreach ($stmt2 as $key => $value2) {
						$sql3 = "SELECT * FROM store WHERE storeID=?";
						$stmt3 = dataBase::getInstance()->prepare($sql3);
						$stmt3->execute(array($value2["storeID"]));
						foreach ($stmt3 as $key => $value3) {
							$result2 = $result2."<fieldset class='col-sm-3 text-center'>
								<legend>
									<h4>
										<a href='#' title='Edit ".$value3["storeName"]." info' class='btn btn-xs red pull-right' data-toggle='modal' data-target='#edit" . $value2['siID'] ."'>
											<span class='glyphicon glyphicon-pencil'></span>
										</a>
										<strong>".$value3["storeName"]."</strong> <small>Information</small>
										<div id='edit" . $value2['siID'] ."' class='modal fade in' role='dialog'>
										    <div class='modal-dialog'>
										        <div class='modal-content'>
										            <form method='post' action='../fns/edit_store_item.php'>
										                <fieldset>
										                	<div class='modal-header'>
										                		<button type='button' class='close' data-dismiss='modal'>&times;</button>
										                    	<h4><small>Quick Edit</small> <strong>" . $value['itemName'] ."</strong> <small>Information</small></h4>
										                    </div>
										                    <div class='modal-body'>
											                    <div class='row'>
											                        <div class='form-group col-lg-6'>
											                            <label>On Hand Quantity</label>
											                            <input class='form-control input-box' name='onHandQuantity' type='number' min='0' value='".$value2["onHandQuantity"]."'>
											                        </div>
											                        <div class='form-group col-lg-6'>
											                            <label>Store Reorder Point</label>
											                            <input class='form-control input-box' name='storeReorderPoint' type='number' min='0' value='".$value2["storeReorderPoint"]."'>
											                        </div>
											                        <div class='form-group col-lg-6'>
											                            <label>Regular Price</label>
											                            <input class='form-control input-box' name='regularPrice' type='number' min='0' step='0.01' value='".$value2["regularPrice"]."'>
											                        </div>
											                        <div class='form-group col-lg-6'>
											                            <label>Order Cost</label>
											                            <input class='form-control input-box' name='orderCost' type='number' min='0' step='0.01' value='".$value2["orderCost"]."'>
											                        </div>
											                        <input name='id' type='hidden' value='" . $value2['siID'] ."'>
											                    	<input type='hidden' value='".$value["itemID"]."' name='edit-item-id'>
											                    </div>
											                </div>

											                <div class='modal-footer'>
											                    <button class='btn btn-primary btn-sm edit_item' type='submit'>
											                        <span class='glyphicon glyphicon-edit'></span> Edit Item
											                    </button>
											                    <button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>Close</button>
											                </div>
										                </fieldset>
										            </form>
										        </div>
										    </div>
										</div>
									</h4>
								</legend>";
						}
						$result2 = $result2."<div class='store-item-data'>
						<center>
							<table class='table-striped table-compact'>
								<tr>
									<td>On Hand:</td>
									<td class='sid'><strong>".$value2["onHandQuantity"]."</strong></td>
								</tr>
								<tr>
									<td>Regular Price:</td>
									<td class='sid'><strong>₱ ".$value2["regularPrice"]."</strong></td>
								</tr>
								<tr>
									<td>Reorder Point:</td>
									<td class='sid'><strong>".$value2["storeReorderPoint"]."</strong></td>
								</tr>
								<tr>
									<td>Order Cost:</td>
									<td class='sid'><strong>₱ ".$value2["orderCost"]."</strong></td>
								</tr>
							</table>
						</center>
						</div>
						</fieldset>";
					}

					$vendor = self::easy_vendor($value['vendorID']);
					$dept = self::easy_dept($value["deptID"]);

					$result = "<fieldset class='row item-info'>
						<legend class='col-sm-12 itemName'>
							<h2>
								<a  href='#' class='btn white pull-right' title='Delete ".$value["itemName"]."' data-toggle='modal' data-target='#delete".$value["itemID"]."'>
									<span class='glyphicon glyphicon-trash'></span> Delete
								</a>
								<a href='#' title='Edit ".$value["itemName"]." info' class='btn white pull-right'>
									<span class='glyphicon glyphicon-pencil'></span> Edit
								</a>
								<div id='delete".$value["itemID"]."' class='modal fade' role='dialog'>
								    <div class='modal-dialog'>
								        <div class='modal-content'>
								            <form method='post' action='../fns/delete_store_item.php'>
								                <fieldset>
								                	<div class='modal-header'>
								                		<button type='button' class='close' data-dismiss='modal'>&times;</button>
								                    	<h4><strong>ALERT!</strong> Confirmation Message</h4>
								                    </div>
								                    <div class='modal-body'>
									                    <p>Are you sure you want to delete the item <strong class='red'>" . $value['itemName'] ."</strong>? Note that all records linked to this item will be removed.</p>
									                    <input type='hidden' name='delete_id' value='".$value["itemID"]."'>
									                </div>

									                <div class='modal-footer'>
									                    <button class='btn btn-primary btn-sm' type='submit' class='delete-item'>
									                        <span class='glyphicon glyphicon-edit'></span> Delete Item
									                    </button>
									                    <button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>Cancel</button>
									                </div>
								                </fieldset>
								            </form>
								        </div>
								    </div>
								</div>
								".$value["itemName"]."
							</h2>
						</legend>
						
						<div class='col-sm-12'>
							<label>
								<small>Added on:</small> <strong class='input-box'>".$value["itemDate"]."</strong>
							</label>
						</div>

						<div class='col-sm-2'>
							<h4 id='itemID'>Item # ".$value["itemID"]."</h4>
							<div>
								<label>
									<small>Type:</small><br>
									<strong class='input-box'>".$value["itemType"]."</strong>
								</label>
							</div>
							<div>
								<label>
									<small>Department:</small><br>
									<strong class='input-box'>".$dept."</strong>
								</label>
							</div>
							<div>
								<label>
									<small>Vendor:</small><br>
									<strong class='input-box'>".$vendor."</strong>
								</label>
							</div>
							<br>
						</div>
						".$result2."

						<fieldset class='col-sm-12'>
							<legend><h4>Description:</h4></legend>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
							<p id='itemDes'>".$value["itemDes"]."</p>
						</fieldset>
						
						<div class='col-sm-3'>
							<label>Attribute: <strong>".$value['attribute']."</strong></label>
						</div>

						<div class='col-sm-3'>
							<label>Size: <strong>".$value['size']."</strong></label>
						</div>

						<div class='col-sm-3'>
							<label>Alt. Lookup: <strong>".$value['alternateLookup']."</strong></label>
						</div>
					</fieldset>";
				}
				return $result;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		// Employee functions
		function push_employee($store, $firstName, $mi, $lastName, $employeeID, $phone, $telephone, $address, $username, $password)
		{
			try {
				$sql = "INSERT INTO employee (employee, firstName, mi, lastName, employeeID, phone, telephone, address, username, password) VALUES (?,?,?,?,?,?,?,?,?,?)";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($store, $firstName, $mi, $lastName, $employeeID, $phone, $telephone, $address, $username, $password));
				return "success";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function get_employee_table()
		{
			try {
				$sql = "SELECT * FROM employee";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$result = "<thead><tr>
					<th>Employee ID</th>
					<th>First name</th>
					<th>M.I</th>
					<th>Last name</th>
					<th>Store</th>
					<th>Phone</th>
					<th>Actions</th>
				</tr></thead><tbody>";

				foreach ($stmt as $key => $value) {
					$result = $result . "<tr>
						<td>".$value['employeeID']."</td>
						<td>".$value['firstName']."</td>
						<td>".$value['mi']."</td>
						<td>".$value['lastName']."</td>
						<td>".$value['employee']."</td>
						<td>".$value['phone']."</td>
						<td><!-- Single Button -->
                            
                            <div class='btn-group'>
                                <button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    Select Action <span class='caret'></span>
                                </button>
                                    <ul class='dropdown-menu'>
                                        <li><a href='index.php?page=edit_store&storeID='>
				                			<span class='glyphicon glyphicon-th-list'></span> Details</a>
				                		</li>
                                        <li><a href='index.php?page=edit_store&storeID='>
				                			<span class='glyphicon glyphicon-pencil'></span> Edit</a>
				                		</li>
                                        <li><a href='delete_department.php?deptID='>
											<span class='glyphicon glyphicon-trash'></span> Delete</a>
										</li>
                                    </ul>
                            </div>
                            <!-- End Single Button -->
						</td>
					</tr>";
				}
				return $result . "</tbody>";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		// PURCHASE ORDER functions
		function get_po_history()
		{
			try {
				$sql = "SELECT * FROM voucher ORDER BY voucherID DESC";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$result = "<thead><tr>
					<th>PO #</th>
					<th>Order Date</th>
					<th>Status</th>
					<th>Vendor</th>
					<th>Store</th>
					<th>Qty Ordered</th>
					<th>Qty Due</th>
					<th>Subtotal</th>
					<th>Total</th>
					<th>Payment Due Date</th>
				</tr></thead><tbody>";

				foreach ($stmt as $key => $value) {
					$vendor = self::easy_vendor($value['vendorID']);
					$store = self::easy_store($value['storeID']);
					$result = $result . "<tr>
						<td>".$value['voucherID']."</td>
						<td>".$value['date']."</td>
						<td>".$value['status']."</td>
						<td>".$vendor."</td>
						<td>".$store."</td>
						<td>".$value['noOfItems']."</td>
						<td>".$value['totalQty']."</td>
						<td>".$value['subTotal']."</td>
						<td>".$value['total']."</td>
						<td>".$value['date']."</td>
					</tr>";
				}
				return $result . "</tbody>";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function get_po_num()
		{
			try {
				$sql = "SELECT * FROM voucher WHERE voucherID = (SELECT max(voucherID))";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute();
				$result = "";
				foreach ($stmt as $key => $value) {
					$result = $value['voucherID'];
				}
				return $result;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function push_po($status, $subTotal, $total, $dscPer, $discount, $taxPer, $tax, $fee, $frieght, 
			$storeID, $vendorID, $comment, $noOfItems, $totalQty)
		{
			try {
				$sql = "INSERT INTO voucher (date, status, subTotal, total, dscPer, discount, taxPer, tax, fee, frieght, 
					storeID, vendorID, comment, noOfItems, totalQty) VALUES(NOW(),?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($status, $subTotal, $total, $dscPer, $discount, $taxPer, $tax, $fee, $frieght, 
					$storeID, $vendorID, $comment, $noOfItems, $totalQty));
				return "success";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		function push_po_items($voucherID, $qty, $price, $eprice, $itemID)
		{
			try {
				$sql = "INSERT INTO voucher_item (voucherID, qty, price, eprice, itemID) VALUES(?,?,?,?,?)";
				$stmt = dataBase::getInstance()->prepare($sql);
				$stmt->execute(array($voucherID, $qty, $price, $eprice, $itemID));
				return "success";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

	}
?>