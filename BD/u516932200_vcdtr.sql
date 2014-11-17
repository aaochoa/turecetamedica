-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema u516932200_vcdtr
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema u516932200_vcdtr
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `u516932200_vcdtr` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `u516932200_vcdtr` ;

-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`logIn`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`logIn` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`logIn` (
  `idUsers` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `lastName` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `passW` VARCHAR(45) NOT NULL,
  `rol` INT NOT NULL,
  PRIMARY KEY (`idUsers`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`mP`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`mP` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`mP` (
  `idPacienteM` INT NOT NULL,
  `Altura` VARCHAR(45) NOT NULL,
  `lastMedicine` VARCHAR(45) NULL,
  `tratamiento` VARCHAR(45) NULL,
  PRIMARY KEY (`idPacienteM`),
  CONSTRAINT `idUserToMP`
    FOREIGN KEY (`idPacienteM`)
    REFERENCES `u516932200_vcdtr`.`logIn` (`idUsers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`rM`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`rM` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`rM` (
  `idPacienteR` INT NOT NULL,
  `medicine` VARCHAR(45) NULL,
  `howItComes` VARCHAR(45) NULL,
  `dosis` VARCHAR(45) NULL,
  `eachTime` VARCHAR(45) NULL,
  `dateFirst` DATE NULL,
  PRIMARY KEY (`idPacienteR`),
  CONSTRAINT `idPacienteMToRM`
    FOREIGN KEY (`idPacienteR`)
    REFERENCES `u516932200_vcdtr`.`mP` (`idPacienteM`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`Sports`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`Sports` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`Sports` (
  `IdPacienteS` INT NOT NULL,
  `soccer` TINYINT(1) NOT NULL,
  `bascketBall` TINYINT(1) NOT NULL,
  `swimmning` TINYINT(1) NOT NULL,
  `volleyball` TINYINT(1) NOT NULL,
  `bike` TINYINT(1) NOT NULL,
  `jog` TINYINT(1) NOT NULL,
  `Other` VARCHAR(45) NULL,
  PRIMARY KEY (`IdPacienteS`),
  CONSTRAINT `idPacienteMToS`
    FOREIGN KEY (`IdPacienteS`)
    REFERENCES `u516932200_vcdtr`.`mP` (`idPacienteM`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`medicamentosPasados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`medicamentosPasados` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`medicamentosPasados` (
  `idPacienteMP` INT NOT NULL,
  `medicamento1` VARCHAR(45) NULL,
  `medicamento2` VARCHAR(45) NULL,
  `medicamneto3` VARCHAR(45) NULL,
  `medicamento4` VARCHAR(45) NULL,
  PRIMARY KEY (`idPacienteMP`),
  CONSTRAINT `idPacienteMToMeP`
    FOREIGN KEY (`idPacienteMP`)
    REFERENCES `u516932200_vcdtr`.`mP` (`idPacienteM`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`enfermedades`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`enfermedades` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`enfermedades` (
  `idPacienteE` INT NOT NULL,
  `gripe` TINYINT(1) NOT NULL,
  `rinitis` TINYINT(1) NOT NULL,
  `asma` TINYINT(1) NOT NULL,
  `diabetes` TINYINT(1) NOT NULL,
  `hipertencion` TINYINT(1) NOT NULL,
  `hipotencion` TINYINT(1) NOT NULL,
  `cancer` TINYINT(1) NOT NULL,
  `otra` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPacienteE`),
  CONSTRAINT `idPacienteMToE`
    FOREIGN KEY (`idPacienteE`)
    REFERENCES `u516932200_vcdtr`.`mP` (`idPacienteM`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`pacienteProfile`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`pacienteProfile` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`pacienteProfile` (
  `idPaciente` INT NOT NULL,
  `estrato` VARCHAR(45) NOT NULL,
  `birthDate` DATE NOT NULL,
  `gender` VARCHAR(45) NOT NULL,
  `sisbenEps` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `pic` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPaciente`),
  CONSTRAINT `idUsersToPP`
    FOREIGN KEY (`idPaciente`)
    REFERENCES `u516932200_vcdtr`.`logIn` (`idUsers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`medicoEG`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`medicoEG` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`medicoEG` (
  `idMedicoEG` INT NOT NULL,
  `tarifasParticulares` VARCHAR(45) NULL,
  `referenciasJob` VARCHAR(45) NOT NULL,
  `otherJobPlace` VARCHAR(45) NULL,
  `pic` VARCHAR(45) NOT NULL,
  `college` VARCHAR(45) NOT NULL,
  `experience` VARCHAR(45) NOT NULL,
  `especialidad` VARCHAR(45) NULL,
  PRIMARY KEY (`idMedicoEG`),
  CONSTRAINT `idUsersToMEG`
    FOREIGN KEY (`idMedicoEG`)
    REFERENCES `u516932200_vcdtr`.`logIn` (`idUsers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`knownMedicine`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`knownMedicine` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`knownMedicine` (
  `idMedicoMedicine` INT NOT NULL,
  `medicamento1` VARCHAR(45) NULL,
  `medicamento2` VARCHAR(45) NULL,
  `medicamneto3` VARCHAR(45) NULL,
  `medicamento4` VARCHAR(45) NULL,
  PRIMARY KEY (`idMedicoMedicine`),
  CONSTRAINT `idMedicoEGToKM`
    FOREIGN KEY (`idMedicoMedicine`)
    REFERENCES `u516932200_vcdtr`.`medicoEG` (`idMedicoEG`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`knownTreatments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`knownTreatments` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`knownTreatments` (
  `idMedicoT` INT NOT NULL,
  `treatment1` VARCHAR(45) NULL,
  `treatment2` VARCHAR(45) NULL,
  `treatment3` VARCHAR(45) NULL,
  `treatment4` VARCHAR(45) NULL,
  PRIMARY KEY (`idMedicoT`),
  CONSTRAINT `idMedicoEGToKT`
    FOREIGN KEY (`idMedicoT`)
    REFERENCES `u516932200_vcdtr`.`medicoEG` (`idMedicoEG`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`temp_Users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`temp_Users` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`temp_Users` (
  `idUsers` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `lastName` VARCHAR(45) NULL,
  `email` VARCHAR(45) NOT NULL,
  `passW` VARCHAR(45) NOT NULL,
  `rol` INT NOT NULL,
  `key` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUsers`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`misPacientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`misPacientes` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`misPacientes` (
  `idMedico` INT NOT NULL,
  `idPaciente` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idMedico`),
  CONSTRAINT `miPeople`
    FOREIGN KEY (`idMedico`)
    REFERENCES `u516932200_vcdtr`.`medicoEG` (`idMedicoEG`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`treatments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`treatments` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`treatments` (
  `idTreatments` INT NOT NULL AUTO_INCREMENT,
  `nameT` VARCHAR(45) NULL,
  `enfermedad` VARCHAR(45) NULL,
  PRIMARY KEY (`idTreatments`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`temp_treatments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`temp_treatments` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`temp_treatments` (
  `idTreatments` INT NOT NULL AUTO_INCREMENT,
  `idSolicitante` VARCHAR(45) NULL,
  `nameT` VARCHAR(45) NULL,
  `enfermedad` VARCHAR(45) NULL,
  PRIMARY KEY (`idTreatments`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`noPOS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`noPOS` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`noPOS` (
  `idnoPOS` INT NOT NULL AUTO_INCREMENT,
  `nameMedicine` VARCHAR(45) NULL,
  `howitcomes` VARCHAR(45) NULL,
  `whatitdoes` VARCHAR(45) NULL,
  PRIMARY KEY (`idnoPOS`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`temp_noPOS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`temp_noPOS` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`temp_noPOS` (
  `idnoPOS` INT NOT NULL AUTO_INCREMENT,
  `idSolicitante` VARCHAR(45) NULL,
  `nameMedicine` VARCHAR(45) NULL,
  `howitcomes` VARCHAR(45) NULL,
  `whatitdoes` VARCHAR(45) NULL,
  PRIMARY KEY (`idnoPOS`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`solicitudesG`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`solicitudesG` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`solicitudesG` (
  `idsolicitudesG` INT NOT NULL AUTO_INCREMENT,
  `idUsuarioSol` VARCHAR(45) NULL,
  `mailUsuario` VARCHAR(45) NULL,
  `solicitud` TEXT NULL,
  PRIMARY KEY (`idsolicitudesG`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`gruposapoyo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`gruposapoyo` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`gruposapoyo` (
  `idgruposapoyo` INT NOT NULL AUTO_INCREMENT,
  `nombregrupo` VARCHAR(45) NULL,
  `enfermedad` VARCHAR(45) NULL,
  `profesional` VARCHAR(45) NULL,
  PRIMARY KEY (`idgruposapoyo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u516932200_vcdtr`.`laboratorios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u516932200_vcdtr`.`laboratorios` ;

CREATE TABLE IF NOT EXISTS `u516932200_vcdtr`.`laboratorios` (
  `idlaboratorios` INT NOT NULL AUTO_INCREMENT,
  `nombrelaboratotio` VARCHAR(45) NULL,
  `emaillaboratorio` VARCHAR(45) NULL,
  PRIMARY KEY (`idlaboratorios`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
