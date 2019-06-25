CREATE TABLE users
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    first_name varchar(250) NOT NULL,
    last_name varchar(250) NOT NULL,
    birthdate date NOT NULL,
    password varchar(100),
    group_id int(11),
    email varchar(100) NOT NULL,
    CONSTRAINT users_groups__fk FOREIGN KEY (group_id) REFERENCES groups (id)
);
CREATE UNIQUE INDEX users_email_uindex ON users (email);
CREATE INDEX users_groups__fk ON users (group_id);


INSERT INTO utf8_general_ci.users (id, first_name, last_name, birthdate, password, group_id, email) VALUES (1, 'Ivanov', 'io', '2001-06-12', '457365745', 1, 'rwetwer@fg');
INSERT INTO utf8_general_ci.users (id, first_name, last_name, birthdate, password, group_id, email) VALUES (2, 'tted', 'ghfg', '1997-04-11', '6535', 2, 'wqere@fgg');
INSERT INTO utf8_general_ci.users (id, first_name, last_name, birthdate, password, group_id, email) VALUES (3, 'red', 'ty', '1990-09-15', '45684768', 2, '23452@ghgh');
