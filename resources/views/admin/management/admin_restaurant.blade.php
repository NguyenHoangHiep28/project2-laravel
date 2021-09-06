@extends('admin.management.layout.app')
@section('body')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Restaurant List</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-dark">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #EA1B25;">Restaurant List</li>
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
                                    <a href="admin_restaurant_detail.html" data-toggle="tooltip" title="Detail"><span
                                            class="fa fa-eye"></span></a>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal"
                                       data-toggle="tooltip" title="Delete restaurant"><span style="padding-left: 15px"
                                                                                             class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>RA5324</td>
                                <td><a href="#">Restaurant2</a></td>
                                <td>MC.Donal</td>
                                <td>0989.989.999</td>
                                <td>57 Hang Bo, Ba Trieu, HN</td>
                                <td><span class="badge badge-info">Not payment</span></td>
                                <td>
                                    <a href="order_detail.html" data-toggle="tooltip" title="Detail"><span
                                            class="fa fa-eye"></span></a>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal"
                                       data-toggle="tooltip" title="Delete restaurant"><span style="padding-left: 15px"
                                                                                             class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>RA8568</td>
                                <td><a href="#">Restaurant3</a></td>
                                <td>Mr.John</td>
                                <td>098.123.4567</td>
                                <td>87 Dai Linh, Trung Van, Nam Tu Liem, HN</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="order_detail.html" data-toggle="tooltip" title="Detail"><span
                                            class="fa fa-eye"></span></a>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal"
                                       data-toggle="tooltip" title="Delete restaurant"><span style="padding-left: 15px"
                                                                                             class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>RA1453</td>
                                <td><a href="#">Restaurant4</a></td>
                                <td>John Cart</td>
                                <td>0779.778.776</td>
                                <td>103 Ly Thuong Kiet, Tran Dung Dao, HN</td>
                                <td><span class="badge badge-dark">Expired</span></td>
                                <td>
                                    <a href="order_detail.html" data-toggle="tooltip" title="Detail"><span
                                            class="fa fa-eye"></span></a>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal"
                                       data-toggle="tooltip" title="Delete restaurant"><span style="padding-left: 15px"
                                                                                             class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
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
@endsection
