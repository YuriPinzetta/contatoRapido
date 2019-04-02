@extends('app')

@section('content')
	<section class="conteudo-interno login">
		<div class="container">
			<div class="row offset-top-100 font-black">
				<div class="col-md-10 col-md-offset-1">
					@if (count($errors) > 0)
						<div class="alert alert-danger offset-top-50">
							<strong>Ooops!</strong> Email ou senha incorreto!.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						{!! csrf_field() !!}

						<div class="form-group">
							<label class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Senha</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Manter Conectado
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Entrar</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Esqueceu sua senha?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
