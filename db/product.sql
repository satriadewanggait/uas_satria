
-- create
CREATE TABLE PRODUCT (
  product_code INTEGER PRIMARY KEY AUTO_INCREMENT,
  product_name TEXT NOT NULL,
  Stok TEXT NOT NULL,
  price INTEGER
);

-- insert
INSERT INTO PRODUCT VALUES ('Tas Eiger 1', 100, 100.000);
-- fetch 
SELECT * FROM PRODUCT WHERE product_code = 0001;