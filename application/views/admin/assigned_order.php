<div class="row">

    <div class="col-lg-12">


        <h3 style="text-align: center;color:green "> <?php
            $message=$this->session->userdata('message');
            //            if($message){
            //                echo "<span style='color:green'>$message<span>";
            //                $this->session->unset_userdata('message');
            //            }
            echo $message;
            $this->session->unset_userdata('message');


            ?>
        </h3>


        </hr>
        <form action="<?php echo base_url()?>Welcome/update_order" method="post">
            <div class="container">



                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Service Name:</b></label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo $assigned_order->category_name?>" class="form-control" name="category_name" readonly>
                        <input type="hidden" value="<?php echo $assigned_order->o_id?>" class="form-control" name="o_id">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Description:</b></label >
                    <div class="col-md-10">
                        <textarea type="text"  class="form-control" name="description" readonly><?php echo $assigned_order->description?></textarea >

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Price:</b></label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo $assigned_order->price?>" class="form-control" name="price" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Date:</b></label>
                    <div class="col-md-10">
                        <input type="date" value="<?php echo $assigned_order->date?>" class="form-control" name="date" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Time:</b></label>
                    <div class="col-md-10">
                        <input type="time" value="<?php echo $assigned_order->time?>" class="form-control" name="time" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>U_Name:</b></label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo $assigned_order->u_name?>" class="form-control" name="u_name"readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Email:</b></label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo $assigned_order->email?>" class="form-control" name="email"readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Address:</b></label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo $assigned_order->address?>" class="form-control" name="address"readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Phone:</b></label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo $assigned_order->phone?>" class="form-control" name="phone"readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>As_Person:</b></label>
                    <div class="col-md-10">
                        <input type="text" value="" class="form-control" name="as_person">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>As_Phone:</b></label>
                    <div class="col-md-10">
                        <input type="text" value="" class="form-control" name="as_phone">
                    </div>
                </div>

                    <div class="form-group">
<!--                        <label for="status">Publication status</label>-->
                        <label class="control-label col-md-3" for="pwd"><b>Status:</b></label>
                        <div class="col-md-10">
                        <select id="status" name="status" class="form-control">
                            <option value="">Select one option</option>
                            <option value="1">Assigned</option>
                            <option value="2">Done</option>
                        </select>
                        </div>
                    </div>

                </div>

                <div class="form-group text-center">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success btn-lg">Assigned</button>
                    </div>
                </div>

            </div>
        </form>

    </div>
</div>
