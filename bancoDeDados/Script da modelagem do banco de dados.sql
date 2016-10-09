-- MySQL Workbench Synchronization
-- Generated: 2016-10-08 23:35
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: DanielMarques

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `projetolpeedu` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `projetolpeedu`.`usuario` (
  `idUsuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `dataDeNascimento` DATETIME NOT NULL,
  `genero` VARCHAR(20) NOT NULL,
  `senha` VARCHAR(50) NOT NULL,
  `imagem` LONGBLOB NULL DEFAULT NULL,
  `pontuacao` INT(11) NULL DEFAULT NULL,
  `quantidadeQuestoesRespondidas` INT(11) NULL DEFAULT NULL,
  `quantidadeQuestoesCorretas` INT(11) NULL DEFAULT NULL,
  `quantidadeQuestoesErradas` INT(11) NULL DEFAULT NULL,
  `desempenhoPorcentagem` DECIMAL NULL DEFAULT NULL,
  `idEtapa` INT(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  INDEX `fk_usuario_Etapa1_idx` (`idEtapa` ASC),
  CONSTRAINT `fk_usuario_Etapa1`
    FOREIGN KEY (`idEtapa`)
    REFERENCES `projetolpeedu`.`Etapa` (`idEtapa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `projetolpeedu`.`Questao` (
  `idQuestao` INT(11) NOT NULL,
  `algoritmoVazio` VARCHAR(100) NOT NULL,
  `algoritmoCompleto` VARCHAR(100) NULL DEFAULT NULL,
  `idEnunciado` INT(11) NOT NULL,
  PRIMARY KEY (`idQuestao`),
  INDEX `fk_Questao_Enunciado_idx` (`idEnunciado` ASC),
  CONSTRAINT `fk_Questao_Enunciado`
    FOREIGN KEY (`idEnunciado`)
    REFERENCES `projetolpeedu`.`Enunciado` (`idEnunciado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `projetolpeedu`.`Enunciado` (
  `idEnunciado` INT(11) NOT NULL,
  `enunciado` VARCHAR(1000) NOT NULL,
  PRIMARY KEY (`idEnunciado`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `projetolpeedu`.`Etapa` (
  `idEtapa` INT(11) NOT NULL,
  `nivelDaEtapa` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idEtapa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `projetolpeedu`.`Etapa_has_Questao` (
  `Etapa_idEtapa` INT(11) NOT NULL,
  `Questao_idQuestao` INT(11) NOT NULL,
  INDEX `fk_Etapa_has_Questao_Etapa1_idx` (`Etapa_idEtapa` ASC),
  INDEX `fk_Etapa_has_Questao_Questao1_idx` (`Questao_idQuestao` ASC),
  CONSTRAINT `fk_Etapa_has_Questao_Etapa1`
    FOREIGN KEY (`Etapa_idEtapa`)
    REFERENCES `projetolpeedu`.`Etapa` (`idEtapa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Etapa_has_Questao_Questao1`
    FOREIGN KEY (`Questao_idQuestao`)
    REFERENCES `projetolpeedu`.`Questao` (`idQuestao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
