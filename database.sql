-- Active: 1690306570681@@127.0.0.1@3306@kodigo

USE kodigo;

SELECT * FROM bootcamps;

INSERT INTO bootcamps(title, description, start_bootcamp, end_bootcamp, modules)
VALUES("Desarrollo con JavaScript","Aprende a ser programador en JS","2023-07-20","2023-09-30",5);

INSERT INTO bootcamps(title, description, start_bootcamp, end_bootcamp, modules)
VALUES("Desarrollo con React","Aprende a ser programador en React","2023-09-02","2023-12-10",5);

INSERT INTO bootcamps(title, description, start_bootcamp, end_bootcamp, modules)
VALUES("Desarrollo con PHP","Aprende a ser programador en PHP","2023-12-15","2024-03-10",5);
