@extends('layouts.app')

@section('content')
<section class="main-block light-bg">
<div class="container">
    <div class="row">

        <div class="col-md-3">
          <div class="list-group">
            <a href="{{ route('home')}}" class="list-group-item list-group-item-action">Home</a>
            <a href="{{ route('students.edit', Auth::user()->id)}}" class="list-group-item list-group-item-action active">Update Profile</a>
            <a href="{{ route('loans.create')}}" class="list-group-item list-group-item-action">Apply for a Loan</a>
            <a href="{{ route('students.loans')}}" class="list-group-item list-group-item-action">View Loan Applications</a>

          </div>
        </div>
        <div class="col-md-9">
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
          </ul>
          <div class="tab-content" id="myTabContent">
             <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
               <form method="POST" action="{{ route('students.update', Auth::user()->id) }}">
                   @csrf
                   @method('patch')

                   <div class="form-group">
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
                             <option value="male">Male</option>
                             <option value="female">Female</option>
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
                             <option value="{{ $country->name }}">{{ $country->name }}</option>
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
                               <option id="{{ $state->state->id }}"value="{{$state->state->name}}">{{$state->state->name}}</option>
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

                   <div class="form-group mb-0">
                       <div class="col-md-8">
                           <button type="submit" class="btn btn-primary">
                               {{ __('Update Information') }}
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
                             <option value="{{ $uni->id }}">{{ $uni->universityname }}</option>
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
                        <label for="program" class="col-md-4 col-form-label ">{{ __('Program:') }}</label>

                        <div class="col-md-8">
                          <select id="program" class="form-control{{ $errors->has('program') ? ' is-invalid' : '' }}" name="program" >
                            <option value="bachelors">Bachelors</option>
                            <option value="masters">Masters</option>
                            <option value="posstgraduate">Post Graduate</option>

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
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>


                          </select>
                            @if ($errors->has('program'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('program') }}</strong>
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
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update Information') }}
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
                             <option value="{{ $country->name }}">{{ $country->name }}</option>
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
                             <button type="submit" class="btn btn-primary">
                                 {{ __('Update Information') }}
                             </button>
                         </div>
                     </div>

                </form>
              </div>
            <div class="tab-pane fade" id="guarantor" role="tabpanel" aria-labelledby="guarantor-tab">
              This tab is for guarantor Information just incase we might need it
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
</section>
@endsection
