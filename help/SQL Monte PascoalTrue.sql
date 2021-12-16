-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema MontePascoal
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema MontePascoal
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `MontePascoal` DEFAULT CHARACTER SET utf8 ;
USE `MontePascoal` ;

-- -----------------------------------------------------
-- Table `MontePascoal`.`equipe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MontePascoal`.`equipe` (
  `idequipe` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NULL,
  `senha` VARCHAR(255) NULL,
  `nome` VARCHAR(45) NULL,
  `cidade` VARCHAR(45) NULL,
  `estado` VARCHAR(20) NULL,
  `numeroatletas` INT NULL,
  `fem30` TINYINT NULL,
  `fem40` TINYINT NULL,
  `fem50` TINYINT NULL,
  `mas35` TINYINT NULL,
  `mas40` TINYINT NULL,
  `mas45` TINYINT NULL,
  PRIMARY KEY (`idequipe`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MontePascoal`.`atletas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MontePascoal`.`atletas` (
  `idatletas` INT NOT NULL AUTO_INCREMENT,
  `equipe_idequipe` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `posicao` VARCHAR(20) NULL,
  `datanascimento` DATE NULL,
  `rg` VARCHAR(15) NULL,
  `foto` VARCHAR(255) NULL,
  PRIMARY KEY (`idatletas`),
  CONSTRAINT `fk_atletas_equipe`
    FOREIGN KEY (`equipe_idequipe`)
    REFERENCES `MontePascoal`.`equipe` (`idequipe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
