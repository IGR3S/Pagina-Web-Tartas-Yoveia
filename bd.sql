-- Si existiera, borramos tanto la base de datos, como el usuario
DROP DATABASE IF EXISTS `tartas_yoveia`;
DROP USER IF EXISTS `dwesuser`;
  
-- Creamos la base de datos
CREATE DATABASE `tartas_yoveia` DEFAULT CHARACTER SET UTF8MB4 COLLATE utf8mb4_unicode_ci;

-- Establecemos la base de datos creada como la base de datos activa  
USE `tartas_yoveia`;

-- Creamos las tablas en la base de datos creada 
CREATE TABLE `usuarios` (
    `id_usuario` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `correo_usuario` VARCHAR(100) NOT NULL,
    `nombre_usuario` VARCHAR(100) NOT NULL,
    `apellido1_usuario` VARCHAR(100) NULL,
    `apellido2_usuario` VARCHAR(100) NULL,
    `telefono_usuario` VARCHAR(13) NOT NULL,
    `activo` BOOLEAN NOT NULL DEFAULT TRUE
) ENGINE = INNODB;
 
CREATE TABLE `pedidos` (
    `id_usuario` INT NOT NULL,
    `id_pedido` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fecha_pedido` DATE NOT NULL,
    `precio_pedido` DECIMAL(10,2) NOT NULL
) ENGINE = INNODB;

CREATE TABLE `tartas` (
    `id_tarta` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nombre_tarta` VARCHAR(100) NOT NULL,
    `descripcion` TEXT NULL,
    `precio` DECIMAL(10,2) NOT NULL,
    `sin_azucar` BOOLEAN NOT NULL DEFAULT FALSE
) ENGINE = INNODB;

CREATE TABLE `linea_pedidos` (
    `id_pedido` INT NOT NULL,
    `id_tarta` INT NOT NULL,
    `linea_pedido` INT NOT NULL,
    PRIMARY KEY (id_pedido, id_tarta)
) ENGINE = INNODB;

CREATE TABLE `tartas_ingredientes` (
    `id_tarta` INT NOT NULL,
    `id_ingrediente` INT NOT NULL ,
    PRIMARY KEY (id_tarta, id_ingrediente)
) ENGINE = INNODB;
 
CREATE TABLE `proveedor` (
    `id_proveedor` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nombre_proveedor` VARCHAR(100) NOT NULL,
    `localidad` VARCHAR(100) NULL
) ENGINE = INNODB;

CREATE TABLE `ingredientes` (
    `id_ingrediente` INT NOT NULL PRIMARY KEY,
    `nombre_ingrediente` VARCHAR(100) NOT NULL,
    `id_proveedor` INT NOT NULL PRIMARY KEY
) ENGINE = INNODB;

CREATE TABLE `ingredientes_proveedores` (
    `id_ingrediente` INT NOT NULL,
    `id_proveedor` INT NOT NULL,
    PRIMARY KEY (id_proveedor, id_ingrediente)
) ENGINE = INNODB;
 
-- Creamos las claves foráneas
ALTER TABLE `usuarios`
ADD CONSTRAINT `usuarios_to_pedidos`
FOREIGN KEY (`id_usuario`) REFERENCES `pedidos` (`id_usuario`)
ON UPDATE CASCADE;
 
ALTER TABLE `pedidos`
ADD CONSTRAINT `pedidos_to_linea`
FOREIGN KEY (`id_pedido`) REFERENCES `linea_pedidos` (`id_pedido`)
ON UPDATE CASCADE;

ALTER TABLE `linea_pedidos`
ADD CONSTRAINT `linea_to_tartas`
FOREIGN KEY (`id_tarta`) REFERENCES `tartas` (`id_tarta`)
ON UPDATE CASCADE;

ALTER TABLE `tartas`
ADD CONSTRAINT `tartas_to_conexion1`
FOREIGN KEY (`id_tarta`) REFERENCES `tartas_ingredientes` (`id_tarta`)
ON UPDATE CASCADE;

ALTER TABLE `tartas_ingredientes`
ADD CONSTRAINT `conexion1_to_ingredientes`
FOREIGN KEY (`id_ingredientes`) REFERENCES `ingredientes` (`id_ingredientes`)
ON UPDATE CASCADE;

ALTER TABLE `ingredientes`
ADD CONSTRAINT `ingredientes_to_proveedor`
FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`)
ON UPDATE CASCADE;
 
-- Creamos un usuario para nuestras prácticas.
CREATE USER `yolanda` IDENTIFIED BY 'Y14B06L1972';
 
-- Otorgamos al usuario permisos de conexión
GRANT ALL PRIVILEGES ON `tartas_yoveia`.* TO `yolanda`@'%';