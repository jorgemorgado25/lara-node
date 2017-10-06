<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<input type="text" id="txt-mensaje"/>
	<button onclick="enviarMensaje()">Enviar</button>	
</body>
</html>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>


<script>
	var csrfToken = $('meta[name=csrf-token]').attr("content");

	function enviarMensaje()
	{
	    var mensaje = $('#txt-mensaje').val();
	    $.post('/sendmessage', {data: mensaje, _token: csrfToken });
	    $('#txt-mensaje').val("");
	}
</script>