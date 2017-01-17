
Especificación técnica
______________________


Capas de la aplicacion
______________________

La presente aplicación está desarrollada utilizando dos diferentes capas

**Capa de aplicación:**
La capa de aplicación está conformada por las siguientes clases
 - Cube.php Contiene la matriz de representación del cubo, junto con las operaciones que pueden ser realizadas sobre él,  query, update
 - ProblemCase.php Representa un caso problema, contiene el tamaño del cubo y todas sus operaciones
 - instruction.php Representa una instrucción del problema, ya sea query o update
 - Parser.php Toma la entrada standar dada por hacker rank, y la transforma en un conjunto de ProblemCase a resolver
 - CubeSolver.php es la interfaz de acceso a la lógica de solución de cubo, esta usa las demás clases antes mencionadas para transformar el problema de entrada, solucionarlo y producir la salida
 - CubeController.php Punto de entrada para laravel donde se reciben los parametros del problema, se usa CubeSolver para resolverlo y posteriormente retorna una respuesta en formato Json

**Capa de vista:**

 - Bootstrap para el sistema de maya de la página.
 - Jquery para el uso de llamadas post y hacer consumo del rest
 - main.js Archivo principal de Javascript donde se toma la entrada dada por  el usuario, se envía a /resolve, se obtiene la respuesta Json y se renderiza la respuesta en la página principal.

**Ejecutar tests:**
php vendor/bin/phpunit
