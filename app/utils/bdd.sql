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

CREATE TABLE IF NOT EXISTS dealer (
  DealerId INTEGER PRIMARY KEY,
  brand TEXT NOT NULL,
  contact_name TEXT NOT NULL,
  address TEXT NOT NULL,
  phone INTEGER NOT NULL,
  mail TEXT NOT NULL,
  CarsId INTEGER NOT NULL,
  FOREIGN KEY (CarsId) REFERENCES cars(CarsId)
);

INSERT INTO dealer (brand, contact_name, address, phone, mail, CarsId)
VALUES
('Peugeot', 'Jean Dupont', '2 Rue de la Paix, 75001 Paris', 1234567890, 'jeandupont@peugeot.fr', 2),
('Renault', 'Sophie Martin', '15 Avenue des Champs-Élysées, 75008 Paris', 9876543210, 'sophiemartin@renault.fr', 3),
('Citroën', 'Pierre Dubois', '50 Avenue Montaigne, 75008 Paris', 1234567890, 'pierredubois@citroen.fr', 1);

CREATE TABLE IF NOT EXISTS driver (
  DriverId INTEGER PRIMARY KEY,
  firstname TEXT NOT NULL,
  lastname TEXT NOT NULL,
  age TEXT NOT NULL,
  address TEXT NOT NULL,
  phone INTEGER NOT NULL,
  mail TEXT NOT NULL,
  licence_number INTEGER NOT NULL
);

INSERT INTO driver (firstname, lastname, age, address, phone, mail, licence_number)
VALUES
('Jean', 'Dupont', '25', '14 rue des Lilas, 75010 Paris', 654321987, 'jean.dupont@mail.com', 123456),
('Marie', 'Martin', '32', '26 avenue des Champs-Élysées, 75008 Paris', 678901234, 'marie.martin@mail.com', 234567),
('Pierre', 'Durand', '45', '2 rue de la Paix, 75001 Paris', 687654321, 'pierre.durand@mail.com', 345678);

CREATE TABLE IF NOT EXISTS order_table (
  OrderId INTEGER PRIMARY KEY,
  order_date TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,
  rent_start TEXT NOT NULL,
  rent_end TEXT NOT NULL,
  km_start INTEGER NOT NULL,
  km_end INTEGER NOT NULL,
  comments TEXT,
  status INTEGER NOT NULL,
  DriverId INTEGER NOT NULL,
  CarsId INTEGER NOT NULL,
  FOREIGN KEY (DriverId) REFERENCES driver(DriverId),
  FOREIGN KEY (CarsId) REFERENCES cars(CarsId)
);

INSERT INTO order_table (rent_start, rent_end, km_start, km_end, comments, status, DriverId, CarsId)
VALUES
('2023-04-10', '2023-04-12', 100, 200, 'Commentaires sur la première commande', 0, 1, 1),
('2023-04-11', '2023-04-13', 200, 300, 'Commentaires sur la deuxième commande', 1, 2, 2),
('2023-04-12', '2023-04-14', 300, 400, 'Commentaires sur la troisième commande', 2, 3, 3);
