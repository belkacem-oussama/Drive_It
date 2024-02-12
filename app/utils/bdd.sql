-- CREATE DATABASE --
DROP DATABASE IF EXISTS `drive_it`;
CREATE DATABASE `drive_it` DEFAULT CHARACTER SET utf8mb4;
USE `drive_it`;

-- CREATE USER WITH ALL PRIVILEGES
GRANT ALL PRIVILEGES ON drive_it.* TO 'drive_it'@'db_drive_it' IDENTIFIED BY 'password' WITH ALL OPTIONS;

-- TABLE CARS --
DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `CarsId` int(11) NOT NULL AUTO_INCREMENT,
  `registration` varchar(10) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `caution` int(6) NOT NULL,
  `price` int(50) NOT NULL,
  `availability` int(1) NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`CarsId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `cars` (`registration`, `brand`, `model`, `year`, `caution`, `price`, `availability`,`power`)
VALUES
('FB-046-BQ', 'Citroën', 'C3', 2019, 5000, 200, 1,92),
('AB-123-CD', 'Peugeot', '308', 2018, 5500, 25000, 1,110),
('EF-456-FG', 'Renault', 'Clio', 2020, 6000, 22000, 0,85),
('GH-789-HI', 'Toyota', 'Yaris', 2017, 6500, 18000, 1,75);

-- TABLE DEALER --
DROP TABLE IF EXISTS `dealer`;
CREATE TABLE `dealer` (
  `DealerId` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `CarsId` int(11) NOT NULL,
  PRIMARY KEY (`DealerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `dealer` (`brand`, `contact_name`, `address`, `phone`, `mail`, `CarsId`)
VALUES
('Peugeot', 'Jean Dupont', '2 Rue de la Paix, 75001 Paris', '0123456789', 'jeandupont@peugeot.fr', 2),
('Renault', 'Sophie Martin', '15 Avenue des Champs-Élysées, 75008 Paris', '0987654321', 'sophiemartin@renault.fr', 3),
('Citroën', 'Pierre Dubois', '50 Avenue Montaigne, 75008 Paris', '0123456789', 'pierredubois@citroen.fr', 1);

-- TABLE DRIVER --
DROP TABLE IF EXISTS `driver`;
CREATE TABLE `driver` (
  `DriverId` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` varchar(5) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `licence_number` varchar(11) NOT NULL,
  PRIMARY KEY (`DriverId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `driver` (`firstname`, `lastname`, `age`, `address`, `phone`, `mail`, `licence_number`)
VALUES
('Jean', 'Dupont', '25', '14 rue des Lilas, 75010 Paris', '0654321987', 'jean.dupont@mail.com', '123456'),
('Marie', 'Martin', '32', '26 avenue des Champs-Élysées, 75008 Paris', '0678901234', 'marie.martin@mail.com', '234567'),
('Pierre', 'Durand', '45', '2 rue de la Paix, 75001 Paris', '0687654321', 'pierre.durand@mail.com', '345678');

-- TABLE ORDERS --
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `OrderId` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rent_start` date NOT NULL,
  `rent_end` date NOT NULL,
  `km_start` int(10) NOT NULL,
  `km_end` int(10) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `DriverId` int(11) NOT NULL,
  `CarsId` int(11) NOT NULL,
  PRIMARY KEY (`OrderId`),
  FOREIGN KEY (`DriverId`) REFERENCES `driver`(`DriverId`),
  FOREIGN KEY (`CarsId`) REFERENCES `cars`(`CarsId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `orders` (`rent_start`, `rent_end`, `km_start`, `km_end`, `comments`, `status`, `DriverId`, `CarsId`)
VALUES
('2023-04-10', '2023-04-12', 100, 200, 'Commentaires sur la première commande', 0, 1, 1),
('2023-04-11', '2023-04-13', 200, 300, 'Commentaires sur la deuxième commande', 1, 2, 2),
('2023-04-12', '2023-04-14', 300, 400, 'Commentaires sur la troisième commande', 2, 3, 3);