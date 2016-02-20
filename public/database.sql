SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `epanchayath`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `epanchayath`.`users` ;

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
DROP TABLE IF EXISTS `epanchayath`.`address` ;

CREATE TABLE IF NOT EXISTS `epanchayath`.`address` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `address` VARCHAR(45) NULL,
  `gender` VARCHAR(45) NULL,
  `place` VARCHAR(45) NULL,
  `dob` DATE NULL,
  `mobileno` VARCHAR(45) NULL,
  `emailid` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`employees`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `epanchayath`.`employees` ;

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
DROP TABLE IF EXISTS `epanchayath`.`members` ;

CREATE TABLE IF NOT EXISTS `epanchayath`.`members` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `type` VARCHAR(45) NULL,
  `designation` VARCHAR(45) NULL,
  `wardno` INT NULL,
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
DROP TABLE IF EXISTS `epanchayath`.`complaints` ;

CREATE TABLE IF NOT EXISTS `epanchayath`.`complaints` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `complaints` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`files`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `epanchayath`.`files` ;

CREATE TABLE IF NOT EXISTS `epanchayath`.`files` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `type` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`gallery`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `epanchayath`.`gallery` ;

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
DROP TABLE IF EXISTS `epanchayath`.`files` ;

CREATE TABLE IF NOT EXISTS `epanchayath`.`files` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `type` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`gallery files`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `epanchayath`.`gallery files` ;

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
DROP TABLE IF EXISTS `epanchayath`.`marriage_files` ;

CREATE TABLE IF NOT EXISTS `epanchayath`.`marriage_files` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `files_id` INT NOT NULL,
  `marriage certificates_id` INT NOT NULL,
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
DROP TABLE IF EXISTS `epanchayath`.`marriage certificates` ;

CREATE TABLE IF NOT EXISTS `epanchayath`.`marriage certificates` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `marriagedate` DATE NULL,
  `place` VARCHAR(45) NULL,
  `name` VARCHAR(45) NULL,
  `citizen` VARCHAR(45) NULL,
  `job` VARCHAR(45) NULL,
  `first_married_or_not` VARCHAR(45) NULL,
  `any_spouse_are_living` VARCHAR(45) NULL,
  `fathername` VARCHAR(45) NULL,
  `fatherage` TINYINT(4) NULL,
  `fatheraddress` VARCHAR(45) NULL,
  `mothername` VARCHAR(45) NULL,
  `motherage` VARCHAR(45) NULL,
  `motheraddress` VARCHAR(45) NULL,
  `first_victim` VARCHAR(45) NULL,
  `first_victim_address` VARCHAR(45) BINARY NULL,
  `second_victim` VARCHAR(45) NULL,
  `second_victim_address` VARCHAR(45) NULL,
  `status` VARCHAR(45) NULL,
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
DROP TABLE IF EXISTS `epanchayath`.`places` ;

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
-- Table `epanchayath`.`birth/death certificates`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `epanchayath`.`birth/death certificates` ;

CREATE TABLE IF NOT EXISTS `epanchayath`.`birth/death certificates` (
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
  `status` VARCHAR(45) NULL,
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
DROP TABLE IF EXISTS `epanchayath`.`pensions` ;

CREATE TABLE IF NOT EXISTS `epanchayath`.`pensions` (
  `idpensions` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `houseno` INT NULL,
  `landmark` VARCHAR(45) NULL,
  `nameofstreet` VARCHAR(45) NULL,
  `majorplace` VARCHAR(45) NULL,
  `postoffice` VARCHAR(45) NULL,
  `pincode` INT(6) NULL,
  `gender` VARCHAR(45) NULL,
  `disease` VARCHAR(45) NULL,
  `no_ofyears_inkerala` INT(2) NULL,
  `rationcardno` INT(20) NULL,
  `bplcardno` INT(20) NULL,
  `idcardno` INT(20) NULL,
  `wardcouncilor` VARCHAR(45) NULL,
  `indigently` VARCHAR(3) NULL,
  `begger` VARCHAR(5) NULL,
  `marcialstatus` VARCHAR(5) NULL,
  `husbend/wife` VARCHAR(5) NULL,
  `annualincome` INT(8) NULL,
  `contact` INT NULL,
  `status` VARCHAR(45) NULL,
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
DROP TABLE IF EXISTS `epanchayath`.`permit/regularisation` ;

CREATE TABLE IF NOT EXISTS `epanchayath`.`permit/regularisation` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) NULL,
  `natureofdevelopment` VARCHAR(15) NULL,
  `surveyno` INT(20) NULL,
  `extend` VARCHAR(20) NULL,
  `natureof_ownership` VARCHAR(20) NULL,
  `documentsno` INT(20) NULL,
  `registrarsoffice` VARCHAR(20) NULL,
  `subdivision` VARCHAR(25) NULL,
  `wardno` INT(10) NULL,
  `nearestbuilding_no` VARCHAR(45) NULL,
  `village` VARCHAR(45) NULL,
  `taluk` VARCHAR(45) NULL,
  `district` VARCHAR(45) NULL,
  `whethergvt_or_quasigvt` VARCHAR(45) NULL,
  `plintharea` VARCHAR(45) NULL,
  `basementfloor` VARCHAR(45) NULL,
  `groundfloor` VARCHAR(45) NULL,
  `firstfloor` VARCHAR(45) NULL,
  `secondfloor` VARCHAR(45) NULL,
  `totalarea` VARCHAR(45) NULL,
  `maximumheight` VARCHAR(45) NULL,
  `status` VARCHAR(45) NULL,
  `address_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_permit/regularisation_address1_idx` (`address_id` ASC),
  CONSTRAINT `fk_permit/regularisation_address1`
    FOREIGN KEY (`address_id`)
    REFERENCES `epanchayath`.`address` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `epanchayath`.`d&o licenses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `epanchayath`.`d&o licenses` ;

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
  `status` VARCHAR(45) NULL,
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
-- Table `epanchayath`.`notifications`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `epanchayath`.`notifications` ;

CREATE TABLE IF NOT EXISTS `epanchayath`.`notifications` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `notification` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
