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
-- Table `mydb`.`tbl_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_email` VARCHAR(50) NOT NULL,
  `user_name` VARCHAR(45) NOT NULL,
  `user_age` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `user_email_UNIQUE` (`user_email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_galleryq`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_galleryq` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `up_text` VARCHAR(45) NULL,
  `img_name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_article`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_article` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `artice_intro` TEXT(65000) NULL,
  `article_title` VARCHAR(500) NOT NULL,
  `article_image` VARCHAR(500) NULL,
  `article_body` TEXT(65000) NULL,
  `article_conclusion` TEXT(65000) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_admin` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `admin_name` VARCHAR(45) NOT NULL,
  `admin_password` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `admin_name_UNIQUE` (`admin_name` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
