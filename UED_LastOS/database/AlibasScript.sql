CREATE SCHEMA IF NOT EXISTS `last_advancedOS` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `last_advancedOS` ;

-- -----------------------------------------------------
-- Table `last_advancedOS`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `last_advancedOS`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(450) NOT NULL,
  `password` VARCHAR(450) NOT NULL,
  `isAdmin` boolean NOT NULL,
  `isEmployee` boolean NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;



-- -----------------------------------------------------
-- Table `last_advancedOS`.`service`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `last_advancedOS`.`service` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(450) NOT NULL,
  `category` VARCHAR(450) NOT NULL,
  `image` VARCHAR(450) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `last_advancedOS`.`employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `last_advancedOS`.`employee` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(450) NOT NULL,
  `lastname` VARCHAR(450) NOT NULL,
  `email` VARCHAR(450) NOT NULL,
  `phonenumber` VARCHAR(450) NOT NULL,
  `gender` INT NOT NULL,
  `position` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 110
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `last_advancedOS`.`customer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `last_advancedOS`.`customer` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(450) NOT NULL,
  `lastname` VARCHAR(450) NOT NULL,
  `email` VARCHAR(450) NOT NULL,
  `phonenumber` VARCHAR(450) NOT NULL,
  `gender` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 207
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;



-- -----------------------------------------------------
-- Insert `last_advancedOS`.`user`
-- -----------------------------------------------------
insert into `user` values ('1', 'huy', '123', 1,0),
('2', 'giang', '123', 1,0),
('3', 'ai', '123', 1,0),
('4', 'hoa', '123', 1,0),
('5', 'hohuy', '123', 0,1),
('6', 'giangnguyen', '123', 0,1),
('7', 'kimai', '123', 0,1),
('8', 'myhoa', '123', 0,1);

-- -----------------------------------------------------
-- Insert `last_advancedOS`.`service`
-- -----------------------------------------------------
insert into service values ('1', 'Laundry service', 'Inside house', 'laundry.jpg'),
('2', 'Restaurant', 'Serving food', 'restaurant.jpg'),
('3', 'Fitness center', 'Heatlh', 'fitness.jpg'),
('4', 'Spa', 'Make beautiful', 'spa.jpg'),
('5', 'Bar', 'Entertainment', 'bar.jpg'),
('6', 'Tennis', 'Outdoor sports', 'tennis.jpg'),
('7', 'Pool', 'Heatlh and take a shower', 'pool.jpg'),
('8', 'Casino', 'Entertainment', 'casino.jpg');

-- -----------------------------------------------------
-- Insert `last_advancedOS`.`employee`
-- -----------------------------------------------------
insert into employee values (100,'Hồ Trần Quốc','Huy','100@1','123456789',1,1),
(101,'Nguyễn Thị Thanh','Giang','101@1','223456789',0,1),
(102,'Đặng Thị Kim','Ái','102@1','323456789',0,1),
(103,'Huỳnh Thị Mỹ','Hoa','103@1','323456789',0,1),
(104,'ho','huy','103@1','423456789',1,0),
(105,'nguyen','giang','104@1','523456789',0,0),
(106,'dang','ai','104@1','523456789',0,0),
(107,'my','hoa','105@1','623456789',0,0);

-- -----------------------------------------------------
-- Insert `last_advancedOS`.`customer`
-- -----------------------------------------------------
insert into customer values (200,'Hồ Trần Quốc','Huy','100@1','123456789',1),
(201,'Nguyễn Thị Thanh','Giang','101@1','223456789',0),
(202,'Đặng Thị Kim','Ái','102@1','323456789',0),
(203,'Huỳnh Thị Mỹ','Hoa','103@1','323456789',0),
(204,'ho','huy','103@1','423456789',1),
(205,'nguyen','giang','104@1','523456789',0),
(206,'dang','ai','104@1','523456789',0),
(207,'my','hoa','105@1','623456789',0);




