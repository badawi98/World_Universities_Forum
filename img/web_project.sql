-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2019 at 11:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `UserID` decimal(16,0) NOT NULL,
  `Username` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserID`, `Username`) VALUES
('1000000000000003', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `CourseID` binary(1) NOT NULL,
  `SenderID` decimal(16,0) NOT NULL,
  `Text` varchar(512) COLLATE utf8_bin NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` decimal(16,0) NOT NULL,
  `Course_Name` varchar(64) COLLATE utf8_bin NOT NULL,
  `picture` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `Course_Name`, `picture`) VALUES
('1', 'Data structures and algorithms', 'img/Data.png'),
('2', 'Object oriented programming', 'img/oop.jpg'),
('3', 'Software Engineering', 'img/SE.jpg'),
('4', 'Biochemistry', 'img/Biochemistry.jpg'),
('5', 'Genetics', 'img/Genetics.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `course_students`
--

CREATE TABLE `course_students` (
  `CourseID` decimal(16,0) NOT NULL,
  `InstructorID` decimal(16,0) NOT NULL,
  `StudentID` decimal(16,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course_students`
--

INSERT INTO `course_students` (`CourseID`, `InstructorID`, `StudentID`) VALUES
('1', '1000110000000001', '1000100000000001'),
('1', '1000110000000001', '1000100000000002'),
('4', '1000110000000002', '1001100000000002'),
('4', '1000110000000002', '1001100000000003');

-- --------------------------------------------------------

--
-- Table structure for table `instrctors`
--

CREATE TABLE `instrctors` (
  `InstructorID` decimal(16,0) NOT NULL,
  `Username` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `instrctors`
--

INSERT INTO `instrctors` (`InstructorID`, `Username`) VALUES
('1000110000000001', 'badawi'),
('1000110000000002', 'tamer');

-- --------------------------------------------------------

--
-- Table structure for table `instructors_courses`
--

CREATE TABLE `instructors_courses` (
  `CourseID` decimal(16,0) NOT NULL,
  `InstructorID` decimal(16,0) NOT NULL,
  `Decription` varchar(4096) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `instructors_courses`
--

INSERT INTO `instructors_courses` (`CourseID`, `InstructorID`, `Decription`) VALUES
('1', '1000110000000001', 'In this part, you will learn essential data structures like linked lists, stacks, queues, binary trees, and hash tables, and searching and sorting algorithms like binary search, quicksort, mergesort, insertion sort etc.'),
('2', '1000110000000001', 'Object-oriented programming is a programming paradigm based on the concept of \"objects\", which can contain data, in the form of fields, and code, in the form of procedures. A feature of objects is an object\'s procedures that can access and often modify the data fields of the object with which they are associated'),
('3', '1000110000000001', 'Software engineering is an engineering branch associated with development of software product using well-defined scientific principles, methods and procedures. The outcome of software engineering is an efficient and reliable software product.'),
('4', '1000110000000002', 'The pentose phosphate pathway (also called the phosphogluconate pathway and the hexose monophosphate shunt) is a metabolic pathway parallel to glycolysis. It generates NADPH and pentoses (5-carbon sugars) as well as ribose 5-phosphate, the last one a precursor for the synthesis of nucleotides. While it does involve oxidation of glucose, its primary role is anabolic rather than catabolic. The pathway is especially important in red blood cells (erythrocytes).'),
('5', '1000110000000002', 'The way we diagnose and treat diseases is changing, with new technologies enabled by a deeper understanding of the human genome and its relationship to health and disease. In HMX Genetics, you\'ll get an overview of fundamental concepts behind the evolving fields of human genetics, genomics, and precision medicine.');

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE `passwords` (
  `UserID` decimal(16,0) NOT NULL,
  `Password` varchar(512) COLLATE utf8_bin NOT NULL,
  `User_Name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`UserID`, `Password`, `User_Name`) VALUES
('1000110000000001', '08acb83c193b6e50f3e7ec49487724b735b5e439', 'badawi'),
('1000110000000002', '5bf1005ad1ee110b10f5c3d6d1890d1e16594479', 'tamer');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `ScholarshipID` decimal(16,0) NOT NULL,
  `UnivID` decimal(4,0) NOT NULL,
  `Desciption` varchar(4096) COLLATE utf8_bin NOT NULL,
  `Title` varchar(64) COLLATE utf8_bin NOT NULL,
  `Link` varchar(512) COLLATE utf8_bin NOT NULL,
  `picture` varchar(512) COLLATE utf8_bin NOT NULL,
  `start_Date` date NOT NULL,
  `Level` varchar(128) COLLATE utf8_bin NOT NULL,
  `Department` varchar(512) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`ScholarshipID`, `UnivID`, `Desciption`, `Title`, `Link`, `picture`, `start_Date`, `Level`, `Department`) VALUES
('1', '1000', 'you should study Computer engineering or computer science or anything equal Also your GPA is 3.5 of 4.0 or higher, you should eventually get the certificate from a recognized university.', 'Computer Engineering - Artificial Intelligence', 'https://www.najah.edu/en/about/governance/leadership/vice-president-academic-affairs/office-scholarships/', 'img/AI.jpg', '2019-04-22', 'Master , PhD', 'Computer and Information Technology'),
('2', '1001', 'You should Nationality holder from one of the North American or European continent countries.\r\nYour GPA is 3.9 of 4 or higher.\r\nHolds the bachelor\'s degree for a period not exceeding two years', 'Stanford Medicine', 'http://med.stanford.edu/smsa/funding/Scholarships.html', 'img/Stanford_Medicine.jpg', '2019-04-22', 'Master', 'Medicine');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` decimal(16,0) NOT NULL,
  `Username` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `Username`) VALUES
('1000100000000001', 'Ahmad'),
('1001100000000002', 'John'),
('1000100000000002', 'Tala'),
('1001100000000003', 'Tanya');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `UnivID` decimal(4,0) NOT NULL,
  `Univ_Name` varchar(64) COLLATE utf8_bin NOT NULL,
  `Description` text COLLATE utf8_bin,
  `Link` varchar(512) COLLATE utf8_bin DEFAULT NULL,
  `picture` varchar(512) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`UnivID`, `Univ_Name`, `Description`, `Link`, `picture`) VALUES
('1000', 'An Najah National University', 'An-Najah National University Palestine , Nablus.                                                                 \r\nAn-Najah National University is dedicated to promoting understanding, providing the highest quality undergraduate and graduate education, and serving as a leader in scientific research. An-Najah acts as a base for sustainable development by encouraging students and the University community to assume leadership roles and to participate in serving society.\r\n\r\nAn-Najah National University is a public institution whose mission is to advance learning, share knowledge and foster the skills needed in young men and women to succeed as people and professionals in all spheres of life. An-Najah also aims to instill a love of understanding in the students and to promote a culture of scientific excellence. The University strives to equip its students with the skills necessary to be productive and creative members of the Palestinian society and to compete in the domestic, Arab and international work markets.\r\n\r\nThe University is also dedicated to advancing scientific research on a global level and to meeting the community\'s needs by participating in sustainable economic, technical and human development. Additionally, An-Najah strives to preserve the cultural and religious heritage of the Palestinian people and to increase knowledge of this heritage.\r\n', 'https://www.najah.edu/en/', 'img/ANNU.jpg'),
('1001', 'Stanford University', 'Stanford University Stanford, California, United States\r\nStanford University is a private institution that was founded in 1885. It has a total undergraduate enrollment of 7,062, its setting is suburban, and the campus size is 8,180 acres. It utilizes a quarter-based academic calendar. Stanford University\'s ranking in the 2019 edition of Best Colleges is National Universities, 7. Its tuition and fees are $51,354 (2018-19).\r\n\r\nStanford University\'s pristine campus is located in California\'s Bay Area, about 30 miles from San Francisco. Stanford offers a wide range of student organizations, including the Stanford Pre-Business Association and Stanford Solar Car Project, which designs, builds and races a solar car every two years. The Stanford Cardinal are well known for the traditional \"Big Game\" against Cal, an annual football competition that awards the Stanford Axe - a sought-after trophy - to the victor. Stanford also has successful programs in tennis and golf. Only freshmen are required to live on campus, but students are guaranteed housing for all four years, and most choose to remain on campus. Greek life at Stanford represents approximately 25 percent of the student body.\r\n\r\nFour of Stanford University\'s seven schools offer undergraduate and graduate coursework, and the remaining three serve as purely graduate schools. Graduate programs include the highly ranked School of Education, School of Engineering, School of Law, School of Medicine and Graduate School of Business. The Stanford Woods Institute for the Environment oversees collaboration between environmental research, teaching and outreach. Stanford has a number of well-known theatrical and musical groups, including the Ram\'s Head Theatrical Society and the Mendicants, an all-male a cappella group. Notable Stanford alumni include former U.S. President Herbert Hoover, Hall of Fame NFL quarterback John Elway, actress Sigourney Weaver and golfer Tiger Woods, who played collegiately at Stanford.', 'https://www.stanford.edu/', 'img/Stanford.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` decimal(16,0) NOT NULL,
  `User_Name` varchar(64) COLLATE utf8_bin NOT NULL,
  `UnivID` decimal(4,0) NOT NULL,
  `First_Name` varchar(32) COLLATE utf8_bin NOT NULL,
  `Second_Name` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `Third_Name` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `Family_Name` varchar(32) COLLATE utf8_bin NOT NULL,
  `Date` date NOT NULL,
  `Email` varchar(256) COLLATE utf8_bin NOT NULL,
  `Gender` varchar(6) COLLATE utf8_bin NOT NULL,
  `picture` varchar(64) COLLATE utf8_bin NOT NULL,
  `Valid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `User_Name`, `UnivID`, `First_Name`, `Second_Name`, `Third_Name`, `Family_Name`, `Date`, `Email`, `Gender`, `picture`, `Valid`) VALUES
('1000000000000003', 'admin', '1000', 'admin', 'admin', 'admin', 'admin', '2019-04-22', 'admin@admin.com', 'Male', '', 1),
('1000100000000001', 'Ahmad', '1000', 'Ahmad', 'M7md', 'Ahmad', 'Dwaikat', '1998-03-07', 'Ahmad@hotmail.com', 'Male', '', 1),
('1000100000000002', 'Tala', '1000', 'Tala', 'Ahmad', 'Yousef', 'Jamal', '1998-05-24', 'tala@gmail.com', 'Female', '', 1),
('1000110000000001', 'badawi', '1000', 'Badawi', 'Ali', 'Badawi', 'Wawi', '1998-05-18', 'badawi1998@icloud.com', 'Male', '', 1),
('1000110000000002', 'tamer', '1000', 'Tamer', 'Maher', 'Ameen', 'Assaliya', '1998-05-06', 'tamer.assaliya@gmail.com', 'Male', '', 1),
('1001100000000002', 'John', '1001', 'John', 'Toni', 'Tom', 'Smith', '1996-08-12', 'john_smith@icloud.com', 'Male', '', 1),
('1001100000000003', 'Tanya', '1001', 'Tanya', 'John', 'Lionel', 'Messi', '1998-09-07', 'tanya@gmail.com', 'Female', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `usernameFK2` (`Username`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`CourseID`),
  ADD KEY `Chat_fk1` (`SenderID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `course_students`
--
ALTER TABLE `course_students`
  ADD PRIMARY KEY (`CourseID`,`InstructorID`,`StudentID`),
  ADD KEY `Course_Students_fk1` (`InstructorID`),
  ADD KEY `Course_Students_fk2` (`StudentID`);

--
-- Indexes for table `instrctors`
--
ALTER TABLE `instrctors`
  ADD PRIMARY KEY (`InstructorID`),
  ADD KEY `FK2` (`Username`);

--
-- Indexes for table `instructors_courses`
--
ALTER TABLE `instructors_courses`
  ADD PRIMARY KEY (`CourseID`,`InstructorID`),
  ADD KEY `Instructors_Courses_fk1` (`InstructorID`);

--
-- Indexes for table `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `User_Name` (`User_Name`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`ScholarshipID`),
  ADD KEY `Scholarship_fk0` (`UnivID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`),
  ADD KEY `FK_USER` (`Username`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`UnivID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `User_Name` (`User_Name`),
  ADD KEY `USERS_fk0` (`UnivID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `Admin_fk0` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usernameFK2` FOREIGN KEY (`Username`) REFERENCES `users` (`User_Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `Chat_fk0` FOREIGN KEY (`CourseID`) REFERENCES `course_students` (`CourseID`),
  ADD CONSTRAINT `Chat_fk1` FOREIGN KEY (`SenderID`) REFERENCES `course_students` (`StudentID`);

--
-- Constraints for table `course_students`
--
ALTER TABLE `course_students`
  ADD CONSTRAINT `Course_Students_fk0` FOREIGN KEY (`CourseID`) REFERENCES `course` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Course_Students_fk1` FOREIGN KEY (`InstructorID`) REFERENCES `instrctors` (`InstructorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Course_Students_fk2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instrctors`
--
ALTER TABLE `instrctors`
  ADD CONSTRAINT `FK2` FOREIGN KEY (`Username`) REFERENCES `users` (`User_Name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Instrctors_fk0` FOREIGN KEY (`InstructorID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instructors_courses`
--
ALTER TABLE `instructors_courses`
  ADD CONSTRAINT `Instructors_Courses_fk0` FOREIGN KEY (`CourseID`) REFERENCES `course` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Instructors_Courses_fk1` FOREIGN KEY (`InstructorID`) REFERENCES `instrctors` (`InstructorID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `passwords`
--
ALTER TABLE `passwords`
  ADD CONSTRAINT `Passwords_fk0` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Passwords_fk1` FOREIGN KEY (`User_Name`) REFERENCES `users` (`User_Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD CONSTRAINT `Scholarship_fk0` FOREIGN KEY (`UnivID`) REFERENCES `university` (`UnivID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `FK_USER` FOREIGN KEY (`Username`) REFERENCES `users` (`User_Name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Student_fk0` FOREIGN KEY (`StudentID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `USERS_fk0` FOREIGN KEY (`UnivID`) REFERENCES `university` (`UnivID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
