@extends('admin.layout.master')
@section('body')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Order Detail</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./admin-dashboard">Home</a></li>
                <li class="breadcrumb-item">Orders</li>
                <li class="breadcrumb-item active" aria-current="page">Order Detail</li>
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
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Item</th>
                                <th>Qty</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="#">RA0449</a></td>
                                <td>Udin Wayang</td>
                                <td>Nasi Padang</td>
                                <td>2</td>
                                <td><span class="badge badge-info">Pending</span></td>
                                <td>
                                    <a href="" data-toggle="modal" data-target="#acceptOrder"
                                       class="btn btn-sm btn-success">Accept</a>
                                    <a href="" data-toggle="modal" data-target="#rejectOrder"
                                       class="btn btn-sm btn-danger">Reject</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive" style="margin-top: 50px;">
                        <table class="table align-items-center table-bordered">
                            <tbody>
                            <tr>
                                <td>Subtotal:</td>
                                <td>$40.00</td>
                            </tr>
                            <tr>
                                <td>Total:</td>
                                <td>$40.00</td>
                            </tr>
                            <tr>
                                <td>Order Time:</td>
                                <td>20:40 - Aug 17,2017</td>
                            </tr>
                            <tr>
                                <td>Estimated delivery amount:</td>
                                <td>Not Yet</td>
                            </tr>
                            <tr>
                                <td>Delivered time:</td>
                                <td>Not Yet</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href="/admin-order" class="btn btn-dark" style="margin-top: 20px;"><i class="fa fa-chevron-left"></i>
                    Back to orders</a>
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
@endsection
