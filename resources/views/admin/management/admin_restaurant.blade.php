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
                                <th>Email</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($restaurants as $r)
                                <tr>
                                    <td>{{$r->id}}</td>
                                    <td><a href="./management-restaurant-detail/{{$r->id}}">{{$r->restaurant_name}}</a></td>
                                    <td>{{$r->owner_name}}</td>
                                    <td>{{$r->telephone}}</td>
                                    <td>{{$r->email}}</td>
                                    <td>{{$r->address}}</td>
                                    @if($r->status == 1)
                                        <td><span class="badge badge-info">Pending</span></td>
                                    @endif
                                    @if($r->status == 2)
                                        <td><span class="badge badge-warning">Wait for pay</span></td>
                                    @endif
                                    @if($r->status == 3)
                                        <td><span class="badge badge-success">Active</span></td>
                                    @endif
                                    @if($r->status == 4)
                                        <td><span class="badge badge-danger">Expired </span></td>
                                    @endif
                                    @if($r->status == 5)
                                        <td><span class="badge badge-dark">Stop Working</span></td>
                                    @endif
                                    <td>
                                        <a href="./management-restaurant-detail/{{$r->id}}" class="btn btn-sm btn-primary">Detail</a>
                                        <a href="javascript:void(0);" data-toggle="modal" class="btn btn-sm btn-danger" data-target="#deleteModal" >Delete</a>
                                    </td>
                                </tr>
                            @endforeach
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
