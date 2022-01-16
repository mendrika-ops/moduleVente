create table categorieFournisseur (
                                      idCateg int auto_increment primary key,
                                      label varchar(150)
);

insert into categorieFournisseur values (1,'quincaillerie');
insert into categorieFournisseur values (2,'pharmacie');
insert into categorieFournisseur values (3,'superMarche');
insert into categorieFournisseur values (4,'papeterie');

create table Fournisseur (
                             idFournisseur int auto_increment primary key,
                             nom varchar(150),
                             addresse varchar(150),
                             tel varchar(150),
                             mail varchar(100),
                             nif varchar(150),
                             idCateg int,
                             foreign key (idCateg) references categorieFournisseur(idCateg)
);

insert into Fournisseur values (null,'sanifer','tanjombato',null,null,123456,1);
insert into Fournisseur values (null,'pharmacie de tana','tanjombato',null,null,123456,2);
insert into Fournisseur values (null,'score','tanjombato',null,null,123456,3);
insert into Fournisseur values (null,'premier','tanjombato',null,null,123456,4);

create table demandeGrouper(
                               idDemandeGrouper int auto_increment primary key,
                                label varchar(150),
                               quantite float
);

insert into demandeGrouper values (null,'lab group',5);

create table proformat(
                          id int auto_increment primary key,
                          dateValidite date,
                          label varchar(150),
                          quantité float,
                          prix float,
                          idFournisseur int,
                          idDemandeGrouper int,
                          foreign key (idDemandeGrouper) references demandeGrouper(idDemandeGrouper),
                          foreign key (idFournisseur) references Fournisseur(idFournisseur)
);

insert into proformat values (null,'2021-12-23','label Proform',4,345,1,1);



create table bonDeCommande(
                              idBonDeCommande int auto_increment primary key,
                              idProformat int,
                              dateCommande dateTime,
                              quantite float,
                              delaiLivraison dateTime,
                              foreign key (idProformat) references proformat(id)
);

insert into bonDeCommande values (null,null,'2021-12-21',1,'2021-12-30');


create table taille(
                       id int auto_increment primary key,
                       gabarit varchar(20)
);

insert into taille values (null,'PM');
insert into taille values (null,'GM');

create table unite (
                       id int auto_increment primary key,
                       idTaille int,
                       label varchar(20),
                       foreign key(idTaille) references taille(id)
);

insert into unite values (null,1,'CARTON');

create table fabricant(
                          id int auto_increment primary key,
                          nom varchar(20),
                          description varchar(20)
);
insert into fabricant values(null,'Makiplast','');

create table produit(
                        id int auto_increment primary key,
                        label varchar(20),
                        idFabricant int,
                        prixUnitaire float,
                        description varchar(20),
                        foreign key(idFabricant)references fabricant(id)
);

insert into produit(label, idFabricant, prixUnitaire, description) values('kidoro',1,500,'VITA FOAM');
insert into produit(label, idFabricant, prixUnitaire, description) values ('cache bouche',1,500,'chirurgical');

create table equivalence(
                            id int auto_increment primary key,
                            idProduit int,
                            idUnite int ,
                            quantite float,
                            description varchar(30),
                            foreign key (idProduit) references produit(id),
                            foreign key (idUnite) references unite(id)
);

insert into equivalence values (null,1,1,20,'composé 20');

create table remise(
                       id int auto_increment primary key,
                       idProduit int,
                       valueRemise float,
                       dateValidite datetime,
                       foreign key(idProduit)references produit(id)
);

create table contrainte(
                           id int auto_increment primary key,
                           idProduit int ,
                           label varchar(20),
                           description varchar(20),
                           foreign key(idProduit)references produit(id)
);

create table bonLivrason
(
    id int auto_increment primary key,
    idBonDeCommande int,
    idProformat int,
    label varchar(20),
    nif varchar(20),
    dateBL date,
    description varchar(50),
    foreign key(idProformat) references proformat(id),
    foreign key(idBonDeCommande) references bonDeCommande(idBonDeCommande)
);

insert into bonLivrason(idBonDeCommande, idProformat, label, nif, dateBL, description) values (1,1,'BL-MAGASIN','001','2021/12/12','');

create table bonLivrasonDetail(
                                  id int auto_increment primary key,
                                  idBonLivraison int ,
                                  idProduit int,
                                  idEquivalence int ,
                                  quantite float,
                                  dateAjouter date,
                                  description varchar(30),
                                  foreign key (idBonLivraison) references bonLivrason(id),
                                  foreign key (idEquivalence) references equivalence(id)
);

insert into bonLivrasonDetail values (null,1,1,50,'2021-12-12','');
insert into bonLivrasonDetail values (null,1,2,2,'2021-12-10','');