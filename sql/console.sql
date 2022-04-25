use leProjet;

-- creer une table des restaurants

create table restaurants
(
    nom       varchar(32)  NOT NULL,
    adress    varchar(128) NOT NULL,
    img__Path varchar(64)  NULL DEFAULT '',
    note      INT(1)
    -- on vas ajouter et linker les avis plus tard
);

-- j'ai oublié mettre 0 comme note default donc

ALTER TABLE restaurants modify COLUMN note DOUBLE NOT NULL DEFAULT 0;


SET @projetPath = '/Users/nima/dev/leProjet';

SELECT @projetPath;

-- on commence à remplir notre table par nos restus

INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Fenêtre Sur Cour', '10 Rue Gabriel Lamé, 75012 Paris',
    concat(@projetPath,'/assets/img/FenetreSurCour.png'),
    4.3
    );

INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Kaori', '55 Cr Saint-Emilion, 75012 Paris',
    concat(@projetPath,'/assets/img/Kaori.png'),
    3.7
    );

INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Jour', '45 Cr Saint-Emilion, 75012 Paris',
    concat(@projetPath,'/assets/img/Jour.png'),
    4.2
    );

INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Le Paradis Du Fruit', '34 Cr Saint-Emilion. 75012 Paris',
    concat(@projetPath,'/assets/img/LeParadisDuFruit.png'),
    4.1
    );


INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Fresh Burritos Bercy Village', '40 Rue François Truffaut, 75012 Paris',
    concat(@projetPath,'/assets/img/FreshBurritos.png'),
    4.1
    );


INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Hippopotamus', '28 Rue François Truffaut, 75012 Paris',
    concat(@projetPath,'/assets/img/Hippopotamus.png'),
    3.7
    );

INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Five Guys Bercy', '42 Cr Saint-Emilion, 75012 Paris',
    concat(@projetPath,'/assets/img/FiveGuys.png'),
    3.8
    );


INSERT INTO restaurants (nom, adress, img__Path, note) value(
    'Roberta - Bercy Village', '30 Cr Saint-Emilion, 75012 Paris',
    concat(@projetPath,'/assets/img/Roberta.png'),
    3.7
    );



show tables ;
select * from restaurants;