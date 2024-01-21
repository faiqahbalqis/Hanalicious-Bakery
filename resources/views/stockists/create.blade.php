@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Stockist</h2>
        </div>
       
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('stockists.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Stockist Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input type="text" class="form-control" name="phone" placeholder="Phone Number">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" class="form-control" name="address" placeholder="Address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('stockists.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection