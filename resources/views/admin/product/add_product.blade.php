@extends('admin.layout.master')
@section('body')
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add New product</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-dark" href="./admin-dashboard">Home</a></li>
              <li class="breadcrumb-item">Product Management</li>
              <li class="breadcrumb-item active" aria-current="page" style="color: #EA1B25;">Add New Product</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Add product images :</h6>
                </div>
                <div class="card-body">
                  <form id="product-img-form">
                    <div class="profile-info text-center">
                      <div class="profile-thumb brd-rd50">
                          <img class="profile-display" src="admin/img/unnamed.png" alt="profile-img1.jpg" itemprop="image">
                      </div>
                      <div class="profile-img-upload-btn">
                          <label class="fileContainer">
                              CHOOSE IMAGE
                              <input class="profile-upload" type="file"/>
                          </label>
                      </div>
                    </div>
                    <div class="profile-info text-center">
                      <div class="profile-thumb brd-rd50">
                          <img class="profile-display" src="admin/img/unnamed.png" alt="profile-img1.jpg" itemprop="image">
                      </div>
                      <div class="profile-img-upload-btn">
                          <label class="fileContainer">
                              CHOOSE IMAGE
                              <input class="profile-upload" type="file"/>
                          </label>
                      </div>
                    </div>
                    <div class="profile-info text-center">
                      <div class="profile-thumb brd-rd50">
                          <img class="profile-display" src="admin/img/unnamed.png" alt="profile-img1.jpg" itemprop="image">
                      </div>
                      <div class="profile-img-upload-btn">
                          <label class="fileContainer">
                              CHOOSE IMAGE
                              <input class="profile-upload" type="file"/>
                          </label>
                      </div>
                    </div>
                    <div class="profile-info text-center">
                      <div class="profile-thumb brd-rd50">
                          <img class="profile-display" src="admin/img/unnamed.png" alt="profile-img1.jpg" itemprop="image">
                      </div>
                      <div class="profile-img-upload-btn">
                          <label class="fileContainer">
                              CHOOSE IMAGE
                              <input class="profile-upload" type="file"/>
                          </label>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Create product information :</h6>
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Product name :</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter product name">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Category :</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option value="">Default</option>
                        <option>Fast Food</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Price :</label>
                      <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Price ( $ )">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Discount :</label>
                      <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Price ( $ )">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Description :</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Create product</button>
                    <button type="button" class="btn btn-dark" style="margin-left: 20px;">Cancel</button>

                  </form>
                </div>
              </div>
            </div>
          </div>
            @endsection
