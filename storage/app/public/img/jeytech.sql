-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 12:38 PM
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
-- Database: `jeytech`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slag` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `author` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `except` varchar(400) NOT NULL,
  `tags` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slag`, `category`, `author`, `cover`, `content`, `except`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'Empowering the Future: Unveiling the Wonders of IoT', 'empowering-the-future-unveiling-the-wonders-of-iot', 'IoT', 1, '1702884427.jpg', '<p>The world is undergoing a revolutionary transformation, and at the heart of this change is the Internet of Things (IoT). IoT is not just a technological trend; it\'s a paradigm shift that is reshaping the way we live, work, and interact with the world around us. In this blog post, we will delve into the intricacies of IoT, exploring its applications, impact on various industries, and the exciting possibilities it holds for the future.</p><p><strong><u>I. Understanding IoT:</u></strong><br>At its core, IoT is a network of interconnected devices that communicate and share data seamlessly over the internet. These devices can range from everyday objects like refrigerators and thermostats to complex systems in industrial settings. The key to IoT lies in the ability of these devices to collect and exchange information, paving the way for smart, data-driven decision-making.</p><p><strong><u>II. Applications of IoT:</u></strong><br>1. <strong>Smart Homes:</strong> Imagine a home where your thermostat adjusts itself based on your preferences, lights turn on and off as you enter or leave a room, and appliances operate more efficiently. IoT is making this a reality, creating intelligent and interconnected homes that enhance comfort and energy efficiency.</p><p>2. <strong>Healthcare</strong>: IoT is revolutionizing healthcare by enabling remote patient monitoring, smart medical devices, and real-time health data analysis. Wearable devices and sensors provide continuous health monitoring, allowing for proactive healthcare interventions and personalized treatment plans.</p><p>3. <strong>Smart Cities</strong>: Cities around the world are adopting IoT to enhance urban living. Smart traffic management, waste management, and energy-efficient street lighting are just a few examples of how IoT is transforming cities into more sustainable and livable spaces.</p><p>4. <strong>Industrial IoT (IIoT)</strong>: In the industrial sector, IoT is optimizing processes, improving efficiency, and reducing downtime. Connected sensors on machinery provide real-time data, enabling predictive maintenance and minimizing disruptions to production.</p><p>III. Impact on Industries:<br>1. <strong>Manufacturing</strong>: IoT is driving the fourth industrial revolution, also known as Industry 4.0. Smart factories equipped with IoT technologies are more agile, responsive, and capable of producing high-quality products with minimal waste.</p><p>2. <strong>Retail</strong>: In the retail sector, IoT is enhancing the customer experience through personalized shopping, smart inventory management, and cashier-less checkout systems.</p><p>3. <strong>Agriculture</strong>: Precision agriculture powered by IoT is transforming farming practices. Sensors in the field collect data on soil conditions, weather patterns, and crop health, enabling farmers to optimize resource usage and improve crop yields.</p><p><strong><u>IV. Challenges and Security:</u></strong><br>While the potential of IoT is immense, it also brings challenges, especially concerning data privacy and security. With a vast number of interconnected devices, ensuring the protection of sensitive information and preventing unauthorized access is paramount.</p><p><strong><u>V. The Future of IoT:</u></strong><br>As technology continues to advance, the future of IoT holds even more promise. Edge computing, 5G connectivity, and advancements in artificial intelligence will further enhance the capabilities of IoT devices, leading to a more interconnected and intelligent world.</p><p>The Internet of Things is not just a buzzword; it\'s a transformative force that is reshaping our world. From smart homes to connected industries, IoT is unlocking new possibilities and paving the way for a more efficient, sustainable, and interconnected future. As we navigate this digital revolution, embracing the potential of IoT will be key to unlocking a myriad of benefits for individuals, businesses, and society as a whole.</p>', 'The world is undergoing a revolutionary transformation, and at the heart of this change is the IoT. IoT is not just a technological trend; it\'s a paradigm shift that is reshaping the way we live, work, and interact with the world around us.', '[\"IoT\",\"Future\"]', '2023-12-18 07:27:07', '2023-12-18 07:27:07'),
(2, 'Exploring the Invisible Heroes: The Role of Embedded Systems in our Daily Lives', 'exploring-the-invisible-heroes-the-role-of-embedded-systems-in-our-daily-lives', 'Industrial Automation', 1, '1702885257.jpg', '<p>In the digital age, embedded systems are the unsung heroes working quietly behind the scenes, powering countless devices and applications that we rely on daily. From the smartwatch on your wrist to the control systems in your car, embedded systems play a pivotal role in shaping the modern world. This blog post will take you on a journey into the fascinating world of embedded systems, shedding light on their applications, challenges, and the impact they have on our lives.</p><p><strong>I. Understanding Embedded Systems:</strong><br>Embedded systems are specialized computing systems designed to perform dedicated functions within a larger mechanical or electrical system. Unlike general-purpose computers, these systems are purpose-built for specific tasks and are often embedded into everyday devices, making them an integral part of our surroundings.</p><p><strong>II. Applications of Embedded Systems:</strong><br>1. <i><strong>Consumer Electronics:</strong></i> From smart TVs and refrigerators to washing machines and fitness trackers, embedded systems are at the heart of modern consumer electronics. They enhance user experience, provide connectivity, and enable seamless interaction with the devices we use daily.</p><p>2. <i><strong>Automotive Industry:</strong></i> Embedded systems are a driving force in the automotive sector, powering everything from engine control units and anti-lock braking systems to in-car entertainment and navigation systems. The rise of electric and autonomous vehicles further underscores the importance of embedded systems in shaping the future of transportation.</p><p>3. <i><strong>Medical Devices:</strong></i> In healthcare, embedded systems play a critical role in medical devices such as pacemakers, insulin pumps, and diagnostic equipment. These systems contribute to improved patient care, diagnostics, and the overall efficiency of medical processes.</p><p>4. <i><strong>Industrial Automation:</strong></i> Embedded systems are the backbone of industrial automation, controlling machinery, monitoring processes, and ensuring precision in manufacturing. Programmable Logic Controllers (PLCs) and Supervisory Control and Data Acquisition (SCADA) systems are common examples in industrial settings.</p><p><strong>III. Challenges in Embedded Systems:</strong><br>Despite their widespread use, embedded systems face unique challenges. Limited resources, real-time constraints, and the need for energy efficiency pose design complexities. Additionally, ensuring the security and reliability of embedded systems is crucial, especially in applications where safety is paramount.</p><p><strong>IV. Emerging Trends in Embedded Systems:</strong><br>1. <i><strong>Internet of Things (IoT)</strong></i>: The integration of embedded systems with IoT is a transformative trend. Connecting devices and enabling them to communicate with each other over the internet opens up new possibilities for smart homes, cities, and industries.</p><p>2. <i><strong>Edge Computing:</strong></i> With the growing demand for real-time processing and reduced latency, edge computing is becoming increasingly important in the realm of embedded systems. This approach involves processing data closer to the source, improving efficiency and responsiveness.</p><p><strong>V. The Future of Embedded Systems:</strong><br>As technology continues to advance, the future of embedded systems is poised for exciting developments. Enhanced connectivity, artificial intelligence integration, and advancements in low-power design will further expand the capabilities of embedded systems, making them even more integral to our daily lives.</p><p>Embedded systems may operate silently, hidden from the user\'s view, but their impact is profound and far-reaching. From improving the functionality of everyday devices to driving innovation in diverse industries, embedded systems are the invisible force shaping our digital landscape. As we embrace a future filled with smart technologies, understanding and appreciating the role of embedded systems becomes essential for navigating the ever-evolving world of technology.</p>', 'In the digital age, embedded systems are the unsung heroes working quietly behind the scenes, powering countless devices and applications that we rely on. Embedded systems play a pivotal role in shaping the modern world. This blog post will take you on a journey into the fascinating world of embedded systems, shedding light on their applications, challenges, and the impact they have on lives.', '[\"Embedded Systems\",\" IoT\",\" Industrial evolution\"]', '2023-12-18 07:40:57', '2023-12-18 07:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `name`, `email`, `comment_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'Abimon', 'eddyabby@gmail.com', NULL, 'Great one', '2023-12-18 09:56:07', '2023-12-18 09:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_14_162827_create_articles_table', 2),
(6, '2023_12_14_163630_create_comments_table', 2),
(7, '2023_12_14_173936_create_likes_table', 3),
(8, '2023_12_14_192827_create_articles_table', 4),
(9, '2023_12_14_222827_create_articles_table', 5),
(10, '2023_12_15_133221_create_updates_table', 6),
(11, '2023_12_15_140508_create_portfolios_table', 6),
(12, '2023_12_15_141251_create_testimonials_table', 6),
(13, '2023_12_15_141327_create_subscribers_table', 6),
(14, '2023_12_18_094621_create_partners_table', 7),
(15, '2023_12_14_174630_create_comments_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `logo`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Hello Tractors', '1702888371.png', 'Kenya', '2023-12-18 08:32:51', '2023-12-18 08:32:51'),
(2, 'UrbanLink Properties', '1702888858.png', 'Kenya', '2023-12-18 08:40:58', '2023-12-18 08:40:58'),
(3, 'EShop', '1702888941.png', 'Kenya', '2023-12-18 08:42:21', '2023-12-18 08:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `cover`, `details`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Smart Home Automation Project: A Glimpse into the Future of Living', '1702897872.jpg', '<p>In our recent IoT project, we embarked on a journey to transform traditional homes into intelligent, connected spaces. Leveraging the power of the Internet of Things (IoT), we seamlessly integrated smart devices and sensors to create a comprehensive home automation system. Residents now enjoy the convenience of controlling lighting, climate, security, and entertainment with a single touch or voice command.</p><p>Our project focused on enhancing energy efficiency, security, and overall comfort. Smart thermostats automatically adjust temperatures based on occupancy patterns, optimizing energy consumption. Connected security cameras and sensors provide real-time monitoring and alerts, ensuring a secure living environment. Additionally, the integration of voice-activated assistants and smart speakers adds a layer of convenience, allowing residents to interact with their homes in an intuitive and natural way.</p><p>The success of this IoT project not only showcases the capabilities of connected technologies but also demonstrates the potential for creating intelligent, responsive environments that adapt to the needs and preferences of inhabitants. As we move forward, the lessons learned from this project will undoubtedly shape the future of smart home solutions, contributing to a more efficient, secure, and enjoyable way of living.</p>', 'Smart Home Automation Project: A Glimpse into the Future of Living', '2023-12-18 11:11:12', '2023-12-18 11:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `statement` varchar(400) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `email`, `phone`, `company`, `position`, `path`, `statement`, `created_at`, `updated_at`) VALUES
(1, 'Edimon Ombati', 'eabimon@gmail.com', '0701583807', 'APEK Inc.', 'Founder & CEO', '1702891193.jpg', 'Working with Jeytech Precisions Limited has been an absolute game-changer for our business. Their commitment to excellence, innovative solutions, and unwavering professionalism have exceeded our expectations. It\'s more than a partnership; it\'s a collaboration that we value and trust. Thank you for being an indispensable asset to our success.', '2023-12-18 09:19:53', '2023-12-18 09:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `summary` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `title`, `cover`, `details`, `summary`, `created_at`, `updated_at`) VALUES
(1, 'Recruitment of Office workers', '1702886630.jpg', '<p>🌟 <strong>Join Our Team as Operations Manager!</strong> 🌟</p><p>Are you a strategic thinker with a passion for optimizing processes and driving efficiency? We\'re on the lookout for an exceptional Operations Manager to lead our dynamic team and shape the future of our organization.</p><p><strong>Why Us?</strong><br>🚀 <i><strong>Innovative Environment:</strong> </i>Join a forward-thinking company that values creativity, innovation, and a proactive approach to operations management.</p><p>🌐 <i><strong>Global Impact:</strong></i> Contribute to a team that is making a difference on a global scale. Your skills will play a vital role in shaping the success of our projects.</p><p>💼 <i><strong>Career Growth: </strong></i>Unlock your potential in an environment that fosters professional development. We invest in our team members and provide opportunities for advancement.</p><p><strong>What You\'ll Do:</strong><br>🔧 <i><strong>Optimize Processes:</strong></i> Streamline our operations for maximum efficiency, identifying areas for improvement and implementing strategic solutions.</p><p>🤝 <i><strong>Team Leadership:</strong></i> Inspire and lead a talented team, fostering collaboration and ensuring seamless communication across departments.</p><p>📊 <i><strong>Data-Driven Decision-Making:</strong></i> Utilize data to make informed decisions, driving performance improvements and achieving operational excellence.</p><p>🌐 <i><strong>Global Collaboration:</strong></i> Collaborate with teams across different locations, ensuring a cohesive and synchronized approach to operations.</p><p><strong>What We\'re Looking For:</strong><br>🎓 <i><strong>Experience:</strong></i> Proven track record in operations management with a minimum of [X] years of experience.</p><p>💡 <i><strong>Innovative Thinker:</strong></i> Bring fresh ideas to the table and a willingness to embrace new approaches in operations.</p><p>🤝 <i><strong>Leadership Skills:</strong></i> Inspire and motivate teams to achieve common goals, fostering a positive and collaborative work environment.</p><p>📈 <i><strong>Results-Driven:</strong></i> A commitment to achieving measurable results and driving continuous improvement.</p><p>**How to Apply:**<br>Ready to take your career to the next level? Send your resume and a cover letter highlighting your relevant experience to <a href=\"mailto:careers@precisionjeytech.com\">careers@precisionjeytech.com</a> . Be sure to include \"Operations Manager Application\" in the subject line.</p><p>Join us on our exciting journey as we continue to make a meaningful impact through strategic operations and innovation. Your skills are the missing piece to our puzzle! 🚀 #OperationsManager #JoinOurTeam #CareerOpportunity 🌐</p>', 'We\'re on the lookout for an exceptional Operations Manager to lead our dynamic team and shape the future of our organization.', '2023-12-18 08:03:50', '2023-12-18 08:03:50'),
(2, 'Recruitment of Office workers', '1702887890.jpg', '<p>🌟 <strong>Join Our Team as Operations Manager!</strong> 🌟</p><p>Are you a strategic thinker with a passion for optimizing processes and driving efficiency? We\'re on the lookout for an exceptional Operations Manager to lead our dynamic team and shape the future of our organization.</p><p><strong>Why Us?</strong><br>🚀 <i><strong>Innovative Environment:</strong> </i>Join a forward-thinking company that values creativity, innovation, and a proactive approach to operations management.</p><p>🌐 <i><strong>Global Impact:</strong></i> Contribute to a team that is making a difference on a global scale. Your skills will play a vital role in shaping the success of our projects.</p><p>💼 <i><strong>Career Growth: </strong></i>Unlock your potential in an environment that fosters professional development. We invest in our team members and provide opportunities for advancement.</p><p><strong>What You\'ll Do:</strong><br>🔧 <i><strong>Optimize Processes:</strong></i> Streamline our operations for maximum efficiency, identifying areas for improvement and implementing strategic solutions.</p><p>🤝 <i><strong>Team Leadership:</strong></i> Inspire and lead a talented team, fostering collaboration and ensuring seamless communication across departments.</p><p>📊 <i><strong>Data-Driven Decision-Making:</strong></i> Utilize data to make informed decisions, driving performance improvements and achieving operational excellence.</p><p>🌐 <i><strong>Global Collaboration:</strong></i> Collaborate with teams across different locations, ensuring a cohesive and synchronized approach to operations.</p><p><strong>What We\'re Looking For:</strong><br>🎓 <i><strong>Experience:</strong></i> Proven track record in operations management with a minimum of [X] years of experience.</p><p>💡 <i><strong>Innovative Thinker:</strong></i> Bring fresh ideas to the table and a willingness to embrace new approaches in operations.</p><p>🤝 <i><strong>Leadership Skills:</strong></i> Inspire and motivate teams to achieve common goals, fostering a positive and collaborative work environment.</p><p>📈 <i><strong>Results-Driven:</strong></i> A commitment to achieving measurable results and driving continuous improvement.</p><p>**How to Apply:**<br>Ready to take your career to the next level? Send your resume and a cover letter highlighting your relevant experience to <a href=\"mailto:careers@precisionjeytech.com\">careers@precisionjeytech.com</a> . Be sure to include \"Operations Manager Application\" in the subject line.</p><p>Join us on our exciting journey as we continue to make a meaningful impact through strategic operations and innovation. Your skills are the missing piece to our puzzle! 🚀 #OperationsManager #JoinOurTeam #CareerOpportunity 🌐</p>', 'We\'re on the lookout for an exceptional Operations Manager to lead our dynamic team and shape the future of our organization.', '2023-12-18 08:24:50', '2023-12-18 08:24:50'),
(3, 'Recruitment of Office workers', '1702887948.jpg', '<p>🌟 <strong>Join Our Team as Operations Manager!</strong> 🌟</p><p>Are you a strategic thinker with a passion for optimizing processes and driving efficiency? We\'re on the lookout for an exceptional Operations Manager to lead our dynamic team and shape the future of our organization.</p><p><strong>Why Us?</strong><br>🚀 <i><strong>Innovative Environment:</strong> </i>Join a forward-thinking company that values creativity, innovation, and a proactive approach to operations management.</p><p>🌐 <i><strong>Global Impact:</strong></i> Contribute to a team that is making a difference on a global scale. Your skills will play a vital role in shaping the success of our projects.</p><p>💼 <i><strong>Career Growth: </strong></i>Unlock your potential in an environment that fosters professional development. We invest in our team members and provide opportunities for advancement.</p><p><strong>What You\'ll Do:</strong><br>🔧 <i><strong>Optimize Processes:</strong></i> Streamline our operations for maximum efficiency, identifying areas for improvement and implementing strategic solutions.</p><p>🤝 <i><strong>Team Leadership:</strong></i> Inspire and lead a talented team, fostering collaboration and ensuring seamless communication across departments.</p><p>📊 <i><strong>Data-Driven Decision-Making:</strong></i> Utilize data to make informed decisions, driving performance improvements and achieving operational excellence.</p><p>🌐 <i><strong>Global Collaboration:</strong></i> Collaborate with teams across different locations, ensuring a cohesive and synchronized approach to operations.</p><p><strong>What We\'re Looking For:</strong><br>🎓 <i><strong>Experience:</strong></i> Proven track record in operations management with a minimum of [X] years of experience.</p><p>💡 <i><strong>Innovative Thinker:</strong></i> Bring fresh ideas to the table and a willingness to embrace new approaches in operations.</p><p>🤝 <i><strong>Leadership Skills:</strong></i> Inspire and motivate teams to achieve common goals, fostering a positive and collaborative work environment.</p><p>📈 <i><strong>Results-Driven:</strong></i> A commitment to achieving measurable results and driving continuous improvement.</p><p>**How to Apply:**<br>Ready to take your career to the next level? Send your resume and a cover letter highlighting your relevant experience to <a href=\"mailto:careers@precisionjeytech.com\">careers@precisionjeytech.com</a> . Be sure to include \"Operations Manager Application\" in the subject line.</p><p>Join us on our exciting journey as we continue to make a meaningful impact through strategic operations and innovation. Your skills are the missing piece to our puzzle! 🚀 #OperationsManager #JoinOurTeam #CareerOpportunity 🌐</p>', 'We\'re on the lookout for an exceptional Operations Manager to lead our dynamic team and shape the future of our organization.', '2023-12-18 08:25:48', '2023-12-18 08:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'guest',
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `role`, `facebook`, `linkedin`, `avatar`, `twitter`, `instagram`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'Edimon Ombati', 'eabimon@gmail.com', '$2y$10$XLcdZJ0pWsgrv9yTfG7dZecoFuJcPmjolYUGvyIy4Z8tsFOSQQKEO', '0701583807', 'Admin', 'https://www.facebook.com/edimon.ombati.3/', 'https://www.linkedin.com/in/edimon-ombati-964b5b188/', '1702883658.jpg', NULL, NULL, NULL, NULL, '2023-12-05 15:43:28', '2023-12-18 07:14:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_author_index` (`author`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_article_id_index` (`article_id`),
  ADD KEY `comments_comment_id_index` (`comment_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_article_id_index` (`article_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_author_foreign` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
