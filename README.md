Primero de todo tenemos que poner los ficheros dentro de **/var/www/html**
<br>
Ahora tenemos que modificar la primera linea del archivo **mysql.php** y **mysql1.php** :
<br>
**$conexion = mysqli_connect("localhost","marc","marc123");**
<br>
Cambiamos *marc* y *marc123* por el usuario y contraseña que queramos.
<br>
Ya solo nos queda acceder al archivo mysql.php desde el navegador, escribimos **localhost/mysql.php**. 
