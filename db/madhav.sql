-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 06:44 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `madhav`
--
CREATE DATABASE IF NOT EXISTS `madhav` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `madhav`;

-- --------------------------------------------------------

--
-- Table structure for table `architect_details`
--

CREATE TABLE IF NOT EXISTS `architect_details` (
`id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `arc_organization` varchar(100) NOT NULL,
  `arc_name` varchar(100) NOT NULL,
  `arc_designation` varchar(100) NOT NULL,
  `arc_email` varchar(50) NOT NULL,
  `arc_mobile` bigint(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `architect_details`
--

INSERT INTO `architect_details` (`id`, `m_id`, `arc_organization`, `arc_name`, `arc_designation`, `arc_email`, `arc_mobile`) VALUES
(1, 1, 'org1', 'jay', 'asd', 'j@j.com', 6598785252),
(2, 1, 'org2', 'jay2', 'asd2', 'j2@j.com', 6598784512);

-- --------------------------------------------------------

--
-- Table structure for table `client_manager`
--

CREATE TABLE IF NOT EXISTS `client_manager` (
`id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cli_designation` varchar(150) NOT NULL,
  `cli_email` varchar(50) NOT NULL,
  `cli_mobile` bigint(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_manager`
--

INSERT INTO `client_manager` (`id`, `m_id`, `name`, `cli_designation`, `cli_email`, `cli_mobile`) VALUES
(1, 1, 'pradip', 'abc1', 'p@p.com', 9878451245),
(2, 1, 'pradip2', 'abc2', 'p2@p.com', 9656231245);

-- --------------------------------------------------------

--
-- Table structure for table `consultant_details`
--

CREATE TABLE IF NOT EXISTS `consultant_details` (
`id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `cons_organization` varchar(100) NOT NULL,
  `cons_name` varchar(100) NOT NULL,
  `cons_designation` varchar(100) NOT NULL,
  `cons_email` varchar(50) NOT NULL,
  `cons_mobile` bigint(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultant_details`
--

INSERT INTO `consultant_details` (`id`, `m_id`, `cons_organization`, `cons_name`, `cons_designation`, `cons_email`, `cons_mobile`) VALUES
(1, 1, 'con1', 'raj', 'des1', 'r@r.com', 9878456321),
(2, 1, 'con2', 'raj2', 'des2', 'r2@r.com', 5698533),
(3, 1, 'con3', 'raj3', 'des3', 'r3@r.com', 2312121212);

-- --------------------------------------------------------

--
-- Table structure for table `core_activity`
--

CREATE TABLE IF NOT EXISTS `core_activity` (
`id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `coreact_name` varchar(50) NOT NULL,
  `planned_qty` decimal(10,2) NOT NULL,
  `planned_uom` varchar(10) NOT NULL,
  `linked_material` varchar(50) NOT NULL,
  `percentage` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `core_activity`
--

INSERT INTO `core_activity` (`id`, `m_id`, `coreact_name`, `planned_qty`, `planned_uom`, `linked_material`, `percentage`) VALUES
(1, 1, 'asa', '451.00', '151', '15', '5.00'),
(2, 1, '15', '515.00', '5', '51', '5.00'),
(3, 0, '', '0.00', '', '', '0.00'),
(4, 0, '', '0.00', '', '', '0.00'),
(5, 2, 'adx', '0.00', 'sds', 'szdsz', '53.00'),
(6, 2, '323', '3232.00', '232', '23', '23.00'),
(7, 3, 'adx', '0.00', 'sds', 'szdsz', '53.00'),
(8, 3, '323', '3232.00', '232', '23', '23.00');

-- --------------------------------------------------------

--
-- Table structure for table `ipm_deatils`
--

CREATE TABLE IF NOT EXISTS `ipm_deatils` (
`id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `ipm_organization` varchar(100) NOT NULL,
  `ipm_name` varchar(100) NOT NULL,
  `ipm_staffno` varchar(20) NOT NULL,
  `ipm_designation` varchar(100) NOT NULL,
  `ipm_email` varchar(50) NOT NULL,
  `ipm_mobile` bigint(10) NOT NULL,
  `ipm_staffid` varchar(20) NOT NULL,
  `ipm_level` varchar(20) NOT NULL,
  `ipm_userid` varchar(20) NOT NULL,
  `ipm_password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipm_deatils`
--

INSERT INTO `ipm_deatils` (`id`, `m_id`, `ipm_organization`, `ipm_name`, `ipm_staffno`, `ipm_designation`, `ipm_email`, `ipm_mobile`, `ipm_staffid`, `ipm_level`, `ipm_userid`, `ipm_password`) VALUES
(1, 1, 'in1', 'ravi', '10', 'jkl', 'ra@r.com', 5645454554, '10', '2', 'asdf', 'asdfg'),
(2, 1, 'in2', 'ravi2', '101', 'jkl2', 'ra2@r.com', 5645454554, '101', '3', 'asdf2', 'asdff');

-- --------------------------------------------------------

--
-- Table structure for table `keyvariable_details`
--

CREATE TABLE IF NOT EXISTS `keyvariable_details` (
`id` int(11) NOT NULL,
  `coreact_nm` varchar(50) NOT NULL,
  `standard_op` varchar(150) NOT NULL,
  `unit_standard_op` varchar(10) NOT NULL,
  `weekly_off` varchar(10) NOT NULL,
  `half_working` varchar(10) NOT NULL,
  `normal_hours` varchar(5) NOT NULL,
  `permissible_hours` varchar(5) NOT NULL,
  `list_holiday` varchar(150) NOT NULL,
  `weather_dependent` varchar(5) NOT NULL,
  `micro_activity` varchar(150) NOT NULL,
  `budget_resources` varchar(150) NOT NULL,
  `schestartdt` date NOT NULL,
  `scheendtdt` date NOT NULL,
  `work_rate` varchar(10) NOT NULL,
  `material_code` varchar(20) NOT NULL,
  `linked_schedule` varchar(5) NOT NULL,
  `effective_date` date NOT NULL,
  `rate` varchar(10) NOT NULL,
  `time_unit` varchar(10) NOT NULL,
  `Ceilling` varchar(150) NOT NULL,
  `remark` varchar(150) NOT NULL,
  `bonus_effectivedt` date NOT NULL,
  `bonus_rate` varchar(10) NOT NULL,
  `bonus_timeunit` varchar(10) NOT NULL,
  `bonus_ceilling` varchar(150) NOT NULL,
  `bonus_remark` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyvariable_details`
--

INSERT INTO `keyvariable_details` (`id`, `coreact_nm`, `standard_op`, `unit_standard_op`, `weekly_off`, `half_working`, `normal_hours`, `permissible_hours`, `list_holiday`, `weather_dependent`, `micro_activity`, `budget_resources`, `schestartdt`, `scheendtdt`, `work_rate`, `material_code`, `linked_schedule`, `effective_date`, `rate`, `time_unit`, `Ceilling`, `remark`, `bonus_effectivedt`, `bonus_rate`, `bonus_timeunit`, `bonus_ceilling`, `bonus_remark`) VALUES
(1, 'Activity 3', '51', '1212', 'Wednesday', 'Thursday', '44', '5551', '515121', '1', 'sdsz', 'sszd', '2018-04-20', '2018-04-06', '12', 'szd', '1', '2018-04-13', 'uhu', 'jnn', 'hbn', 'junn', '2018-04-05', '15', '51', '152', '515'),
(2, 'Activity 2', '323', '23', 'Tuesday', 'Thursday', '3213', '23', '23', '1', '323', '2323', '2018-04-12', '2018-04-21', '323', '23.', '1', '2018-04-06', '3232', '2323', '232', '3.2', '2018-04-20', '322', '2.3', '232', '2.32'),
(3, 'Activity 2', '323', '23', 'Tuesday', 'Thursday', '3213', '23', '23', '1', '323', '2323', '2018-04-12', '2018-04-21', '323', '23.', '1', '2018-04-06', '3232', '2323', '232', '3.2', '2018-04-20', '322', '2.3', '232', '2.32');

-- --------------------------------------------------------

--
-- Table structure for table `login_master`
--

CREATE TABLE IF NOT EXISTS `login_master` (
`id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(25) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_master`
--

INSERT INTO `login_master` (`id`, `user_id`, `email`, `password`, `user_type`, `status`) VALUES
(79, 0, 'admin@gmail.com', 'admin', 'Admin', 1),
(80, 2, 'vimal@gmail.com', 'vimal', 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pmc_details`
--

CREATE TABLE IF NOT EXISTS `pmc_details` (
`id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `pmc_organization` varchar(100) NOT NULL,
  `pmc_name` varchar(100) NOT NULL,
  `pmc_designation` varchar(100) NOT NULL,
  `pmc_email` varchar(50) NOT NULL,
  `pmc_mobile` bigint(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pmc_details`
--

INSERT INTO `pmc_details` (`id`, `m_id`, `pmc_organization`, `pmc_name`, `pmc_designation`, `pmc_email`, `pmc_mobile`) VALUES
(1, 1, 'pmc1', 'vivek', 'no1', 'vi@v.com', 4565455),
(2, 1, 'pmc2', 'vivek2', 'no2', 'vi2@v.com', 6363636363);

-- --------------------------------------------------------

--
-- Table structure for table `po_bonus_clause`
--

CREATE TABLE IF NOT EXISTS `po_bonus_clause` (
`id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `bonus_clause` varchar(100) NOT NULL,
  `bonus_clauseno` varchar(20) NOT NULL,
  `bonus_percentage` decimal(10,0) NOT NULL,
  `bonus_amount` decimal(20,0) NOT NULL,
  `bonus_milestone` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_bonus_clause`
--

INSERT INTO `po_bonus_clause` (`id`, `po_id`, `bonus_clause`, `bonus_clauseno`, `bonus_percentage`, `bonus_amount`, `bonus_milestone`) VALUES
(1, 1, 'bonus', '2', '23', '234', '2345'),
(2, 1, 'bous2', '2345', '234', '23', '2');

-- --------------------------------------------------------

--
-- Table structure for table `po_details`
--

CREATE TABLE IF NOT EXISTS `po_details` (
`id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `po_value` varchar(20) NOT NULL,
  `po_date` date NOT NULL,
  `po_condition` varchar(100) NOT NULL,
  `po_remarks` varchar(100) NOT NULL,
  `po_zdt` date NOT NULL,
  `porm_zdt` varchar(100) NOT NULL,
  `po_clodt` date NOT NULL,
  `porm_clodt` varchar(100) NOT NULL,
  `po_lastdt` date NOT NULL,
  `porm_lastdt` varchar(100) NOT NULL,
  `po_wardt` date NOT NULL,
  `porm_wardt` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_details`
--

INSERT INTO `po_details` (`id`, `m_id`, `po_value`, `po_date`, `po_condition`, `po_remarks`, `po_zdt`, `porm_zdt`, `po_clodt`, `porm_clodt`, `po_lastdt`, `porm_lastdt`, `po_wardt`, `porm_wardt`) VALUES
(1, 1, 'po', '2018-03-01', 'asdd', 'saas', '2018-03-02', 'fsff', '2018-03-03', 'fcdf', '2018-03-04', 'fdf', '2018-03-05', 'fdfdf');

-- --------------------------------------------------------

--
-- Table structure for table `po_payment_terms`
--

CREATE TABLE IF NOT EXISTS `po_payment_terms` (
`id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `pay_terms` varchar(150) NOT NULL,
  `pay_clauseno` varchar(50) NOT NULL,
  `pay_percentage` decimal(10,0) NOT NULL,
  `pay_amount` decimal(20,0) NOT NULL,
  `pay_milestone` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_payment_terms`
--

INSERT INTO `po_payment_terms` (`id`, `po_id`, `pay_terms`, `pay_clauseno`, `pay_percentage`, `pay_amount`, `pay_milestone`) VALUES
(1, 1, 'pay', '1', '12', '123', '1234'),
(2, 1, 'pay2', '1234', '123', '12', '1');

-- --------------------------------------------------------

--
-- Table structure for table `po_penalty_clause`
--

CREATE TABLE IF NOT EXISTS `po_penalty_clause` (
`id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `penalty_clause` varchar(100) NOT NULL,
  `penalty_clauseno` varchar(20) NOT NULL,
  `penalty_percentage` decimal(10,0) NOT NULL,
  `penalty_amount` decimal(20,0) NOT NULL,
  `penalty_milestone` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_penalty_clause`
--

INSERT INTO `po_penalty_clause` (`id`, `po_id`, `penalty_clause`, `penalty_clauseno`, `penalty_percentage`, `penalty_amount`, `penalty_milestone`) VALUES
(1, 1, 'pen', '3', '34', '345', '3456'),
(2, 1, 'pen', '3456', '345', '34', '3');

-- --------------------------------------------------------

--
-- Table structure for table `progress_report`
--

CREATE TABLE IF NOT EXISTS `progress_report` (
`id` int(11) NOT NULL,
  `date` date NOT NULL,
  `report_by` varchar(100) NOT NULL,
  `cumulative_progress` varchar(100) NOT NULL,
  `today_issue` varchar(250) NOT NULL,
  `future_issue` varchar(250) NOT NULL,
  `tomorrow_plan` varchar(250) NOT NULL,
  `progress_date` date NOT NULL,
  `activity_deployed` varchar(100) NOT NULL,
  `coreactivity_progress` decimal(10,0) NOT NULL,
  `safety_incidents` varchar(100) NOT NULL,
  `affected_person` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `days_lost` varchar(100) NOT NULL,
  `photo_scene` varchar(100) NOT NULL,
  `severity_level` varchar(100) NOT NULL,
  `dateof_accident` date NOT NULL,
  `reason` varchar(100) NOT NULL,
  `corrective_measures` varchar(100) NOT NULL,
  `prevention_measures` varchar(100) NOT NULL,
  `corrective_date` date NOT NULL,
  `preventive_date` date NOT NULL,
  `corrective_confirmation` varchar(100) NOT NULL,
  `prevention_confirmation` varchar(100) NOT NULL,
  `accident_report_made` varchar(100) NOT NULL,
  `accident_report_approve` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress_report`
--

INSERT INTO `progress_report` (`id`, `date`, `report_by`, `cumulative_progress`, `today_issue`, `future_issue`, `tomorrow_plan`, `progress_date`, `activity_deployed`, `coreactivity_progress`, `safety_incidents`, `affected_person`, `name`, `days_lost`, `photo_scene`, `severity_level`, `dateof_accident`, `reason`, `corrective_measures`, `prevention_measures`, `corrective_date`, `preventive_date`, `corrective_confirmation`, `prevention_confirmation`, `accident_report_made`, `accident_report_approve`) VALUES
(16, '2018-04-04', 'a', 'as', 'as', 'as', 'as', '2018-04-04', 'as', '323', 'No', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', ''),
(24, '2018-04-11', 'new tue', 'new tue', 'new tue tuesdsdsds', 'new tuesdsds', 'new tuesdsdsdsd', '2018-04-12', 'new tue tue', '12', 'No', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', ''),
(26, '2018-04-11', 'as', 'as', 'as', 'as', 'as', '2018-04-19', 'as', '0', 'No', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', ''),
(27, '2018-04-04', 'z', 'z', 'z', 'z', 'z', '2018-04-03', 'z', '0', 'No', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', ''),
(28, '2018-04-11', 'sds', 'sdss', 'dss', 'sd', 'sd', '2018-04-05', 'sd', '10545', 'Yes', 'sd', 'sd', 'sd', '3.5x3.5 Square Corner Solid Brass Hinges.jpg,IMG_20151221_180616.jpg', 'sd', '2018-04-12', 'ryry', 'dfghdfhd', '2018-04-03', '2018-04-03', '2018-04-04', 'dfhdfh', 'dhdhd', 'dfghdh', 'dhdhfdh'),
(29, '2018-04-04', 'as', 'as', 'pq', 'as', 'sa', '2018-04-05', 'pqasasas', '55', 'No', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', ''),
(30, '2018-04-18', 'as', 'as', 'as', 'asass', 's', '2018-04-12', 'as', '0', 'No', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE IF NOT EXISTS `project_details` (
`id` int(11) NOT NULL,
  `pro_identifier` varchar(100) NOT NULL,
  `pro_description` varchar(250) NOT NULL,
  `site_address` varchar(250) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `client_address` varchar(250) NOT NULL,
  `in_level1` varchar(30) NOT NULL,
  `in_level2` varchar(30) NOT NULL,
  `in_level3` varchar(30) NOT NULL,
  `ex_level1` varchar(30) NOT NULL,
  `ex_level2` varchar(30) NOT NULL,
  `ex_level3` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`id`, `pro_identifier`, `pro_description`, `site_address`, `client_name`, `client_address`, `in_level1`, `in_level2`, `in_level3`, `ex_level1`, `ex_level2`, `ex_level3`) VALUES
(1, '1', 'abc', 'rajkot', 'vimal', 'rajkot', 'E-mail', 'Whatsapp', 'Dashboard', 'Dashboard', 'E-mail', 'Whatsapp');

-- --------------------------------------------------------

--
-- Table structure for table `refrence_doc`
--

CREATE TABLE IF NOT EXISTS `refrence_doc` (
`id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `path` text NOT NULL,
  `ref_type` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refrence_doc`
--

INSERT INTO `refrence_doc` (`id`, `m_id`, `title`, `path`, `ref_type`) VALUES
(1, 1, 'po2', 'WIN_20180322_10_10_09_Pro - Copy.jpg,WIN_20180322_10_10_09_Pro.jpg', 'po'),
(2, 1, 'mom2', 'WIN_20180322_10_10_15_Pro - Copy.jpg,WIN_20180322_10_10_15_Pro.jpg', 'mom'),
(3, 1, 'draw2', 'WIN_20180322_10_10_09_Pro - Copy.jpg,WIN_20180322_10_10_09_Pro.jpg,WIN_20180322_10_10_15_Pro - Copy.jpg', 'drawing'),
(4, 1, 'ex2', 'WIN_20180322_10_10_09_Pro - Copy.jpg,WIN_20180322_10_10_09_Pro.jpg,WIN_20180322_10_10_15_Pro - Copy.jpg,WIN_20180322_10_10_15_Pro.jpg', 'extra');

-- --------------------------------------------------------

--
-- Table structure for table `time_dependentcost`
--

CREATE TABLE IF NOT EXISTS `time_dependentcost` (
`id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `description` varchar(150) NOT NULL,
  `budgeted_value` decimal(10,2) NOT NULL,
  `time_unit` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_dependentcost`
--

INSERT INTO `time_dependentcost` (`id`, `m_id`, `name`, `description`, `budgeted_value`, `time_unit`) VALUES
(1, 0, 'asa', '', '0.00', 'Hours'),
(2, 0, 'azsa', '', '0.00', 'Hours'),
(3, 2, '232', '3232', '232.00', 'ProjectS'),
(4, 2, '232', '23.2', '0.32', 'ProjectS'),
(5, 3, '232', '3232', '232.00', 'ProjectS'),
(6, 3, '232', '23.2', '0.32', 'ProjectS');

-- --------------------------------------------------------

--
-- Table structure for table `time_independentcost`
--

CREATE TABLE IF NOT EXISTS `time_independentcost` (
`id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `description` varchar(150) NOT NULL,
  `budgeted_value` decimal(10,2) NOT NULL,
  `time_unit` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_independentcost`
--

INSERT INTO `time_independentcost` (`id`, `m_id`, `name`, `description`, `budgeted_value`, `time_unit`) VALUES
(1, 1, 'sds', 'szd', '1.00', '51'),
(2, 1, '115', '155', '15151.00', '5515'),
(3, 0, '', '', '0.00', ''),
(4, 0, '', '', '0.00', ''),
(5, 2, '31', '3232', '3232.00', '32'),
(6, 2, '232', '232323', '2.00', '323'),
(7, 3, '31', '3232', '3232.00', '32'),
(8, 3, '232', '232323', '2.00', '323');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE IF NOT EXISTS `user_registration` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `logo_path` varchar(300) NOT NULL,
  `workforce` varchar(100) NOT NULL,
  `company_turnover` decimal(10,2) NOT NULL,
  `business_nature` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `keyperson` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `name`, `company_name`, `logo_path`, `workforce`, `company_turnover`, `business_nature`, `address`, `keyperson`, `phone`, `email`, `password`) VALUES
(48, 'newnew', 'mnj', 'IMG_20160111_124525.jpg', '250-500', '100.00', 'Q2l2aWwg4oCTIEJ1aWxkaW5ncyxDaXZpbCDigJMgUm9hZHMgJiBicmlkZ2VzLENpdmlsIOKAkyBJbnRlcmlvcixGYWJyaWNhdGlvbixJVCAmIG5ldHdvcmtpbmc=', 'nmj', 'kl', 1234555555, 'a@h.b', '1245'),
(49, 'new2 ', 'new2', 'a90c60d0-1974-4578-a53f-8c666647eb34.jpg', '25-250', '152.00', 'RWxlY3RyaWNhbCDigJMgTFQsU29sYXIgZW5lcmd5', 'sd', 'lp', 1549466995, 'w@g.k', '1524'),
(50, ' nnew3', 'ss', 'IMG_20160111_124525.jpg', '25-250', '87.00', 'U29sYXIgZW5lcmd5', 's', 's', 8999889989, 'as@f.m', '54544'),
(51, 'new5sd', 'new5', 'IMG_20160111_124525.jpg', '25-250', '12.00', 'V2luZCBlbmVyZ3k=', 'sds', 'sds', 5656565656, 'm@d.v', '154');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `architect_details`
--
ALTER TABLE `architect_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_manager`
--
ALTER TABLE `client_manager`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultant_details`
--
ALTER TABLE `consultant_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_activity`
--
ALTER TABLE `core_activity`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipm_deatils`
--
ALTER TABLE `ipm_deatils`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keyvariable_details`
--
ALTER TABLE `keyvariable_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_master`
--
ALTER TABLE `login_master`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmc_details`
--
ALTER TABLE `pmc_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_bonus_clause`
--
ALTER TABLE `po_bonus_clause`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_details`
--
ALTER TABLE `po_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_payment_terms`
--
ALTER TABLE `po_payment_terms`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_penalty_clause`
--
ALTER TABLE `po_penalty_clause`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progress_report`
--
ALTER TABLE `progress_report`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refrence_doc`
--
ALTER TABLE `refrence_doc`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_dependentcost`
--
ALTER TABLE `time_dependentcost`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_independentcost`
--
ALTER TABLE `time_independentcost`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `architect_details`
--
ALTER TABLE `architect_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `client_manager`
--
ALTER TABLE `client_manager`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `consultant_details`
--
ALTER TABLE `consultant_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `core_activity`
--
ALTER TABLE `core_activity`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ipm_deatils`
--
ALTER TABLE `ipm_deatils`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `keyvariable_details`
--
ALTER TABLE `keyvariable_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_master`
--
ALTER TABLE `login_master`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `pmc_details`
--
ALTER TABLE `pmc_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `po_bonus_clause`
--
ALTER TABLE `po_bonus_clause`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `po_details`
--
ALTER TABLE `po_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `po_payment_terms`
--
ALTER TABLE `po_payment_terms`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `po_penalty_clause`
--
ALTER TABLE `po_penalty_clause`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `progress_report`
--
ALTER TABLE `progress_report`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `refrence_doc`
--
ALTER TABLE `refrence_doc`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `time_dependentcost`
--
ALTER TABLE `time_dependentcost`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `time_independentcost`
--
ALTER TABLE `time_independentcost`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
