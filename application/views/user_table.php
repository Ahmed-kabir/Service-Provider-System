<div class="card-body">

    <div class="col-sm-8" style="text-align: left; ">


        <p style="text-align: center">
            <?php
            $message=$this->session->userdata('message');
            if($message){
                echo "<span style='color:darkgreen'><b>$message</b><span>";
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
    <h3 style="text-align: center">Your Item</h3>
</div>

<table class="table">
    <thead>
    <tr>


<!--        <th scope="col">Id</th>-->
        <th scope="col">Service Name</th>
        <th scope="col">Discription</th>
        <th scope="col">Price</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Tec_person</th>
        <th scope="col">Tec_phone</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>

    </tr>
    </thead>
    <tbody>
        <?php foreach ($order as $order) {?>

        <tr>

<!--            <td>--><?php //echo $order->o_id?><!--</td>-->
            <td><?php echo $order->sub_category_name?></td>
            <td><?php echo $order->description?></td>
            <td><?php echo $order->price?></td>
            <td><?php echo $order->date?></td>
            <td><?php
                if($order->time==1) {
                    echo "9-11 PM";
                }
                if($order->time==2) {
                    echo "11-01 PM";
                }
                if($order->time==3) {
                    echo "01-03 PM";
                }
                if($order->time==4) {
                    echo "03-06 PM";
                }
                if($order->time==5) {
                    echo "06-09 PM";
                }
                ?></td>
            <td><?php echo $order->as_person?></td>
            <td><?php echo $order->as_phone?></td>
            <td><?php
                if($order->status==1) {
                    echo "assigned";
                }
                if($order->status==2) {
                    echo "Done";
                }

                ?></td>





            <td>







            <td>
<!--                <a href="--><?php //echo base_url();?><!--welcome/edit_user_order/--><?php //echo $order->o_id?><!--" class="btn btn-success">-->
<!--                    <span class="glyphicon glyphicon-edit">Edit</span></a>-->
                <a href="<?php echo base_url();?>welcome/delete_user_order/<?php echo $order->o_id?>" class="btn btn-danger"onclick="return confirm('Are You Sure To Cancel Your Order')";>
                    <span class="glyphicon glyphicon-edit">Cancel</span></a>

            </td>
        </tr>
            <?php }?>

    </tbody>
</table>
