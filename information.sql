CREATE TABLE login(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    USERNAME VARCHAR(20) NOT NULL,
    CONTRASENA VARCHAR(20) NOT NULL
);

INSERT INTO login VALUES
    (NULL,'Henry','1234'),
    (NULL, 'Kenia','4321')

;

CREATE TABLE alumnos(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    NAME VARCHAR(50) NOT NULL,
    LASTNAME VARCHAR(50) NOT NULL,
    AGE INT NOT NULL,
    SEX VARCHAR(15) NOT NULL,
    FECHA_NACIMIENTO VARCHAR(20)
);

INSERT INTO alumnos VALUES
    (NULL,'HENRY','VILLARREAL PEREZ',23,'MASCULINO','13/04/1998'),
    (NULL,'KENIA','VILLARREAL PEREZ',25,'FEMENINO','01/08/1996'),
    (NULL,'JHONNATAN','PEREZ VILLARREAL',23,'MASCULINO','13/04/2000')
;



//Products

CREATE TABLE topVentas(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    TAMANO INT NOT NULL,
    PRECIO FLOAT NOT NULL,
    IMAGEN VARCHAR(50),
    COLOR_PRODUCTO VARCHAR(50)
);

CREATE TABLE tazas(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    TAMANO INT NOT NULL,
    PRECIO FLOAT NOT NULL,
    IMAGEN VARCHAR(50),
    COLOR_PRODUCTO VARCHAR(50)
);


CREATE TABLE gorras(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    TAMANO INT NOT NULL,
    PRECIO FLOAT NOT NULL,
    IMAGEN VARCHAR(50),
    COLOR_PRODUCTO VARCHAR(50)
);

INSERT INTO topVentas VALUES
    (NULL, 11,60.00,'TAZA','YELLOW'),
    (NULL, 11,60.00,'GORRA','BLANK'),
    (NULL, 11,60.00,'TAZA','PINK'),
    (NULL, 11,60.00,'TAZA','BLUE'),
    (NULL, 11,60.00,'GORRA','WHITE'),
    (NULL, 11,60.00,'GORRA','RED'),
    (NULL, 11,60.00,'TAZA','BLANK'),
    (NULL, 11,60.00,'GORRA','BLUE'),
    (NULL, 11,60.00,'GORRA','GRAY'),
    (NULL, 11,60.00,'TAZA','WHITE')
;

INSERT INTO tazas VALUES
    (NULL, 11,60.00,'TAZA','WHITE'),
    (NULL, 11,60.00,'TAZA','BLANK'),
    (NULL, 11,60.00,'TAZA','YELLOW'),
    (NULL, 11,60.00,'TAZA','PINK'),
    (NULL, 11,60.00,'TAZA','BLUE'),
    (NULL, 11,60.00,'TAZA','GRAY'),
    (NULL, 11,60.00,'TAZA','RED'),
    (NULL, 11,60.00,'TAZA','GREEN'),
    (NULL, 11,60.00,'TAZA','BROWN'),
    (NULL, 11,60.00,'TAZA','ORANGE')
;

INSERT INTO gorras VALUES
    (NULL, 11,60.00,'GORRA','WHITE'),
    (NULL, 11,60.00,'GORRA','RED'),
    (NULL, 11,60.00,'GORRA','BLUE'),
    (NULL, 11,60.00,'GORRA','BLANK'),
    (NULL, 11,60.00,'GORRA','GRAY'),
    (NULL, 11,60.00,'GORRA','WHITE'),
    (NULL, 11,60.00,'GORRA','RED'),
    (NULL, 11,60.00,'GORRA','BLUE'),
    (NULL, 11,60.00,'GORRA','BLANK'),
    (NULL, 11,60.00,'GORRA','GRAY')
;


CREATE TABLE imagenes(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    URL_IMAGEN  VARCHAR(250)
);


Clientes Compra
CREATE TABLE compras(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    NOMBRE VARCHAR(30),
    ID_PRODUCTO VARCHAR(15),
    PRODUCTO VARCHAR(100),
    SEXO VARCHAR(10),
    TALLA VARCHAR(20),
    COLOR VARCHAR(30),
    CANTIDAD VARCHAR(30),
    TELEFONO VARCHAR(30),
    PRECIO VARCHAR(30)
);
