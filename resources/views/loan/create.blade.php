@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="{{ route('home')}}" class="list-group-item list-group-item-action">Home</a>
          <a href="{{ route('students.edit', Auth::user()->id)}}" class="list-group-item list-group-item-action ">Update Profile</a>
          <a href="{{ route('loans.create')}}" class="list-group-item list-group-item-action active">Apply for a Loan</a>
          <a href="{{ route('students.loans')}}" class="list-group-item list-group-item-action">View Loan Applications</a>
        </div>
      </div>
      <div class="col-md-9 ">
        <form method="POST" action="{{ route('loans.store') }}">
            @csrf
            <div class="form-group">
                <label for="loanamount" class="col-md-4 col-form-label">{{ __('Loan Amount:') }}</label>

                <div class="col-md-8">
                    <input id="loanamount" type="number" class="form-control{{ $errors->has('loanamount') ? ' is-invalid' : '' }}" name="loanamount" value="{{ old('loanamount') }}" required autofocus>

                    @if ($errors->has('loanamount'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('loanamount') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group">
                <label for="loanyear" class="col-md-4 col-form-label">{{ __('Loan Year:') }}</label>

                <div class="col-md-8">
                    <input id="loanyear" type="text" class="form-control{{ $errors->has('loanyear') ? ' is-invalid' : '' }}" name="loanyear" value="{{ old('loanyear') }}" required autofocus>

                    @if ($errors->has('loanyear'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('loanyear') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="loanpurpose" class="col-md-4 col-form-label">{{ __('Purpose:') }}</label>

                <div class="col-md-8">
                    <input id="loanpurpose" type="text" class="form-control{{ $errors->has('loanpurpose') ? ' is-invalid' : '' }}" name="loanpurpose" value="{{ old('loanpurpose') }}" required autofocus>

                    @if ($errors->has('loanpurpose'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('loanpurpose') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group">
                <label for="accountnumber" class="col-md-4 col-form-label">{{ __('Account Number:') }}</label>

                <div class="col-md-8">
                    <input id="accountnumber" type="number" class="form-control{{ $errors->has('accountnumber') ? ' is-invalid' : '' }}" name="accountnumber" value="{{ old('accountnumber') }}" required autofocus>

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
                    <select id="bank" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="bank" >
                      <option value="">---</option>
                      <option value="Access Bank">Access Bank</option>
                    </select>

                    @if ($errors->has('bank'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('bank') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

  
            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-1">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Submit Application') }}
                    </button>
                </div>
            </div>
        </form>
        @if(session('errors'))
        <div class="alert alert-info col-md-6">
        @foreach($errors->all() as $error)
          <small><li>{{ $error }}</li></small>
        @endforeach
        </div>
        @endif
      </div>
  </div>

@endsection
