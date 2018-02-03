<html>
<head>
    <title>Examen</title>
</head>
<body>
<form id="formulario" action="buscar" method="post">
    {{csrf_token()}}
    <input type="text" id="nombreusu">
    <button type="submit">Buscar</button>
</form>

</body>
</html>