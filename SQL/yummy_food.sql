-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yummy_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `C_email` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `C_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `c_name`, `C_email`, `gender`, `C_description`) VALUES
(1, 'nimal', 'fdga@gmail.com', 'M', 'tgafdju5w6'),
(5, 'ssss', 'dilshandananjaya@gmail.com', 'M', 'efdfdf'),
(6, 'ddd', 'dilshan@gmail.com', 'M', 'dfdfdf'),
(7, 'ddd', 'dd@gmail.com', 'M', 'ddgfhhkjkjk');

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedback`
--

CREATE TABLE `customer_feedback` (
  `Feedback_ID` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNo` int(10) NOT NULL,
  `date` date NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `Food_quality` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_feedback`
--

INSERT INTO `customer_feedback` (`Feedback_ID`, `fname`, `lname`, `email`, `phoneNo`, `date`, `feedback`, `Food_quality`) VALUES
(25, 'dilshan', 'dananjaya', 'dilshandananjaya447@gmail.com', 774992822, '2022-05-22', ' thank you!', 'E'),
(26, 'abc', 'hghghg', 'it21247668@my.sliit.lk', 774992822, '2022-05-23', ' fdfghghgh', 'G');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `description`, `image`, `price`) VALUES
(1, 'Crispy Chicken burger', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.', 'burger1.jpg', 689.99),
(2, 'chicken royale ', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.', 'burger2.png', 689.99),
(3, 'grilled chicken', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.', 'burger3.jpg', 669.99),
(4, 'BK Fish', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.', 'burger4.jpg', 639.99),
(5, 'beef burger with cheese', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.', 'burger5.jpg', 549.99),
(6, 'beef whopper', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.', 'burger6.png', 799.99),
(7, 'triple cheese burger', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.', 'burger7.jpg', 849.99),
(8, 'BBQ Bacon Burger', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.', 'burger8.jpg', 679.99),
(9, 'veggie burger', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.', 'burger9.jpg', 449.99),
(10, 'Sri Lankan Spicy Chicken Pizza', 'A combination of black chicken, devilled chicken & chicken ', 'pizza1.jpg', 619.99),
(11, 'Cheese Lovers', 'Rich tomato sauce with a triple layer of mozzarella cheese.', 'pizza2.jpg', 849.99),
(12, 'Tandoori Chicken', 'Tandoori chicken & onions with a double layer of cheese.', 'pizza3.jpg', 1850.99),
(13, 'Sausage Delight ', 'Chicken sausages & onions with a double layer of cheese.', 'pizza4.jpg', 990.99),
(14, 'Spicy Veggie with Paneer ', 'Spicy veggie masala & paneer accompanied with pineapple, topped', 'pizza5.jpg', 619.99),
(15, 'Black Chicken', 'Flavoursome pieces of black chicken and crunchy onion with a double layer of cheese.', 'pizza6.jpg', 679.99),
(16, 'Butter Chicken Masala ', 'The ever famous Butter Masala Chicken together with a layer of cream cheese, fresh onions, coriander, ginger and garlic, blanketed with a layer of mozzarella cheese.', 'pizza7.jpg', 929.99),
(17, 'Hot & Spicy Chicken', 'Spicy chunks of chicken, capsicums & onions with a double layer of cheese.', 'pizza8.jpg', 749.99),
(18, 'Hot Butter Cuttlefish', 'Hot butter cuttlefish with chili flakes and butter accompanied by spring onion and capsicum with a double layer of mozzarella cheese.', 'pizza9.jpg', 510.99),
(19, 'Coca-Cola 400ml PET', 'Non-alcoholic beverages which include sparkling soft drinks, water, enhanced water and sports drinks, juice, dairy and plant-based beverages, tea and coffee and energy drinks.', 'drink1.jpg', 150.99),
(20, '7Up 250ml CANs', 'American brand of lemon-lime-flavored non-caffeinated soft drink.', 'drink2.jpg', 200.99),
(21, 'Evervess Soda 500ml PET', 'Normally soft drinks are drunk cold. It is kept in a refrigerator and drank directly taking it out. After coming home from outside work, cold soft drinks can give you a soothing and refreshing feeling.', 'drink3.jpg', 100.99),
(22, 'King coconut', 'One-hundred percent natural and free of sweeteners, WICHY Organic King Coconut Water is a drink of heaven in a bottle.', 'drink4.jpg', 75.99),
(23, 'Wood apple juice ', 'Drinking wood apple juice has several benefits for the stomach and digestive system. It helps in curing digestive problems like dysentery and diarrhoea.', 'drink5.jpg', 80.99),
(24, 'Anti-O Nectar Mixed Fruit Drink', 'Ingredients: Water, Mango Juice,Pineapple Juice,Papaya Pulp,Passion Fruit Pulp,Lime Juice,Sugar,Citric Acid (E330),Permitted Fruit Stabilizer(E 466),Permitted Preservatives(E223),Permitted Colour(E 122)', 'drink6.png', 50.99),
(27, 'Chocolate Ice cream 80ml\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'ice1.jpeg', 65.99),
(28, 'Jam Rolled Ice Cream', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'ice2.jpg', 275.99),
(29, 'Baskin Robbins', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'ice3.jpg', 180.99),
(30, 'Ice Choc 75ml', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'ice4.jpeg', 80.99),
(31, 'Caramel and Vanilla Bar', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'ice5.jpg', 75.99),
(32, 'Double Dutch 500ml', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'ice6.jpg', 1500.99),
(33, 'Chocolate Mousse', '1kg, The Chocolate mousse is round in shape, with two layers of \'orange syrup soaked\' chocolate sponge, sandwiched together with a layer of chocolate mousse cream, and topped off with a coating of butter cream.', 'cake1.jpg', 4800.99),
(34, 'Chocolate Roll', '450g, A childhood favorite and a rewarding treat. The Chocolate Roll consists of chocolate sponge and chocolate cream. Finished with a drizzle of chocolate ganache.', 'cake2.jpg', 1200.99),
(35, 'Mixed Fruit Gateaux', '1Kg, The Mixed Fruit gateaux is a round cake, comprising of two layers of syrup soaked vanilla sponge cake, sandwiched with custard - fresh cream, garnished with fruits & nuts.', 'cake3.jpg', 5900.99),
(36, 'Black Forest', 'While a full 1Kg cake is round in shape and can be cut into 12 wedges, a piece of Black Forest that is listed below is prepared separately, and is rectangular in shape.', 'cake4.jpg', 5400.99),
(37, 'Chocolate Finger Gateaux', 'While a full 1Kg cake is round in shape and can be cut into 12 wedges, a piece of Chocolate Finger Gateaux is prepared separately, and is rectangular in shape.', 'cake5.jpg', 5500.99),
(38, 'Butter Cake', 'The Butter cake is a square single layer cake. 330g', 'cake6.jpg', 1920.99),
(39, 'Peach Gateaux', '1Kg, The top half of the gateaux comprises of more layers of sponge cake, peach mousse and peach pieces', 'cake7.jpg', 3240.99),
(40, 'Chocolate Cup Cake\r\n', '1pcs, The Chocolate Cup Cake garnished with chocolate icing.', 'cake8.jpg', 220.99),
(41, 'Chocolate Doughnut', '1pcs, Our delicious doughnut with a chocolate topping and sprinkled with chopped cashew nuts.', 'cake9.jpg', 220.99),
(42, 'Veggi Rice', 'Wok-fried Basmati Rice served with batter-fried mushrooms and chili paste. Serves 1 -2.', 'rice1.jpg', 650.99),
(43, 'Egg Rice', 'Wok fried Basmati Rice served with batter-fried mushrooms, chili paste, and a fried egg. Serves 1 -2.', 'rice2.jpg', 700.99),
(44, 'chicken kottu-medium ', 'Most Popular Sri Lankan food in the world. It\'s a mix of roti pieces, some veggies, eggs, and a curry sauce. Chicken curry in this case.', 'rice3.jpg', 450.99),
(45, 'Egg kottu-medium ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'rice4.jpg', 400.99),
(46, 'Cheese Kottu', 'Cheese Kottu is a Sri Lankan dish originated in eastern part of the country, which is generally eaten as a dinner and or as feast meal.', 'rice5.jpg', 750.99),
(47, 'Chicken Rice-biryani', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'rice6.jpeg', 800.99);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `customer_name` varchar(255) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `order` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`customer_name`, `phone_number`, `order`, `qty`, `date`, `address`, `message`) VALUES
('dilshan', 774992822, 'burger', 2, '2022-05-22', 'ihala walpola,gokarella', 'thank you!');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_name`, `email`, `number`, `address`) VALUES
('dd', 'dd', 0, 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` int(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `user_name`, `address`, `email`, `password`) VALUES
(3, 'dilshan dananjaya', 'ihala walpola', 'it21247668@my.sliit.lk', '28486124');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  ADD PRIMARY KEY (`Feedback_ID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  MODIFY `Feedback_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
