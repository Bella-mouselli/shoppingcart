-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 19, 2021 at 05:28 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `tel`, `email`) VALUES
(1, 'Charbel Atallah', '0737171711', 'charbel.atallah@yh.nackademin.se'),
(2, 'Isabell Mouselli', '070656774', 'isabell.mousellih@yh.nackademin.se');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `tel`, `email`, `address`) VALUES
(1, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(2, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(3, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(4, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(5, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(6, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(7, 'emelie', '722514824', 'emelie@forsberg.cc', 'Långbrodalsvägen 11b'),
(8, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(9, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(10, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(11, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(12, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(13, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(14, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(15, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(16, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(17, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(18, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(19, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(20, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(21, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99'),
(22, 'Charbel Atallah', '+46737183032', 'Chappa_atallah@hotmail.com', 'Svampstigen, 99');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Samsung Galaxy s21', '<p>Missa aldrig det perfekta ögonblicket – tack vare Galaxy S21 5G och S21+ 5G..</p>\r\n<h3>Produktinformation</h3>\r\n<ul>\r\n<li>Skapade för att revolutionera både dina filmer och foton.</li>\r\n<li>Med 8K-kvalitet som överträffar bioupplösning kan du nu plocka dina stillbilder direkt från filmen.</li>\r\n<li>Vårt snabbaste chip någonsin och ett stort, intelligent batteri som räcker över 24 timmar.</li>\r\n<li>Det är vad vi kallar episkt.</li>\r\n</ul>', '1499.00', '1599.00', 10, 'samsungs21.jpg', '2021-02-19 13:09:33'),
(2, 'iPhone 12', '<p>Få fantastiska funktioner i ett kompakt format med iPhone 12. Idealisk för den som föredrar en slät design. iPhone 12 har verkligen allt.</p>\r\n<h3>Produktinformation</h3>\r\n<ul>\r\n<li>5G-hastighet.</li>\r\n<li>A14 Bionic – det snabbaste chippet i en smart­phone.</li>\r\n<li>En OLED-skärm från kant till kant.</li>\r\n<li>Ceramic Shield med fyra gånger bättre skydd mot tappskador.</li>\r\n<li>Och nattläge på alla kameror.</li>\r\n</ul>', '949.99', '999.99', 10, 'iphone12.jpeg', '2021-02-19 13:09:23'),
(3, 'Huawei Mate 40 Pro', '<p>MHuawei Mate 40 Pro har en innovativ teknik som låter dig instruera skärmen utan att röra vid den.</p>\r\n<h3>Produktinformation</h3>\r\n<ul>\r\n<li>AI gesture control gör det möjligt att med några enkla handrörelser swipa, scrolla, och pausa.</li>\r\n<li>Fånga detaljer och ta skarpa bilder med den avancerade kameran och spela in video med optimerade färger och funktioner som hjälper dig med stabilisering och fokus.</li>\r\n<li>Zooma in för att fånga de bästa bilderna och skapa din vision för framtiden.</li>\r\n<li>Det starka batteri på 4400 mAh tillsammans med den uthålliga processorn och det avancerade chippet ger dig snabba hastigheter, kraftfull bildbehandling och effektiv strömförbrukning.</li>\r\n</ul>.', '899.99', '1100.00', 10, 'huaweimate40.jpg', '2021-02-19 17:06:22'),
(4, 'Sony Xperia 1 II', '<p>Xperia 1 II höjer ribban för hur snabb en smartphone kan vara.</p>\r\n<h3>Produktinformation</h3>\r\n<ul>\r\n<li>Den har den senaste tekniken och 5G-anslutning, samt en kamera med extremt snabbt autofokus.</li>\r\n<li>Den har den senaste tekniken, 5G-anslutning och 6,5-tums 21:9 CinemaWide 4K HDR OLED-skärmen visar allt med en enastående biokvalitet.</li>\r\n<li>Nå nya nivåer både inom underhållning och kreativitet.</li>\r\n<li>OLED, upplösning 3840 x 1644 pixels</li>\r\n</ul>.', '1139.99', '1222.99', 10, 'sonyxperia1.jpg', '2021-02-19 13:29:21'),
(5, 'One Plus Nord', '<p>OnePlus Nord smartphone är en fantastisk enhet med en 6.44 ” stor optisk AMOLED-pekskärm.</p>\r\n<h3>Produktinformation</h3>\r\n<ul>\r\n<li>Fyrdubbel bakre kamera och en dubbel selfie-kamera.</li>\r\n<li>Snapdragon 765G-spelprocessor med 5G gör den till en kraftfull enhet.</li>\r\n<li>Batteriet på 4100 mAh stödjer Warp Charge 30T-snabbladdningsteknologi.</li>\r\n</ul>.', '458.99', '0.00', 10, 'oneplusnord.jpg', '2021-02-19 14:02:59'),
(6, 'Samsung Galaxy Note 20 Ultra', '<p>Den minimalistiska designen förhöjs av perfekta detaljer och karakteristiska färger, och Corning® Gorilla® glas Victus ™ - det tåligaste Gorilla-glaset någonsin på en smartphone.1, 2 Varje Galaxy Note20 och Note20 Ultra har en matchande S Pen.</p>\r\n<h3>Produktinformation</h3>\r\n<ul>\r\n<li>Den dynamiska AMOLED 2X Infinity-O-skärmen på Galaxy Note20 Ultra levererar 1500 nits för en färgstark, bländfri vy, även i starkt dagsljus.</li>\r\n<li>Den uppgraderade processorn har maxat mer prestanda i chip-setet.</li>\r\n<li>Kraften i S Pen och 8K-videotekniken spränger alla gränser för din kreativitet – inklusive lagring.</li>\r\n</ul>.', '1300.00', '0.00', 10, 'samsungnote20.jpeg', '2021-02-19 14:12:53'),
(7, 'Nokia 8.3 5G smartphone', '<p>Njut av den senaste mobiltekniken med Nokia 8.3 5G smartphone.</p>\r\n<h3>Produktinformation</h3>\r\n<ul>\r\n<li>Den drivs av en åttahärnig Qualcomm® Snapdragon™ 765G CPU på 2.4 GHz med 8GB RAM och 128 GB lagring.</li>\r\n<li>Med en 6.81” FHD+-pekskärm, bakre fyrkamera, och fingeravtrycksläsare har Nokia 8.3 allt som önskas.</li>\r\n<li>Batteriet på 4100 mAh håller dig gående hela dagen.</li>\r\n</ul>.', '539.90', '699.99', 10, 'nokia83.jpg', '2021-02-19 17:00:10'),
(8, 'iPhone 11', '<p>Öppna ögonen och upplev världens skönhet från ett nytt perspektiv med iPhone 11</h3>\r\n<ul>\r\n<li>Telefonen kommer med ett snabbt chip, avancerad teknik, smidig drift och innovativa funktioner.</li>\r\n<li>Nattläge och imponerande videokvalitet.</li>\r\n<li>Står emot vatten och damm.</li>\r\n<li>Batteri som räcker hela dagen.</li>\r\n</ul>.', '800.00', '749.99', 10, 'iphone11.jpg', '2021-02-19 16:26:01'),
(9, 'XIAOMI Mi 10T Pro', '<p>Nya Xiaomi Mi 10 Pro är ledande inom 5G-anslutning och prestanda.</h3>\r\n<ul>\r\n<li>Mi 10T Pro erbjuder dig fantastiska funktioner och prestanda med 108MP trippelkamera.</li>\r\n<li>Snabb Qualcomm® Snapdragon™ 865 med 5G processor.</li>\r\n<li>144 Hz display med AdaptiveSync och TrueColor.</li>\r\n</ul>.', '499.99', '679.99', 10, 'xaomim10.jpg', '2021-02-19 16:33:33'),
(10, 'Samsung Galaxy S20', '<p>Samsung Galaxy S20 är en smartphone och multimediaenhet.</h3>\r\n<ul>\r\n<li>Fantastisk kamera med bl.a. 64 MP, 30x zoom och skarpa nattbilder.</li>\r\n<li>Du får även en mobil med 6.2\" AMOLED 120 Hz-skärm.</li>\r\n<li>4000 mAh batteri och redo för 5G.</li>\r\n</ul>.', '990.99', '1000.00', 10, 'samsungs20.jpg', '2021-02-19 16:42:17'),
(11, 'Samsung Galaxy A51', '<p>Samsung Galaxy A51 har en elegant design, mönstrad baksida med glansig yta.</h3>\r\n<ul>\r\n<li>Pekskärmen är 6,5-tums Infinity-O som täcker nästan hela telefonens framsida.</li>\r\n<li>Med Samsung Galaxy A51 får du ny Super Quadkamera, alltså fyra kameror plus selfiekamera som fångar allt.</li>\r\n<li>Kraftfull processor och batteri som räcker länge.</li>\r\n</ul>.', '299.00', '0.00', 10, 'samsunga51.jpg', '2021-02-19 16:49:39'),
(12, 'Nokia 3310', '<p>Klassiska, mytomspunna Nokia 3310 är tillbaka!</h3>\r\n<ul>\r\n<li>Alla klassiska egenskaper är kvar.</li>\r\n<li>Uppdaterat operativsystem.</li>\r\n<li>Mer slimmad design.</li>\r\n<li>Polariserad skärm.</li>\r\n<li>Mer slimmad design.</li>\r\n<li>MP3-spelare.</li>\r\n<li> FM-radio.</li>\r\n<li> Tro det eller ej - en bakre kamera.</li>\r\n<li>Och oroa dig inte - den har Snake!</li>\r\n</ul>.', '2999.99', '6999.00', 10, 'nokia3310.jpg', '2021-02-19 17:06:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
