'ELIMINAR BASE DE DATOS'
DROP DATABASE inventario;

'CREAR BASE DE DATOS'
CREATE DATABASE inventario;

'SELECCIONAR BASE DE DATOS'

USE inventario;

'CREAR TABLA DE INVENTARIO'

CREATE TABLE IF NOT EXISTS productos (
  codigo_producto BIGINT(11) NOT NULL AUTO_INCREMENT,
  nombre_producto VARCHAR(45) NOT NULL,
  descripcion VARCHAR(200) NOT NULL,
  fecha_creacion DATE NOT NULL,
  cantidad BIGINT NOT NULL,
  PRIMARY KEY (codigo_producto)
);


'CREAR TABLA USUARIOS'

CREATE TABLE IF NOT EXISTS usuarios (
  codigo_usuario BIGINT(11) NOT NULL AUTO_INCREMENT,
  cedula VARCHAR(45) NOT NULL,
  nombre VARCHAR(200) NOT NULL,
  alias VARCHAR(200) NOT NULL,
  correo VARCHAR(200) NOT NULL,
  clave VARCHAR(200) NOT NULL,
  fecha_creacion DATE NOT NULL,
  PRIMARY KEY (codigo_usuario)
);

'USUARIO ADMINISTRADOR'
INSERT INTO USUARIOS (cedula, nombre, alias, correo, clave, fecha_creacion) VALUES ('1','administrador','admin','admin@admin.com','admin',NOW());


'PRECIO'
ALTER TABLE productos
ADD precio DECIMAL NULL