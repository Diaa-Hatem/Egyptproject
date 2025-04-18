 <!-- Start Footer Section -->
 <footer class="footer-section">
     <div class="container relative">
        @yield('footer-image')
         

         <div class="row">
             <div class="col-lg-8">
                 <div class="subscription-form">

                     <h3 class="d-flex align-items-center"><span class="me-1"><img
                                 src="{{ asset('assets') }}/images/envelope-outline.svg" alt="Image"
                                 class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

                    
                     @if (session('status'))
                         <div class="alert alert-success">
                             {{ session('status') }}
                         </div>
                     @endif
                     <form action="{{ route('subscribe.store') }}" method="post" class="row g-3">
                         @csrf

                         <div class="col-auto">
                             <input type="text" name="name" class="form-control" placeholder="Enter your name">
                             @error('name')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                         </div>

                         <div class="col-auto">
                             <input type="email" name="email" class="form-control" placeholder="Enter your email">
                             @error('email')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                         </div>

                         <div class="col-auto">
                             <button type="submit" class="btn btn-primary">
                                 <span class="fa fa-paper-plane"></span>
                             </button>
                         </div>
                     </form>

                 </div>
             </div>
         </div>

         <div class="row g-5 mb-5">
             <div class="col-lg-4">
                 <div class="mb-4 footer-logo-wrap"><a href="{{route('homepage')}}" class="footer-logo">Furni<span>.</span></a>
                 </div>
                 <p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus
                     malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.
                     Pellentesque habitant</p>

                 <ul class="list-unstyled custom-social">
                     <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                     <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                     <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                     <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                 </ul>
             </div>

             <div class="col-lg-8">
                 <div class="row links-wrap">
                     <div class="col-6 col-sm-6 col-md-3">
                         <ul class="list-unstyled">
                             <li><a href="{{route('aboutpage')}}">About us</a></li>
                             <li><a href="{{route('servicespage')}}">Services</a></li>
                             <li><a href="{{route('blogpage')}}">Blog</a></li>
                             <li><a href="{{route('contactpage')}}">Contact us</a></li>
                         </ul>
                     </div>

                     <div class="col-6 col-sm-6 col-md-3">
                         <ul class="list-unstyled">
                             <li><a href="{{route('contactpage')}}">Support</a></li>
                             <li><a href="#">Live chat</a></li>
                             <li><a href="#">Privacy Policy</a></li>

                         </ul>
                     </div>

                     <div class="col-6 col-sm-6 col-md-3">
                         <ul class="list-unstyled">
                             <li><a href="#">Jobs</a></li>
                             <li><a href="{{route('contactpage')}}">Our team</a></li>
                             <li><a href="#">Leadership</a></li>
                         </ul>
                     </div>

                     
                 </div>
             </div>

         </div>

         <div class="border-top copyright">
             <div class="row pt-4">
                 <div class="col-lg-6">
                     <p class="mb-2 text-center text-lg-start">Copyright &copy;
                         <script>
                             document.write(new Date().getFullYear());
                         </script>. All Rights Reserved. &mdash; Designed with love by <a
                             href="https://untree.co">Untree.co</a> Distributed By <a
                             hreff="https://themewagon.com">ThemeWagon</a>
                         <!-- License information: https://untree.co/license/ -->
                     </p>
                 </div>

                 <div class="col-lg-6 text-center text-lg-end">
                     <ul class="list-unstyled d-inline-flex ms-auto">
                         <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                         <li><a href="#">Privacy Policy</a></li>
                     </ul>
                 </div>

             </div>
         </div>

     </div>
 </footer>
 <!-- End Footer Section -->
