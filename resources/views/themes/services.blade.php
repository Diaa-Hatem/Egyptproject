@extends('themes.master')

@section('main-title', 'Services page')

@section('hero-title', 'Services')
@section('nav-active-services', 'active')


@section('hero-image')
    <img src="{{ asset('assets') }}/images/couch.png" class="img-fluid">
@endsection


@section('contant')
    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">


            <div class="row my-5">
                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">
                        <div class="icon">
                            <img src="{{ asset('assets') }}/images/truck.svg" alt="Image" class="imf-fluid">
                        </div>
                        <h3>Fast &amp; Free Shipping</h3>
                        <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">
                        <div class="icon">
                            <img src="{{ asset('assets') }}/images/bag.svg" alt="Image" class="imf-fluid">
                        </div>
                        <h3>Easy to Shop</h3>
                        <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">
                        <div class="icon">
                            <img src="{{ asset('assets') }}/images/support.svg" alt="Image" class="imf-fluid">
                        </div>
                        <h3>24/7 Support</h3>
                        <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">
                        <div class="icon">
                            <img src="{{ asset('assets') }}/images/return.svg" alt="Image" class="imf-fluid">
                        </div>
                        <h3>Hassle Free Returns</h3>
                        <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">
                        <div class="icon">
                            <img src="{{ asset('assets') }}/images/truck.svg" alt="Image" class="imf-fluid">
                        </div>
                        <h3>Fast &amp; Free Shipping</h3>
                        <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">
                        <div class="icon">
                            <img src="{{ asset('assets') }}/images/bag.svg" alt="Image" class="imf-fluid">
                        </div>
                        <h3>Easy to Shop</h3>
                        <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">
                        <div class="icon">
                            <img src="{{ asset('assets') }}/images/support.svg" alt="Image" class="imf-fluid">
                        </div>
                        <h3>24/7 Support</h3>
                        <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">
                        <div class="icon">
                            <img src="{{ asset('assets') }}/images/return.svg" alt="Image" class="imf-fluid">
                        </div>
                        <h3>Hassle Free Returns</h3>
                        <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
                    <p class="mb-4">From here you can buy the best types of furniture</p>
                    <p><a href="{{ route('shoppage') }}" class="btn">Shop now</a></p>
                </div>
                <!-- End Column 1 -->

                @if (count($items) > 0)
                    @foreach ($items as $item)
                        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                            <a class="product-item" href="{{ route('cartpage',['id'=>$item->id]) }}">
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
    <!-- End Product Section -->




    <!-- Start Testimonial Slider -->
    <div class="testimonial-section mb-5 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-title">Testimonials</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider-wrap text-center">

                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                            <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                        </div>

                        <div class="testimonial-slider">
                            @if (count($users) > 0)
                                @foreach ($users as $user)
                                    <div class="item">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 mx-auto">

                                                <div class="testimonial-block text-center">
                                                    <blockquote class="mb-5">
                                                        <p>&ldquo;He is one of the most serious people in work and who makes
                                                            big
                                                            profits&rdquo;</p>
                                                    </blockquote>

                                                    <div class="author-info">
                                                        <div class="author-pic">
                                                            <img src="{{ asset('assets') }}/images/person-1.png"
                                                                alt="Maria Jones" class="img-fluid">
                                                        </div>
                                                        <h3 class="font-weight-bold">{{ $user->name }}</h3>
                                                        <span class="position d-block mb-3">CEO, Co-Founder, XYZ
                                                            Inc.</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- End Testimonial Slider -->

@endsection

@section('footer-image')

    <div class="sofa-img">
        <img src="{{ asset('assets') }}/images/sofa.png" alt="Image" class="img-fluid">
    </div>

@endsection
