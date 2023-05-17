-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 09:26 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scrape`
--

-- --------------------------------------------------------

--
-- Table structure for table `link_data`
--

CREATE TABLE `link_data` (
  `id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `votes` varchar(255) NOT NULL,
  `views` varchar(11) NOT NULL,
  `answer` varchar(11) NOT NULL,
  `accepted_ans` int(11) DEFAULT 0,
  `created_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link_data`
--

INSERT INTO `link_data` (`id`, `link_id`, `title`, `votes`, `views`, `answer`, `accepted_ans`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 'retrieve PEB address windows api', '0', '13', '1', 0, '2023-05-17 04:09:04', '', '', ''),
(2, 1, 'IPC tools in C ,Children process stuck in infinite loop', '0', '13', '0', 0, '2023-05-17 04:09:04', '', '', ''),
(3, 1, 'Creating TAP device fails IOCTL returns file descriptor in bad state', '0', '9', '0', 0, '2023-05-17 04:09:04', '', '', ''),
(4, 1, 'Understanding an embedded C language variable declaration', '-1', '26', '1', 0, '2023-05-17 04:09:04', '', '', ''),
(5, 1, 'C - Pointer offset unexpected', '2', '66', '2', 1, '2023-05-17 04:09:04', '', '', ''),
(6, 1, 'C integration runs too slow', '-1', '60', '1', 0, '2023-05-17 04:09:04', '', '', ''),
(7, 1, 'Windows - How to get Device Path of USB device via Vendor and Product ID', '0', '21', '0', 0, '2023-05-17 04:09:04', '', '', ''),
(8, 1, 'i can&#39;t find the problem in my code to make not work in the way it is supposed to be [closed]', '-10', '54', '0', 0, '2023-05-17 04:09:04', '', '', ''),
(9, 1, 'How to pass a pointer to pointer structure in C? [duplicate]', '0', '23', '0', 0, '2023-05-17 04:09:04', '', '', ''),
(10, 1, 'The code i wrote is supposed to take the string i enter and remove the first letter but it doesnt work', '-2', '35', '1', 0, '2023-05-17 04:09:04', '', '', ''),
(11, 1, 'How to initialize eBPF tail call program array map statically', '0', '14', '2', 0, '2023-05-17 04:09:04', '', '', ''),
(12, 1, 'Weird notes being played on piezo buzzer when deviding with not a constant integer', '1', '29', '2', 1, '2023-05-17 04:09:04', '', '', ''),
(13, 1, 'Modifying static byte array in a compiled ELF executable', '0', '53', '2', 0, '2023-05-17 04:09:04', '', '', ''),
(14, 1, 'Is it considered efficient to pass functions as arguments over passing variables? [closed]', '0', '49', '1', 0, '2023-05-17 04:09:04', '', '', ''),
(15, 1, 'LValue required in C', '0', '35', '2', 0, '2023-05-17 04:09:04', '', '', ''),
(16, 2, 'My Update is Not Working on C# Windows Form using Access Database', '0', '9', '0', 0, '2023-05-17 04:10:11', '', '', ''),
(17, 2, 'Sharing cookie authentication from ASP.NET 5+ application to legacy ASP.NET 4.x', '0', '5', '0', 0, '2023-05-17 04:10:11', '', '', ''),
(18, 2, 'Modal Popup Extender Button - Not Firing On Click', '0', '6', '0', 0, '2023-05-17 04:10:11', '', '', ''),
(19, 2, 'How to avoid duplicate with routes.MapRoute?', '0', '13', '0', 0, '2023-05-17 04:10:11', '', '', ''),
(20, 2, '.NET: Managing Runtime Dependencies in Dependent Projects', '0', '9', '0', 0, '2023-05-17 04:10:11', '', '', ''),
(21, 2, 'How to edit a background of a list using EditorStyles', '0', '6', '0', 0, '2023-05-17 04:10:11', '', '', ''),
(22, 2, 'Unity On screen Touch control do not seem to register left and right inputs', '0', '11', '1', 0, '2023-05-17 04:10:11', '', '', ''),
(23, 2, 'Rotating and positioning a row of gameobjects without gaps', '0', '6', '0', 0, '2023-05-17 04:10:11', '', '', ''),
(24, 2, 'Any avice on Azure Web App runtime version confusion', '-1', '16', '0', 0, '2023-05-17 04:10:11', '', '', ''),
(25, 2, 'No SqlConnection Class in Winodws Forms app [duplicate]', '-2', '19', '0', 0, '2023-05-17 04:10:11', '', '', ''),
(26, 2, 'empty cells are showing .Text as &quot;NaN&quot; using NPPlus in C#', '1', '12', '1', 0, '2023-05-17 04:10:11', '', '', ''),
(27, 2, 'ASP.NET Core 6 Web API : Entity Framework add record causes records to be deleted', '0', '20', '0', 0, '2023-05-17 04:10:11', '', '', ''),
(28, 2, 'Azure DevOps - Getting &#39;Environment Variables&#39; during pipeline run', '0', '11', '0', 0, '2023-05-17 04:10:11', '', '', ''),
(29, 2, 'Character Dash Function Is Not Working - Unity', '0', '12', '0', 0, '2023-05-17 04:10:11', '', '', ''),
(30, 2, 'How can I get Auto Mapper to work with a custom list that inherits everything inside the List Class', '0', '17', '0', 0, '2023-05-17 04:10:11', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `link_names`
--

CREATE TABLE `link_names` (
  `id` int(11) NOT NULL,
  `link_name` varchar(255) NOT NULL,
  `link` longtext NOT NULL,
  `total_questions` int(11) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link_names`
--

INSERT INTO `link_names` (`id`, `link_name`, `link`, `total_questions`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'C', 'https://stackoverflow.com/questions/tagged/c?tab=newest&pagesize=15', 396213, '2023-05-17 04:09:02', NULL, NULL, NULL),
(2, 'C#', 'https://stackoverflow.com/questions/tagged/c%23?tab=newest&pagesize=15', 1591425, '2023-05-17 04:10:09', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `link_data`
--
ALTER TABLE `link_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link_names`
--
ALTER TABLE `link_names`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `link_data`
--
ALTER TABLE `link_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `link_names`
--
ALTER TABLE `link_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
