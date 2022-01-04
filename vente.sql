drop database Vente;
create database Vente;
use Vente;

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
    quantite real
);

insert into demandeGrouper values (null,'',100);

create table proformat(
    id int auto_increment primary key,
    dateValidite date,
    label varchar(150),
    quantite real,
    prix real,
    idFournisseur int,
    idDemandeGrouper int,
    foreign key (idDemandeGrouper) references demandeGrouper(idDemandeGrouper),
    foreign key (idFournisseur) references Fournisseur(idFournisseur) 
);

insert into proformat values(null,'2021/03/03','',20,300,1,1);

create table bonDeCommande(
    idBonDeCommande int auto_increment primary key,
    idProformat int,
    dateCommande dateTime,
    quantite real,
    delaiLivraison dateTime,
    foreign key (idProformat) references proformat(id)
);

insert into bonDeCommande values(null,1,'2021/01/01',100,'2021/02/02');

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
    prixUnitaire real,
    description varchar(20),
    foreign key(idFabricant)references fabricant(id)
);

insert into produit values(null,'Cache bouche',1,500,'chirurgical');
insert into produit values(null,'Essuie tout',1,600,'Serviette de table');
insert into produit values(null,'Stylo',1,550,'Stylo bleu');
insert into produit values(null,'Crayon',1,400,'Crayon de bois');
insert into produit values(null,'Papier',1,50,'Feuille A4');
insert into produit values(null,'Cahier PF',1,700,'Cachier Petit Format');
insert into produit values(null,'Cahier GF',1,1400,'Cachier Grand Format');
insert into produit values(null,'Trousse de secours',1,2000,'Trousse de secours');
insert into produit values(null,'Journaux',1,250,'Midi Madagascar');
insert into produit values(null,'Eau',1,500,'Bouteil plastique');
insert into produit values(null,'Extincteur',1,25000,"Extinteur d'incendie");
insert into produit values(null,'Savon',1,600,'Pure savon');

create table equivalence(
    id int auto_increment primary key,
    idProduit int,
    idUnite int ,
    quantite real,
    description varchar(30),
    foreign key (idProduit) references produit(id),
    foreign key (idUnite) references unite(id)
);

insert into equivalence values (null,1,1,20,'composé 20');

create table remise(
    id int auto_increment primary key,
    idProduit int,
    valueRemise real,
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

create table bonLivraison(
    id int auto_increment primary key,
    idBonDeCommande int,
    idProformat int,
    label varchar(20),
    nif varchar(20),
    dateBL date,
    description varchar(50),
    foreign key (idProformat) references proformat(id),
    foreign key (idBonDeCommande) references bonDeCommande(idBonDeCommande)
);

insert into bonLivraison values (null,1,1,'BL-MAGASIN','001','2021/12/12','');

create table bonLivraisonDetail(
    id int auto_increment primary key,
    idBonLivraison int ,
    idProduit int,
    idEquivalence int ,
    quantite real,
    dateAjouter date,
    description varchar(30),
    foreign key (idBonLivraison) references bonLivraison(id),
    foreign key (idEquivalence) references equivalence(id)
);

insert into bonLivraisonDetail values (null,1,1,1,50,'2021/12/12','');
insert into bonLivraisonDetail values (null,1,1,1,2,'2021/12/10','');
