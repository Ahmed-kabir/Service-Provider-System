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
        <form action="<?php echo base_url()?>Welcome/update_sub_category" method="post">
            <div class="container">

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Select Category:</b></label>
                    <div class="col-md-10">
                        <select  name="category_name" class="form-control" >
                            <option value="">Select Location</option>
                            <?php foreach ($category as $category) {?>
                                <option value="<?php echo $category->id?>" <?php echo $category->category_name?> </option>
                            <?php }?>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Sub-Category Name:</b></label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo $sub_category->sub_category_name ?>" class="form-control" name="sub_category_name">
                        <input type="hidden" value="<?php echo $sub_category->id ?>" class="form-control" name="id">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Description:</b></label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo $sub_category->description ?>" class="form-control" name="description">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd"><b>Price:</b></label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo $sub_category->price ?>" class="form-control" name="price">
                    </div>
                </div>

                <div class="form-group text-center">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success btn-lg">Update</button>
                    </div>
                </div>

            </div>
        </form>

    </div>
</div>
