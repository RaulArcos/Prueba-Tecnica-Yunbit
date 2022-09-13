# Prueba Técnica Yunbit (PHP Junior Offline 2.0)
## ¡Importante!

El código de cada ejercicio individual se encuentra en un branch y esta nombrado así: *Ej<Nº Ejercicio>*.

En el branch *main* se encuentra la solución final, donde se juntan todos los apartados del 1-6 de la prueba.
## Preparación pre-prueba
Las líneas utilizadas para la creación de la base de datos se encuentran en el archivo *db.sql*.

También, utilizaré CSS de Booststrap con alguna modificación sencilla que está incluido en */assets/css*.

![image](https://user-images.githubusercontent.com/48330837/189904235-a8a2ae66-1500-4104-a793-fb8dbe1d9b3e.png)

## Apartado 1
A pesar de no necesitar nada más que un index, en este ejercicio utilizo un fichero *config.php* además de un header que se encuentra en */assets/header/* para facilitar la adaptación y la expansión del problema a los siguientes apartados.

![image](https://user-images.githubusercontent.com/48330837/189904475-8959d51b-82bc-4ae9-9191-8d49b99940bd.png)
## Apartado 2
Se añade el formulario para registros, los *inputs* cuentan con *required*, debido a que aún no contamos con la validación de *javascript* que vendrá más adelante.

![image](https://user-images.githubusercontent.com/48330837/189904596-92a7a105-26fd-4188-9eef-efc3260d5f52.png)

## Apartado 3
Para destacar a los clientes premium, se resalta su tarjeta con un color dorado. Se aplican mínimas modificaciones estéticas que podemos encontrar en nuestro css antes nombrado.

![image](https://user-images.githubusercontent.com/48330837/189904731-bb9f95cc-a739-4fcb-bbf9-30064d885ee2.png)


## Apartado 4
En este apartado se crea un fichero de *javascript* que podemos encontrar en */assets/js* cuya función es hacer una validación sencilla de que todas las casillas están llenas, a parte de comprobar si el número de teléfono introducido es un número.

![image](https://user-images.githubusercontent.com/48330837/189904895-1e66f491-b587-433c-a11a-3e906876d75e.png)

## Apartado 5
Para este apartado, se crea el fichero *details.php* que contendrá la página de detalles sobre un cliente, para acceder a los datos de un cliente podemos tomar dos caminos:

 - Introduciendo su *id* en la *url* con la siguiente sintaxis: *.../details.php?id=(ID del cliente)*.
 - Clickando en el botón detalles que hay en la tarjeta del cliente cuyos detalles queremos ver.

Para ambos caminos se ha utilizado el método GET.

![image](https://user-images.githubusercontent.com/48330837/189905060-303004b3-d848-4cb5-b2c6-cde6e4c8684f.png)

## Apartado 6
Para conseguir una *url friendly*, crearemos y modificaremos el fichero *.htaccess* en el directorio de nuestro proyecto, en el fichero utilizaremos el módulo de apache *mod_rewrite* para reescribir la *url* del apartado anterior en una más fácil de utilizar.

En mi caso, debido a proyectos anteriores, ya tenía habilitado este módulo y cambiado la flag *AllowOverride* a *All* dentro del directorio en el que estamos trabajando (En Windows estos cambios se realizan dentro del archivo *httpd*.

En el código, los cambios realizados han sido en torno a cambiar el uso de la *id* como el identificador para utilizar el nombre en su lugar, tal y como solicita el enunciado, de manera que podamos acceder a los datos de un cliente introduciendo en el navegador la siguiente *url*: /details/(nombre-de-cliente).

![image](https://user-images.githubusercontent.com/48330837/189905269-32d79197-3b79-475d-95eb-037f5b05efb6.png)
