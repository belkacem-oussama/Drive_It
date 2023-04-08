DROP DATABASE IF EXISTS `drive_it`;
CREATE DATABASE `drive_it` DEFAULT CHARACTER SET utf8mb4;
USE `drive_it`;

DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registration` varchar(10) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `caution` int(6) NOT NULL,
  `price` int(50) NOT NULL,
  `availabilty` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `cars` (`registration`,`brand`,`model`,`year`,`caution`,`price`,`availability`)
VALUES
('FB-046-BQ','Citroën','C3',2019,5000,200,1),
('AB-123-CD','Peugeot','308',2018,5500,25000,1),
('EF-456-FG','Renault','Clio',2020,6000,22000,0),
('GH-789-HI','Toyota','Yaris',2017,6500,18000,1),
('JK-012-KL','Volkswagen','Golf',2016,7000,30000,0),
('MN-345-NO','Audi','A3',2021,7500,35000,1),
('PQ-678-QP','Ford','Focus',2015,8000,17000,1),
('RS-901-ST','BMW','X1',2019,8500,40000,0),
('UV-234-VW','Mercedes-Benz','C-Class',2020,9000,45000,1),
('XY-567-YZ','Fiat','500',2018,9500,15000,0),
('ZA-890-AB','Kia','Sportage',2017,10000,28000,1),
('BC-123-CD','Hyundai','Tucson',2019,10500,32000,0),
('DE-456-EF','Volvo','XC40',2021,11000,50000,1),
('FG-789-GH','Honda','Civic',2016,11500,22000,0),
('HI-012-IJ','Mazda','CX-5',2018,12000,35000,1),
('KL-345-LM','Nissan','Qashqai',2020,12500,28000,0),
('NO-678-OP','Seat','Leon',2015,13000,18000,1),
('PQ-901-QR','Skoda','Octavia',2017,13500,25000,0),
('ST-234-TU','Subaru','Impreza',2019,14000,30000,1),
('VW-567-WX','Jeep','Wrangler',2016,14500,40000,0);

DROP TABLE IF EXISTS `dealer`;
CREATE TABLE `dealer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(100) NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `dealer`(`brand`,`contact_name`,`address`,`phone`,`mail`)
VALUES
('Peugeot','Jean Dupont','2 Rue de la Paix, 75001 Paris',0123456789,'jeandupont@peugeot.fr'),
('Renault','Sophie Martin','15 Avenue des Champs-Élysées, 75008 Paris',0987654321,'sophiemartin@renault.fr'),
('Citroën','Pierre Dubois','50 Avenue Montaigne, 75008 Paris',0123456789,'pierredubois@citroen.fr'),
('Toyota','Emilie Leroy','19 Rue de la Convention, 75015 Paris',0987654321,'emilieleroy@toyota.fr'),
('Volkswagen','Lucie Dumas','9 Rue de la Pompe, 75116 Paris',0123456789,'luciedumas@volkswagen.fr'),
('BMW','Marc Dupuis','27 Rue du Faubourg Saint-Honoré, 75008 Paris',0987654321,'marcdupuis@bmw.fr'),
('Mercedes-Benz','Anne Dubois','35 Rue de la Boétie, 75008 Paris',0123456789,'annedubois@mercedes-benz.fr'),
('Audi','Lucie Martin','77 Rue de Rivoli, 75001 Paris',0987654321,'luciemartin@audi.fr'),
('Ford','Pierre Leroy','3 Rue des Pyramides, 75001 Paris',0123456789,'pierreleroy@ford.fr'),
('Fiat','Sophie Dupont','25 Rue du Cherche-Midi, 75006 Paris',0987654321,'sophiedupont@fiat.fr'),
('Opel','Jean Martin','16 Rue de la Pompe, 75116 Paris',0123456789,'jeanmartin@opel.fr'),
('Volvo','Emilie Dubois','9 Rue de Sèvres, 75006 Paris',0987654321,'emiliedubois@volvo.fr'),
('Hyundai','Lucie Leroy','17 Rue de la Roquette, 75011 Paris',0123456789,'lucieleroy@hyundai.fr'),
('Kia','Marc Martin','18 Avenue de Wagram, 75008 Paris',0987654321,'marcmartin@kia.fr'),
('Mazda','Anne Dupuis','29 Rue de Lisbonne, 75008 Paris',0123456789,'annedupuis@mazda.fr'),
('Nissan','Pierre Martin','15 Rue de la Convention, 75015 Paris',0987654321,'pierremartin@nissan.fr'),
('Seat','Sophie Leroy','22 Rue de la Pompe, 75116 Paris',0123456789,'sophieleroy@seat.fr'),
('Skoda','Jean Dupuis','36 Rue de la Roquette, 75011 Paris',0987654321,'jeandupuis@skoda.fr'),
('Subaru','Lucie Martin','67 Rue de la Convention, 75015 Paris',0123456789,'luciemartin@subaru.fr'),
('Suzuki','Pierre Leroy','41 Rue de la Pompe, 75116 Paris',0987654321,'pierreleroy@suzuki.fr');

DROP TABLE IF EXISTS `driver`;
CREATE TABLE `driver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` varchar(5) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(100) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `licence_number` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `driver`(`firstname`,`lastname`,`age`,`address`,`phone`,`mail`,`licence_number`) VALUES
('Jean','Dupont','25','14 rue des Lilas, 75010 Paris',0654321987,'jean.dupont@mail.com',123456),
('Marie','Martin','32','26 avenue des Champs-Élysées, 75008 Paris',0678901234,'marie.martin@mail.com',234567),
('Pierre','Durand','45','2 rue de la Paix, 75001 Paris',0687654321,'pierre.durand@mail.com',345678),
('Sophie','Leroy','28','5 avenue de la République, 75011 Paris',0643219876,'sophie.leroy@mail.com',456789),
('Alexandre','Dubois','35','17 rue du Faubourg Saint-Antoine, 75012 Paris',0678902345,'alexandre.dubois@mail.com',567890),
('Emilie','Girard','27','10 rue de Belleville, 75020 Paris',0623456789,'emilie.girard@mail.com',678901),
('Lucas','Rousseau','31','78 avenue des Gobelins, 75013 Paris',0678903456,'lucas.rousseau@mail.com',789012),
('Léa','Moreau','26','6 rue de la Roquette, 75011 Paris',0654321098,'lea.moreau@mail.com',890123),
('Antoine','Garcia','29','43 rue de la Chapelle, 75018 Paris',0678904567,'antoine.garcia@mail.com',901234),
('Camille','Fournier','33','1 rue de la Convention, 75015 Paris',0632198765,'camille.fournier@mail.com',123789),
('Thomas','Lefebvre','28','15 rue de la Pompe, 75016 Paris',0689023456,'thomas.lefebvre@mail.com',234890),
('Marine','Fontaine','30','7 avenue des Ternes, 75017 Paris',0678903219,'marine.fontaine@mail.com',345901),
('Nicolas','Henry','37','23 rue du Temple, 75004 Paris',0645678901,'nicolas.henry@mail.com',456012),
('Charlotte','Masson','24','12 rue Saint-Antoine, 75004 Paris',0632198765,'charlotte.masson@mail.com',567123),
('Romain','Chevalier','26','3 avenue de Clichy, 75017 Paris',0678902345,'romain.chevalier@mail.com',678234),
('Laura','Aubry','31','34 rue du Bac, 75007 Paris',0643219087,'laura.aubry@mail.com',789345),
('Guillaume','Renaud','29','16 rue de la Verrerie, 75004 Paris',0689023456,'guillaume.renaud@mail.com',890456),
('Julie','Morel','27','25 rue de la Roquette, 75011 Paris',0678901098,'julie.morel@mail.com',901567),
('Benjamin','Fernandez','32','8 avenue de la Grande Armée, 75017 Paris',0632198765,'benjamin.fernandez@mail.com',123890);

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `rent_start` date NOT NULL,
  `rent_end` date NOT NULL,
  `km_start` int(10) NOT NULL,
  `km_end` int(10) NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `order` (`rent_start`, `rent_end`, `km_start`, `km_end`, `comments`)
VALUES
('2023-04-10', '2023-04-12', 100, 200, 'Commentaires sur la première commande'),
('2023-04-11', '2023-04-13', 200, 300, 'Commentaires sur la deuxième commande'),
('2023-04-12', '2023-04-14', 300, 400, 'Commentaires sur la troisième commande'),
('2023-04-13', '2023-04-15', 400, 500, 'Commentaires sur la quatrième commande'),
('2023-04-14', '2023-04-16', 500, 600, 'Commentaires sur la cinquième commande'),
('2023-04-15', '2023-04-17', 600, 700, 'Commentaires sur la sixième commande'),
('2023-04-16', '2023-04-18', 700, 800, 'Commentaires sur la septième commande'),
('2023-04-17', '2023-04-19', 800, 900, 'Commentaires sur la huitième commande'),
('2023-04-18', '2023-04-20', 900, 1000, 'Commentaires sur la neuvième commande'),
('2023-04-19', '2023-04-21', 1000, 1100, 'Commentaires sur la dixième commande');