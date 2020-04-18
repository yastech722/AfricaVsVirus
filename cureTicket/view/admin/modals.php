<!-- New Account Modal content-->
<div id="account" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Account</h4>
            </div>
            <form  method="post"  action="../../controller/account_controller.php">
                <div class="modal-body">

                    <div class="">

                        <div class="form-group">
                            <label for="emr">Username</label>
                            <input type="text" name="username" class="form-control" id="emr" required>
                        </div>
                        <div class="form-group">
                            <label for="no">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="no" required>
                        </div>


                        <div class="form-group">
                            <label for="occ">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="occ" required>
                        </div>




                        <div class="form-group">
                            <label for="name">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="reg">Role</label>
                            <select  name="role" class="form-control" id="reg" required>
                                <option value="">Select Role</option>
                                <option value="Admin">Admin</option>
                                <option value="Nurse">Nurse</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Lab">Lab</option>
                                <option value="Pharmacy">Pharmacy</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bld">Password</label>
                            <input type="password"  name="password"  class="form-control" id="bld" required>

                        </div>
                        <div class="form-group">
                            <label for="bld">Confirm Password</label>
                            <input type="password"  name="cpassword"  class="form-control" id="bld" required>

                        </div>




                    </div>							

                </div>
                <div class="modal-footer">
                    <input type="submit" name="create_account" value="Update"  class="btn btn-primary ">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- New Service Modal content-->
<div id="service" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Service</h4>
            </div>
            <form  method="post"  action="../../controller/service_controller.php">
                <div class="modal-body">

                    <div class="">

                        <div class="form-group">
                            <label for="emr">Service Category</label>
                            <select name="category" class="form-control" id="emr" required>
                                <option value="">Select an option</option>
                                <option value="Admission">Admission</option>
                                <option value="Lab">Lab</option>
                                <option value="Procedure">Procedure</option>
                            </select>
                        </div>                                       
                        <div class="form-group">
                            <label for="emr">Service Name</label>
                            <input type="text" name="service_name" class="form-control" id="emr" required>
                        </div>
                        <div class="form-group">
                            <label for="no">Price</label>
                            <input type="number" name="price" class="form-control" id="no" required>
                        </div>
                    </div>							

                </div>
                <div class="modal-footer">
                    <input type="submit" name="add_service" value="Add"  class="btn btn-primary ">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>


<!-- Hospital Modal content-->
<div id="hospital" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hospital Details</h4>
            </div>
            <form  method="post"  action="../../controller/service_controller.php">
                <div class="modal-body">



                    <div class="form-group">
                        <label for="emr">Hospital Name</label>
                        <input type="text" name="hospital_name" value="<?php echo $hospital['hospital_name'] ?>"  class="form-control" id="emr" required>
                    </div>

                    <div class="form-group">
                        <label for="no">Address</label>
                        <input type="text" name="address" value="<?php echo $hospital['address'] ?>"  class="form-control" id="no" required>
                    </div>
                    <div class="form-group">
                        <label for="no">Phone Number</label>
                        <input type="text" name="phone_number" value="<?php echo $hospital['phone_number'] ?>" class="form-control" id="no" required>
                    </div>
                </div>							


                <div class="modal-footer">
                    <input type="submit" name="update_hospital" value="Update"  class="btn btn-primary ">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>
