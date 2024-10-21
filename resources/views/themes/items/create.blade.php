@extends('themes.master')

@section('main-title', 'Add new item')
@section('hero-title', 'Add item')


@section('contant')

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card shadow-lg">
                    <div class="card-header bg-secondary text-white text-center">
                        <h3>New Item</h3>
                    </div>
                    <div class="card-body p-4">

                        @if (session('add-status'))
                            <div class="alert alert-success" style="text-align: center ;font-weight: bold ; font-size: 18px">
                                {{ session('add-status') }}
                            </div>
                        @endif

                        <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- title -->
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Title</label>
                                <input type="text" class="form-control" id="fullName" name="title"
                                    placeholder="Enter your full name" value="{{ old('title') }}">
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />

                            </div>
                            <!-- price -->
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price"
                                    placeholder="Enter your price" value="{{ old('price') }}">
                                <x-input-error :messages="$errors->get('price')" class="mt-2" />

                            </div>
                            <!-- Upload Image -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control" type="file" id="image" name="image"
                                    value="{{ old('image') }}">
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />

                            </div>
                            <!-- description -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    placeholder="Enter your description" value="{{ old('description') }}">
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />

                            </div>
                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>

@endsection
