-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
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

-- Dumping structure for table contacttlu.category
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table contacttlu.category: ~0 rows (approximately)
INSERT INTO `category` (`category_id`, `category_name`) VALUES
	(1, 'Hoạt động chung'),
	(2, 'Công tác đảng và đoàn thể'),
	(3, 'Tuyển sinh - Đào tạo'),
	(4, 'Khoa học - công nghệ'),
	(5, 'Hợp tác đối ngoại'),
	(6, 'Kiểm định - Xếp hạng'),
	(7, 'Tổ chức - Nhân sự'),
	(8, 'Truyền thông');

-- Dumping structure for table contacttlu.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `DepartmentID` int NOT NULL AUTO_INCREMENT,
  `DepartmentName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MobilePhone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Logo` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `ParentDepartmentID` int DEFAULT NULL,
  PRIMARY KEY (`DepartmentID`),
  KEY `ParentDepartmentID` (`ParentDepartmentID`),
  CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`ParentDepartmentID`) REFERENCES `departments` (`DepartmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table contacttlu.departments: ~10 rows (approximately)
INSERT INTO `departments` (`DepartmentID`, `DepartmentName`, `Address`, `Email`, `MobilePhone`, `Logo`, `Website`, `ParentDepartmentID`) VALUES
	(1, 'Sales Department', '123 Main Street, City', './public/assets/images/image1.jpg', '1234567890', './public/assets/images/image1.jpg', 'https://www.sales.com', NULL),
	(2, 'Marketing Department', '456 Market Avenue, Town', 'mk@example.com', '0987654321', './public/assets/images/image1.jpg', 'https://www.marketing.com', NULL),
	(3, 'HR Department', '789 HR Boulevard, Metropolis', 'hr@example.com', '1122334455', './public/assets/images/image1.jpg', 'https://www.hr.com', NULL),
	(4, 'IT Department', '101 Tech Lane, Silicon Valley', 'it@example.com', '5544332211', './public/assets/images/image1.jpg', 'https://www.it.com', NULL),
	(5, 'Sales Department', '123 Main Street, City', 'it@example.com', '1234567890', './public/assets/images/image1.jpg', 'https://www.sales.com', NULL),
	(6, 'Marketing Department', '456 Market Avenue, Town', 'it@example.com', '0987654321', './public/assets/images/image1.jpg', 'https://www.marketing.com', NULL),
	(7, 'HR Department', '789 HR Boulevard, Metropolis', 'it@example.com', '1122334455', './public/assets/images/image1.jpg', 'https://www.hr.com', NULL),
	(8, 'IT Department', '101 Tech Lane, Silicon Valley', 'it@example.com', '5544332211', './public/assets/images/image1.jpg', 'https://www.it.com', NULL),
	(9, 'Sales Department', '123 Main Street, City', 'it@example.com', '1234567890', './public/assets/images/image1.jpg', 'https://www.sales.com', NULL),
	(10, 'Marketing Department', '456 Market Avenue, Town', 'it@example.com', '0987654321', './public/assets/images/image1.jpg', 'https://www.marketing.com', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table contacttlu.employees: ~11 rows (approximately)
INSERT INTO `employees` (`EmployeeID`, `FullName`, `Address`, `Email`, `MobilePhone`, `Position`, `Avatar`, `DepartmentID`) VALUES
	(1, 'John Doe', '123 Main Street, City', 'john.doe@example.com', '1234567890', 'Sales Manager', './public/assets/images/image1.jpg', 1),
	(2, 'Jane Smith', '456 Market Avenue, Town', 'it@example.com', '0987654321', 'Marketing Specialist', './public/assets/images/image1.jpg', 2),
	(3, 'Bob Johnson', '789 HR Boulevard, Metropolis', 'bob.johnson@example.com', '1122334455', 'HR Coordinator', './public/assets/images/image1.jpg', 3),
	(4, 'Alice Williams', '101 Tech Lane, Silicon Valley', 'alice.williams@example.com', '5544332211', 'IT Technician', './public/assets/images/image1.jpg', 4),
	(41, 'John Doe', '123 Main Street, City', 'it@example.com', '1234567890', 'Sales Manager', './public/assets/images/image1.jpg', 1),
	(42, 'Jane Smith', '456 Market Avenue, Town', 'it@example.com', '0987654321', 'Marketing Specialist', './public/assets/images/image1.jpg', 2),
	(43, 'Bob Johnson', '789 HR Boulevard, Metropolis', 'it@example.com', '1122334455', 'HR Coordinator', './public/assets/images/image1.jpg', 3),
	(44, 'Alice Williams', '101 Tech Lane, Silicon Valley', 'it@example.com', '5544332211', 'IT Technician', './public/assets/images/image1.jpg', 4),
	(45, 'John Doe', '123 Main Street, City', 'it@example.com', '1234567890', 'Sales Manager', './public/assets/images/image1.jpg', 1),
	(46, 'Jane Smith', '456 Market Avenue, Town', 'it@example.com', '0987654321', 'Marketing Specialist', './public/assets/images/image1.jpg', 2),
	(47, 'Bob Johnson', '789 HR Boulevard, Metropolis', 'it@example.com', '1122334455', 'HR Coordinator', './public/assets/images/image1.jpg', 3);

-- Dumping structure for table contacttlu.news
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `publish_date` date DEFAULT NULL,
  `link_img` varchar(255) DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`news_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table contacttlu.news: ~0 rows (approximately)
INSERT INTO `news` (`news_id`, `title`, `content`, `publish_date`, `link_img`, `category_id`) VALUES
	(1, 'Khám phá vùng biển mới: Một cuộc hành trình đầy mạo hiểm', 'Trong một cuộc hành trình đầy mạo hiểm, nhóm nhà thám hiểm đã khám phá ra một vùng biển mới tại vùng Đông Nam Á. Dưới đáy biển sâu, họ phát hiện ra những loài sinh vật độc đáo và kỳ lạ mà trước đây chưa từng được ghi nhận. Khám phá này mở ra một thế giới mới với những khám phá khoa học và nguồn lợi tài nguyên đáng kinh ngạc.', '2024-03-01', 'link_hinh1.jpg', 1),
	(2, 'Sự trỗi dậy của công nghệ AI trong ngành y tế', 'Công nghệ Trí tuệ nhân tạo (AI) đang trỗi dậy trong lĩnh vực y tế, mở ra những cơ hội mới trong việc chẩn đoán bệnh và điều trị. Các hệ thống AI được phát triển để phát hiện các dấu hiệu của bệnh ung thư và các bệnh lý khác ở mức độ sớm, giúp cải thiện dự đoán và điều trị cho bệnh nhân.', '2024-03-02', 'link_hinh2.jpg', 1),
	(3, 'Cuộc cách mạng trong ngành nông nghiệp: Sự ra đời của nông trại thông minh', 'Nông trại thông minh, với sự kết hợp của IoT (Internet of Things) và các công nghệ khác như trí tuệ nhân tạo, đã tạo ra một cuộc cách mạng trong ngành nông nghiệp. Các nông trại thông minh không chỉ giúp tăng năng suất mà còn giảm thiểu lãng phí tài nguyên và ô nhiễm môi trường, đồng thời mang lại lợi ích kinh tế cho các nông dân.', '2024-03-03', 'link_hinh3.jpg', 1),
	(4, 'Công nghệ blockchain: Một cách tiến bộ trong quản lý dữ liệu', 'Công nghệ blockchain đang trở thành một cách tiến bộ trong quản lý dữ liệu, không chỉ trong lĩnh vực tài chính mà còn trong nhiều lĩnh vực khác như logistik, y tế, và chính phủ. Blockchain cung cấp sự minh bạch, bảo mật và tính toàn vẹn dữ liệu, giúp tăng cường quản lý và bảo vệ thông tin cá nhân.', '2024-03-04', 'link_hinh4.jpg', 1),
	(5, 'Thách thức mới đối với du lịch bền vững: Bảo vệ môi trường và văn hóa địa phương', 'Trong bối cảnh tăng trưởng nhanh chóng của ngành du lịch, việc bảo vệ môi trường và văn hóa địa phương trở thành một thách thức đối với du lịch bền vững. Các biện pháp bảo vệ môi trường và khuyến khích sự tương tác với cộng đồng địa phương đang được đưa ra nhằm giữ cho du lịch bền vững trở thành một lựa chọn ưu tiên.', '2024-03-05', 'link_hinh5.jpg', 3),
	(6, 'Cuộc cách mạng trong giáo dục: Sự phát triển của học tập trực tuyến', 'Sự phát triển của công nghệ đã tạo ra một cuộc cách mạng trong giáo dục, với sự phổ biến ngày càng tăng của học tập trực tuyến. Các nền tảng học tập trực tuyến cung cấp cơ hội học tập linh hoạt và tiếp cận với kiến thức từ mọi nơi, mọi lúc, giúp nâng cao trình độ học vấn cho mọi người.', '2024-03-06', 'link_hinh6.jpg', 2),
	(7, 'Sức mạnh của năng lượng mặt trời: Hướng tới một tương lai bền vững', 'Năng lượng mặt trời đang trở thành một phương tiện quan trọng trong việc giảm thiểu ô nhiễm và xây dựng một tương lai bền vững. Công nghệ mới và sự đầu tư vào hạ tầng năng lượng mặt trời đang giúp tăng cường hiệu suất và giảm giá thành, tạo điều kiện cho sự phát triển nhanh chóng của nguồn năng lượng sạch.', '2024-03-07', 'link_hinh7.jpg', 7),
	(8, 'Cách thức sử dụng công nghệ', 'Công nghệ không ngừng phát triển và cách chúng ta sử dụng nó cũng ngày càng đa dạng. Từ ứng dụng di động đến trí tuệ nhân tạo, công nghệ đang thay đổi cách chúng ta làm việc, giải trí và tương tác với nhau.', '2024-03-08', 'link_hinh8.jpg', 7),
	(9, 'Công nghệ và cách thức sử dụng nó', 'Công nghệ không chỉ là một công cụ mà còn là một phần không thể thiếu trong cuộc sống hàng ngày của chúng ta. Bài viết này sẽ khám phá cách mà công nghệ đang thay đổi và ảnh hưởng đến cuộc sống của chúng ta.', '2024-03-09', 'link_hinh9.jpg', 6),
	(10, 'Cuộc cách mạng trong công nghệ', 'Công nghệ đang trải qua một cuộc cách mạng mạnh mẽ, từ sự phổ biến của Internet cho đến sự ra đời của trí tuệ nhân tạo và máy học. Những thay đổi này đang tạo ra những cơ hội mới và thách thức cho xã hội và kinh tế.', '2024-03-10', 'link_hinh10.jpg', 7),
	(11, 'Những khám phá mới trong khoa học', 'Khoa học không ngừng phát triển và các nhà khoa học trên khắp thế giới đang tiếp tục khám phá những điều mới mẻ về vũ trụ, nguyên tử và cả cuộc sống trên trái đất. Bài viết này sẽ đưa bạn đi sâu vào những khám phá mới nhất trong lĩnh vực khoa học.', '2024-03-11', 'link_hinh11.jpg', 2),
	(12, 'Tiên tiến trong y học: Công nghệ mới đưa ra những cơ hội mới', 'Công nghệ đang đóng vai trò quan trọng trong việc cải thiện chăm sóc sức khỏe và điều trị bệnh. Từ máy chẩn đoán thông minh đến robot phẫu thuật, các tiến bộ trong y học đang mở ra những cơ hội mới cho người bệnh và nhà y học.', '2024-03-12', 'link_hinh12.jpg', 5),
	(13, 'Khám phá vùng biển mới: Một cuộc hành trình đầy mạo hiểm', 'Trong một cuộc hành trình đầy mạo hiểm, nhóm nhà thám hiểm đã khám phá ra một vùng biển mới tại vùng Đông Nam Á. Dưới đáy biển sâu, họ phát hiện ra những loài sinh vật độc đáo và kỳ lạ mà trước đây chưa từng được ghi nhận. Khám phá này mở ra một thế giới mới với những khám phá khoa học và nguồn lợi tài nguyên đáng kinh ngạc.', '2024-03-01', 'link_hinh1.jpg', 1),
	(14, 'Sự trỗi dậy của công nghệ AI trong ngành y tế', 'Công nghệ Trí tuệ nhân tạo (AI) đang trỗi dậy trong lĩnh vực y tế, mở ra những cơ hội mới trong việc chẩn đoán bệnh và điều trị. Các hệ thống AI được phát triển để phát hiện các dấu hiệu của bệnh ung thư và các bệnh lý khác ở mức độ sớm, giúp cải thiện dự đoán và điều trị cho bệnh nhân.', '2024-03-02', 'link_hinh2.jpg', 8),
	(15, 'Cuộc cách mạng trong ngành nông nghiệp: Sự ra đời của nông trại thông minh', 'Nông trại thông minh, với sự kết hợp của IoT (Internet of Things) và các công nghệ khác như trí tuệ nhân tạo, đã tạo ra một cuộc cách mạng trong ngành nông nghiệp. Các nông trại thông minh không chỉ giúp tăng năng suất mà còn giảm thiểu lãng phí tài nguyên và ô nhiễm môi trường, đồng thời mang lại lợi ích kinh tế cho các nông dân.', '2024-03-03', 'link_hinh3.jpg', 3),
	(16, 'Công nghệ blockchain: Một cách tiến bộ trong quản lý dữ liệu', 'Công nghệ blockchain đang trở thành một cách tiến bộ trong quản lý dữ liệu, không chỉ trong lĩnh vực tài chính mà còn trong nhiều lĩnh vực khác như logistik, y tế, và chính phủ. Blockchain cung cấp sự minh bạch, bảo mật và tính toàn vẹn dữ liệu, giúp tăng cường quản lý và bảo vệ thông tin cá nhân.', '2024-03-04', 'link_hinh4.jpg', 6),
	(17, 'Thách thức mới đối với du lịch bền vững: Bảo vệ môi trường và văn hóa địa phương', 'Trong bối cảnh tăng trưởng nhanh chóng của ngành du lịch, việc bảo vệ môi trường và văn hóa địa phương trở thành một thách thức đối với du lịch bền vững. Các biện pháp bảo vệ môi trường và khuyến khích sự tương tác với cộng đồng địa phương đang được đưa ra nhằm giữ cho du lịch bền vững trở thành một lựa chọn ưu tiên.', '2024-03-05', 'link_hinh5.jpg', 5),
	(18, 'Cuộc cách mạng trong giáo dục: Sự phát triển của học tập trực tuyến', 'Sự phát triển của công nghệ đã tạo ra một cuộc cách mạng trong giáo dục, với sự phổ biến ngày càng tăng của học tập trực tuyến. Các nền tảng học tập trực tuyến cung cấp cơ hội học tập linh hoạt và tiếp cận với kiến thức từ mọi nơi, mọi lúc, giúp nâng cao trình độ học vấn cho mọi người.', '2024-03-06', 'link_hinh6.jpg', 6),
	(19, 'Sức mạnh của năng lượng mặt trời: Hướng tới một tương lai bền vững', 'Năng lượng mặt trời đang trở thành một phương tiện quan trọng trong việc giảm thiểu ô nhiễm và xây dựng một tương lai bền vững. Công nghệ mới và sự đầu tư vào hạ tầng năng lượng mặt trời đang giúp tăng cường hiệu suất và giảm giá thành, tạo điều kiện cho sự phát triển nhanh chóng của nguồn năng lượng sạch.', '2024-03-07', 'link_hinh7.jpg', 7),
	(20, 'Khám phá vùng biển mới: Một cuộc hành trình đầy mạo hiểm', 'Trong một cuộc hành trình đầy mạo hiểm, nhóm nhà thám hiểm đã khám phá ra một vùng biển mới tại vùng Đông Nam Á. Dưới đáy biển sâu, họ phát hiện ra những loài sinh vật độc đáo và kỳ lạ mà trước đây chưa từng được ghi nhận. Khám phá này mở ra một thế giới mới với những khám phá khoa học và nguồn lợi tài nguyên đáng kinh ngạc.', '2024-03-01', 'link_hinh1.jpg', 8),
	(21, 'Sự trỗi dậy của công nghệ AI trong ngành y tế', 'Công nghệ Trí tuệ nhân tạo (AI) đang trỗi dậy trong lĩnh vực y tế, mở ra những cơ hội mới trong việc chẩn đoán bệnh và điều trị. Các hệ thống AI được phát triển để phát hiện các dấu hiệu của bệnh ung thư và các bệnh lý khác ở mức độ sớm, giúp cải thiện dự đoán và điều trị cho bệnh nhân.', '2024-03-02', 'link_hinh2.jpg', 2),
	(22, 'Cuộc cách mạng trong ngành nông nghiệp: Sự ra đời của nông trại thông minh', 'Nông trại thông minh, với sự kết hợp của IoT (Internet of Things) và các công nghệ khác như trí tuệ nhân tạo, đã tạo ra một cuộc cách mạng trong ngành nông nghiệp. Các nông trại thông minh không chỉ giúp tăng năng suất mà còn giảm thiểu lãng phí tài nguyên và ô nhiễm môi trường, đồng thời mang lại lợi ích kinh tế cho các nông dân.', '2024-03-03', 'link_hinh3.jpg', 2),
	(23, 'Công nghệ blockchain: Một cách tiến bộ trong quản lý dữ liệu', 'Công nghệ blockchain đang trở thành một cách tiến bộ trong quản lý dữ liệu, không chỉ trong lĩnh vực tài chính mà còn trong nhiều lĩnh vực khác như logistik, y tế, và chính phủ. Blockchain cung cấp sự minh bạch, bảo mật và tính toàn vẹn dữ liệu, giúp tăng cường quản lý và bảo vệ thông tin cá nhân.', '2024-03-04', 'link_hinh4.jpg', 3),
	(24, 'Thách thức mới đối với du lịch bền vững: Bảo vệ môi trường và văn hóa địa phương', 'Trong bối cảnh tăng trưởng nhanh chóng của ngành du lịch, việc bảo vệ môi trường và văn hóa địa phương trở thành một thách thức đối với du lịch bền vững. Các biện pháp bảo vệ môi trường và khuyến khích sự tương tác với cộng đồng địa phương đang được đưa ra nhằm giữ cho du lịch bền vững trở thành một lựa chọn ưu tiên.', '2024-03-05', 'link_hinh5.jpg', 8),
	(25, 'Cuộc cách mạng trong giáo dục: Sự phát triển của học tập trực tuyến', 'Sự phát triển của công nghệ đã tạo ra một cuộc cách mạng trong giáo dục, với sự phổ biến ngày càng tăng của học tập trực tuyến. Các nền tảng học tập trực tuyến cung cấp cơ hội học tập linh hoạt và tiếp cận với kiến thức từ mọi nơi, mọi lúc, giúp nâng cao trình độ học vấn cho mọi người.', '2024-03-06', 'link_hinh6.jpg', 1),
	(26, 'Sức mạnh của năng lượng mặt trời: Hướng tới một tương lai bền vững', 'Năng lượng mặt trời đang trở thành một phương tiện quan trọng trong việc giảm thiểu ô nhiễm và xây dựng một tương lai bền vững. Công nghệ mới và sự đầu tư vào hạ tầng năng lượng mặt trời đang giúp tăng cường hiệu suất và giảm giá thành, tạo điều kiện cho sự phát triển nhanh chóng của nguồn năng lượng sạch.', '2024-03-07', 'link_hinh7.jpg', 4);

-- Dumping structure for table contacttlu.users
CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `EmployeeID` int DEFAULT NULL,
  KEY `EmployeeID` (`EmployeeID`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table contacttlu.users: ~3 rows (approximately)
INSERT INTO `users` (`Username`, `Password`, `Role`, `EmployeeID`) VALUES
	('admin', 'admin123', 'admin', 1),
	('user1', 'user123', 'user', 2),
	('user2', 'user456', 'user', 3);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
