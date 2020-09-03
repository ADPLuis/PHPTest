create DATABASE CRMdb;
use CRMdb;

create TABLE ENTITY (id Integer AUTO_INCREMENT PRIMARY KEY, modulo Integer, borrado tinyint(1), fecha_creacion datetime, fecha_modificacion datetime);
                     
create TABLE POTENCIALES (id Integer AUTO_INCREMENT PRIMARY KEY, nombre varChar(50), apellido varChar(50), dni char(9) UNIQUE, estado tinyint);

create TABLE ACTIVIDADES (id Integer AUTO_INCREMENT PRIMARY KEY, nombre varChar(50), descripcion varChar(200), fecha datetime);

create TABLE ENTITYREL (relid Integer, relmodulo Integer, id Integer, modulo Integer);