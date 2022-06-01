--
-- Database: `todo_list`
--
CREATE DATABASE IF NOT EXISTS `todo_list` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `todo_list`;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `date`, `completed`) VALUES
(1, 'XML', 'Aprendre XML', '2015-03-07 21:25:46', 1),
(2, 'HTML', 'Aprendre HTML', '2015-03-07 21:26:03', 1),
(3, 'CSS', 'Aprendre CSS', '2015-03-07 21:26:20', 1),
(4, 'JavaScript', 'Aprendre JavaScript', '2015-03-07 21:27:14', 1),
(5, 'PHP', 'Aprendre PHP', '2015-03-07 21:27:42', 0),
(6, 'MySQL', 'Aprendre MySQL', '2015-03-07 21:29:03', 0),
(7, 'jQuery', 'Aprendre JQuery', '2015-03-07 21:29:25', 1),
(8, 'Bootstrap', 'Aprendre Bootstrap', '2015-03-07 21:30:02', 0);
