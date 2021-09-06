@extends('admin.layout.master')
@section('title','Admin - Products')
@section('body')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Product List</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-dark" href="./admin-dashboard">Home</a></li>
                <li class="breadcrumb-item text-dark">Product Management</li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #EA1B25;">Product List</li>
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
                                <th>Product ID</th>
                                <th>Category</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="#">RA0449</a></td>
                                <td>Fast Food</td>
                                <td>Product Name ...</td>
                                <td><img src="admin/img/food1.jpg" alt="" style="width: 200px; height: 120px;"></td>
                                <td>$30.00</td>
                                <td><span class="badge badge-success">In Stock</span></td>
                                <td>
                                    <a href="/admin-product-edit/1" class="btn btn-sm btn-dark"><i
                                            class="fa fa-pencil-alt fa-sm"></i> Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">RA0449</a></td>
                                <td>Fast Food</td>
                                <td>Product Name ...</td>
                                <td><img src="admin/img/food1.jpg" alt="" style="width: 200px; height: 120px;"></td>
                                <td>$30.00</td>
                                <td><span class="badge badge-success">In Stock</span></td>
                                <td>
                                    <a href="/admin-product-edit/1" class="btn btn-sm btn-dark"><i class="fa fa-pencil-alt fa-sm"></i> Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">RA0449</a></td>
                                <td>Fast Food</td>
                                <td>Product Name ...</td>
                                <td><img src="admin/img/food1.jpg" alt="" style="width: 200px; height: 120px;"></td>
                                <td>$30.00</td>
                                <td><span class="badge badge-warning">Out Stock</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-dark"><i class="fa fa-pencil-alt fa-sm"></i> Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">RA0449</a></td>
                                <td>Fast Food</td>
                                <td>Product Name ...aaaaaaaaaaaaaaaa</td>
                                <td><img src="admin/img/food1.jpg" alt="" style="width: 200px; height: 120px;"></td>
                                <td>$30.00</td>
                                <td><span class="badge badge-warning">Out Stock</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-dark"><i class="fa fa-pencil-alt fa-sm"></i> Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">RA0449</a></td>
                                <td>Fast Food</td>
                                <td>Product Name ...</td>
                                <td><img src="admin/img/food1.jpg" alt="" style="width: 200px; height: 120px;"></td>
                                <td>$30.00</td>
                                <td><span class="badge badge-success">In Stock</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-dark"><i class="fa fa-pencil-alt fa-sm"></i> Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        <!--Row-->
@endsection
