@extends('front.layout.master')
@section('title','FoodChow - Cloud Kitchen')
@section('body')
    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                <li class="breadcrumb-item active">Register Reservation</li>
            </ol>
        </div>
    </div>

    <section>
        <div class="block top-padd30 gray-bg">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="sec-box">
                            <div class="reservation-tabs-wrapper">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12 col-lg-3">
                                        <div class="reservation-tabs-list brd-rd5">
                                            <ul class="nav nav-tabs brd-rd5">
                                                @if($restaurant_status == 1)
                                                    <li id="tab1" >
                                                        <a >
                                                            <span class="brd-rd50">1</span> Register information</a>
                                                    </li>
                                                @else
                                                    <li id="tab1" class="active">
                                                        <a href="#reservation-tab1" data-toggle="tab">
                                                            <span class="brd-rd50">1</span> Register information</a>
                                                    </li>
                                                @endif
                                                @if($restaurant_status == 1)
                                                    <li id="tab2" class="active">
                                                        <a href="#reservation-tab2" data-toggle="tab">
                                                            <span class="brd-rd50">2</span> Pending
                                                        </a>
                                                    </li>
                                                @else
                                                    <li id="tab2">
                                                        <a>
                                                            <span class="brd-rd50">2</span> Pending
                                                        </a>
                                                    </li>
                                                @endif
                                                <li id="tab3"><a href="#reservation-tab3" data-toggle="tab"><span class="brd-rd50">3</span>  Select Package</a></li>
                                                <li id="tab4"><a href="#reservation-tab4" data-toggle="tab"><span class="brd-rd50">4</span> Activation</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-12 col-lg-9">
                                        <div class="reservation-tab-content">
                                            <div class="tab-content">
                                                @if($restaurant_status == 1)
                                                    <div class="tab-pane fade " id="reservation-tab1">
                                                        @else
                                                            <div class="tab-pane fade active in" id="reservation-tab1">
                                                                @endif

                                                                <form class="restaurant-info-form brd-rd5" action="./register-reservation/add" enctype="multipart/form-data" method="post" >
                                                                    {{csrf_field()}}
                                                                    @if(\Illuminate\Support\Facades\Auth::check())
                                                                        <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                                                    @endif

                                                                    <div class="row mrg20">
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <h4 itemprop="headline">INFORMATION RESTAURANT</h4>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <label>Restaurant name <sup style="color: red;color: red; font-size: 20px; position: relative; top: 0px;">*</sup></label>
                                                                            <input name="name_restaurant" class="brd-rd3" type="text">
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <label>Restaurant Phone <sup style="color: red;color: red; font-size: 20px; position: relative; top: 0px;">*</sup></label>
                                                                            <input name="phone_restaurant" class="brd-rd3" type="text">
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <label>Manager Name</label>
                                                                            <input name="name_manager" class="brd-rd3" type="text">
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <label>Manager Contact phone</label>
                                                                            <input name="phone_manager" class="brd-rd3" type="text">
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <label>Contact Email <sup style="color: red;color: red; font-size: 20px; position: relative; top: 0px;">*</sup></label>
                                                                            <input name="email_restaurant" class="brd-rd3" type="email">
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <h4 itemprop="headline">LOCATION</h4>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <label>Country <sup style="color: red;color: red; font-size: 20px; position: relative; top: 0px;">*</sup></label>
                                                                            <div class="select-wrp">
                                                                                <select id="country" name="country_restaurant" class="form-control">
                                                                                    <option value="Afghanistan">Afghanistan</option>
                                                                                    <option value="Åland Islands">Åland Islands</option>
                                                                                    <option value="Albania">Albania</option>
                                                                                    <option value="Algeria">Algeria</option>
                                                                                    <option value="American Samoa">American Samoa</option>
                                                                                    <option value="Andorra">Andorra</option>
                                                                                    <option value="Angola">Angola</option>
                                                                                    <option value="Anguilla">Anguilla</option>
                                                                                    <option value="Antarctica">Antarctica</option>
                                                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                                    <option value="Argentina">Argentina</option>
                                                                                    <option value="Armenia">Armenia</option>
                                                                                    <option value="Aruba">Aruba</option>
                                                                                    <option value="Australia">Australia</option>
                                                                                    <option value="Austria">Austria</option>
                                                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                                                    <option value="Bahamas">Bahamas</option>
                                                                                    <option value="Bahrain">Bahrain</option>
                                                                                    <option value="Bangladesh">Bangladesh</option>
                                                                                    <option value="Barbados">Barbados</option>
                                                                                    <option value="Belarus">Belarus</option>
                                                                                    <option value="Belgium">Belgium</option>
                                                                                    <option value="Belize">Belize</option>
                                                                                    <option value="Benin">Benin</option>
                                                                                    <option value="Bermuda">Bermuda</option>
                                                                                    <option value="Bhutan">Bhutan</option>
                                                                                    <option value="Bolivia">Bolivia</option>
                                                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                                    <option value="Botswana">Botswana</option>
                                                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                                                    <option value="Brazil">Brazil</option>
                                                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                                    <option value="Bulgaria">Bulgaria</option>
                                                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                                                    <option value="Burundi">Burundi</option>
                                                                                    <option value="Cambodia">Cambodia</option>
                                                                                    <option value="Cameroon">Cameroon</option>
                                                                                    <option value="Canada">Canada</option>
                                                                                    <option value="Cape Verde">Cape Verde</option>
                                                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                                                    <option value="Central African Republic">Central African Republic</option>
                                                                                    <option value="Chad">Chad</option>
                                                                                    <option value="Chile">Chile</option>
                                                                                    <option value="China">China</option>
                                                                                    <option value="Christmas Island">Christmas Island</option>
                                                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                                    <option value="Colombia">Colombia</option>
                                                                                    <option value="Comoros">Comoros</option>
                                                                                    <option value="Congo">Congo</option>
                                                                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                                                    <option value="Cook Islands">Cook Islands</option>
                                                                                    <option value="Costa Rica">Costa Rica</option>
                                                                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                                                    <option value="Croatia">Croatia</option>
                                                                                    <option value="Cuba">Cuba</option>
                                                                                    <option value="Cyprus">Cyprus</option>
                                                                                    <option value="Czech Republic">Czech Republic</option>
                                                                                    <option value="Denmark">Denmark</option>
                                                                                    <option value="Djibouti">Djibouti</option>
                                                                                    <option value="Dominica">Dominica</option>
                                                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                                                    <option value="Ecuador">Ecuador</option>
                                                                                    <option value="Egypt">Egypt</option>
                                                                                    <option value="El Salvador">El Salvador</option>
                                                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                                    <option value="Eritrea">Eritrea</option>
                                                                                    <option value="Estonia">Estonia</option>
                                                                                    <option value="Ethiopia">Ethiopia</option>
                                                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                                                    <option value="Fiji">Fiji</option>
                                                                                    <option value="Finland">Finland</option>
                                                                                    <option value="France">France</option>
                                                                                    <option value="French Guiana">French Guiana</option>
                                                                                    <option value="French Polynesia">French Polynesia</option>
                                                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                                                    <option value="Gabon">Gabon</option>
                                                                                    <option value="Gambia">Gambia</option>
                                                                                    <option value="Georgia">Georgia</option>
                                                                                    <option value="Germany">Germany</option>
                                                                                    <option value="Ghana">Ghana</option>
                                                                                    <option value="Gibraltar">Gibraltar</option>
                                                                                    <option value="Greece">Greece</option>
                                                                                    <option value="Greenland">Greenland</option>
                                                                                    <option value="Grenada">Grenada</option>
                                                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                                                    <option value="Guam">Guam</option>
                                                                                    <option value="Guatemala">Guatemala</option>
                                                                                    <option value="Guernsey">Guernsey</option>
                                                                                    <option value="Guinea">Guinea</option>
                                                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                                                    <option value="Guyana">Guyana</option>
                                                                                    <option value="Haiti">Haiti</option>
                                                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                                    <option value="Honduras">Honduras</option>
                                                                                    <option value="Hong Kong">Hong Kong</option>
                                                                                    <option value="Hungary">Hungary</option>
                                                                                    <option value="Iceland">Iceland</option>
                                                                                    <option value="India">India</option>
                                                                                    <option value="Indonesia">Indonesia</option>
                                                                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                                                    <option value="Iraq">Iraq</option>
                                                                                    <option value="Ireland">Ireland</option>
                                                                                    <option value="Isle of Man">Isle of Man</option>
                                                                                    <option value="Israel">Israel</option>
                                                                                    <option value="Italy">Italy</option>
                                                                                    <option value="Jamaica">Jamaica</option>
                                                                                    <option value="Japan">Japan</option>
                                                                                    <option value="Jersey">Jersey</option>
                                                                                    <option value="Jordan">Jordan</option>
                                                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                                                    <option value="Kenya">Kenya</option>
                                                                                    <option value="Kiribati">Kiribati</option>
                                                                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                                                    <option value="Kuwait">Kuwait</option>
                                                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                                                    <option value="Latvia">Latvia</option>
                                                                                    <option value="Lebanon">Lebanon</option>
                                                                                    <option value="Lesotho">Lesotho</option>
                                                                                    <option value="Liberia">Liberia</option>
                                                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                                                    <option value="Lithuania">Lithuania</option>
                                                                                    <option value="Luxembourg">Luxembourg</option>
                                                                                    <option value="Macao">Macao</option>
                                                                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                                                    <option value="Madagascar">Madagascar</option>
                                                                                    <option value="Malawi">Malawi</option>
                                                                                    <option value="Malaysia">Malaysia</option>
                                                                                    <option value="Maldives">Maldives</option>
                                                                                    <option value="Mali">Mali</option>
                                                                                    <option value="Malta">Malta</option>
                                                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                                                    <option value="Martinique">Martinique</option>
                                                                                    <option value="Mauritania">Mauritania</option>
                                                                                    <option value="Mauritius">Mauritius</option>
                                                                                    <option value="Mayotte">Mayotte</option>
                                                                                    <option value="Mexico">Mexico</option>
                                                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                                    <option value="Monaco">Monaco</option>
                                                                                    <option value="Mongolia">Mongolia</option>
                                                                                    <option value="Montenegro">Montenegro</option>
                                                                                    <option value="Montserrat">Montserrat</option>
                                                                                    <option value="Morocco">Morocco</option>
                                                                                    <option value="Mozambique">Mozambique</option>
                                                                                    <option value="Myanmar">Myanmar</option>
                                                                                    <option value="Namibia">Namibia</option>
                                                                                    <option value="Nauru">Nauru</option>
                                                                                    <option value="Nepal">Nepal</option>
                                                                                    <option value="Netherlands">Netherlands</option>
                                                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                                    <option value="New Caledonia">New Caledonia</option>
                                                                                    <option value="New Zealand">New Zealand</option>
                                                                                    <option value="Nicaragua">Nicaragua</option>
                                                                                    <option value="Niger">Niger</option>
                                                                                    <option value="Nigeria">Nigeria</option>
                                                                                    <option value="Niue">Niue</option>
                                                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                                    <option value="Norway">Norway</option>
                                                                                    <option value="Oman">Oman</option>
                                                                                    <option value="Pakistan">Pakistan</option>
                                                                                    <option value="Palau">Palau</option>
                                                                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                                                    <option value="Panama">Panama</option>
                                                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                                                    <option value="Paraguay">Paraguay</option>
                                                                                    <option value="Peru">Peru</option>
                                                                                    <option value="Philippines">Philippines</option>
                                                                                    <option value="Pitcairn">Pitcairn</option>
                                                                                    <option value="Poland">Poland</option>
                                                                                    <option value="Portugal">Portugal</option>
                                                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                                                    <option value="Qatar">Qatar</option>
                                                                                    <option value="Reunion">Reunion</option>
                                                                                    <option value="Romania">Romania</option>
                                                                                    <option value="Russian Federation">Russian Federation</option>
                                                                                    <option value="Rwanda">Rwanda</option>
                                                                                    <option value="Saint Helena">Saint Helena</option>
                                                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                                                    <option value="Samoa">Samoa</option>
                                                                                    <option value="San Marino">San Marino</option>
                                                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                                                    <option value="Senegal">Senegal</option>
                                                                                    <option value="Serbia">Serbia</option>
                                                                                    <option value="Seychelles">Seychelles</option>
                                                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                                                    <option value="Singapore">Singapore</option>
                                                                                    <option value="Slovakia">Slovakia</option>
                                                                                    <option value="Slovenia">Slovenia</option>
                                                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                                                    <option value="Somalia">Somalia</option>
                                                                                    <option value="South Africa">South Africa</option>
                                                                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                                                    <option value="Spain">Spain</option>
                                                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                                                    <option value="Sudan">Sudan</option>
                                                                                    <option value="Suriname">Suriname</option>
                                                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                                                    <option value="Swaziland">Swaziland</option>
                                                                                    <option value="Sweden">Sweden</option>
                                                                                    <option value="Switzerland">Switzerland</option>
                                                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                                    <option value="Taiwan">Taiwan</option>
                                                                                    <option value="Tajikistan">Tajikistan</option>
                                                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                                    <option value="Thailand">Thailand</option>
                                                                                    <option value="Timor-leste">Timor-leste</option>
                                                                                    <option value="Togo">Togo</option>
                                                                                    <option value="Tokelau">Tokelau</option>
                                                                                    <option value="Tonga">Tonga</option>
                                                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                                    <option value="Tunisia">Tunisia</option>
                                                                                    <option value="Turkey">Turkey</option>
                                                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                                    <option value="Tuvalu">Tuvalu</option>
                                                                                    <option value="Uganda">Uganda</option>
                                                                                    <option value="Ukraine">Ukraine</option>
                                                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                                                    <option value="United Kingdom">United Kingdom</option>
                                                                                    <option value="United States">United States</option>
                                                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                                    <option value="Uruguay">Uruguay</option>
                                                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                                                    <option value="Vanuatu">Vanuatu</option>
                                                                                    <option value="Venezuela">Venezuela</option>
                                                                                    <option selected="selected" value="Viet Nam">Viet Nam</option>
                                                                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                                                    <option value="Western Sahara">Western Sahara</option>
                                                                                    <option value="Yemen">Yemen</option>
                                                                                    <option value="Zambia">Zambia</option>
                                                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <label>City <sup style="color: red;color: red; font-size: 20px; position: relative; top: 0px;">*</sup></label>
                                                                            <input name="city_restaurant" class="brd-rd3" type="text">
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <label>No./Street <sup style="color: red;color: red; font-size: 20px; position: relative; top: 0px;">*</sup></label>
                                                                            <input name="street_restaurant"  class="brd-rd3" type="text">
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <h4 itemprop="headline">UPLOAD AVATAR AND FILE BUSINESS LICENSE</h4>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <div class="profile-img-upload-btn">
                                                                                <label class="fileContainer brd-rd5 yellow-bg">Upload Images
                                                                                    <input type="file" id="images" name="avatar_restaurant" required="true" onchange="loadImage(event)">
                                                                                </label>
                                                                            </div>
                                                                            <img id="output"/>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <div class="profile-img-upload-btn">
                                                                                <label class="fileContainer brd-rd5 yellow-bg">Upload File
                                                                                    <input type="file" id="uploadBtn" name="file_restaurant" required="true" onchange="loadFile(event)">
                                                                                </label>
                                                                                <input id="uploadFile" type="hidden"  disabled="disabled" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <h4 itemprop="headline">TERMS AND CONDITIONS  <a id="btn-text" onchange="loadText(0)" class="fa fa-angle-double-down" style="color: #ffbe00"></a></h4>
                                                                        </div>
                                                                        <div id="show-text" class="col-md-12 col-sm-12 col-lg-12" >
                                                                            <div style="">
                                                                                <b>1. </b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae culpa incidunt inventore odio officiis placeat provident reiciendis sequi voluptatem! Consequatur cumque delectus dolore et expedita laborum libero minus quia.
                                                                                <br> <b>2. </b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae culpa incidunt inventore odio officiis placeat provident reiciendis sequi voluptatem! Consequatur cumque delectus dolore et expedita laborum libero minus quia.
                                                                                <br><b>3. </b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae culpa incidunt inventore odio officiis placeat provident reiciendis sequi voluptatem! Consequatur cumque delectus dolore et expedita laborum libero minus quia.
                                                                                <br><b>4. </b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus amet consectetur culpa doloremque dolorum et laboriosam laudantium minima minus nobis nostrum optio, possimus reprehenderit sint tenetur totam voluptas voluptatem!
                                                                            </div>
                                                                            <div class="check-box">
                                                                                <input type="checkbox" id="agrement">
                                                                                <label for="agrement">Accept Terms and conditions</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <div class="step-buttons">
                                                                                <button  class="brd-rd3 red-bg" type="submit" >Send</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            @if($restaurant_status == 1)
                                                                <div class="tab-pane fade active in" id="reservation-tab2">
                                                                    @else
                                                                        <div class="tab-pane fade" id="reservation-tab2">
                                                                            @endif
                                                                            <div class="row mrg20">
                                                                                <h4>
                                                                                    Thank you for your interest in and subscribing to our products. We will review and send feedback to customers as soon as possible. Keep an eye on your phone and email we'll be in touch shortly, you can keep visiting our other customers on the site in the meantime!
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="reservation-tab3">
                                                                            <div class="select-package-wrapper">
                                                                                <h4 itemprop="headline">BUY MEMBERSHIP</h4>
                                                                                <div class="remove-ext3">
                                                                                    <div class="row mrg10">
                                                                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                                                                            <div class="packege-box brd-rd5 text-center">
                                                                                                <div class="package-header brd-rd5">
                                                                                                    <h4 itemprop="headline">BASIC FREE</h4>
                                                                                                    <span class="red-clr">$15.00 / <small>MO</small></span>
                                                                                                </div>
                                                                                                <ul class="package-body">
                                                                                                    <li>Membership Duration</li>
                                                                                                    <li>Restaurant Duration</li>
                                                                                                    <li>Number of Tags</li>
                                                                                                    <li>Reviews</li>
                                                                                                    <li>Phone Number</li>
                                                                                                    <li>Website Link</li>
                                                                                                </ul>
                                                                                                <a class="brd-rd2" href="#" title="" itemprop="url">SELECT PLAN</a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                                                                            <div class="packege-box brd-rd5 text-center">
                                                                                                <div class="package-header brd-rd5">
                                                                                                    <h4 itemprop="headline">BASIC FREE</h4>
                                                                                                    <span class="red-clr">$15.00 / <small>MO</small></span>
                                                                                                </div>
                                                                                                <ul class="package-body">
                                                                                                    <li>Membership Duration</li>
                                                                                                    <li>Restaurant Duration</li>
                                                                                                    <li>Number of Tags</li>
                                                                                                    <li>Reviews</li>
                                                                                                    <li>Phone Number</li>
                                                                                                    <li>Website Link</li>
                                                                                                </ul>
                                                                                                <a class="brd-rd2" href="#" title="" itemprop="url">SELECT PLAN</a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                                                                            <div class="packege-box brd-rd5 text-center">
                                                                                                <div class="package-header brd-rd5">
                                                                                                    <h4 itemprop="headline">BASIC FREE</h4>
                                                                                                    <span class="red-clr">$15.00 / <small>MO</small></span>
                                                                                                </div>
                                                                                                <ul class="package-body">
                                                                                                    <li>Membership Duration</li>
                                                                                                    <li>Restaurant Duration</li>
                                                                                                    <li>Number of Tags</li>
                                                                                                    <li>Reviews</li>
                                                                                                    <li>Phone Number</li>
                                                                                                    <li>Website Link</li>
                                                                                                </ul>
                                                                                                <a class="brd-rd2" href="#" title="" itemprop="url">SELECT PLAN</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="step-buttons">
                                                                                    <a class="brd-rd3" href="#reservation-tab1"  data-toggle="tab" title="" itemprop="url">Back Step</a>
                                                                                    <a class="brd-rd3 red-bg" href="#reservation-tab3"  data-toggle="tab" title="" itemprop="url">Next Step</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="reservation-tab4">
                                                                            <div class="order-wrapper2 brd-rd5">
                                                                                <h4 itemprop="headlie">YOUR ORDER</h4>
                                                                                <ul class="ordr-lst brd-rd5">
                                                                                    <li class="lst-hed">PRODUCT <span>TOTAL</span></li>
                                                                                    <li>Product X 1 <span>$90.00</span></li>
                                                                                    <li>Subtotal <span>$90.00</span></li>
                                                                                    <li>Gov Tax <span>$2.70</span></li>
                                                                                    <li class="red-bg">Total <span>$92.70</span></li>
                                                                                </ul>
                                                                                <div class="pay-mnt">
                                                                <span class="radio-box">
                                                                    <input type="radio" name="pay-mthd" id="mthd1">
                                                                    <label for="mthd1">Direct Bank Transfer</label>
                                                                </span>
                                                                                    <span class="radio-box">
                                                                    <input type="radio" name="pay-mthd" id="mthd2">
                                                                    <label for="mthd2">Check payments</label>
                                                                </span>
                                                                                    <span class="radio-box">
                                                                    <input type="radio" name="pay-mthd" id="mthd3">
                                                                    <label for="mthd3">Cash on delivery</label>
                                                                </span>
                                                                                    <span class="radio-box">
                                                                    <input type="radio" name="pay-mthd" id="mthd4">
                                                                    <label for="mthd4">Paypal <img src="assets/images/pay-mthd-img.jpg" alt="pay-mthd-img.jpg" itemprop="image"></label>
                                                                </span>
                                                                                </div>
                                                                                <div class="ordr-btn">
                                                                                    <a class="red-bg brd-rd5" href="#" title="" itemprop="url">Place Order</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Section Box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var loadImage = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
            $(this).addClass('image_upload');
        };

        document.getElementById("uploadBtn").onchange = function () {
            document.getElementById("uploadFile").value = this.value;
            $('#uploadFile').attr('type','text');
        };
    </script>
@endsection
