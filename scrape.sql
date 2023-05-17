-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 01:06 PM
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
(30, 2, 'How can I get Auto Mapper to work with a custom list that inherits everything inside the List Class', '0', '17', '0', 0, '2023-05-17 04:10:11', '', '', ''),
(31, 3, 'Issue with passing JavaScript variable to PHP function and handling returned value [duplicate]', '0', '8', '0', 0, '2023-05-17 08:38:33', '', '', ''),
(32, 3, 'How write to a specific line of a .txt file with php [duplicate]', '-3', '11', '0', 0, '2023-05-17 08:38:33', '', '', ''),
(33, 3, 'ApiPlatform - Custom Action, returns an array of DTO&#39;s in attributes of the resource', '0', '8', '0', 0, '2023-05-17 08:38:33', '', '', ''),
(34, 3, 'sort csv field closest day of week and time in textfile php', '0', '9', '0', 0, '2023-05-17 08:38:33', '', '', ''),
(35, 3, 'How to convert ajax data into array of objects', '0', '17', '0', 0, '2023-05-17 08:38:33', '', '', ''),
(36, 3, 'Problem with fastest delivery from vendor', '-1', '9', '0', 0, '2023-05-17 08:38:33', '', '', ''),
(37, 3, 'Is there a method in JQuery similar to &quot;is_unique&quot; in Codeigniter-4', '0', '13', '0', 0, '2023-05-17 08:38:33', '', '', ''),
(38, 3, 'Can any one check the php code it not working will we uploading resume [closed]', '-4', '15', '0', 0, '2023-05-17 08:38:33', '', '', ''),
(39, 3, 'Get Sum of Different Social Insights', '-1', '26', '0', 0, '2023-05-17 08:38:33', '', '', ''),
(40, 3, 'Call php file via axios has been blocked by CORS policy [duplicate]', '-1', '9', '0', 0, '2023-05-17 08:38:33', '', '', ''),
(41, 3, 'Laravel installation and php.ini. issues', '-1', '14', '0', 0, '2023-05-17 08:38:33', '', '', ''),
(42, 3, 'What does a comprehensive solution for error and exception handling look like? [closed]', '0', '21', '0', 0, '2023-05-17 08:38:33', '', '', ''),
(43, 3, 'I using PUT method but keep showing not allowed', '-1', '29', '1', 0, '2023-05-17 08:38:33', '', '', ''),
(44, 3, '@suppressed PHP function not working in live server', '-1', '20', '1', 0, '2023-05-17 08:38:33', '', '', ''),
(45, 3, 'password and username in php_my_admin', '-3', '22', '0', 0, '2023-05-17 08:38:33', '', '', ''),
(46, 4, 'Remove the password of pdf file without having label of library in Vb.net using Ironpdf or any open source Library', '0', '8', '0', 0, '2023-05-17 08:39:48', '', '', ''),
(47, 4, 'Implicit vs explicit conversions in VB.NET', '0', '12', '0', 0, '2023-05-17 08:39:48', '', '', ''),
(48, 4, 'Deserialize Json.net in VB.net for an array of an array', '1', '19', '1', 0, '2023-05-17 08:39:48', '', '', ''),
(49, 4, 'Emailing Individual Users based off of department', '0', '38', '0', 0, '2023-05-17 08:39:48', '', '', ''),
(50, 4, 'VB.NET column copy and paste in datagridview', '0', '27', '0', 0, '2023-05-17 08:39:48', '', '', ''),
(51, 4, 'Get file path from .xlsx file in clipboard', '0', '19', '0', 0, '2023-05-17 08:39:48', '', '', ''),
(52, 4, 'Repeat Headers in each page while printing a huge data in ASP.net', '-2', '17', '0', 0, '2023-05-17 08:39:48', '', '', ''),
(53, 4, 'text box datas are not in symmetry', '0', '28', '0', 0, '2023-05-17 08:39:48', '', '', ''),
(54, 4, 'Binding a dropdown list for 100+ rows speed issue', '0', '24', '0', 0, '2023-05-17 08:39:48', '', '', ''),
(55, 4, 'Error: BC30057	Too many arguments to &#39;Public Shared Overloads Function Copy(str As String) As String&#39;', '0', '33', '1', 0, '2023-05-17 08:39:48', '', '', ''),
(56, 4, 'Visual Studio doesn&#39;t recognize UnitTesting namespace', '0', '24', '1', 0, '2023-05-17 08:39:48', '', '', ''),
(57, 4, 'Why is my boolean is not setting to true when it should be?', '-1', '47', '0', 0, '2023-05-17 08:39:48', '', '', ''),
(58, 4, 'vb.net winforms, what is the e.handled = true equivalent for anything to do with column headers in a dgv?', '0', '18', '1', 0, '2023-05-17 08:39:48', '', '', ''),
(59, 4, 'Compare a value against values in a list C#/VB.NET', '0', '72', '3', 0, '2023-05-17 08:39:48', '', '', ''),
(60, 4, 'VB.net DataGridView rounding decimal to integer', '0', '25', '1', 0, '2023-05-17 08:39:48', '', '', ''),
(61, 5, 'I can&#39;t install pip mysql-connector', '0', '4', '0', 0, '2023-05-17 08:40:27', '', '', ''),
(62, 5, 'MySQL How to SELECT WHERE NOT EXISTS from two table along with the name of description', '0', '13', '0', 0, '2023-05-17 08:40:27', '', '', ''),
(63, 5, 'Require some Large SaaS Advice for an existing platform', '0', '9', '0', 0, '2023-05-17 08:40:27', '', '', ''),
(64, 5, 'Variable declared on the previous line does not seem to exist', '1', '13', '0', 0, '2023-05-17 08:40:27', '', '', ''),
(65, 5, 'Using Round Robin Method in Node Js, How Can I Assigned a Lead to the Next Professional', '0', '14', '1', 0, '2023-05-17 08:40:27', '', '', ''),
(66, 5, 'Kubernetes: deploy a web app using tomcat and mysql', '-1', '17', '0', 0, '2023-05-17 08:40:27', '', '', ''),
(67, 5, 'mysql like query for at least one word from searched string [duplicate]', '0', '16', '0', 0, '2023-05-17 08:40:27', '', '', ''),
(68, 5, 'Retrieve data faster through sqlalchemy query to RDS (Aurora) Database', '0', '3', '0', 0, '2023-05-17 08:40:27', '', '', ''),
(69, 5, 'phpmyadmin split string in column by delimiter to open columns to the right', '0', '16', '0', 0, '2023-05-17 08:40:27', '', '', ''),
(70, 5, 'how can JSON data be populated in ListView in .NET Maui MVVM? [closed]', '0', '16', '0', 0, '2023-05-17 08:40:27', '', '', ''),
(71, 5, 'Wampserver returning 403 Access Forbidden error when accessed over WAN/Internet [closed]', '-2', '11', '1', 0, '2023-05-17 08:40:27', '', '', ''),
(72, 5, 'Automatically add a prefix or suffix onto all columns after a JOIN [duplicate]', '0', '26', '1', 0, '2023-05-17 08:40:27', '', '', ''),
(73, 5, 'SQL server not showing any query results but MySQL workbench shows results [closed]', '-2', '23', '0', 0, '2023-05-17 08:40:27', '', '', ''),
(74, 5, 'How to restore sys database in MySql? [closed]', '-4', '18', '0', 0, '2023-05-17 08:40:27', '', '', ''),
(75, 6, 'Replacing two items with one item in a list -- python', '0', '10', '0', 0, '2023-05-17 08:41:48', '', '', ''),
(76, 6, 'Why code changes doesn&#39;t do anything in VS Code?', '-1', '18', '0', 0, '2023-05-17 08:41:48', '', '', ''),
(77, 6, 'Installing AWS EB CLI using pip fails due to breaking changes in urllib 2', '0', '3', '0', 0, '2023-05-17 08:41:48', '', '', ''),
(78, 6, 'Why google analytics (GA4) does not track the gender of all my website users', '-1', '13', '0', 0, '2023-05-17 08:41:48', '', '', ''),
(79, 6, 'Upgrade a self hosted python package from within a python session', '0', '7', '0', 0, '2023-05-17 08:41:48', '', '', ''),
(80, 6, 'Scraping a JS heavy website on Windows - using Scrapy + (Playwright/Selenium/Puppeteer) excluding Splash', '0', '5', '0', 0, '2023-05-17 08:41:48', '', '', ''),
(81, 6, 'Create table instance not connected to a document with python-docx?', '-1', '4', '0', 0, '2023-05-17 08:41:48', '', '', ''),
(82, 6, 'Creating dynamic models in Appconfig.ready', '0', '5', '0', 0, '2023-05-17 08:41:48', '', '', ''),
(83, 6, 'Error with pip: &#39;2020-resolver&#39; invalid choice', '0', '10', '0', 0, '2023-05-17 08:41:48', '', '', ''),
(84, 6, 'Python Script Referencing or Calling', '-1', '11', '0', 0, '2023-05-17 08:41:48', '', '', ''),
(85, 6, 'what happens when boolean mask of numpy array is just a single value', '0', '15', '1', 0, '2023-05-17 08:41:48', '', '', ''),
(86, 6, 'Puhing polars dataframe to redis', '0', '7', '0', 0, '2023-05-17 08:41:48', '', '', ''),
(87, 6, 'Issues creating a regex to extract code from Markdown', '-2', '14', '0', 0, '2023-05-17 08:41:48', '', '', ''),
(88, 6, 'My {{ item.img.url }} doesnt work, doesnt even display url', '0', '14', '1', 0, '2023-05-17 08:41:48', '', '', ''),
(89, 7, 'local image is not showing in reactjs', '0', '3', '0', 0, '2023-05-17 09:18:36', '', '', ''),
(90, 7, 'Typescript unable to infer the forwardRef return type', '0', '2', '0', 0, '2023-05-17 09:18:36', '', '', ''),
(91, 7, 'Apple pay on react web application', '0', '2', '0', 0, '2023-05-17 09:18:36', '', '', ''),
(92, 7, 'Fetch error &quot;can&#39;t fetch&quot; when submitting a form in React', '0', '8', '0', 0, '2023-05-17 09:18:36', '', '', ''),
(93, 7, 'Session lost, when fetch data with react from PHP API', '0', '17', '0', 0, '2023-05-17 09:18:36', '', '', ''),
(94, 7, 'How to make fetch call again in React Server Components with new state like UseEffect with Next 13.4', '0', '8', '0', 0, '2023-05-17 09:18:36', '', '', ''),
(95, 7, 'Connecting language change to url change in a different file', '0', '5', '0', 0, '2023-05-17 09:18:36', '', '', ''),
(96, 7, 'Typscript keeps throwing Property &#39;children&#39; does not exist on type &#39;FC&lt;ProvidersProps&gt;&#39; even after providing type', '0', '10', '1', 0, '2023-05-17 09:18:36', '', '', ''),
(97, 7, 'Scoped css React.js alternative', '0', '8', '0', 0, '2023-05-17 09:18:36', '', '', ''),
(98, 7, 'MERN stack user registration form not working', '0', '14', '1', 0, '2023-05-17 09:18:36', '', '', ''),
(99, 7, 'In next.js, swipe&#39;s auto slide function doesn&#39;t work. I&#39;m not sure what&#39;s wrong', '0', '5', '0', 0, '2023-05-17 09:18:36', '', '', ''),
(100, 7, 'Building a React component library with Parcel for use in an HTML page', '0', '11', '0', 0, '2023-05-17 09:18:36', '', '', ''),
(101, 7, 'CSS file is not working in my NPM package bundles by eslint', '-1', '6', '0', 0, '2023-05-17 09:18:36', '', '', ''),
(102, 7, 'Property refresh does not exist on type NextRouter', '0', '3', '0', 0, '2023-05-17 09:18:36', '', '', ''),
(103, 7, 'Getting an empty object when i pass my file to formData', '0', '14', '1', 0, '2023-05-17 09:18:36', '', '', '');

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
(2, 'C#', 'https://stackoverflow.com/questions/tagged/c%23?tab=newest&pagesize=15', 1591425, '2023-05-17 04:10:09', NULL, NULL, NULL),
(3, 'PHP', 'https://stackoverflow.com/questions/tagged/php?tab=newest&pagesize=15', 1458571, '2023-05-17 08:38:02', NULL, NULL, NULL),
(4, 'Vb.net', 'https://stackoverflow.com/questions/tagged/vb.net?tab=newest&pagesize=15', 139367, '2023-05-17 08:39:42', NULL, NULL, NULL),
(5, 'mysql', 'https://stackoverflow.com/questions/tagged/mysql?tab=newest&pagesize=15', 660026, '2023-05-17 08:40:16', NULL, NULL, NULL),
(6, 'Python', 'https://stackoverflow.com/questions/tagged/python?tab=newest&pagesize=15', 2135439, '2023-05-17 08:41:38', NULL, NULL, NULL),
(7, 'Reactjs', 'https://stackoverflow.com/questions/tagged/reactjs?tab=Newest', 455139, '2023-05-17 09:18:34', NULL, NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `link_names`
--
ALTER TABLE `link_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
