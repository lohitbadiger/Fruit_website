@extends('admin.layout.admin')

@section('content')

    <h3>Products</h3>


<ul>
    @forelse($products as $product)
    <li>
        <h3>Name of the Product: {{$product->name}}</h3>
        <h3>Category: {{count($product->category)?$product->category->name:"N/A"}}</h3>
        <form action="{{route('product.destroy', $product->id)}}" method="POST">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
        </form>
    </li>




    @empty
    <h3>No Products</h3>

@endforelse
</ul>

@endsection