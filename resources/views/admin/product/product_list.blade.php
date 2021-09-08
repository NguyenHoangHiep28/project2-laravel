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
                            @foreach($products as $product)
                                <tr>
                                    <td class="align-middle"><a href="#">{{$product->id}}</a></td>
                                    <td class="align-middle">{{$product->category->cate_name}}</td>
                                    <td class="align-middle">{{$product->name}}.</td>
                                    <td class="align-middle"><img src="images/resource/{{$product->productImages[0]->path}}" alt=""
                                             style="width: 200px; height: 120px;"></td>
                                    <td class="align-middle">
                                        ${{$product->discount ?? $product->price}}.00
                                    </td>
                                    <td class="align-middle">
                                        @if($product->status == 1)
                                            <span class="badge badge-success">In Stock</span>
                                        @else
                                            <span class="badge badge-warning">Out Stock</span>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        <a href="/admin-product-edit/{{$product->id}}" class="btn btn-sm btn-dark"><i
                                                class="fa fa-pencil-alt fa-sm"></i> Edit</a>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal{{$product->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i> Delete</a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="deleteModal{{$product->id}}" tabindex="-1" role="dialog"
                                     aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabelLogout">Confirm Delete Product</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete product : "{{$product->name}}" ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">No</button>
                                                <a href="/admin-delete-product/{{$product->id}}" class="btn btn-danger">Yes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        <!--Row-->
@endsection
