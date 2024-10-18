 <!-- Start Header/Navigation -->
 <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

     <div class="container">
         <a class="navbar-brand" href="{{route('homepage')}}">Furni<span>.</span></a>

         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
             aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarsFurni">
             <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                 <li class="nav-item @yield('nav-active-home')">
                     <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                 </li>
                 <li class="nav-item @yield('nav-active-shop')"><a class="nav-link" href="{{ route('shoppage') }}">Shop</a></li>
                 <li class="nav-item @yield('nav-active-about')"><a class="nav-link" href="{{ route('aboutpage') }}">About us</a>
                 </li>
                 <li class="nav-item @yield('nav-active-services')"><a class="nav-link"
                         href="{{ route('servicespage') }}">Services</a></li>
                 <li class="nav-item @yield('nav-active-blog')"><a class="nav-link" href="{{ route('blogpage') }}">Blog</a></li>
                 <li class="nav-item @yield('nav-active-contact')"><a class="nav-link" href="{{ route('contactpage') }}">Contact
                         us</a></li>
             </ul>

             <ul class="custom-navbar-cta navbar-nav mb-2 mb-md- ms-5">
                 <li><a class="nav-link" href="{{route('cartpage')}}"><img src="{{ asset('assets') }}/images/cart.svg"></a></li>
                 @if (!Auth::check())
                 <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <div style="border: 1px solid #f9bf29 ;padding: 5px 5px ;border-radius: 5px ;background-color:#f9bf29 ;color: white" >
                        <a style="text-decoration: none" href="{{route('items.create')}}">
                            Register / Login</a>
                    </div>
                     {{-- <li><a class="nav-link" href="{{route('register')}}">Register / Login</a></li> --}}
                 @else
                 <li><a class="nav-link" href="{{route('profile.edit')}}"><img src="{{ asset('assets') }}/images/user.svg"></a></li>

                 @endif


             </ul>
         </div>
     </div>

 </nav>
 <!-- End Header/Navigation -->
