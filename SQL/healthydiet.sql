-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 09:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(5) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `des` varchar(50) NOT NULL,
  `status` varchar(8) NOT NULL
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
-- Table structure for table `dietitian`
--

CREATE TABLE `dietitian` (
  `dietionid` int(20) NOT NULL,
  `loginid` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phonenumber` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `clinic` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `idproof` varchar(500) NOT NULL,
  `experiencedyears` int(2) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dietitian`
--

INSERT INTO `dietitian` (`dietionid`, `loginid`, `name`, `age`, `gender`, `phonenumber`, `email`, `clinic`, `district`, `idproof`, `experiencedyears`, `qualification`, `status`, `file`) VALUES
(19, 57, 'Rani Raj', 34, 'female', '9809765632', 'raniraj@gmail.com', 'Rani Clinic', 'pathanamthitta', 'idcard.jpg', 11, 'Post Graduate Diploma in Nutrition & Dietetics', 0, 'person3.jpg'),
(20, 62, 'Reshmi Das', 45, 'Female', '7678654545', 'reshmi@gmail.com', 'Reshmi Clinic', 'Kozhikode', 'id-card.jpg', 20, 'Post Graduate Diploma in Nutrition & Dietetics', 1, 'diet2.jpg'),
(22, 65, 'Neha Alex', 55, 'Female', '8789876765', 'neha@gmail.com', 'Healthy Life Clinic', 'Kozhikode', 'cardid.jpg', 35, ' M.Sc. in Food & Nutrition', 1, 'diet1.jpg'),
(23, 66, 'Savio Paul', 31, 'Male', '9876565768', 'savio@gmail.com', 'Keep Healthy Clinic', 'Kollam', 'john.jpg', 9, ' M.Sc. in Food & Nutrition', 1, 'person_4.jpg'),
(25, 92, 'Albin Joseph', 37, 'Male', '8789098621', 'albinj@gmail.com', 'Healthyfy', 'Thiruvananthapuram', 'image11.jpg', 7, 'PG Diploma in Nutrition', 1, 'albinimage.jpg'),
(26, 93, 'Clarie Allen', 40, 'Male', '9876543212', 'clarie@gmail.com', 'Healthy diet', 'Malappuram', 'idcard1.jpg', 23, 'PG Diploma in Nutrition', 1, 'clarieallen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type1` varchar(10) NOT NULL,
  `status` int(1) NOT NULL
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
(89, 'Nisha', 'Nisha@123', 'trainer', 1),
(91, 'manju@gmail.com', 'Manju@456', 'user', 1),
(92, 'Albin', 'Albin@123', 'dietitian', 1),
(93, 'Clarie', 'Clar@11', 'dietitian', 1),
(94, 'karthik@gmail.com', 'Karthik@12', 'user', 1),
(95, 'sonu@gmail.com', 'Sonu@123', 'user', 1),
(96, 'rony@gmail.com', 'Rony@123', 'user', 1),
(99, 'anvika@gmail.com', 'Anvika@123', 'user', 1),
(100, 'shifana@gmail.com', 'Shifana@123', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `planbackup`
--

CREATE TABLE `planbackup` (
  `planid` int(5) NOT NULL,
  `detailid` int(5) NOT NULL,
  `age` int(2) NOT NULL,
  `height` int(3) NOT NULL,
  `weight` int(3) NOT NULL,
  `sugar` varchar(5) NOT NULL,
  `bp` varchar(12) NOT NULL,
  `cho` varchar(12) NOT NULL,
  `dietrequired` varchar(15) NOT NULL,
  `habits` varchar(25) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `discription` varchar(50) NOT NULL,
  `updt` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `planbackup`
--

INSERT INTO `planbackup` (`planid`, `detailid`, `age`, `height`, `weight`, `sugar`, `bp`, `cho`, `dietrequired`, `habits`, `disease`, `discription`, `updt`) VALUES
(9, 93, 0, 0, 100, '92.5', '140/80mmHg', '210 mg/dl', 'Weight loss', 'Non Veg and veg', 'Asthma, Cough', 'Allergic to peanuts and soya.', '05-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `plandetails`
--

CREATE TABLE `plandetails` (
  `detailid` int(5) NOT NULL,
  `logid` int(5) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  `age` int(2) NOT NULL,
  `height` int(3) NOT NULL,
  `weight` int(3) NOT NULL,
  `targetweight` int(3) NOT NULL,
  `sugar` varchar(5) NOT NULL,
  `bp` varchar(12) NOT NULL,
  `cho` varchar(12) NOT NULL,
  `habits` varchar(25) NOT NULL,
  `dietrequired` varchar(15) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `charge` int(5) NOT NULL,
  `dname` varchar(3) NOT NULL,
  `idproof` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plandetails`
--

INSERT INTO `plandetails` (`detailid`, `logid`, `date`, `age`, `height`, `weight`, `targetweight`, `sugar`, `bp`, `cho`, `habits`, `dietrequired`, `disease`, `discription`, `charge`, `dname`, `idproof`, `status`) VALUES
(93, 96, '06-07-22', 35, 180, 99, 50, '95.5', '120/80mmHg', '250 mg/dl', 'Non Veg and veg', 'Weight loss', 'Asthma, Cough', 'Allergic to peanuts and soya.', 2000, '23', 'idcard7.jpg', 'Posted'),
(94, 99, '05-07-2022', 45, 180, 45, 100, '93.6', '110/80mmHg', '220 mg/dl', 'Non Veg', 'Weight gain', 'Kidney stones', 'Allergic to wheat rice.', 1500, '22', 'id2.jpg', 'Updated'),
(95, 95, '06-07-2022', 45, 188, 102, 50, '115', '110/80mmHg', '230 mg/dl', 'Non veg and veg', 'Weight loss', 'Kidney stones', 'Allergic to soya, beans.', 2450, '25', 'john.jpg', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `postsolution`
--

CREATE TABLE `postsolution` (
  `postid` int(5) NOT NULL,
  `loginid` int(5) NOT NULL,
  `detailid` int(5) NOT NULL,
  `image` varchar(500) NOT NULL,
  `dwm` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postsolution`
--

INSERT INTO `postsolution` (`postid`, `loginid`, `detailid`, `image`, `dwm`, `status`) VALUES
(63, 92, 95, 'DIET CHART FOR WEIGHT LOSS.pdf', 'Follow this diet plan upto 14 days. Continue same ', 'Updated'),
(85, 62, 96, 'certi.jpg', 'w43ertryuiij', 'Updated'),
(91, 66, 93, 'DIET CHART FOR WEIGHT LOSS.pdf', 'Follow for 7 days', 'Posted');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(5) NOT NULL,
  `loginid` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `loginid`, `fname`, `lname`, `email`, `adress`, `phone`, `gender`, `estatus`) VALUES
(27, 91, 'Manju', 'Mohan', 'manju@gmail.com', 'Manju house', '9878676511', 'Female', 1),
(28, 94, 'Karthik', 'Shivadas', 'karthik@gmail.com', 'Karthik house', '9876567611', 'Male', 1),
(29, 95, 'Sonu', 'Mohan', 'sonu@gmail.com', 'Sonu house', '9875654567', 'Male', 1),
(30, 96, 'Rony', 'Sojan', 'rony@gmail.com', 'Rony villa kottayam', '9812345678', 'Male', 1),
(31, 99, 'Anvika', 'Anil', 'anvika@gmail.com', 'Anvika villa kottayam', '9875643234', 'Female', 1),
(32, 100, 'Shifana', 'P N', 'shifana@gmail.com', 'Shifana house', '9876543234', 'Female', 1);

-- --------------------------------------------------------

--
-- Table structure for table `solutionbackup`
--

CREATE TABLE `solutionbackup` (
  `solutionid` int(5) NOT NULL,
  `postid` int(5) NOT NULL,
  `image` varchar(500) NOT NULL,
  `dwm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solutionbackup`
--

INSERT INTO `solutionbackup` (`solutionid`, `postid`, `image`, `dwm`) VALUES
(9, 91, '', ''),
(10, 91, 'albinimage.jpg', 'next solution posted'),
(11, 91, 'certify.jpg', 'all ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_healthclasses`
--

CREATE TABLE `tbl_healthclasses` (
  `programid` int(5) NOT NULL,
  `programname` varchar(50) NOT NULL,
  `conname` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `ampm` varchar(2) NOT NULL,
  `mode` varchar(8) NOT NULL,
  `description` varchar(50) NOT NULL,
  `link` varchar(40) NOT NULL,
  `file` varchar(500) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_healthclasses`
--

INSERT INTO `tbl_healthclasses` (`programid`, `programname`, `conname`, `date`, `time`, `ampm`, `mode`, `description`, `link`, `file`, `status`) VALUES
(1, 'Health and Happiness', 'Felix Thomas', '2022-07-31', '10:00:00', 'AM', 'Online', 'Maintain Healthy Life', 'meet.google.com/myw-mbkv-cyc', 'helthh.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `p_id` int(5) NOT NULL,
  `loginid` int(5) NOT NULL,
  `amount` int(5) NOT NULL,
  `detailid` int(5) NOT NULL,
  `status` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`p_id`, `loginid`, `amount`, `detailid`, `status`) VALUES
(1, 66, 2599, 93, 'unpaid'),
(2, 65, 1500, 94, 'unpaid'),
(3, 66, 2000, 93, 'unpaid'),
(4, 92, 2450, 95, 'unpaid'),
(5, 92, 2450, 95, 'unpaid'),
(6, 92, 2450, 95, 'unpaid'),
(7, 92, 2450, 95, 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trainingsec`
--

CREATE TABLE `tbl_trainingsec` (
  `trainid` int(5) NOT NULL,
  `wy` varchar(15) NOT NULL,
  `tname` varchar(15) NOT NULL,
  `mode` varchar(8) NOT NULL,
  `link` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `ampm` varchar(2) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_trainingsec`
--

INSERT INTO `tbl_trainingsec` (`trainid`, `wy`, `tname`, `mode`, `link`, `date`, `time`, `ampm`, `status`) VALUES
(1, 'Workout Class', '1', 'Online', 'meet.google.com/kyq-zhaj-xpx', '2022-07-31', '11:30:00', 'AM', 'active'),
(2, 'Yoga Class', '8', 'Online', 'meet.google.com/zpd-yvcd-tfq', '2022-08-12', '09:30:00', 'AM', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `tid` int(5) NOT NULL,
  `loginid` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `number` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `address` varchar(50) NOT NULL,
  `category` varchar(1) NOT NULL,
  `idproof` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `certificate` varchar(500) NOT NULL,
  `status` int(1) NOT NULL
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
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

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
-- Indexes for table `planbackup`
--
ALTER TABLE `planbackup`
  ADD PRIMARY KEY (`planid`);

--
-- Indexes for table `plandetails`
--
ALTER TABLE `plandetails`
  ADD PRIMARY KEY (`detailid`),
  ADD KEY `logid` (`logid`);

--
-- Indexes for table `postsolution`
--
ALTER TABLE `postsolution`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `loginid` (`loginid`),
  ADD KEY `detailid` (`detailid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loginid` (`loginid`);

--
-- Indexes for table `solutionbackup`
--
ALTER TABLE `solutionbackup`
  ADD PRIMARY KEY (`solutionid`);

--
-- Indexes for table `tbl_healthclasses`
--
ALTER TABLE `tbl_healthclasses`
  ADD PRIMARY KEY (`programid`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_trainingsec`
--
ALTER TABLE `tbl_trainingsec`
  ADD PRIMARY KEY (`trainid`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dietitian`
--
ALTER TABLE `dietitian`
  MODIFY `dietionid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `planbackup`
--
ALTER TABLE `planbackup`
  MODIFY `planid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `plandetails`
--
ALTER TABLE `plandetails`
  MODIFY `detailid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `postsolution`
--
ALTER TABLE `postsolution`
  MODIFY `postid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `solutionbackup`
--
ALTER TABLE `solutionbackup`
  MODIFY `solutionid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_healthclasses`
--
ALTER TABLE `tbl_healthclasses`
  MODIFY `programid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_trainingsec`
--
ALTER TABLE `tbl_trainingsec`
  MODIFY `trainid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `tid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

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
