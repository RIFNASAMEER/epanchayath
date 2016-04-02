SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `epanchayath` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `epanchayath` ;

-- -----------------------------------------------------
-- Table `epanchayath`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(250) NULL,
  `usertype` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`address`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`address` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `gender` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  `place` VARCHAR(45) NULL,
  `dob` INT NULL,
  `mobileno` VARCHAR(45) NULL,
  `emailid` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`employees`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`employees` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `designation` VARCHAR(45) NULL,
  `address_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_employees_address_idx` (`address_id` ASC),
  CONSTRAINT `fk_employees_address`
    FOREIGN KEY (`address_id`)
    REFERENCES `epanchayath`.`address` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`members`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`members` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `type` VARCHAR(45) NULL,
  `designation` VARCHAR(45) NULL,
  `wardno` VARCHAR(45) NULL,
  `address_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_members_address1_idx` (`address_id` ASC),
  CONSTRAINT `fk_members_address1`
    FOREIGN KEY (`address_id`)
    REFERENCES `epanchayath`.`address` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`complaints`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`complaints` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `complaints` VARCHAR(45) NULL,
  `address_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_complaints_address1_idx` (`address_id` ASC),
  CONSTRAINT `fk_complaints_address1`
    FOREIGN KEY (`address_id`)
    REFERENCES `epanchayath`.`address` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`files`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`files` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `type` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`gallery`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`gallery` (
  `idgallery` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `discription` VARCHAR(45) NULL,
  `gallery files_id` INT NOT NULL,
  PRIMARY KEY (`idgallery`),
  INDEX `fk_gallery_gallery files1_idx` (`gallery files_id` ASC),
  CONSTRAINT `fk_gallery_gallery files1`
    FOREIGN KEY (`gallery files_id`)
    REFERENCES `epanchayath`.`gallery files` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`files`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`files` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `type` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`gallery files`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`gallery files` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `files_id` VARCHAR(45) NULL,
  `gallery_idgallery` INT NOT NULL,
  `files_id1` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_gallery files_gallery1_idx` (`gallery_idgallery` ASC),
  INDEX `fk_gallery files_files1_idx` (`files_id1` ASC),
  CONSTRAINT `fk_gallery files_gallery1`
    FOREIGN KEY (`gallery_idgallery`)
    REFERENCES `epanchayath`.`gallery` (`idgallery`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_gallery files_files1`
    FOREIGN KEY (`files_id1`)
    REFERENCES `epanchayath`.`files` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`marriage_files`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`marriage_files` (
  `id` INT NOT NULL,
  `files_id` INT NOT NULL,
  `marriage certificates_id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_marriage_files_files1_idx` (`files_id` ASC),
  INDEX `fk_marriage_files_marriage certificates1_idx` (`marriage certificates_id` ASC),
  CONSTRAINT `fk_marriage_files_files1`
    FOREIGN KEY (`files_id`)
    REFERENCES `epanchayath`.`files` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_marriage_files_marriage certificates1`
    FOREIGN KEY (`marriage certificates_id`)
    REFERENCES `epanchayath`.`marriage certificates` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`marriage certificates`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`marriage certificates` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date_of_mariage` INT NULL,
  `place` VARCHAR(45) NULL,
  `name` VARCHAR(45) NULL,
  `citizen` VARCHAR(45) NULL,
  `job` VARCHAR(45) NULL,
  `first_married_or_not` VARCHAR(45) NULL,
  `any_spouse_are_living` VARCHAR(45) NULL,
  `father_name` VARCHAR(45) NULL,
  `age` TINYINT(4) NULL,
  `address` VARCHAR(45) NULL,
  `mother_name` VARCHAR(45) NULL,
  `mother_age` VARCHAR(45) NULL,
  `mother_adress` VARCHAR(45) NULL,
  `first_victim_name` VARCHAR(45) NULL,
  `first_victim_address` VARCHAR(45) NULL,
  `second_victim_name` VARCHAR(45) NULL,
  `second_victim_address` VARCHAR(45) NULL,
  `address_id` INT NOT NULL,
  `marriage_files_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_marriage certificates_address1_idx` (`address_id` ASC),
  INDEX `fk_marriage certificates_marriage_files1_idx` (`marriage_files_id` ASC),
  CONSTRAINT `fk_marriage certificates_address1`
    FOREIGN KEY (`address_id`)
    REFERENCES `epanchayath`.`address` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_marriage certificates_marriage_files1`
    FOREIGN KEY (`marriage_files_id`)
    REFERENCES `epanchayath`.`marriage_files` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`places`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`places` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `buildingno` VARCHAR(45) NULL,
  `wardno` VARCHAR(45) NULL COMMENT '						',
  `localbodytype` VARCHAR(45) NULL,
  `localbody` VARCHAR(45) NULL,
  `District` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`birthcertificates`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`birthcertificates` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `appliant_name` VARCHAR(45) NULL,
  `house_no` INT(20) NULL,
  `ward_name` INT(2) NULL,
  `village` VARCHAR(45) NULL,
  `postoffice` VARCHAR(45) NULL,
  `pincode` INT(6) NULL,
  `district` VARCHAR(45) NULL,
  `name` VARCHAR(45) NULL,
  `father/mother` VARCHAR(45) NULL COMMENT '	',
  `date` DATE NULL,
  `purpose` VARCHAR(45) NULL,
  `registrar` VARCHAR(45) NULL,
  `registration_no` INT(20) NULL,
  `localbodytype` VARCHAR(45) NULL,
  `localbody` VARCHAR(45) NULL,
  `gender` VARCHAR(45) NULL,
  `places_id` INT NOT NULL,
  `address_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_birth/death certificates_places1_idx` (`places_id` ASC),
  INDEX `fk_birth/death certificates_address1_idx` (`address_id` ASC),
  CONSTRAINT `fk_birth/death certificates_places1`
    FOREIGN KEY (`places_id`)
    REFERENCES `epanchayath`.`places` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_birth/death certificates_address1`
    FOREIGN KEY (`address_id`)
    REFERENCES `epanchayath`.`address` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`pensions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`pensions` (
  `idpensions` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `house_no` VARCHAR(45) NULL,
  `landmark_of_house` VARCHAR(45) NULL,
  `name_of_the_street/rural_place` VARCHAR(45) NULL,
  `name_of_majorplace` VARCHAR(45) NULL,
  `name_of_postoffice` VARCHAR(45) NULL,
  `pincode` INT(6) NULL,
  `male/female` VARCHAR(45) NULL,
  `name_of_disease` VARCHAR(45) NULL,
  `how_much_years_you_settled_in_kerala` INT(2) NULL,
  `ration_card_no` INT(20) NULL,
  `BPL_card_no` INT(20) NULL,
  `ID_card_no` INT(20) NULL,
  `name_of_the_ward_councilor` VARCHAR(45) NULL,
  `indigently_or_not` VARCHAR(3) NULL,
  `begger_or_not` VARCHAR(5) NULL,
  `married_or_unmarried` VARCHAR(5) NULL,
  `husbend/wife_living_or_not` VARCHAR(5) NULL,
  `Annual_income` INT(8) NULL,
  `phone_no/contact_no` VARCHAR(45) NULL,
  `files_id` INT NOT NULL,
  PRIMARY KEY (`idpensions`),
  INDEX `fk_pensions_files1_idx` (`files_id` ASC),
  CONSTRAINT `fk_pensions_files1`
    FOREIGN KEY (`files_id`)
    REFERENCES `epanchayath`.`files` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`permit/regularisation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`permit/regularisation` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) NULL,
  `nature_of_development/construction` VARCHAR(15) NULL,
  `survey_no` INT(20) NULL,
  `extend` VARCHAR(20) NULL,
  `nature_of_ownership` VARCHAR(20) NULL,
  `number_of_deed/documents` INT(20) NULL,
  `registrars_office` VARCHAR(20) NULL,
  `sub_division` VARCHAR(25) NULL,
  `ward_no` INT(10) NULL,
  `no_of_nearest_building` VARCHAR(45) NULL,
  `reveneu_village` VARCHAR(45) NULL,
  `taluk` VARCHAR(45) NULL,
  `district` VARCHAR(45) NULL,
  `whether_gvt_or_quasi_gvt` VARCHAR(45) NULL,
  `plinth_area_of_the_proposed_building` VARCHAR(45) NULL,
  `basement_floor` VARCHAR(45) NULL,
  `ground_floor` VARCHAR(45) NULL,
  `first_floor` VARCHAR(45) NULL,
  `second_floor` VARCHAR(45) NULL,
  `totalarea` VARCHAR(45) NULL,
  `maximum_height` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`d&o licenses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`d&o licenses` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `purpose_of_license` VARCHAR(45) NULL,
  `name_and_address_of_building` VARCHAR(45) NULL,
  `village` VARCHAR(45) NULL,
  `ward_no` VARCHAR(45) NULL,
  `survey_number` VARCHAR(45) NULL,
  `building_no` VARCHAR(45) NULL,
  `year_of_license_needed` VARCHAR(45) NULL,
  `type_of_roof` VARCHAR(45) NULL,
  `if_licence_for_renewal` VARCHAR(45) NULL,
  `nearest_place` VARCHAR(45) NULL,
  `name_of_the_building` VARCHAR(45) NULL,
  `power` VARCHAR(45) NULL,
  `boundaries` VARCHAR(45) NULL,
  `totalarea_of_plant` VARCHAR(45) NULL,
  `no_of_workers` VARCHAR(45) NULL,
  `reciept_no` VARCHAR(45) NULL,
  `paid_amount` VARCHAR(45) NULL,
  `paid_date` VARCHAR(45) NULL,
  `total_yield` VARCHAR(45) NULL,
  `address_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_d&o licenses_address1_idx` (`address_id` ASC),
  CONSTRAINT `fk_d&o licenses_address1`
    FOREIGN KEY (`address_id`)
    REFERENCES `epanchayath`.`address` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`login` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `users_id` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`birthregistrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`birthregistrations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `gender` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  `date` VARCHAR(45) NULL,
  `location` VARCHAR(45) NULL,
  `guardianname` VARCHAR(45) NULL,
  `address_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_birthregistrations_address1_idx` (`address_id` ASC),
  CONSTRAINT `fk_birthregistrations_address1`
    FOREIGN KEY (`address_id`)
    REFERENCES `epanchayath`.`address` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`marriageregistrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epanchayath`.`marriageregistrations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `birthregistrations_id` INT NOT NULL,
  `father` VARCHAR(45) NULL,
  `faddress` VARCHAR(45) NULL,
  `mother` VARCHAR(45) NULL,
  `maddress` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_marriageregistrations_birthregistrations1_idx` (`birthregistrations_id` ASC),
  CONSTRAINT `fk_marriageregistrations_birthregistrations1`
    FOREIGN KEY (`birthregistrations_id`)
    REFERENCES `epanchayath`.`birthregistrations` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
