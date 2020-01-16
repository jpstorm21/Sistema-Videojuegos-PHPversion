create table usuario(
    nombreusuario varchar(100),
    passwd varchar(100),
    nombres varchar(100),
    apellidos varchar(100),
    email varchar(100),
    constraint primary key (nombreusuario)
) ENGINE=INNODB;

create table categoria (
    nombrecategoria varchar(100),
    idcategoria int  NOT NULL AUTO_INCREMENT,
    constraint primary key (idcategoria) 
)ENGINE=INNODB;

create table plataforma(
    idplataforma int AUTO_INCREMENT,
    nombreplataforma varchar(100),
    constraint primary key (idplataforma)
)ENGINE=INNODB;

create table juegos(
    idjuego int AUTO_INCREMENT,
    nombrejuego varchar(100),
    idcategoria int,
    constraint primary key (idjuego),
    constraint  juegos_fk foreign key (idcategoria) references categoria(idcategoria)
) ENGINE=INNODB;


create table usuarioJuego(
    idjuego int,
    estado boolean,
    nombreusuario varchar(100),
    constraint primary key (nombreusuario,idjuego),
    constraint usuario_fk foreign key (nombreusuario) references usuario(nombreusuario),
    constraint juego_fk  foreign key (idjuego) references juegos(idjuego)
)ENGINE=INNODB;

create table plataformajuego(
    idjuego int,
    idplataforma int,
    constraint primary key (idjuego,idplataforma),
    constraint foreign key (idjuego) references juegos(idjuego),
    constraint foreign key(idplataforma) references plataforma(idplataforma)
)ENGINE=INNODB;

INSERT INTO `usuario`(`nombreusuario`, `passwd`, `nombres`, `apellidos`, `email`) VALUES ('jp','lolowerty21','Juan Pablo','Martinez Romero','jmr032@alumnos.ucn.cl');
INSERT INTO `plataforma`(`nombreplataforma`) VALUES ('PS4');
INSERT INTO `plataforma`(`nombreplataforma`) VALUES ('Nintendo Switch');
INSERT INTO `categoria`(`nombrecategoria`) VALUES ('Pelea');
INSERT INTO `juegos`(`nombrejuego`, `idcategoria`) VALUES ('Super Smash Bros Ultimate',1);
INSERT INTO `usuariojuego`(`idjuego`, `estado`, `nombreusuario`) VALUES (1,false,'jp');
INSERT INTO `plataformajuego`(`idjuego`, `idplataforma`) VALUES (1,2);
