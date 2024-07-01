-- create
CREATE TABLE Position (
  PositionId INTEGER PRIMARY KEY AUTO_INCREMENT,
  PositionName ENUM ('Manager', 'Supervisor', 'Employe')
);

-- insert
INSERT INTO Position (PositionName) VALUES ('Supervisor');
INSERT INTO Position (PositionName) VALUES ('Employe');

select * from Position;