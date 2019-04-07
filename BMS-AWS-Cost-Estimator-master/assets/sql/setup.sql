-- Create the database
CREATE DATABASE IF NOT EXISTS `db`;

-- Create the "admin" user
CREATE USER IF NOT EXISTS 'admin'@'localhost' IDENTIFIED BY 'password';

-- Grant privileges
GRANT ALL PRIVILEGES ON db.* TO 'admin'@'localhost' IDENTIFIED BY 'password';
FLUSH PRIVILEGES;

-- Switch to the new database
USE db;

-- Create the "users" table if it doesn't exist
CREATE TABLE IF NOT EXISTS `users` (
	`last_name` varchar(255) NOT NULL,
	`first_name` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL UNIQUE,
  `password` varchar(255) NOT NULL,
	`last_modified` int(11) NOT NULL,
	`access` int(1) NOT NULL,
	`active` boolean,
	PRIMARY KEY (email)
) charset=UTF8;

-- Create John Doe, an administrator; jdoe@bms.com | bms2018!
INSERT INTO users (last_name,first_name,email,password,access) values ('Doe','John','jdoe@bms.com','$2y$10$8ca3.dXGy3rX1.P4fGPzJeymWWiRwfoLjey8BPzQX3HxUukabkr/e','1');

CREATE TABLE IF NOT EXISTS `saved` (
	`title` varchar(20) NOT NULL,
	`email` varchar(255) NOT NULL,
	PRIMARY KEY (title)
) charset=UTF8;

CREATE TABLE IF NOT EXISTS `s3` (
	`id` int NOT NULL AUTO_INCREMENT,
	`storage01` int(10),
	`requests01` int(10),
	`other01` int(10),
	`returned01` int(10),
	`scanned01` int(10),
	`storage02` int(10),
	`requests02` int(10),
	`other02` int(10),
	`lifecycle02` int(10),
	`retrieval02` int(10),
	`returned02` int(10),
	`scanned02` int(10),
	`storage03` int(10),
	`requests03` int(10),
	`other03` int(10),
	`lifecycle03` int(10),
	`retrieval03` int(10),
	`returned03` int(10),
	`scanned03` int(10),
	`inventory04` int(10),
	`analytics04` int(10),
	`tagging04` int(10),
	`glacier05` int(10),
	`inter06` int(10),
	`dtout06` int(10),
	`dtinsome06` int(10),
	`dtinall06` int(10),
	`inter07` int(10),
	`dtout08` int(10),
	`dtin08` int(10),
	`dtcf08` int(10),
	`storage01` int(10),
	`requests01` int(10),
	`other01` int(10),
	`returned01` int(10),
	`scanned01` int(10),
	`storage02` int(10),
	`requests02` int(10),
	`other02` int(10),
	`lifecycle02` int(10),
	`retrieval02` int(10),
	`returned02` int(10),
	`scanned02` int(10),
	`email` varchar(255) NOT NULL,
	`title` varchar(20) NOT NULL,
	PRIMARY KEY (id)
) charset=UTF8;

CREATE TABLE IF NOT EXISTS `rds` (
	`id` int NOT NULL AUTO_INCREMENT,
	`table0` text,
	`table1` text,
	`table2` text,
	`table3` text,
	`inter04` int(10),
	`dtout40` int(10),
	`dtin40` int(10),
	`intra40` int(10),
	`email` varchar(255) NOT NULL,
	`title` varchar(20) NOT NULL,
	PRIMARY KEY (id)
) charset=UTF8;

CREATE TABLE IF NOT EXISTS `ec2` (
	`id` int NOT NULL AUTO_INCREMENT,
	`table0` text,
	`table1` text,
	`table2` text,
	`table3` text,
	`linux40` int(10),
	`windows40` int(10),
	`ips50` int(10),
	`nonatt50` int(10),
	`remap50` int(10),
	`inter60` int(10),
	`dtout60` int(10),
	`dtin60` int(10),
	`peer60` int(10),
	`intra60` int(10),
	`public60` int(10),
	`email` varchar(255) NOT NULL,
	`title` varchar(20) NOT NULL,
	PRIMARY KEY (id)
) charset=UTF8;

-- Create the "discount" table if it doesn't exist and throw a value in to be updated at a later time by the administrator(s)
CREATE TABLE IF NOT EXISTS `discount` (
	`pcnt` int(3),
	PRIMARY KEY (pcnt)
) charset=UTF8;
INSERT INTO discount (pcnt) VALUES ('0');
