@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Product</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="{{ route('products.index') }}" class="btn btn-sm btn-outline-secondary">
      <i class="bi bi-arrow-left"></i> Back to Products
    </a>
  </div>
</div>

<div class="row">
  <div class="col-md-8">
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $product->name) }}">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description', $product->description) }}</textarea>
        @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $product->price) }}">
              @error('price')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="mb-3">
            <label for="quantity" class="form-label">quantity</label>
            <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}">
            @error('quantity')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Product Image</label>
        @if($product->image)
        <div class="mb-2">
          <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="max-height: 100px;" class="img-thumbnail">
        </div>
        @endif
        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
        <small class="form-text text-muted">Leave empty to keep the current image</small>
        @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
  </div>
</div>
@endsection
