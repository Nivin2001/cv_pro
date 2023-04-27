

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `numberOfHours` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `institution` varchar(255) NOT NULL,
  `attachment` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0 as file, 1 as url',
  `url` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `courses` (`id`, `name`, `numberOfHours`, `startDate`, `endDate`, `institution`, `attachment`, `url`, `file`, `notes`) VALUES
(1, 'Course 2', 5, '2022-05-03', '2022-05-25', 'Challenge to change', 1, 'A.png', '', 'Course  Course  Course  Course'),
(2, 'Course 1', 33, '2022-05-04', '2022-05-12', 'Institution', 0, '', '1652539759.jpg', 'Experiences  Experiences Experiences Experiences');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `institution` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `category`, `title`, `startDate`, `endDate`, `institution`, `description`) VALUES
(1, 'uiux', 'Experiences Title', '2022-05-022', '2022-05-31', 'Institution', 'Description Description Description Description'),
(2, 'Fluter Development', 'Experiences', '2022-05-022', '2022-05-26', 'Institution', 'Experiences  Experiences  Experiences'),
(3, 'Android Development', 'Experiences', '2022-05-023', '2022-05-27', 'Institution', 'Experiences Experiences Experiences Experiences'),
(4, 'IOS Development', 'Experiences', '2022-05-023', '2022-05-25', 'Institution', 'Experiences Experiences Experiences');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0 as Male, 1 as Female',
  `bod` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `pob` varchar(255) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `yearOfExperience` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `bod`, `nationality`, `pob`, `jobTitle`, `yearOfExperience`, `profile`) VALUES
(1, '\r\nNivin Shabat', 1, '2001-04-12', 'Palestinian', 'Gaza', 'Software Engineering', 3, 'nivin_shabat.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

