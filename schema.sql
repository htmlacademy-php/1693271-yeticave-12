create database dno;
default character set utf8;
default collate utf8_general_ci;

create table category (
    id INT(11) NOT NULL AUTO_INTCREMENT PRIMARY KEY,
    name VARCHAR(20),
    cod VARCHAR(20),
);

create table lot (
    id INT(11) NOT NULL AUTO_INTCREMENT PRIMARY KEY,
    date_creation DATETIME,default current_timestamp,
    description text,
    image blob,
    start_price INT(11),
    date_end DATETIME,default current_timestamp,
    step_rate INT(11),
);
create table rate(
    id INT(11),
    date DATETIME,default current_timestamp,
    sum INT(11),
);
create table user (
    id INT(11) NOT NULL  AUTO_INTCREMENT PRIMARY KEY,
    date_register DATETIME,default current_timestamp,
    name VARCHAR(20),
    email VARCHAR(256) not null unique,
    password CHAR(60) not null,
    phone char (255) not null,
);
SELECT * FROM lot INNER JOIN user  using (id);
SELECT * FROM category INNER JOIN lot using (id);
SELECT * FROM user INNER JOIN rte  using (id);


