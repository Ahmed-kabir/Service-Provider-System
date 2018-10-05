<div class="services w3ls-section">
    <div class="container">
        <h4 class="main-title">services offered</h4>
        <div class="services-main">
            <div class="col-md-4 serv-grid1">
                <!-- <h4 class="sub1">your complete home solution</h4> -->
                <h4 class="sub1">services that you need we will provide at your door step</h4>

            </div>
            <div class="col-md-8 serv-grid2">


                <div class="col-md-4 serv-sub1">
                    <button class="btn btn-success" onclick="add_service()"><i class="glyphicon glyphicon"></i>View Details</button>
                    <a href="#" onclick="add_service()"><img src="<?php echo base_url('frontEnd/images/t8.png') ?>" alt="" /></a>

                    <h5><?php echo $category[0]['category_name']; ?></h5>
                </div>

                <div class="col-md-4 serv-sub1">
                    <button class="btn btn-success" onclick="add_service1()"><i class="glyphicon glyphicon"></i>Get Service</button>
                    <a href="#"><img src="<?php echo base_url('frontEnd/images/t5.png') ?>" alt="" /></a>
                    <h5><?php echo $category[1]['category_name']; ?></h5>
                </div>
                <div class="col-md-4 serv-sub1">
                    <button class="btn btn-success" onclick="add_service2()"><i class="glyphicon glyphicon"></i>Get Service</button>
                    <a href="#"><img src="<?php echo base_url('frontEnd/images/t3.jpg') ?>" alt="" /></a>
                    <h5><?php echo $category[2]['category_name']; ?></h5>
                </div>
                <div class="col-md-4 serv-sub1">
                    <a href="#"><img src="<?php echo base_url('frontEnd/images/t6.png') ?>" alt="" /></a>
                    <h5>home appliances</h5>
                </div>
                <div class="col-md-4 serv-sub1">
                    <a href="#"><img src="<?php echo base_url('frontEnd/images/t7.png') ?>" alt="" /></a>
                    <h5>painting service</h5>
                </div>
                <div class="col-md-4 serv-sub1">
                    <a href="#"><img src="<?php echo base_url('frontEnd/images/t2.jpg') ?>" alt="" /></a>
                    <h5>carpentry</h5>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //services -->
<div class="container">
    <div class="single-left serv-bottom">
        <h5 class="main-title">complete home services
        </h5>
        <div class="post-media col-md-7">
            <img src="<?php echo base_url('frontEnd/images/g6.jpg') ?>" class="img-responsive" alt="">
            <div class="blog-text">
                <h5>Quo modo autem philosophus</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non semper, inquam; Quo modo autem philosophus loquitur? Duo
                    Reges: constructio interrete. Dici enim nihil potest verius. Hic ambiguo ludimur. An hoc usque quaque, aliter in vita?
                    Bonum incolumis acies: misera caecitas. Favorite</p>
            </div>
        </div>
        <div class="all-comments col-md-5">
            <div class="media-grids">
                <div class="w3l-media">
                    <h5>plumbing services</h5>
                    <div class="media-body">
                        <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id
                            ex pretium hendrerit</p>
                        <a href="projects.html"> view more </a>
                    </div>
                </div>
                <div class="w3l-media">
                    <h5>electrical services</h5>
                    <div class="media-body">
                        <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id
                            ex pretium hendrerit</p>
                        <a href="projects.html"> view more </a>
                    </div>
                </div>
                <div class="w3l-media">
                    <h5>painting services</h5>
                    <div class="media-body">
                        <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id
                            ex pretium hendrerit</p>
                        <a href="projects.html"> view more </a>
                    </div>
                </div>

            </div>


        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="w3ls-section app-head">
    <div class="container">
        <div class="col-md-4 col-sm-4 app-mobile">
            <img src="<?php echo base_url('frontEnd/images/mobile.png') ?>" alt="" class="img-responsive" />
        </div>
        <div class="col-md-8 col-sm-8 app-main">
            <h6>home services at your
                <span>finger tips!</span>
            </h6>
            <div class="app-form">
                <p>get the SMS link to download free app </p>
                <form action="#" method="post" class="banner_form">
                    <div class="sec-left">
                        <input placeholder="Enter your mobile #" name="first name" type="text" required="">
                    </div>
                    <input type="submit" value="get the app">
                    <div class="clearfix"></div>
                </form>
            </div>
            <ul class="app-links">
                <li>
                    <a href="#">
                        <img src="<?php echo base_url('frontEnd/images/1.png') ?>" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo base_url('frontEnd/images/2.png') ?>" alt="">
                    </a>
                </li>
            </ul>

        </div>
        <div class="clearfix"></div>
    </div>
</div>


<!--selected item start-->
<div class="modal fade" id="modal_form1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Charge Form</h3>
            </div>
            <div class="modal-body form"style="">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="book_id"/>
                    <div class="form-body">
                        <div class="form-group">
<!--                            <label class="control-label col-md-2">--><?php //echo $sub_category_array[0]['sub_category_name']?><!--</label>-->
                            <div class="modal-footer col-sm-10">
<!--                                <p><b>--><?php //echo $sub_category_array[0]['price']?><!--TK</b></p>-->
                            </div>
                        </div>


                    </div>
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" id="btnSave" onclick="next1()" class="btn btn-primary">Next</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!--selected item end-->

<!--time and date start-->
<div class="modal fade" id="next" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Time Form</h3>
            </div>
            <div class="modal-body form">
                <form action="" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="book_id"/>
                    <div class="form-body">
                        <div class="form-group">

                            <label class="control-label col-md-2">Date</label>
                            <div class="modal-footer col-sm-10">
                                <input type="date" value="" name="date" id="date"/>

                            </div>
                            <label class="control-label col-md-2">Time</label>
                            <div class="modal-footer col-sm-10">
                                <input type="time" value="" name="time" id="time"/>

                            </div>
                            <div class="modal-footer">
                                <button type="button" id="btnSave" onclick="confirm()" class="btn btn-primary">Confirm</button>

                            </div>

                        </div>

                    </div>


            </div>
            </form>
        </div>
    </div><!-- /.modal-content -->
</div
<!--time and date end
<!-- /.modal-dialog -->

<!--login start-->
<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Login Form</h3>
            </div>
            <div class="modal-body form">
                <form action="" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="book_id"/>
                    <div class="form-body">
                        <div class="form-group">

                            <label class="control-label col-md-2">name</label>
                            <div class="modal-footer col-sm-10">
                                <input type="text" value="" name="name"id="name"/>

                            </div>
                            <label class="control-label col-md-2">password</label>
                            <div class="modal-footer col-sm-10">
                                <input type="password" value="" name="password" id="password"/>

                            </div>

                            <div class="modal-footer">
                                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Login</button>
                                <button type="button" id="btnSave" onclick="register()" class="btn btn-info">New Here</button>


                            </div>

                        </div>

                    </div>


            </div>
            </form>
        </div>

    </div><!-- /.modal-content -->
</div
<!--login end
<!--register start-->
<div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Login Form</h3>
            </div>
            <div class="modal-body form">
                <form action="" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="book_id"/>
                    <div class="form-body">
                        <div class="form-group">

                            <label class="control-label col-md-2">Name</label>
                            <div class="modal-footer col-sm-10">
                                <input type="text" value="" name="name" id="name"/>
                            </div>

                            <label class="control-label col-md-2">Email</label>
                            <div class="modal-footer col-sm-10">
                                <input type="text" value="" name="email" id="email"/>
                            </div>

                            <label class="control-label col-md-2">Address</label>
                            <div class="modal-footer col-sm-10">
                                <input type="text" value="" name="address" id="address"/>
                            </div>

                            <label class="control-label col-md-2">Phone</label>
                            <div class="modal-footer col-sm-10">
                                <input type="text" value="" name="phone" id="phone"/>
                            </div>

                            <label class="control-label col-md-2">password</label>
                            <div class="modal-footer col-sm-10">
                                <input type="password" value="" name="password" id="password"/>

                            </div>

                            <div class="modal-footer">
                                <button type="button" id="btnSave" onclick="register()" class="btn btn-primary">Register</button>



                            </div>

                        </div>

                    </div>


            </div>
            </form>
        </div>

    </div><!-- /.modal-content -->
</div
<!--    register end-->
<!--final message start-->
<div class="modal fade" id="congrts" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Success</h3>

                                <?php
                                $message=$this->session->userdata('id');
                                $message1=$this->session->userdata('price');
                                $message2=$this->session->userdata('sub_category_name');
                                $message3=$this->session->userdata('date');
                                $message4=$this->session->userdata('time');
                                $message5=$this->session->userdata('name');


                                echo $message,$message1,$message2,$message3,$message4,$message5;
//                               $this->session->unset_userdata('$message','$message1','$message2','$message3','$message4','$message5');
                                ?>

                <h4 class="modal-title">  <p>Thank you,We will Contact You Soon</p></h4>
            </div>
            <div class="modal-body form">
                <form action="" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="book_id"/>
                    <div class="form-body">


                        <table class="table">

                            <thead>
                            <tr>
                                <th scope="col">Service Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Charge</th>

                            </tr>
                            </thead>
                            <tbody>


                                <tr>

                                    <td></td>

                                </tr>


                            </tbody>
                        </table>



                        <div class="modal-footer">
                            <button type="button" id="btnSave" onclick="logout()" class="btn btn-primary">logout</button>
                        </div>

                    </div>

            </div>


        </div>
        </form>
    </div>

</div>
<!--final message end-->
<!-- /.modal-content -->

<!--sub category start-->

<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php foreach ($sub_category as $sub_category) {?>
                <div class="modal-header">
                    <h3 class="modal-title"><?php echo $sub_category->sub_category_name?></h3>
                    <input name="sub_category_name" placeholder="sub_category_name" id="sub_category_name" value="<?php echo $sub_category->sub_category_name?>" class="form-control" type="hidden">
                    <input name="price" placeholder="price" id="price" value="<?php echo $sub_category->price?>" class="form-control" type="hidden">
                    <input name="id" placeholder="id" id="id" value="<?php echo $sub_category->id?>" class="form-control" type="hidden">


                </div>
                <div class="modal-body form"style="max-height: calc(100vh - 200px);
    overflow-y: auto;">

                    <div class="modal-body">
                        <p><?php echo $sub_category->description?></p>
                        <div style="color: #006eb7"><b>Approximate Price <?php echo $sub_category->price?></b></div>
                    </div>
                    <div class="modal-footer">

                        <!--                    <button type="button" id="btnSave" onclick="save1()" class="btn btn-primary">Add</button>-->

                    </div>

                </div>
            <?php }?>
            <div class="modal-footer">
<!--                <button type="button" id="btnSave" onclick="logout()" class="btn btn-primary">logout</button>-->
                <a>Want To Get Service??</a>
                <a href="<?php echo base_url('Welcome/user_login')?>"><button type="button" id="btnSave"  class="btn btn-primary">Login</button></a>
                <a>Here</a>


            </div>
<!--
        </div><!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->
</div>
<!--sub category end




<!--modal end-->
<script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js') ?>"></script>
<script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js') ?>"></script>


<script type="text/javascript">
            $(document).ready(function () {

            });
        
            function add_service()
            {
                save_method = 'add';
                $('#form')[0].reset(); // reset form on modals
                $('#modal_form').modal('show'); // show bootstrap modal
                //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
            }

            function save1()
            {
                save_method = 'add';
//                        $('#form')[0].reset(); // reset form on modals
                $('#modal_form').modal('hide');
                $('#modal_form1').modal('show'); // show bootstrap modal
                //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
            }

            function next(id,price,sub_category_name)
            {
                save_method = 'add';
                $('#modal_form').modal('hide');
                $('#next').modal('show');
                // show bootstrap modal
                console.log(id);
                console.log(price);
                console.log(sub_category_name);
//                var id=$('#id').val();
//                var sub_category_name=$('#sub_category_name').val();
//                var price=$('#price').val();
//                console.log(id);
//                console.log(sub_category_name);
//                console.log(price);
                $.ajax({
                   url:"<?php echo base_url('Welcome/price')?>",
                    type:'POST',
                    data:{id:id,sub_category_name:sub_category_name,price:price},
                    dataType:'json'
           });

            }
            function confirm()
            {
                save_method = 'add';
//                        $('#form')[0].reset(); // reset form on modals
                $('#next').modal('hide');
                $('#login').modal('show'); // show bootstrap modal
                var date=$('#date').val();
                var time=$('#time').val();
                console.log(date);
                console.log(time);
                $.ajax({
                   url:"<?php echo base_url('Welcome/time')?>",
                    type:"post",
                    data:{date:date,time:time},
                    dataType:'json',

                });


            }

            function save()
            {
                save_method = 'add';
//                        $('#form')[0].reset(); // reset form on modals
                $('#login').modal('hide');
                $('#congrts').modal('show'); // show bootstrap modal
                var name=$('#name').val();
                var password=$('#password').val();
                console.log(name);
                console.log(password);
                $.ajax({
                    url:"<?php echo base_url('Welcome/chk_user')?>",
                    type:"post",
                    data:{name:name,password:password},
                    dataType:'json'
                });
            }
            function register()
            {
                $('#login').modal('hide');
                $('#register').modal('show'); // show bootstrap modal
                var name=$('#name').val();
                var email=$('#email').val();
                var address=$('#address').val();
                var phone=$('#phone').val();
                var password=$('#password').val();
//                console.log(name);
                $.ajax({
                   url:"<?php echo base_url('Welcome/save_user')?>",
                    type:"post",
                    data:{name:name,email:email,address:address,phone:phone,password:password},
                    dataType:'json',

                });

            }
            function logout() {
                $('#congrts').modal('hide');
                alert('logout successfully');
                $.ajax({
                   url:"<?php echo base_url('Welcome/destroy')?>",
                });
                location.reload();
            }

</script>