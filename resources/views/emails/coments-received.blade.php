<!DOCTYPE html>
<html>
<head>
	<title>Mensaje recibido</title>
</head>
<body>
	<p>Recibiste un mensaje de: {{ $msg['firstname'] }} - {{ $msg['email'] }}</p>
	<p><strong>Comentario:</strong> {{ $msg['messages']}}</p>
</body>
</html>