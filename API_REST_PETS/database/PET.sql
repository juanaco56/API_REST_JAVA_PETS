create database pet;

use pet;

create table pets (
    id int primary key auto_increment not null,
    name varchar(255),
    born date,
    category varchar(255),
    chip varchar(255)
);