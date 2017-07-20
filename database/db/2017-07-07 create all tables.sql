-- MySQL Workbench Synchronization
-- Generated: 2017-07-07 10:38
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: uneworld

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE TABLE IF NOT EXISTS `gerenciador`.`acessos` (
  `id` INT(2) NOT NULL AUTO_INCREMENT,
  `acesso` VARCHAR(50) NULL DEFAULT NULL,
  `codgrupo` INT(2) NULL DEFAULT NULL,
  `link` VARCHAR(100) NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 111
DEFAULT CHARACTER SET = latin1;

CREATE TABLE IF NOT EXISTS `gerenciador`.`chamados` (
  `id` INT(2) NOT NULL AUTO_INCREMENT,
  `status` INT(1) NULL DEFAULT NULL,
  `user_id` INT(2) NOT NULL,
  `tipo_id` INT(11) NOT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  `solucao` LONGTEXT NULL DEFAULT NULL,
  `titulo` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_chamados_user1_idx` (`user_id` ASC),
  INDEX `fk_chamados_tipo1_idx` (`tipo_id` ASC),
  CONSTRAINT `fk_chamados_tipo1`
    FOREIGN KEY (`tipo_id`)
    REFERENCES `gerenciador`.`tipo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_chamados_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `gerenciador`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE TABLE IF NOT EXISTS `gerenciador`.`descricao_chamados` (
  `id` INT(2) NOT NULL AUTO_INCREMENT,
  `descricao` LONGTEXT NULL DEFAULT NULL,
  `chamados_id` INT(2) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_descricao_chamados_chamados1_idx` (`chamados_id` ASC),
  CONSTRAINT `fk_descricao_chamados_chamados1`
    FOREIGN KEY (`chamados_id`)
    REFERENCES `gerenciador`.`chamados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE TABLE IF NOT EXISTS `gerenciador`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE TABLE IF NOT EXISTS `gerenciador`.`senhas` (
  `id` INT(2) NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(50) NULL DEFAULT NULL,
  `acesso_id` INT(2) NOT NULL,
  `pwd` VARCHAR(50) NOT NULL,
  `obs` VARCHAR(100) NULL DEFAULT NULL,
  `titulo` VARCHAR(100) NULL DEFAULT NULL,
  `vizualiza` INT(1) NULL DEFAULT NULL,
  `global` INT(1) NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `user_id` INT(2) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `senha_acesso` (`acesso_id` ASC),
  INDEX `fk_senhauser_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_senhauser_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `gerenciador`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `senha_acesso`
    FOREIGN KEY (`acesso_id`)
    REFERENCES `gerenciador`.`acessos` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 704
DEFAULT CHARACTER SET = latin1;

CREATE TABLE IF NOT EXISTS `gerenciador`.`tipo` (
  `id` INT(2) NOT NULL,
  `tipo` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE TABLE IF NOT EXISTS `gerenciador`.`user` (
  `id` INT(2) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL DEFAULT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `password` VARCHAR(255) NULL DEFAULT NULL,
  `ativo` CHAR(1) NULL DEFAULT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `tipo` INT(1) NULL DEFAULT NULL,
  `oidsigu` VARCHAR(11) NULL DEFAULT NULL,
  `departamento` INT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 108
DEFAULT CHARACTER SET = latin1;

CREATE TABLE IF NOT EXISTS `gerenciador`.`users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `email` VARCHAR(255) COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `password` VARCHAR(255) COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `remember_token` VARCHAR(100) COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `tipo` INT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
