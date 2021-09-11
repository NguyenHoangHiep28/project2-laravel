@extends('admin.layout.master')
@section('title', 'Admin - Home')
@section('body')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./admin-dashboard" class="text-dark">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #EA1B25;">Dashboard</li>
            </ol>
        </div>

        <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Earnings (Monthly)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">${{$monthlyEarning}}.00</div>

                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Orders (Monthly)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$orderNumber}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-shopping-cart fa-2x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Order (Today)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$todayOrderNumber}}</div>

                            </div>
                            <div class="col-auto">
                                <i class="fas fa-window-maximize fa-2x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Customers</div>
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$customers}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold" style="color: #333333;">Monthly Recap Report</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold" style="color: #333333;">Products Sold</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle btn btn-danger btn-sm" href="#" role="button"
                               id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Month <i class="fas fa-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                 aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Select Periode</div>
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Week</a>
                                <a class="dropdown-item active bg-danger" href="#">Month</a>
                                <a class="dropdown-item" href="#">This Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach($productWithQty as $productQty)
                            <div class="mb-3">
                                <div class="small text-gray-500">{{\App\Models\Product::find($productQty["product_id"])->name ?? ''}}
                                    <div class="small float-right"><b>{{$productQty["qty"]}} of {{$totalSales}} sales</b></div>
                                </div>
                                <div class="progress" style="height: 12px;">
                                    <div class="progress-bar bg-danger text-dark" role="progressbar" style="width: {{round($productQty["qty"] / $totalSales * 100)}}%"
                                         aria-valuenow="{{$productQty["qty"]}}"
                                         aria-valuemin="0" aria-valuemax="{{$totalSales}}">{{round($productQty["qty"] / $totalSales * 100)}}%</div>
                                </div>
                            </div>
                        @endforeach
{{--                        <div class="mb-3">--}}
{{--                            <div class="small text-gray-500">Gundam 90'Editions--}}
{{--                                <div class="small float-right"><b>500 of 800 Items</b></div>--}}
{{--                            </div>--}}
{{--                            <div class="progress" style="height: 12px;">--}}
{{--                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%"--}}
{{--                                     aria-valuenow="0"--}}
{{--                                     aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <div class="small text-gray-500">Rounded Hat--}}
{{--                                <div class="small float-right"><b>455 of 800 Items</b></div>--}}
{{--                            </div>--}}
{{--                            <div class="progress" style="height: 12px;">--}}
{{--                                <div class="progress-bar bg-danger" role="progressbar" style="width: 55%"--}}
{{--                                     aria-valuenow="0"--}}
{{--                                     aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <div class="small text-gray-500">Indomie Goreng--}}
{{--                                <div class="small float-right"><b>400 of 800 Items</b></div>--}}
{{--                            </div>--}}
{{--                            <div class="progress" style="height: 12px;">--}}
{{--                                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"--}}
{{--                                     aria-valuenow="0"--}}
{{--                                     aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <div class="small text-gray-500">Remote Control Car Racing--}}
{{--                                <div class="small float-right"><b>200 of 800 Items</b></div>--}}
{{--                            </div>--}}
{{--                            <div class="progress" style="height: 12px;">--}}
{{--                                <div class="progress-bar bg-danger" role="progressbar" style="width: 30%"--}}
{{--                                     aria-valuenow="0"--}}
{{--                                     aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="card-footer text-center">
                        <a class="m-0 small text-dark card-link" href="#">View More <i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Invoice Example -->
        </div>
    </div>
    <!--Row-->
@endsection
