--CREATE DATABSE inventario;

CREATE TABLE productos (
    idProd INT PRIMARY KEY,
    nombre VARCHAR(100),
    precio DECIMAL(10,2),
    existencia INT
);
