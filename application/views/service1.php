
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
                <button class="btn btn-success" onclick="add_book()"><i class="glyphicon glyphicon" ></i> Add Service</button>
                <a href="#"><img src="<?php echo base_url('frontEnd/images/t8.png')?>" alt="" /></a>
                <h5>electrical service</h5>
            </div>
            <div class="col-md-4 serv-sub1">
                <button class="btn btn-success" onclick="add_book2()"><i class="glyphicon glyphicon" ></i> Add Service</button>
                <img src="<?php echo base_url('frontEnd/images/t5.png')?>" alt="" />
                <h5>plumbing service</h5>
            </div>
            <div class="col-md-4 serv-sub1">
                <button class="btn btn-success" onclick="add_book3()"><i class="glyphicon glyphicon" ></i> Add Service</button>
                <img src="<?php echo base_url('frontEnd/images/t3.jpg')?>" alt="" />
                <h5>cleaning</h5>
            </div>
            <div class="col-md-4 serv-sub1">
                <img src="<?php echo base_url('frontEnd/images/t6.png')?>" alt="" />
                <h5>home appliances</h5>
            </div>
            <div class="col-md-4 serv-sub1">
                <img src="<?php echo base_url('frontEnd/images/t7.png')?>" alt="" />
                <h5>painting service</h5>
            </div>
            <div class="col-md-4 serv-sub1">
                <img src="<?php echo base_url('frontEnd/images/t2.jpg')?>" alt="" />
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
            <img src="<?php echo base_url('frontEnd/images/g6.jpg')?>" class="img-responsive" alt="">
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
            <img src="<?php echo base_url('frontEnd/images/mobile.png')?>" alt="" class="img-responsive" />
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
                        <img src="<?php echo base_url('frontEnd/images/1.png')?>" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo base_url('frontEnd/images/2.png')?>" alt="">
                    </a>
                </li>
            </ul>

        </div>
        <div class="clearfix"></div>
    </div>
</div>


<script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
<script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>


<script type="text/javascript">
    $(document).ready( function () {
//        show_book();
    } );



    function add_book()
    {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
        //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }
    function charge()
    {
        save_method = 'add';
//        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('hide');
        $('#modal_charge').modal('show');


        // show bootstrap modal
        //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }
    function abc()
    {
        save_method = 'add';
        $('#modal_charge').modal('hide');

        $('#modal_date').modal('show');

//        $('#modal_form').modal('show');
    }
    function abcde() {
        save_method = 'add';
        $('#modal_date').modal('hide');
        $('#modal_login').modal('show');
        alert ('Thank You');
    }
</script>

<!-- Bootstrap modal -->
<div class="modal fade" data-toggle="dropdown" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Service Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <div class="form-body">
                        <div class="form-group">
                            <label class=" col-md-3">AC Checkup</label>
                            <div class="modal-footer">
                                <button type="button" id="btnSave" onclick="charge();" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">AC Gas Change</label>
                            <div class="modal-footer">
                                <button type="button" id="btnSave9" onclick="save();" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" col-md-3">AC Installation</label>
                            <div class="modal-footer">
                                <button type="button" id="btnSave8" onclick="save();" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">AC Shift</label>
                            <div class="modal-footer">
                                <button type="button" id="btnSave7" onclick="save();" class="btn btn-primary">Add</button>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<!--charge start-->
<div class="modal fade" data-toggle="dropdown" id="modal_charge" name="modal_charge" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Charge Form</h3>
            </div>
            <div class="modal-body form">

                    <div class="form-body">
                        <div class="form-group">
                            <label class=" col-md-3">AC Checkup</label>
                            <div class="modal-footer">
                                <p><b style="color: #449d44">Approximate Price 250TK.</b></
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button"  id="btnSave1" onclick="abc();" class="btn btn-success">Next</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!--charge end-->

<!--date & time start-->




<div class="modal fade" data-toggle="dropdown" id="modal_date" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Date Form</h3>
            </div>
            <div class="modal-body form">

                    <div class="form-body">
                        <div class="form-group">
                            <label class=" col-md-3">Select Date</label>
                            <div class="col-md-9">
                                <input  placeholder="date" id="date" class="form-control" type="date">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" col-md-3">Select Time</label>
                            <div class="col-md-9">
                                <input placeholder="time" id="time" class="form-control" type="time">

                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave2" onclick="abcde();" class="btn btn-success">Confirm</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>





<!--date & time end-->
<div class="modal fade" data-toggle="dropdown" id="modal_login" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Date Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <div class="form-body">
                        <div class="form-group">
                            <label class=" col-md-3">Name</label>
                            <div class="col-md-9">
                                <input name="name" placeholder="name" id="name" class="form-control" type="text">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="password" placeholder="password" id="password" class="form-control" type="password">

                            </div>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave3" onclick="abcdef();" class="btn btn-success">Confirm</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>