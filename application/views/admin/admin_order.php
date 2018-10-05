<div class="card-body">

    <div class="col-sm-8" style="text-align: left; ">
        <div class="col-sm-12" style="padding: 30px;content: 20px ">

            <a href="<?php echo base_url()?>Welcome/chk_user">
                <button type="submit" style="border-radius: 24px; name="btn" class="btn btn-success btn btn-primary btn-lg"><b>See Your Order</b></button>
            </a>

        </div>

        <p style="text-align: center">
            <?php
            $message=$this->session->userdata('message');
            if($message){
                echo "<h3><span style='color:darkgreen'><b>$message</b><span></h3>";
                $this->session->unset_userdata('message');
            }



            ?>
        </p>

    </div>




</div>
<br />
<form action="<?php echo base_url()?>welcome/search_inventory" method="post">
    <div class="row ">
        <div class="col-md-12">

            <div class="col-md-8 ">
                <input type="text" class="form-control" placeholder="Enter Code.." name="search">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
    </div>
</form>

<div class="col-md-12">
    <h3 style="text-align: center">Ordered Item</h3>
</div>

<table class="table">
    <thead>
    <tr>

        <th scope="col">O_Id</th>
        <th scope="col">Category</th>
        <th scope="col">S.Category</th>

        <th scope="col">Price</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">U_Id</th>
        <th scope="col">U_name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">As_person</th>
        <th scope="col">As_Phone</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>

    </tr>
    </thead>
    <tbody>

<?php foreach ($admin_order as $admin_order) {?>
    <tr>

        <td><?php echo $admin_order->o_id?></td>
        <td><?php echo $admin_order->category_name?></td>
        <td><?php echo $admin_order->sub_category_name?></td>

        <td><?php echo $admin_order->price?></td>
        <td><?php echo $admin_order->date?></td>
        <td><?php
            if($admin_order->time==1) {
                echo "9-11 PM";
            }
            if($admin_order->time==2) {
                echo "11-01 PM";
            }
            if($admin_order->time==3) {
                echo "01-03 PM";
            }
            if($admin_order->time==4) {
                echo "03-06 PM";
            }
            if($admin_order->time==5) {
                echo "06-09 PM";
            }
            ?></td>
        <td><?php echo $admin_order->u_id?></td>
        <td><?php echo $admin_order->u_name?></td>
        <td><?php echo $admin_order->email?></td>
        <td><?php echo $admin_order->address?></td>
        <td><?php echo $admin_order->phone?></td>
        <td><?php echo $admin_order->as_person?></td>
        <td><?php echo $admin_order->as_phone?></td>
        <td><?php
            if($admin_order->status==1) {
            echo "assigned";
            }
            if($admin_order->status==2) {
                echo "Done";
            }

            ?></td>





        <td>
            <a href="<?php echo base_url();?>welcome/assigned_order/<?php echo $admin_order->o_id?>" class="btn btn-success">
                <span class="glyphicon glyphicon-edit">Assigne</span></a>

            <a href="<?php echo base_url();?>welcome/delete_order/<?php echo $admin_order->o_id?>" class="btn btn-danger"onclick="return confirm('Are You sure to delete this');">
                <span class="glyphicon glyphicon-edit">Cancel</span></a>

        </td>
    </tr>

<?php }?>
    </tbody>
</table>
