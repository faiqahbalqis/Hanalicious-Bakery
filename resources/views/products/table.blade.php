@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Add New Product</a>
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
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Stock Quantity</th>
            <th>Product Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $s)
        <tr>
            <td>000{{ $s->id }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->desc }}</td>
            <td>{{ $s->qty }}</td>
            <td>RM{{ $s->price }}</td>
            <td>
                <form action="{{ route('products.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection