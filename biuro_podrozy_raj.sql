SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `biuro` (
  `id` int(11) NOT NULL,
  `miejsce` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `biuro` (`id`, `miejsce`, `data`, `cena`) VALUES
(0, 'Berlin', '2023-12-29', 1000),
(1, 'Mongolia', '0000-00-00', 1200),
(12, 'Mongolia', '2023-12-21', 1200),
(44, 'Mongolia', '2023-12-30', 1600),
(777, 'Boleń', '2023-12-05', 1000);
CREATE TABLE `klient` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefon` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `biuro`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id`);
COMMIT;