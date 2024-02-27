-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 07:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carwale`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Admin_User_Name` varchar(50) NOT NULL,
  `Admin_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Admin_User_Name`, `Admin_Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assistance`
--

CREATE TABLE `assistance` (
  `Assistance_Id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Full_Name` varchar(250) NOT NULL,
  `Contact_Number` bigint(20) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car_data`
--

CREATE TABLE `car_data` (
  `Car_ID` int(11) NOT NULL,
  `Car_Name` varchar(100) NOT NULL,
  `Car_Description` varchar(5000) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `ColorID` int(11) NOT NULL,
  `car_image_path` varchar(500) NOT NULL,
  `Category_ID` int(11) NOT NULL,
  `car_mileage` varchar(50) NOT NULL,
  `car_transmision` varchar(50) NOT NULL,
  `car_seats` varchar(50) NOT NULL,
  `car_luggage` varchar(50) NOT NULL,
  `car_fuel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_data`
--

INSERT INTO `car_data` (`Car_ID`, `Car_Name`, `Car_Description`, `Price`, `ColorID`, `car_image_path`, `Category_ID`, `car_mileage`, `car_transmision`, `car_seats`, `car_luggage`, `car_fuel`) VALUES
(5, 'BMW X1', 'Interior\r\n\r\nOn the inside, the X1 gets Sensatec synthetic leather upholstery for the seats that come in either Oyster/Black or all-Black theme. Moreover, there is an analogue instrument cluster with a TFT multimedia display. Depending on the variant, the X1 comes with distinctive infotainment touchscreen units varying between 6.5-inch, 8.8-inch and 10.25-inch. \r\n\r\nFeatures\r\n\r\nThe X1 gets anti-dazzle side-view mirrors, a seven-speaker HiFi sound system, heads-up display, dual-zone temperature control, wireless charger, six airbags, attentiveness attention, TPMS, traction control, dynamic stability control, cornering brake control, ISOFIX child seat anchors and six dimmable colours of ambient lighting.-3-3-3-3', '41.90 Lakh', 1, 'assets/bmw/bmw_x1.jpeg', 3, '15-20 kmpl', 'Automatic', '5 adults', '5', 'Petrol/Diesel'),
(6, 'BMW X7', 'Interior\r\n\r\nThe lavish interior wears expensive Vernasca leather in either Coffee and Black or Cognac and Black. Moreover, BMW has used Sensatec synthetic leather for the fascia and Velour floor mats. In addition, there are electronically operated front seats with ventilation and heating functions, five-zone temperature control and two 12.3-inch screens with BMW Live Cockpit Professional.\r\n\r\nFeatures\r\n\r\nBeing the top-of-the-line SUV, the X7 comes with all the bells and whistles. For instance, there is adaptive air suspension, a panoramic glass roof with light graphic composed of over 15,000 light elements, front temperature-controlled cup holders, BMW Display key, head-up display, 16-speaker Harman Kardon sound system, two 10.2-inch high-definition screen for the rear-seat passengers and reversing assistant.', '11,550,000', 4, 'assets/bmw/BMW_X7.jpg', 3, '11-13 kmpl', 'Automatic', '6 to 7 adults', '4', 'Petrol/Diesel'),
(7, 'BMW X5', 'Interior\r\n\r\nThe X5 has a high-end cockpit available in a variety of shades. BMW offers premium Vernasca leather upholstery for the seats, whereas the fascia wears Sensatec artificial leather. In addition, it comes with two 12.3-inch displays with BMW Live Cockpit Professional and a 16-speaker, 464-watt, Harman Kardon sound system.\r\n\r\nFeatures\r\n\r\nDepending on the variant, the X5 is equipped with plenty of features such as adaptive air suspension, powered tailgate, six colours of ambient lighting, heated and anti-dazzle functions for side-view mirrors, a panoramic sunroof, four-zone temperature control with individual control unit for the rear seats, BMW display key, heads-up display, parking and reversing assistance, surround-view cameras and attentiveness attention. ', '9,190,000', 2, 'assets/bmw/bmw_x5.png', 3, '8-13 kmpl', 'Automatic', '5 adults', '5', 'Petrol/Diesel'),
(8, 'Aston Martin DB11', 'The DB11 is powered by the brand new 5.2-litre turbocharged V12 petrol engine and is the first Aston to take the force induction route to performance. The 600bhp and 700Nm torque engine is mated to an eight-speed ZF torque converter automatic gearbox powers the right set of wheels. The DB11 zooms past 100kmph in 3.9 seconds on its way to a top speed of 323kmph.-3', '3.29 crore', 5, 'assets/astronmartin/as_1.jpg', 1, '8.93 kmpl', 'Automatic', '4 adults', '4', 'Petrol'),
(9, 'Aston Martin Vantage', 'Aston Martin uses a front-mid mounted 4.0-litre V8 twin-turbocharged petrol engine mated to an eight-speed automatic transmission that develops 503bhp at 6,000rpm and 685Nm of torque from 2,000 to 5,000rpm. It achieves a 0 to 100kmph time in 3.6 seconds and has an electronically limited top speed of 314kmph. Besides, all the power is delivered to the rear wheels. -3', '2.95 crore', 5, 'assets/astronmartin/as_2.jpg', 1, '7.46 kmpl', 'Automatic', '2 adults', '5', 'Petrol'),
(10, 'Audi e-tron GT', 'Interior and features:\r\n\r\nInside, the 2021 Audi etron GT gets equipment in the form of the brand’s Virtual cockpit (a fully digital instrument console), a 12.3-inch touchscreen infotainment system, cruise control, a panoramic sunroof, a 360-degree camera, Park Assist Plus, and a lane departure warning system.-3-3', '₹ 1.80 Crore', 1, 'assets/audi/au_1.jpeg', 2, '388 ', 'Automatic', '5 adults', '5', 'Electric'),
(11, 'Audi RS7 Sportback', 'Under the hood of the 2020 Audi RS7 Sportback is a 4.0-litre twin-turbo V8 petrol engine producing 591bhp and 800Nm of torque. Paired to an eight-speed automatic transmission, the model can sprint from 0-100kmph in just 3.6 seconds. The engine sends power to all four wheels via the signature Quattro all-wheel-drive system. Also on offer is a 48V mild-hybrid system and Cylinder-On-Demand (COD) technology.-3', '₹ 2.19 Crore', 1, 'assets/audi/au_2.jpeg', 2, '9 kmpl', 'Automatic', '5 adults', '4', 'Petrol'),
(12, 'Audi RS Q8', 'Audi has expanded its high performance range in India with the arrival of the RSQ8. It’s the first performance SUV from the German automaker, and is powered by a 4.0-litre TFSI twin-turbo V8 engine producing 600bhp/800Nm. This engine is mated to an eight-speed automatic, and using Audi’s patented Quattro AWD technology sends power to all four wheels. You get a 0-100kmph time in just 3.8 seconds with a top speed of 250kmph.-3-3', '₹ 2.12 Crore', 1, 'assets/audi/au_3.jpeg', 2, '8.26 kmpl', 'Automatic', '5 adults', '4', 'Petrol'),
(13, 'Audi Q2', 'The Audi Q2 gets Audi’s virtual cockpit accessible with a three-spoke multi-functional flat-bottom steering control with paddle shifters. There are finely sculpted sport seats with insert inlays and 10-colour ambient lighting. The air-cons are circular and get rotary and twist-type controls. It comes loaded with wireless charging, dual-zone climate control, leatherette seats, front and rear parking sensors, MMI Navigation Plus infotainment system with Apple CarPlay and Android Auto connectivity, voice command, and a rear-view parking assist camera. It comes equipped with two standard USB slots on the front and two USB Type-C slots for the rear passengers.-3', '₹ 35.00 Lakh', 1, 'assets/audi/au_4.jpeg', 2, '15 kmpl', 'Automatic', '5 adults', '5', 'Petrol'),
(14, 'Ferrari 812', 'The Ferrari 812 Superfast gets a wide gasping grille with a prancing horse located in the centre of the mesh-grille. It gets LED headlamps, quad circular LED taillamps, a rear diffuser and breathing gills on the hood. The aero cluster on the front houses an air duct which effectively cools the brakes. The fins on the bumper channels air into the duct that directs air to the underbody thereby reducing drag at speeds over 180kmph. Moreover, every scoop, duct and vane has been designed to help with additional downforce.-3-3', '₹ 5.20 Crore', 5, 'assets/ferrari/fe_1.jpeg', 4, '6.1 kmpl', 'Automatic', '2 adults', '5', 'Petrol'),
(15, 'Ferrari Roma', 'Under the hood of the Ferrari Roma is the award-winning 3.9-litre turbocharged V8 engine that produces 612bhp and 760Nm of torque. Mated to an eight-speed DCT unit, the model can sprint from 0-100kmph in 3.4 seconds, followed by 200kmph in 9.3 seconds. The top speed of the model stands at 320kmph.\r\n\r\nExterior highlights of the new Ferrari Roma include a shark-nose-inspired fascia, adaptive LED headlamps, flared wheel arches, a rear spoiler with three modes (Low Drag, Medium Downforce, and High Downforce), and quad-LED tail lights.', '₹ 3.76 Crore', 1, 'assets/ferrari/fe_2.jpeg', 4, '8.93 kmpl', ' Automatic', '2 adults', '5', 'Petrol'),
(16, 'Ferrari F8 Tributo', 'Inside, the Ferrari F8 Tributo features a seven-inch display for the passenger, new HMI, (Human Machine Interface) new steering wheel and new round air intakes. Also on offer is an array of carbon-fibre and alcantara trims across the interior.\r\n\r\nThe Ferrari F8 Tributo made its world debut at the 2019 Geneva Motor Show prior to its unveiling in March last year. The model is propelled by a 3.9-litre twin-turbocharged V8 engine that produces 710bhp and 770Nm of torque. The model can attain speeds of 100kmph from a standstill in just 2.9 seconds, all the way up to a top speed of 340kmph. ', '₹ 4.02 Crore', 2, 'assets/ferrari/fe_3.jpeg', 4, '7.75 kmpl', 'Automatic', '2 adults', '4', 'Petrol'),
(17, 'JEEP COMPASS SPORT', 'The Compass has been around for three years now and this is the first major update that Jeep has given the mid-size SUV. It sports the signature seven-box front grille with chrome inserts and sleek LED headlamps with integrated LED DRLs.  The bumper has also been reworked adding a black horizontal air intake in the middle flanked by LED fog lamps. The 18-inch alloys are new as well with a new five-spoke two-tone design.\r\n\r\nOn the inside, the party piece is the floating 10.1-inch touchscreen infotainment system with FCA’s latest Uconnect 5 now placed above the aircon vents. The driver is further allured with an all-digital 10.2-inch instrument commanded by a new three-spoke leather-wrapped steering wheel. Other additions to the cabin include wireless smartphone charging, front ventilated seats, a panoramic sunroof, a 360-degree camera setup, power tailgate, cruise control, and eight-way power-adjustable front seats with the driver side getting a memory function.-3', '₹ 17.79 lacs', 5, 'assets/jeep/jeep_1.jpeg', 6, '14-17 kmpl', 'Automatic/Manual', '5 adults', '5', 'Petrol/Diesel'),
(18, 'Jeep Wrangler', 'Under the hood of the locally-assembled Jeep Wrangler is the 2.0-litre turbo-petrol engine that is tuned to produce 268bhp and 400Nm of torque. This motor is paired to an eight-speed transmission, and power is sent to the wheels via an AWD system.\r\n\r\nExterior highlights of the locally-assembled 2021 Jeep Wrangler include the signature seven-slat grille design, circular LED headlamps, fender-mounted turn indicators and LED DRLs, 18-inch alloy wheels, a spare wheel mounted on the tail-gate, and LED tail lights.', '₹ 60,35,000', 1, 'assets/jeep/jeep_2.jpeg', 6, '12.1 kmpl', 'Automatic', '5 adults', '5', 'Petrol'),
(19, 'Rolls-Royce Phantom VIII', 'The interiors of the Rolls Royce Phantom VIII are equipped with suicide doors, an LCD screen replacing the analogue console for the instrument cluster, a Hi-Res HUD, second-row seats with reclining function, dual infotainment screens, and a drinks cabinet in the centre.', '₹ 9.50 Crore', 5, 'assets/rr/rs_1.jpg', 12, '9.8 kmpl', 'Automatic', '5 adults', '4', 'Petrol'),
(20, 'Lamborghini Urus', 'The Urus SUV gets everything that one could expect from a Lamborghini. Although highly customisable, the cabin is sporty and functional. There are two digital screens on the centre console, while instrument cluster is all-digital too. The fighter-jet-style ANIMA drive selector has five driving modes – Strada, Sport, Corsa, Sabbia (sand), Terra (land), and Neve (snow). Of these, the last three are seen for the first time in a car from Sant’Agata Bolognese. Although the Urus is a proper four-seater, the SUV can be had with a five-seat configuration as well with 18-way adjustable seats, ISOFIX, and sunroof. The Urus has a 616 litres boot space which can be extended to 1,596 litres.-3', '₹ 3.10 Crore', 5, 'assets/lambo/lm_1.jpg', 7, '7.87 kmpl', 'Automatic', '5 adults', '4', 'Petrol'),
(21, 'Lamborghini Huracan STO', 'The Lamborghini Huracan Super Trofeo Omologato (Italian for homologation), is a road-homologated version of the marquee’s V10 race car. Built by the folks at Squadra Corse (the company’s motorsport department), the front of this Italian bull combines various elements such as the fenders, hood, and front bumper into a single piece of the body. A few other notable highlights include the CCM-R carbon ceramic brakes, a roof scoop, a large adjustable rear wing, and a refreshed rear bumper with dual exhausts.', '₹ 5.44 Crore', 2, 'assets/lambo/lm_2.jpeg', 7, '7.19 kmpl', 'Automatic', '2 adults', '4', 'Petrol'),
(22, 'Lamborghini Huracan', 'Both the sports cars have a 5,204cc naturally aspirated V10 engine married to a dual-clutch seven-speed transmission. But here is the distinction, the Huracan Evo Spyder makes 630bhp and 600Nm of torque while the Evo RWD Spyder produces 601bhp and 560Nm of torque. Apart from that, the Evo Spyder has a variable all-wheel-drive system whereas the Evo RWD Spyder is a pure rear-wheel biased model. \r\n\r\n\r\nThe Evo RWD Spyder and the Evo Spyder have a different front bumper. Meanwhile, there is a new rear diffuser fitted to the Evo RWD Spyder. Additionally, both the Huracan Spyder models have a soft-top roof. The RWD Spyder gets 19-inch wheels on the other hand the Spyder features a set of 20-inches.', '₹ 3.92 Crore', 1, 'assets/lambo/lm_3.jpeg', 7, '11.2 kmpl', 'Automatic', '2 adults', '4', 'Petrol'),
(23, 'Rolls-Royce Dawn', 'Inside, the Dawn, just like most Rolls Royce cars across the world, can be customised in numerous combinations and textures. The soft-top can be opened or closed in 22 seconds, up to speeds of 50kmph. A few other notable features of the model include dynamic cruise control, a 16-speaker bespoke tuned music system, an HUD, and a hidden 10.25-inch HD screen that can be controlled via a touchpad.', '₹ 5.92 Crore', 4, 'assets/rr/rs_2.jpg', 12, '9.8 kmpl', 'Automatic', '4 adults', '5', 'Petrol'),
(24, 'Rolls-Royce Cullinan', 'On the inside, the Rolls Royce Cullinan comes equipped with a leather-wrapped dashboard, adaptive cruise control, a rear partition wall separating the second-row passengers from the luggage compartment, suicide doors, chrome AC vents, and a ‘recreational module’ that electronically deploys a picnic bench in the rear luggage compartment.\r\n', '₹ 6.95 Crore', 1, 'assets/rr/rs_3.jpg', 12, '9.5 kmpl', 'Automatic', '5 adults', '4', 'Petrol'),
(25, 'Range Rover Velar', 'Land Rover Range Rover Velar is indeed one of the finest and good looking SUVs in its category. The SUV is available in R-Dynamic S variant in both petrol as well as diesel engine option. The updated Velar is one of the safer, cleaner, and smarter SUVs in its segment and is also one of the most technologically advanced luxury SUV in the world. In India, the Velar is limited to four colour options, including - Fuji White, Santorini Black, Portofino Blue, and Silicon Silver. ', '96.34 Lakh', 5, 'assets/lr/car1_lr.jpg', 8, '15.8 kmpl', 'Automatic', '5 adults', '5', 'Petrol/Diesel'),
(26, 'Discovery Sport', 'The second-generation Land Rover Discovery Sport is available in ‘S’ and ‘R-Dynamic SE’ variants. The Discovery Sport is built on the Land Rover Premium Transverse Architecture (PTA). The updated Discovery Sport has retained a class leading wading depth of 600mm.', ' 72.46 Lakh', 5, 'assets/lr/car2_lr.jpg', 8, '10-13 kmpl', 'Automatic', '5 adults', '5', 'Petrol/Diesel'),
(27, 'Defender', 'Land Rover unveiled the new generation Defender SUV at the 2019 Frankfurt Motor Show. The model is offered in two body styles that include 90 and 110 wheelbase formats. The model was later introduced in India in February 2020, with prices starting at Rs 69.99 lakh (ex-showroom).', '93.93 Lakh', 2, 'assets/lr/car3_lr.jpg', 8, '14.01 kmpl', 'Automatic', '5 adults', '5', 'Petrol/Diesel'),
(29, 'Hyundai Venue', 'Hyundai entered the sub-four metre SUV segment with the debut of the Venue back in May 2019. The model is currently available with three engine options across seven variants that include E, S, S(O), S+, SX, EX(O) Exe, and SX (O). Rivals to the Venue include the Kia Sonet, Maruti Suzuki Vitara Brezza, Toyota Urban Cruiser, Tata Nexon, and the Ford EcoSport. ', '7.91 Lakh', 4, 'assets/hyundai/car1_hu.jpg', 5, '17-23 kmpl', 'Automatic', '5 adults', '4', 'Petrol'),
(30, 'Hyundai Creta', 'The Hyundai Creta has now entered its second generation and was first showcased at the 2020 Auto Expo. It’s the king of the D-segment and is offered in 14 variants across three engine and gearbox options. ', '11.47 Lakh', 4, 'assets/hyundai/car2_hu.jpg', 5, '17-21 kmpl', 'Automatic', '5 adults', '4', 'Petrol/Diesel'),
(32, 'Hyundai Grand i10 Nios', 'The third-generation Grand i10 Nios is available in five different variants and is offered in three engine options. Moreover, it comes with five single-tone and three dual-tone exterior paint choices with an all-black roof.-3', '5.96 Lakh', 1, 'assets/hyundai/car3_hu.jpg', 5, '20-28 kmpl', 'Autometic', '5', '4', 'Petrol/CNG/Diesel'),
(33, 'Lexus ES', 'The seventh-generation ES sedan was first revealed at the 2018 Beijing Motor show. And Lexus India wasted no time in introducing the new-gen ES sedan in the country just a few months after its international debut. It takes the CBU route to India and is priced at Rs 59.13 lakhs (ex-showroom all-India).-3', '₹ 62.95 Lakh', 1, 'assets/lexus/Lexus1.jpg', 9, '30', 'Autometic', '5', '4', 'Petrol'),
(34, 'Lexus LX', 'Lexus SUVs have been a trend in India, especially in the late 90s and the early 2000s with the rich and famous opting for the luxurious version of the Toyota Land Cruiser. Back then, most of them were individual imports but now Lexus is all set to go on sale officially.', '₹ 2.69 Crore', 4, 'assets/lexus/Lexus2.jpg', 9, '20', 'Autometic', '5', '5', 'Petrol'),
(35, 'Lexus NX', 'The Lexus NX is the smallest SUV in the Japanese carmaker’s SUV portfolio. The NX was introduced in 2014 and got a minor cosmetic update in 2017. The NX will make its way to India as a CBU and hence is expected to be priced a segment higher than its direct rivals.', '₹ 67.70 Lakh', 5, 'assets/lexus/Lexus3.jpg', 9, '28', 'Autometic', '5', '4', 'Petrol'),
(36, 'MG Hector', 'The MG Hector facelift has been launched in India, with prices starting at Rs 12.90 lakh (ex-showroom, all India). Launched in India in June 2019, this is the first comprehensive update for the Hector SUV. The model is offered in four variants that include Style, Super, Smart, and Sharp.', '₹ 15.56 Lakh', 1, 'assets/mg/MG1.jpg', 11, '35', 'Autometic', '5', '5', 'Petrol'),
(37, 'MG Hector Plus', 'MG Motor India expanded the Hector range with the six-seat and seven-seat Hector Plus. The three-row SUV is offered in five trims that include Style, Super, Smart, Sharp, and Select. Customers can choose from six colours including Candy White, Glaze Red, Starry Black, Burgundy Red, Aurora Silver and Starry Sky Blue.', '₹ 16.12 Lakh', 1, 'assets/mg/MG2.jpg', 11, '40', 'Autometic', '5', '5', 'Petrol'),
(38, 'Mercedes-Benz A', 'The Mercedes-Benz A-Class Limousine is available in three variants - A200 (Petrol), A200d (Diesel) and A35 4Matic (AMG Line, Petrol). It is offered with various paint options  such as Polar White, Mojave Silver, Mountain Grey, Cosmos Black, Denim Blue and Iridium Silver.', '₹ 46.04 Lakh', 5, 'assets/Mercedes/car1.jpg', 10, '20', 'Autometic', '5', '4', 'Petrol'),
(39, 'Mercedes-Benz GLA', 'Mercedes-Benz has taken the wraps off the new-gen GLA in India. The new model gets reworked exterior, additional features, spacious cabin, and revised powertrain options.', '₹ 48.98 Lakh', 5, 'assets/Mercedes/car2.jpg', 10, '22', 'Autometic', '5', '4', 'Petrol'),
(40, 'MercedesBenzC', 'Mercedes-Benz has revamped the C-Class in India with a mid-life update. The executive sedan gets a refreshed fascia and rejigged powertrain options. The C-Class is introduced in three trim levels powered by a downsized diesel engine available in two states of tune.', '₹ 55.78 Lakh', 1, 'assets/Mercedes/car3.jpg', 10, '25', 'Autometic', '5', '4', 'Petrol');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_ID` int(11) NOT NULL,
  `Category_Name` varchar(50) NOT NULL,
  `logo_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_ID`, `Category_Name`, `logo_path`) VALUES
(1, 'Astron Martin', 'assets/logo/Aston_Martin.png'),
(2, 'Audi', 'assets/logo/audi1.png'),
(3, 'BMW', 'assets/logo/BMW.jpg'),
(4, 'Ferrari', 'assets/logo/ferrari.png'),
(5, 'Hyundai', 'assets/logo/hyundai.jpg'),
(6, 'Jeep', 'assets/logo/jeep1.jpg'),
(7, 'Lamborghini', 'assets/logo/Lamborghini.png'),
(8, 'Land Rover', 'assets/logo/landrover.png'),
(9, 'Lexus', 'assets/logo/lexus1.png'),
(10, 'Mercedes', 'assets/logo/mercedes.jpg'),
(11, 'MG Hector', 'assets/logo/mghect.png'),
(12, 'Rolls Royes', 'assets/logo/rollsroyes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `ColorID` int(11) NOT NULL,
  `ColorName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`ColorID`, `ColorName`) VALUES
(1, 'Red'),
(2, 'Blue'),
(3, 'Yellow'),
(4, 'Black'),
(5, 'White');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `fid` int(2) NOT NULL,
  `airconditions` int(2) NOT NULL,
  `chilseat` int(2) NOT NULL,
  `gps` int(2) NOT NULL,
  `luggage` int(2) NOT NULL,
  `Music` int(2) NOT NULL,
  `seatbelt` int(2) NOT NULL,
  `sleeping_bed` int(2) NOT NULL,
  `water` int(2) NOT NULL,
  `bluetooth` int(2) NOT NULL,
  `onboard_computer` int(2) NOT NULL,
  `audio_input` int(2) NOT NULL,
  `longtermtrips` int(2) NOT NULL,
  `carkit` int(2) NOT NULL,
  `remote_control_locking` int(2) NOT NULL,
  `climate_control` int(2) NOT NULL,
  `car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`fid`, `airconditions`, `chilseat`, `gps`, `luggage`, `Music`, `seatbelt`, `sleeping_bed`, `water`, `bluetooth`, `onboard_computer`, `audio_input`, `longtermtrips`, `carkit`, `remote_control_locking`, `climate_control`, `car_id`) VALUES
(1, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 1, 8),
(2, 1, 0, 1, 0, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 1, 9),
(3, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 10),
(4, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 13),
(5, 1, 0, 1, 0, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 1, 11),
(6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 12),
(7, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 5),
(8, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 7),
(9, 1, 0, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 6),
(10, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 0, 27),
(11, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 26),
(12, 1, 0, 1, 0, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 14),
(13, 1, 0, 1, 0, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 16),
(14, 1, 0, 1, 0, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 1, 15),
(15, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 30),
(16, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 32),
(17, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 0, 29),
(18, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 17),
(19, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 18),
(20, 1, 0, 1, 0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 1, 0, 22),
(21, 1, 0, 1, 0, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 21),
(22, 1, 0, 1, 0, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 20),
(23, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 33),
(24, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 34),
(25, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 35),
(26, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 0, 38),
(27, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 40),
(28, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 39),
(29, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 36),
(30, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 37),
(31, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 1, 25),
(32, 1, 0, 1, 1, 1, 1, 0, 0, 1, 0, 1, 0, 1, 1, 0, 24),
(33, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 23),
(34, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `assistance`
--
ALTER TABLE `assistance`
  ADD PRIMARY KEY (`Assistance_Id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `car_data`
--
ALTER TABLE `car_data`
  ADD PRIMARY KEY (`Car_ID`),
  ADD KEY `ColorID` (`ColorID`),
  ADD KEY `Category_ID` (`Category_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`ColorID`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `car_id` (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assistance`
--
ALTER TABLE `assistance`
  MODIFY `Assistance_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `car_data`
--
ALTER TABLE `car_data`
  MODIFY `Car_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `ColorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `fid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assistance`
--
ALTER TABLE `assistance`
  ADD CONSTRAINT `assistance_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car_data` (`Car_ID`);

--
-- Constraints for table `car_data`
--
ALTER TABLE `car_data`
  ADD CONSTRAINT `car_data_ibfk_1` FOREIGN KEY (`ColorID`) REFERENCES `color` (`ColorID`),
  ADD CONSTRAINT `car_data_ibfk_2` FOREIGN KEY (`Category_ID`) REFERENCES `category` (`Category_ID`);

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `features_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car_data` (`Car_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
