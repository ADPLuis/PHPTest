create DATABASE CRMdb;
use CRMdb;

create TABLE ENTITY (id Integer AUTO_INCREMENT PRIMARY KEY, modulo varChar(20), borrado tinyint(1), fecha_creacion datetime, fecha_modificacion datetime);
                     
create TABLE POTENCIALES (id Integer PRIMARY KEY, nombre varChar(50), apellido varChar(50), dni char(9) UNIQUE, estado tinyint);

create TABLE ACTIVIDADES (id Integer PRIMARY KEY, nombre varChar(50), descripcion varChar(200), fecha datetime,dniPot char(9));

create TABLE ENTITYREL (relid Integer, relmodulo Integer, id Integer, modulo Integer);

INSERT INTO ENTITY(modulo, borrado, fecha_creacion) values ('potenciales',0,'2015-05-23');
INSERT INTO POTENCIALES(id, nombre, apellido, dni,estado) values (1, 'Eduardo', 'Hernandez', '45454545J',1);
INSERT INTO ENTITY(modulo, borrado, fecha_creacion) values ('potenciales',1,'2015-06-23');
INSERT INTO POTENCIALES(id, nombre, apellido, dni,estado) values (2, 'Andrea', 'Perez', '62626262E',1);
INSERT INTO ENTITY(modulo, borrado, fecha_creacion) values ('potenciales',0,'2015-07-23');
INSERT INTO POTENCIALES(id, nombre, apellido, dni,estado) values (3, 'Alberto', 'Gonzalez', '87878787L',1);
INSERT INTO ENTITY(modulo, borrado, fecha_creacion) values ('potenciales',1,'2015-08-23');
INSERT INTO POTENCIALES(id, nombre, apellido, dni,estado) values (4, 'Ana', 'Hernandez', '91919191J',1);

INSERT INTO ENTITY(modulo, borrado, fecha_creacion) values ('actividades',1,'2018-05-23');
INSERT INTO ACTIVIDADES(id,nombre,descripcion,fecha,dniPot) values (5,'Reunion tecnica', 'Ultimar detalles sobre projecto Alpha','2016-08-23','91919191J');
INSERT INTO ENTITY(modulo, borrado, fecha_creacion) values ('actividades',0,'2019-08-23');
INSERT INTO ACTIVIDADES(id,nombre,descripcion,fecha,dniPot) values (6,'Comer', 'Comida en el restaurante Taberna Medieval','2016-08-22' ,'62626262E');