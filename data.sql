SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `login`;


CREATE TABLE IF NOT EXISTS `tbl_members` (
  `ID` int(15) NOT NULL AUTO_INCREMENT,
  `userName` varchar(31) NOT NULL,
  `emailID` varchar(31) NOT NULL,
  `pass` varchar(31) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `mID` (`userName`,`emailID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;


