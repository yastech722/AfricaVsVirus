<!-- Edit Account Details Modal content-->
<?php if(isset($account['user_id'])){?>
<div id="edit<?php echo $account['user_id']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update  Account Details</h4>
            </div>
            
                <input type='hidden' name='user_id' value='<?php echo $account['user_id']; ?>'>
                <div class="modal-body">                    <div class="form-group">
                        <label for="emr">Username</label>
                        <input type="text" name="username" class="form-control" id="emr" value="<?php echo $account['username'] ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="no">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="no" value="<?php echo $account['first_name'] ?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="occ">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="occ" value="<?php echo $account['last_name']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">Change Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" id="name" value="<?php echo $account['phone_number']; ?>"required="" >
                    </div>
                    <div class="form-group">
                        <label for="reg">Change Role</label>
                        <select  name="role" class="form-control" id="reg" required="">
                            <option value="<?php echo $account['role']; ?>"><?php echo $account['role']; ?></option>
                            <option value="Admin">Admin</option>
                            <option value="Nurse">Nurse</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Lab">Lab</option>
                            <option value="Pharmacy">Pharmacy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bld">Change Password</label>
                        <input type="password"  name="password"  class="form-control" id="bld" >

                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="update_account" value="Update"  class="btn btn-primary ">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            
        </div>
    </div>
</div>

<!-- Delete Account Moda; -->
<div id="delete<?php echo $account['user_id']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete Account</h4>
            </div>
            <form  method="post"  action="../../controller/service_controller.php">
                <input type="hidden" name="service_id" value="<?php echo $service['service_id'] ?>">
                <div class="modal-body">

                    Are you sure to delete this Account?						

                </div>
                <div class="modal-footer">

                    <a href="../../controller/account_controller.php?delete_account=<?php echo $account['user_id']; ?>" class="btn btn-primary" >Delete</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

        </div>

    </div>
</div>

<?php } elseif(isset($service['service_id'])){
?>
<!-- Delete Service Moda; -->
<div id="delete<?php echo $service['service_id'] ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete Service</h4>
            </div>
            <form  method="post"  action="../../controller/service_controller.php">
                <input type="hidden" name="service_id" value="<?php echo $service['service_id'] ?>">
                <div class="modal-body">

                    Are you sure to delete this Service	?					

                </div>
                <div class="modal-footer">
                    <a href="../../controller/service_controller.php?delete_service=<?php echo $service['service_id']; ?>" class="btn btn-primary" >Delete</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

        </div>

    </div>
</div>
<!-- Update Lab Service Modal content-->
<div id="edit_lab_service<?php echo $service['service_id'] ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Service</h4>
            </div>
            <form  method="post"  action="../../controller/service_controller.php">
                <input type="hidden" name="service_id" value="<?php echo $service['service_id'] ?>">
                <div class="modal-body">

                    <div class="">

                        <div class="form-group">
                            <label for="emr">Service Name</label>
                            <input type="text" name="service_name" value="<?php echo $service['name'] ?>" class="form-control" id="emr" readonly>
                        </div>
                        <div class="form-group">
                            <label for="no">Price</label>
                            <input type="text" name="price" value="<?php echo $service['price'] ?>" class="form-control" id="no" required>
                        </div>
                    </div>							

                </div>
                <div class="modal-footer">
                    <input type="submit" name="update_lab_service" value="Update"  class="btn btn-primary ">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>
<?php } elseif(isset($stock['stock_id'])){?>
<!-- Update Drug Modal content-->
<div id="edit_drug<?php echo $stock['stock_id'] ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Drug</h4>
            </div>
            <form  method="post"  action="../../controller/service_controller.php">
                <input type="hidden" name="stock_id" value="<?php echo $stock['stock_id'] ?>">
                <div class="modal-body">

                    <div class="">

                        <div class="form-group">
                            <label for="emr">Drug Name</label>
                            <input type="text" name="service_name" value="<?php echo $stock['drug_name'] ?>" class="form-control" id="emr" readonly>
                        </div>
                        <div class="form-group">
                            <label for="no">Quantity</label>
                            <input type="number" name="quantity" value="<?php echo $stock['quantity'] ?>" class="form-control" id="no" required>
                        </div>
                        <div class="form-group">
                            <label for="no">Price</label>
                            <input type="number" name="unit_price" value="<?php echo $stock['unit_price'] ?>" class="form-control" id="no" required>
                        </div>
                    </div>							

                </div>
                <div class="modal-footer">
                    <input type="submit" name="update_drug" value="Update"  class="btn btn-primary ">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- Delete Drug Moda; -->
<div id="delete_drug<?php echo $stock['stock_id'] ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete Drug</h4>
            </div>
            <form  method="post"  action="../../controller/service_controller.php">
                <input type="hidden" name="service_id" value="<?php echo $service['service_id'] ?>">
                <div class="modal-body">

                    Are you sure to delete this drug from stock	?			

                </div>
                <div class="modal-footer">
                    <a href="../../controller/service_controller.php?delete_drug=<?php echo $stock['stock_id']; ?>" class="btn btn-primary" >Delete</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

        </div>

    </div>
</div>
<?php }