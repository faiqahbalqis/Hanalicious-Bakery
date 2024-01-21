@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Staff</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('staff.create') }}"> Add New Staff</a>
            </div>
        </div>
    </div>

    <br><br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Staff ID</th>
            <th>Full Name</th>
            <th>Position</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($staff as $s)
        <tr>
            <td>000{{ $s->id }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->position }}</td>
            <td>{{ $s->phone }}</td>
            <td>{{ $s->address }}</td>
            <td>
                <form action="{{ route('staff.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('staff.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('staff.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection