-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 09:57 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Web_Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `UserID` decimal(16,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `Chat`
--

CREATE TABLE `Chat` (
  `CourseID` binary(1) NOT NULL,
  `SenderID` decimal(16,0) NOT NULL,
  `Text` varchar(512) COLLATE utf8_bin NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE `Course` (
  `CourseID` decimal(16,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `Course_Students`
--

CREATE TABLE `Course_Students` (
  `CourseID` decimal(16,0) NOT NULL,
  `InstructorID` decimal(16,0) NOT NULL,
  `StudentID` decimal(16,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `Instrctors`
--

CREATE TABLE `Instrctors` (
  `InstructorID` decimal(16,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `Instructors_Courses`
--

CREATE TABLE `Instructors_Courses` (
  `CourseID` decimal(16,0) NOT NULL,
  `InstructorID` decimal(16,0) NOT NULL,
  `Decription` varchar(4096) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `Passwords`
--

CREATE TABLE `Passwords` (
  `UserID` decimal(16,0) NOT NULL,
  `Password` varchar(512) COLLATE utf8_bin NOT NULL,
  `User_Name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `Scholarship`
--

CREATE TABLE `Scholarship` (
  `ScholarshipID` decimal(16,0) NOT NULL,
  `UnivID` decimal(4,0) NOT NULL,
  `Desciption` varchar(4096) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `StudentID` decimal(16,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `University`
--

CREATE TABLE `University` (
  `UnivID` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `UserID` decimal(16,0) NOT NULL,
  `User_Name` varchar(64) COLLATE utf8_bin NOT NULL,
  `UnivID` decimal(4,0) NOT NULL,
  `First_Name` varchar(32) COLLATE utf8_bin NOT NULL,
  `Second_Name` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `Third_Name` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `Family_Name` varchar(32) COLLATE utf8_bin NOT NULL,
  `Date` date NOT NULL,
  `Email` varchar(256) COLLATE utf8_bin NOT NULL,
  `Gender` varchar(6) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `Chat`
--
ALTER TABLE `Chat`
  ADD PRIMARY KEY (`CourseID`),
  ADD KEY `Chat_fk1` (`SenderID`);

--
-- Indexes for table `Course`
--
ALTER TABLE `Course`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `Course_Students`
--
ALTER TABLE `Course_Students`
  ADD PRIMARY KEY (`CourseID`,`InstructorID`,`StudentID`),
  ADD KEY `Course_Students_fk1` (`InstructorID`),
  ADD KEY `Course_Students_fk2` (`StudentID`);

--
-- Indexes for table `Instrctors`
--
ALTER TABLE `Instrctors`
  ADD PRIMARY KEY (`InstructorID`);

--
-- Indexes for table `Instructors_Courses`
--
ALTER TABLE `Instructors_Courses`
  ADD PRIMARY KEY (`CourseID`,`InstructorID`),
  ADD KEY `Instructors_Courses_fk1` (`InstructorID`);

--
-- Indexes for table `Passwords`
--
ALTER TABLE `Passwords`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `User_Name` (`User_Name`);

--
-- Indexes for table `Scholarship`
--
ALTER TABLE `Scholarship`
  ADD PRIMARY KEY (`ScholarshipID`),
  ADD KEY `Scholarship_fk0` (`UnivID`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indexes for table `University`
--
ALTER TABLE `University`
  ADD PRIMARY KEY (`UnivID`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `User_Name` (`User_Name`),
  ADD KEY `USERS_fk0` (`UnivID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Admin`
--
ALTER TABLE `Admin`
  ADD CONSTRAINT `Admin_fk0` FOREIGN KEY (`UserID`) REFERENCES `USERS` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Chat`
--
ALTER TABLE `Chat`
  ADD CONSTRAINT `Chat_fk0` FOREIGN KEY (`CourseID`) REFERENCES `Course_Students` (`CourseID`),
  ADD CONSTRAINT `Chat_fk1` FOREIGN KEY (`SenderID`) REFERENCES `Course_Students` (`StudentID`);

--
-- Constraints for table `Course_Students`
--
ALTER TABLE `Course_Students`
  ADD CONSTRAINT `Course_Students_fk0` FOREIGN KEY (`CourseID`) REFERENCES `Course` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Course_Students_fk1` FOREIGN KEY (`InstructorID`) REFERENCES `Instrctors` (`InstructorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Course_Students_fk2` FOREIGN KEY (`StudentID`) REFERENCES `Student` (`StudentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Instrctors`
--
ALTER TABLE `Instrctors`
  ADD CONSTRAINT `Instrctors_fk0` FOREIGN KEY (`InstructorID`) REFERENCES `USERS` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Instructors_Courses`
--
ALTER TABLE `Instructors_Courses`
  ADD CONSTRAINT `Instructors_Courses_fk0` FOREIGN KEY (`CourseID`) REFERENCES `Course` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Instructors_Courses_fk1` FOREIGN KEY (`InstructorID`) REFERENCES `Instrctors` (`InstructorID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Passwords`
--
ALTER TABLE `Passwords`
  ADD CONSTRAINT `Passwords_fk0` FOREIGN KEY (`UserID`) REFERENCES `USERS` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Passwords_fk1` FOREIGN KEY (`User_Name`) REFERENCES `USERS` (`User_Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Scholarship`
--
ALTER TABLE `Scholarship`
  ADD CONSTRAINT `Scholarship_fk0` FOREIGN KEY (`UnivID`) REFERENCES `University` (`UnivID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Student`
--
ALTER TABLE `Student`
  ADD CONSTRAINT `Student_fk0` FOREIGN KEY (`StudentID`) REFERENCES `USERS` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `USERS`
--
ALTER TABLE `USERS`
  ADD CONSTRAINT `USERS_fk0` FOREIGN KEY (`UnivID`) REFERENCES `University` (`UnivID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
