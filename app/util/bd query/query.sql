create database bd_ventas;
use bd_ventas;

-- creacion de tablas
create table productos(
	id int auto_increment,
    nombre varchar(100) not null,
    precio double not null,
    primary key(id)
);
create table ventas(
	id int auto_increment,
    cliente varchar(100) not null,
    fecha date not null,
    primary key(id)
);
create table ventadetalle(
	id int auto_increment,
    producto_id int references productos(id),
    venta_id int references ventas(id),
    cantidad int not null,
    descuento int not null,
    primary key(id)
);
create table users(
	id int auto_increment,
    email varchar(100) not null,
    usuario varchar(50) not null,
    pass varchar(256) not null,
    estado int default 0,
    privilegio varchar(50) not null,
    primary key(id)
);
-- Procedimientos almacenados
	-- Usuarios (users)
    create procedure registrar(
		_email varchar(100),
		_usuario varchar(50),
		_pass varchar(256),
		_privilegio varchar(50)
    )
    insert into users (email,usuario,pass,privilegio) 
    values(_email,_usuario,_pass,_privilegio)
    ;
    
	create procedure login(_email varchar(50),_pass varchar(60))
    select * from users where email = _email and pass = _pass;
    
    
    