CREATE DATABASE comateq001;

CREATE TABLE `admin` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4


CREATE TABLE `coordinador` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `nombre` varchar(50) NOT NULL,
 `uni_country` varchar(50) NOT NULL,
 `uni_id` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4

CREATE TABLE `crear` (
 `fecha` datetime NOT NULL DEFAULT current_timestamp(),
 `coord_id` int(11) NOT NULL,
 `problem_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `estudiante` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `nombre` varchar(50) NOT NULL,
 `team_id` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `team_id` (`team_id`),
 CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `equipo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `examen` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `admin_id` int(11) NOT NULL,
 `selec_mult_id` int(11) NOT NULL,
 `cons_mult_id` int(11) NOT NULL,
 `selec_mult_id_1` int(11) NOT NULL,
 `selec_mult_id_2` int(11) NOT NULL,
 `selec_mult_id_3` int(11) NOT NULL,
 `selec_mult_id_4` int(11) NOT NULL,
 `selec_mult_id_5` int(11) NOT NULL,
 `selec_mult_id_6` int(11) NOT NULL,
 `selec_mult_id_7` int(11) NOT NULL,
 `cons_mult_id_1` int(11) NOT NULL,
 `cons_mult_id_2` int(11) NOT NULL,
 `cons_mult_id_3` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `admin_id` (`admin_id`),
 KEY `selec_mult_id` (`selec_mult_id`),
 KEY `cons_mult_id` (`cons_mult_id`),
 KEY `selec_mult_id_1` (`selec_mult_id_1`),
 KEY `selec_mult_id_2` (`selec_mult_id_2`),
 KEY `selec_mult_id_3` (`selec_mult_id_3`),
 KEY `selec_mult_id_4` (`selec_mult_id_4`),
 KEY `selec_mult_id_5` (`selec_mult_id_5`),
 KEY `selec_mult_id_6` (`selec_mult_id_6`),
 KEY `selec_mult_id_7` (`selec_mult_id_7`),
 KEY `cons_mult_id_1` (`cons_mult_id_1`),
 KEY `cons_mult_id_2` (`cons_mult_id_2`),
 KEY `cons_mult_id_3` (`cons_mult_id_3`),
 CONSTRAINT `examen_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`),
 CONSTRAINT `examen_ibfk_10` FOREIGN KEY (`selec_mult_id_7`) REFERENCES `selec_mult` (`id`),
 CONSTRAINT `examen_ibfk_11` FOREIGN KEY (`cons_mult_id_1`) REFERENCES `cons_mult` (`id`),
 CONSTRAINT `examen_ibfk_12` FOREIGN KEY (`cons_mult_id_2`) REFERENCES `cons_mult` (`id`),
 CONSTRAINT `examen_ibfk_13` FOREIGN KEY (`cons_mult_id_3`) REFERENCES `cons_mult` (`id`),
 CONSTRAINT `examen_ibfk_2` FOREIGN KEY (`selec_mult_id`) REFERENCES `selec_mult` (`id`),
 CONSTRAINT `examen_ibfk_3` FOREIGN KEY (`cons_mult_id`) REFERENCES `cons_mult` (`id`),
 CONSTRAINT `examen_ibfk_4` FOREIGN KEY (`selec_mult_id_1`) REFERENCES `selec_mult` (`id`),
 CONSTRAINT `examen_ibfk_5` FOREIGN KEY (`selec_mult_id_2`) REFERENCES `selec_mult` (`id`),
 CONSTRAINT `examen_ibfk_6` FOREIGN KEY (`selec_mult_id_3`) REFERENCES `selec_mult` (`id`),
 CONSTRAINT `examen_ibfk_7` FOREIGN KEY (`selec_mult_id_4`) REFERENCES `selec_mult` (`id`),
 CONSTRAINT `examen_ibfk_8` FOREIGN KEY (`selec_mult_id_5`) REFERENCES `selec_mult` (`id`),
 CONSTRAINT `examen_ibfk_9` FOREIGN KEY (`selec_mult_id_6`) REFERENCES `selec_mult` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `possible_ans` (
 `ans` varchar(50) NOT NULL,
 `problem_id` int(11) NOT NULL,
 PRIMARY KEY (`ans`),
 KEY `problem_id` (`problem_id`),
 CONSTRAINT `possible_ans_ibfk_1` FOREIGN KEY (`problem_id`) REFERENCES `selec_mult` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `selec_mult` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `description` text NOT NULL,
 `student_ans` text DEFAULT NULL,
 `real_ans` text NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4

CREATE TABLE `equipo` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `fecha_creacion` datetime DEFAULT current_timestamp(),
 `coordinador_id` int(11) NOT NULL,
 `est_1_id` int(11) NOT NULL,
 `est_2_id` int(11) NOT NULL,
 `est_3_id` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `coordinador_id` (`coordinador_id`),
 CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`coordinador_id`) REFERENCES `coordinador` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4

CREATE TABLE `cons_mult` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `description` text NOT NULL,
 `student_ans` text DEFAULT NULL,
 `real_ans` text NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4