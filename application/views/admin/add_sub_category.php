<div class="row">

    <div class="col-lg-12">

        <div class="col-sm-12" style="padding: 30px;content: 20px ">

            <a href="<?php echo base_url()?>Welcome/manage_sub_category">
                <button type="submit" style="border-radius: 24px; name="btn" class="btn btn-success btn btn-primary btn-lg"><b>Manage Sub-Category</b></button>
            </a>

        </div>

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
        <form action="<?php echo base_url()?>Welcome/save_sub_category" method="post">
            <div class="container">
                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Select Category:</b></label>
                    <div class="col-md-10">
                        <select  name="category_name" class="form-control" >
                            <option value="">Select Location</option>
                            <?php foreach ($category as $cat) {?>
                            <option value="<?php echo $cat->id?>"><?php echo $cat->category_name?></option>
                            <?php }?>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="email"><b>Sub-Category Name:</b></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="sub_category_name" placeholder="Sub-Category Name" name="sub_category_name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Description:</b></label>
                    <div class="col-md-10">
                        <textarea type="text" class="form-control" id="description" placeholder="Description" name="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="email"><b>Price:</b></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="price" placeholder=" Price" name="price">
                    </div>
                </div>

                <div class="form-group text-center">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>

            </div>
        </form>

    </div>
</div>