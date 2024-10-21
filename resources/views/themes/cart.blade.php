@extends('themes.master')

@section('main-title', 'Cart page')

@section('hero-title', 'Cart')
@section('contant')
    <div class="untree_co-section before-footer-section">
        <div class="container">
            <div class="row mb-5">
                <form class="col-md-12" method="post">
                    <div class="site-blocks-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-total">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($cart) && count($cart) > 0)
                                    @foreach ($cart as $key => $item)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <img src="{{ asset('storage') }}/itemsphoto/{{$item['image']}}" alt="Image" class="img-fluid">
                                            </td>
                                            <td class="product-name">
                                                <h2 class="h5 text-black">{{ $item['title'] }}</h2>
                                            </td>
                                            <td>{{ $item['price'] }}</td>
                                            <td>
                                                <h2 class="h5 text-black">{{ $item['quantity'] }}</h2>

                                            </td>
                                            <td>{{ $item['quantity'] * $item['price'] }}</td>
                                            <td><a href="{{ route('cartdelete', ['id'=> $key]) }}"
                                                    class="btn btn-black btn-sm">X</a></td>
                                        </tr>
                                        @php
                                            $total += $item['quantity'] * $item['price'];
                                        @endphp
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="product-thumbnail" colspan ="6" style=" text-align: center">
                                            <h2>No items in cart</h2>
                                        </td>
                                    </tr>
                                @endif



                            </tbody>
                        </table>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <a href="{{ route('cartupdate') }}" class="btn btn-black btn-sm btn-block">Delete Carts</a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('shoppage') }}" class="btn btn-outline-black btn-sm btn-block">Continue
                                Shopping</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 pl-5 mb-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5" >
                                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <span class="text-black">Total</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <strong class="text-black">{{ $total }}</strong>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-black btn-lg py-3 btn-block"
                                            onclick="window.location='{{ route('checkoutpage') }}'">Proceed To
                                            Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    @endsection
    @section('footer-image')

        <div class="sofa-img">
            <img src="{{ asset('assets') }}/images/sofa.png" alt="Image" class="img-fluid">
        </div>

    @endsection
