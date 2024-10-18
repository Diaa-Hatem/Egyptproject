@extends('themes.master')

@section('main-title', 'Your items')

@section('hero-title', 'Your items')


@section('contant')

    <div class="untree_co-section product-section before-footer-section">
        @if (session('update-status'))
            <div class="alert alert-success" style="text-align: center ;font-weight: bold ; font-size: 18px">
                {{ session('update-status') }}
            </div>
        @endif
        @if (session('delete-status'))
            <div class="alert alert-success" style="text-align: center ;font-weight: bold ; font-size: 18px">
                {{ session('delete-status') }}
            </div>
        @endif
        <div class="container">
            <div class="row">
                @if (count($items) > 0)
                    @foreach ($items as $item)
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="">
                                <img src="{{ asset('storage') }}/itemsphoto/{{ $item->image }}"
                                    class="img-fluid product-thumbnail">
                                <h3 class="product-title">{{ $item->title }}</h3>
                                <strong class="product-price">{{ $item->price }}</strong>
                                <p class="mb-4">{{ $item->description }}</p>
                            </a>
                            <form action="{{ route('items.edit', ['item' => $item]) }}" method="GET" class="d-inline"
                                id="delete_form">
                            
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary mb-2">Edit</button>
                                </div>
                                
                            </form>

                            <form action="{{ route('items.destroy', ['item' => $item]) }}" method="POST" class="d-inline"
                                id="delete_form">
                                @csrf
                                @method('delete')
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                                
                            </form>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>



@endsection
