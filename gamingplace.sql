-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2018 at 05:04 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamingplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'XBOX One Games'),
(2, 'PS4 Games'),
(3, 'Nintendo WII Games'),
(4, 'XBOX 360 Games'),
(5, 'PS3 Games');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `description`, `image`, `price`) VALUES
(1, 1, 'RECOR', 'In RECORE, players step into the powered exoskeletal suit of a space colonist named Joule. After a long hypersleep voyage to Far Eden, the world destined to become mankind\'s new home, she awakens to discover she might be the only human active on the planet surface. The robot workers who were supposed to be terraforming the rocks and desert are malfunctioning and now attack her on sight. Working with a small team of friendly robots who behave like pets, Joule begins exploring the planet in an attempt to find out what happened and get the terraforming project back online so the rest of her people, asleep in orbiting ships, can come down and join her. ', 'RECOR2.jpg', '67.79'),
(2, 1, 'BATTLEFIELD1', 'Battlefield 1 is a first-person shooter video game developed by EA DICE and published by Electronic Arts. Despite its name, Battlefield 1 is the fifteenth installment in the Battlefield series, and the first main entry in the series since Battlefield 4.[1] It was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on October 21, 2016.\r\n\r\nBattlefield 1 received positive reviews by critics and was seen as an improvement over previous installments, Battlefield 4 and Battlefield Hardline. Most of the praise was directed towards its World War I theme, single player campaign, multiplayer modes, visuals and sound design.', 'BATTLEFIELD1.png', '75.67'),
(3, 5, 'CALL OF DUTY', 'Call of Duty is a video game based on the Quake III Arena engine (id Tech 3), and was released on October 29, 2003. The game was developed by Infinity Ward and published by Activision. The game simulates the infantry and combined arms warfare of World War II.[2] An expansion pack, Call of Duty: United Offensive, was developed by Gray Matter Interactive with contributions from Pi Studios and produced by Activision. The game follows American and British paratroopers and the Red Army. The Mac OS X version of the game was ported by Aspyr Media. ', 'CALLOFDUTY1.jpg', '72.97'),
(4, 2, 'MAFIA III', 'Mafia III is an action-adventure video game developed by Hangar 13 and published by 2K Games for Microsoft Windows, PlayStation 4, Xbox One, and MacOS. It is the third installment in the Mafia series. Set in 1968 in the city of New Bordeaux, a fictional recreation of New Orleans, the story revolves around Lincoln Clay, an orphan and Vietnam veteran, who is on a quest to build a new crime organization to confront the Italian mob. ', 'MAFIA2.jpg', '87.39'),
(5, 2, 'DARK SOULS III', 'Dark Souls III is an action role-playing game played in a third-person perspective, similar to previous games in the series. According to lead director and series creator Hidetaka Miyazaki, the game\'s gameplay design followed \"closely from Dark Souls II\".[3] Players are equipped with a variety of weapons to fight against enemies, such as bows, throwable projectiles, and swords. Shields can act as secondary weapons but they are mainly used to deflect enemies\' attacks and protect the player from suffering damage.', 'DARKSOULS2.jpg', '59.99'),
(6, 2, 'UNCHARTED 4', 'Uncharted 4: A Thief\'s End is an action-adventure video game developed by Naughty Dog and published by Sony Computer Entertainment for PlayStation 4. It was released worldwide on May 10, 2016. Following Uncharted 3: Drake\'s Deception, it is the final Uncharted game to feature protagonist Nathan Drake (portrayed by Nolan North).[1] Drake, now retired from fortune hunting with his wife Elena, reunites with his estranged older brother Sam and longtime partner Sully to search for Captain Henry Avery\'s lost treasure.', 'UNCHARTED1.jpg', '49.67');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(120) NOT NULL,
  `last_name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`) VALUES
(1, 'Ashraful', 'Islam', 'asraful.islam.0496@gmail.com', 'sohag', 'sohag12345'),
(2, 'Mhasan', 'Ashik', 'mhasan56@gmail.com', 'mhasanashik', 'ashik123456'),
(3, 'Mehedi', 'Hasan', 'mhasan765@gmail.com', 'ashikrock', 'ashik23456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
