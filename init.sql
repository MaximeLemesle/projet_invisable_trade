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
   id VARCHAR(255) ,
   date_debut DATE NOT NULL,
   data_fin DATE NOT NULL,
   prix_actuel NUMERIC(15,2)  ,
   prix_initial NUMERIC(15,2)   NOT NULL,
   id_objet SERIAL  NOT NULL,
   id_users SERIAL  NOT NULL,
   PRIMARY KEY(id),
   UNIQUE(id_objet),
   FOREIGN KEY(id_objet) REFERENCES Objet(id),
   FOREIGN KEY(id_users) REFERENCES Users(id)
);
