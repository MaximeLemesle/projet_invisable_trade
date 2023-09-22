-- POSTGRES

CREATE TABLE Users(
   id SERIAL ,
   nom VARCHAR(50)  NOT NULL,
   prenom VARCHAR(50)  NOT NULL,
   email VARCHAR(255)  NOT NULL,
   password VARCHAR(255)  NOT NULL,
   cagnote NUMERIC(15,2)  ,
   PRIMARY KEY(id)
);

CREATE TABLE Objet(
   id SERIAL ,
   nom VARCHAR(255) ,
   description VARCHAR(255) ,
   image VARCHAR(255)  NOT NULL,
   id_users SERIAL  NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_users) REFERENCES Users(id)
);

CREATE TABLE Enchere(
   id SERIAL ,
   date_debut DATE NOT NULL,
   date_fin DATE NOT NULL,
   prix_actuel NUMERIC(15,2)  ,
   prix_initial NUMERIC(15,2)   NOT NULL,
   id_objet SERIAL  NOT NULL,
   id_users SERIAL  NOT NULL,
   PRIMARY KEY(id),
   UNIQUE(id_objet),
   FOREIGN KEY(id_objet) REFERENCES Objet(id),
   FOREIGN KEY(id_users) REFERENCES Users(id)
);


--MYSQL


CREATE TABLE Users(
   id BIGINT AUTO_INCREMENT ,
   nom VARCHAR(50)  NOT NULL,
   prenom VARCHAR(50)  NOT NULL,
   email VARCHAR(255)  NOT NULL,
   password VARCHAR(255)  NOT NULL,
   cagnote NUMERIC(15,2)  ,
   PRIMARY KEY(id)
);

CREATE TABLE Objet(
   id BIGINT AUTO_INCREMENT,
   nom VARCHAR(255) ,
   description VARCHAR(255) ,
   image VARCHAR(255)  NOT NULL,
   id_users BIGINT  NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_users) REFERENCES Users(id)
);

CREATE TABLE Enchere(
   id BIGINT AUTO_INCREMENT,
   date_debut DATE NOT NULL,
   date_fin DATE NOT NULL,
   prix_actuel NUMERIC(15,2)  ,
   prix_initial NUMERIC(15,2)   NOT NULL,
   id_objet BIGINT  NOT NULL,
   id_users BIGINT  NOT NULL,
   PRIMARY KEY(id),
   UNIQUE(id_objet),
   FOREIGN KEY(id_objet) REFERENCES Objet(id),
   FOREIGN KEY(id_users) REFERENCES Users(id)
);
