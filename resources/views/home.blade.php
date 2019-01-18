@extends('layouts.app')

@section('content')
<section class="main-block light-bg">
<div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="{{ route('home')}}" class="list-group-item list-group-item-action active">Home</a>
          <a href="{{ route('students.edit', Auth::user()->id)}}" class="list-group-item list-group-item-action">Update Profile</a>
          <a href="{{ route('loans.create')}}" class="list-group-item list-group-item-action">Apply for a Loan</a>
          <a href="{{ route('students.loans')}}" class="list-group-item list-group-item-action">View Loan Applications</a>
        </div>
      </div>
    
    </div>
</div>
</section>
@endsection
