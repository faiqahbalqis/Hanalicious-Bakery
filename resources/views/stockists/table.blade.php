@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Stockists</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('stockists.create') }}"> Add New Stockist</a>
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
            <th>Stockist ID</th>
            <th>Stockist Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($stockists as $s)
        <tr>
            <td>000{{ $s->id }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->phone }}</td>
            <td>{{ $s->email }}</td>
            <td>{{ $s->address }}</td>
            <td>
                <form action="{{ route('stockists.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('stockists.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('stockists.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection