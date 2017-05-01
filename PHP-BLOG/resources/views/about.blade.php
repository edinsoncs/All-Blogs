<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h2>Hola bienvenidos</h2>
	
	<h3>{{ $data }}</h3>

	@if (isset($skills))
		<h1>{{ $skills }}</h1>
	@else
		<h2>No tienes skills</h2>
	@endif
</body>
</html>