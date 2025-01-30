-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2025 at 02:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ushtrimiprojekti`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `titulli` varchar(255) NOT NULL,
  `mesazhi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `emri`, `email`, `titulli`, `mesazhi`, `created_at`) VALUES
(3, 'rona', 'ronashuki@hotmail.com', 'PYETJE', 'SA KUSHTON. OFERTA', '2024-12-12 19:02:44'),
(5, 'oketa shuki', 'oketaashuki@gmail.com', 'PYETJE', 'aaaaaaaa', '2024-12-12 19:06:23'),
(7, 'ronashuki', 'ronashuki@gmail.com', 'KERKESE', 'BBBBBBB', '2024-12-12 19:08:25'),
(8, 'ronashuki', 'ronashuki@gmail.com', 'KERKESE', 'frhnruefhurebf', '2024-12-12 20:49:16'),
(11, 'oketa shuki', 'oketaashuki@gmail.com', 'PYETJE', 'eeeeeerrrrrrrrrr', '2024-12-12 20:51:42'),
(15, 'rina', 'rina@gmail.com', 'FFFFFF', 'agagagaggaggaaggagagagaga', '2024-12-13 20:31:23'),
(16, 'rina', 'rina@gmail.com', 'FFFFFF', 'jhhhhhhhhhhhhhhhh', '2024-12-13 20:48:28'),
(17, 'oookkkkeeetttttaaaa', 'oketa@hotmail.com', 'oketa', 'oketaoketaoketa', '2024-12-13 21:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `description`, `image_path`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(5, 'PUSHIMI JONË I ËNDRRAVE NË DHËRMI', 'Pushimi ynë në Dhërmi ishte një përvojë e paharrueshme, një ëndërr e realizuar në një nga perlat më të bukura të rivierës shqiptare. Nga momenti i parë kur mbërritëm, ishim të mahnitur nga uji kristal i kaltër, rëra e artë dhe pamjet mahnitëse që na rrethuan.\r\n\r\nMajestic Travel Agency e bëri këtë përvojë edhe më të veçantë! Me profesionalizmin dhe përkujdesjen e tyre, çdo detaj ishte i organizuar në mënyrë perfekte. Nga akomodimi komod me pamje nga deti, tek aktivitetet emocionuese si eksplorimi i plazheve të fshehura dhe shëtitjet me varkë, gjithçka ishte e kuruar në mënyrë të shkëlqyer.\r\n\r\nGjatë ditëve tona në Dhërmi, shijuam ushqimin tradicional të freskët, netët magjike me muzikë pranë bregdetit dhe qetësinë që vetëm një vend kaq i mrekullueshëm mund të ofrojë. Falë Majestic Travel Agency, pushimi ynë u bë jo vetëm i relaksuar, por edhe i mbushur me kujtime të bukura dhe momente që do t’i mbajmë mend gjithmonë.\r\n\r\nNëse po kërkoni një udhëtim të organizuar në mënyrë të përsosur, me shërbim cilësor dhe një ekip që kujdeset për çdo detaj, Majestic Travel Agency është zgjedhja ideale. Ne mezi presim pushimin tonë të ardhshëm me ta!', 'fototprojekt/dhermi.jpg', 15, NULL, '2025-01-30 00:23:52', '2025-01-30 00:23:52'),
(6, ' EKSPERIENCA JONË MAGJIKE NË DUBAI', 'Pushimi ynë në Dubai ishte një eksperiencë magjike, një kombinim perfekt i luksit, aventurës dhe relaksit. Nga momenti kur mbërritëm, u mahnitëm nga shkëlqimi i qytetit, ndërtesat madhështore dhe shërbimi i klasit botëror që na priti në çdo hap.\r\n\r\nMajestic Travel Agency na mundësoi një udhëtim të organizuar në mënyrë të përkryer, duke na siguruar akomodim në një hotel luksoz me pamje nga Burj Khalifa dhe shëtitje të mrekullueshme nëpër atraksionet më të njohura të Dubait. Nga safari në shkretëtirë dhe shëtitjet me deve, deri te eksplorimi i Dubai Mall dhe Marina-s, çdo moment ishte i mbushur me emocion dhe bukuri.\r\n\r\nPamjet e mahnitshme nga Burj Khalifa, relaksi në plazhet e bardha të Jumeirah, dhe darka në një jaht luksoz ishin vetëm disa nga përvojat që e bënë këtë pushim të paharrueshëm. Shërbimi profesional dhe i kujdesshëm i Majestic Travel Agency siguroi që gjithçka të shkonte pa asnjë problem, duke na dhuruar një eksperiencë të pashembullt.\r\n\r\nNëse dëshironi të përjetoni një pushim të klasit botëror, të shijoni jetën luksoze dhe të eksploroni një nga qytetet më të bukura në botë, Majestic Travel Agency është zgjedhja ideale. Mezi presim udhëtimin tonë të radhës me ta!', 'fototprojekt/dubairesort4.jpg', 14, NULL, '2025-01-30 00:40:09', '2025-01-30 00:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(13, 'oketashuki', 'oketaashuki@gmail.com', '$2y$10$13DV7kR/00vJvr4OfJcXZ.nyW3fOrLOxvH1NjxhwjZsInCo2ZbxL2', 'admin', '2025-01-30 00:14:51'),
(14, 'ronashuki', 'ronashuki@hotmail.com', '$2y$10$AGw9ZXaYnuKOKGgjlVkuW.tH9B2guULFxDQ8aPINMPYSeu.Xi1kMm', 'user', '2025-01-30 00:15:24'),
(15, 'oketaashuki', 'oketaashuki@gmail.com', '$2y$10$HPCs8dAu5B7y3MeTk2n9rupHUVMMjOybV7t5RNlX7GrUTdN0H.Njq', 'user', '2025-01-30 00:16:01'),
(16, 'oketa_', 'oketa@hotmail.com', '$2y$10$J6m7dwyjuq/ew6ANt/TTkus/Z7XrqUFhkjC3SrrHERqWlQy3oDZui', 'user', '2025-01-30 00:16:30'),
(17, 'oketa123_', 'oketa@hotmail.com', '$2y$10$oosROQHD5mb88PALvxdLHuFA9it.UAloVMushloBqv6VTcCiJKydm', 'user', '2025-01-30 00:18:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `content_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
