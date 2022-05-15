CREATE TABLE student (
	id int(11) NOT null PRIMARY KEY  AUTO_INCREMENT,
    name varchar(50) NOT null, 
    age int(3) NOT null, 
    grade int(2) NOT null,
    school varchar(50) NOT null,
    coord_id int(11) NOT null
);

CREATE TABLE coordinator (
	id int(11) NOT null PRIMARY KEY AUTO_INCREMENT,
    name varchar(50) NOT null,
    uni_id int(11) NOT null,
    email varchar(50),
    logo varchar(50),
    url varchar(50)
);

CREATE TABLE team (
	id int(11) NOT null PRIMARY KEY AUTO_INCREMENT,
    score int(4),
    year_participated date DEFAULT CURRENT_DATE,
    est_1 int(11) not null,
    est_2 int(11) not null,
    est_3 int(11) not null,
    uni_id int(11) not null,
    coord_id int(11) not null
);

CREATE TABLE university (
	id int(11) PRIMARY KEY NOT null AUTO_INCREMENT, 
    name varchar(50) not null,
    country varchar(50) not null
);

CREATE TABLE exam (
	id int (11) NOT null PRIMARY KEY AUTO_INCREMENT,
    s1 int(11) NOT null,
    s2  int(11) NOT null,
    s3 int(11) NOT null,
    s4 int(11) NOT null,
    s5 int(11) NOT null,
    s6 int(11) NOT null,
    s7 int(11) NOT null,
    s8 int(11) NOT null,
    o1 int(11) NOT null,
    o2 int(11) NOT null,
    o3 int(11) NOT null,
    o4 int(11) NOT null,
    admin_id int(11) NOT null
);

CREATE TABLE admin (
	id int(11) not null PRIMARY KEY AUTO_INCREMENT, 
    name varchar(50) NOT null,
    email varchar(50) NOT null,
    position varchar(50) NOT null, 
    uni_id int(11) not null
);

CREATE TABLE has_selec (
	exam_id int(11) not null,
    selec_id int(11) not null
);

CREATE TABLE has_open (
	exam_id int(11) not null,
    open_id int(11) not null
);

CREATE TABLE selec (
	id int(11) NOT null PRIMARY KEY AUTO_INCREMENT, 
    actual_ans text NOT null,
    `year` date DEFAULT CURRENT_DATE,
    coord_id int(11) not null
);

CREATE TABLE possible_ans (
	selec_id int(11) NOT null,
    ans text
);

CREATE TABLE `open` (
	id int(11) NOT null PRIMARY KEY AUTO_INCREMENT, 
    actual_ans text NOT null,
    `year` date DEFAULT CURRENT_DATE,
    coord_id int(11) not null
);

CREATE TABLE choose_selec (
	admin_id int(11) not null,
    selec_id int(11) not null
);

CREATE TABLE choose_open (
	admin_id int(11) not null,
    open_id int(11) not null
);

CREATE TABLE win_total (
	medal_id int(11) not null,
    team_id int(11) not null 
);

CREATE TABLE win_uni (
	medal_id int(11) not null,
    team_id int(11) not null 
);

CREATE TABLE team_selec_ans (
	team_id int(11) not null,
    selec_id int(11) not null
);

CREATE TABLE team_open_ans (
	team_id int(11) not null,
    open_id int(11) not null
);
 
CREATE TABLE medals (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
	year_date date DEFAULT CURRENT_DATE,
    gold_team_id int(11) not null,
    silver_team_id int(11) not null,
    bronze_team_id int(11) not null
);

ALTER TABLE student ADD FOREIGN KEY (coord_id) REFERENCES coordinator(id);

ALTER TABLE coordinator add FOREIGN KEY (uni_id) REFERENCES university(id);

ALTER TABLE team ADD FOREIGN KEY (uni_id) REFERENCES university(id);

ALTER TABLE team ADD FOREIGN KEY (coord_id) REFERENCES coordinator(id);

ALTER TABLE exam ADD FOREIGN KEY (admin_id) REFERENCES admin(id);

ALTER TABLE admin ADD FOREIGN KEY (uni_id) REFERENCES university(id);

ALTER TABLE has_selec ADD FOREIGN KEY (exam_id) REFERENCES exam(id);

ALTER TABLE has_selec ADD FOREIGN KEY (selec_id) REFERENCES selec(id);

ALTER TABLE has_open ADD FOREIGN KEY (exam_id) REFERENCES exam(id);

ALTER TABLE has_open ADD FOREIGN KEY (open_id) REFERENCES open(id);

ALTER TABLE selec ADD FOREIGN KEY (coord_id) REFERENCES coordinator(id);

ALTER TABLE possible_ans ADD FOREIGN KEY (selec_id) REFERENCES  selec(id);

ALTER TABLE possible_ans ADD FOREIGN KEY (selec_id) REFERENCES selec(id);

ALTER TABLE open ADD FOREIGN KEY (coord_id) REFERENCES coordinator(id);

ALTER TABLE choose_selec ADD FOREIGN KEY (admin_id) REFERENCES admin(id);

ALTER TABLE choose_selec ADD FOREIGN KEY (selec_id) REFERENCES selec(id);

ALTER TABLE choose_open ADD FOREIGN KEY (admin_id) REFERENCES admin(id);

ALTER TABLE choose_open ADD FOREIGN KEY (open_id) REFERENCES open(id);

ALTER TABLE win_total ADD FOREIGN KEY (medal_id) REFERENCES medals(id);

ALTER TABLE win_total ADD FOREIGN KEY (team_id) REFERENCES team(id);

ALTER TABLE win_uni ADD FOREIGN KEY (medal_id) REFERENCES medals(id);

ALTER TABLE win_uni ADD FOREIGN KEY (team_id) REFERENCES team(id);

ALTER TABLE team_selec_ans ADD FOREIGN KEY (team_id) REFERENCES team(id);

ALTER TABLE team_selec_ans ADD FOREIGN KEY (selec_id) REFERENCES selec(id);

ALTER TABLE team_open_ans ADD FOREIGN KEY (open_id) REFERENCES open(id);

ALTER TABLE team_open_ans ADD FOREIGN KEY (team_id) REFERENCES team(id);

ALTER TABLE team_open_ans ADD FOREIGN KEY (open_id) REFERENCES open(id);

ALTER TABLE team ADD FOREIGN KEY (`est_1`) REFERENCES student(id);

ALTER TABLE team ADD FOREIGN KEY (`est_2`) REFERENCES student(id);

ALTER TABLE team ADD FOREIGN KEY (`est_3`) REFERENCES student(id);

ALTER TABLE exam ADD FOREIGN KEY (s1) REFERENCES selec(id);

ALTER TABLE exam ADD FOREIGN KEY (s2) REFERENCES selec(id);

ALTER TABLE exam ADD FOREIGN KEY (s3) REFERENCES selec(id);

ALTER TABLE exam ADD FOREIGN KEY (s4) REFERENCES selec(id);

ALTER TABLE exam ADD FOREIGN KEY (s5) REFERENCES selec(id);

ALTER TABLE exam ADD FOREIGN KEY (s6) REFERENCES selec(id);

ALTER TABLE exam ADD FOREIGN KEY (s7) REFERENCES open(id);

ALTER TABLE exam ADD FOREIGN KEY (s8) REFERENCES open(id);

ALTER TABLE exam ADD FOREIGN KEY (o1) REFERENCES open(id);

ALTER TABLE exam ADD FOREIGN KEY (o2) REFERENCES open(id);

ALTER TABLE exam ADD FOREIGN KEY (o3) REFERENCES open(id);

ALTER TABLE exam ADD FOREIGN KEY (o4) REFERENCES open(id);

INSERT INTO `admin`(`id`, `name`, `email`, `position`, `uni_id`) VALUES (1, 'jesus', 'jesus@upr.edu' ,'god', 1);

INSERT `admin` (`id`, `name`, `email`, `position`, `uni_id`) VALUES (2 ,'juan', 'juan@upr.edu', 'horse', 1);

INSERT INTO `choose_selec`(`admin_id`, `selec_id`) VALUES (1,2);

INSERT INTO `coordinator`(`id`, `name`, `uni_id`, `email`, `logo`, `url`) VALUES (2 ,'chungus' ,1, 'chungus@upr.edu', 'pride flag.png', 'uglyandproud.com');

INSERT INTO `coordinator`(`id`, `name`, `uni_id`, `email`, `logo`, `url`) VALUES (3, 'jim' ,1, 'gg@ez.com', 'git gut', 	'gg.com');

INSERT INTO `coordinator`(`id`, `name`, `uni_id`, `email`, `logo`, `url`) VALUES (4, 'gg', 1 ,'gg@ez.com', 	'lol', 'kek.com');

INSERT INTO `exam`(`id`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `o1`, `o2`, `o3`, `o4`, `admin_id`) VALUES (3, 	2, 	2, 	2, 	2, 	2, 	2, 	2, 	2, 	1, 	1, 	1, 	1, 	1);

INSERT INTO `has_open`(`exam_id`, `open_id`) VALUES (3,1);

INSERT INTO `has_selec`(`selec_id`, `exam_id`) VALUES (3,3);

INSERT INTO `medals`(`id`, `year_date`, `gold_team_id`, `silver_team_id`, `bronze_team_id`) VALUES (1, 2022-05-12, 	2, 	3, 	4);

INSERT INTO `open`(`id`, `actual_ans`, `year`, `coord_id`) VALUES (1, 'duh' ,2022-05-12, 2);

INSERT INTO `open`(`id`, `actual_ans`, `year`, `coord_id`) VALUES (2 ,'420' ,2022-05-12 , 3);

INSERT INTO `open`(`id`, `actual_ans`, `year`, `coord_id`) VALUES (3 ,'blaze it', 2022-05-12, 4);

INSERT INTO `open`(`id`, `actual_ans`, `year`, `coord_id`) VALUES (4, 'nuggies', 2022-05-12, 3);

INSERT INTO `possible_ans`(`ans`, `selec_id`) VALUES ('duh',2);

INSERT INTO `possible_ans`(`ans`, `selec_id`) VALUES ('chungus', 2);

INSERT INTO `selec` (`id`, `actual_ans`, `year`, `coord_id`) VALUES (NULL, 'e=mc^2', '2022-05-11', '2'), (NULL, 'the quran', '2022-05-11', '4'), (NULL, 'sapiens', '2022-05-12', '3');

INSERT INTO `student` (`id`, `name`, `age`, `grade`, `school`, `coord_id`) VALUES (NULL, 'erza', '13', '8', 'John Cena Elementary School', '2'), (NULL, 'erza', '13', '8', 'John Cena Elementary School', '3'), (NULL, 'manuel', '12', '7', 'John Cena Elementary School', '4'), (NULL, 'mumei', '15', '9', 'vamos a la playa', '2');

INSERT INTO `team` (`id`, `score`, `year_participated`, `est_1`, `est_2`, `est_3`, `uni_id`, `coord_id`) VALUES (NULL, '12', '2022-05-12', '1', '2', '3', '1', '2'), (NULL, '16', '2022-05-12', '2', '3', '4', '1', '4');

INSERT INTO `team_open_ans`(`team_id`, `open_id`) VALUES (2,3);

INSERT INTO `team_selec_ans`(`team_id`, `selec_id`) VALUES (2,4);

INSERT INTO `university` (`id`, `name`, `country`) VALUES (NULL, 'upr', 'pr'), (NULL, 'MIT', 'USA');

INSERT INTO `team_selec_ans`(`team_id`, `selec_id`) VALUES (1,1);

INSERT INTO `team_selec_ans`(`team_id`, `selec_id`) VALUES (1,2);

INSERT INTO `university` (`id`, `name`, `country`) VALUES (NULL, 'upr', 'pr'), (NULL, 'MIT', 'USA');

INSERT INTO `win_total`(`medal_id`, `team_id`) VALUES (1,1);

INSERT INTO `win_total`(`medal_id`, `team_id`) VALUES (1,2);

INSERT INTO `win_uni`(`medal_id`, `team_id`) VALUES (1,1);