CREATE TABLE user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);

INSERT INTO user (username, password, email) VALUES ('nicolas', 'val@2014', 'nicolas@malservet.eu');
INSERT INTO user (username, password, email) VALUES ('bernard', 'hand@2014', 'bernardfontainecag@gmail.com');
INSERT INTO user (username, password, email) VALUES ('olivier', 'cag@2014', 'olivier.blanchouin@gmail.com');

CREATE TABLE article (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    prix_de_vente_unitaire DECIMAL(6,2) NOT NULL,
    nom VARCHAR(128) NOT NULL,
    cout_unitaire DECIMAL(6,2) NOT NULL,
    nombre_unite integer not null,
    nombre_restant integer not null,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO article (prix_de_vente_unitaire, nom, cout_unitaire,nombre_unite,nombre_restant) VALUES ('1.5', 'schweppes', '0.5','15','15');
INSERT INTO article (prix_de_vente_unitaire, nom, cout_unitaire,nombre_unite,nombre_restant) VALUES ('0.5', 'picon pure', '0.28','12','12');
INSERT INTO article (prix_de_vente_unitaire, nom, cout_unitaire,nombre_unite,nombre_restant) VALUES ('1.5', 'fanta', '0.5','7','7');
INSERT INTO article (prix_de_vente_unitaire, nom, cout_unitaire,nombre_unite,nombre_restant) VALUES ('1.5', 'orangina', '0.5','2','2');
INSERT INTO article (prix_de_vente_unitaire, nom, cout_unitaire,nombre_unite,nombre_restant) VALUES ('1.5', 'ice tea', '0.5','5','5');

CREATE TABLE vente (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    article_id integer NOT NULL,
    user_id integer not null,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE retrait (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    montant decimal(6,2) NOT NULL,
    user_id integer not null,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE apport (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    montant decimal(6,2) NOT NULL,
    user_id integer not null,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

insert into apport ( montant, user_id) values('70',1);

CREATE TABLE offrande (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    article_id integer NOT NULL,
    user_id integer not null,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);