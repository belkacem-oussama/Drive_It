CREATE TABLE IF NOT EXISTS cars (
  CarsId INTEGER PRIMARY KEY,
  registration TEXT NOT NULL,
  brand TEXT NOT NULL,
  model TEXT NOT NULL,
  year INTEGER NOT NULL,
  caution INTEGER NOT NULL,
  price INTEGER NOT NULL,
  availability INTEGER NOT NULL,
  power INTEGER NOT NULL
);

INSERT INTO cars (registration, brand, model, year, caution, price, availability, power)
VALUES
('FB-046-BQ', 'Citroën', 'C3', 2019, 5000, 200, 1, 92),
('AB-123-CD', 'Peugeot', '308', 2018, 5500, 25000, 1, 110),
('EF-456-FG', 'Renault', 'Clio', 2020, 6000, 22000, 0, 85),
('GH-789-HI', 'Toyota', 'Yaris', 2017, 6500, 18000, 1, 75);

<<<<<<< HEAD
<<<<<<< HEAD
DROP TABLE IF EXISTS `dealer`;
CREATE TABLE `dealer` (
  `DealerId` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `CarsId` int(11) NOT NULL,
  PRIMARY KEY (`DealerId`),
  FOREIGN KEY (`CarsId`) REFERENCES cars(`CarsId`)
=======
DROP TABLE IF EXISTS dealer;
CREATE TABLE dealer (
  DealerId int(11) NOT NULL AUTO_INCREMENT,
  brand varchar(50) NOT NULL,
  contact_name varchar(255) NOT NULL,
  address varchar(255) NOT NULL,
  phone varchar(20) NOT NULL,
  mail varchar(255) NOT NULL,
  CarsId int(11) NOT NULL,
  PRIMARY KEY (DealerId),
  FOREIGN KEY (CarsId) REFERENCES cars(CarsId)
>>>>>>> 16faa4f (get drivers_list)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO dealer (brand, contact_name, address, phone, mail, CarsId)
VALUES
('Peugeot', 'Jean Dupont', '2 Rue de la Paix, 75001 Paris', '0123456789', 'jeandupont@peugeot.fr', 2),
('Renault', 'Sophie Martin', '15 Avenue des Champs-Élysées, 75008 Paris', '0987654321', 'sophiemartin@renault.fr', 3),
('Citroën', 'Pierre Dubois', '50 Avenue Montaigne, 75008 Paris', '0123456789', 'pierredubois@citroen.fr', 1);

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
=======
('Peugeot', 'Jean Dupont', '2 Rue de la Paix, 75001 Paris', '1234567890', 'jeandupont@peugeot.fr', 2),
('Renault', 'Sophie Martin', '15 Avenue des Champs-Élysées, 75008 Paris', '9876543210', 'sophiemartin@renault.fr', 3),
('Citroën', 'Pierre Dubois', '50 Avenue Montaigne, 75008 Paris', '1234567890', 'pierredubois@citroen.fr', 1);

DROP TABLE IF EXISTS driver;
CREATE TABLE driver (
  DriverId int(11) NOT NULL AUTO_INCREMENT,
  firstname varchar(255) NOT NULL,
  lastname varchar(255) NOT NULL,
  age varchar(5) NOT NULL,
  address varchar(255) NOT NULL,
  phone varchar(20) NOT NULL,
  mail varchar(255) NOT NULL,
  licence_number int(100) NOT NULL,
  PRIMARY KEY (DriverId)
>>>>>>> 16faa4f (get drivers_list)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO driver (firstname, lastname, age, address, phone, mail, licence_number)
VALUES
('Jean', 'Dupont', '25', '14 rue des Lilas, 75010 Paris', '0654321987', 'jean.dupont@mail.com', '123456'),
('Marie', 'Martin', '32', '26 avenue des Champs-Élysées, 75008 Paris', '0678901234', 'marie.martin@mail.com', '234567'),
('Pierre', 'Durand', '45', '2 rue de la Paix, 75001 Paris', '0687654321', 'pierre.durand@mail.com', '345678');

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
