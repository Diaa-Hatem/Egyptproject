@extends('themes.master')

@section('main-title', 'Shop page')

@section('hero-title', 'shop now')
@section('nav-active-shop', 'active')


@section('hero-image')
    <img src="{{ asset('assets') }}/images/couch.png" class="img-fluid">
@endsection


@section('contant')
    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">
                @if (count($items) > 0)
                    @foreach ($items as $item)
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="{{ route('cartpage') }}">
                                <img src="{{ asset('storage') }}/itemsphoto/{{ $item->image }}"
                                    class="img-fluid product-thumbnail">
                                <h3 class="product-title">{{ $item->title }}</h3>
                                <strong class="product-price">{{ $item->price }}</strong>
                                <p class="mb-4">{{ $item->description }}</p>

                                <span class="icon-cross">
                                    <img src="{{ asset('assets') }}/images/cross.svg" class="img-fluid">
                                </span>
                            </a>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>

@endsection
@section('footer-image')

    <div class="sofa-img">
        <img src="{{ asset('assets') }}/images/sofa.png" alt="Image" class="img-fluid">
    </div>

@endsection
