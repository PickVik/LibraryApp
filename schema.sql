SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Library`
--

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE `USER` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `SecondName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `BookLimit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USER`
--

INSERT INTO `USER` (`ID`, `Email`, `FirstName`, `SecondName`, `Password`, `Admin`, `BookLimit`) VALUES
(1, 'ada.lovelace@gmail.com', 'Ada', 'Lovelace', 'Ilovemaths', 0, 1),
(2, 'KJ@nasa.com', 'Katherine', 'Johnson', 'Ilovespace', 0, 2),
(3, 'Bob@thelibrary.com', 'Bob', 'Tweed', 'Ilovebooks', 1, 2),
(4, 'clarkie@library.com', 'Clarkie', 'Clarke', 'Ilovecds', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `USER`
--
ALTER TABLE `USER`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;/INSERT INTO `USER`( `Email`, `FirstName`, `SecondName`, `Password`, `Admin`, `BookLimit`) VALUES ("Bob@thelibrary.com", "Bob", "Tweed", "Ilovebooks", 1, 2), ("clarkie@library.com", "Clarkie", "Clarke", "Ilovecds", 1, 2)