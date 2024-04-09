#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Promotion
#------------------------------------------------------------

CREATE TABLE SWS_PROMOTION(
        PROMOTIONID     Int  Auto_increment  NOT NULL ,
        NOMPROMOTION    Varchar (50) NOT NULL ,
        DATEDEBUT       Date NOT NULL ,
        DATEFIN         Date NOT NULL ,
        PLACEDISPONIBLE Int NOT NULL
	,CONSTRAINT PK_SWS_PROMOTION PRIMARY KEY (PROMOTIONID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Cours
#------------------------------------------------------------

CREATE TABLE SWS_COURS(
        COURSID     Int  Auto_increment  NOT NULL ,
        NOMCOURS    Varchar (50) NOT NULL ,
        HEUREDEBUT  Datetime NOT NULL ,
        HEUREFIN    Datetime NOT NULL ,
        PROMOTIONID Int NOT NULL
	,CONSTRAINT PK_SWS_COURS PRIMARY KEY (COURSID)

	,CONSTRAINT FK_SWS_COURS_SWS_PROMOTION FOREIGN KEY (PROMOTIONID) REFERENCES SWS_PROMOTION(PROMOTIONID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Role
#------------------------------------------------------------

CREATE TABLE SWS_ROLE(
        ROLEID  Int  Auto_increment  NOT NULL ,
        NOMROLE Varchar (50) NOT NULL
	,CONSTRAINT PK_SWS_ROLE PRIMARY KEY (ROLEID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE SWS_USERS(
        USERID     Int  Auto_increment  NOT NULL ,
        FIRSTNAME  Varchar (50) NOT NULL ,
        LASTNAME   Varchar (50) NOT NULL ,
        PASSWORD   Varchar (255) NOT NULL ,
        ACTIVATION Bool NOT NULL ,
        EMAIL      Varchar (80) NOT NULL ,
        ROLEID     Int NOT NULL
	,CONSTRAINT AK_SWS_USERS UNIQUE (EMAIL)
	,CONSTRAINT PK_SWS_USERS PRIMARY KEY (USERID)

	,CONSTRAINT FK_SWS_USERS_SWS_ROLE FOREIGN KEY (ROLEID) REFERENCES SWS_ROLE(ROLEID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: sws_relation_Users_Cours
#------------------------------------------------------------

CREATE TABLE SWS_RELATION_USERS_COURS(
        COURSID Int NOT NULL ,
        USERID  Int NOT NULL ,
        STATUT  Varchar (50) NOT NULL
	,CONSTRAINT PK_SWS_RELATION_USERS_COURS PRIMARY KEY (COURSID,USERID)

	,CONSTRAINT FK_SWS_RELATION_USERS_COURS_SWS_COURS FOREIGN KEY (COURSID) REFERENCES SWS_COURS(COURSID)
	,CONSTRAINT FK_SWS_RELATION_USERS_COURS_SWS_USERS0 FOREIGN KEY (USERID) REFERENCES SWS_USERS(USERID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: sws_relation_Users_Promotion
#------------------------------------------------------------

CREATE TABLE SWS_RELATION_USERS_PROMOTION(
        USERID      Int NOT NULL ,
        PROMOTIONID Int NOT NULL
	,CONSTRAINT PK_SWS_RELATION_USERS_PROMOTION PRIMARY KEY (USERID,PROMOTIONID)

	,CONSTRAINT FK_SWS_RELATION_USERS_PROMOTION_SWS_USERS FOREIGN KEY (USERID) REFERENCES SWS_USERS(USERID)
	,CONSTRAINT FK_SWS_RELATION_USERS_PROMOTION_SWS_PROMOTION0 FOREIGN KEY (PROMOTIONID) REFERENCES SWS_PROMOTION(PROMOTIONID)
)ENGINE=InnoDB;

