# Prueba Técnica - Analista de Soporte Nivel 1

Aplicación web que permite consultar las ciudades de un país y su población,
utilizando la base de datos world de MySQL.

## Descripción

La aplicación consta de una sola pantalla donde el usuario selecciona un país
de una lista desplegable y obtiene el listado de sus ciudades ordenadas de
mayor a menor población.

## Tecnologías utilizadas

- PHP 8
- MySQL (base de datos world)
- HTML5 y CSS3
- Servidor local XAMPP (Apache + MySQL)

## Estructura del proyecto (MVC)
```
prueba/
├── config/
│ └── conexion.php Conexión a la base de datos
├── models/
│ └── PaisModel.php Consultas SQL a las tablas country y city
├── controllers/
│ └── PaisController.php Lógica: recibe la petición y entrega los datos
├── views/
│ └── index.php Interfaz que ve el usuario
└── index.php Punto de entrada de la aplicación
 ```


Se aplicó el patrón MVC (Modelo - Vista - Controlador) para separar las
responsabilidades: el modelo se encarga del acceso a los datos, la vista de
la presentación y el controlador de coordinar ambos.

## Instalación

1. Instalar XAMPP e iniciar los servicios de Apache y MySQL.
2. Importar la base de datos world desde phpMyAdmin.
3. Copiar la carpeta del proyecto en C:\xampp\htdocs\prueba
4. Ingresar desde el navegador a http://localhost/prueba/

## Configuración de la conexión

Los datos de conexión se encuentran en config/conexion.php:

- Servidor: localhost
- Usuario: root
- Contraseña: (vacía, configuración por defecto de XAMPP)
- Base de datos: world

## Consultas utilizadas

Listado de países:

    SELECT Code, Name FROM country ORDER BY Name ASC

Ciudades de un país seleccionado:

    SELECT Name, Population FROM city
    WHERE CountryCode = ?
    ORDER BY Population DESC

## Consideraciones de seguridad

La consulta de ciudades utiliza sentencias preparadas (prepared statements)
con bind_param, para evitar inyección SQL a partir del dato enviado por el
usuario desde el formulario.

## Diseño responsive

La interfaz utiliza la etiqueta meta viewport y media queries en CSS, lo que
permite que se visualice correctamente en computador, tablet y teléfono
móvil, según lo solicitado en el requerimiento.

## Autor

Ferney Pérez García
