-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 06:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` varchar(150) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `Name`, `password`) VALUES
('17%45672', 'Joydev ', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` varchar(150) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `t_id` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `Name`, `t_id`) VALUES
('ComF1', 'Computer Fundamental', '17_353453'),
('Bangla101', 'Bangla First Paper', '18_38553'),
('Eng101', 'English First paper', '19_23454'),
('Bio101', 'Biology', '19_23454'),
('math92', ' Mathematics -2 ', '10_53342');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `notes_id` varchar(150) NOT NULL,
  `about` varchar(150) NOT NULL,
  `path` varchar(150) NOT NULL,
  `t_id` varchar(150) DEFAULT NULL,
  `c_id` varchar(150) DEFAULT NULL,
  `Date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`notes_id`, `about`, `path`, `t_id`, `c_id`, `Date`) VALUES
('569', 'my first file', 'file/FileG.txt', 'ComF1', '17_353453', '2020-09-19'),
('22222', 'text file', 'file/Java pro.txt', '17_353453', 'ComF1', '2020-09-19'),
('2589', 'My English file', 'file/Subtraction of array element.txt', '19_23454', 'Eng101', '2020-09-19'),
('po12', 'My text file', 'file/Lab.txt', '17_353453', 'ComF1', '2020-09-21'),
('33333', 'bio pic', 'file/pic for web.jpg', '19_23454', 'Bio101', '2020-09-21'),
('754738', 'Html file', 'file/Bootstrap Grid layout demo.txt', '17_353453', 'ComF1', '2020-09-21'),
('45698', '1st file', 'file/invitation.txt', '17_353453', 'ComF1', '2020-09-24'),
('', '', 'file/', '13_12323', 'Choose...', '2020-09-24'),
('63345', 'Math1 file', 'file/119891360_326828598388702_5507316681422535097_n.png', '16_87532', 'Math101', '2020-09-25'),
('69752', 'My file 123', 'file/Lab.txt', '10_53342', 'math92', '2020-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` varchar(150) NOT NULL,
  `about` varchar(150) NOT NULL,
  `details` varchar(250) NOT NULL,
  `t_id` varchar(150) DEFAULT NULL,
  `c_id` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `about`, `details`, `t_id`, `c_id`) VALUES
('sdfsd', 'eeeewwwsdfsdfsere', 'dsfgvdsgvgsdvgdvdfvdfvdfvdfsvdfvdfvdfvfdbfgdnhgjmnhgdsfgvdsgvgsdvgdvdfvdfvdfvdfsvdfvdfvdfvfdbfgdnhgjmnhgdsfgvdsgvgsdvgdvdfvdfvdfvdfsvdfvdfvdfvfdbfgdnhgjmnhg', '$supTeacher', 'ComF1'),
('9999999999', 'yyyyyyyyyyyyyyyyyyyyyyyyy', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '17_353453', 'ComF1'),
('bionotice1', 'Class work', 'There are many class tomorrow. Please join.', '19_23454', 'Bio101'),
('369441', 'Quiz', 'xcnvbdikjcfghvderbbbdbdbdbdbdbdbdbdbdbdbdbdbdbdbdbdbdbdbdbdbdbd,nddv dbhkx bfc', '17_353453', 'ComF1'),
('23177', 'My new notice', 'There are very few class', '19_23454', 'Bio101'),
('112233', 'Make up class', 'tomorrow there will be a make up class', '17_353453', 'ComF1'),
('875354', 'Hello', 'Class class cllaaassss sesh', '16_87532', 'Math101'),
('9765', 'My class', 'drfsdfhnsjkdjk\r\nCancle', '10_53342', 'math92');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` varchar(150) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Gender` varchar(150) NOT NULL,
  `Father_Name` varchar(150) NOT NULL,
  `Mother_Name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `f_phone` varchar(150) NOT NULL,
  `m_phone` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `birth_id` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `c_id1` varchar(150) DEFAULT NULL,
  `c_id2` varchar(150) DEFAULT NULL,
  `c_id3` varchar(150) DEFAULT NULL,
  `c_id4` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `Name`, `Gender`, `Father_Name`, `Mother_Name`, `email`, `f_phone`, `m_phone`, `country`, `birth_id`, `password`, `c_id1`, `c_id2`, `c_id3`, `c_id4`) VALUES
('141-85334', 'Khairul Khan', 'Female', 'Iquram Khan', 'Oishee Khan', 'khairul@khan', '+70176843322332', '+7012343566577', 'Wallis and Futana Islands', '876765543', '5555', 'Bangla101', 'ComF1', 'math92', 'Bio101'),
('161-54689', 'Robi Banik', 'Male', 'Sunu Banik', 'Sondhani Banik', 'robi32@gmail.com', '+884324543534', '+884534556767', 'Equatorial Guinea', '64342354565623', '7894', 'Bio101', 'ComF1', 'Bangla101', 'Eng101'),
('171-68426', 'Mou Hossen', 'Female', 'Ahmed Hosen', 'Amena Begum', 'mou@gmail.com', '+88015663143986', '+88014456622256', 'Bangladesh', '6572325345456567', '1122', 'Bangla101', 'ComF1', 'Bio101', 'Eng101'),
('173-35526', 'Joy Karmakar', 'Male', 'Arun', 'Archana', 'krmkrjoy@gmail.com', '+8801711208795', '+8801930309548', 'Bangladesh', '2855163511', '9999', 'ComF1', 'Bangla101', 'Eng101', 'Bio101'),
('173-56723', 'Borak Khan', 'Male', 'Sabbir Khan', 'Rupa Khan', 'borak@gmail.com', '+97234232434234', '+70154545233323', 'French Southern Territories', '6454554544554', '81dc9bdb52d04dc20036dbd8313ed055', 'ComF1', 'Eng101', 'Bangla101', 'Bio101'),
('174-34545', 'Dola  Banik', 'Female', 'Sumon Banik', 'Muna Banik', 'dola@gmail.com', '+19805468915', '+70145569899', 'Honduras', '875445775343', '4567', 'math92', 'ComF1', 'Bangla101', 'Bio101'),
('181-25689', 'Amit Banik', 'Male', 'Ratan Banik', 'Lokkhi Banik', 'amit@gmail.com', '+8801754462869', '+8801765565546', 'Bangladesh', '3232342235664', '567', 'Bio101', 'Eng101', 'ComF1', 'Bangla101');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` varchar(150) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Gender` varchar(150) NOT NULL,
  `Father_Name` varchar(150) NOT NULL,
  `Mother_Name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `nid` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `c_id1` varchar(150) DEFAULT NULL,
  `c_id2` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `Name`, `Gender`, `Father_Name`, `Mother_Name`, `email`, `phone`, `country`, `nid`, `password`, `c_id1`, `c_id2`) VALUES
('18_38553', 'Zarin Khan', 'Female', 'Sumon Khan', 'Lara Khan', 'zarin@gmail.com', '+880175642369', 'United Arab Emirates', '8832344545333', '4569', NULL, NULL),
('19_23454', 'Manik Roy', 'Male', 'Niloy Roy', 'Rumi Roy', 'manik@gmail.com', '+19875546548855', 'Russia', '643445353453', '4569', NULL, NULL),
('20_25148', 'Josim Uddin', 'Male', 'Korim Uddin', 'Rumi Uddin', 'josim@gmail.com', '+97254645565464', 'Australia', '258741399631', '7654', NULL, NULL),
('14_34982', 'Rohim Ahmed ', 'Male', 'Bokul Ahmed', 'Sheuly Akter', 'rohim@gmail.com', '+8801554554665', 'Belize', '5556541415646865486', '4561', NULL, NULL),
('17_353453', 'Rupa  Roy', 'Female', 'Rakesh Roy', 'Joly Roy', 'rupa@gmail.com', '+8801254564654', 'India', '45467887734', '9876', NULL, NULL),
('16_87532', 'Maruf Dewan', 'Male', 'Shariyar Sakib', 'Israt Jahan', 'maruf@gmail.com', '+1984562125656545', 'French Guiana', '47665374343', '7894', NULL, NULL),
('13_12323', 'Rezwan Ahmed', 'Male', 'Kobir Khan', 'Luna Khan', 'rifat.rizone.3@gmail.com', '+880132432123', 'Barbados', '258741399631', '123', NULL, NULL),
('13_98765', 'Pujon Roy', 'Male', 'Niloy Roy', 'Lokkhi Banik', 'pujon@gmail.com', '+880245453355', 'Ireland', '7433434432', '12345', NULL, NULL),
('10_53342', 'Arnob Ahmed', 'Male', 'Faruk Ahmed', 'Fatema Ahmed', 'arnob@gmail.com', '+1984561237895', 'Azerbaijan', '643445353453', '7777', NULL, NULL),
('18_34232', 'Kobir Khan', 'Male', 'Anu kha', 'dsda', 'ds@gmail.com', '+885645564', 'Antigua and Barbuda', '43546767743', '1234', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
