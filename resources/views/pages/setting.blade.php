@extends('layouts.masterSetting')

@include('layouts.nav')
@include('layouts.sidebar')

@section('content')
<section class="section1">
  <div class="container-fuild">
      <div class="row m-0">
        @yield('sidebar')  

        

          <div class="col-md-10 p-4 bg-light mt-1">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif 
                 
                @if ($errors->any())
                <div class="alert alert-danger mt-4">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif             
              <div class="accountdetail">
                
                  <div class="accountholder">
                      <div class="image">
                          <img src="images/backbg.png" class="card-img-top rounded-circle"  
                          />
                      </div>
                      <div class="person">
                          <div class="name">
                              Tiana Rosser
                          </div>
                          <div class="dis mt-1">
                              ID:300393903
                          </div>
                      </div>
                      <div class="icon">
                          <i class="bi bi-share"></i>
                      </div>
                  </div>

                  <div class="options">
                      <div class="password">
                          <button class="btn  my-sm-0 ml-2" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Change password</button>
                          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="staticBackdropLabel">Change password</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body mt-3">
                                  <form method="POST" action="{{ route('user.password.update') }}">
                                   @csrf
                                   @method('PUT')
                                   <div class="form-outline mb-4">
                                      <label class="form-label" for="loginPassword">Current password</label>
                                      <input type="password" id="" name="current_password" class="form-control" />
                                      <span class="text-danger">
                                        @error('current_password')
                                        {{$message}}
                                        @enderror
                                      </span>
                                    </div>

                                    <div class="form-outline mb-4">
                                      <label class="form-label" for="loginPassword">New password</label>
                                      <input type="password" id="" name="password" class="form-control" />
                                      <span class="text-danger">
                                        @error('password')
                                        {{$message}}
                                        @enderror
                                      </span>
                                    </div>
                              
                                    
                                    <div class="form-outline mb-4">
                                      <label class="form-label" for="loginPassword">Confrim password</label>
                                      <input type="password" id="" name="password_confirmation" class="form-control" />
                                      <span class="text-danger">
                                        @error('password_confirmation')
                                        {{$message}}
                                        @enderror
                                      </span>
                                    </div>
                              
                              
                                    <!-- Submit button -->
                                    <div class="button">
                                    <button type="submit" class="btn  btn-block mb-4">Save</button>
                    
                                    </div>                                  
                            
                                  </form> 
                                </div>
                                
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="edit">
                          <button class="btn  my-sm-0 ml-2" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Edit profile</button>
                          <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="staticBackdropLabel">Edit profile</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body ">
                                  <form method="POST" action="{{ route('profile.update') }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-outline mb-3">
                                      <label class="form-label" >First name</label>
                                      <input type="text" id="" name="first_name" value="{{ old('first_name') ?? auth()->user()->first_name }}" required  class="form-control" placeholder="Name" />
                                    </div>
                        
                                    <div class="form-outline mb-3">
                                        <label class="form-label" >Last name</label>
                                        <input type="text" id="" name="second_name" value="{{ old('second_name') ?? auth()->user()->second_name }}" required  class="form-control" placeholder="Name" />
                                    </div>

                                    <div class="form-outline mb-3">
                                      <label class="form-label" >Email</label>
                                      <input type="email" id="loginName"  name="email" value="{{  auth()->user()->email }}" readonly disabled class="form-control" placeholder="Email" />
                                    </div>

                                    <div class="form-outline mb-3">
                                      <label class="form-label" >Phone</label>
                                      <input type="phone" id="loginName"  name="phone" value="{{ old('phone') ?? auth()->user()->phone }}" class="form-control" placeholder="phone" />
                                    </div>
                        
                                    <div class="form-outline mb-3">
                                        <label class="form-label" >Date of birth</label>
                                        <input type="date" id=""  name="dob" value="{{ old('dob') ?? auth()->user()->dob }}" class="form-control" />
                                    </div>
                        
                                    <div class="form-outline mb-3 country">
                                        <label class="form-label" >Country</label>                
                                        <select class="form-select" aria-label="Default select example"  name="country" value="{{ old('country') ?? auth()->user()->country }}" >
                                            <option>select country</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Aland Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, Democratic Republic of the Congo</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Cote D'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curacao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and Mcdonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="XK">Kosovo</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libyan Arab Jamahiriya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthelemy</option>
                                            <option value="SH">Saint Helena</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="CS">Serbia and Montenegro</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.s.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                          </select>
                                    </div>
                        
                                      
                              
                                    <div class="form-outline mb-3 cursex" >
                                        <div class="sex">
                                            <label class="form-label" >Sex</label>
                                          <select class="form-select" aria-label="Default select example"  name="sex" value="{{ old('sex') ?? auth()->user()->sex }}">
                                              <option value="male" @if(auth()->user()->sex ) selected @endif>Male</option>
                                              <option value="female" @if(auth()->user()->sex ) selected @endif>Female</option>
                                              <option value="other" @if(auth()->user()->sex ) selected @endif>Other</option>
                                            </select>
                                          </div>
                                        <div class="cruency" >
                                            <label class="form-label" >Currency</label>
                                        <select class="form-select" aria-label="Default select example" name="cruency">
                                            <option value="USD" label="USD">USD</option>
                                            <option value="EUR" label="Euro">EUR</option>
                                            <option value="JPY" label="Japanese yen">JPY</option>
                                            <option value="GBP" label="Pound sterling">GBP</option>
                                            <option value="AED" label="United Arab Emirates dirham">AED</option>
                                            <option value="AFN" label="Afghan afghani">AFN</option>
                                            <option value="ALL" label="Albanian lek">ALL</option>
                                            <option value="AMD" label="Armenian dram">AMD</option>
                                            <option value="ANG" label="Netherlands Antillean guilder">ANG</option>
                                            <option value="AOA" label="Angolan kwanza">AOA</option>
                                            <option value="ARS" label="Argentine peso">ARS</option>
                                            <option value="AUD" label="Australian dollar">AUD</option>
                                            <option value="AWG" label="Aruban florin">AWG</option>
                                            <option value="AZN" label="Azerbaijani manat">AZN</option>
                                          </select>
                                        </div>
                                          
                                    </div>
                                    <!-- Submit button -->
                                    <div class="button">
                                    <button type="submit" class="btn  btn-block ">Submit</button>
                        
                                    </div>                                  
                                   
                                    
                                  </form>  
                                </div>
                                
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="userdeatil mt-4">
                <div class="container ">
                  <div class="row row1">
                    <div class="col-md-5 ">
                      Phone
                    </div>
                    <div class="col-md-5 ">
                      Date of birth
                    </div>
                    <div class="col-md-2 ">
                      Country
                    </div>
                  </div>
                  <div class="row row2 mt-1">
                    <div class="col-md-5 ">
                      +3930039930439
                    </div>
                    <div class="col-md-5 ">
                      09.09.2020
                    </div>
                    <div class="col-md-2 ">
                      Armenia
                    </div>
                  </div>
                  <div class="row row1 mt-4">
                    <div class="col-md-5 ">
                      Email
                    </div>
                    <div class="col-md-5">
                      Sex
                    </div>
                    <div class="col-md-2">
                      Currency
                    </div>
                  </div>
                  <div class="row row2 mt-1">
                    <div class="col-md-5 ">
                      tatevmayilyan@gmail.com
                    </div>
                    <div class="col-md-5 ">
                      Male
                    </div>
                    <div class="col-md-2 ">
                      USD
                    </div>
                  </div>
                  
                </div>
              </div>
          </div>
      </div>
  </div>
  
</section>
@endsection

