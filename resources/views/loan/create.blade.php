@extends('layouts.ui')
@section('content')
<div class="container padd-80">
  <div class="row justify-content-center">
      <div class="col-md-8">
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




            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-1">
                    <button type="submit" class="btn btn-blue">
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
</div>

@endsection
