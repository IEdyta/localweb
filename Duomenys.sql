SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Komandos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Komandos` (
  `ID` INT NOT NULL ,
  `Pavadinimas` VARCHAR(45) NULL ,
  `Miestas` VARCHAR(45) NULL ,
  `Logotipas` VARCHAR(100) NULL ,
  `Sukis` VARCHAR(100) NULL ,
  `Treneris` VARCHAR(100) NULL ,
  PRIMARY KEY (`ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Ivykis`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Ivykis` (
  `ID` INT NOT NULL ,
  `Pavadinimas` VARCHAR(45) NULL ,
  `Data` DATE NULL ,
  `Vieta` VARCHAR(45) NULL ,
  `Kategorija` VARCHAR(45) NULL ,
  PRIMARY KEY (`ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Varzybos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Varzybos` (
  `ID` INT NOT NULL ,
  `Laikas` TIME NULL ,
  `Taskai_K1` INT NULL ,
  `Taskai_K2` INT NULL ,
  `Komandos_Kodas` INT NOT NULL ,
  `Komandos_Kodas1` INT NOT NULL ,
  `Ivykis_ID` INT NOT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `fk_Varžybos_Komandos_idx` (`Komandos_Kodas` ASC) ,
  INDEX `fk_Varžybos_Komandos1_idx` (`Komandos_Kodas1` ASC) ,
  INDEX `fk_Varžybos_Įvykis1_idx` (`Ivykis_ID` ASC) ,
  CONSTRAINT `fk_Varžybos_Komandos`
    FOREIGN KEY (`Komandos_Kodas` )
    REFERENCES `mydb`.`Komandos` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Varžybos_Komandos1`
    FOREIGN KEY (`Komandos_Kodas1` )
    REFERENCES `mydb`.`Komandos` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Varžybos_Įvykis1`
    FOREIGN KEY (`Ivykis_ID` )
    REFERENCES `mydb`.`Ivykis` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `mydb` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
