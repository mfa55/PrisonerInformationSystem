drop table if exists CRIME;

drop table if exists LOCATION;

drop table if exists PRISONER;

drop table if exists STAFF;

drop table if exists VICTIM;

drop table if exists VISIT;

drop table if exists VISITOR;

/*==============================================================*/
/* Table: CRIME                                                 */
/*==============================================================*/
create table CRIME
(
   CRIMEID              int not null,
   SSN                  int,
   CRIMETYPE            varchar(20) not null,
   LEVEL                int not null,
   VICTIMID             int not null,
   CRIMEDATE            timestamp not null,
   primary key (CRIMEID)
);

/*==============================================================*/
/* Table: LOCATION                                              */
/*==============================================================*/
create table LOCATION
(
   LOCATIONID           int not null,
   NAME                 varchar(50) not null,
   primary key (LOCATIONID)
);

/*==============================================================*/
/* Table: PRISONER                                              */
/*==============================================================*/
create table PRISONER
(
   FIRSTNAME            varchar(20) not null,
   LASTNAME             varchar(20) not null,
   SSN                  int not null,
   LOCATIONID           int not null,
   CELLMATEID           int,
   PRISONSENTENCE       int not null,
   ENTRYDATE            datetime not null,
   ADDRESS              varchar(100),
   CELLNUMBER           int not null,
   PHONENUMBER          int,
   PHONECALLSALLOWED    int not null,
   VISITSALLOWED        int not null,
   RELEASEDATE          datetime not null,
   BIRTHDATE            datetime not null,
   primary key (SSN)
);

/*==============================================================*/
/* Table: STAFF                                                 */
/*==============================================================*/
create table STAFF
(
   FIRSTNAME            varchar(20) not null,
   LASTNAME             varchar(20) not null,
   SSN                  int not null,
   MANAGERID            int,
   LOCATIONID           int,
   ADDRESS              varchar(100),
   GENDER               varchar(10) not null,
   BIRTHDATE            datetime not null,
   primary key (SSN)
);

/*==============================================================*/
/* Table: VICTIM                                                */
/*==============================================================*/
create table VICTIM
(
   FIRSTNAME            varchar(20) not null,
   LASTNAME             varchar(20) not null,
   VICTIMID             int not null,
   BIRTHDATE            timestamp,
   primary key (VICTIMID)
);

/*==============================================================*/
/* Table: VISIT                                                 */
/*==============================================================*/
create table VISIT
(
   VISITORID            int not null,
   PRISONERSSN          int not null,
   VISITDATE            datetime not null,
   VISITID              int not null,
   primary key (VISITID)
);

/*==============================================================*/
/* Table: VISITOR                                               */
/*==============================================================*/
create table VISITOR
(
   FIRSTNAME            varchar(20) not null,
   LASTNAME             varchar(20) not null,
   GENDER               varchar(10) not null,
   VISITORID            int not null,
   BIRTHDATE            datetime not null,
   primary key (VISITORID)
);

alter table CRIME add constraint FK_REFERENCE_10 foreign key (SSN)
      references PRISONER (SSN) on delete restrict on update restrict;

alter table CRIME add constraint FK_REFERENCE_11 foreign key (VICTIMID)
      references VICTIM (VICTIMID) on delete restrict on update restrict;

alter table PRISONER add constraint FK_REFERENCE_3 foreign key (LOCATIONID)
      references LOCATION (LOCATIONID) on delete restrict on update restrict;

alter table PRISONER add constraint FK_REFERENCE_5 foreign key (CELLMATEID)
      references PRISONER (SSN) on delete restrict on update restrict;

alter table STAFF add constraint FK_REFERENCE_6 foreign key (MANAGERID)
      references STAFF (SSN) on delete restrict on update restrict;

alter table STAFF add constraint FK_REFERENCE_9 foreign key (LOCATIONID)
      references LOCATION (LOCATIONID) on delete restrict on update restrict;

alter table VISIT add constraint FK_REFERENCE_7 foreign key (VISITORID)
      references VISITOR (VISITORID) on delete restrict on update restrict;

alter table VISIT add constraint FK_REFERENCE_8 foreign key (PRISONERSSN)
      references PRISONER (SSN) on delete restrict on update restrict;