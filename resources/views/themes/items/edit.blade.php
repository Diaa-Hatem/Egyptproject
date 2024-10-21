@extends('themes.master')

@section('main-title', 'Edit your item')
@section('hero-title', 'Edit your item')


@section('contant')


    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card shadow-lg">
                    <div class="card-header bg-secondary text-white text-center">
                        <h3>Edit your item</h3>
                    </div>
                    <div class="card-body p-4">
                       
                        <form action="{{ route('items.update', ['item' => $item]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- title -->
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Title</label>
                                <input type="text" class="form-control" id="fullName" name="title"
                                    placeholder="Enter your full name" value="{{ $item->title }}">
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />

                            </div>
                            <!-- price -->
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price"
                                    placeholder="Enter your price" value="{{ $item->price }}">
                                <x-input-error :messages="$errors->get('price')" class="mt-2" />

                            </div>
                            <!-- Upload Image -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control" type="file" id="image" name="image">
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />

                            </div>
                            <!-- description -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    placeholder="Enter your description" value="{{ $item->description }}">
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />

                            </div>
                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>

@endsection
