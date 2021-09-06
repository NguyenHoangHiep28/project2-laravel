@extends('admin.management.layout.app')
@section('body')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Restaurant Detail</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-dark">Home</a></li>
                <li class="breadcrumb-item">Restaurants</li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #EA1B25;">Restaurant Detail</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <!-- Simple Tables -->
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Restaurant</th>
                                <th>Manager</th>
                                <th>Phone Restaurant</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>RA0449</td>
                                <td><a href="#">Restaurant1</a></td>
                                <td>J.Clay</td>
                                <td>098.7654.321</td>
                                <td>123 Kim ma, Ba Dinh, HN</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>
                                    <a href="order_detail.html" data-toggle="tooltip" title="Confirm"><span
                                            class="fa fa-check"></span></a>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal"
                                       data-toggle="tooltip" title="Delete restaurant"><span style="padding-left: 15px"
                                                                                             class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive" style="margin-top: 50px;">
                        <table class="table align-items-center table-bordered">
                            <tbody>
                            <tr>
                                <td>Avatar Restaurant:</td>
                                <td><img style="max-width: 300px; max-height: 200px" src="admin/img/logo/logo2.png"></td>
                            </tr>
                            <tr>
                                <td>Telephone of manager:</td>
                                <td>099.779.000</td>
                            </tr>
                            <tr>
                                <td>Business License:</td>
                                <td><a href="#">FoodMate-Web Application_SRS.pdf</a></td>
                            </tr>
                            <tr>
                                <td>Subscription package</td>
                                <td>Not Yet</td>
                            </tr>
                            <tr>
                                <td>Start Day:</td>
                                <td>Not Yet</td>
                            </tr>
                            <tr>
                                <td>End Date:</td>
                                <td>Not Yet</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href="admin_restaurant.html" class="btn btn-dark" style="margin-top: 20px;"><i
                        class="fa fa-chevron-left"></i> Back to restaurant</a>
            </div>
        </div>
        <!--                Modal Delete Restaurant-->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabelDeleteRestaurant"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelDeleteRestaurant">What is your reason?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <textarea style="width: 100%" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Accept Order -->
        <div class="modal fade" id="acceptOrder" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Accept Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="time">Estimated time for food processing and delivery :</label>
                                <input type="number" class="form-control" id="time" aria-describedby="emailHelp"
                                       placeholder="Enter amount ( minutes )">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-success">Send to customer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Reject Order -->
        <div class="modal fade" id="rejectOrder" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Reject Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="reason">Reason of rejection: </label>
                                <textarea class="form-control" id="reason" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger">Reject this order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!---Container Fluid-->
@endsection
