CREATE DATABASE s_n_d_db;

USE s_n_d_db;

CREATE TABLE projects (
  id INT AUTO_INCREMENT PRIMARY KEY,
  projectid VARCHAR(255) NOT NULL,
  title VARCHAR(255) NOT NULL,
  type VARCHAR(255) NOT NULL,
  location VARCHAR(255) NOT NULL,
  status TEXT NULL,
  year VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  image_path0 VARCHAR(255) NOT NULL,
  image_path1 VARCHAR(255) NULL,
  image_path2 VARCHAR(255) NULL,
  image_path3 VARCHAR(255) NULL,
  image_path4 VARCHAR(255) NULL,
  image_path5 VARCHAR(255) NULL,
  image_path6 VARCHAR(255) NULL,
  image_path7 VARCHAR(255) NULL,
  image_path8 VARCHAR(255) NULL,
  image_path9 VARCHAR(255) NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO projects (projectid, title, type, location, status, year, description, image_path0, image_path1, image_path2, image_path3, image_path4, image_path5, image_path6, image_path7, image_path8, image_path9) VALUES 
('001', 'MARITIME MUSEUM', 'STUDENT WORK', 'TAIWAN', 'UNBUILT', '2010', 
'This is a record of my own student work. The design seeks recreation of the left-behind 
spaces that does not included in urban travel experience. It started with inspecting pattern 
of the city, interpreting possible formation, and inverse the narrative logic, in order to 
generate public space that is at the reversed situation, showing critique of vehicular-oriented 
urban space configurations by creating a public architecture with left behind space quality.', 
"images/001/001-0.jpg",
"images/001/001-1.jpg",
"images/001/001-2.jpg",
"images/001/001-3.jpg",
"images/001/001-4.jpg",
"images/001/001-5.jpg",
"images/001/001-6.jpg",
"images/001/001-7.jpg",
"images/001/001-8.jpg",
NULL);

INSERT INTO projects (projectid, title, type, location, status, year, description, image_path0, image_path1, image_path2, image_path3, image_path4, image_path5, image_path6, image_path7, image_path8, image_path9) VALUES
('002', 'INTER-TERRITORY', 'STUDENT WORK', 'TAIWAN', 'UNBUILT', '2012', 
'This is a record of my own student work. It is an experiment on implanting local public space 
mechanism into residential neighhourhood (housing)', 
"images/002/002-0.jpg",
"images/002/002-1.jpg",
"images/002/002-2.jpg",
"images/002/002-3.jpg",
"images/002/002-4.jpg",
"images/002/002-5.jpg",
"images/002/002-6.jpg",
"images/002/002-7.jpg",
"images/002/002-8.jpg",
NULL);

INSERT INTO projects (projectid, title, type, location, status, year, description, image_path0, image_path1, image_path2, image_path3, image_path4, image_path5, image_path6, image_path7, image_path8, image_path9) VALUES
('003', 'ANTTEM', 'TYPOGRAPHY', 'DIGITAL', 'ONGOING', '2024', 
'This is my first attempt at creating typography, inspired by the fonts in the drawings of 
Enric Miralles. The name ANTTEM stands for "A Naïve Tribute To Enric Miralles." 
The typography is still evolving...', 
"images/003/003-0.jpg",
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL);

INSERT INTO projects (projectid, title, type, location, status, year, description, image_path0, image_path1, image_path2, image_path3, image_path4, image_path5, image_path6, image_path7, image_path8, image_path9) VALUES
('004', 'SND WEB PORTAL', 'WEBSITE', 'WWW', 'ONGOING', '2024', 
'The layout design and coding of the STUDIO NAÏVE DESIGN web portal are still in progress. I am 
currently designing its functionality while simultaneously standardizing my workflow, 
in order to meet my requirements for processing tasks and showcasing my work.', 
"images/004/004-0.jpg",
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL);


CREATE TABLE about (
  id INT AUTO_INCREMENT PRIMARY KEY,
  date VARCHAR(255) NOT NULL,
  title VARCHAR(255) NOT NULL,
  subtitle VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO about (date, title, subtitle, description) VALUES 
('20241214', 'ABOUT', 'STUDIO NAÏVE DESIGN', 
'SND is the solo practice of Goo Fu Voon based in Malaysia.
He believes that design is not necessarily about beautiful form, 
complex programs, or visual planning. He tries to find a more 
appropriate way of doing things within stable tectonic contexts, adapting to 
different locations and circumstances, seeking a practical, limited trade-off 
solution between ideas and reality.');