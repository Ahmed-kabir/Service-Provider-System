<div class="row">

    <div class="col-lg-12">

        <div class="col-sm-12" style="padding: 30px;content: 20px ">

            <a href="<?php echo base_url()?>Welcome/manage_category">
                <button type="submit" style="border-radius: 24px; name="btn" class="btn btn-success btn btn-primary btn-lg"><b>Manage Category</b></button>
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
        <form action="<?php echo base_url()?>Welcome/update_category" method="post">
            <div class="container">

                <div class="form-group">
                    <label class="control-label col-md-3" for="email">Category Name:</label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo $editById->category_name ?>" class="form-control" name="category_name">
                        <input type="hidden" value="<?php echo $editById->id ?>" class="form-control" name="id">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="pwd">Description:</label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo $editById->description ?>" class="form-control" name="description">
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