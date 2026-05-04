USE BDRoche

INSERT INTO TblRoche (idLieu, nom, nomLieu, idDecouverte, description1, categorie, valeurDollars) VALUES
(1,'Basalte','Islande',1,'Roche volcanique sombre issue du refroidissement rapide de la lave','Magmatique',15.50),
(1,'Obsidienne','Japon',2,'Verre volcanique naturel à surface lisse et brillante','Magmatique',28.00),
(1,'Andesite','Chili',3,'Roche volcanique intermédiaire commune dans les arcs volcaniques','Magmatique',18.20),
(1,'Rhyolite','USA',4,'Roche volcanique riche en silice de couleur claire','Magmatique',17.80),
(1,'Scorie','Mexique',5,'Roche volcanique poreuse contenant des bulles de gaz','Magmatique',12.40),

(2,'Calcaire marin','Océan Atlantique',6,'Roche sédimentaire formée de coquilles marines','Sedimentaire',11.30),
(2,'Craie','France',7,'Calcaire blanc très fin formé de micro-organismes','Sedimentaire',9.20),
(2,'Grès marin','Océan Pacifique',8,'Roche composée de grains de sable cimentés','Sedimentaire',10.40),
(2,'Argilite','Océan Indien',9,'Roche fine issue de la compaction de l’argile','Sedimentaire',8.10),
(2,'Marnes','Belgique',10,'Mélange naturel de calcaire et d’argile','Sedimentaire',9.60),

(3,'Météorite ferreuse','Sahara',11,'Roche extraterrestre riche en fer et nickel','Meteorique',80.00),
(3,'Chondrite','Antarctique',12,'Météorite primitive contenant des chondres','Meteorique',95.00),
(3,'Tektite','Australie',13,'Verre naturel formé par impact météoritique','Meteorique',85.50),
(3,'Météorite pierreuse','Mongolie',14,'Composée principalement de silicates','Meteorique',78.30),
(3,'Sidérite météoritique','Russie',15,'Météorite métallique dense','Meteorique',88.00),

(4,'Grès désertique','Maroc',16,'Roche sableuse formée en milieu aride','Sedimentaire',12.00),
(4,'Conglomérat','Égypte',17,'Roche composée de galets cimentés','Sedimentaire',13.50),
(4,'Évaporite','Arabie Saoudite',18,'Roche saline issue de l’évaporation','Sedimentaire',10.80),
(4,'Gypse désertique','Tunisie',19,'Cristaux formés en climat sec','Mineral',9.70),
(4,'Sable fossilisé','Namibie',20,'Ancien sable transformé en roche','Sedimentaire',11.10),

(5,'Granite','Canada',21,'Roche magmatique plutonique très dure','Magmatique',22.00),
(5,'Diorite','Suisse',22,'Roche intrusive intermédiaire','Magmatique',20.60),
(5,'Gabbro','Italie',23,'Roche magmatique sombre riche en fer','Magmatique',19.30),
(5,'Pegmatite','Norvège',24,'Roche à très gros cristaux','Magmatique',24.00),
(5,'Syénite','Brésil',25,'Roche proche du granite mais pauvre en quartz','Magmatique',21.50),

(6,'Tillite','Antarctique',26,'Roche glaciaire issue de dépôts anciens','Sedimentaire',14.70),
(6,'Glace compacte','Groenland',27,'Accumulation dense de glace','Autre',6.00),
(6,'Neige compressée','Sibérie',28,'Formation intermédiaire vers la glace','Autre',5.20),
(6,'Bloc glaciaire','Alaska',29,'Fragment de glacier solidifié','Autre',6.50),
(6,'Roche striée glaciaire','Canada',30,'Roche marquée par l’érosion glaciaire','Sedimentaire',13.90),

(7,'Charbon','Allemagne',31,'Roche organique riche en carbone','Organique',8.90),
(7,'Lignite','Pologne',32,'Charbon brun à faible teneur énergétique','Organique',7.80),
(7,'Tourbe','Irlande',33,'Accumulation végétale partiellement décomposée','Organique',6.20),
(7,'Schiste organique','USA',34,'Roche riche en matière organique','Sedimentaire',9.40),
(7,'Houille','France',35,'Charbon dur utilisé comme combustible','Organique',10.10),

(8,'Halite','USA',36,'Cristal de sel gemme','Mineral',6.10),
(8,'Gypse','Espagne',37,'Roche sulfate utilisée en construction','Mineral',7.20),
(8,'Anhydrite','Turquie',38,'Minéral proche du gypse sans eau','Mineral',6.90),
(8,'Quartz massif','Brésil',39,'Cristal très dur et abondant','Mineral',12.50),
(8,'Calcite','Mexique',40,'Minéral carbonaté commun','Mineral',8.60),

(9,'Calcaire coquillier','Italie',41,'Roche riche en fragments de coquilles','Sedimentaire',11.90),
(9,'Dolomie','Croatie',42,'Roche carbonatée riche en magnésium','Sedimentaire',12.40),
(9,'Sable compact côtier','Australie',43,'Dépôt marin consolidé','Sedimentaire',9.00),
(9,'Calcarenite','Grèce',44,'Sable calcaire durci','Sedimentaire',10.10),
(9,'Roche corallienne','Maldives',45,'Issue de récifs coralliens','Sedimentaire',13.20),

(10,'Argile rouge','Chine',46,'Roche fine riche en oxyde de fer','Sedimentaire',8.70),
(10,'Loess','France',47,'Dépôt éolien très fin','Sedimentaire',7.90),
(10,'Argile bleue','Russie',48,'Argile rare et dense','Sedimentaire',9.30),
(10,'Siltite','Pays-Bas',49,'Roche formée de limon compacté','Sedimentaire',8.40),
(10,'Latérite','Inde',50,'Roche riche en fer formée en climat tropical','Sedimentaire',10.60);

INSERT INTO TblHumain (nomHumain, prenomHumain, origine, etatDeHumain, anneeNaissance, numeroTel) VALUES
('Hutton','James','Ecosse',0,'1726-06-03',NULL),
('Lyell','Charles','Angleterre',0,'1797-11-14',NULL),
('Smith','William','Angleterre',0,'1769-03-23',NULL),
('Wegener','Alfred','Allemagne',0,'1880-11-01',NULL),
('Bowen','Norman','Canada',0,'1887-06-21',NULL),
('Mohorovicic','Andrija','Croatie',0,'1857-01-23',NULL),
('Holmes','Arthur','Angleterre',0,'1890-01-14',NULL),
('Dana','James','USA',0,'1813-02-12',NULL),
('Goldschmidt','Victor','Norvege',0,'1888-01-27',NULL),
('Hess','Harry','USA',0,'1906-05-24',NULL),
('Agassiz','Louis','Suisse',0,'1807-05-28',NULL),
('Barrell','Joseph','USA',0,'1869-12-15',NULL),
('Daly','Reginald','Canada',0,'1871-05-19',NULL),
('Suess','Eduard','Autriche',0,'1831-08-20',NULL),
('Lehmann','Inge','Danemark',0,'1888-05-13',NULL),
('Ringwood','Ted','Australie',0,'1930-04-19',NULL),
('Wilson','Tuzo','Canada',0,'1908-10-24',NULL),
('McKenzie','Dan','Angleterre',0,'1942-02-11',NULL),
('Morgan','Jason','USA',0,'1935-10-10',NULL),
('Jeffreys','Harold','Angleterre',0,'1891-04-22',NULL),

('Holmes','John','USA',0,'1950-01-01',NULL),
('Clark','Peter','Canada',0,'1960-02-02',NULL),
('Martin','Paul','France',0,'1970-03-03',NULL),
('Lee','David','Coree',0,'1980-04-04',NULL),
('Khan','Ali','Pakistan',0,'1975-05-05',NULL),
('Silva','Maria','Bresil',0,'1985-06-06',NULL),
('Rossi','Luca','Italie',0,'1990-07-07',NULL),
('Nguyen','Anh','Vietnam',0,'1988-08-08',NULL),
('Garcia','Carlos','Espagne',0,'1979-09-09',NULL),
('Ivanov','Sergei','Russie',0,'1982-10-10',NULL),

('Brown','James','USA',0,'1965-11-11',NULL),
('Dubois','Jean','France',0,'1972-12-12',NULL),
('Muller','Hans','Allemagne',0,'1983-01-13',NULL),
('Yamamoto','Kenji','Japon',0,'1991-02-14',NULL),
('Chen','Wei','Chine',0,'1987-03-15',NULL),
('Singh','Raj','Inde',0,'1976-04-16',NULL),
('Ali','Omar','Maroc',0,'1984-05-17',NULL),
('Smith','Anna','USA',0,'1993-06-18',NULL),
('Taylor','Emma','Canada',0,'1995-07-19',NULL),
('Anderson','Liam','USA',0,'1989-08-20',NULL),

('Thomas','Lucas','France',0,'1992-09-21',NULL),
('White','Noah','USA',0,'1981-10-22',NULL),
('Harris','Mia','USA',0,'1996-11-23',NULL),
('Clark','Ethan','Canada',0,'1986-12-24',NULL),
('Lewis','Olivia','Angleterre',0,'1994-01-25',NULL),
('Walker','Ava','USA',0,'1997-02-26',NULL),
('Hall','Sophia','USA',0,'1998-03-27',NULL),
('Allen','Jack','USA',0,'1980-04-28',NULL),
('Young','Ryan','USA',0,'1982-05-29',NULL),
('King','Chloe','Canada',0,'1991-06-30',NULL);

INSERT INTO TblLieu (nomEndroit) VALUES
('Volcanique'),
('Oceanique'),
('Meteorique'),
('Desertique'),
('Montagneux'),
('Glaciaire'),
('Foret'),
('Subterrain'),
('Cotier'),
('Plaine');

INSERT INTO TblDecouverte (idHumain, anneeDecouverte) VALUES
(1,'1785-01-01'),(2,'1830-01-01'),(3,'1815-01-01'),(4,'1912-01-01'),(5,'1928-01-01'),
(6,'1909-01-01'),(7,'1911-01-01'),(8,'1840-01-01'),(9,'1920-01-01'),(10,'1960-01-01'),

(11,'1840-01-01'),(12,'1900-01-01'),(13,'1910-01-01'),(14,'1885-01-01'),(15,'1936-01-01'),
(16,'1965-01-01'),(17,'1963-01-01'),(18,'1968-01-01'),(19,'1970-01-01'),(20,'1925-01-01'),

(21,'2000-01-01'),(22,'2001-01-01'),(23,'2002-01-01'),(24,'2003-01-01'),(25,'2004-01-01'),
(26,'2005-01-01'),(27,'2006-01-01'),(28,'2007-01-01'),(29,'2008-01-01'),(30,'2009-01-01'),

(31,'2010-01-01'),(32,'2011-01-01'),(33,'2012-01-01'),(34,'2013-01-01'),(35,'2014-01-01'),
(36,'2015-01-01'),(37,'2016-01-01'),(38,'2017-01-01'),(39,'2018-01-01'),(40,'2019-01-01'),

(41,'2020-01-01'),(42,'2021-01-01'),(43,'2022-01-01'),(44,'2023-01-01'),(45,'2024-01-01'),
(46,'2025-01-01'),(47,'2026-01-01'),(48,'2027-01-01'),(49,'2028-01-01'),(50,'2029-01-01');



-- Collaborations scientifiques réalistes
INSERT INTO TblDecouverteHumain VALUES
(1,2),(2,1),
(3,4),(4,3),
(5,9),(9,5),
(7,10),(10,7),

(11,12),(12,11),
(13,14),(14,13),
(15,16),(16,15),

(17,18),(18,17),
(19,20),(20,19),

(21,22),(22,23),(23,24),
(24,25),(25,26),

(30,31),(31,32),(32,33),
(40,41),(41,42),

(45,46),(46,47),(47,48),
(48,49),(49,50);

-- Associer chaque roche à son lieu principal (obligatoire)
INSERT INTO TblRocheLieu (idRoche, idLieu) VALUES
(1,1),(2,1),(3,1),(4,1),(5,1),
(6,2),(7,2),(8,2),(9,2),(10,2),
(11,3),(12,3),(13,3),(14,3),(15,3),
(16,4),(17,4),(18,4),(19,4),(20,4),
(21,5),(22,5),(23,5),(24,5),(25,5),
(26,6),(27,6),(28,6),(29,6),(30,6),
(31,7),(32,7),(33,7),(34,7),(35,7),
(36,8),(37,8),(38,8),(39,8),(40,8),
(41,9),(42,9),(43,9),(44,9),(45,9),
(46,10),(47,10),(48,10),(49,10),(50,10);



select * from tblroche

select * from tbllieu


