@extends('admin.layout.master')
@section('title', 'Admin - Restaurant')
@section('body')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Restaurant Info</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-dark" href="./admin-dashboard">Home</a></li>
                <li class="breadcrumb-item text-dark">Restaurant Management</li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #EA1B25;">Restaurant Info</li>
            </ol>
        </div>
        <button type="button" class="btn btn-dark" style="margin-bottom: 20px; margin-top: -15px;"><i
                class="fa fa-chevron-left fa-sm"></i> Back to dashboard
        </button>
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Edit restaurant avatar :</h6>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="profile-info text-center" style="width: 50%; margin-left: 25%;">
                                <a class="text-dark" href="#" style="margin-left: 80%;" title="Delete image"><i
                                        class="fa fa-window-close fa-lg delete" style="cursor: pointer;"></i></a>
                                <div class="profile-thumb brd-rd50" style="width: 200px; height: 150px;">
                                    <img class="profile-display" src="admin/img/food1.jpg" alt="profile-img1.jpg"
                                         itemprop="image">
                                </div>
                                <div class="profile-img-upload-btn">
                                    <label class="fileContainer">
                                        CHANGE IMAGE
                                        <input class="profile-upload" type="file"/>
                                    </label>
                                </div>
                            </div>
                            <div class="btn-group" style="width : 40%;margin: 20px 30%;">
                                <button type="submit" class="btn btn-danger">Update Avatar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Edit restaurant images :</h6>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="profile-info text-center">
                                <a class="text-dark" href="#" style="margin-left: 60%;" title="Delete image"><i
                                        class="fa fa-window-close fa-lg delete" style="cursor: pointer;"></i></a>
                                <div class="profile-thumb brd-rd50">
                                    <img class="profile-display" src="admin/img/girl.png" alt="profile-img1.jpg"
                                         itemprop="image">
                                </div>
                                <div class="profile-img-upload-btn">
                                    <label class="fileContainer">
                                        CHANGE IMAGE
                                        <input class="profile-upload" type="file"/>
                                    </label>
                                </div>
                            </div>
                            <div class="profile-info text-center">
                                <a class="text-dark" href="#" style="margin-left: 60%;" title="Delete image"><i
                                        class="fa fa-window-close fa-lg delete" style="cursor: pointer;"></i></a>

                                <div class="profile-thumb brd-rd50">
                                    <img class="profile-display" src="admin/img/girl.png" alt="profile-img1.jpg"
                                         itemprop="image">
                                </div>
                                <div class="profile-img-upload-btn">
                                    <label class="fileContainer">
                                        CHANGE IMAGE
                                        <input class="profile-upload" type="file"/>
                                    </label>
                                </div>
                            </div>
                            <div class="profile-info text-center">
                                <a class="text-dark" href="#" style="margin-left: 60%;" title="Delete image"><i
                                        class="fa fa-window-close fa-lg delete" style="cursor: pointer;"></i></a>

                                <div class="profile-thumb brd-rd50">
                                    <img class="profile-display" src="admin/img/girl.png" alt="profile-img1.jpg"
                                         itemprop="image">
                                </div>
                                <div class="profile-img-upload-btn">
                                    <label class="fileContainer">
                                        CHANGE IMAGE
                                        <input class="profile-upload" type="file"/>
                                    </label>
                                </div>
                            </div>
                            <div class="profile-info text-center">
                                <a class="text-dark" href="#" style="margin-left: 60%;" title="Delete image"><i
                                        class="fa fa-window-close fa-lg delete" style="cursor: pointer;"></i></a>

                                <div class="profile-thumb brd-rd50">
                                    <img class="profile-display" src="admin/img/food1.jpg" alt="profile-img1.jpg"
                                         itemprop="image">
                                </div>
                                <div class="profile-img-upload-btn">
                                    <label class="fileContainer">
                                        CHANGE IMAGE
                                        <input class="profile-upload" type="file"/>
                                    </label>
                                </div>
                            </div>
                            <div class="btn-group" style="width : 40%;margin: 40px 30%;">
                                <button type="submit" class="btn btn-danger">Update Images</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Edit restaurant information :</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Restaurant Id :</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp"
                                       placeholder="" value="#123EA" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Package :</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp"
                                       placeholder="Enter restaurant name" value="Restaurant Package" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Restaurant name :</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp"
                                       placeholder="Enter restaurant name" value="This is old restaurant Name">
                            </div>
                            <div class="form-group">
                                <label for="select2Multiple">Category :</label>
                                <select class="select2-multiple form-control" name="states[]" multiple="multiple"
                                        id="select2Multiple">
                                    <option value="">Select</option>
                                    <option value="Aceh">Aceh</option>
                                    <option value="Sumatra Utara">Sumatra Utara</option>
                                    <option value="Sumatra Barat">Sumatra Barat</option>
                                    <option value="Riau">Riau</option>
                                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                                    <option value="Jambi">Jambi</option>
                                    <option value="Bengkulu">Bengkulu</option>
                                    <option value="Sumatra Selatan">Sumatra Selatan</option>
                                    <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                    <option value="Lampung">Lampung</option>
                                    <option value="Banten">Banten</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                    <option value="Yogyakarta">Yogyakarta</option>
                                    <option value="Jawa TImur">Jawa Timur</option>
                                    <option value="Bali">Bali</option>
                                    <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                    <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                                    <option value="Gorontalo">Gorontalo</option>
                                    <option value="Sulawaesi Barat">Sulawesi Barat</option>
                                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                                    <option value="Maluku">Maluku</option>
                                    <option value="Maluku Utara">Maluku Utara</option>
                                    <option value="Papua Barat">Papua Barat</option>
                                    <option value="Papua">Papua</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Telephone :</label>
                                <input type="tel" class="form-control" id="exampleInputPassword1"
                                       placeholder="Enter restaurant phone number">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email :</label>
                                <input type="email" class="form-control" id="exampleInputPassword1"
                                       placeholder="Enter restaurant email">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Address :</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger" style="margin-right: 20px;">Update Info
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
