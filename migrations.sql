CREATE DATABASE blog;
USE blog;

CREATE TABLE posts(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	content VARCHAR(5200) NOT NULL
);

CREATE TABLE categories(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	category_name VARCHAR(25) NOT NULL
)

INSERT INTO posts
(`content`)
VALUES
("Lieldienas nāk"),
("Otrais bloga ieraksts");

INSERT INTO categories
(`category_name`)
VALUES
("Svērtki"),
("Mūzika"),
("Sports");