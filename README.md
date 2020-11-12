# Instalacion - Proyecto

En sistemas donde este instalado el entorno LAMPP o XAMPP, 

- Dirigirse a la carpeta WWW o htdocs respectivamente 
- Abrir la terminal de comandos y utilizar la instruccion 
  git clone https://github.com/davidespinal96/proimpo.git
- Abrir el archivo conectar.php con el editor de codigo preferido

# Base De Datos

- El archivo SQL que contiene las tablas necesarias para trabajar el codigo, esta sobre la raiz principal del proyecto. Su nombre es proimpo.sql.
- Para configurar la base de datos, debemos modificar el archivo conectar.php.
- En la linea 3, estaran los datos principales de la conexion, host-usuario-contraseña-nombre de la bd.


# Primeros Pasos

- Para poder ingresar al sistema, primero debemos registrar un usuario a traves del boton "Register" ubicado en la pagina del login.
- Luego de crear el usuario podremos usar el login, utilizando los datos anteriormente registrados.
- En la pagina principal del aplicativo, encontraremos dos botones en la zona izquierda de la pantalla. El boton "Contact" para ingresar al formulario de contactos y el boton "Logout" para salir del aplicativo.
- En la zona de la derecha encontraremos una tabla que mostrara todas las solicitudes de contacto segun vayamos creando.
