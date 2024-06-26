@extends('layouts.app')

@section('content')

	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html"><b>Admin</b></a>
		</div>

		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Masukan Akun Anda</p>
					<form method="POST" action="{{ route('login') }}">
						@csrf
					<div class="input-group mb-3">

						 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

	                                @error('email')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror

					<div class="input-group-append">
					<div class="input-group-text">
					<span class="fas fa-envelope"></span>
					</div>
					</div>
					</div>
					<div class="input-group mb-3">
						
						  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

	                                @error('password')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror

					<div class="input-group-append">
					<div class="input-group-text">
					<span class="fas fa-lock"></span>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-8">
					<div class="icheck-primary">
						
						 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

	                                    <label class="form-check-label" for="remember">
	                                        Ingatkan Saya
	                                    </label>

					</div>
					</div>

					<div class="col-4">
					<button type="submit" class="btn btn-primary btn-block">Masuk</button>
					</div>

					</div>
				</form>

				<p class="mb-1">
				<a href="forgot-password.html">Lupa Kata Sandi</a>
				</p>
				<p class="mb-0">
				<a href="register.html" class="text-center">Daftar di Sini</a>
				</p>
			</div>
		</div>
	</div>
@endsection