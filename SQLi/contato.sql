CREATE TABLE contato
(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(255),
    phone varchar(255)
);
CREATE UNIQUE INDEX contato_id_uindex ON contato (id);