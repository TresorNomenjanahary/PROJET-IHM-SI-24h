create table Categorie(
    idCategorie int not null auto_increment,
    designation char(30),
    PRIMARY KEY(idCategorie)
);


create table Produit(
    idProduit int not null auto_increment,
    idCategorie int not null,
    codeProduit integer,
    prixUnitaire number,
    designation char(20),
    primary key(idProduit),
    foreign key(idCategorie) references Categorie(idCategorie)
);

create table Stock(
    idStock int not null auto_increment,
    idProduit int not null,
    quantite int,
    primary key(id_stock),
    foreign key(idProduit) references Produit(idProduit)
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



/*supermarche*/
