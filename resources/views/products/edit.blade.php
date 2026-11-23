@extends('templates.layoutApp')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="mb-0 fs-3">Edit Product</h1>
                </div>

                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('products.index') }}">Products</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Edit Product
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Product</h3>
                        </div>

                        <form
                            method="POST"
                            action="{{ route('products.update', $product->id) }}"
                            enctype="multipart/form-data"
                        >
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-3 col-form-label">
                                        Product Name
                                    </label>

                                    <div class="col-sm-9">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="name"
                                            name="name"
                                            value="{{ old('name', $product->name) }}"
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="price" class="col-sm-3 col-form-label">
                                        Price
                                    </label>

                                    <div class="col-sm-9">
                                        <input
                                            type="number"
                                            class="form-control"
                                            id="price"
                                            name="price"
                                            value="{{ old('price', $product->price) }}"
                                            min="0"
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="stock" class="col-sm-3 col-form-label">
                                        Stock
                                    </label>

                                    <div class="col-sm-9">
                                        <input
                                            type="number"
                                            class="form-control"
                                            id="stock"
                                            name="stock"
                                            value="{{ old('stock', $product->stock) }}"
                                            min="0"
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="description" class="col-sm-3 col-form-label">
                                        Description
                                    </label>

                                    <div class="col-sm-9">
                                        <textarea
                                            class="form-control"
                                            id="description"
                                            name="description"
                                            rows="4"
                                        >{{ old('description', $product->description) }}</textarea>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="image" class="col-sm-3 col-form-label">
                                        Image
                                    </label>

                                    <div class="col-sm-9">
                                        <input
                                            type="file"
                                            class="form-control"
                                            id="image"
                                            name="image"
                                            accept="image/*"
                                        >
                                        <small class="text-muted">
                                            Kosongkan jika tidak ingin mengganti gambar.
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    Update Product
                                </button>

                                <a
                                    href="{{ route('products.index') }}"
                                    class="btn btn-secondary"
                                >
                                    Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection