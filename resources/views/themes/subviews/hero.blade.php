 <!-- Start Hero Section -->
 <div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>@yield('hero-title')</h1>
                    
                    <p><a href="{{route('shoppage')}}" class="btn btn-secondary me-2">Shop Now</a><a href="{{route('servicespage')}}"
                            class="btn btn-white-outline">Explore</a></p>
                            <p class="mb-4"><br><br></p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    @yield('hero-image')
                    {{-- <img src="{{ asset('assets') }}/images/couch.png" class="img-fluid"> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->
