
<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>PERWITA | Perpustakaan Wisata Masa Lalu</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-beta2.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css"/>
    <link rel="stylesheet" href="assets/css/tiny-slider.css"/>
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		<!-- preloader end -->
		

    <!-- ========================= header start ========================= -->
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('landingpage')}}">
                  <img src="{{  asset('assets/images/logo/logo.svg')}}" alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
								</button>
								
                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
									<div class="ms-auto">
										<ul id="nav" class="navbar-nav ms-auto">
											<li class="nav-item">
                        <a class="" href="{{ route('admin')}}">Home</a>
											</li>
											<li class="nav-item">
												<a class="" href="{{ route('detailpinjam')}}">Peminjaman</a>
											</li>
											<li class="nav-item">
												<a class="" href="{{ route('detail-kembali')}}">Pengembalian</a>
											</li>
											<li class="nav-item">
												<a class="" href="{{ route('kartuanggota')}}">Keangotaan</a>
											</li>
                                            
											
										</ul>
									</div>
                  
                </div>
								<!-- navbar collapse -->
								<div class="header-btn">
                                    <ul class="navbar-nav ml-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">

                                                <div class="dropdown">
                                                    <button class="main-btn btn-hover dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        {{ Auth::user()->name }}
                                                    </button>
                                                    <ul class="dropdown-menu bg-site text-left" aria-labelledby="dropdownMenuButton1">
                                                      <li><a class="dropdown-item" href="{{ route('laporanpeminjaman')}}">Laporan Peminjaman</a></li>
                                                      <li><a class="dropdown-item" href="{{ route('laporanpengembalian')}}">Laporan Pengembalian</a></li>
                                                      <li><a class="dropdown-item" href="{{ route('laporandonasibuku')}}">Laporan Donasi Buku</a></li>
                                                      <li><a class="dropdown-item" href="{{ route('laporandendaanggota')}}">Laporan Denda Anggota</a></li>
                                                      <li><a class="dropdown-item" href="{{ route('laporandataanggota')}}">Laporan Data Anggota</a></li>
                                                      <li>
                                                        <a href="{{ route('update-akun')}}">Ubah Data</a>
                                                      </li>
                                                      <li>
                                                        <a href="{{ route('logout')}}" method="POST">Logout  </a>
                                                      </li>
                                                    </ul>
                                                  </div>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                        
                                    </ul>
								</div>
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->
        <main>
            @yield('content')
            <br><br><br>    
        </main>
    <!-- ========================= footer start ========================= -->
<		<footer class="footer pt-120">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
						<div class="footer-widget">
							<div class="logo">
								<a href="index.html"> <img src="assets/images/logo/logo.svg" alt="logo"> </a>
							</div>
							<p class="desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy eirmod tempor invidunt.</p>
							<ul class="social-links">
								<li><a href="#0"><i class="lni lni-facebook"></i></a></li>
								<li><a href="#0"><i class="lni lni-linkedin"></i></a></li>
								<li><a href="#0"><i class="lni lni-instagram"></i></a></li>
								<li><a href="#0"><i class="lni lni-twitter"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 offset-xl-1">
						<div class="footer-widget">
							<h3>About Us</h3>
							<ul class="links">
								<li><a href="#0">Home</a></li>
								<li><a href="#0">About</a></li>
								<li><a href="#0">Features</a></li>
								<li><a href="#0">Pricing</a></li>
								<li><a href="#0">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
						<div class="footer-widget">
							<h3>Services</h3>
							<ul class="links">
								<li><a href="#0">SaaS Focused</a></li>
								<li><a href="#0">Awesome Design</a></li>
								<li><a href="#0">Ready to Use</a></li>
								<li><a href="#0">Essential Selection</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="footer-widget">
							<h3>Subscribe Newsletter</h3>
							<form action="#">
								<input type="email" placeholder="Email">
								<button class="main-btn btn-hover">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</footer>
        <a href="#" class="scroll-top btn-hover">
            <i class="lni lni-chevron-up"></i>
          </a>
      
          <!-- ========================= JS here ========================= -->
          <script src="assets/js/bootstrap-5.0.0-beta2.min.js"></script>
          <script src="assets/js/tiny-slider.js"></script>
          <script src="assets/js/wow.min.js"></script>
          <script src="assets/js/polyfill.js"></script>
          <script src="assets/js/main.js"></script>
</body>
</html>
