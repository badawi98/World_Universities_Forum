-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2019 at 10:19 AM
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
('1000000000000003', 'admin'),
('1001106074119058', 'stanford_admin');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` tinyint(4) NOT NULL,
  `Course_Name` varchar(64) COLLATE utf8_bin NOT NULL,
  `picture` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `Course_Name`, `picture`) VALUES
(1, 'Data structures and algorithms', 'img/Data.png'),
(2, 'Object oriented programming', 'img/oop.jpg'),
(3, 'Software Engineering', 'img/SE.jpg'),
(4, 'Biochemistry', 'img/Biochemistry.jpg'),
(5, 'Genetics', 'img/Genetics.jpg'),
(6, 'Microcontroller', 'img/Microcontroller.jpeg'),
(7, 'Database', 'img/database.jpeg'),
(8, 'Microprocessor', 'img/intel.png'),
(9, 'Histology', 'img/Histology.jpg'),
(10, 'Image Processing', 'img/IP.png'),
(11, 'Digital I', 'img/dig.png'),
(12, 'Computer Architecture', 'img/arch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `course_students`
--

CREATE TABLE `course_students` (
  `CourseID` tinyint(4) NOT NULL,
  `InstructorID` decimal(16,0) NOT NULL,
  `StudentID` decimal(16,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course_students`
--

INSERT INTO `course_students` (`CourseID`, `InstructorID`, `StudentID`) VALUES
(1, '1000110000000001', '1000101846100778'),
(1, '1000110000000001', '1000110000000002'),
(1, '1000110000000001', '1000119174951089'),
(1, '1000110000000001', '1001100000000003'),
(2, '1000110000000001', '1001100000000003'),
(3, '1000110000000001', '1000101846100778'),
(5, '1000110000000002', '1001100000000003'),
(11, '1000110000000002', '1000101846100778');

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
('1000119174951089', 'abughazal'),
('1000110000000001', 'badawi'),
('1000110000000002', 'tamer');

-- --------------------------------------------------------

--
-- Table structure for table `instructors_courses`
--

CREATE TABLE `instructors_courses` (
  `CourseID` tinyint(4) NOT NULL,
  `InstructorID` decimal(16,0) NOT NULL,
  `Decription` varchar(4096) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `instructors_courses`
--

INSERT INTO `instructors_courses` (`CourseID`, `InstructorID`, `Decription`) VALUES
(1, '1000110000000001', 'Data Structure is a way of collecting and organising data in such a way that we can perform operations on these data in an effective way. Data Structures is about rendering data elements in terms of some relationship, for better organization and storage. For example, we have some data which has, player\'s name \"Virat\" and age 26. Here \"Virat\" is of String data type and 26 is of integer data type.\r\n\r\nWe can organize this data as a record like Player record, which will have both player\'s name and age in it. Now we can collect and store player\'s records in a file or database as a data structure. For example: \"Dhoni\" 30, \"Gambhir\" 31, \"Sehwag\" 33\r\n\r\nIf you are aware of Object Oriented programming concepts, then a class also does the same thing, it collects different type of data under one single entity. The only difference being, data structures provides for techniques to access and manipulate data efficiently.\r\n\r\nIn simple language, Data Structures are structures programmed to store ordered data, so that various operations can be performed on it easily. It represents the knowledge of data to be organized in memory. It should be designed and implemented in such a way that it reduces the complexity and increases the efficiency.'),
(2, '1000110000000001', 'Object-oriented programming (OOP) is a programming paradigm based on the concept of \"objects\", which can contain data, in the form of fields (often known as attributes), and code, in the form of procedures (often known as methods). A feature of objects is an object\'s procedures that can access and often modify the data fields of the object with which they are associated (objects have a notion of \"this\" or \"self\"). In OOP, computer programs are designed by making them out of objects that interact with one another.[1][2] OOP languages are diverse, but the most popular ones are class-based, meaning that objects are instances of classes, which also determine their types. Many of the most widely used programming languages (such as C++, Object Pascal, Java, Python, etc.) are multi-paradigm and they support object-oriented programming to a greater or lesser degree, typically in combination with imperative, procedural programming. Significant object-oriented languages include Java, C++, C#, Python, PHP, JavaScript, Ruby, Perl, Object Pascal, Objective-C, Dart, Swift, Scala, Common Lisp, and Smalltalk.'),
(3, '1000110000000001', 'Software engineering is an engineering branch associated with development of software product using well-defined scientific principles, methods and procedures. The outcome of software engineering is an efficient and reliable software product.'),
(4, '1000110000000002', 'Biochemistry is the branch of science that explores the chemical processes within and related to living organisms. It is a laboratory based science that brings together biology and chemistry. By using chemical knowledge and techniques, biochemists can understand and solve biological problems. Cell stained blue Biochemistry focuses on processes happening at a molecular level. It focuses on what’s happening inside our cells, studying components like proteins, lipids and organelles. It also looks at how cells communicate with each other, for example during growth or fighting illness. Biochemists need to understand how the structure of a molecule relates to its function, allowing them to predict how molecules will interact. Biochemistry covers a range of scientific disciplines, including genetics, microbiology, forensics, plant science and medicine. Because of its breadth, biochemistry is very important and advances in this field of science over the past 100 years have been staggering. It’s a very exciting time to be part of this fascinating area of study'),
(5, '1000110000000002', 'Genetics is a branch of biology concerned with the study of genes, genetic variation, and heredity in organisms.[1][2][3]\r\n\r\nGregor Mendel, a scientist and Augustinian friar, discovered genetics in the late 19th-century. Mendel studied \"trait inheritance\", patterns in the way traits are handed down from parents to offspring. He observed that organisms (pea plants) inherit traits by way of discrete \"units of inheritance\". This term, still used today, is a somewhat ambiguous definition of what is referred to as a gene.\r\n\r\nTrait inheritance and molecular inheritance mechanisms of genes are still primary principles of genetics in the 21st century, but modern genetics has expanded beyond inheritance to studying the function and behavior of genes. Gene structure and function, variation, and distribution are studied within the context of the cell, the organism (e.g. dominance), and within the context of a population. Genetics has given rise to a number of subfields, including epigenetics and population genetics. Organisms studied within the broad field span the domains of life (archaea, bacteria, and eukarya).\r\n\r\nGenetic processes work in combination with an organism\'s environment and experiences to influence development and behavior, often referred to as nature versus nurture. The intracellular or extracellular environment of a cell or organism may switch gene transcription on or off. A classic example is two seeds of genetically identical corn, one placed in a temperate climate and one in an arid climate. While the average height of the two corn stalks may be genetically determined to be equal, the one in the arid climate only grows to half the height of the one in the temperate climate due to lack of water and nutrients in its environment.'),
(6, '1000119174951089', 'A microcontroller (MCU for microcontroller unit, or UC for μ-controller) is a small computer on a single integrated circuit. In modern terminology, it is similar to, but less sophisticated than, a system on a chip (SoC); an SoC may include a microcontroller as one of its components. A microcontroller contains one or more CPUs (processor cores) along with memory and programmable input/output peripherals. Program memory in the form of ferroelectric RAM, NOR flash or OTP ROM is also often included on chip, as well as a small amount of RAM. Microcontrollers are designed for embedded applications, in contrast to the microprocessors used in personal computers or other general purpose applications consisting of various discrete chips. Microcontrollers are used in automatically controlled products and devices, such as automobile engine control systems, implantable medical devices, remote controls, office machines, appliances, power tools, toys and other embedded systems. By reducing the size and cost compared to a design that uses a separate microprocessor, memory, and input/output devices, microcontrollers make it economical to digitally control even more devices and processes. Mixed signal microcontrollers are common, integrating analog components needed to control non-digital electronic systems. In the context of the internet of things, microcontrollers are an economical and popular means of data collection, sensing and actuating the physical world as edge devices. Some microcontrollers may use four-bit words and operate at frequencies as low as 4 kHz, for low power consumption (single-digit milliwatts or microwatts). They generally have the ability to retain functionality while waiting for an event such as a button press or other interrupt; power consumption while sleeping (CPU clock and most peripherals off) may be just nanowatts, making many of them well suited for long lasting battery applications. Other microcontrollers may serve performance-critical roles, where they may need to act more like a digital signal processor (DSP), with higher clock speeds and power consumption.'),
(7, '1000119174951089', 'A database is an organized collection of data, generally stored and accessed electronically from a computer system. Where databases are more complex they are often developed using formal design and modeling techniques. The database management system (DBMS) is the software that interacts with end users, applications, and the database itself to capture and analyze the data. The DBMS software additionally encompasses the core facilities provided to administer the database. The sum total of the database, the DBMS and the associated applications can be referred to as a \"database system\". Often the term \"database\" is also used to loosely refer to any of the DBMS, the database system or an application associated with the database. Computer scientists may classify database-management systems according to the database models that they support. Relational databases became dominant in the 1980s. These model data as rows and columns in a series of tables, and the vast majority use SQL for writing and querying data. In the 2000s, non-relational databases became popular, referred to as NoSQL because they use different query languages.'),
(8, '1000110000000001', 'A microprocessor is a computer processor that incorporates the functions of a central processing unit on a single integrated circuit (IC),[1] or at most a few integrated circuits.[2] The microprocessor is a multipurpose, clock driven, register based, digital integrated circuit that accepts binary data as input, processes it according to instructions stored in its memory and provides results as output. Microprocessors contain both combinational logic and sequential digital logic. Microprocessors operate on numbers and symbols represented in the binary number system. The integration of a whole CPU onto a single or a few integrated circuits greatly reduced the cost of processing power. Integrated circuit processors are produced in large numbers by highly automated processes, resulting in a low unit price. Single-chip processors increase reliability because there are many fewer electrical connections that could fail. As microprocessor designs improve, the cost of manufacturing a chip (with smaller components built on a semiconductor chip the same size) generally stays the same according to Rock\'s law. Before microprocessors, small computers had been built using racks of circuit boards with many medium- and small-scale integrated circuits. Microprocessors combined this into one or a few large-scale ICs. Continued increases in microprocessor capacity have since rendered other forms of computers almost completely obsolete (see history of computing hardware), with one or more microprocessors used in everything from the smallest embedded systems and handheld devices to the largest mainframes and supercomputers.'),
(9, '1000110000000002', 'Histology is the study of the microanatomy of cells, tissues, and organs as seen through a microscope. It examines the correlation between structure and function.\r\n\r\nHistology Guide teaches the visual art of recognizing the structure of cells and tissues and understanding how this is determined by their function. Rather than reproducing information found in a histology textbook, a user is shown how to apply this knowledge to interpret cells and tissues as viewed through a microscope.\r\n\r\nBecause of the high cost of purchasing (and maintaining) microscopes and preparing (or purchasing) slide collections, histology is often taught today without laboratories. A histology atlas is frequently used as a replacement. This is unfortunate because no matter how good the few images in a textbook or histology atlas are, they cannot replace the experience of viewing a specimen through a microscope.'),
(10, '1000110000000001', 'Signal processing is a discipline in electrical engineering and in mathematics that deals with analysis and processing of analog and digital signals , and deals with storing , filtering , and other operations on signals. These signals include transmission signals , sound or voice signals , image signals , and other signals e.t.c.\r\n\r\nOut of all these signals , the field that deals with the type of signals for which the input is an image and the output is also an image is done in image processing. As it name suggests, it deals with the processing on images.\r\n\r\nIt can be further divided into analog image processing and digital image processing.'),
(11, '1000110000000002', 'Digital design refers to what is created and produced for viewing on a screen.\r\n\r\nDigital designs can include content such as multimedia presentations, social media collateral, email and web ads, digital billboards and signage, pitch decks, 3D modelling and 2D animation. Due to the wider skill set needed to produce these pieces, graphic designers specializing in digital design are comfortable with standard industry tools (e.g., Illustrator, Photoshop and Indesign) and languages featured in digital assets (e.g., HTML5, JavaScript and CSS3).\r\n\r\nDigital designers are able to perform the same tasks as graphic designers. However, their knowledge and skills expand to include and focus on digital applications. Typical roles and responsibilities do not change for digital designers. The BLS provides the following duties for graphic designers'),
(12, '1000119174951089', 'In computer engineering, computer architecture is a set of rules and methods that describe the functionality, organization, and implementation of computer systems. Some definitions of architecture define it as describing the capabilities and programming model of a computer but not a particular implementation.[1] In other definitions computer architecture involves instruction set architecture design, microarchitecture design, logic design, and implementation.');

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
('1000000000000003', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
('1000100000000001', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ahmad'),
('1000101846100778', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'tala'),
('1000102330634153', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d', 'hello'),
('1000104469643998', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'raghida'),
('1000104508383807', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 'toto'),
('1000109426887600', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'aoao'),
('1000110000000001', '08acb83c193b6e50f3e7ec49487724b735b5e439', 'badawi'),
('1000110000000002', '5bf1005ad1ee110b10f5c3d6d1890d1e16594479', 'tamer'),
('1000115460375885', '3edd00c7c6b6f37644992009a7337736c77ff427', 'dodo'),
('1000119174951089', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'abughazal'),
('1001100000000003', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 'tanya'),
('1001102795485822', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'gogo'),
('1001102815707159', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'amr'),
('1001106074119058', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'stanford_admin'),
('1001108229047195', 'a00191c823794a7fbb694b85131353f26b509f98', 'nono'),
('1001113549615903', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'fofo'),
('1001114213347558', 'c22b5f9178342609428d6f51b2c5af4c0bde6a42', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `ScholarshipID` tinyint(4) NOT NULL,
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
(1, '1000', 'hkj', 'hjk', 'hkj', '/Applications/XAMPP/xamppfiles/htdocs/phpstorm_projects/World_Universities_Forum/uploads/membership_validation/Screen Shot 2019-03-21 at 4.14.16 PM.png', '2019-04-25', 'hjk', 'hkj'),
(2, '1000', 'ipo', 'iop', 'iipo', '/Applications/XAMPP/xamppfiles/htdocs/phpstorm_projects/World_Universities_Forum/uploads/membership_validation/dog-bone.jpg', '2019-04-10', 'ip', 'io');

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
('1001100000000002', 'John'),
('1000100000000001', 'ahmad'),
('1001102815707159', 'amr'),
('1000109426887600', 'aoao'),
('1001100000000003', 'tanya');

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
  `Email` varchar(128) COLLATE utf8_bin NOT NULL,
  `Gender` varchar(6) COLLATE utf8_bin NOT NULL,
  `picture` varchar(64) COLLATE utf8_bin NOT NULL,
  `Valid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `User_Name`, `UnivID`, `First_Name`, `Second_Name`, `Third_Name`, `Family_Name`, `Date`, `Email`, `Gender`, `picture`, `Valid`) VALUES
('1000000000000003', 'admin', '1000', 'admin', 'admin', 'admin', 'admin', '2019-04-22', 'admin@admin.com', 'Male', '', 1),
('1000100000000001', 'ahmad', '1000', 'Ahmad', 'M7md', 'Ahmad', 'Dwaikat', '1998-03-07', 'Ahmad@hotmail.com', 'Male', '', 1),
('1000101846100778', 'tala', '1000', 'tala', 'JAMAL', 'too much', 'too much', '1998-08-08', 'toomuch@gmail.com', 'Female', '', 1),
('1000102330634153', 'hello', '1000', 'hello', 'hello', 'hello', 'hello', '2002-05-16', 'hello@gmail.com', 'Male', 'Student UCD.pdf', 0),
('1000104469643998', 'raghida', '1000', 'Raghida', 'Ali', 'Badawi', 'Wawi', '2000-03-06', 'raghida@icloud.com', 'Male', 'USE.jpg', 0),
('1000104508383807', 'toto', '1000', 'toto', 'toto', 'toto', 'toto', '1998-12-05', 'toto@toto.com', 'Male', 'Signin.png', 0),
('1000109426887600', 'aoao', '1000', 'aoao', 'aoao', 'aoao', 'aoao', '1998-12-05', 'aoao@gmail.com', 'Male', 'C:xampphtdocsFinal_Web_Project/uploads/membership_validation/oop', 0),
('1000110000000001', 'badawi', '1000', 'Badawi', 'Ali', 'Badawi', 'Wawi', '1998-05-18', 'badawi1998@icloud.com', 'Male', '', 1),
('1000110000000002', 'tamer', '1000', 'Tamer', 'Maher', 'Ameen', 'Assaliya', '1998-05-06', 'tamer.assaliya@gmail.com', 'Male', '', 1),
('1000115460375885', 'dodo', '1000', 'dodo', 'dodo', 'dodod', 'dodo', '1998-05-12', 'dodo@dodo.com', 'Female', 'UP.jpg', 0),
('1000119174951089', 'abughazal', '1000', 'Ù…Ø­Ù…Ø¯', 'Ø³Ø§Ù…ÙŠ', 'ÙŠÙˆØ³Ù', 'ØºØ²Ø§Ù„', '1998-06-05', 'mohammed.gh1979@gmail.com', 'Male', '', 1),
('1001100000000002', 'John', '1001', 'John', 'Toni', 'Tom', 'Smith', '1996-08-12', 'john_smith@icloud.com', 'Male', '', 1),
('1001100000000003', 'tanya', '1001', 'Tanya', 'John', 'Lionel', 'Messi', '1998-09-07', 'tanya@gmail.com', 'Female', '', 1),
('1001100000000004', 'samahissa', '1001', 'SAMAH', 'ISSA', 'NULLNULL', 'ISSA', '1998-02-12', 'SAMAHAWWAD122@GMAIL.COM', 'Female', '', 1),
('1001102795485822', 'gogo', '1001', 'gogo', 'gogo', 'gogo', 'gogo', '1998-12-05', 'gogo@gogo', 'Female', 'C:xampphtdocsFinal_Web_Project/uploads/membership_validation/tam', 0),
('1001102815707159', 'amr', '1001', 'Amr', 'Ali', 'Badawi', 'Wawi', '2004-12-30', 'amrwawi@icloud.com', 'Male', 'UML.jpg', 0),
('1001106074119058', 'stanford_admin', '1001', 'stanford', 'univ', 'stn', 'un', '1979-04-03', 'stanford@admin.com', 'Female', '', 1),
('1001108229047195', 'nono', '1001', 'nono', 'nono', 'nono', 'nono', '1996-12-12', 'nono@nono.com', 'Male', 'SCH.jpg', 0),
('1001113549615903', 'fofo', '1001', 'fofo', 'fofo', 'fofo', 'fofo', '1998-12-05', 'fofo@gmail.com', 'Female', 'C:xampphtdocsFinal_Web_Project/uploads/membership_validation/nex', 0),
('1001114213347558', 'hi', '1001', 'hi', 'hi', 'hi', 'h', '1998-05-05', 'hi@gmail.com', 'Female', 'USE.jpg', 0);

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
  ADD UNIQUE KEY `email_unique` (`Email`),
  ADD KEY `USERS_fk0` (`UnivID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course_students`
--
ALTER TABLE `course_students`
  MODIFY `CourseID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `instructors_courses`
--
ALTER TABLE `instructors_courses`
  MODIFY `CourseID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `ScholarshipID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Constraints for table `course_students`
--
ALTER TABLE `course_students`
  ADD CONSTRAINT `Course_Students_fk1` FOREIGN KEY (`InstructorID`) REFERENCES `instrctors` (`InstructorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Course_Students_fk2` FOREIGN KEY (`StudentID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Course_Students_fk3` FOREIGN KEY (`CourseID`) REFERENCES `course` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `Instructors_Courses_fk1` FOREIGN KEY (`InstructorID`) REFERENCES `instrctors` (`InstructorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Instructors_Courses_fk2` FOREIGN KEY (`CourseID`) REFERENCES `course` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
