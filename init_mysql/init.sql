use leProjet;

-- creer une table des restaurants

create table restaurants
(
    nom       varchar(32)  NOT NULL,
    adress    varchar(128) NOT NULL,
    img__Path varchar(64)  NULL DEFAULT '',
    note      DOUBLE NOT NULL DEFAULT 0,
    restaurantID int AUTO_INCREMENT ,
    PRIMARY KEY (restaurantID)
);

create table users
(
    identifiant       varchar(32)  NOT NULL,
    mail    varchar(64) NOT NULL,
    isAdmin      INT(1) NOT NULL DEFAULT 0,
    password varchar(1024) NOT NULL,
    userID int AUTO_INCREMENT,
    PRIMARY KEY (userID)
);

create table avis(
    restaurantId int,
    userAvisId int,
    avis varchar(1024) DEFAULT NULL,
    note DOUBLE DEFAULT NULL,
    isReportedBinary INT DEFAULT 0,
    FOREIGN KEY(restaurantId) REFERENCES restaurants(restaurantID),
    FOREIGN KEY(userAvisId) REFERENCES users(userID)
);

-- SET @projetPath = '/Users/nima/dev/leProjet';
-- SELECT @projetPath;

-- on commence à remplir notre table par nos restus

INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Fenêtre Sur Cour', '10 Rue Gabriel Lamé, 75012 Paris',
    '/assets/img/FenetreSurCour.png',
    4.3
    );

INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Kaori', '55 Cr Saint-Emilion, 75012 Paris',
    '/assets/img/Kaori.png',
    3.7
    );

INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Jour', '45 Cr Saint-Emilion, 75012 Paris',
    '/assets/img/Jour.png',
    4.2
    );

INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Le Paradis Du Fruit', '34 Cr Saint-Emilion. 75012 Paris',
    '/assets/img/LeParadisDuFruit.png',
    4.1
    );


INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Fresh Burritos Bercy Village', '40 Rue François Truffaut, 75012 Paris',
    '/assets/img/FreshBurritos.png',
    4.1
    );


INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Hippopotamus', '28 Rue François Truffaut, 75012 Paris',
    '/assets/img/Hippopotamus.png',
    3.7
    );

INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Five Guys Bercy', '42 Cr Saint-Emilion, 75012 Paris',
    '/assets/img/FiveGuys.png',
    3.8
    );


INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Roberta - Bercy Village', '30 Cr Saint-Emilion, 75012 Paris',
    '/assets/img/Roberta.png',
    3.7
    );


-- on vas creer deux admins

INSERT INTO users(identifiant, mail, isAdmin, password) value (
    'nima', 'test@gmail.com', 1, '$2y$10$F434W58qJwgPR4uHLJBmqOZCEWJjCW8cDdMN9MH/bEiVtKqPCafae'
    );

INSERT INTO users(identifiant, mail, isAdmin, password) value (
    'admin', 'admin@gmail.com', 1, '$2y$10$F434W58qJwgPR4uHLJBmqOZCEWJjCW8cDdMN9MH/bEiVtKqPCafae'
    );

-- on vas creer qq utilisateurs normals pour stocker qq avis

INSERT INTO users(identifiant, mail, isAdmin, password) value (
    'emily', 'emily@gmail.com', 0, '$2y$10$fCz/8DwwoHy88rhwAjJiM.fr5nzjUYaeRF4ii.1L/YMWzOIveuPi.'
    );

INSERT INTO users(identifiant, mail, isAdmin, password) value (
    'sara', 'sara@gmail.com', 0, '$2y$10$fCz/8DwwoHy88rhwAjJiM.fr5nzjUYaeRF4ii.1L/YMWzOIveuPi.'
    );

INSERT INTO users(identifiant, mail, isAdmin, password) value (
    'pierre', 'pierre@gmail.com', 0, '$2y$10$fCz/8DwwoHy88rhwAjJiM.fr5nzjUYaeRF4ii.1L/YMWzOIveuPi.'
    );

-- on vas creer qq avis pour chaque resto et par chaque user


INSERT INTO leProjet.avis (restaurantId, userAvisId, avis, note, isReportedBinary)
VALUES (1, 3, 'tres null', 2, 0);

INSERT INTO leProjet.avis (restaurantId, userAvisId, avis, note, isReportedBinary)
VALUES (2, 1, 'je reviens pas', 3, 0);

INSERT INTO leProjet.avis (restaurantId, userAvisId, avis, note, isReportedBinary)
VALUES (4, 4, 'horrible', 2, 0);

INSERT INTO leProjet.avis (restaurantId, userAvisId, avis, note, isReportedBinary)
VALUES (5, 5, 'je recommande ce resto', 5, 0);

INSERT INTO leProjet.avis (restaurantId, userAvisId, avis, note, isReportedBinary)
VALUES (6, 2, 'pas mal', 2, 0);

INSERT INTO leProjet.avis (restaurantId, userAvisId, avis, note, isReportedBinary)
VALUES (1, 1, 'tres bien', 5, 0);

INSERT INTO leProjet.avis (restaurantId, userAvisId, avis, note, isReportedBinary)
VALUES (2, 1, 'propre', 4, 0);

INSERT INTO leProjet.avis (restaurantId, userAvisId, avis, note, isReportedBinary)
VALUES (3, 4, 'normale', 2, 0);

INSERT INTO leProjet.avis (restaurantId, userAvisId, avis, note, isReportedBinary)
VALUES (5, 3, 'trop salé', 1, 0);

INSERT INTO leProjet.avis (restaurantId, userAvisId, avis, note, isReportedBinary)
VALUES (7, 5, 'je recommande, tres propre', 4, 0);



