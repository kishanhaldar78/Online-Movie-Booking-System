-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2019 at 06:08 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10362065_mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE `Booking` (
  `BookingId` int(8) NOT NULL,
  `ShowId` int(8) DEFAULT NULL,
  `UserId` varchar(20) DEFAULT NULL,
  `BookedDate` date DEFAULT NULL,
  `ShowDate` date DEFAULT NULL,
  `noofseats` int(4) NOT NULL,
  `slotno` int(5) NOT NULL,
  `seattypedesc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Booking`
--

INSERT INTO `Booking` (`BookingId`, `ShowId`, `UserId`, `BookedDate`, `ShowDate`, `noofseats`, `slotno`, `seattypedesc`) VALUES
(11, 2004, 'kishan12', '2019-08-04', '2019-08-05', 3, 1, 'PLATINUM'),
(12, 2002, 'kishan12', '2019-08-04', '2019-08-13', 7, 1, 'PLATINUM'),
(13, 2002, 'kishan12', '2019-08-04', '2019-08-12', 2, 2, 'SILVER'),
(14, 2002, 'kishan12', '2019-08-04', '2019-08-05', 6, 2, 'ROYAL RECLINER'),
(15, 2004, 'kishan12', '2019-08-05', '2019-08-13', 5, 1, 'GOLD'),
(16, 2001, 'Nehasharma', '2019-08-05', '2019-08-09', 2, 2, 'PLATINUM'),
(17, 2002, 'Lohitha', '2019-08-05', '2019-08-16', 6, 1, 'GOLD'),
(18, 2001, 'kishan12', '2019-08-05', '2019-08-13', 4, 2, 'SILVER'),
(19, 2000, '', '2019-08-05', '2019-08-06', 3, 2, 'SILVER'),
(20, 2001, 'shubham28', '2019-08-12', '2019-08-16', 5, 2, 'SILVER'),
(22, 2000, 'kishan12', '2019-08-12', '2019-08-14', 2, 2, 'PLATINUM'),
(23, 2000, 'Lokesh', '2019-08-13', '2019-08-14', 2, 2, 'SILVER'),
(24, 2001, 'kishan12', '2019-08-15', '2019-08-29', 5, 4, 'ROYAL SOFA'),
(26, 2003, 'kishan12', '2019-08-16', '2019-08-21', 7, 5, 'ROYAL RECLINER'),
(27, 2001, 'kishan12', '2019-08-21', '2019-08-22', 5, 4, 'PLATINUM');

-- --------------------------------------------------------

--
-- Table structure for table `BookingDetail`
--

CREATE TABLE `BookingDetail` (
  `BookingId` int(8) DEFAULT NULL,
  `SeatTypeId` int(8) DEFAULT NULL,
  `NoofSeats` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Hall`
--

CREATE TABLE `Hall` (
  `HallId` int(8) NOT NULL,
  `HallDesc` varchar(255) DEFAULT NULL,
  `TotalCapacity` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Hall`
--

INSERT INTO `Hall` (`HallId`, `HallDesc`, `TotalCapacity`) VALUES
(100, '2D & DOLLYBY SOUNDS', 150),
(200, '3D & DOLLYBY SOUNDS', 200),
(300, 'BLUETRAY PICTURE QUALITY & DOLLYBY SOUNDS', 250),
(400, '2D BLUETRAY PICTURE QUALITY', 150),
(500, '3D BLUERAY QUALITY WITH DOLLYBY SOUND', 300);

-- --------------------------------------------------------

--
-- Table structure for table `HallCapacity`
--

CREATE TABLE `HallCapacity` (
  `RecordNo` int(4) NOT NULL,
  `HallID` int(8) DEFAULT NULL,
  `SeatTypeId` int(8) DEFAULT NULL,
  `SeatCount` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HallCapacity`
--

INSERT INTO `HallCapacity` (`RecordNo`, `HallID`, `SeatTypeId`, `SeatCount`) VALUES
(1, 100, 1000, 35),
(2, 100, 1001, 25),
(3, 100, 1002, 20),
(4, 100, 1003, 10),
(5, 100, 1004, 15),
(6, 200, 1000, 50),
(7, 200, 1001, 40),
(8, 200, 1002, 30),
(9, 200, 1003, 15),
(10, 200, 1004, 20),
(11, 300, 1000, 70),
(12, 300, 1001, 50),
(13, 300, 1002, 35),
(14, 300, 1003, 20),
(15, 300, 1004, 30),
(16, 400, 1000, 30),
(17, 400, 1001, 20),
(18, 400, 1002, 20),
(19, 400, 1003, 5),
(20, 400, 1004, 10),
(21, 500, 1000, 90),
(22, 500, 1001, 70),
(23, 500, 1002, 50),
(24, 500, 1003, 20),
(25, 500, 1004, 30);

-- --------------------------------------------------------

--
-- Table structure for table `Movies`
--

CREATE TABLE `Movies` (
  `MovieId` int(8) NOT NULL,
  `MovieName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Movies`
--

INSERT INTO `Movies` (`MovieId`, `MovieName`) VALUES
(10, 'DDLJ'),
(20, 'HUM APKE HAI KON'),
(30, 'RACE'),
(40, 'KESARI'),
(50, 'THUG OF HINDUSTAN'),
(60, 'Tiger zinda hai'),
(70, 'my name is khan');

-- --------------------------------------------------------

--
-- Table structure for table `SeatType`
--

CREATE TABLE `SeatType` (
  `SeatTypeId` int(8) NOT NULL,
  `SeatTypeDesc` varchar(255) DEFAULT NULL,
  `SeatFare` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SeatType`
--

INSERT INTO `SeatType` (`SeatTypeId`, `SeatTypeDesc`, `SeatFare`) VALUES
(1000, 'SILVER', 'Rs 90'),
(1001, 'GOLD', 'Rs 110'),
(1002, 'PLATINUM', 'Rs 130'),
(1003, 'ROYAL RECLINER', 'Rs 220'),
(1004, 'ROYAL SOFA', 'Rs 170');

-- --------------------------------------------------------

--
-- Table structure for table `Shows`
--

CREATE TABLE `Shows` (
  `ShowID` int(8) NOT NULL,
  `HallID` int(8) DEFAULT NULL,
  `MovieId` int(8) DEFAULT NULL,
  `SlotNo` int(11) DEFAULT NULL,
  `FromDate` date DEFAULT NULL,
  `ToDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Shows`
--

INSERT INTO `Shows` (`ShowID`, `HallID`, `MovieId`, `SlotNo`, `FromDate`, `ToDate`) VALUES
(2000, 200, 30, 3, '2019-08-16', '2019-08-23'),
(2001, 300, 10, 2, '2019-08-21', '2019-09-06'),
(2002, 100, 20, 4, '2019-08-15', '2019-08-28'),
(2003, 500, 40, 1, '2019-08-16', '2019-09-04'),
(2004, 400, 50, 5, '2019-08-09', '2019-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `SlotDetail`
--

CREATE TABLE `SlotDetail` (
  `slotno` int(4) NOT NULL,
  `slotdesc` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `SlotDetail`
--

INSERT INTO `SlotDetail` (`slotno`, `slotdesc`) VALUES
(1, '9:00 AM - 11:30AM'),
(2, '11:45 AM - 2:30 PM'),
(3, '3:00 PM - 5:30 PM'),
(4, '6:00 PM - 8:30 PM'),
(5, '9:00 PM - 11:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `SlotNo`
--

CREATE TABLE `SlotNo` (
  `RecordNo` int(4) NOT NULL,
  `showid` int(8) NOT NULL,
  `slotno` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `SlotNo`
--

INSERT INTO `SlotNo` (`RecordNo`, `showid`, `slotno`) VALUES
(1, 2000, 2),
(2, 2000, 3),
(3, 2000, 5),
(4, 2001, 2),
(5, 2001, 4),
(6, 2001, 5),
(7, 2002, 1),
(8, 2002, 2),
(9, 2002, 5),
(10, 2003, 3),
(11, 2003, 5),
(12, 2004, 1),
(13, 2004, 4),
(14, 2004, 5);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(4) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mno` int(10) NOT NULL,
  `location` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `mno`, `location`) VALUES
(1, 'myname', 345657546, 'delhi'),
(100, 'kishan', 987654321, 'delhi');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `username` varchar(20) NOT NULL,
  `mno` bigint(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `mno`, `fname`, `lname`, `email`, `password`, `usertype`) VALUES
('345', 345, 'df', 'df4564', 'kishanhaldar007@gmail.com', 'Kish@n12', 'customer'),
('Jeetu', 7018803390, 'Jeetu', 'Jeetu', 'jeetu@gmail.com', 'jeetu', 'Admin'),
('Pratik123', 7385199843, 'Pratik', 'Pawar', 'sandypawar000123@gmail.com', 'sansy123', 'customer'),
('shubham28', 7385285626, 'shubham', 'kamble', 'sk1234@gmail.com', 'shubham', 'customer'),
('Nehasharma', 8587053567, 'Neha', 'Sharma', 'www.nehasharma101997@gmail.com', 'kish@n12', 'customer'),
('kishan12', 8700545022, 'kishan', 'haldar', 'kishanhaldar007@gmail.com', 'Kish@n12', 'customer'),
('Vikas', 8929588199, 'Vikas ', 'Kumar', 'www.vikaskumar292000@gmail.com', 'iamvikas', 'customer'),
('Lohitha', 9123456789, 'Lohitha', 'Gandrothu', 'lohithamusic@gmail.com', 'hiii1234', 'customer'),
('Lokesh', 9666555755, 'Lokesh', 'Chintala', 'ch.lokesh07@gmail.com', 'lokesh', 'customer'),
('Myname78', 9876543210, 'No', 'Name', 'ntng@gmail.com', '123456', 'Admin'),
('kisshna78', 998877554422, 'kishan', 'jhsjdsfg', 'kishanhaldar007@gmail.com', '1234', 'customer'),
('lohitha', 998877665522, 'lohitha', 'lots', 'music@gmail.com', '123456', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UserId` tinyint(4) NOT NULL,
  `UserName` varchar(45) NOT NULL,
  `UserType` char(1) NOT NULL,
  `MobileNo` bigint(20) NOT NULL,
  `EmailId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UserId`, `UserName`, `UserType`, `MobileNo`, `EmailId`) VALUES
(100, 'kishanhaldar78', 'a', 9876543210, 'kishanh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`BookingId`),
  ADD KEY `ShowId` (`ShowId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `BookingDetail`
--
ALTER TABLE `BookingDetail`
  ADD KEY `BookingId` (`BookingId`),
  ADD KEY `SeatTypeId` (`SeatTypeId`);

--
-- Indexes for table `Hall`
--
ALTER TABLE `Hall`
  ADD PRIMARY KEY (`HallId`);

--
-- Indexes for table `HallCapacity`
--
ALTER TABLE `HallCapacity`
  ADD PRIMARY KEY (`RecordNo`),
  ADD KEY `HallID` (`HallID`),
  ADD KEY `SeatTypeId` (`SeatTypeId`);

--
-- Indexes for table `Movies`
--
ALTER TABLE `Movies`
  ADD PRIMARY KEY (`MovieId`);

--
-- Indexes for table `SeatType`
--
ALTER TABLE `SeatType`
  ADD PRIMARY KEY (`SeatTypeId`);

--
-- Indexes for table `Shows`
--
ALTER TABLE `Shows`
  ADD PRIMARY KEY (`ShowID`),
  ADD KEY `HallID` (`HallID`),
  ADD KEY `MovieId` (`MovieId`);

--
-- Indexes for table `SlotDetail`
--
ALTER TABLE `SlotDetail`
  ADD PRIMARY KEY (`slotno`);

--
-- Indexes for table `SlotNo`
--
ALTER TABLE `SlotNo`
  ADD PRIMARY KEY (`RecordNo`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`mno`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `BookingId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
