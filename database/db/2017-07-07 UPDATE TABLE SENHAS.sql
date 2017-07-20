-- MySQL Workbench Synchronization
-- Generated: 2017-07-07 11:27
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: uneworld

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `gerenciador`.`migrations` 
CHANGE COLUMN `migration` `migration` VARCHAR(255) COLLATE 'utf8mb4_unicode_ci' NOT NULL ;

ALTER TABLE `gerenciador`.`senhas` 
DROP COLUMN `titulo`,
CHANGE COLUMN `vizualiza` `visualiza` CHAR(1) NULL DEFAULT NULL ,
CHANGE COLUMN `global` `global` CHAR(1) NULL DEFAULT NULL ;

ALTER TABLE `gerenciador`.`users` 
CHANGE COLUMN `name` `name` VARCHAR(255) COLLATE 'utf8mb4_unicode_ci' NOT NULL ,
CHANGE COLUMN `email` `email` VARCHAR(255) COLLATE 'utf8mb4_unicode_ci' NOT NULL ,
CHANGE COLUMN `password` `password` VARCHAR(255) COLLATE 'utf8mb4_unicode_ci' NOT NULL ,
CHANGE COLUMN `remember_token` `remember_token` VARCHAR(100) COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;