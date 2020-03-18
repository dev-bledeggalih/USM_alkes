<div class="mt-side-menu">
				<!-- mt holder start here -->
				<div class="mt-holder">
					<a href="#" class="side-close"><span></span><span></span></a>
					<strong class="mt-side-title">
					@guest
					@else
						Hi, {{ Auth::user()->name }}		
					@endguest
					</strong>
					
					<!-- mt side widget start here -->
					@guest
					<div class="mt-side-widget">
						<header>
							<span class="mt-side-subtitle">SIGN IN</span>
							<p>Welcome back! Sign in to Your Account</p>
						</header>
						<form id="loginForm" name="loginForm" action="{{ url('/user-login') }}" method="POST">{{ csrf_field() }}
							<fieldset>
								<input name="email" type="email" placeholder="Email Address" required="" class="input">
								<input name="password" type="password" placeholder="Password" required="" class="input">
								<button type="submit" class="btn-type1">Login</button><br>
								<a href="{{ url('forgot-password') }}">Forgot Password?</a>
							</fieldset>
						</form>
					</div>
					<!-- mt side widget end here -->
					<div class="or-divider"><span class="txt">or</span></div>
					<!-- mt side widget start here -->
					<div class="mt-side-widget">
						<header>
							<span class="mt-side-subtitle">CREATE NEW ACCOUNT</span>
							<p>Create your very own account</p>
						</header>
						<form id="registerForm" name="registerForm" action="{{ url('/user-register') }}" method="POST">{{ csrf_field() }}
							<fieldset>
								<input id="name" name="name" type="text" placeholder="Name" class="input">
								<input id="email" name="email" type="email" placeholder="Email Address" class="input">
								<input id="myPassword" name="password" type="password" placeholder="Password" class="input">
								<button type="submit" class="btn-type1">Register</button>
							</fieldset>
						</form>
					</div>
					@else
					<div class="mt-side-widget">
						<ul>
							<li><a href="">Cart</a></li>
						</ul>
					</div>
					@endguest
					<!-- mt side widget end here -->
				</div>
				<!-- mt holder end here -->
			</div>