drop database if exists torneos_pingPong;
create database torneos_pingPong;

use torneos_pingPong;

CREATE TABLE T_Usuario (
    nombre VARCHAR(50) PRIMARY KEY,
    contrasenya VARCHAR(20) NOT NULL
);

insert into T_Usuario (nombre, contrasenya) values ('Usuario', '1234');
insert into T_Usuario (nombre, contrasenya) values ('Admin', '1234');

select * from T_Usuario;

CREATE TABLE T_Jugador (
    id_jugador INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    total_partidos INT NOT NULL,
    partidos_ganados INT NOT NULL,
    total_torneos INT NOT NULL,
    torneos_ganados INT NOT NULL
);

insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Gandalf el gris', 0, 0, 0, 0);
insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Bilbo Bolsón', 0, 0, 0, 0);
insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Aragorn heredero de Isildur', 0, 0, 0, 0);
insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Tom Bombadil', 0, 0, 0, 0);
insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Cebadilla Mantecona', 0, 0, 0, 0);
insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Túrin hijo de Húrin', 0, 0, 0, 0);
insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Melkor', 0, 0, 0, 0);
insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Ilúvatar', 0, 0, 0, 0);

select * from T_Jugador;

CREATE TABLE T_Torneo (
    id_torneo INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    fecha date,
    estado ENUM('Finalizado','En proceso'),
    num_jugadores INT DEFAULT 8,
    campeon varchar(50)
);

insert T_Torneo (nombre, fecha, estado, campeon) values ('Torneo navidad', '2023-01-09', 'Finalizado', 'Ilúvatar');
insert T_Torneo (nombre, fecha, estado, campeon) values ('Torneo fin de curso', '2023-06-15', 'Finalizado', 'Cebadilla Mantecona');
insert T_Torneo (nombre, fecha, estado) values ('Torneo prueba', '2023-01-25', 'En proceso');

select * from T_Torneo;

CREATE TABLE T_Partido (
    id_partido INT PRIMARY KEY AUTO_INCREMENT,
    id_torneo INT,
    tipo_partido ENUM('cuartos', 'semifinal', 'final'),
    jugador_a varchar(50),
    jugador_b varchar(50),
    ganador varchar(50),
    FOREIGN KEY (id_torneo) REFERENCES T_Torneo (id_torneo)
);

insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('1', 'cuartos', 'Melkor', 'Aragorn heredero de Isildur', 'Melkor');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('1', 'cuartos', 'Gandalf el gris', 'Tom Bombadil', 'Gandalf el gris');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('1', 'cuartos', 'Túrin hijo de Húrin', 'Ilúvatar', 'Ilúvatar');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('1', 'cuartos', 'Cebadilla Mantecona', 'Bilbo Bolsón', 'Bilbo Bolsón');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('1', 'semifinal', 'Melkor', 'Gandalf el gris', 'Gandalf el gris');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('1', 'semifinal', 'Ilúvatar', 'Bilbo Bolsón', 'Ilúvatar');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('1', 'final', 'Gandalf el gris', 'Ilúvatar', 'Ilúvatar');


insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('2', 'cuartos', 'Gandalf el gris', 'Bilbo Bolsón', 'Gandalf el gris');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('2', 'cuartos', 'Aragorn heredero de Isildur', 'Tom Bombadil', 'Tom Bombadil');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('2', 'cuartos', 'Cebadilla Mantecona', 'Túrin hijo de Húrin', 'Cebadilla Mantecona');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('2', 'cuartos', 'Melkor', 'Ilúvatar', 'Ilúvatar');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('2', 'semifinal', 'Gandalf el gris', 'Tom Bombadil', 'Tom Bombadil');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('2', 'semifinal', 'Cebadilla Mantecona', 'Ilúvatar', 'Cebadilla Mantecona');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('2', 'final', 'Gandalf el gris', 'Tom Bombadil', 'Cebadilla Mantecona');

select * from T_Partido;




-- SELECT 
--     tt.id_torneo, tt.nombre as'nombreTorneo', tt.fecha, tt.estado, tj.nombre
-- FROM
--     T_Torneo tt
--         INNER JOIN
--     T_Jugador tj
--     where tt.campeon = tj.id_jugador;

SELECT 
    id_torneo, nombre, fecha, estado, campeon
FROM
    T_Torneo;
    
















    
