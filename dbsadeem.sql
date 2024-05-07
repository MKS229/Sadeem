-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 مايو 2024 الساعة 13:00
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsadeem`
--

-- --------------------------------------------------------

--
-- بنية الجدول `courses`
--

CREATE TABLE `courses` (
  `name` varchar(50) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `courses`
--

INSERT INTO `courses` (`name`, `artist`, `date`) VALUES
('Portrait Drawing', 'ArwaSaid', '28-04-2024 (10:00 - 12:00 AM)'),
('Coloring Basics', 'NoraHamid', '21-07-2024 (08:00 - 10:00 PM)'),
('Origami Art', 'KimShong', '07-03-2024 (02:00 - 03:00 PM)'),
('Coloring profishinal', 'NoraHamid', '21-12-2024 (08:00 - 10:00 PM)'),
('Mude creating ', 'HatemMahmood', '18-06-2024 (08:00 - 10:00 PM)'),
('Origami Basics', 'HalaNour', '22-08-2024 (08:00 - 10:00 PM)'),
('Drawing Basics', 'ArwaSaid', '04-12-2024 (03:00 - 05:00 PM)'),
('Surrealist Art', 'SmaherSife', '27-05-2024 (06:00 - 07:00 PM)'),
('Poster Design', 'ArwaSaid', '01-01-2025 (11:00 - 11:50 AM)');

-- --------------------------------------------------------

--
-- بنية الجدول `questionnaire`
--

CREATE TABLE `questionnaire` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `questionnaire`
--

INSERT INTO `questionnaire` (`name`, `email`, `age`) VALUES
('Arwa Said', 'ArwaSaid@sadeem.com', 22),
('Nora Hamid', 'NoraHamid@gmail.com', 30),
('Kim Shong', 'KimShong@sadeem.com', 48),
('Hala Nour', 'HalaNour@yahoo.com', 18),
('Shahad Mohammed', 'shahadmohammed@sadeem.com', 20),
('Isra Said', 'IsraSaid@sadeem.com', 21),
('Maryam Khamis', 'Maryam229@sadeem.com', 20);

-- --------------------------------------------------------

--
-- بنية الجدول `register`
--

CREATE TABLE `register` (
  `user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `register`
--

INSERT INTO `register` (`user`, `email`, `password`) VALUES
('Arwa_11Said', 'ArwaSaid@sadeem.com', '11@arwallll.m9'),
('Nora_Hamid44', 'NoraHamid@gmail.com', 'aoksdjo2444'),
('Kim_Shong', 'KimShong@sadeem.com', 'kim4949494@yong22'),
('HalaNour0101', 'HalaNour@yahoo.com', 'hahahahah111'),
('Shahad2024', 'shahadmohammed@sadeem.com', '20shosh24/hi/'),
('IsraSaid999', 'IsraSaid@sadeem.com', '@iSRa90009_hello'),
('Maryam_H501', 'Maryam229@sadeem.com', 'oHSFOAHEDF@MARYAM.me');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
