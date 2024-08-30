<?php include('template/dashboard-header.php'); ?>
<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
    <div class="pd-30 height-100-p">
        <h4 class="mb-30 h4">Booking Information</h4>
        <div id="chart" class="chart" data-highcharts-chart="0">
            <form>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class=" form-group">
                            <label>Check-In</label>
                            <input class="form-control" value="" type="date">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class=" form-group">
                            <label>Check-Out</label>
                            <input class="form-control" value="" type="date">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class=" form-group">
                            <select class="form-control">
                                <option placeholder="">Select Room Type</option>
                                <option id="vo">Single</option>
                                <option id="ac">Deluxe</option>
                                <option id="pc">Superior</option>
                                <option id="pp">Double Deluxe</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class=" form-group">
                            <select class="form-control">
                                <option placeholder="">Select Bed type</option>
                                <option id="vo">Single</option>
                                <option id="ac">Double</option>
                                <option id="pc">Triple</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class=" form-group">
                            <select class="form-control">
                                <option placeholder="">Select No. of Room</option>
                                <option id="vo">1</option>
                                <option id="ac">2</option>
                                <option id="pc">3</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class=" form-group">
                            <select class="form-control">
                                <option placeholder="">Select Meal</option>
                                <option id="vo">Breakfast</option>
                                <option id="ac">Lunch</option>
                                <option id="pc">Dinner</option>
                                <option id="pc">Full Meal</option>
                                <option id="pc">None</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <!-- <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-bold">Check-In</th>
                                                <th class="text-bold">Check-Out</th>
                                                <th class="text-bold">Include Meal</th>
                                                <th class="text-bold">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>07.08.2024</td>
                                                <td>08.08.2024</td>
                                                <td>Full Meal</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>1500/-</td>
                                                <td>1500/-</td>
                                                <td>1000/-</td>
                                                <td>4000/-</td>
                                            </tr>
                                            </tbody>
                                    </table>
                                </div>
                            </div> -->
        </div>
    </div>
</div>
</div>
<div class="actions clearfix">
    <a class="btn btn-primary float-right mt-2" href="#finish" role="menuitem" data-toggle="modal"
        data-target="#booking-modal">Submit
        <i class="icon-copy fa fa-paper-plane" aria-hidden="true"></i></a>
</div>
<?php include('template/dashboard-footer.php'); ?>