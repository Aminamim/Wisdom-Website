-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 12:14 PM
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
-- Database: `wisdom`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookId` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descrp` varchar(200) NOT NULL,
  `prc` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `area` varchar(100) NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookId`, `ownerId`, `title`, `descrp`, `prc`, `picture`, `area`, `note`) VALUES
(3, 7, 'Wutherin Heights', 'A passionate love story of Heithclieff and Catherine', 70, 'wuthering.jpg', 'Banasree', 'It is the finest edition. Original copy cost 120tk.'),
(4, 9, 'Angels and Demons', 'The best selling mystry-thriller by Dan Brown.', 60, 'angels.jpg', 'Narayanganj', 'I bought this book on 2018. Original book cost 150tk. It is in very good shape.'),
(5, 12, 'Silance of The Lambs', 'The story of FBI trainee Starling pairing up with Hannibal the cannibal to catch the mysterious serial killer Buffallo Billl. A nerve-wrecking psycho thriller.', 100, 'silance.jpg', 'Narayanganj', 'This book was bought on 2019. It is as good as new. Original price was 300tk.'),
(6, 13, 'à¦ªà§à¦°à§‡à¦¤, à¦®à§à¦¹à¦¾à¦®à§à¦®à¦¦ à¦œà¦¾à¦«à¦° à¦‡à¦•à¦¬à¦¾à¦²', 'A horror thriller by Jafor Iqbal, where an innocent guy gets unintentionally involved with a satanic society and has to go through a horrible and painful journey, but at the end can find his way back ', 50, 'pret.jpg', 'Banasree, Narayanganj', 'This book is as good as new. I bought this on November 2019. Contact me if you are interested in buying it.'),
(7, 13, 'à¦ªà§à¦°à¦¡à¦¿à¦œà¦¿, à¦®à§à¦¹à¦¾à¦®à§à¦®à¦¦ à¦œà¦¾à¦«à¦° à¦‡à¦•à¦¬à¦¾à¦²', 'A science fiction by Jafor Iqbal. The story revolves around some children having exceptional powers and good and evil forces fighting over them.', 100, 'prodiji.jpg', 'Banasree, Narayanganj', 'It is in very good shape. Original book cost 200tk.'),
(9, 13, 'Dracula, by Bram Stoker', 'The epic tale of the Count Dracula narrated by Bram Stoker.  An gothic horror novel that gave birth to many convention of subsequent vampire fantasy.', 120, 'dracula.jpg', 'Banasree, Narayanganj', 'I just bought this book. It is completely new and one of the best editions. Contact me if you need this.'),
(17, 14, 'To All The Boys Ive Loved Before, by Jeny Han', 'Lara Jean, a shy and introvert girl gets tangled in a hillarius mess after her sister secretly sends her secret love letters to all her secret crushes.', 80, 'boys.jpg', 'Dhanmondi', 'It is in a good condition. Contact me if u r interested.'),
(18, 14, 'title', '', 20, 'old2.jpg', '', ''),
(21, 7, 'Algebra & Geometry, by  Marl Lawson', 'An introduction to University level mathematics and geometry.', 100, 'math.jpg', 'Gulshan', 'Bought on 2019. Original Book was 200tk. Now it will cost approximately 350tk. It is in very good condition.'),
(22, 18, 'The Shining, by Stephen King', 'One of Stephen Kings best creation. It narrates the story of Jack Torrence and the Overlook hotel.', 150, 'shinning.jpg', 'Narayanganj', 'Its an old book. But in good condition.'),
(23, 18, 'Deception Point, by Dan Brown', 'A thrilling adventure to uncover a truth hidden by the president and NASA', 120, 'dec.jpg', 'Gulshan', 'It is in a good condition. Contact me if u r interested.'),
(24, 18, 'Shongkhonil Karagar, by Humayun Ahmed', 'The tale of a middle class family, their struggles, happiness and losses.', 100, 'sh.jpg', 'Banasree', 'It is in a good condition. Contact me if u r interested.');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `ownerId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `psw` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`ownerId`, `name`, `mail`, `psw`, `address`, `phone`, `role`) VALUES
(7, 'dv', 'dv', 'drv', 'dv', 34, 2),
(9, 'Anan', 'an@n', 'anan', 'bondorrr', 1877, 2),
(12, 'Mina', 'm@na', 'mim', 'Alinogor, Narayanganj', 16, 2),
(13, 'Amina', 'mim@gmail.com', 'mina', 'Narayanganj', 12334566, 2),
(14, 'Sadia', 'sadi@a', 'sadia', 'Alinogor, Narayanganj', 13, 2),
(15, 'Jesmin', 'Jesm@n', 'jesmin', 'Bondor, Narayanganj', 19, 2),
(16, 'rafah', 'raf@r', 'rafah', '', 0, 2),
(17, 'ela', 'elaaaa', 'ela', '', 13, 2),
(18, 'Amina', '@mina', 'amina', 'Narayanganj', 16, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookId`),
  ADD KEY `ownerId` (`ownerId`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`ownerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `ownerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`ownerId`) REFERENCES `owner` (`ownerId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
