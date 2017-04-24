create database mypet1;

use mypet;

create table users(
id mediumint(8) not null auto_increment,
username varchar(100) not null,
password varchar(50) not null,
PRIMARY KEY(id)
);

insert into users values(1,"Karla Samantha Terrazas Lopez","1234");
insert into users values(2,"Ana Karen Mendez","1234");
insert into users values(3,"Marco Ruiz","1234");
insert into users values(4,"Ricardo Ortega ","1234");
insert into users values(5,"Magdalena Arriaga","1234");
insert into users values(6,"Miguel Angel Urbizo","1234");
insert into users values(7,"Carlos Hernandez","1234");
insert into users values(8,"Montserrat Ramirez","1234");
insert into users values(9,"Karim Ethan Martinez","1234");
insert into users values(10,"Alfonso Saavedra","1234");


create table mascotas(
id_mascota mediumint(8) not null auto_increment,
tipo_mascota varchar(30) not null,
nombre varchar(30) not null,
sexo varchar(10) not null,
fecha_nacimiento date not null,
id mediumint(8) not null,
PRIMARY KEY(id_mascota),
FOREIGN KEY(id) REFERENCES users(id)
);

insert into mascotas values(1,"Perro","Toby","Macho",2015-04-25,1);
insert into mascotas values(2,"Perico","Paca","Macho",2016-07-05,2);
insert into mascotas values(3,"Gato","luna","Hembra",2016-09-05,3);
insert into mascotas values(4,"Serpiente","sis","Macho",2016-05-05,4);
insert into mascotas values(5,"Hamster","roro","Macho",2016-03-05,5);
insert into mascotas values(6,"Perro","lisi","Hembra",2016-04-05,6);
insert into mascotas values(7,"Conejo","bigote","Macho",2016-06-05,7);
insert into mascotas values(8,"Gato","mali","Macho",2016-01-02,8);
insert into mascotas values(9,"Rana","lica","Macho",2016-02-05,9);
insert into mascotas values(10,"Perro","zolobino","Macho",2016-03-05,10);



create table veterinarios(
id_veterinario mediumint(8) not null auto_increment,
nombre varchar(50) not null,
apellido_pat varchar(50) not null,
apellido_mat varchar(50) not null,
email varchar(40) not null,
cedula varchar(20) not null,
telefono_clinica int not null,
telefono_emergencia text(15) not null,
telefono_personal text(15) not null,
id_mascota mediumint(8) not null,
PRIMARY KEY(id_veterinario),
FOREIGN KEY(id_mascota) REFERENCES mascotas(id_mascota)
);

insert into veterinarios values(1,"Emilio","Martinez","Morales","emilio@gmail.com","0321654",7548695,"7751589528","7751568927",1);


create table citas(
id_cita mediumint(8) not null auto_increment,
fecha date not null,
hora time not null,
motivo varchar(100) not null,
id mediumint(8) not null,
PRIMARY KEY(id_cita),
FOREIGN KEY(id) REFERENCES users(id)
);

insert into citas values(1,2017-05-25,05,"Vacuna",1);
insert into citas values(2,2017-06-04,01,"Revision",2);
insert into citas values(3,2017-06-05,02,"Revision",1);
insert into citas values(4,2017-06-06,03,"Vacuna",2);
insert into citas values(5,2017-06-07,04,"Vacuna",3);
insert into citas values(6,2017-06-08,05,"Revision",3);
insert into citas values(7,2017-06-09,06,"Vacuna",4);
insert into citas values(8,2017-06-10,07,"Revision",4);
insert into citas values(9,2017-06-11,08,"Vacuna",5);
insert into citas values(10,2017-06-12,05,"Revision",5);
insert into citas values(11,2017-06-13,09,"Vacuna",6);
insert into citas values(12,2017-06-14,10,"Revision",6);
insert into citas values(13,2017-06-15,11,"Vacuna",7);
insert into citas values(14,2017-06-16,12,"Revision",7);
insert into citas values(15,2017-06-17,01,"Vacuna",8);
insert into citas values(16,2017-06-18,04,"Revision",8);
insert into citas values(17,2017-06-19,06,"Vacuna",9);
insert into citas values(18,2017-06-20,08,"Revision",9);
insert into citas values(19,2017-06-21,06,"Vacuna",10);
insert into citas values(20,2017-06-22,04,"Revision",10);


create table diagnostico(
id_diagnostico mediumint(8) not null auto_increment,
especificar varchar(100) not null,
id_cita mediumint(8) not null,
PRIMARY KEY(id_diagnostico),
FOREIGN KEY(id_cita) REFERENCES citas(id_cita)
);

insert into diagnostico values(1,"Aplicación de vacuna",1);
insert into diagnostico values(2,"Chequeo de pata derecha",2);
insert into diagnostico values(3,"Chequeo de pata izquierda",3);

create table mensajes(
id_mensaje mediumint(8) not null auto_increment,
mensaje varchar(100) not null,
fecha date not null,
id mediumint(8) not null,
PRIMARY KEY(id_mensaje),
FOREIGN KEY(id) REFERENCES users(id)
);

