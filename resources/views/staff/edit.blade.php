@extends('layouts.admin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Staff</h2>
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
  
    <form action="{{ route('staff.update',$staff->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <input type="hidden" name="id" value="{{ $staff->id }}"> <br/>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name:</strong>
                    <input type="text" name="name" value="{{ $staff->name }}" class="form-control" placeholder=">Full Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Position:</strong>
                    <input type="text" name="position" value="{{ $staff->position }}" class="form-control" placeholder=">Position">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone Number:</strong>
                    <input type="text" class="form-control" name="phone" value="{{ $staff->phone }}" placeholder="Phone Number"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" class="form-control" name="address" value="{{ $staff->address }}" placeholder="Address"></input>
                </div>
            </div>
          
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('staff.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection