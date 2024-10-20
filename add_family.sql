CREATE TABLE family (
    id int,
    name varchar(255),
    status varchar(255)
);

INSERT INTO family (id, name, status)
VALUES (1, 'Nick', 'Husband'),
       (2, 'Luba', 'Wife'),
       (3, 'Katrina', 'Daughter'),
       (4, 'Alexei', 'Son');

SELECT * FROM family;