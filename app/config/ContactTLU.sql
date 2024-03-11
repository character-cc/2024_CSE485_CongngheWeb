-- --------------------------------------------------------
-- Máy chủ:                      127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Phiên bản:           12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for contacttlu
CREATE DATABASE IF NOT EXISTS `contacttlu` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `contacttlu`;

-- Dumping structure for table contacttlu.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `DepartmentID` int NOT NULL AUTO_INCREMENT,
  `DepartmentName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Logo` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `ParentDepartmentID` int DEFAULT NULL,
  PRIMARY KEY (`DepartmentID`),
  KEY `ParentDepartmentID` (`ParentDepartmentID`),
  CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`ParentDepartmentID`) REFERENCES `departments` (`DepartmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table contacttlu.departments: ~4 rows (approximately)
INSERT INTO `departments` (`DepartmentID`, `DepartmentName`, `Address`, `Email`, `Phone`, `Logo`, `Website`, `ParentDepartmentID`) VALUES
	(1, 'Sales Department', '123 Main Street, City', 'sales@example.com', '1234567890', 'logo_sales.png', 'https://www.sales.com', NULL),
	(2, 'Marketing Department', '456 Market Avenue, Town', 'marketing@example.com', '0987654321', 'logo_marketing.png', 'https://www.marketing.com', NULL),
	(3, 'HR Department', '789 HR Boulevard, Metropolis', 'hr@example.com', '1122334455', 'logo_hr.png', 'https://www.hr.com', NULL),
	(4, 'IT Department', '101 Tech Lane, Silicon Valley', 'it@example.com', '5544332211', 'logo_it.png', 'https://www.it.com', NULL);

-- Dumping structure for table contacttlu.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `EmployeeID` int NOT NULL AUTO_INCREMENT,
  `FullName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MobilePhone` varchar(10) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  `DepartmentID` int DEFAULT NULL,
  PRIMARY KEY (`EmployeeID`),
  KEY `DepartmentID` (`DepartmentID`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`DepartmentID`) REFERENCES `departments` (`DepartmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table contacttlu.employees: ~4 rows (approximately)
INSERT INTO `employees` (`EmployeeID`, `FullName`, `Address`, `Email`, `MobilePhone`, `Position`, `Avatar`, `DepartmentID`) VALUES
	(1, 'John Doe', '123 Main Street, City', 'john.doe@example.com', '1234567890', 'Sales Manager', 'avatar_johndoe.png', 1),
	(2, 'Jane Smith', '456 Market Avenue, Town', 'jane.smith@example.com', '0987654321', 'Marketing Specialist', 'avatar_janesmith.png', 2),
	(3, 'Bob Johnson', '789 HR Boulevard, Metropolis', 'bob.johnson@example.com', '1122334455', 'HR Coordinator', 'avatar_bobjohnson.png', 3),
	(4, 'Alice Williams', '101 Tech Lane, Silicon Valley', 'alice.williams@example.com', '5544332211', 'IT Technician', 'avatar_alicewilliams.png', 4);

-- Dumping structure for table contacttlu.user
CREATE TABLE IF NOT EXISTS `user` (
  `Username` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `ROLE` enum('admin','user') NOT NULL,
  `EmployeeID` int DEFAULT NULL,
  KEY `EmployeeID` (`EmployeeID`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table contacttlu.user: ~3 rows (approximately)
INSERT INTO `user` (`Username`, `PASSWORD`, `ROLE`, `EmployeeID`) VALUES
	('admin', 'admin123', 'admin', 1),
	('user1', 'user123', 'user', 2),
	('user2', 'user456', 'user', 3);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
