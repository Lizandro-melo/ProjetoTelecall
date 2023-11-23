-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema telecall
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema telecall
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `telecall` DEFAULT CHARACTER SET utf8 ;
USE `telecall` ;

-- -----------------------------------------------------
-- Table `telecall`.`cliente_comum`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `telecall`.`cliente_comum` (
  `cpf` VARCHAR(14) NOT NULL,
  `nome` VARCHAR(40) NOT NULL,
  `sexo` VARCHAR(1) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `nome_materno` VARCHAR(40) NOT NULL,
  `telefone_celular` VARCHAR(15) NOT NULL,
  `telefone_fixo` VARCHAR(14) NOT NULL,
  `login` VARCHAR(6) NOT NULL,
  `senha` VARCHAR(8) NOT NULL,
  PRIMARY KEY (`cpf`),
  UNIQUE INDEX `id_cliente_comum_UNIQUE` (`cpf` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `telecall`.`cliente_master`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `telecall`.`cliente_master` (
  `login` VARCHAR(6) NOT NULL,
  `senha` VARCHAR(8) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  UNIQUE INDEX `login_UNIQUE` (`login` ASC) VISIBLE,
  PRIMARY KEY (`cpf`),
  CONSTRAINT `fk_cliente_master_cliente_comum`
    FOREIGN KEY (`cpf`)
    REFERENCES `telecall`.`cliente_comum` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `telecall`.`log`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `telecall`.`log` (
  `id_erro` INT NOT NULL AUTO_INCREMENT,
  `data_hora` DATETIME NULL,
  `log_mensage` LONGTEXT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `nome` VARCHAR(40) NULL,
  PRIMARY KEY (`id_erro`),
  UNIQUE INDEX `id_erro_UNIQUE` (`id_erro` ASC) VISIBLE,
  INDEX `fk_log_cliente_comum1_idx` (`cpf` ASC) VISIBLE,
  CONSTRAINT `fk_log_cliente_comum1`
    FOREIGN KEY (`cpf`)
    REFERENCES `telecall`.`cliente_comum` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `telecall`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `telecall`.`endereco` (
  `cep` VARCHAR(10) NOT NULL,
  `logradouro` VARCHAR(45) NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `localidade` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `uf` VARCHAR(2) NOT NULL,
  `complemento` VARCHAR(45) NULL,
  PRIMARY KEY (`cpf`),
  CONSTRAINT `fk_endereco_cliente_comum1`
    FOREIGN KEY (`cpf`)
    REFERENCES `telecall`.`cliente_comum` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
