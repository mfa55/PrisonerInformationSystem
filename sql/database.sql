/*==============================================================*/
/* Table: COMMIT                                              */
/*==============================================================*/
create table COMMIT
(
   CRIMEID              int                            not null,
   CRIMEDATE            datetime                       not null,
   COMMITID             int                            not null,
   SSN                  int                            null,
   constraint PK_COMMIT primary key clustered (COMMITID)
);

/*==============================================================*/
/* Table: CRIME                                                 */
/*==============================================================*/
create table CRIME
(
   CRIMEID              int                            not null,
   CRIMETYPE            varchar(20)                    not null,
   LEVEL                int                            not null,
   constraint PK_CRIME primary key clustered (CRIMEID)
);

/*==============================================================*/
/* Table: LOCATION                                              */
/*==============================================================*/
create table LOCATION
(
   LOCATIONID           int                            not null,
   NAME                 varchar(50)                    not null,
   constraint PK_LOCATION primary key clustered (LOCATIONID)
);

/*==============================================================*/
/* Table: PERSON                                                */
/*==============================================================*/
create table PERSON
(
   SSN                  int                            not null,
   FIRSTNAME            varchar(20)                    not null,
   LASTNAME             varchar(20)                    not null,
   BIRTHDATE            datetime                       not null,
   ADDRESS              varchar(100)                   null,
   constraint PK_PERSON primary key clustered (SSN)
);

/*==============================================================*/
/* Table: PRISONER                                              */
/*==============================================================*/
create table PRISONER
(
   SSN                  int                            not null,
   LOCATIONID           int                            not null,
   CELLMATEID           int                            null,
   PRISONSENTENCE       int                            not null,
   ENTRYDATE            datetime                       not null,
   CELLNUMBER           int                            not null,
   PHONENUMBER          int                            null,
   PHONECALLSALLOWED    int                            not null,
   VISITSALLOWED        int                            not null,
   RELEASEDATE          datetime                       not null,
   constraint PK_PRISONER primary key clustered (SSN)
);

/*==============================================================*/
/* Table: STAFF                                                 */
/*==============================================================*/
create table STAFF
(
   SSN                  int                            not null,
   LOCATIONID           int                            null,
   MANAGERID            int                            null,
   GENDER               varchar(10)                    not null,
   constraint PK_STAFF primary key clustered (SSN)
);

/*==============================================================*/
/* Table: VICTIM                                                */
/*==============================================================*/
create table VICTIM
(
   COMMITID             int                            not null,
   FIRSTNAME            varchar(20)                    not null,
   LASTNAME             varchar(20)                    not null,
   VICTIMID             int                            not null,
   constraint PK_VICTIM primary key clustered (VICTIMID)
);

/*==============================================================*/
/* Table: VISIT                                                 */
/*==============================================================*/
create table VISIT
(
   VISITORID            int                            not null,
   VISITDATE            datetime                       not null,
   VISITID              int                            not null,
   SSN                  int                            null,
   constraint PK_VISIT primary key clustered (VISITID)
);

/*==============================================================*/
/* Table: VISITOR                                               */
/*==============================================================*/
create table VISITOR
(
   FIRSTNAME            varchar(20)                    not null,
   LASTNAME             varchar(20)                    not null,
   GENDER               varchar(10)                    not null,
   VISITORID            int                            not null,
   BIRTHDATE            datetime                       not null,
   constraint PK_VISITOR primary key clustered (VISITORID)
);

alter table COMMIT
   add constraint FK_COMMIT_REFERENCE_PRISONER foreign key (SSN)
      references PRISONER (SSN)
      on update restrict
      on delete restrict;

alter table COMMIT
   add constraint FK_COMMIT_REFERENCE_CRIME foreign key (CRIMEID)
      references CRIME (CRIMEID)
      on update restrict
      on delete restrict;

alter table PRISONER
   add constraint FK_PRISONER_REFERENCE_PERSON foreign key (SSN)
      references PERSON (SSN)
      on update restrict
      on delete restrict;

alter table PRISONER
   add constraint FK_PRISONER_REFERENCE_PRISONER foreign key (CELLMATEID)
      references PRISONER (SSN)
      on update restrict
      on delete restrict;

alter table PRISONER
   add constraint FK_PRISONER_REFERENCE_LOCATION foreign key (LOCATIONID)
      references LOCATION (LOCATIONID)
      on update restrict
      on delete restrict;

alter table STAFF
   add constraint FK_STAFF_REFERENCE_PERSON foreign key (SSN)
      references PERSON (SSN)
      on update restrict
      on delete restrict;

alter table STAFF
   add constraint FK_STAFF_REFERENCE_STAFF foreign key (MANAGERID)
      references STAFF (SSN)
      on update restrict
      on delete restrict;

alter table STAFF
   add constraint FK_STAFF_REFERENCE_LOCATION foreign key (LOCATIONID)
      references LOCATION (LOCATIONID)
      on update restrict
      on delete restrict;

alter table VICTIM
   add constraint FK_VICTIM_REFERENCE_COMMIT foreign key (COMMITID)
      references COMMIT (COMMITID)
      on update restrict
      on delete restrict;

alter table VISIT
   add constraint FK_VISIT_REFERENCE_VISITOR foreign key (VISITORID)
      references VISITOR (VISITORID)
      on update restrict
      on delete restrict;

alter table VISIT
   add constraint FK_VISIT_REFERENCE_PRISONER foreign key (SSN)
      references PRISONER (SSN)
      on update restrict
      on delete restrict;
