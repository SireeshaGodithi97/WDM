@section('header')
<div class="container-fluid" style="background: #2f3742;">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<nav class="navbar navbar-expand-md  navbar-dark" style=" background: #2f3742;padding-top: 0px;padding-bottom: 0px;">
				<!-- Brand -->
				<a href="{{ route('home') }}" class=" navbar-brand logo"><img class="mr-left-50" src="{{ asset('imageRepository/logo.png') }}" ></a>
				<!-- Toggler/collapsibe Button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Navbar links -->
				<div class="collapse navbar-collapse" id="collapsibleNavbar" >
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="{{ route('home') }}">INICIO</a>
						</li>
						<li class="nav-item">
							<a  class="nav-link" href="{{ route('page1') }}">SEMBLANZA</a>
						</li>
						<li class="nav-item">
							<a  class="nav-link" href="{{ route('page2') }}">CENTRO AUGUSTO MIJARES</a>
						</li>
						<li class="nav-item">
							<a  class="nav-link" href="{{ route('page3') }}">PROYECTOS</a>
						</li>
						<li class="nav-item">
							<a  class="nav-link" href="{{ route('page4') }}">EVENTOS</a>
						</li>
						<li class="nav-item">
							<a  class="nav-link" href="{{ route('page5') }}">VIDEOS</a>
						</li>
						<li class="nav-item">
							<a  class="nav-link" href="{{ route('page6') }}">EQUIPO</a>
						</li>
						<li class="nav-item">
							<a  class="nav-link" href="http://mijares.blog.com.sxc8083.uta.cloud">BLOG</a>
						</li>




						{{--@if(Route::has('login'))--}}
							{{--@auth--}}
								{{--<li class="nav-item">--}}
									{{--<a class="nav-link" href="{{ route('login') }}">INICIO DE SESSION</a>--}}
								{{--</li>--}}

								{{--@if (Route::has('register'))--}}
								{{--<li class="nav-item">--}}
									{{--<a class="nav-link" href="{{ route('register') }}">REGISTRO</a>--}}
								{{--</li>--}}
								{{--@endif--}}
							{{--@endauth--}}
						{{--@endif--}}


						@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">INICIO DE SESSION</a>
						</li>

						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">REGISTRO</a>
							</li>
						@endif
						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

									@if(Auth::user()->user_type=='admin')
										<a class="dropdown-item" href="{{ route('admin_db') }}">
											My Dashboard
										</a>
									@else
										<a class="dropdown-item" href="{{ route('user_db') }}">
											My Dashboard
										</a>
									@endif

									<a class="dropdown-item" href="{{ url('/password/reset') }}">
										Reiniciar Contraseña
									</a>

									<a class="dropdown-item" href="{{ route('logout') }}"
									   onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
										Cerrar sesión
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
		</div>
	</div>
</div>


