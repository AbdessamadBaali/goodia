create database goodia;
use  goodia;


create table material
( 	
	id_mat int primary key auto_increment,
    type_mat varchar(45),
	Mark varchar(45),
    References_mat varchar(45),
    Quantite int,
    Prix_achat float,
    Prix_vente float,
    Desc_mat  text
);

create table Fourniseurs
(
	id_Fourniseurs int primary key auto_increment,
	nom_Fourniseurs  varchar(45),
    addresse varchar(45),
	tet  varchar(45)
);

