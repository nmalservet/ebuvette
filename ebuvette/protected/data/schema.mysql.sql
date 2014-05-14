CREATE TABLE user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);

INSERT INTO user (username, password, email) VALUES ('franco', 'franco', 'franco');

CREATE TABLE article (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    prix_de_vente_unitaire DECIMAL(6,2) NOT NULL,
    nom VARCHAR(128) NOT NULL,
    cout_unitaire DECIMAL(6,2) NOT NULL,
    nombre_unite integer not null,
    nombre_restant integer not null,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO article (prix_de_vente_unitaire, nom, cout_unitaire,nombre_unite,nombre_restant) VALUES ('1.5', 'biere jupiler', '0.5','24','24');
INSERT INTO article (prix_de_vente_unitaire, nom, cout_unitaire,nombre_unite,nombre_restant) VALUES ('0.5', 'picon pure', '0.28','24','24');

CREATE TABLE vente (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    article_id integer NOT NULL,
    user_id integer not null,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO vente (article_id,user_id)values( 1, 1);

CREATE TABLE retrait (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    montant decimal(6,2) NOT NULL,
    user_id integer not null,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

insert into retrait ( montant, user_id) values('50',1);

CREATE TABLE apport (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    montant decimal(6,2) NOT NULL,
    user_id integer not null,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

insert into apport ( montant, user_id) values('50',1);