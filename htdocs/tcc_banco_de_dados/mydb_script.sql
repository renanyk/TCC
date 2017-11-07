-- MySQL Script generated by MySQL Workbench
-- Thu Oct  5 12:59:23 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`teacher`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`teacher` ;

CREATE TABLE IF NOT EXISTS `mydb`.`teacher` (
  `nusp` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`nusp`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`discipline`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`discipline` ;

CREATE TABLE IF NOT EXISTS `mydb`.`discipline` (
  `code` VARCHAR(15) NOT NULL,
  `name` VARCHAR(45) NULL,
  `description` VARCHAR(100) NULL,
  `studant_count` INT NULL,
  `class` VARCHAR(45) NULL,
  `departiment` VARCHAR(10) NULL,
  `teacher_nusp` INT NOT NULL,
  PRIMARY KEY (`code`),
  INDEX `fk_discipline_teacher1_idx` (`teacher_nusp` ASC),
  CONSTRAINT `fk_discipline_teacher1`
    FOREIGN KEY (`teacher_nusp`)
    REFERENCES `mydb`.`teacher` (`nusp`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`regist`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`regist` ;

CREATE TABLE IF NOT EXISTS `mydb`.`regist` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `state` VARCHAR(45) NULL,
  `date` DATETIME NULL,
  `description` VARCHAR(100) NULL,
  `discipline_code` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_regist_discipline1_idx` (`discipline_code` ASC),
  CONSTRAINT `fk_regist_discipline1`
    FOREIGN KEY (`discipline_code`)
    REFERENCES `mydb`.`discipline` (`code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`studant`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`studant` ;

CREATE TABLE IF NOT EXISTS `mydb`.`studant` (
  `login` VARCHAR(50) NOT NULL,
  `password` VARCHAR(45) NULL,
  `name` VARCHAR(45) NULL,
  `rg` INT NULL,
  `address` VARCHAR(45) NULL,
  `city` VARCHAR(45) NULL,
  `state` VARCHAR(45) NULL,
  `postal_code` INT NULL,
  `gender` VARCHAR(45) NULL,
  `nusp` INT NULL,
  `course` VARCHAR(45) NULL,
  `institution` VARCHAR(45) NULL,
  `company` VARCHAR(45) NULL,
  `title` VARCHAR(45) NULL,
  `branch` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `phone` INT NULL,
  `regist_id` INT NULL,
  `regist_id1` INT NULL,
  PRIMARY KEY (`login`),
  INDEX `fk_studant_regist1_idx` (`regist_id` ASC),
  INDEX `fk_studant_regist2_idx` (`regist_id1` ASC),
  CONSTRAINT `fk_studant_regist1`
    FOREIGN KEY (`regist_id`)
    REFERENCES `mydb`.`regist` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_studant_regist2`
    FOREIGN KEY (`regist_id1`)
    REFERENCES `mydb`.`regist` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`document`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`document` ;

CREATE TABLE IF NOT EXISTS `mydb`.`document` (
  `id` INT NOT NULL,
  `rg_state` VARCHAR(45) NULL,
  `rg_refuse_description` VARCHAR(100) NULL,
  `foto_state` VARCHAR(45) NULL,
  `foto_refuse_description` VARCHAR(100) NULL,
  `sg_state` VARCHAR(45) NULL,
  `sg_refuse_description` VARCHAR(45) NULL,
  `studant_login` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_document_studant1_idx` (`studant_login` ASC),
  UNIQUE INDEX `studant_login_UNIQUE` (`studant_login` ASC),
  CONSTRAINT `fk_document_studant1`
    FOREIGN KEY (`studant_login`)
    REFERENCES `mydb`.`studant` (`login`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
