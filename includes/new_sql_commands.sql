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
	selec_ans int(11) NOT null,
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

DROP TABLE has_coord;

ALTER TABLE has_open ADD FOREIGN KEY (exam_id) REFERENCES exam(id);

ALTER TABLE has_open ADD FOREIGN KEY (open_id) REFERENCES open(id);

ALTER TABLE selec ADD FOREIGN KEY (coord_id) REFERENCES coordinator(id);

ALTER TABLE possible_ans ADD FOREIGN KEY (selec_id) REFERENCES  selec(id);

ALTER TABLE possible_ans DROP selec_ans;

ALTER TABLE possible_ans ADD selec_id int(11) not null;

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

ALTER TABLE exam ADD FOREIGN KEY (s7) REFERENCES selec(id);

ALTER TABLE exam ADD FOREIGN KEY (s8) REFERENCES selec(id);

ALTER TABLE exam ADD FOREIGN KEY (o1) REFERENCES selec(id);

ALTER TABLE exam ADD FOREIGN KEY (o2) REFERENCES selec(id);

ALTER TABLE exam ADD FOREIGN KEY (o3) REFERENCES selec(id);

ALTER TABLE exam ADD FOREIGN KEY (o4) REFERENCES selec(id);

CREATE TABLE `admin` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `position` varchar(50) NOT NULL,
 `uni_id` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `uni_id` (`uni_id`),
 CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `university` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `choose_open` (
 `admin_id` int(11) NOT NULL,
 `open_id` int(11) NOT NULL,
 KEY `admin_id` (`admin_id`),
 KEY `open_id` (`open_id`),
 CONSTRAINT `choose_open_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`),
 CONSTRAINT `choose_open_ibfk_2` FOREIGN KEY (`open_id`) REFERENCES `open` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `choose_selec` (
 `admin_id` int(11) NOT NULL,
 `selec_id` int(11) NOT NULL,
 KEY `admin_id` (`admin_id`),
 KEY `selec_id` (`selec_id`),
 CONSTRAINT `choose_selec_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`),
 CONSTRAINT `choose_selec_ibfk_2` FOREIGN KEY (`selec_id`) REFERENCES `selec` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `coordinator` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(50) NOT NULL,
 `uni_id` int(11) NOT NULL,
 `email` varchar(50) DEFAULT NULL,
 `logo` varchar(50) DEFAULT NULL,
 `url` varchar(50) DEFAULT NULL,
 PRIMARY KEY (`id`),
 KEY `uni_id` (`uni_id`),
 CONSTRAINT `coordinator_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `university` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `exam` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `s1` int(11) NOT NULL,
 `s2` int(11) NOT NULL,
 `s3` int(11) NOT NULL,
 `s4` int(11) NOT NULL,
 `s5` int(11) NOT NULL,
 `s6` int(11) NOT NULL,
 `s7` int(11) NOT NULL,
 `s8` int(11) NOT NULL,
 `o1` int(11) NOT NULL,
 `o2` int(11) NOT NULL,
 `o3` int(11) NOT NULL,
 `o4` int(11) NOT NULL,
 `admin_id` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `admin_id` (`admin_id`),
 KEY `s1` (`s1`),
 KEY `s2` (`s2`),
 KEY `s3` (`s3`),
 KEY `s4` (`s4`),
 KEY `s5` (`s5`),
 KEY `s6` (`s6`),
 KEY `s7` (`s7`),
 KEY `s8` (`s8`),
 KEY `o1` (`o1`),
 KEY `o2` (`o2`),
 KEY `o3` (`o3`),
 KEY `o4` (`o4`),
 CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`),
 CONSTRAINT `exam_ibfk_10` FOREIGN KEY (`o1`) REFERENCES `selec` (`id`),
 CONSTRAINT `exam_ibfk_11` FOREIGN KEY (`o2`) REFERENCES `selec` (`id`),
 CONSTRAINT `exam_ibfk_12` FOREIGN KEY (`o3`) REFERENCES `selec` (`id`),
 CONSTRAINT `exam_ibfk_13` FOREIGN KEY (`o4`) REFERENCES `selec` (`id`),
 CONSTRAINT `exam_ibfk_2` FOREIGN KEY (`s1`) REFERENCES `selec` (`id`),
 CONSTRAINT `exam_ibfk_3` FOREIGN KEY (`s2`) REFERENCES `selec` (`id`),
 CONSTRAINT `exam_ibfk_4` FOREIGN KEY (`s3`) REFERENCES `selec` (`id`),
 CONSTRAINT `exam_ibfk_5` FOREIGN KEY (`s4`) REFERENCES `selec` (`id`),
 CONSTRAINT `exam_ibfk_6` FOREIGN KEY (`s5`) REFERENCES `selec` (`id`),
 CONSTRAINT `exam_ibfk_7` FOREIGN KEY (`s6`) REFERENCES `selec` (`id`),
 CONSTRAINT `exam_ibfk_8` FOREIGN KEY (`s7`) REFERENCES `selec` (`id`),
 CONSTRAINT `exam_ibfk_9` FOREIGN KEY (`s8`) REFERENCES `selec` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `has_open` (
 `exam_id` int(11) NOT NULL,
 `open_id` int(11) NOT NULL,
 KEY `exam_id` (`exam_id`),
 KEY `open_id` (`open_id`),
 CONSTRAINT `has_open_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`id`),
 CONSTRAINT `has_open_ibfk_2` FOREIGN KEY (`open_id`) REFERENCES `open` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `has_selec` (
 `selec_id` int(11) NOT NULL,
 `exam_id` int(11) NOT NULL,
 KEY `exam_id` (`exam_id`),
 KEY `selec_id` (`selec_id`),
 CONSTRAINT `has_selec_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`id`),
 CONSTRAINT `has_selec_ibfk_2` FOREIGN KEY (`selec_id`) REFERENCES `selec` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `medals` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `year_date` date DEFAULT curdate(),
 `gold_team_id` int(11) NOT NULL,
 `silver_team_id` int(11) NOT NULL,
 `bronze_team_id` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `open` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `actual_ans` text NOT NULL,
 `year` date DEFAULT curdate(),
 `coord_id` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `coord_id` (`coord_id`),
 CONSTRAINT `open_ibfk_1` FOREIGN KEY (`coord_id`) REFERENCES `coordinator` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `possible_ans` (
 `ans` text DEFAULT NULL,
 `selec_id` int(11) NOT NULL,
 KEY `selec_id` (`selec_id`),
 CONSTRAINT `possible_ans_ibfk_1` FOREIGN KEY (`selec_id`) REFERENCES `selec` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `selec` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `actual_ans` text NOT NULL,
 `year` date DEFAULT curdate(),
 `coord_id` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `coord_id` (`coord_id`),
 CONSTRAINT `selec_ibfk_1` FOREIGN KEY (`coord_id`) REFERENCES `coordinator` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `student` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(50) NOT NULL,
 `age` int(3) NOT NULL,
 `grade` int(2) NOT NULL,
 `school` varchar(50) NOT NULL,
 `coord_id` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `coord_id` (`coord_id`),
 CONSTRAINT `student_ibfk_1` FOREIGN KEY (`coord_id`) REFERENCES `coordinator` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

 	CREATE TABLE `team` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `score` int(4) DEFAULT NULL,
 `year_participated` date DEFAULT curdate(),
 `est_1` int(11) NOT NULL,
 `est_2` int(11) NOT NULL,
 `est_3` int(11) NOT NULL,
 `uni_id` int(11) NOT NULL,
 `coord_id` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `uni_id` (`uni_id`),
 KEY `coord_id` (`coord_id`),
 KEY `est_1` (`est_1`),
 KEY `est_2` (`est_2`),
 KEY `est_3` (`est_3`),
 CONSTRAINT `team_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `university` (`id`),
 CONSTRAINT `team_ibfk_2` FOREIGN KEY (`coord_id`) REFERENCES `coordinator` (`id`),
 CONSTRAINT `team_ibfk_3` FOREIGN KEY (`est_1`) REFERENCES `student` (`id`),
 CONSTRAINT `team_ibfk_4` FOREIGN KEY (`est_2`) REFERENCES `student` (`id`),
 CONSTRAINT `team_ibfk_5` FOREIGN KEY (`est_3`) REFERENCES `student` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `team_open_ans` (
 `team_id` int(11) NOT NULL,
 `open_id` int(11) NOT NULL,
 KEY `team_id` (`team_id`),
 KEY `open_id` (`open_id`),
 CONSTRAINT `team_open_ans_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`),
 CONSTRAINT `team_open_ans_ibfk_2` FOREIGN KEY (`open_id`) REFERENCES `open` (`id`),
 CONSTRAINT `team_open_ans_ibfk_3` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`),
 CONSTRAINT `team_open_ans_ibfk_4` FOREIGN KEY (`open_id`) REFERENCES `open` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `team_selec_ans` (
 `team_id` int(11) NOT NULL,
 `selec_id` int(11) NOT NULL,
 KEY `team_id` (`team_id`),
 KEY `selec_id` (`selec_id`),
 CONSTRAINT `team_selec_ans_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`),
 CONSTRAINT `team_selec_ans_ibfk_2` FOREIGN KEY (`selec_id`) REFERENCES `selec` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `university` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(50) NOT NULL,
 `country` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `win_total` (
 `medal_id` int(11) NOT NULL,
 `team_id` int(11) NOT NULL,
 KEY `medal_id` (`medal_id`),
 KEY `team_id` (`team_id`),
 CONSTRAINT `win_total_ibfk_1` FOREIGN KEY (`medal_id`) REFERENCES `medals` (`id`),
 CONSTRAINT `win_total_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

CREATE TABLE `win_uni` (
 `medal_id` int(11) NOT NULL,
 `team_id` int(11) NOT NULL,
 KEY `medal_id` (`medal_id`),
 KEY `team_id` (`team_id`),
 CONSTRAINT `win_uni_ibfk_1` FOREIGN KEY (`medal_id`) REFERENCES `medals` (`id`),
 CONSTRAINT `win_uni_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4