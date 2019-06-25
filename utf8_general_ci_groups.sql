CREATE TABLE groups
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(250) NOT NULL
);

INSERT INTO utf8_general_ci.groups (id, name) VALUES (1, 'Dev');
INSERT INTO utf8_general_ci.groups (id, name) VALUES (2, 'Testers');
INSERT INTO utf8_general_ci.groups (id, name) VALUES (3, 'Users');
