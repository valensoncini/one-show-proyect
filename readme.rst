###################
Bienvenidos A One Show
###################

One show es un proyecto que estoy mejorando dia a dia. Trata de una pagina web 
que utiliza php, codeigniter , html, css y bootstrap con tambien manejo de base
de datos MySql sobre venta de espectaculos/eventos/conciertos/etc.


###################
Inicializarse en el Proyecto
###################

Para poder utilizar el proyecto va a ser necesario tener xampp o wampp, yo uso xampp (https://www.apachefriends.org/es/download.html),
algun editor de codigo como puede ser Visual Studio Code o Notepad++ o Sublime Text o el que gusten, yo uso VSC (https://code.visualstudio.com/).
Una vez iniciado todo, obviamente posterior a descargar el proyecto en un .zip o un git clone, es necesario hacer la comfiguracion del proyecto. Dentro del VS code, abrimos el proyecto agregando la carpeta del proyecto
y en applications/config vamos a tener todas las configuraciones, desde rutas hasta la base de datos. Justamente, vamos a entrar a database.php
en donde vamos a bucar un array con la configuracion de la bd, el puerto, username, password y nombre de la bd es lo mas importante. El nombre
de la bd se la vamos a dar en localhost/phpmyadmin/, ahi vamos a crear una base de datos con el nombre de las siguientes tablas (que igual voy a dejar 
el script de la bd), son 5 tablas: users, clientes, venta, evento y contacto. 
El proyecto usa el patron de diseño MVC (Model-View-Controller), es un patron de diseño arquitectonico que se usa generalmente en para desarrollos web.
Modelo (Model):Representa los datos y la lógica de negocio de la aplicación. Gestiona el acceso a la base de datos, la validación y las reglas de negocio.
No interactúa directamente con la vista, pero proporciona los datos necesarios al controlador, que luego los pasa a la vista.
Vista (View):Es la parte de la interfaz de usuario. Es lo que el usuario ve y con lo que interactúa.Solo presenta los datos que le envía el controlador; no contiene lógica de negocio.
Puede ser una página web, una interfaz de usuario en una aplicación de escritorio, etc.
Controlador (Controller):Actúa como intermediario entre el modelo y la vista.Recibe las entradas del usuario (como clics, formularios enviados, etc.), procesa estas entradas (consultando o actualizando el modelo) y devuelve una respuesta adecuada a la vista. Se asegura de que el modelo y la vista se mantengan separados.




###################
Mis redes sociales
###################
Email: valen_soncini@hotmail.com
Linkedin: https://www.linkedin.com/in/valentino-soncini-894a64264/

