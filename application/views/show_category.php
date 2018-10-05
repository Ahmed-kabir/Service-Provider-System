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
        <form action="<?php echo base_url()?>Welcome/save_order" method="post">
            <div class="container">



                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Service Name:</b></label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo $sub_category_id->sub_category_name?>" class="form-control" name="sub_category_name" readonly>
                        <input type="hidden" value="<?php echo $sub_category_id->category_name?>" class="form-control" name="category_name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Description:</b></label >
                    <div class="col-md-10">
                        <textarea type="text"  class="form-control" name="description" readonly><?php echo $sub_category_id->description?></textarea >

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Price:</b></label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo $sub_category_id->price?>" class="form-control" name="price" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Date:</b></label>
                    <div class="col-md-10">
                        <input type="date" value="" class="form-control" name="date">
                    </div>
                </div>
<!--                <div class="form-group">-->
<!--                    <label class="control-label col-md-3" for="pwd"><b>Time:</b></label>-->
<!--                    <div class="col-md-10">-->
<!--                        <input type="time" value="" class="form-control" name="time">-->
<!--                    </div>-->
<!--                </div>-->

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Select Time:</b></label>
                    <div class="col-md-10">
                        <select  name="time" class="form-control" >
                            <option value="">Select Location</option>

                                <option value="1">9-11 AM</option>
                                <option value="2">11-01 PM</option>
                                <option value="3">01-03 PM</option>
                                <option value="4">03-06 PM</option>
                                <option value="5">06-09 PM</option>


                        </select>
                    </div>
                </div>


                <div class="form-group text-center">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success btn-lg">Order</button>
                    </div>
                </div>

            </div>
        </form>

    </div>
</div>
