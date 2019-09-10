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
	<div class="container">
		<a class="btn btn-info mt-sl" href="{{ route('supports.create')}}">+</a>
			@if(Session::has('message'))
				<div class="alert alert-info mt-3">{{ Session::get('message')}}</div>
			@endif
	<table class="table table-hover table-bordered mt-3 table-shadow">
	  <thead class="bg-violet">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Categoría</th>
	      <th scope="col">Pregunta</th>
	      <th scope="col">Solución</th>
	      <th scope="col">imagen</th>
	      <th scope="col">Acción</th>

	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($supports as $support)
	    <tr>
	      <th scope="row">{{ $support->id }}</th>
	      <td>{{ $support->category }}</td>
	      <td>{{ $support->question }}</td>
	      <td>{{ $support->solution }}</td>
	      <td><img src="images/{{$support->file}}" width="125"></td>
	      <td>
	      	<a href="{{route('supports.edit',$support->id)}}" class="btn btn-primary">Editar</a>
	      	<form action="{{route('supports.destroy',$support->id)}}" method="POST">
	      		@csrf
	      		@method('DELETE')
	      		<button class="btn btn-danger mt-3" onclick="return confirm('¿Quiere eliminar el registro?')">Borrar</button>
	      	</form>
	      </td>
	    </tr>
		@endforeach
	  </tbody>
	</table>
	{{ $supports->links()}}
</div>
</body>
</html>