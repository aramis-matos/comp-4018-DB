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

-- put on server once it stops crapping out

-- ALTER TABLE exam DROP FOREIGN KEY `exam_ibfk_10`; 
-- ALTER TABLE exam DROP FOREIGN KEY `exam_ibfk_11`; 
-- ALTER TABLE exam DROP FOREIGN KEY `exam_ibfk_12`; 
-- ALTER TABLE exam DROP FOREIGN KEY `exam_ibfk_13`; 