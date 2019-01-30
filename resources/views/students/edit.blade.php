@extends('layouts.ui')

@section('content')
<div class="container padd-20">
    <div class="row">
        <div class="col-md-12">
          <div class="tabs-content">

          <ul class="nav nav-tabs" id="myTab" role="tablist">
             <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Basic Information</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Academic Information</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Residential Information</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" id="guarantor-tab" data-toggle="tab" href="#guarantor" role="tab" aria-controls="guarantor" aria-selected="false">Guarantor Information</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">Upload Photo</a>
             </li>
          </ul>
          <div class="tab-content text-left" id="myTabContent">
             <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
               <form method="POST" action="{{ route('students.update', Auth::user()->id) }}">
                   @csrf
                   @method('patch')

                   <div class="form-group ">
                       <label for="firstname" class="col-md-4 col-form-label">{{ __('Firstname:') }}</label>

                       <div class="col-md-8">
                           <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ $std->firstname }}" required autofocus>

                           @if ($errors->has('firstname'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('firstname') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="middlename" class="col-md-4 col-form-label">{{ __('Middlename:') }}</label>

                       <div class="col-md-8">
                           <input id="middlename" type="text" class="form-control{{ $errors->has('middlename') ? ' is-invalid' : '' }}" name="middlename" value="{{ $std->middlename }}" required autofocus>

                           @if ($errors->has('middlename'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('middlename') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="lastname" class="col-md-4 col-form-label ">{{ __('Lastname:') }}</label>

                       <div class="col-md-8">
                           <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ $std->lastname }}" required autofocus>

                           @if ($errors->has('lastname'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('lastname') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="username" class="col-md-4 col-form-label ">{{ __('Username:') }}</label>

                       <div class="col-md-8">
                           <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ $std->username }}" disabled autofocus>

                           @if ($errors->has('username'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('username') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="gender" class="col-md-4 col-form-label ">{{ __('Gender:') }}</label>

                       <div class="col-md-8">
                           <select id="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" >
                             <option value="male" @if($std->gender == 'male'){{ 'selected'}}@endif>Male</option>
                             <option value="female" @if($std->gender == 'female'){{ 'selected'}}@endif>Female</option>
                           </select>

                           @if ($errors->has('gender'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('gender') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="dob" class="col-md-4 col-form-label ">{{ __('Date of Birth:') }}</label>

                       <div class="col-md-8">
                           <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ $std->dob }}" required autofocus>

                           @if ($errors->has('dob'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('dob') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="phone" class="col-md-4 col-form-label ">{{ __('Phone number:') }}</label>

                       <div class="col-md-8">
                           <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $std->phone }}" required autofocus>

                           @if ($errors->has('phone'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('phone') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="email" class="col-md-4 col-form-label ">{{ __('E-Mail Address') }}</label>

                       <div class="col-md-8">
                           <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $std->email }}" required>

                           @if ($errors->has('email'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('email') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="nationality" class="col-md-4 col-form-label">{{ __('Nationality:') }}</label>

                       <div class="col-md-8">
                           <select id="nationality" class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }}" name="nationality"  required>
                             <option value="">---</option>
                             @foreach($countries as $country)
                             <option value="{{ $country->name }}" @if($std->nationality == $country->name){{ 'selected'}}@endif>{{ $country->name }}</option>
                             @endforeach
                           </select>

                           @if ($errors->has('nationality'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('nationality') }}</strong>
                               </span>
                           @endif
                       </div>
                     </div>

                     <div class="form-group">
                         <label for="stateoforigin" class="col-md-4 col-form-label">{{ __('State of Origin:') }}</label>

                         <div class="col-md-8">
                             <select id="stateoforigin" class="form-control{{ $errors->has('stateoforigin') ? ' is-invalid' : '' }}" name="stateoforigin">
                               <option value="">N/A</option>
                               @foreach($states as $state)
                               <option id="{{ $state->state->id }}" value="{{$state->state->name}}" @if($std->stateoforigin == $state->state->name){{ 'selected'}}@endif>{{$state->state->name}}</option>
                               @endforeach
                             </select>

                             @if ($errors->has('stateoforigin'))
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('stateoforigin') }}</strong>
                                 </span>
                             @endif
                         </div>
                       </div>

                   <div class="form-group">
                           <label for="bvn" class="col-md-4 col-form-label">{{ __('BVN:') }}</label>

                           <div class="col-md-8">
                               <input id="bvn" type="text" class="form-control{{ $errors->has('bvn') ? ' is-invalid' : '' }}" name="bvn" value="{{ $std->bvn }}" autofocus>

                               @if ($errors->has('bvn'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('bvn') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="accountnumber" class="col-md-4 col-form-label">{{ __('Account Number:') }}</label>

                           <div class="col-md-8">
                               <input id="accountnumber" type="number" class="form-control{{ $errors->has('accountnumber') ? ' is-invalid' : '' }}" name="accountnumber" value="{{ $std->accountnumber }}" required autofocus>

                               @if ($errors->has('accountnumber'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('accountnumber') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="bank" class="col-md-4 col-form-label">{{ __('Bank:') }}</label>

                           <div class="col-md-8">
                               <select id="bank" class="form-control{{ $errors->has('bank') ? ' is-invalid' : '' }}" name="bank" >
                                 <option value="">---</option>
                                 <option value="Access Bank">Access Bank</option>
                                  <option value="Accessmobile">Accessmobile</option>
                                  <option value="Aso Savings And Loans">Aso Savings And Loans</option>
                                  <option value="Cellulant">Cellulant</option>
                                  <option value="Central Bank Of Nigeria">Central Bank Of Nigeria</option>
                                  <option value="Citibank">Citibank</option>
                                  <option value="Coronation Merchant Bank">Coronation Merchant Bank</option>
                                  <option value="Corporetti">Corporetti</option>
                                  <option value="Covenant Microfinance Bank">Covenant Microfinance Bank</option>
                                  <option value="Diamond Bank">Diamond Bank</option>
                                  <option value="Eartholeum (qik Qik)">Eartholeum (qik Qik)</option>
                                  <option value="Ecobank Nigeria">Ecobank Nigeria</option>
                                  <option value="Ecomobile">Ecomobile</option>
                                  <option value="Ekondo Microfinance Bank">Ekondo Microfinance Bank</option>
                                  <option value="Enterprise Bank">Enterprise Bank</option>
                                  <option value="Equitorial Trust Bank">Equitorial Trust Bank</option>
                                  <option value="E-tranzact">E-tranzact</option>
                                  <option value="Fbn M-money">Fbn M-money</option>
                                  <option value="Fbn Mortgages">Fbn Mortgages</option>
                                  <option value="Fets (my Wallet)">Fets (my Wallet)</option>
                                  <option value="Fidelity Bank">Fidelity Bank</option>
                                  <option value="Fidelity Mobile">Fidelity Mobile</option>
                                  <option value="Finatrust Microfinance Bank">Finatrust Microfinance Bank</option>
                                  <option value="First Bank Of Nigeria">First Bank Of Nigeria</option>
                                  <option value="First City Monument Bank">First City Monument Bank</option>
                                  <option value="First Inland Bank">First Inland Bank</option>
                                  <option value="Fortis Microfinance Bank">Fortis Microfinance Bank</option>
                                  <option value="Fortis Mobile">Fortis Mobile</option>
                                  <option value="Fsdh">Fsdh</option>
                                  <option value="Gt Mobile Money">Gt Mobile Money</option>
                                  <option value="Guaranty Trust Bank">Guaranty Trust Bank</option>
                                  <option value="Hedonmark">Hedonmark</option>
                                  <option value="Heritage Bank">Heritage Bank</option>
                                  <option value="Imperial Homes Mortgage Bank">Imperial Homes Mortgage Bank</option>
                                  <option value="Intercontinental Bank">Intercontinental Bank</option>
                                  <option value="Jaiz Bank">Jaiz Bank</option>
                                  <option value="Jubilee Life">Jubilee Life</option>
                                  <option value="Kegow">Kegow</option>
                                  <option value="Keystone Bank">Keystone Bank</option>
                                  <option value="Mainstreet Bank">Mainstreet Bank</option>
                                  <option value="Mimoney (powered By Intellifin)">Mimoney (powered By Intellifin)</option>
                                  <option value="M-kudi">M-kudi</option>
                                  <option value="Monetize">Monetize</option>
                                  <option value="Moneybox">Moneybox</option>
                                  <option value="New Prudential Bank">New Prudential Bank</option>
                                  <option value="Npf Mfb">Npf Mfb</option>
                                  <option value="Oceanic Bank">Oceanic Bank</option>
                                  <option value="Omoluabi Savings And Loans">Omoluabi Savings And Loans</option>
                                  <option value="One Finance">One Finance</option>
                                  <option value="Paga">Paga</option>
                                  <option value="Page Mfbank">Page Mfbank</option>
                                  <option value="Parallex">Parallex</option>
                                  <option value="Parkway (ready Cash)">Parkway (ready Cash)</option>
                                  <option value="Payattitude Online">Payattitude Online</option>
                                  <option value="Paycom">Paycom</option>
                                  <option value="Providus Bank">Providus Bank</option>
                                  <option value="Safetrust Mortgage Bank">Safetrust Mortgage Bank</option>
                                  <option value="Seed Capital Microfinance Bank">Seed Capital Microfinance Bank</option>
                                  <option value="Skye Bank">Skye Bank</option>
                                  <option value="Stanbic Ibtc Bank">Stanbic Ibtc Bank</option>
                                  <option value="Stanbic Mobile">Stanbic Mobile</option>
                                  <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                  <option value="Sterling Bank">Sterling Bank</option>
                                  <option value="Sterling Mobile">Sterling Mobile</option>
                                  <option value="Suntrust">Suntrust</option>
                                  <option value="Teasy Mobile">Teasy Mobile</option>
                                  <option value="Trustbond">Trustbond</option>
                                  <option value="U-mo">U-mo</option>
                                  <option value="Union Bank Of Nigeria">Union Bank Of Nigeria</option>
                                  <option value="United Bank For Africa">United Bank For Africa</option>
                                  <option value="Unity Bank">Unity Bank</option>
                                  <option value="Vfd Microfinance Bank">Vfd Microfinance Bank</option>
                                  <option value="Visual Ict">Visual Ict</option>
                                  <option value="Vtnetwork">Vtnetwork</option>
                                  <option value="Wema Bank">Wema Bank</option>
                                  <option value="Zenith Bank">Zenith Bank</option>
                                  <option value="Zenith Mobile">Zenith Mobile</option>
                               </select>

                               @if ($errors->has('bank'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('bank') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="facebookhandle" class="col-md-4 col-form-label">{{ __('Facebook Handle:') }}</label>

                           <div class="col-md-8">
                               <input id="facebookhandle" type="text" class="form-control{{ $errors->has('facebookhandle') ? ' is-invalid' : '' }}" name="facebookhandle" value="{{ $std->facebookhandle }}" autofocus>

                               @if ($errors->has('facebookhandle'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('facebookhandle') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="twitterhandle" class="col-md-4 col-form-label">{{ __('Twitter Handle:') }}</label>

                           <div class="col-md-8">
                               <input id="twitterhandle" type="text" class="form-control{{ $errors->has('twitterhandle') ? ' is-invalid' : '' }}" name="twitterhandle" value="{{ $std->twitterhandle }}" autofocus>

                               @if ($errors->has('twitterhandle'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('twitterhandle') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>
                   <div class="form-group mb-0">
                       <div class="col-md-8">
                           <button type="submit" class="btn btn-blue">
                               {{ __('Save') }}
                           </button>
                       </div>
                   </div>

               </form>
             </div>
             <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
               <form method="POST" action="{{ route('students.update', Auth::user()->id) }}">
                   @csrf
                   @method('patch')

                    <div class="form-group">
                       <label for="university" class="col-md-4 col-form-label">{{ __('University:') }}</label>
                       <div class="col-md-8">
                           <select id="university" class="form-control {{ $errors->has('university') ? 'is-invalid' : '' }}" name="university">
                             @foreach($unis as $uni)
                             <option value="{{ $uni->id }}" @if($std->university == $uni->universityname){{ 'selected'}}@endif>{{ $uni->universityname }}</option>
                             @endforeach
                           </select>

                           @if ($errors->has('university'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('university') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>
                    <div class="form-group">
                      <label for="matricno" class="col-md-4 col-form-label ">{{ __('Matric No / Jamb Reg. Number:') }}</label>

                      <div class="col-md-8">
                          <input id="matricno" type="text" class="form-control{{ $errors->has('matricno') ? ' is-invalid' : '' }}" name="matricno" value="{{ $std->matricno }}" required>

                          @if ($errors->has('matricno'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('matricno') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tuitionfee" class="col-md-4 col-form-label ">{{ __('Annual Tuition:') }}</label>

                      <div class="col-md-8">
                          <input id="tuitionfee" type="text" class="form-control{{ $errors->has('tuitionfee') ? ' is-invalid' : '' }}" name="tuitionfee" value="{{ $std->tuitionfee }}" required>

                          @if ($errors->has('tuitionfee'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('tuitionfee') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="program" class="col-md-4 col-form-label ">{{ __('Program:') }}</label>

                        <div class="col-md-8">
                          <select id="program" class="form-control{{ $errors->has('program') ? ' is-invalid' : '' }}" name="program" >
                            <option value="Bachelors" @if($std->program == 'Bachelors'){{ 'selected'}}@endif>Bachelors</option>
                            <option value="Masters" @if($std->program == 'Masters'){{ 'selected'}}@endif>Masters</option>
                            <option value="Postgraduate" @if($std->program == 'Postgraduate'){{ 'selected'}}@endif>Post Graduate</option>

                          </select>
                            @if ($errors->has('program'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('program') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="yearofgraduation" class="col-md-4 col-form-label ">{{ __('Expected Year of Graduation:') }}</label>

                        <div class="col-md-8">
                          <select id="yearofgraduation" class="form-control{{ $errors->has('yearofgraduation') ? ' is-invalid' : '' }}" name="yearofgraduation" >
                            @for($i = date('Y'); $i < (date('Y') + 7); $i++)
                            <option value="{{ $i.'/'.($i+1) }}" @if($std->yearofgraduation == ($i.'/'.($i+1))){{ 'selected'}}@endif>{{ $i.'/'.($i+1) }}</option>
                            @endfor
                          </select>
                            @if ($errors->has('yearofgraduation'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('yearofgraduation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="department" class="col-md-4 col-form-label ">{{ __('Department:') }}</label>

                        <div class="col-md-8">
                            <input id="department" type="department" class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{ $std->department }}" required>

                            @if ($errors->has('department'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('department') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cgpa" class="col-md-4 col-form-label ">{{ __('Cummulative GPA:') }}</label>

                        <div class="col-md-8">
                            <input id="cgpa" type="decimal" class="form-control{{ $errors->has('cgpa') ? ' is-invalid' : '' }}" name="cgpa" value="{{ $std->cgpa }}" required>

                            @if ($errors->has('department'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('department') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="currentgpa" class="col-md-4 col-form-label ">{{ __('Current GPA:') }}</label>

                        <div class="col-md-8">
                            <input id="currentgpa" type="decimal" class="form-control{{ $errors->has('currentgpa') ? ' is-invalid' : '' }}" name="currentgpa" value="{{ $std->currentgpa }}" required>

                            @if ($errors->has('currentgpa'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('currentgpa') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-blue">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
              </form>
             </div>
             <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
               <form method="POST" action="{{ route('students.update', Auth::user()->id) }}">
                   @csrf
                   @method('patch')

                   <div class="form-group">
                       <label for="addresslineone" class="col-md-4 col-form-label">{{ __('Address Line One:') }}</label>

                       <div class="col-md-8">
                           <input id="addresslineone" type="text" class="form-control{{ $errors->has('addresslineone') ? ' is-invalid' : '' }}" name="addresslineone" value="{{ $std->addresslineone }}" required autofocus>

                           @if ($errors->has('addresslineone'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('addresslineone') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="addresslinetwo" class="col-md-4 col-form-label">{{ __('Address Line Two:') }}</label>

                       <div class="col-md-8">
                           <input id="addresslinetwo" type="text" class="form-control{{ $errors->has('addresslinetwo') ? ' is-invalid' : '' }}" name="addresslinetwo" value="{{ $std->addresslinetwo }}" autofocus>

                           @if ($errors->has('addresslinetwo'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('addresslinetwo') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="addresscity" class="col-md-4 col-form-label">{{ __('City:') }}</label>

                       <div class="col-md-8">
                           <input id="addresscity" type="text" class="form-control{{ $errors->has('addresscity') ? ' is-invalid' : '' }}" name="addresscity" value="{{ $std->addresscity }}" required autofocus>

                           @if ($errors->has('addresscity'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('addresscity') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="addressstate" class="col-md-4 col-form-label ">{{ __('State:') }}</label>

                       <div class="col-md-8">
                           <input id="addressstate" type="text" class="form-control{{ $errors->has('addressstate') ? ' is-invalid' : '' }}" name="addressstate" value="{{ $std->addressstate }}" required autofocus>

                           @if ($errors->has('addressstate'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('addressstate') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="addressyears" class="col-md-4 col-form-label ">{{ __('Number of Years at Resident:') }}</label>

                       <div class="col-md-8">
                           <input id="addressyears" type="number" class="form-control{{ $errors->has('addressyears') ? ' is-invalid' : '' }}" name="addressyears" value="{{ $std->addressyears }}" required autofocus>

                           @if ($errors->has('addressyears'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('addressyears') }}</strong>
                               </span>
                           @endif
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="addresscountry" class="col-md-4 col-form-label">{{ __('Country:') }}</label>

                       <div class="col-md-8">
                           <select id="addresscountry" class="form-control{{ $errors->has('addresscountry') ? ' is-invalid' : '' }}" name="addresscountry"  required>
                             <option value="">---</option>
                             @foreach($countries as $country)
                             <option value="{{ $country->name }}" @if($std->addresscountry == $country->name){{ 'selected'}}@endif>{{ $country->name }}</option>
                             @endforeach
                           </select>

                           @if ($errors->has('addresscountry'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('addresscountry') }}</strong>
                               </span>
                           @endif
                       </div>
                     </div>

                  <div class="form-group mb-0">
                         <div class="col-md-8">
                             <button type="submit" class="btn btn-blue">
                                 {{ __('Update Information') }}
                             </button>
                         </div>
                     </div>

                </form>
              </div>
             <div class="tab-pane fade" id="guarantor" role="tabpanel" aria-labelledby="guarantor-tab">
              <form method="POST" action="{{ route('students.update', Auth::user()->id) }}">
                  @csrf
                  @method('patch')

                  <div class="form-group ">
                      <label for="firstname" class="col-md-4 col-form-label">{{ __('Firstname:') }}</label>

                      <div class="col-md-8">
                          <input id="firstname" type="text" class="form-control{{ $errors->has('gfirstname') ? ' is-invalid' : '' }}" name="gfirstname" value="@if($std->guarantor){{ $std->guarantor->firstname }}@endif" required autofocus>

                          @if ($errors->has('firstname'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('firstname') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="lastname" class="col-md-4 col-form-label ">{{ __('Lastname:') }}</label>

                      <div class="col-md-8">
                          <input id="lastname" type="text" class="form-control{{ $errors->has('glastname') ? ' is-invalid' : '' }}" name="glastname" value="@if($std->guarantor){{ $std->guarantor->lastname }}@endif" required autofocus>

                          @if ($errors->has('lastname'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('lastname') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>





                  <div class="form-group">
                      <label for="phone" class="col-md-4 col-form-label ">{{ __('Phone number:') }}</label>

                      <div class="col-md-8">
                          <input id="phone" type="text" class="form-control{{ $errors->has('gphone') ? ' is-invalid' : '' }}" name="gphone" value="@if($std->guarantor){{ $std->guarantor->phone }}@endif" required autofocus>

                          @if ($errors->has('phone'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('phone') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="email" class="col-md-4 col-form-label ">{{ __('E-Mail Address') }}</label>

                      <div class="col-md-8">
                          <input id="email" type="email" class="form-control{{ $errors->has('gemail') ? ' is-invalid' : '' }}" name="gemail" value="@if($std->guarantor){{ $std->guarantor->email }}@endif" required>

                          @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="occupation" class="col-md-4 col-form-label ">{{ __('Occupation:') }}</label>

                      <div class="col-md-8">
                          <input id="occupation" type="text" class="form-control{{ $errors->has('goccupation') ? ' is-invalid' : '' }}" name="goccupation" value="@if($std->guarantor){{ $std->guarantor->occupation }}@endif" required autofocus>

                          @if ($errors->has('occupation'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('occupation') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="address" class="col-md-4 col-form-label ">{{ __('Address:') }}</label>

                      <div class="col-md-8">
                          <textarea id="address" type="text" class="form-control{{ $errors->has('gaddress') ? ' is-invalid' : '' }}" name="gaddress" required autofocus>@if($std->guarantor){{ $std->guarantor->address }}@endif</textarea>

                          @if ($errors->has('address'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('address') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group mb-0">
                      <div class="col-md-8">
                          <button type="submit" class="btn btn-blue">
                              {{ __('Save') }}
                          </button>
                      </div>
                  </div>

              </form>
             </div>
             <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                <form method="POST" class="row" action="{{ route('students.update', Auth::user()->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="col-md-6">
                      <div class="form-group ">
                          <label for="firstname" class="col-md-4 col-form-label">{{ __('Upload Photo:') }}</label>

                          <div class="col-md-12">
                              <input id="photo" type="file" class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" name="photo"  required autofocus>

                              @if ($errors->has('photo'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('photo') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="photoid" class="col-md-4 col-form-label ">{{ __('Photo ID:') }}</label>

                          <div class="col-md-12">
                              <input id="photoid" type="file" class="form-control{{ $errors->has('photoid') ? ' is-invalid' : '' }}" name="photoid"  required autofocus>

                              @if ($errors->has('photoid'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('photoid') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group mb-0">
                          <div class="col-md-8">
                              <button type="submit" class="btn btn-blue">
                                  {{ __('Save') }}
                              </button>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-2 padd-40">
                      <img src="{{ asset('storage/photos/'.$std->photo) }}" class="rounded-circle" width="200px">
                      <small>Photo</small>
                    </div>
                    <div class="col-md-2 padd-40">
                      <img src="{{ asset('storage/photos/'.$std->photoid) }}" class="square" width="200px">
                      <small>Photo ID</small>
                    </div>
                </form>
             </div>
          </div>

          @if(session('errors'))
          <div class="alert alert-info col-md-6">
          @foreach($errors->all() as $error)
            <small><li>{{ $error }}</li></small>
          @endforeach
          </div>
          @endif
        </div>
      </div>
    </div>
</div>
@endsection
