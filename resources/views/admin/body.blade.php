<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Hotel Status Dashboard</h2>
        </div>
    </div>

    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-home"></i></div><strong>Total Rooms</strong>
                            </div>
                            <div class="number dashtext-1">12</div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-contract"></i></div><strong>Bookings</strong>
                            </div>
                            <div class="number dashtext-2">45</div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Messages</strong>
                            </div>
                            <div class="number dashtext-3">14</div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Revenue</strong>
                            </div>
                            <div class="number dashtext-4">98k</div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="line-cahrt block">
                        <div class="title"><strong>Monthly Booking Trends</strong></div>
                        <canvas id="lineCahrt"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="stats-2-block block d-flex">
                        <div class="stats-2 d-flex">
                            <div class="stats-2-arrow height"><i class="fa fa-caret-up"></i></div>
                            <div class="stats-2-content"><strong class="d-block">32</strong><span class="d-block">Check-ins today</span>
                                <div class="progress progress-template progress-small">
                                    <div role="progressbar" style="width: 60%;" class="progress-bar progress-bar-template progress-bar-small dashbg-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="stats-2 d-flex">
                            <div class="stats-2-arrow low"><i class="fa fa-caret-down"></i></div>
                            <div class="stats-2-content"><strong class="d-block">12</strong><span class="d-block">Check-outs today</span>
                                <div class="progress progress-template progress-small">
                                    <div role="progressbar" style="width: 35%;" class="progress-bar progress-bar-template progress-bar-small dashbg-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="stats-3-block block d-flex">
                        <div class="stats-3"><strong class="d-block">120</strong><span class="d-block">Total Gallery Photos</span>
                            <div class="progress progress-template progress-small">
                                <div role="progressbar" style="width: 50%;" class="progress-bar progress-bar-template progress-bar-small dashbg-1"></div>
                            </div>
                        </div>
                        <div class="stats-3 d-flex justify-content-between text-center">
                            <div class="item"><strong class="d-block strong-sm">8</strong><span class="d-block span-sm">Pending</span>
                                <div class="line"></div><small>Bookings</small>
                            </div>
                            <div class="item"><strong class="d-block strong-sm">4</strong><span class="d-block span-sm">New</span>
                                <div class="line"></div><small>Reviews</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="messages-block block">
                        <div class="title"><strong>Recent Customer Messages</strong></div>
                        <div class="messages">
                            <a href="#" class="message d-flex align-items-center">
                                <div class="profile"><img src="admin/img/avatar-3.jpg" alt="..." class="img-fluid"><div class="status online"></div></div>
                                <div class="content"> <strong class="d-block">Nadia Halsey</strong><span class="d-block">Is there a pool available?</span><small class="date d-block">9:30am</small></div>
                            </a>
                            <a href="#" class="message d-flex align-items-center">
                                <div class="profile"><img src="admin/img/avatar-2.jpg" alt="..." class="img-fluid"><div class="status away"></div></div>
                                <div class="content"> <strong class="d-block">Peter Ramsy</strong><span class="d-block">Need to change my arrival date.</span><small class="date d-block">7:40am</small></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>