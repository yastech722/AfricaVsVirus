<?php if (isset($stock['stock_id'])) { ?>
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
<?php } elseif (isset($patient['prescription_id']) || isset($patient[0])) {
    ?>
    <div id="dispense<?php echo $patient['prescription_id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Dispense Prescription</h4>
                </div>
                <div class="modal-body">

                    Are you sure to dispense?

                </div>
                <div class="modal-footer">
                    <a href="../../controller/patient_controller.php?dispense=<?php echo $patient['prescription_id']; ?>"  class="btn btn-default">Yes</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>

        </div>
    </div>

    <div id="acknowledge<?php echo $patient[0]; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Prescription Order</h4>
                </div>
                <form  method="post"  action="../../controller/patient_controller.php?location=Pharmacy&emr_id=<?php echo $patient[2] ?>&prescription_id=<?php echo $patient[5]; ?>">
                    <div class="modal-body">



                        <div class="form-group">

                            <label for="emr"><input type="hidden" name="drug_name" value="<?php echo $patient['drug_name']; ?>"><?php echo $patient['drug_name']; ?></label>
                            <input type="number" name="quantity" class="form-control" id="emr" placeholder="<?php echo 'Quantity of ' . $patient['drug_name'] . ' in ' . get_drug_unit_of_measure($patient['drug_name']); ?>" >
                        </div>



                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Save" name="acknowledge_prescription" class="btn btn-primary">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
<?php } elseif (isset($visit['visit_id'])) { ?>
    <!-- Prescription Order Modal content-->
    <div id="prescription_order<?php echo $visit['visit_id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Prescription</h4>
                </div>
                <form  method="post"  action="../../controller/patient_controller.php?location=Pharmacy&visit_id=<?php echo $visit['visit_id']; ?>&visit_date=<?php echo $visit['visit_date']; ?>&emr_id=<?php echo $patient['emr_id'] ?>">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="bld">Prescription Count</label>
                                    <select  name="count" class="form-control" onchange="get_prescription_form_in_modal(this.value)" id="bld">
                                        <option value="">Select an option</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div> </div> </div>
                        <div id="p_mform"></div>

                        <div class="modal-footer">
                            <input type="submit" name="order_prescription" value="Order" class="btn btn-default" >
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                </form>
            </div>

        </div>
    </div>
    </div>
<?php
}