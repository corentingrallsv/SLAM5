DROP DATABASE IF EXISTS BDStPaul;

CREATE DATABASE IF NOT EXISTS BDStPaul character set utf8 collate utf8_unicode_ci;
USE BDStPaul;
# -----------------------------------------------------------------------------
#       TABLE : FAMILLE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FAMILLE
 (
   FAMNO VARCHAR(128) NOT NULL  ,
   FAMNOM VARCHAR(128) NULL  ,
   FAMADR VARCHAR(128) NULL  ,
   FAMTEL CHAR(15) NULL  ,
   FAMNBENFANT SMALLINT NULL  ,
   FAMREVENU INTEGER NULL  
   , PRIMARY KEY (FAMNO) 
 ) 
 engine=INNODB comment = "";

# -----------------------------------------------------------------------------
#       TABLE : SEJOUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SEJOUR
 (
   SEJNO INTEGER NOT NULL AUTO_INCREMENT ,
   SEJINTITULE VARCHAR(128) NULL  ,
   SEJMONTANTMBI DECIMAL(10,2) NULL  ,
   SEJDTEDEB DATE NULL  ,
   SEJDUREE SMALLINT NULL  
   , PRIMARY KEY (SEJNO) 
 ) 
 engine=INNODB comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PARTICIPATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PARTICIPATION
 (
   FAMNO VARCHAR(128) NOT NULL  ,
   SEJNO INTEGER NOT NULL  ,
   NBENFANTPARTANT SMALLINT NULL  
   , PRIMARY KEY (FAMNO,SEJNO) 
 ) 
 engine=INNODB comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE PARTICIPATION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_PARTICIPATION_FAMILLE
     ON PARTICIPATION (FAMNO ASC);

CREATE  INDEX I_FK_PARTICIPATION_SEJOUR
     ON PARTICIPATION (SEJNO ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE PARTICIPATION 
  ADD FOREIGN KEY FK_PARTICIPATION_FAMILLE (FAMNO)
      REFERENCES FAMILLE (FAMNO) ;


ALTER TABLE PARTICIPATION 
  ADD FOREIGN KEY FK_PARTICIPATION_SEJOUR (SEJNO)
      REFERENCES SEJOUR (SEJNO) ;

