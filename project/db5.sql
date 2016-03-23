SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `blog` ;

-- -----------------------------------------------------
-- Table `blog`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`categories` (
  `cat_id` INT NOT NULL AUTO_INCREMENT,
  `cat_name` VARCHAR(255) NULL,
  `cat_slug` VARCHAR(255) NULL,
  `cat_status` TINYINT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE INDEX `cat_slug_UNIQUE` (`cat_slug` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `blog`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`users` (
  `usr_id` INT NOT NULL AUTO_INCREMENT,
  `usr_name` VARCHAR(255) NULL,
  `usr_password` VARCHAR(255) NULL,
  `usr_email` VARCHAR(255) NULL,
  `usr_status` TINYINT NULL,
  `usr_role` TINYINT NULL,
  `usr_date` DATETIME NULL,
  PRIMARY KEY (`usr_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`galleries`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`galleries` (
  `gal_id` INT NOT NULL AUTO_INCREMENT,
  `gal_name` VARCHAR(255) NULL,
  PRIMARY KEY (`gal_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`articles` (
  `art_id` INT NOT NULL AUTO_INCREMENT,
  `art_title` VARCHAR(255) NULL,
  `art_slug` VARCHAR(255) NULL,
  `art_status` TINYINT NULL,
  `art_body` TEXT NULL,
  `art_date` DATETIME NULL,
  `art_cat_id` INT NOT NULL,
  `art_usr_id` INT NOT NULL,
  `art_gal_id` INT NULL,
  PRIMARY KEY (`art_id`),
  INDEX `fk_articles_categories_idx` (`art_cat_id` ASC),
  INDEX `fk_articles_users1_idx` (`art_usr_id` ASC),
  INDEX `fk_articles_galleries1_idx` (`art_gal_id` ASC),
  UNIQUE INDEX `art_slug_UNIQUE` (`art_slug` ASC),
  CONSTRAINT `fk_articles_categories`
    FOREIGN KEY (`art_cat_id`)
    REFERENCES `blog`.`categories` (`cat_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_articles_users1`
    FOREIGN KEY (`art_usr_id`)
    REFERENCES `blog`.`users` (`usr_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_articles_galleries1`
    FOREIGN KEY (`art_gal_id`)
    REFERENCES `blog`.`galleries` (`gal_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`comments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`comments` (
  `cmt_id` INT NOT NULL AUTO_INCREMENT,
  `cmt_body` VARCHAR(45) NULL,
  `cmt_usr_id` INT NOT NULL,
  `cmt_status` TINYINT NULL,
  PRIMARY KEY (`cmt_id`),
  INDEX `fk_comments_users1_idx` (`cmt_usr_id` ASC),
  CONSTRAINT `fk_comments_users1`
    FOREIGN KEY (`cmt_usr_id`)
    REFERENCES `blog`.`users` (`usr_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`tags`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`tags` (
  `tag_id` INT NOT NULL AUTO_INCREMENT,
  `tag_name` VARCHAR(100) NULL,
  PRIMARY KEY (`tag_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`tags_has_articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`tags_has_articles` (
  `tags_tag_id` INT NOT NULL,
  `articles_art_id` INT NOT NULL,
  PRIMARY KEY (`tags_tag_id`, `articles_art_id`),
  INDEX `fk_tags_has_articles_articles1_idx` (`articles_art_id` ASC),
  INDEX `fk_tags_has_articles_tags1_idx` (`tags_tag_id` ASC),
  CONSTRAINT `fk_tags_has_articles_tags1`
    FOREIGN KEY (`tags_tag_id`)
    REFERENCES `blog`.`tags` (`tag_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tags_has_articles_articles1`
    FOREIGN KEY (`articles_art_id`)
    REFERENCES `blog`.`articles` (`art_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`photos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`photos` (
  `pht_id` INT NOT NULL AUTO_INCREMENT,
  `pht_src` VARCHAR(255) NULL,
  `pht_storage` VARCHAR(45) NULL,
  `pht_gal_id` INT NOT NULL,
  `pht_main` TINYINT NULL,
  PRIMARY KEY (`pht_id`),
  INDEX `fk_photos_galleries1_idx` (`pht_gal_id` ASC),
  CONSTRAINT `fk_photos_galleries1`
    FOREIGN KEY (`pht_gal_id`)
    REFERENCES `blog`.`galleries` (`gal_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
