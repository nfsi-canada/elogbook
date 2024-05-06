This is the electric log book (E-log) project for the Dalhousie 
Steele Ocean Science building labs 


CURRENT DATABASE SCHEMA





-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema sakila
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sakila
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sakila` ;
USE `sakila` ;

-- -----------------------------------------------------
-- Table `sakila`.`Cruise`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sakila`.`Cruise` (
  `c_id` INT NOT NULL AUTO_INCREMENT,
  `c_name` VARCHAR(45) NULL,
  `s_id` INT NULL,
  `s_name` VARCHAR(45) NULL,
  `ap_name` VARCHAR(45) NULL,
  `dp_name` VARCHAR(45) NULL,
  `location` VARCHAR(45) NULL,
  `s_date` DATE NULL,
  `e_date` DATE NULL,
  PRIMARY KEY (`c_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sakila`.`Crew`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sakila`.`Crew` (
  `crew_name` VARCHAR(45) NOT NULL,
  `Cruise_c_id` INT NOT NULL,
  PRIMARY KEY (`crew_name`, `Cruise_c_id`),
  INDEX `fk_Crew_Cruise1_idx` (`Cruise_c_id` ASC),
  CONSTRAINT `fk_Crew_Cruise1`
    FOREIGN KEY (`Cruise_c_id`)
    REFERENCES `sakila`.`Cruise` (`c_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sakila`.`Station`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sakila`.`Station` (
  `station_id` VARCHAR(45) NOT NULL,
  `Cruise_c_id` INT NOT NULL,
  PRIMARY KEY (`station_id`, `Cruise_c_id`),
  INDEX `fk_Station_Cruise1_idx` (`Cruise_c_id` ASC),
  CONSTRAINT `fk_Station_Cruise1`
    FOREIGN KEY (`Cruise_c_id`)
    REFERENCES `sakila`.`Cruise` (`c_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sakila`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sakila`.`user` (
  `username` VARCHAR(45) NOT NULL,
  `pasword` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`username`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sakila`.`logs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sakila`.`logs` (
  `log_id` INT NOT NULL AUTO_INCREMENT,
  `date` DATE NULL,
  `time` TIME NULL,
  `type` VARCHAR(45) NULL,
  `text` VARCHAR(255) NULL,
  `Cruise_c_id` INT NOT NULL,
  `Crew_crew_name1` VARCHAR(45) NOT NULL,
  `Crew_Cruise_c_id1` INT NOT NULL,
  PRIMARY KEY (`log_id`),
  INDEX `fk_logs_Cruise1_idx` (`Cruise_c_id` ASC),
  INDEX `fk_logs_Crew1_idx` (`Crew_crew_name1` ASC, `Crew_Cruise_c_id1` ASC),
  CONSTRAINT `fk_logs_Cruise1`
    FOREIGN KEY (`Cruise_c_id`)
    REFERENCES `sakila`.`Cruise` (`c_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_logs_Crew1`
    FOREIGN KEY (`Crew_crew_name1` , `Crew_Cruise_c_id1`)
    REFERENCES `sakila`.`Crew` (`crew_name` , `Cruise_c_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sakila`.`Instruments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sakila`.`Instruments` (
  `ins_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ins_name`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sakila`.`Cruise_has_Instruments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sakila`.`Cruise_has_Instruments` (
  `Cruise_c_id` INT NOT NULL,
  `Instruments_ins_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Cruise_c_id`, `Instruments_ins_name`),
  INDEX `fk_Cruise_has_Instruments_Instruments1_idx` (`Instruments_ins_name` ASC),
  INDEX `fk_Cruise_has_Instruments_Cruise1_idx` (`Cruise_c_id` ASC),
  CONSTRAINT `fk_Cruise_has_Instruments_Cruise1`
    FOREIGN KEY (`Cruise_c_id`)
    REFERENCES `sakila`.`Cruise` (`c_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cruise_has_Instruments_Instruments1`
    FOREIGN KEY (`Instruments_ins_name`)
    REFERENCES `sakila`.`Instruments` (`ins_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sakila`.`logs_has_Instruments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sakila`.`logs_has_Instruments` (
  `logs_log_id` INT NOT NULL,
  `Instruments_ins_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`logs_log_id`, `Instruments_ins_name`),
  INDEX `fk_logs_has_Instruments_Instruments1_idx` (`Instruments_ins_name` ASC),
  INDEX `fk_logs_has_Instruments_logs1_idx` (`logs_log_id` ASC),
  CONSTRAINT `fk_logs_has_Instruments_logs1`
    FOREIGN KEY (`logs_log_id`)
    REFERENCES `sakila`.`logs` (`log_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_logs_has_Instruments_Instruments1`
    FOREIGN KEY (`Instruments_ins_name`)
    REFERENCES `sakila`.`Instruments` (`ins_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

