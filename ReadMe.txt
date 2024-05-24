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
-- Table `sakila`.`cruise`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sakila`.`cruise` (
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
  `cruise_c_id` INT NOT NULL,
  PRIMARY KEY (`crew_name`, `cruise_c_id`),
  INDEX `fk_Crew_Cruise1_idx` (`cruise_c_id` ASC),
  CONSTRAINT `fk_Crew_Cruise1`
    FOREIGN KEY (`cruise_c_id`)
    REFERENCES `sakila`.`cruise` (`c_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sakila`.`station`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sakila`.`station` (
  `station_id` VARCHAR(45) NOT NULL,
  `cruise_c_id` INT NOT NULL,
  PRIMARY KEY (`station_id`, `cruise_c_id`),
  INDEX `fk_Station_Cruise1_idx` (`cruise_c_id` ASC),
  CONSTRAINT `fk_Station_Cruise1`
    FOREIGN KEY (`cruise_c_id`)
    REFERENCES `sakila`.`cruise` (`c_id`)
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
  `cruise_c_id` INT NOT NULL,
  `crew_crew_name1` VARCHAR(45) NOT NULL,
  `crew_cruise_c_id1` INT NOT NULL,
  PRIMARY KEY (`log_id`),
  INDEX `fk_logs_Cruise1_idx` (`cruise_c_id` ASC),
  INDEX `fk_logs_Crew1_idx` (`crew_crew_name1` ASC, `crew_cruise_c_id1` ASC),
  CONSTRAINT `fk_logs_Cruise1`
    FOREIGN KEY (`cruise_c_id`)
    REFERENCES `sakila`.`cruise` (`c_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_logs_Crew1`
    FOREIGN KEY (`crew_crew_name1` , `crew_cruise_c_id1`)
    REFERENCES `sakila`.`Crew` (`crew_name` , `cruise_c_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sakila`.`instruments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sakila`.`instruments` (
  `ins_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ins_name`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sakila`.`cruise_has_instruments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sakila`.`cruise_has_instruments` (
  `cruise_c_id` INT NOT NULL,
  `instruments_ins_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cruise_c_id`, `instruments_ins_name`),
  INDEX `fk_Cruise_has_Instruments_Instruments1_idx` (`instruments_ins_name` ASC),
  INDEX `fk_Cruise_has_Instruments_Cruise1_idx` (`cruise_c_id` ASC),
  CONSTRAINT `fk_Cruise_has_Instruments_Cruise1`
    FOREIGN KEY (`cruise_c_id`)
    REFERENCES `sakila`.`cruise` (`c_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cruise_has_Instruments_Instruments1`
    FOREIGN KEY (`instruments_ins_name`)
    REFERENCES `sakila`.`instruments` (`ins_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sakila`.`logs_has_instruments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sakila`.`logs_has_instruments` (
  `logs_log_id` INT NOT NULL,
  `instruments_ins_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`logs_log_id`, `instruments_ins_name`),
  INDEX `fk_logs_has_Instruments_Instruments1_idx` (`instruments_ins_name` ASC),
  INDEX `fk_logs_has_Instruments_logs1_idx` (`logs_log_id` ASC),
  CONSTRAINT `fk_logs_has_Instruments_logs1`
    FOREIGN KEY (`logs_log_id`)
    REFERENCES `sakila`.`logs` (`log_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_logs_has_Instruments_Instruments1`
    FOREIGN KEY (`instruments_ins_name`)
    REFERENCES `sakila`.`instruments` (`ins_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;