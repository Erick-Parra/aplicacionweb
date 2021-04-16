<!DOCTYPE html>
<html>
<head>
	<title>Mensaje recibido</title>
</head>
<body>
	<p>Recibiste un mensaje de: {{ $msg['firstname'] }} {{ $msg['lastname']}} - {{ $msg['email'] }}</p>
	<p><strong>ASADA a la que pertenece:</strong> {{ $msg['nameasada']}}</p>
	<p><strong>Número de teléfono:</strong> {{ $msg['phonenumber']}}</p>

	<p><strong>Asunto:</strong> {{ $msg['asunto']}}</p>
	<p><strong>Contenido:</strong> {{ $msg['messages']}}</p>
</body>
</html>
