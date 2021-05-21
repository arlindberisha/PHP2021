CREATE TABLE clients(
id integer auto_increment,
name varchar(40),
lastname varchar(40),
phonenumber varchar(40),
town varchar(40),
city varchar(40),
status varchar(20),
lastpayment timestamp,
primary key(id)
);

CREATE TABLE users(
id integer auto_increment,
username varchar(40),
password varchar(150),
primary key(id));