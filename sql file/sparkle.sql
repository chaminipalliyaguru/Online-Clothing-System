-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 03:41 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkle`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `idAccount` int(11) NOT NULL,
  `Bank_name` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Balance` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL,
  `Category_name` varchar(45) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCategory`, `Category_name`, `date_created`) VALUES
(1, 'dresses', '2023-07-20'),
(2, 'Tops', '2023-07-23'),
(3, 'Pants', '2023-08-12'),


-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id_contact_us` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL COMMENT 'Sender''s Name',
  `email` varchar(255) DEFAULT NULL COMMENT 'Sender''s Email',
  `subject` varchar(255) DEFAULT NULL COMMENT 'Email Subject',
  `message` varchar(500) DEFAULT NULL COMMENT 'Message'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id_contact_us`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Vinushi Ranshila', 'vinushi@gmail.com', 'Testing ', 'Testing'),
(2, 'Chamini Palliyaguru', 'chamini@gmail.com', 'Testing ', 'Testing'),
(3, 'Preesika Sulakshani', 'preesika@gmail.com', 'Testing ', 'Testing'),
(4, 'Harshani Madushani', 'harshani@gmail.com', 'Testing', 'Texting');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idcustomer` int(11) NOT NULL,
  `First_name` varchar(45) NOT NULL,
  `Last_name` varchar(45) NOT NULL,
  `User_name` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Customer_id` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `idpayment` int(11) NOT NULL,
  `Payment_type` varchar(45) NOT NULL,
  `Amount` varchar(45) NOT NULL,
  `Account_idAccount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idproduct` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL,
  `product_description` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `qty` int(45) DEFAULT NULL,
  `Category_idCategory` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idproduct`, `product_name`, `product_price`, `product_description`, `image`, `qty`, `Category_idCategory`) VALUES
(1, 'A square neck dress', '3500', 'Stunning', 'dres1.jpg', 10, 1),
(2, 'Droped waist dress', '3800', 'Festivals and occasions', 'dres2.jpg', 10, 1),
(3, 'Floral poncho top', '3000', 'Versatility on every nody', 'top2.jpg', 10, 2),
(4, 'Long sleeves blouse', '3000', 'Long lasting impression', 'top3.jpg', 10, 2),
(13, 'Formal Pant', '5000', 'Versatility on Every Body', 'pant1.jpg', 10, 3),
(14, 'High-Waisted Jeans ', '5200', 'Versatility on Every Body', 'pant4.jpg', 10, 3),
(15, 'T-Shirt Dress', '3800', 'The Stunning and Stylish ', 'dres5.jpg', 10, 1),
(16, 'Printed Blouse', '3500', 'Festivals and Occasions', 'top6.jpg', 10, 2),
(17, 'White Plazo Pant', '3900', 'Silky Touch', 'pant8.jpg', 10, 3),
(18, 'V-Neck Top', '2900', 'Artistic Creativity', 'top4.jpg', 10, 2),
(19, 'Formal Pant', '5000', 'Versatility on Every Body', 'pant6.jpg', 10, 3),
(20, 'Off The Shoulder Dress', '4800', 'The Stunning and Stylish', 'dres3.jpg', 10, 1),
(21, 'Straight Cut Linon Pant', '2800', 'Versatility on Every Body', 'pant7.jpg', 10, 3),
(22, 'High Neck Blouse', '2500', 'Lighter and Charmed', 'top7.jpg', 10, 2),
(23, 'V-Neck Dress', '2500', 'Artistic Creativity', 'dres8.jpg', 10, 1),
(24, 'Long Sleeves Shirt', '4500', 'Long-Lasting Impression', 'top5.jpg', 10, 2);
(25, 'Printed CrossOver Dress','4500','The Stunning and Stylish','dres4.jpg',20,1);
(26,'Ruffle Detailed Top','3500','Charmed and Lighter','top8.jpg',30,2);
(27,'Formal Pant','4500','Charmed and Lighter','pant2.jpg',25,3);
(28,'Waterfall Sleeve Dress','3900','Royal look','dres6.jpg',30,1);



-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `idsell` int(45) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `items` varchar(255) DEFAULT NULL,
  `purchase_date` varchar(255) DEFAULT NULL,
  `product_idproduct` int(45) DEFAULT NULL,
  `user_iduser` int(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`idsell`, `product_name`, `price`, `items`, `purchase_date`, `product_idproduct`, `user_iduser`) VALUES
(24, 'T-Shirt Dress', ' 3800  ', '5', '2023/10/09', 15, 6),
(25, , 'T-Shirt Dress'  ,'3800  ', '1', '2023/10/09', 15, 6),
(26, '  T-Shirt Dress  ', '  3800  ', '2', '2023/10/09', 15, 6),
(27, '  T-Shirt Dress  ', '  3800  ', '3', '2023/10/09', 15, 6),
(35, '  Long sleeves blouse  ', '  3000  ', '2', '2023/10/10', 4, 6);


-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `idstock` int(45) NOT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `product_id` int(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`idstock`, `quantity`, `date`, `product_id`) VALUES
(1, '12', '2023.02.20', 1),
(2, '15', '02.03.2023', 2),
(3, '20', '2023.02.20', 3),
(4, '15', '2023.02.20', 4),
(5, '15', '2023.02.20', 13),
(6, '15', '2023.02.20', 14),
(7, '15', '2023.02.20', 15),
(8, '15', '2023.02.20', 16),
(9, '15', '2023.02.20', 17),
(10, '15', '2023.02.20', 18),
(11, '15', '2023.02.20', 19),
(12, '15', '2023.02.20', 20),
(13, '15', '2023.02.20', 21),
(14, '15', '2023.02.20', 22),
(15, '15', '2023.02.20', 23),
(16, '15', '2023.02.20', 24);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `User_name` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Contact_no` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `full_name`, `User_name`, `Password`, `Address`, `Contact_no`, `email`, `image`) VALUES
(1, 'chamini ', 'chami', '1234', '35/k/1,dadugama,jaela', '0112229103', 'bimalkachamini@gmail.com', NULL),
(2, 'Nimali siriwardana', 'nimali', 'nimali89', '51/c,Thammita,Gampaha', '071555666', 'nimali@gmail.com', NULL),
(3, 'Hiran Silva', 'hiran', '258*/hgu', '212,Sooriyawawa,Kadawatha', '0702390095', 'hiran@gmail.com', NULL);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`idAccount`);


--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id_contact_us`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`idpayment`),
  ADD KEY `fk_payment_Account1` (`Account_idAccount`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idproduct`),
  ADD KEY `fk_product_Category1` (`Category_idCategory`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`idsell`),
  ADD KEY `fk_sell_product1` (`product_idproduct`),
  ADD KEY `fk_sell_user1` (`user_iduser`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`idstock`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);


--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `idAccount` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id_contact_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcustomer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `idpayment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `idsell` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `idstock` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;


--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--


--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment_Account1` FOREIGN KEY (`Account_idAccount`) REFERENCES `account` (`idAccount`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_Category1` FOREIGN KEY (`Category_idCategory`) REFERENCES `category` (`idCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sell`
--
ALTER TABLE `sell`
  ADD CONSTRAINT `fk_sell_product1` FOREIGN KEY (`product_idproduct`) REFERENCES `product` (`idproduct`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sell_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`idproduct`) ON UPDATE CASCADE;
COMMIT;

