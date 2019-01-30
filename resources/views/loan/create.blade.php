@extends('layouts.ui')
@section('content')
<div class="container padd-80">
  <div class="row">
      <div class="col-md-8">
        <h4>Apply for a loan</h4>

        <form method="POST" action="{{ route('loans.store') }}">
            @csrf
            <div class="form-group">
                <label for="loanamount" class="col-md-12 col-form-label">{{ __('Loan Amount: ') }}<small> How much are you applying for?</small></label>

                <div class="col-md-12">
                    <input id="loanamount" type="number" class="form-control{{ $errors->has('loanamount') ? ' is-invalid' : '' }}" name="loanamount" value="{{ old('loanamount') }}" required autofocus>

                    @if ($errors->has('loanamount'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('loanamount') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group">
                <label for="loanyear" class="col-md-12 col-form-label">{{ __('Loan Year: ') }}<small> Tell us the academic year you need this loan for</small></label>

                <div class="col-md-12">
                    <select id="loanyear" type="text" class="form-control{{ $errors->has('loanyear') ? ' is-invalid' : '' }}" name="loanyear"  required autofocus>
                      @for($i = date('Y'); $i < (date('Y') + 10); $i++)
                      <option value="{{ $i.'/'.($i+1) }}">{{ $i.'/'.($i+1) }}</option>
                      @endfor
                    </select>

                    @if ($errors->has('loanyear'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('loanyear') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="loanpurpose" class="col-md-12 col-form-label">{{ __('Purpose: ') }}<small> What expenses will this loan cover?</small></label>

                <div class="col-md-12">
                    <select id="loanpurpose" class="form-control{{ $errors->has('loanpurpose') ? ' is-invalid' : '' }}" name="loanpurpose" required autofocus>
                      <option value="Tuition">Tuition</option>
                      <option value="Tuition-Stipends">Tuition and Stipends</option>
                      <option value="">Stipends</option>


                    </select>

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
