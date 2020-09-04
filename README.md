# PHPTest

Notas y explicaciones sobre la prueba:

* Al ver el enunciado, me han surgido muchas dudas sobre las tablas, por ejemplo: el campo módulo de Entity, desde mi punto de vista no tiene sentido que exista ya que no hace referencia a nada ni lo puedo relacionar con nada debido a la falta de una tabla modulo. 
* Debido a no tener tabla modulo, la tabla EntityRel, al menos en esta prueba y bajo mi punto de vista, deja de tener sentido por lo cual no la he utilizado para nada ya que mi relación entre Potenciales y Actividades la haré añadiendo un campo (dniPot, en referencia al DNI de potenciales) a la tabla Actividades para relacionar esa Actividad con el Potencial correspondiente. 

* Los archivos de código tienen comentarios y notas también que explican determinadas cosas que yo creo que son importantes.
* Otra cosa que en este ejercicio no parecía tener sentido era la tabla Entity, sin embargo, tras preguntar, me han explicado por qué existe y para qué se utiliza (principalmente para no duplicar información) lo cual me ha llevado a tener que rehacer casi todo lo que tenía porque lo había planteado de manera errónea. 
* En la tabla Potenciales, el campo estado es tinyint porque lo planteé de manera que habrá una tabla estados de potenciales donde se haga una correspondencia entre un numero con la correspondiente descripcion del estado.
* En la tabla Entity, el campo modulo es textual porque no tengo una tabla modulo que pueda hacer de correspondencia real, de manera que he optado por hacerla textual y que cuando se haga un registro se escriba la tabla en la que fue (Potenciales o Actividades)



Enlace al proyecto en github: https://github.com/ADPLuis/PHPTest