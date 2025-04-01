{{-- @extends('layouts.app')

@section('title', 'Products Dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Products</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="{{ route('products.create') }}" class="btn btn-sm btn-outline-primary">
      <i class="bi bi-plus"></i> Add New Product
    </a>
  </div>
</div>

<div class="table-responsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Price</th>
        <th>quantity</th>
        <th>image</th>
        <th>Created</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($products as $product)
      <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>${{ number_format($product->price, 2) }}</td>
        <td>{{ $product->quantity }}</td>

        <td>{{ $product->created_at->format('M d, Y') }}</td>
        <td>
          <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">
            <i class="bi bi-pencil"></i> Edit
          </a>
          <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">
              <i class="bi bi-trash"></i> Delete
            </button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="6" class="text-center">No products found</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>

<div class="d-flex justify-content-center">
  {{ $products->links() }}
</div>
@endsection
 --}}





 @extends('layouts.app')

@section('title', 'Products Dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Products</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="{{ route('products.create') }}" class="btn btn-sm btn-outline-primary">
      <i class="bi bi-plus"></i> Add New Product
    </a>
  </div>
</div>

<div class="table-responsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Price</th>
        <th>quantity</th>
        <th>image</th>
        <th>Created</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($products as $product)
      <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>${{ number_format($product->price, 2) }}</td>
        <td>{{ $product->quantity }}</td>
        <td>
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" width="60">
          </td>



        <td>{{ $product->created_at->format('M d, Y') }}</td>
        <td>
          <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">
            <i class="bi bi-pencil"></i> Edit
          </a>
          <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">
              <i class="bi bi-trash"></i> Delete
            </button>
          </form>
        </td>


      </tr>
      @empty
      <tr>
        <td colspan="6" class="text-center">No products found</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>

<div class="d-flex justify-content-center">
  {{ $products->links() }}
</div>
@endsection

