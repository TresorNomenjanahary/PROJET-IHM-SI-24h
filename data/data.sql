CREATE TABLE Admin
(
    idAdmin VARCHAR(10) NOT NULL PRIMARY KEY,
    loginAdmin VARCHAR(16) NOT NULL,
    mdpAdmin VARCHAR(8) NOT NULL
)Engine=InnoDB;


INSERT INTO Admin (idAdmin,loginAdmin,mdpadmin) values 
('Admin01','lolo@gmail.com','0000'),
('Admin02','mamy2@gmail.com','123456');

create table Categorie(
    idCategorie int not null auto_increment,
    designation char(30),
    PRIMARY KEY(idCategorie)
);


create table Produit(
    idProduit int not null auto_increment,
    idCategorie int not null,
    codeProduit integer,
    prixUnitaire double,
    designation char(20),
    image char(10),
    primary key(idProduit),
    foreign key(idCategorie) references Categorie(idCategorie)
);

create table Stock(
    idStock int not null auto_increment,
    idProduit int not null,
    quantite integer,
    primary key(idStock),
    foreign key (idProduit) references Produit(idProduit)
);

create table Caisse(
    idCaisse int not null auto_increment,
    nom varchar(15),
    primary key(idCaisse)
);

create table Achat(
    idAchat int not null auto_increment,
    idCaisse int not null,
    idStock int not null,
    quantite integer,
    primary key(idAchat),
    foreign key(idCaisse) references Caisse(idCaisse),
    foreign key (idStock) references Stock(idStock)
);

create table Client(
    idClient int not null auto_increment,
    nom char(30),
    primary key(idClient)
);

create table Vente(
    idVente int not null auto_increment,
    idAchat int not null,
    idClient int not null,
    primary key(idVente),
    foreign key (idAchat) references Achat(idAchat),
    foreign key(idClient) references Client (idClient)
);

INSERT INTO Categorie(idCategorie,designation) VALUES (1,'Divers');
INSERT INTO Categorie(idCategorie,designation) VALUES (2,'Boissons'); 
INSERT INTO Categorie(idCategorie,designation) VALUES (3,'Legumes');

INSERT INTO Produit(idProduit,idCategorie,codeProduit,prixUnitaire,designation,image) VALUES 
(null,3,010,200,'ail','ail.jpg'),
(null,1,012,800,'Kit règles','divers01.jpg'),
(null,1,013,600,'Colle UHU','divers02.png'),
(null,1,014,2400,'Cahier Oxford','divers03.png'),
(null,1,015,1000,'Stylo 4','divers04.png'),
(null,1,016,81000,'Cartable Eastpak','divers05.png'),
(null,2,020,800,'Eau vive','eau01.jpg'),
(null,2,021,3400,'Ceres Mangue','jus01.jpg'),
(null,2,022,3000,'Fanta Orange','jus02.jpg'),
(null,2,024,19900,'Dzama Rhum','jus03.jpg'),
(null,2,025,12000,'Namaqua','jus04.jpg'),
(null,3,030,700,'Oignon','oignon.jpg'),
(null,3,031,800,'Patate','patate.jpg'),
(null,3,032,720,'Poivron','poivron.jpg'),
(null,3,033,600,'Tomate','tomate.jpg');
