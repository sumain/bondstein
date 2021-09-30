
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `test`;


DROP TABLE IF EXISTS `person`;
CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `dob`, `salary`) VALUES
(1, 'Abu Sumain', '1981-12-21', 30000),
(2, 'Saifur Rohoman', '1990-12-21', 40000),
(3, 'Md. Imrul', '1990-07-03', 25000),
(4, 'Md. Sabbir', '1991-11-09', 40000),
(6, 'Md. Rana Ahamed', '1988-09-18', 20000),
(7, 'Md. Belal Hosan', '1983-06-21', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `person1`
--

DROP TABLE IF EXISTS `person1`;
CREATE TABLE `person1` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person1`
--

INSERT INTO `person1` (`id`, `name`, `city`, `dob`) VALUES
(1, 'Abu Sumain', 'Dhaka', '1981-12-21'),
(2, 'Saifur Rohoman', 'Chittagong', '1990-12-21'),
(3, 'Md. Imrul', 'Dhaka', '1990-07-03'),
(4, 'Md. Sabbir', 'Savar', '1991-11-09'),
(6, 'Md. Rana Ahamed', 'Naogaon', '1988-09-18'),
(7, 'Md. Belal Hosan', 'Naogaon', '1983-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `person_address`
--

DROP TABLE IF EXISTS `person_address`;
CREATE TABLE `person_address` (
  `id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `address_line` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_address`
--

INSERT INTO `person_address` (`id`, `person_id`, `address_line`, `city`) VALUES
(1, 4, '547 Jakson hight', 'Manhattan'),
(2, 2, '124 Queen', 'Manhattan'),
(3, 1, '452 Green Road', 'Manhattan'),
(4, 3, '520 Jakson Hight', 'Manhattan'),
(5, 5, '10 Jakson Hight', 'Queen'),
(6, 6, '320 Jakson Hight', 'New York'),
(7, 7, '540 Jakson Hight', 'New York');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `category`) VALUES
(1, 'Abu Sumain', 'sumain@gmail.com', '202cb962ac59075b964b07152d234b70', 'Admin'),
(4, 'Md. Saifur Islam', 'saifur@gmail.com', '123', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person1`
--
ALTER TABLE `person1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person_address`
--
ALTER TABLE `person_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `person1`
--
ALTER TABLE `person1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `person_address`
--
ALTER TABLE `person_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;