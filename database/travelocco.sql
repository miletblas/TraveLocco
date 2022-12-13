-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 07:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelocco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `admin_pass`) VALUES
(1, '1', '1'),
(2, '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `airline_ID` int(50) NOT NULL,
  `airline` varchar(50) NOT NULL,
  `logo_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`airline_ID`, `airline`, `logo_path`) VALUES
(1, 'AirAsia', 'air-asia.jpg'),
(2, 'Philippine Airlines', 'philippine-airlines.jpg'),
(3, 'Cebu Pacific', 'cebu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `airport_ID` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`airport_ID`, `name`, `location`) VALUES
(8, 'Clark International Airport', 'Mabalacat, Pampanga'),
(9, 'Francisco Bangoy International Airport', 'Davao City'),
(10, 'Iloilo International Airport', 'Cabatuan, Iloilo'),
(11, 'Kalibo International Airport', 'Kalibo, Aklan'),
(12, 'Laoag International Airport', 'Laoag, Ilocos Norte'),
(13, 'Mactan-Cebu International Airport	', 'Lapu-Lapu City'),
(14, 'Ninoy Aquino International Airport', 'Pasay/ParaÃ±aque'),
(15, 'Puerto Princesa International Airport', 'Puerto Princesa'),
(16, 'Bacolod-Silay Airport', 'Silay, Negros Occidental'),
(17, 'Bicol International Airport', 'Daraga, Albay'),
(18, 'Bancasi Airport', 'Butuan, Agusan del Norte'),
(19, 'Cauayan Airport	', 'Cauayan, Isabela'),
(20, 'Cotabato Airport (Awang Airport)', 'Datu Odin Sinsuat, Maguindanao'),
(21, 'Tacloban City Airport', 'Tacloban, Leyte'),
(22, 'Dipolog Airport', 'Dipolog, Zamboanga del Norte'),
(23, 'Dumaguete-Sibulan Airport', 'Sibulan, Negros Oriental'),
(24, 'General Santos Internation Airport (Tambler Airpor', 'General Santos, South Cotabato'),
(25, 'Caticlan/Boracay Airport', 'Malay/Nabas, Aklan'),
(26, 'Labo Airport (Ozamiz Airport)', 'Ozamiz, Misamis Occidental'),
(27, 'Laguindingan Airport', 'Laguindingan, Misamis Oriental'),
(28, 'Naga Airport', 'Pili, Camarines Sur'),
(29, 'Pagadian Airport', 'Pagadian, Zamboanga del Sur'),
(30, 'Roxas Airport', 'Roxas, Capiz'),
(31, 'Sanga-Sanga Airport (Tawi-Tawi Airport)', 'Bongao, Tawi-Tawi'),
(32, 'San Jose Airport', 'San Jose, Occidental Mindoro'),
(33, 'Subic Bay International Airport', 'Morong, Bataan'),
(34, 'Tuguegarao Airport', 'Tuguegarao, Cagayan'),
(35, 'Zamboanga International Airport', 'Zamboanga City'),
(36, 'Basco Airport', 'Basco(Batan Island), Batanes'),
(37, 'Calbayog Airport', 'Calbayog, Samar'),
(38, 'Camiguin Airport', 'Mambajao, Camiguin'),
(39, 'Catarman National Airport', 'Catarman, Northern Samar'),
(40, 'Cuyo Airport', 'Magsaysay(Cuyo Island), Palawan'),
(41, 'Evelio B. Javier Airport (Antique/San Jose Airport', 'San Jose de Buenavista, Antique'),
(42, 'Francisco B. Reyes Airport (Busuanga Airport)', 'Coron (Busuanga Island), Palawan'),
(43, 'Jolo Airport ', 'Jolo, Sulu'),
(44, 'Panglaw International Airport', 'Panglaw, Bohol'),
(45, 'Bohol-Panglao International Airport', 'Panglao, Bohol'),
(46, 'Sayak Airport (Siargao Airport)', 'Del Carmen (Siargao Island), Surigao del Norte'),
(47, 'Siquijor Airport', 'Siquijor, Siquijor Province');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_ID` int(50) NOT NULL,
  `blog_name` varchar(50) NOT NULL,
  `blog_picture` varchar(200) NOT NULL,
  `blog_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_ID`, `blog_name`, `blog_picture`, `blog_description`) VALUES
(1, 'Annyeong', 'Iloilo1.jpg', 'Bohol');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `book_ID` int(50) NOT NULL,
  `flight_ID` int(50) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_cp_no` varchar(50) NOT NULL,
  `book_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`book_ID`, `flight_ID`, `book_name`, `book_cp_no`, `book_email`) VALUES
(1, 1, 'Jonny Duling', '0956-7894-531', 'jduling@gmail.com'),
(2, 2, 'Chacha Doe', '0978-6235-854', 'doe@gmail.ccom'),
(3, 3, 'Sharp Shooter', '0965-7843-659', 'shooter@gmail.com'),
(6, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `desti_ID` int(50) NOT NULL,
  `desti_name` varchar(50) NOT NULL,
  `desti_picture` varchar(200) NOT NULL,
  `desti_description` longtext NOT NULL,
  `desti_price` int(255) NOT NULL,
  `embed_code` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`desti_ID`, `desti_name`, `desti_picture`, `desti_description`, `desti_price`, `embed_code`) VALUES
(27, 'Batanes', 'Batanes.jpg', 'Batanes is a place that is simple and quiet but relaxing. It is famous for its breathtaking views, scenic waters and terrain, clean environment, and the kindest locals. It also has a unique culture because of the islandsâ€™ first settlers, the Ivatans. Aside from that, this amazing place is open for different kinds of activities such as swimming, biking, lighthouse visits, and visits to century-old Ivatan houses. ', 1200, 'https://www.youtube.com/embed/MR96sE5TrEA'),
(28, 'Bocaray', 'Boracay.jpg', 'Boracay is one of the best islands in the world and was recognized internationally. This island boasts of crystal azure waters, powdery white sand, abundant flora and fauna, and diverse marine life. That is why it is famous for its pristine white beaches, thrilling water activities, world-class hotels, picturesque landscape, and great nightlife experiences.', 1500, 'https://www.youtube.com/embed/b7LSsKsJGHY'),
(29, 'Bohol', 'Bohol.jpg', 'Bohol is widely known as one of the best ecotourism destinations in the world with its lush forests and pristine seas. It is a haven of tropical natural beauty. This is also where you can see the infamous Chocolate Hills, a unique geological formations of over 1000 cone-shaped hills that change in color depending on the season. Aside from that, it is home to one of the countryâ€™s most recognizable animals - the Philippine tarsier. This place also offers unique food delicacies and great cuisine. ', 2000, 'https://www.youtube.com/embed/hKPuJCDBuGQ'),
(30, 'Cebu', 'Cebu.jpg', 'Cebu is the oldest city in the Philippines and is called the â€œQueen City of the Southâ€ because it can keep up with the . It has attracted visitors from all over the world because of its interesting history, and mysterious combination of natural and man-made attractions. In addition, it is also known for the colorful festival which is called Sinulog. There are also beautiful places that you have never seen before, especially the clear sandy beach in the South, the glorious crystal water in the North, or even the bright city lights in the heart of the city.', 2500, 'https://www.youtube.com/embed/1dFYoNej0M8'),
(31, 'Coron', 'Coron.jpg', 'Coron is one of the top tourist destinations in the Philippines. It is more known for its unique tourist spots. Under its azure waters, it has includes breathtaking World War II shipwrecks, bright coral reefs,and abundant marine life. The island also offers a wide variety of tourist spots and activities - from lustrous lagoons to beautiful beaches to unforgettable dive spots. ', 5000, 'https://www.youtube.com/embed/jEYR-kcPtpM'),
(32, 'Davao', 'Davao.jpg', 'Davao is the third largest city in the Philippines. It is known for its bustling economies, urban build-up, and modern amenities. Apart from that, there are many unique and wonderful things that this place offers including the picturesque landscapes, different fruit plantations, virgin forests, and pristine beaches.', 2500, 'https://www.youtube.com/embed/dDAnUc022lY'),
(33, 'Iloilo', 'Iloilo.jpg', 'Iloilo is known as the â€œHeart of the Philippinesâ€ because of its geographical features. This province is a heart-shaped island found right smack in the middle of the Philippines. Furthermore, it is home to historical landmarks, quaint beaches and islands, heritage homes, plus tasty and unique cuisine. The provinceâ€™s picturesque natural wonders and the friendly locals make this destination feel like a second home. ', 2780, 'https://www.youtube.com/embed/hkU8MvGFw48'),
(34, 'Siargao', 'Siargao.jpg', 'Siargao is known as the \"Surfing Capital of the Philippines, it is mainly responsible for introducing surfing to the country. It was also  voted the Best Island in Asia in the 2021 Conde Nast Travelers Readers awards. Apart from surfing, Siargao has many beautiful beaches and pristine coves. This place is also open to other activities such as cave exploration and rock climbing.', 4500, 'https://www.youtube.com/embed/l6K6FgR2xB8'),
(35, 'Siquijor', 'Siquijor.jpg', 'Siquijor is known for its unique healing arts. It is recognized as a center of mystic power and a capital of mystic activities and black majic. On the other hand, this place offers incredible sights and is rapidly becoming one of the most popular tourist destinations in the Philippines. It also offers epic jungle waterfalls, healthy coral reefs, palm-lined, white sand beaches, friendly locals, and some great cliff jumps.', 6500, 'https://www.youtube.com/embed/j_DpWD5_ZBw'),
(36, 'Manila', 'Manila.jpg', 'Manila is known as the \"Pearl of the Orientâ€ and is the nations capital city. This is famous for its blend of fascinating colonial history and the thrilling pace of a modern city. This bustling historic city is full of things to see and do including museums, parks, theaters, shopping malls, and a plethora of restaurants to choose from.', 3560, 'https://www.youtube.com/embed/ARCMk10iDHQ');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `flight_ID` int(50) NOT NULL,
  `airline_ID` int(50) NOT NULL,
  `plane_no` varchar(50) NOT NULL,
  `departure_airport_ID` int(50) NOT NULL,
  `arrival_airport_ID` int(50) NOT NULL,
  `departure_datetime` datetime NOT NULL,
  `arrival_datetime` datetime NOT NULL,
  `seats` int(50) NOT NULL DEFAULT 0,
  `price` float NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flight_ID`, `airline_ID`, `plane_no`, `departure_airport_ID`, `arrival_airport_ID`, `departure_datetime`, `arrival_datetime`, `seats`, `price`, `date_created`) VALUES
(7, 3, 'ABC 123', 8, 36, '2022-12-15 00:01:00', '2022-12-15 04:50:00', 200, 2300, '2022-12-13 00:44:52'),
(8, 1, 'DEF 456', 13, 45, '2022-12-27 06:30:00', '2022-12-27 08:00:00', 150, 1500, '2022-12-13 00:50:47'),
(9, 3, 'GHI 789', 28, 25, '2023-01-01 10:00:00', '2023-01-01 14:40:00', 100, 3000, '2022-12-13 00:55:35'),
(10, 2, 'JKL 012', 14, 13, '2023-01-12 08:00:00', '2023-01-12 11:30:00', 300, 3500, '2022-12-13 01:05:04'),
(11, 1, 'MNO 345', 11, 42, '2023-01-30 14:15:00', '2023-01-30 16:05:00', 400, 5000, '2022-12-13 01:08:34'),
(12, 2, 'PQR 678', 14, 9, '2023-02-02 03:40:00', '2023-02-02 07:00:00', 250, 3500, '2022-12-13 01:10:10'),
(13, 3, 'STU 901', 34, 10, '2023-02-14 10:20:00', '2023-02-14 12:40:00', 150, 2050, '2022-12-13 01:13:06'),
(14, 2, 'VWX 234', 27, 14, '2023-03-09 06:15:00', '2023-03-09 09:20:00', 220, 2220, '2022-12-13 01:15:49'),
(15, 1, 'YZX 567', 21, 46, '2023-04-20 05:40:00', '2023-04-20 08:00:00', 350, 5550, '2022-12-13 01:20:44'),
(16, 3, 'WVU 890', 9, 47, '2023-04-25 09:25:00', '2023-04-25 11:15:00', 100, 1540, '2022-12-13 01:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_ID` int(50) NOT NULL,
  `review_name` varchar(50) NOT NULL,
  `review_rating` varchar(50) NOT NULL,
  `review_comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `user_ID` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_cp_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`user_ID`, `user_name`, `user_cp_no`, `email`, `password`) VALUES
(5, 'Almira Guevarra', '09384529221', 'almirag548@gmail.com', '$2y$10$COBuA10wlPOQAHzS3657a.x5493.ZJ5mtsqMDBSFKTm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`airline_ID`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`airport_ID`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_ID`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`book_ID`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`desti_ID`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`flight_ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_ID`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `airline_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `airport_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `book_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `desti_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `flight_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `user_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
