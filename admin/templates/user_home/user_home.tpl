{include file="user_header.tpl"}
{include file="user_navigation.tpl"}
    <!-- Main content -->
<section class="content">
    <div class="panel panel-red" style="margin-top: 10px;  min-height:800px;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h4><strong>Investers</strong></h4>

                            <p>Manage Invester</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-users"></i>
                        </div>
                        <a href="search_invester.php?job=basic_detail" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                          {php}list_tutor_count();{/php}

                          <p>Seekers</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-users"></i>
                        </div>
                        <a href="search_seeker.php?job=basic_detail" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                          <h4>Message</h4>

                          <p> Check Message</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-commenting"></i>
                        </div>
                        <a href="message.php?job=unread_message" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                          <h4>Booking</h4>

                          <p>Pending Booking</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-check-square"></i>
                        </div>
                        <a href="booking_tutor.php?job=pending" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6" style="margin-top: 10px;">
                    <h3 class="box-title">Pending Contact Tutors</h3>
                        <div class="box box-success">
                            <div class="box-header with-border">
                            </div>
                            <div  class="panel-body">
                                {php}list_pending_contact_tutor_basic();{/php}
                            </div>
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <a href='booking_tutor.php?job=pending'> <div class="btn btn-primary" style="margin-top: 10px; width: 99%; background-color: #26A65B;">View More</div></a>

                                </div>
                            </div>
                        </div>
                </div>

                <div class="col-lg-6" style="margin-top: 10px;">
                    <h3 class="box-title">Un Read Messages</h3>
                        <div class="box box-danger">
                            <div class="box-header with-border">
                            </div>
                             <div  class="panel-body">
                                {php}list_unread_basic_message();{/php}
                            </div>
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <a href='message.php?job=unread_message'>
                                        <div class="btn btn-primary" style="margin-top: 10px; width: 99%; background-color: #96281B;">View More
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>



{include file="user_footer.tpl"}
