<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>
	<link href="{{asset('css/style_datelimit.css')}}" rel="stylesheet">
  	<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-violet">
	    <img src="{{asset('images/logo.png')}}" width="7%">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
	    </button>
	      <div class="collapse navbar-collapse" id="navbarCollapse">
	        <ul class="navbar-nav mr-auto">

	        </ul>
	        <form class="form-inline mt-2 mt-md-0">
	          
	            <a class="nav-link" href="#">Sobre Nilo</a> 
	            <a class="nav-link" href="#">Facturación Electrónica</a>	          	          
	            <a class="nav-link" href="#">Módulos</a>
	            <a class="nav-link" href="#">Beneficios</a>	            
	            <a class="nav-link" href="#">Planes</a>
	            <a class="nav-link" href="#">Blog</a>
	            <a class="nav-link" href="#">Contacto</a>
	          	<button class="btn nav-link btn-outline-success my-2 my-sm-0" type="submit">Ingresar</button>
	        </form>
	      </div>
	</nav>
	<h1 class="text-center mt-l">Agregar Pregunta</h1>
	<div class="container mt-sl">
		<form action="{{ Route('supports.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					<div class="custom-file-upload">
					    <input type="file" id="file" name="file"/>
					</div>
				</div>
			</div>
				<div class="col-md-12">
					<div class="form-group">
						<strong>Categoría</strong>
						<input value="{{ old('category')}}" type="text" name="category" class="form-control" placeholder="Categoría">
						@if($errors->has('category'))
						<strong class="text-danger">{{ $errors->first('category')}}</strong>
						@endif
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<strong>Pregunta</strong>
						<input value="{{ old('question')}}" type="text" name="question" class="form-control" placeholder="Pregunta">
						@if($errors->has('question'))
						<strong class="text-danger">{{ $errors->first('question')}}</strong>
						@endif
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<strong>Solución</strong>
						<textarea name="solution" class="form-control" placeholder="Solución" id="" cols="30" rows="10">{{ old('solution')}}</textarea>
						@if($errors->has('solution'))
						<strong class="text-danger">{{ $errors->first('solution')}}</strong>
						@endif
					</div>
				</div>
				
				<div class="col-md-12 text-center">
					<button class="btn btn-violet">Enviar</button>
				</div>
			</div>
		</form>
	</div>
	  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	  <script src='{{asset("js/main.js")}}'></script>
</body>
</html>