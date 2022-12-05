create table flujo (
    flujo varchar(3),
    proceso varchar(3),
    procesoSiguiente varchar(3),
    tipo varchar(3),
    rol varchar(10),
    pantalla varchar(15)
);

delete from flujo;
insert into flujo values('F1','P1','P2','I','Usuario','inicio');	
insert into flujo values('F1','P2','P3','P','Usuario','certificado');	
insert into flujo values('F1','P3','P4','P','Usuario','documentos');	
insert into flujo values('F1','P4','P5','P','Usuario','entregar');	
insert into flujo values('F1','P5','-','C','Kardex','revision');	
insert into flujo values('F1','P6','-','P','Kardex','negacion');	
insert into flujo values('F1','P7','-','F','Kardex','aceptacion');	

insert into flujo values('F2','P1','P2','I','Usuario','aprobar');	
insert into flujo values('F2','P2','P3','P','Usuario','peticion');	
insert into flujo values('F2','P3','P4','P','Usuario','documentos');	
insert into flujo values('F2','P4','P5','P','Usuario','entregar');	
insert into flujo values('F2','P5','-','C','Kardex','revision');	
insert into flujo values('F2','P6','-','P','Kardex','negacion');	
insert into flujo values('F2','P7','-','F','Kardex','entrega');	


create table flujocondicion (
    flujo varchar(3),
    proceso varchar(3),
    procesoSI varchar(3),
    procesoNO varchar(3)
);

insert into flujocondicion values ('F1','P5','P7','P6');
insert into flujocondicion values ('F2','P5','P7','P6');


create table flujotramite (
    flujo varchar(3),
    proceso varchar(3),
    nroTramite varchar(5),
    fechaIni datetime,
    fechaFin datetime Default Null,
    usuario varchar(15)
);

create table alumno (
    nombre,varchar(20),
    apellidoPaterno varchar(20),
    apellidoMaterno varchar(20),
    ci varchar(20),
    email varchar(50),
    telefono varchar(20)
);

insert into alumno values ('luis','barra','paredes','8441659','barra.paredes.enrique.luis@gmail.com','77528423');

insert into flujotramite values ('F1','P1','500','2022-11-18 15:00:00','2022-11-18 15:01:25','luis');
insert into flujotramite values ('F1','P2','500','2022-11-18 14:55:00',null,'luis');
insert into flujotramite values ('F2','P1','554','2022-10-19 15:56:00',null,'luis');
insert into flujotramite values ('F1','P2','554','2022-10-20 17:50:00',null,'luis');
insert into flujotramite values ('F1','P5','623','2022-10-21 18:00:00',null,'pepe');
insert into flujotramite values ('F1','P7','432','2022-10-22 19:00:00',null,'pepe');
