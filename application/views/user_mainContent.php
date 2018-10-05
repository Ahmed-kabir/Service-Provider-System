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
        <th scope="col">Action</th>

    </tr>
    </thead>
    <tbody>


        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
             <td>


            </td>
        </tr>


    </tbody>
</table>






