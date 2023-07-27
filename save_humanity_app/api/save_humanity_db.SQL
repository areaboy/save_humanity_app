CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `timing` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `title` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sms_username` varchar(200) DEFAULT NULL,
  `sms_password` varchar(200) DEFAULT NULL,
  `google_api_key` varchar(200) DEFAULT NULL,
  `smtp_email_host` varchar(100) DEFAULT NULL,
  `smtp_email_username` varchar(100) DEFAULT NULL,
  `smtp_email_password` varchar(100) DEFAULT NULL,
  `smtp_email_port` varchar(30) DEFAULT NULL,
  `data_type` varchar(30) DEFAULT NULL,
  `admin_name` varchar(200) DEFAULT NULL,
  `admin_email` varchar(200) DEFAULT NULL,
  `admin_phone_no` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `timing` varchar(200) DEFAULT NULL,
  `token1` text DEFAULT NULL,
  `token2` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `welfare_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `case_no` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `report_type` varchar(100) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL,
  `timing` varchar(200) DEFAULT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `sms_count` varchar(20) DEFAULT NULL,
  `email_count` varchar(20) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;