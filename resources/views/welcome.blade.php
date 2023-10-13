
@include('layouts.panel')

    <!-- Inicio landing -->
    <div class="hero init_landing">
    	<div class="container">
    		<div class="row justify-content-between">
    			<div class="col-lg-6">
    				<div class="intro-excerpt">
                        <div class="init_landing_img">
                            <img src="{{ asset('images/ORIENTTOUR.png') }}" alt="">
                        </div>
    					<h1>San Juan de Oriente <span clsas="d-block"></span></h1>
    					<p class="mb-4">Descubre la esencia de nuestra cultura a través de nuestras artesanías y experiencias únicas.</p>
                        <div class="landing_btn">
                            <button class="landing_btn_inicio">
								<a href="{{ route('login') }}">Inicio de sesión</a>
							</button>
                            <button class="landing_btn_registro">
								<a href="{{ route('register') }}">Registrarte</a>
							</button>
                        </div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="cuadradito_blanco">
                        <div class="circulo_blanco"></div>
    					<img src="images/jarronesLanding.png" class="img-fluid" >
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- fin inicio landing -->

    <!-- Sección 1-->
    <div class="landingSect">
    	<div class="landingSect_info">

    		{{-- propuesta --}}
    		<div class=" landingSect_info_val">
    			<h2 class="">¿Porque elegirnos?</h2>
    			<p class="">Somos la primera plataroma en ofrecerte servicios de venta de productos artesanales precolombinos de la ciudad creativa San Juan de Oriente-Nicaragua, productos realizados por artesanos culturalmente profesionales. </p>
    		</div>
    		<div class="cuadrado_rosado">
    			<img src="images/Jarronanding3.png" alt="">
    		</div>
    		<!-- fin propuesta -->

    	</div>
    </div>
    <!-- Fin Sección 1 -->

    <!-- Sección 2 -->
    <div class="muralCeli">
    	<img src="images/sis.png" alt="">
    </div>
    <!-- Fin Sección 2 -->

    <!-- Sección 3 -->
    <div class="we-help-section">
    	<div class="container">
    		<div class="row justify-content-between">
    			<div class="col-lg-7 mb-5 mb-lg-0">
    				<div class="imgs-grid">
    					<div class="grid grid-1"><img src="images/artesaniabarro.png" alt=""></div>
    					<div class="grid grid-2"><img src="images/barro.png" alt=""></div>
    					<div class="grid grid-3"><img src="images/ceramica.png" alt=""></div>
    				</div>
    			</div>
    			<div class="col-lg-5 ps-lg-5 landingSect2">
    				<h2 class="section-title mb-4">Las mejores artesanias</h2>

    				<ul class="list-unstyled my-4 list-style">
    					<li>Los mejores productos precolombinos de la ciudad creativa San Juan del Oriente con tan solo unos clicks pueden ser tuyos.</li>
    					<li>Los mejores productos precolombinos de la ciudad creativa San Juan del Oriente con tan solo unos clicks pueden ser tuyos.</li>
    					<li>Los mejores productos precolombinos de la ciudad creativa San Juan del Oriente con tan solo unos clicks pueden ser tuyos.</li>
    				</ul>

    			</div>
    		</div>
    	</div>
    </div>
    <!-- Fin Sección 3 -->

    <!-- Sección 4 -->

    <div class="landing_promo">
        <p>Los mejores productos precolombinos
            de la ciudad creativa San Juan del
            Oriente con tan solo unos clicks
            pueden ser tuyos.</p>
        <img src="{{ asset('images/mapa.png') }}">
    </div>

    <!-- Fin sección 4 -->

    <!-- producto destacado -->

    <div class="tituloVenta">
        <img src="images/Orienttour.png">
        <p>Los mejores productos precolombinos de la ciudad creativa San Juan del Oriente
    	con tan solo unos clicks pueden ser tuyos.</p>
    </div>

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
    <!-- fin producto destacado -->

    <!-- footer -->
    <footer class="footer-section" style="background-color: #f85959b8">
    	<div class="container relative">

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

    			<div class="col-lg-4">
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

                <div class="col-lg-4">
                    <div class="footer_logo">
                        <img src="" alt="">
                    </div>
                </div>
    		</div>

    		<div class="border-top copyright">
    			<div class="row pt-4">
    				<div class="col-lg-6">
    					<p class="mb-2 text-center text-lg-start">Copyright &copy;. Todos los derechos reservados. &mdash; Orienttour Distribuido por Bytewebnet  </p>
    				</div>
    			</div>
    		</div>

    	</div>
    </footer>
    <!-- End Footer Section -->



