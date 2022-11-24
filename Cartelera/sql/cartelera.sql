CREATE TABLE `T_Categorias` (
    ID INTEGER NOT NULL PRIMARY KEY,
    nombre VARCHAR(50) DEFAULT NULL
);


CREATE TABLE `T_Peliculas` (
    `ID` INT NOT NULL,
    `titulo` VARCHAR(200) DEFAULT NULL,
    año INT DEFAULT NULL,
    duracion INT DEFAULT NULL,
    sinopsis VARCHAR(800) DEFAULT NULL,
    imagen VARCHAR(100) DEFAULT NULL,
    votos INT DEFAULT NULL,
    id_categoria INT DEFAULT NULL,
    PRIMARY KEY (ID),
    KEY idx_T_peliculas_id_categoria (id_categoria),
    CONSTRAINT T_peliculas_ibfk_1 FOREIGN KEY (id_categoria)
        REFERENCES T_Categorias (ID)
)