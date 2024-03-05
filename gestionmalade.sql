/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  21/04/2023 14:33:20                      */
/*==============================================================*/


drop table if exists HOPITAL;

drop table if exists MALADE;

drop table if exists MEDECIN;

/*==============================================================*/
/* Table : HOPITAL                                              */
/*==============================================================*/
create table HOPITAL
(
   IDHOPITAL            int AUTO_INCREMENT not null,
   NOMHOPITAL           varchar(30),
   CAPACITEHOPITAL      int,
   primary key (IDHOPITAL)
);

/*==============================================================*/
/* Table : MALADE                                               */
/*==============================================================*/
create table MALADE
(
   IDMALADE             int AUTO_INCREMENT not null,
   IDHOPITAL            int not null,
   IDMEDECIN            int not null,
   NOMMALADE            varchar(30),
   PRENOMMALADE         varchar(30),
   DATENAISSANCEMALADE  date,
   POIDSMALADE          int,
   STATUTMALADE         varchar(30),
   DATEPRISE_EN_CHARGE  date,
   primary key (IDMALADE)
);

/*==============================================================*/
/* Table : MEDECIN                                              */
/*==============================================================*/
create table MEDECIN
(
   IDMEDECIN            int AUTO_INCREMENT not null,
   NOMMEDECIN           varchar(30),
   PRENOMMEDECIN        varchar(30),
   DATENAISSANCEMEDECIN date,
   TELEPHONEMEDECIN     int,
   primary key (IDMEDECIN)
);

alter table MALADE add constraint FK_SUIVRE foreign key (IDMEDECIN)
      references MEDECIN (IDMEDECIN) on delete restrict on update restrict;

alter table MALADE add constraint FK_TRAITER foreign key (IDHOPITAL)
      references HOPITAL (IDHOPITAL) on delete restrict on update restrict;

