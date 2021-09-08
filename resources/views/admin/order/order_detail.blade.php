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
                        <table class="table align-items-center table-bordered">
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
                            @if(count($order->orderDetails) > 1)
                                @for($i = 0; $i < count($order->orderDetails); $i++)
                                    @if($i == 0)
                                        <tr>
                                            <td class="align-middle" rowspan="{{count($order->orderDetails)}}"><a
                                                    href="#">#{{$order->id}}</a></td>
                                            <td class="align-middle"
                                                rowspan="{{count($order->orderDetails)}}">{{$order->full_name}}</td>
                                            <td class="align-middle">{{\App\Models\Product::find($order->orderDetails[0]->product_id)->name}}</td>
                                            <td class="align-middle">{{$order->orderDetails[0]->qty}}</td>
                                            <td class="align-middle" rowspan="{{count($order->orderDetails)}}">
                                                @if($order->status == 'processing')
                                                    <span class="badge badge-info">Pending</span>
                                                @elseif($order->status == 'on-delivery')
                                                    <span class="badge badge-warning">On Delivery</span>
                                                @elseif($order->status == 'rejected')
                                                    <span class="badge badge-danger">Rejected</span>
                                                @else
                                                    <span class="badge badge-dark">Delivered</span>
                                                @endif
                                            </td>
                                            <td class="align-middle" rowspan="{{count($order->orderDetails)}}">
                                                @if($order->status == 'processing')
                                                    <a href="" data-toggle="modal" data-target="#acceptOrder"
                                                       class="btn btn-sm btn-success">Accept</a>
                                                    <a href="" data-toggle="modal" data-target="#rejectOrder"
                                                       class="btn btn-sm btn-danger">Reject</a>
                                                @elseif($order->status == 'on-delivery')
                                                    <a href="/order-delivered/{{$order->id}}" class="btn btn-sm btn-success"><i
                                                            class="fa fa-check fa-sm"></i> Mark as delivered</a>
                                                @elseif($order->status == 'rejected')
                                                    <a href="" data-toggle="modal" data-target="#rejectOrder"
                                                       class="btn btn-sm btn-danger"><i class="fa fa-eye fa-sm"></i> See reason</a>
                                                @endif

                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td>{{\App\Models\Product::find($order->orderDetails[$i]->product_id)->name}}</td>
                                            <td>{{$order->orderDetails[$i]->qty}}</td>
                                        </tr>
                                    @endif
                                @endfor
                            @else
                                <tr>
                                    <td class="align-middle"><a
                                            href="#">#{{$order->id}}</a></td>
                                    <td class="align-middle">{{$order->full_name}}</td>
                                    <td class="align-middle">{{\App\Models\Product::find($order->orderDetails[0]->product_id)->name}}</td>
                                    <td class="align-middle">{{$order->orderDetails[0]->qty}}</td>
                                    <td class="align-middle">
                                        @if($order->status == 'processing')
                                            <span class="badge badge-info">Pending</span>
                                        @elseif($order->status == 'on-delivery')
                                            <span class="badge badge-warning">On Delivery</span>
                                        @elseif($order->status == 'rejected')
                                            <span class="badge badge-danger">Rejected</span>
                                        @else
                                            <span class="badge badge-dark">Delivered</span>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        @if($order->status == 'processing')
                                            <a href="" data-toggle="modal" data-target="#acceptOrder"
                                               class="btn btn-sm btn-success"><i class="fa fa-check fa-sm"></i> Accept</a>
                                            <a href="" data-toggle="modal" data-target="#rejectOrder"
                                               class="btn btn-sm btn-danger"><i class="fa fa-trash-alt fa-sm"></i> Reject</a>
                                        @elseif($order->status == 'on-delivery')
                                            <a href="/order-delivered/{{$order->id}}" class="btn btn-sm btn-success"><i
                                                    class="fa fa-check fa-sm"></i> Mark as delivered</a>
                                        @elseif($order->status == 'rejected')
                                            <a href="" data-toggle="modal" data-target="#rejectOrder"
                                               class="btn btn-sm btn-danger"><i class="fa fa-eye fa-sm"></i> See reason</a>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive" style="margin-top: 50px;">
                        <table class="table align-items-center table-bordered">
                            <tbody>
                            <tr>
                                <td>Subtotal:</td>
                                <td>${{$order->total}}.00</td>
                            </tr>
                            <tr>
                                <td>Total:</td>
                                <td>${{$order->total}}.00</td>
                            </tr>
                            <tr>
                                <td>Order Time:</td>
                                <td>{{date('H:i - M d, Y', strtotime($order->created_at))}}</td>
                            </tr>
                            <tr>
                                <td>Estimated delivery amount:</td>
                                <td>{{$order->delivery_amount ?? 'Not yet'}}  (minutes)</td>
                            </tr>
                            <tr>
                                <td>Delivered time:</td>
                                <td>
                                    @if($order->delivered_time != null)
                                    {{date('H:i - M d, Y', strtotime($order->delivered_time))}}
                                    @else
                                        Not yet
                                    @endif
                                </td>
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
                    <form method="post" action="/admin-order/accept">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="time">Estimated time for food processing and delivery :</label>
                                <input type="number" class="form-control" id="time" name="estimated-amount"
                                       placeholder="Enter amount ( minutes )">
                                <input type="hidden" name="order-id" value="{{$order->id}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Send to customer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Reject Order -->
        <div class="modal fade" id="rejectOrder" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                @if($order->status == 'rejected')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Order rejected</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="reason">Reason of rejection: </label>
                                    <textarea class="form-control" id="reason" rows="4" disabled>{{$order->extra_info}}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Back</button>
                            </div>
                    </form>
                </div>
                @else
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Reject Order</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="/admin-order/reject">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="reason">Reason of rejection: </label>
                                    <textarea class="form-control" id="reason" name="reject-reason" rows="4" required></textarea>
                                    <input type="hidden" name="order-id" value="{{$order->id}}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Reject this order</button>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
@endsection
