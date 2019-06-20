-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 02:03 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rbi_dtr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `admin_image` varchar(100) NOT NULL,
  `admin_type` varchar(100) NOT NULL,
  `admin_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `confirm_password`, `admin_image`, `admin_type`, `admin_added`) VALUES
(1, 'Teruyoshi ', '', 'Takahashi', 'Teru', '123', '123', '', 'admin', '2018-04-06 00:00:00'),
(2, 'Shiori ', '', 'Kawahara', 'sally', '123', '123', '', 'admin', '0000-00-00 00:00:00'),
(3, 'Reeracoen', 'BPO', 'Inc.', 'admin', '?P@ssw0rd123?', '?P@ssw0rd123?', '', 'admin', '2018-04-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_head`
--

CREATE TABLE `admin_head` (
  `admin_id` int(15) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `confirm_password` varchar(25) NOT NULL,
  `admin_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_head`
--

INSERT INTO `admin_head` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `confirm_password`, `admin_image`) VALUES
(1, 'Reeracoen', 'BPO', 'admin', '123', '123', 'lord.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `all_eventaction`
--

CREATE TABLE `all_eventaction` (
  `id` int(15) NOT NULL,
  `admin_fullname` text NOT NULL,
  `action` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `all_eventaction`
--

INSERT INTO `all_eventaction` (`id`, `admin_fullname`, `action`, `date`) VALUES
(621, 'sally', 'Logged in', '2018-04-20 15:24:37'),
(622, 'sally', 'Added Trainee, Name: ada\'asdas', '2018-04-20 15:25:46'),
(623, 'sally', 'Edited Trainee, ID Number: RCN-1212', '2018-04-20 15:26:07'),
(624, 'sally', 'Deleted student, ID Number: RCN-1212', '2018-04-20 15:26:26'),
(625, 'sally', 'Deleted student, ID Number: RCN-1111', '2018-04-20 15:26:32'),
(626, 'sally', 'Edited Trainee, ID Number: RCN-0001111', '2018-04-20 15:28:06'),
(627, 'sally', 'Edited Trainee, ID Number: RCN-0000154', '2018-04-20 15:30:56'),
(628, 'sally', 'Edited Trainee, ID Number: RCN-0000155', '2018-04-20 15:31:20'),
(629, 'sally', 'Edited Trainee, ID Number: RCN-0000157', '2018-04-20 15:32:15'),
(630, 'sally', 'Edited Trainee, ID Number: RCN-0000278', '2018-04-20 15:32:39'),
(631, 'sally', 'Edited Trainee, ID Number: RCN-0000438', '2018-04-20 15:32:56'),
(632, 'sally', 'Edited Trainee, ID Number: RCN-0000439', '2018-04-20 15:33:15'),
(633, 'sally', 'Edited Trainee, ID Number: RCN-0000460', '2018-04-20 15:33:43'),
(634, 'sally', 'Edited Trainee, ID Number: RCN-0000482', '2018-04-20 15:34:11'),
(635, 'sally', 'Edited Trainee, ID Number: RCN-0000495', '2018-04-20 15:34:33'),
(636, 'sally', 'Edited Trainee, ID Number: RCN-0000496', '2018-04-20 15:35:09'),
(637, 'sally', 'Edited Trainee, ID Number: RCN-0000566', '2018-04-20 15:36:09'),
(638, 'sally', 'Edited Trainee, ID Number: RCN-0000614', '2018-04-20 15:36:40'),
(639, 'sally', 'Edited Trainee, ID Number: RCN-0000621', '2018-04-20 15:37:06'),
(640, 'sally', 'Edited Trainee, ID Number: RCN-0000623', '2018-04-20 15:37:26'),
(641, 'sally', 'Edited Trainee, ID Number: RCN-0000624', '2018-04-20 15:37:54'),
(642, 'sally', 'Edited Trainee, ID Number: RCN-0000629', '2018-04-20 15:38:33'),
(643, 'sally', 'Edited Trainee, ID Number: RCN-0000652', '2018-04-20 15:38:59'),
(644, 'sally', 'Edited Trainee, ID Number: RCN-0000724', '2018-04-20 15:39:44'),
(645, 'sally', 'Edited Trainee, ID Number: RCN-0000739', '2018-04-20 15:40:08'),
(646, 'sally', 'Edited Trainee, ID Number: RCN-0000741', '2018-04-20 15:40:27'),
(647, 'sally', 'Edited Trainee, ID Number: RCN-0000753', '2018-04-20 15:41:21'),
(648, 'sally', 'Edited Trainee, ID Number: RCN-0000761', '2018-04-20 15:41:47'),
(649, 'sally', 'Edited Trainee, ID Number: RCN-0000769', '2018-04-20 15:42:05'),
(650, 'sally', 'Edited Trainee, ID Number: RCN-0000772', '2018-04-20 15:44:57'),
(651, 'sally', 'Edited Trainee, ID Number: RCN-0000775', '2018-04-20 15:45:25'),
(652, 'sally', 'Edited Trainee, ID Number: RCN-0000808', '2018-04-20 15:45:47'),
(653, 'sally', 'Edited Trainee, ID Number: RCN-0000811', '2018-04-20 15:46:12'),
(654, 'sally', 'Edited Trainee, ID Number: RCN-0000812', '2018-04-20 15:46:37'),
(655, 'sally', 'Edited Trainee, ID Number: RCN-0000813', '2018-04-20 15:46:59'),
(656, 'sally', 'Edited Trainee, ID Number: RCN-0000814', '2018-04-20 15:47:40'),
(657, 'sally', 'Edited Trainee, ID Number: RCN-0001049', '2018-04-20 15:48:04'),
(658, 'sally', 'Edited Trainee, ID Number: RCN-0001049', '2018-04-20 15:48:34'),
(659, 'sally', 'Edited Trainee, ID Number: RCN-0000815', '2018-04-20 15:49:25'),
(660, 'sally', 'Edited Trainee, ID Number: RCN-0000845', '2018-04-20 15:49:52'),
(661, 'sally', 'Edited Trainee, ID Number: RCN-0000846', '2018-04-20 15:50:16'),
(662, 'sally', 'Edited Trainee, ID Number: RCN-0000861', '2018-04-20 15:50:47'),
(663, 'sally', 'Edited Trainee, ID Number: RCN-0000876', '2018-04-20 15:51:12'),
(664, 'sally', 'Edited Trainee, ID Number: RCN-0000903', '2018-04-20 15:51:37'),
(665, 'sally', 'Edited Trainee, ID Number: RCN-0000904', '2018-04-20 15:51:58'),
(666, 'sally', 'Edited Trainee, ID Number: RCN-0000941', '2018-04-20 15:52:18'),
(667, 'sally', 'Edited Trainee, ID Number: RCN-0001034', '2018-04-20 15:52:41'),
(668, 'sally', 'Edited Trainee, ID Number: RCN-0001048', '2018-04-20 15:53:10'),
(669, 'sally', 'Edited Trainee, ID Number: RCN-0001049', '2018-04-20 15:53:31'),
(670, 'sally', 'Edited Trainee, ID Number: RCN-0001051', '2018-04-20 15:53:56'),
(671, 'sally', 'Edited Trainee, ID Number: RCN-0001052', '2018-04-20 15:54:30'),
(672, 'sally', 'Edited Trainee, ID Number: RCN-0001053', '2018-04-20 15:54:51'),
(673, 'sally', 'Edited Trainee, ID Number: RCN-0001057', '2018-04-20 15:55:16'),
(674, 'sally', 'Edited Trainee, ID Number: RCN-0001066', '2018-04-20 15:56:58'),
(675, 'sally', 'Edited Trainee, ID Number: RCN-0001084', '2018-04-20 15:58:01'),
(676, 'sally', 'Edited Trainee, ID Number: RCN-0001090', '2018-04-20 15:58:28'),
(677, 'sally', 'Edited Trainee, ID Number: RCN-0001093', '2018-04-20 15:59:03'),
(678, 'sally', 'Edited Trainee, ID Number: RCN-0001112', '2018-04-20 16:00:19'),
(679, 'sally', 'Edited Trainee, ID Number: RCN-0001121', '2018-04-20 16:01:11'),
(680, 'sally', 'Edited Trainee, ID Number: RCN-0001127', '2018-04-20 16:01:35'),
(681, 'sally', 'Deleted student, ID Number: RCN-12', '2018-04-20 16:01:48'),
(682, 'sally', 'Deleted student, ID Number: RCN-888', '2018-04-20 16:01:55'),
(683, 'sally', 'Edited Trainee, ID Number: RCN-NC00005582', '2018-04-20 16:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `backup_employee`
--

CREATE TABLE `backup_employee` (
  `user_id` int(11) NOT NULL,
  `company_number` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `department` varchar(25) NOT NULL,
  `year` varchar(25) NOT NULL,
  `company` varchar(100) NOT NULL,
  `totaltime_render` int(11) NOT NULL,
  `remain_time` int(25) NOT NULL,
  `finish_time` int(25) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `backup_login_logs`
--

CREATE TABLE `backup_login_logs` (
  `user_id` int(11) NOT NULL,
  `company_number` varchar(15) NOT NULL,
  `date1` date NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `total_rendered` time NOT NULL,
  `remarks` varchar(15) NOT NULL,
  `status` int(15) NOT NULL,
  `Note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE `check_in` (
  `user_id` int(11) NOT NULL,
  `company_number` varchar(15) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `date1` date NOT NULL,
  `check_in` time NOT NULL,
  `check_out` time NOT NULL,
  `Time_In` varchar(100) NOT NULL,
  `Time_Out` varchar(100) NOT NULL,
  `total_hours` time NOT NULL,
  `remarks` varchar(15) NOT NULL,
  `status` int(15) NOT NULL,
  `Note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `signatory`
--

CREATE TABLE `signatory` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signatory`
--

INSERT INTO `signatory` (`id`, `fullname`, `position`) VALUES
(1, 'Teruyoshi Takahashi', 'CEO');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `user_id` int(11) NOT NULL,
  `company_number` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `department` varchar(25) NOT NULL,
  `year` varchar(25) NOT NULL,
  `company` varchar(100) NOT NULL,
  `Time_In` varchar(100) NOT NULL,
  `Time_Out` varchar(100) NOT NULL,
  `remain_time` int(25) NOT NULL,
  `finish_time` int(25) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`user_id`, `company_number`, `firstname`, `pass`, `lastname`, `gender`, `department`, `year`, `company`, `Time_In`, `Time_Out`, `remain_time`, `finish_time`, `status`) VALUES
(13, 'RCN-0001127', 'Shogo', 'w3jNHT', 'HATADA', 'Male', 'Management', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(14, 'RCN-0001121', 'ALLAN JR', 'Rj9EZV', 'CEPEDA', 'Male', 'Support', '2018-04-10', 'RCN', '08:30', '17:30', 8, 0, 'incomplete'),
(15, 'RCN-0001112', 'JOHN RAYMOND', 'FwQSCE', 'LOZANO', 'Male', 'Management', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(16, 'RCN-0001111', 'JARVIS CHRISTIAN', 'adalap', 'Palada', 'Male', 'Support', '2018-04-10', 'RCN', '08:30', '17:30', 8, 0, 'incomplete'),
(17, 'RCN-0001093', 'Shinky Mae', 'G4bMPA', 'Adlawan', 'Female', 'Data Entry', '2018-04-10', 'RCN', '08:30', '17:30', 8, 0, 'incomplete'),
(19, 'RCN-0001090', 'Arniel', 'URHs9r', 'Cheng', 'Male', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(20, 'RCN-0001084', 'Mitchille', 'zNZrW6', 'PestaÃ±as', 'Female', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(21, 'RCN-0001066', 'Daryl Anthony', '2yqAxP', 'Diano', 'Male', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(22, 'RCN-0001057', 'Geraldine', '3xpeuN', 'Elumba', 'Female', 'Support', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(23, 'RCN-0001053', 'Jerneil Gasat â…¢', 'GQG854', 'Ramos', 'Male', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(24, 'RCN-0001052', 'KARREN', '29JvNc', 'RAMOS', 'Female', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(25, 'RCN-0001051', 'Jovanie', 'ARU6Rq', 'Marollano', 'Male', 'Data Entry', '2018-04-10', 'RCN', '08:30', '17:30', 8, 0, 'incomplete'),
(26, 'RCN-0001049', 'Flora May Joy', 'YQtcNt', 'Maningo', 'Female', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(27, 'RCN-0001048', 'Dia Fe', 'zmjDqX', 'Talines', 'Female', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(28, 'RCN-0001034', 'Adrian Vince', 'WjTQ3x', 'Delfino', 'Male', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(29, 'RCN-0000941', 'SHIORI', 'sSMz6k', 'KAWAHARA', 'Male', 'Management', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(30, 'RCN-0000904', 'ROLANDO JR', 'ALdN74', 'AMANCE', 'Male', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(31, 'RCN-0000903', 'IRISH', 'wyygR2', 'NUÃ‘EZ', 'Female', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(32, 'RCN-0000876', 'SONNA', 'j7TYpk', 'ABELLO', 'Female', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(33, 'RCN-0000861', 'Leo', '3cdheL', 'Jumawan', 'Male', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(34, 'RCN-0000846', 'JONATHAN JAMES ', 'v2JbmL', 'GO', 'Male', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(35, 'RCN-0000845', 'SHYRA MAE', 'CuBzGg', 'FAJARDO', 'Female', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(36, 'RCN-0000813', 'JOHN REY', 'B8UBTg', 'CAMAY', 'Male', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(37, 'RCN-0000812', 'ARMAR', 'FhdMwN', 'VILLAMOR', 'Male', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(38, 'RCN-0000811', 'DIANA JANE', 'gC6HcT', 'MENCEDE', 'Female', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(39, 'RCN-0000815', 'ROWENA', 'dDUGTD', 'SISON', 'Female', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(40, 'RCN-0000814', 'MICHELLE MAE', 'JT68KA', 'LOSORATA', 'Female', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(41, 'RCN-0000808', 'JESSA', 'gahk3J', 'BARTE', 'Female', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(42, 'RCN-0000775', 'JACKLYN', 'kSqB4H', 'BARDOQUILLO', 'Female', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(43, 'RCN-0000772', 'Mansueto', 'zYUEgF', 'Aparre', 'Male', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(44, 'RCN-0000769', 'Lynary Char', 'Fmq6S9', 'Arcabal', 'Female', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(45, 'RCN-0000761', 'Shiela Marie', 'mwtbxG', 'Sorela', 'Female', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(46, 'RCN-0000741', 'Benjie', 'QYgk75', 'Manito', 'Male', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(47, 'RCN-0000753', 'Baby', 'LnyETX', 'Conchas', 'Female', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(48, 'RCN-0000739', 'Cris Lorenz', 'cHkwcN', 'Java', 'Male', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(49, 'RCN-0000724', 'DESIREE LEN', 'ALAAEb', 'CHIONG', 'Female', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(50, 'RCN-0000652', 'KANA', '5teCyn', 'KOHASHI', 'Female', 'Management', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(51, 'RCN-0000614', 'JANE', 'aZ8W4H', 'MEDIANA', 'Female', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(52, 'RCN-0000623', 'VERLOU', 'VDp2eS', 'ADLAWON', 'Male', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(53, 'RCN-0000621', 'JOHANNA', 'NDVrbY', 'CENA', 'Female', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(54, 'RCN-0000624', 'HARRY', 'ZXKmGe', 'SOCO', 'Male', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(55, 'RCN-0000629', 'CAREEN', 'pUUzdK', 'GACITA', 'Female', 'ECC', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 4, 0, 'incomplete'),
(56, 'RCN-0000566', 'ALONA', 'wYHguW', 'FERNANDEZ', 'Female', 'Support', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(57, 'RCN-0000496', 'AIDA', 'YJZtBn', 'TOLENTIN', 'Female', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(58, 'RCN-0000495', 'ROSEREYLYN', 'xPAGkz', 'MONDEJAR', 'Male', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(59, 'RCN-0000482', 'DIANA ROSE', '4jERzn', 'TAMPARONG', 'Female', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(60, 'RCN-0000460', 'JANLEE', 'xFpHAw', 'AMISTOSO', 'Male', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(61, 'RCN-0000438', 'NIKKI', 'CZw6vR', 'SAROL', 'Male', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(62, 'RCN-0000439', 'LLOYD', 'M7E4fv', 'SULATRA', 'Male', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(63, 'RCN-0000278', 'Hirofumi', '2B3CPU', 'Kugo', 'Male', 'Management', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(64, 'RCN-0000157', 'Kelvin', 'kutQUr', 'Almaiz', 'Male', 'Data Entry', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete'),
(65, 'RCN-0000155', 'Vanessa', 'YwusEF', 'Garcia', 'Female', 'Data Entry', '2018-04-10', 'RCN', '08:30', '17:30', 8, 0, 'incomplete'),
(66, 'RCN-0000154', 'Lilibeth', 'KAW3W9', 'Antolijao', 'Female', 'Data Entry', '2018-04-10', 'RCN', '00:00', '00:00', 8, 0, 'incomplete'),
(68, 'RCN-NC00005582', 'Teruyoshi', 'SWF9H5', 'Takahashi', 'Male', 'Management', '2018-04-10', 'RCN', '00:00:00', '00:00:00', 8, 0, 'incomplete');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_head`
--
ALTER TABLE `admin_head`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `all_eventaction`
--
ALTER TABLE `all_eventaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backup_employee`
--
ALTER TABLE `backup_employee`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `backup_login_logs`
--
ALTER TABLE `backup_login_logs`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `check_in`
--
ALTER TABLE `check_in`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `signatory`
--
ALTER TABLE `signatory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `admin_head`
--
ALTER TABLE `admin_head`
  MODIFY `admin_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `all_eventaction`
--
ALTER TABLE `all_eventaction`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=684;

--
-- AUTO_INCREMENT for table `backup_employee`
--
ALTER TABLE `backup_employee`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `backup_login_logs`
--
ALTER TABLE `backup_login_logs`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `check_in`
--
ALTER TABLE `check_in`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `signatory`
--
ALTER TABLE `signatory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
