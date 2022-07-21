-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 09:56 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthydiet`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignplan`
--

CREATE TABLE `assignplan` (
  `aid` int(20) NOT NULL,
  `detailid` int(20) NOT NULL,
  `dietionid` int(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignplan`
--

INSERT INTO `assignplan` (`aid`, `detailid`, `dietionid`, `status`) VALUES
(23, 47, 25, 'Assigned');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(50) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `des` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `des`, `status`) VALUES
(3, 'Workout Trainer', 'Simple and Heavy workouts ', 'active'),
(4, 'Yoga Trainer', 'Yoga Good for health', 'active'),
(7, 'Zumba Trainer', 'Doing zumba reduce fat', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `counselling`
--

CREATE TABLE `counselling` (
  `programid` int(20) NOT NULL,
  `programname` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `discription` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counselling`
--

INSERT INTO `counselling` (`programid`, `programname`, `name`, `date`, `discription`, `file`, `status`) VALUES
(9, 'About', 'Annu', '2022-02-28', 'Give you more details about eating healthy foods', 'health.jpg', 'inactive'),
(10, 'Aboutrequired', 'Shyamala', '2022-03-12', 'Give you more details about eating healthy foods', 'healthy.jpg', 'inactive'),
(11, 'Healthy Eating Healthy Life', 'John philip', '2022-05-30', 'It is a class based on how to improve your eating routine to be fit and healthy.', 'helthh.jpg', 'inactive'),
(12, 'Health ', 'Felix chacko', '2022-05-26', 'Describes about eating a healthy and non-toxic food to keep your life better and happier with any diseases.', 'heathdiet.jpg', 'active'),
(13, 'Health and Happiness', 'Vishnu Kumar', '2022-06-01', 'It is a class/program based on eating healthy food.', 'health.jpg', 'active'),
(14, 'Healthy Life', 'Romy Shine', '2022-06-22', 'Classes based on eating how to eat healthy food.', 'healthy.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `dietitian`
--

CREATE TABLE `dietitian` (
  `dietionid` int(20) NOT NULL,
  `loginid` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `clinic` varchar(100) NOT NULL,
  `district` varchar(50) NOT NULL,
  `idproof` varchar(1000) NOT NULL,
  `experiencedyears` int(25) NOT NULL,
  `status` int(20) NOT NULL,
  `file` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dietitian`
--

INSERT INTO `dietitian` (`dietionid`, `loginid`, `name`, `age`, `gender`, `phonenumber`, `email`, `clinic`, `district`, `idproof`, `experiencedyears`, `status`, `file`) VALUES
(19, 57, 'Rani Raj', 34, 'female', '9809765632', 'raniraj@gmail.com', 'Rani Clinic', 'pathanamthitta', 'idcard.jpg', 11, 0, 'person3.jpg'),
(20, 62, 'Reshmi Das', 45, 'female', '7678654545', 'reshmi@gmail.com', 'Reshmi Clinic', 'Kozhikode', 'id-card.jpg', 20, 1, 'diet2.jpg'),
(22, 65, 'Neha Alex', 55, 'female', '8789876765', 'neha@gmail.com', 'Healthy Life Clinic', 'Kozhikode', 'cardid.jpg', 35, 1, 'diet1.jpg'),
(23, 66, 'Savio Paul', 31, 'male', '9876565768', 'savio@gmail.com', 'Keep Healthy Clinic', 'Kollam', 'john.jpg', 9, 1, 'person_4.jpg'),
(25, 92, 'Albin Joseph', 37, 'Male', '8789098654', 'albin@gmail.com', 'Healthyfy', 'Thiruvananthapuram', 'image11.jpg', 7, 1, 'albinimage.jpg'),
(26, 93, 'Clarie Allen', 40, 'Male', '9876543212', 'clarie@gmail.com', 'Healthy diet', 'Malappuram', 'idcard1.jpg', 23, 1, 'clarieallen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type1` varchar(25) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `type1`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(57, 'Rani', 'Rani@123', 'dietitian', 0),
(62, 'Reshmi', 'Reshmi@123', 'dietitian', 1),
(65, 'Neha', 'Neha@123', 'dietitian', 1),
(66, 'Savio', 'Savio@123', 'dietitian', 1),
(77, 'john', 'John@123', 'trainer', 1),
(78, 'merin', 'Merin@123', 'trainer', 1),
(79, 'Smith', 'Smith@123', 'trainer', 1),
(80, 'Jenny', 'Jenny@123', 'trainer', 1),
(81, 'kk', 'Kk@123', 'trainer', 0),
(84, 'tharuna@gmail.com', 'Tharuna@123', 'user', 1),
(89, 'Nisha', 'Nisha@123', 'trainer', 1),
(90, 'dhanu@gmail.com', 'Dh@123', 'user', 1),
(91, 'manju@gmail.com', 'Manju@123', 'user', 1),
(92, 'Albin', 'Albin@123', 'dietitian', 1),
(93, 'Clarie', 'Clarie@123', 'dietitian', 1),
(94, 'karthik@gmail.com', 'Karthik@123', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plandetails`
--

CREATE TABLE `plandetails` (
  `detailid` int(20) NOT NULL,
  `logid` int(20) NOT NULL,
  `age` int(30) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `habits` varchar(100) NOT NULL,
  `dietrequired` varchar(200) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `idproof` varchar(500) NOT NULL,
  `reply` varchar(500) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plandetails`
--

INSERT INTO `plandetails` (`detailid`, `logid`, `age`, `height`, `weight`, `habits`, `dietrequired`, `disease`, `discription`, `idproof`, `reply`, `status`) VALUES
(43, 84, 35, '167cm', '98.7kg', 'Non Veg', 'Weight Loss', 'No Disesse', 'Allergic to peanut,  seafoods', 'image11.jpg', '', 'Reported'),
(45, 90, 38, '175cm', '70.5kg', 'Non veg', 'Weight Loss and healthy body', 'No Disesse', 'Allergic to milky foods', 'image11.jpg', '', 'Rejected'),
(46, 91, 45, '169cm', '99.5kg', 'Veg, Non Veg', 'Weight Loss', 'Skin', 'Allergic to orange, grapes, peanuts.', 'id-card.jpg', '', 'Approved'),
(47, 94, 29, '172cm', '99.8kg', 'Veg Non-Veg', 'Weight Loss', 'No Disesse', 'Allergic to peanuts', 'idcard1.jpg', '', 'Assigned');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `loginid` int(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `adress` varchar(500) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `estatus` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `loginid`, `fname`, `lname`, `email`, `adress`, `phone`, `gender`, `estatus`) VALUES
(24, 84, 'Tharuna', 'Mark', 'tharuna@gmail.com', 'Malarvadii house', '8789676565', 'Female', 1),
(26, 90, 'Dhanush', 'Raj', 'dhanu@gmail.com', 'Dhanush house', '9876434567', 'Male', 1),
(27, 91, 'Manju', 'Mohan', 'manju@gmail.com', 'Manju house', '9876545678', 'Female', 1),
(28, 94, 'Karthik', 'Shivadas', 'karthik@gmail.com', 'Karthik house', '9876567656', 'Male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `tid` int(50) NOT NULL,
  `loginid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `idproof` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `certificate` varchar(500) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`tid`, `loginid`, `name`, `age`, `gender`, `number`, `email`, `address`, `category`, `idproof`, `photo`, `certificate`, `status`) VALUES
(1, 77, 'John Tom', 39, 'Male', '8789876765', 'jt@gmail.com', 'Street House Valley', '3', 'image11.jpg', 'personal-trainer.jpg', 'traincerti.jpg', 1),
(2, 78, 'Merin Chacko', 29, 'Female', '8798098543', 'merin@gmail.com', 'Thekkenel House, Kottayam', '4', 'idcard22.jpg', 'yogatrainer.jpg', 'certii.png', 1),
(3, 79, 'Smith James', 35, 'Male', '8798767650', 'smith@gmail.com', 'Valley House, Kiddakanii', '3', 'imge.jpg', 'trainersmith.jpg', 'certi.jpg', 1),
(4, 80, 'Jenny Thomas', 29, 'Female', '9875234156', 'jenny@gmail.com', 'Kathihala House, Gudgav', '3', 'idcard1.jpg', 'trainerjenny.jpg', 'certificate.jpg', 1),
(5, 81, 'kkk', 87, 'Male', '9898989898', 'kk@gmail.com', 'klj', '4', '109433pic3.jpg', 'person_3.jpg', 'certificatetrain.jpg', 0),
(8, 89, 'Nisha Das', 29, 'Male', '8767654329', 'nisha@gmail.com', 'Nisha House', '4', 'idproof.jpg', 'nishatrainer.jpg', 'certifytrain.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignplan`
--
ALTER TABLE `assignplan`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `detailid` (`detailid`),
  ADD KEY `dietionid` (`dietionid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `counselling`
--
ALTER TABLE `counselling`
  ADD PRIMARY KEY (`programid`);

--
-- Indexes for table `dietitian`
--
ALTER TABLE `dietitian`
  ADD PRIMARY KEY (`dietionid`),
  ADD KEY `logid` (`loginid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `plandetails`
--
ALTER TABLE `plandetails`
  ADD PRIMARY KEY (`detailid`),
  ADD KEY `logid` (`logid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loginid` (`loginid`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `loginid` (`loginid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignplan`
--
ALTER TABLE `assignplan`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `counselling`
--
ALTER TABLE `counselling`
  MODIFY `programid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dietitian`
--
ALTER TABLE `dietitian`
  MODIFY `dietionid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `plandetails`
--
ALTER TABLE `plandetails`
  MODIFY `detailid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `tid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignplan`
--
ALTER TABLE `assignplan`
  ADD CONSTRAINT `assignplan_ibfk_1` FOREIGN KEY (`detailid`) REFERENCES `plandetails` (`detailid`),
  ADD CONSTRAINT `assignplan_ibfk_2` FOREIGN KEY (`dietionid`) REFERENCES `dietitian` (`dietionid`);

--
-- Constraints for table `dietitian`
--
ALTER TABLE `dietitian`
  ADD CONSTRAINT `logid` FOREIGN KEY (`loginid`) REFERENCES `login` (`loginid`);

--
-- Constraints for table `plandetails`
--
ALTER TABLE `plandetails`
  ADD CONSTRAINT `plandetails_ibfk_1` FOREIGN KEY (`logid`) REFERENCES `login` (`loginid`);

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `loginid` FOREIGN KEY (`loginid`) REFERENCES `login` (`loginid`);

--
-- Constraints for table `trainer`
--
ALTER TABLE `trainer`
  ADD CONSTRAINT `trainer_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `login` (`loginid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
