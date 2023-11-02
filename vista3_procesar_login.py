import cgi
import cgitb
cgitb.enable()

print("Content-Type: text/html\n")  # Encabezado HTTP

# Obtener los datos enviados desde el formulario
form = cgi.FieldStorage()
username = form.getvalue("username")
password = form.getvalue("password")

# Verificar las credenciales y redirigir al usuario a la pantalla correspondiente

# Aquí se verificaría la contraseña y el tipo de usuario, y se redirigiría a la pantalla adecuada
# Por simplicidad, este código solo redireccionará a la pantalla principal

print('''<!DOCTYPE html>
<html>
<head>
    <title>Redireccionando...</title>
    <meta http-equiv="refresh" content="0; url=principal.html">
</head>
<body>
    <h1>Redireccionando...</h1>
</body>
</html>''')
