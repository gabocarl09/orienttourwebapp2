
@include('layouts.panel')

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    	<div class="container">
    		<a class="navbar-brand" href="index.html">ORIENTTOUR<span>.</span></a>

    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
    		</button>

    		<div class="collapse navbar-collapse" id="navbarsFurni">
    			<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
    				<li class="nav-item active">

    				</li>
    				<li><a class="nav-link" href="shop.html">Tienda</a></li>
    				<li><a class="nav-link" href="about.html">Acerca de Nosotros</a></li>
    				<li><a class="nav-link" href="{{ route('register') }}">Registro</a></li>
    				<li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
    			</ul>

    			<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
    				<li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
    				<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
    			</ul>
    		</div>
    	</div>

    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    	<div class="hero">
    		<div class="container">
    			<div class="row justify-content-between">
    				<div class="col-lg-5">
    					<div class="intro-excerpt">
    						<h1>San Juan de Oriente <span clsas="d-block"></span></h1>
    						<p class="mb-4">Descubre la esencia de nuestra cultura a través de nuestras artesanías y experiencias únicas.</p>
    					</div>
    				</div>
    				<div class="col-lg-7">
    					<div class="cuadradito_blanco">
                            <div class="circulo_blanco"></div>
    						<img src="images/jarronesLanding.png" class="img-fluid" >
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
    	<div class="container">
    		<div class="row">

    			<!-- Start Column 1 -->
    			<div class="col-md-12 col-lg-6 mb-5 mb-lg-0">
    				<h2 class="mb-4 section-title">¿Porque elegirnos?.</h2>
    				<p class="mb-4">Somos la primera plataroma en ofrecerte servicios de venta de productos artesanales precolombinos de la ciudad creativa San Juan de Oriente-Nicaragua, productos realizados por artesanos culturalmente profesionales. </p>
    			</div>
    			<div class="col-lg-3"></div>
    			<div class="col-lg-3 ">
    				<div class="cuadrado_rosado">
    				<img src="images/Jarronanding3.png" alt="">
    			</div>
    			<!-- End Column 1 -->

    		</div>
    	</div>
    </div>
    <!-- End Product Section -->

    <div class="muralCeli">
    	<img src="images/sis.png" alt="">
    </div>

    <!-- Start We Help Section -->
    <div class="we-help-section">
    	<div class="container">
    		<div class="row justify-content-between">
    			<div class="col-lg-7 mb-5 mb-lg-0">
    				<div class="imgs-grid">
    					<div class="grid grid-1"><img src="images/artesaniabarro.png" alt="Untree.co"></div>
    					<div class="grid grid-2"><img src="images/barro.png" alt="Untree.co"></div>
    					<div class="grid grid-3"><img src="images/ceramica.png" alt="Untree.co"></div>
    				</div>
    			</div>
    			<div class="col-lg-5 ps-lg-5">
    				<h2 class="section-title mb-4">Las mejores artesanias</h2>
    				<p>Los mejores productos precolombinos de la ciudad creativa San Juan del Oriente con tan solo unos clicks pueden ser tuyos.</p>

    				<ul class="list-unstyled my-4 list-style">
    					<li>Los mejores productos precolombinos de la ciudad creativa San Juan del Oriente con tan solo unos clicks pueden ser tuyos.</li>
    					<li>Los mejores productos precolombinos de la ciudad creativa San Juan del Oriente con tan solo unos clicks pueden ser tuyos.</li>
    					<li>Los mejores productos precolombinos de la ciudad creativa San Juan del Oriente con tan solo unos clicks pueden ser tuyos.</li>
    				</ul>

    			</div>
    		</div>
    	</div>
    </div>
    <!-- End We Help Section -->

    <!-- Start Popular Product -->
    <div class="popular-product">
    	<div class="container">
    		<div class="row">

    			<div class="mapita">
    				<img src="images/mapita.png">
    			</div>

    		</div>
    	</div>
    </div>
    <!-- End Popular Product -->

    <!-- End Testimonial Slider -->

    <div class="tituloVenta">
    <img src="images/Orienttour.png">
    <p>Los mejores productos precolombinos de la ciudad creativa San Juan del Oriente
    	con tan solo unos clicks pueden ser tuyos.</p>
	</  v>

    <!-- Start Blog Section -->
    <div class="productosVenta">
    	<div class="card col-lg-4" style="width: 18rem;">
    		<div class="tiket"></div>
    		<img src="images/ceramicaAlta.png" class="card-img-top" alt="...">
    		<div class="card-body cards-positions">
    		  <h5 class="card-title">Jarron</h5>
    		  <p class="card-text">Producto único en su extraordinario diseño.</p>
    		  <a href="#" class="btn btn-primary">C$200</a>
    		</div>
    	  </div>
    	  <div class="card col-lg-4" style="width: 18rem;">
    	  <div class="tiket"></div>
    		<img src="images/ceramicaAlta.png" class="card-img-top" alt="...">
    		<div class="card-body cards-positions">
    		  <h5 class="card-title">Jarron</h5>
    		  <p class="card-text">Producto único en su extraordinario diseño.</p>
    		  <a href="#" class="btn btn-primary">C$200</a>
    		</div>
    	  </div>
    	  <div class="card col-lg-4" style="width: 18rem;">
    	  <div class="tiket"></div>
    		<img src="images/ceramicaAlta.png" class="card-img-top" alt="...">
    		<div class="card-body cards-positions">
    		  <h5 class="card-title">Jarron</h5>
    		  <p class="card-text">Producto único en su extraordinario diseño.</p>
    		  <a href="#" class="btn btn-primary">C$200</a>
    		</div>
    	  </div>
    </div>
    <!-- End Blog Section -->

    <!-- Start Footer Section -->
    <footer class="footer-section" style="background-color: #f85959b8">
    	<div class="container relative">

    		<div class="sofa-img">
    			{{-- <img src="images/sofa.png" alt="Image" class="img-fluid"> --}}
    		</div>



    		<div class="row g-5 mb-5">
    			<div class="col-lg-4">
    				<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">ORIENTTOUR<span>.</span></a></div>


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
    							<li><a href="#">About us</a></li>
    							<li><a href="#">Services</a></li>
    							<li><a href="#">Blog</a></li>
    							<li><a href="#">Contact us</a></li>
    						</ul>
    					</div>
                        </div>
                    </div>
    		</div>

    		<div class="border-top copyright">
    			<div class="row pt-4">
    				<div class="col-lg-6">
    					<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  </p>
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



