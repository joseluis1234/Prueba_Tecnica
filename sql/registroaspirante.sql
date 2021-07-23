-- Creacion de la Base
CREATE DATABASE registroaspirante
 DEFAULT CHARACTER SET utf8;

--Para usar la tabla
USE registroaspirante;

-- Creacion de la tabla aspirante
CREATE TABLE `registroaspirante`.`aspirante` ( 
    `id` INT(5) NOT NULL AUTO_INCREMENT , 
    `nombre` VARCHAR(50) NOT NULL , 
    `paterno` VARCHAR(50) NOT NULL , 
    `materno` VARCHAR(50) NOT NULL , 
    `telefono` INT(10) NOT NULL , 
    `anios_experiencia` VARCHAR(50) NOT NULL , 
    PRIMARY KEY (`id`)
); 