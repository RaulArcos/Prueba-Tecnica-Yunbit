CREATE TABLE `pruebas_practicas`.`test_clients` ( 
    `ID` INT NOT NULL AUTO_INCREMENT , 
    `NAME` VARCHAR(255) NOT NULL , 
    `ADDRESS` VARCHAR(255) NOT NULL , 
    `DESCRIPTION` TEXT NOT NULL , 
    `TELF` VARCHAR(255) NOT NULL , 
    `TYPE` CHAR(1) NOT NULL ,
     PRIMARY KEY (`ID`));