
-- Create
CREATE TABLE User (
  userId int NOT NULL AUTO_INCREMENT,
  name varchar(225) NOT NULL,
  positionId int NOT NULL,
  email varchar(16) NOT NULL UNIQUE,
  password varchar(8) NOT NULL,
  PRIMARY KEY (userId)
);

-- insert
INSERT INTO User(name, positionId, email, password) VALUES ('Satria', 2,'a@gmail.com','12345678');
INSERT INTO User(name, positionId, email, password) VALUES ('Totok', 2,'b@gmail.com','12345678');
INSERT INTO User(name, positionId, email, password) VALUES ('Cahyani', 3,'c@gmail.com','12345678');
-- fetch 
SELECT * FROM USER;

-- fetch with userId
SELECT * FROM USER WHERE userId = 1;
