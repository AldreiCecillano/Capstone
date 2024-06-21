-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 12:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webfile`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblactivities`
--

CREATE TABLE `tblactivities` (
  `id` int(11) NOT NULL,
  `activityname` text NOT NULL,
  `description` text NOT NULL,
  `activity_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbldownloadable`
--

CREATE TABLE `tbldownloadable` (
  `id` int(11) NOT NULL,
  `downloadablefile` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblfaculty`
--

CREATE TABLE `tblfaculty` (
  `id` int(11) NOT NULL,
  `facultyid` varchar(11) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `contact` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblfaculty`
--

INSERT INTO `tblfaculty` (`id`, `facultyid`, `lname`, `fname`, `mname`, `address`, `contact`, `username`, `password`) VALUES
(1, '21-00001', 'Noey', 'De Jesus', 'M', 'Lian', 2147483647, '21-00001', '21-00001');

-- --------------------------------------------------------

--
-- Table structure for table `tblfilecategory`
--

CREATE TABLE `tblfilecategory` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `deadline` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblfilecategory`
--

INSERT INTO `tblfilecategory` (`id`, `categoryname`, `description`, `deadline`) VALUES
(1, 'Syllabus', 'Syllabus for the subject', '2023-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `tblfilessubmitted`
--

CREATE TABLE `tblfilessubmitted` (
  `id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `categoryid` int(11) NOT NULL,
  `description` text NOT NULL,
  `facultyid` int(11) NOT NULL,
  `semesterid` int(11) NOT NULL,
  `schoolyearid` int(11) NOT NULL,
  `uploadedfiles` text NOT NULL,
  `dateuploaded` date NOT NULL,
  `dateupdated` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblfilessubmitted`
--

INSERT INTO `tblfilessubmitted` (`id`, `filename`, `categoryid`, `description`, `facultyid`, `semesterid`, `schoolyearid`, `uploadedfiles`, `dateuploaded`, `dateupdated`, `status`, `remarks`) VALUES
(1, 'malnutrition_db.docx', 1, 'My Draft Syllabus for checking', 1, 2, 1, '', '2023-02-24', '2023-02-24', 'Approved', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `tblinbox`
--

CREATE TABLE `tblinbox` (
  `id` int(11) NOT NULL,
  `message_date` date NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `sendto` int(11) NOT NULL,
  `senderid` int(11) NOT NULL,
  `sender_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblnotification`
--

CREATE TABLE `tblnotification` (
  `id` int(11) NOT NULL,
  `facultyid` int(11) NOT NULL,
  `notification` text NOT NULL,
  `datetimenotif` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblnotification`
--

INSERT INTO `tblnotification` (`id`, `facultyid`, `notification`, `datetimenotif`, `status`) VALUES
(1, 1, 'File malnutrition_db.docx is already approved', '2023-02-24 17:53:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblschoolyear`
--

CREATE TABLE `tblschoolyear` (
  `id` int(11) NOT NULL,
  `schoolyear` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblschoolyear`
--

INSERT INTO `tblschoolyear` (`id`, `schoolyear`) VALUES
(1, '2023-2024');

-- --------------------------------------------------------

--
-- Table structure for table `tblsemester`
--

CREATE TABLE `tblsemester` (
  `id` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblsemester`
--

INSERT INTO `tblsemester` (`id`, `semester`) VALUES
(2, '1st semester');

-- --------------------------------------------------------

--
-- Table structure for table `tblsent`
--

CREATE TABLE `tblsent` (
  `id` int(11) NOT NULL,
  `message_date` datetime NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `sendto` int(11) NOT NULL,
  `senderid` int(11) NOT NULL,
  `sender_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblsent`
--

INSERT INTO `tblsent` (`id`, `message_date`, `subject`, `message`, `sendto`, `senderid`, `sender_name`) VALUES
(1, '2024-03-20 11:48:17', 'hi', '', 1, 1, 'Administrator'),
(2, '2024-03-20 11:48:47', 'hi', 'hello', 1, 1, 'Noey, De Jesus');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacherfile`
--

CREATE TABLE `tblteacherfile` (
  `id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `facultyid` int(11) NOT NULL,
  `dateuploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactivities`
--
ALTER TABLE `tblactivities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldownloadable`
--
ALTER TABLE `tbldownloadable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfilecategory`
--
ALTER TABLE `tblfilecategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfilessubmitted`
--
ALTER TABLE `tblfilessubmitted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblinbox`
--
ALTER TABLE `tblinbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnotification`
--
ALTER TABLE `tblnotification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblschoolyear`
--
ALTER TABLE `tblschoolyear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsemester`
--
ALTER TABLE `tblsemester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsent`
--
ALTER TABLE `tblsent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblteacherfile`
--
ALTER TABLE `tblteacherfile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblactivities`
--
ALTER TABLE `tblactivities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbldownloadable`
--
ALTER TABLE `tbldownloadable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblfilecategory`
--
ALTER TABLE `tblfilecategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblfilessubmitted`
--
ALTER TABLE `tblfilessubmitted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblinbox`
--
ALTER TABLE `tblinbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblnotification`
--
ALTER TABLE `tblnotification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblschoolyear`
--
ALTER TABLE `tblschoolyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblsemester`
--
ALTER TABLE `tblsemester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblsent`
--
ALTER TABLE `tblsent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblteacherfile`
--
ALTER TABLE `tblteacherfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
