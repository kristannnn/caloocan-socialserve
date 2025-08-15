-- Caloocan City Social Services Management System Database
-- Created for: socialgovserve
-- Database: socialgovserve
-- Port: 3307

-- Create database if not exists
CREATE DATABASE IF NOT EXISTS `socialgovserve` 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE `socialgovserve`;

-- Laravel migrations table
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Users table for authentication
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL UNIQUE,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Password reset tokens
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Personal access tokens
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL UNIQUE,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Failed jobs table
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL UNIQUE,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Sessions table
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Cache table
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Cache locks table
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Social Services Tables

-- AICS (Assistance to Individuals in Crisis Situations) table
CREATE TABLE `aics_applications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `applicant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `crisis_type` enum('medical','burial','educational','food','transportation','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_requested` decimal(10,2) NOT NULL,
  `status` enum('pending','approved','rejected','completed') COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- OSCA (Office of Senior Citizens Affairs) table
CREATE TABLE `osca_registrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `senior_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `contact_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `osca_id_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefits_availed` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('registered','active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT 'registered',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- PDAO (Persons with Disability Affairs Office) table
CREATE TABLE `pdao_registrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `contact_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `disability_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd_id_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefits_availed` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('registered','active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT 'registered',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Solo Parent and Child Welfare table
CREATE TABLE `solo_parent_applications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `children_count` int(11) NOT NULL,
  `solo_parent_id_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefits_availed` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','approved','rejected','active') COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Livelihood and Training Programs table
CREATE TABLE `livelihood_programs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `program_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` enum('upcoming','ongoing','completed','cancelled') COLLATE utf8mb4_unicode_ci DEFAULT 'upcoming',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Livelihood Program Participants table
CREATE TABLE `livelihood_participants` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `program_id` bigint(20) unsigned NOT NULL,
  `participant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('enrolled','completed','dropped') COLLATE utf8mb4_unicode_ci DEFAULT 'enrolled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `livelihood_participants_program_id_foreign` (`program_id`),
  CONSTRAINT `livelihood_participants_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `livelihood_programs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Contact Messages table
CREATE TABLE `contact_messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('unread','read','replied') COLLATE utf8mb4_unicode_ci DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample data

-- Sample AICS applications
INSERT INTO `aics_applications` (`applicant_name`, `contact_number`, `address`, `crisis_type`, `amount_requested`, `status`, `created_at`, `updated_at`) VALUES
('Juan Dela Cruz', '09123456789', '123 Main St., Caloocan City', 'medical', 5000.00, 'pending', NOW(), NOW()),
('Maria Santos', '09234567890', '456 Side St., Caloocan City', 'burial', 3000.00, 'approved', NOW(), NOW()),
('Pedro Reyes', '09345678901', '789 Corner St., Caloocan City', 'educational', 2000.00, 'completed', NOW(), NOW());

-- Sample OSCA registrations
INSERT INTO `osca_registrations` (`senior_name`, `birth_date`, `contact_number`, `address`, `osca_id_number`, `status`, `created_at`, `updated_at`) VALUES
('Lola Remedios', '1940-05-15', '09456789012', '321 Elder St., Caloocan City', 'OSCA-2024-001', 'active', NOW(), NOW()),
('Lolo Manuel', '1935-12-20', '09567890123', '654 Senior St., Caloocan City', 'OSCA-2024-002', 'active', NOW(), NOW()),
('Lola Carmen', '1942-08-10', '09678901234', '987 Golden St., Caloocan City', 'OSCA-2024-003', 'registered', NOW(), NOW());

-- Sample PDAO registrations
INSERT INTO `pdao_registrations` (`person_name`, `birth_date`, `contact_number`, `address`, `disability_type`, `pwd_id_number`, `status`, `created_at`, `updated_at`) VALUES
('Ana Martinez', '1985-03-25', '09789012345', '147 Access St., Caloocan City', 'Visual Impairment', 'PWD-2024-001', 'active', NOW(), NOW()),
('Carlos Lopez', '1990-07-12', '09890123456', '258 Support St., Caloocan City', 'Mobility Impairment', 'PWD-2024-002', 'active', NOW(), NOW()),
('Elena Garcia', '1988-11-30', '09901234567', '369 Care St., Caloocan City', 'Hearing Impairment', 'PWD-2024-003', 'registered', NOW(), NOW());

-- Sample Solo Parent applications
INSERT INTO `solo_parent_applications` (`parent_name`, `contact_number`, `address`, `children_count`, `status`, `created_at`, `updated_at`) VALUES
('Sarah Johnson', '09112345678', '741 Family St., Caloocan City', 2, 'approved', NOW(), NOW()),
('Michael Brown', '09223456789', '852 Single St., Caloocan City', 1, 'pending', NOW(), NOW()),
('Lisa Davis', '09334567890', '963 Parent St., Caloocan City', 3, 'active', NOW(), NOW());

-- Sample Livelihood Programs
INSERT INTO `livelihood_programs` (`program_name`, `description`, `duration`, `capacity`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
('Basic Computer Skills Training', 'Learn fundamental computer operations and Microsoft Office applications', '2 months', 25, '2024-09-01', '2024-10-31', 'upcoming', NOW(), NOW()),
('Food Processing and Preservation', 'Training on making jams, pickles, and other preserved foods', '1 month', 20, '2024-08-15', '2024-09-15', 'ongoing', NOW(), NOW()),
('Sewing and Tailoring Workshop', 'Learn basic sewing techniques and garment making', '3 months', 15, '2024-07-01', '2024-09-30', 'ongoing', NOW(), NOW()),
('Small Business Management', 'Training on entrepreneurship and business planning', '1.5 months', 30, '2024-10-01', '2024-11-15', 'upcoming', NOW(), NOW());

-- Sample Livelihood Participants
INSERT INTO `livelihood_participants` (`program_id`, `participant_name`, `contact_number`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Roberto Santos', '09445678901', '159 Training St., Caloocan City', 'enrolled', NOW(), NOW()),
(2, 'Carmen Rodriguez', '09556789012', '260 Skills St., Caloocan City', 'enrolled', NOW(), NOW()),
(3, 'Antonio Flores', '09667890123', '361 Workshop St., Caloocan City', 'completed', NOW(), NOW());

-- Sample Contact Messages
INSERT INTO `contact_messages` (`name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
('John Smith', 'john.smith@email.com', 'AICS Application Inquiry', 'I would like to know more about the AICS application process.', 'unread', NOW(), NOW()),
('Maria Garcia', 'maria.garcia@email.com', 'OSCA Benefits', 'What benefits are available for senior citizens?', 'read', NOW(), NOW()),
('Pedro Martinez', 'pedro.martinez@email.com', 'Livelihood Training', 'I am interested in the computer skills training program.', 'replied', NOW(), NOW());

-- Insert Laravel migration records
INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_reset_tokens_table', 1),
('2019_08_19_000000_create_failed_jobs_table', 1),
('2019_12_14_000001_create_personal_access_tokens_table', 1),
('2024_08_14_000000_create_sessions_table', 1),
('2024_08_14_000001_create_cache_table', 1),
('2024_08_14_000002_create_cache_locks_table', 1),
('2024_08_14_000003_create_aics_applications_table', 1),
('2024_08_14_000004_create_osca_registrations_table', 1),
('2024_08_14_000005_create_pdao_registrations_table', 1),
('2024_08_14_000006_create_solo_parent_applications_table', 1),
('2024_08_14_000007_create_livelihood_programs_table', 1),
('2024_08_14_000008_create_livelihood_participants_table', 1),
('2024_08_14_000009_create_contact_messages_table', 1);

-- Create indexes for better performance
CREATE INDEX `idx_aics_status` ON `aics_applications` (`status`);
CREATE INDEX `idx_osca_status` ON `osca_registrations` (`status`);
CREATE INDEX `idx_pdao_status` ON `pdao_registrations` (`status`);
CREATE INDEX `idx_solo_parent_status` ON `solo_parent_applications` (`status`);
CREATE INDEX `idx_livelihood_programs_status` ON `livelihood_programs` (`status`);
CREATE INDEX `idx_contact_messages_status` ON `contact_messages` (`status`);

-- Create fulltext search indexes
CREATE FULLTEXT INDEX `ft_aics_applicant` ON `aics_applications` (`applicant_name`);
CREATE FULLTEXT INDEX `ft_osca_senior` ON `osca_registrations` (`senior_name`);
CREATE FULLTEXT INDEX `ft_pdao_person` ON `pdao_registrations` (`person_name`);
CREATE FULLTEXT INDEX `ft_solo_parent` ON `solo_parent_applications` (`parent_name`);
CREATE FULLTEXT INDEX `ft_livelihood_program` ON `livelihood_programs` (`program_name`, `description`);

-- Grant permissions (adjust as needed for your setup)
-- GRANT ALL PRIVILEGES ON socialgovserve.* TO 'root'@'localhost';
-- FLUSH PRIVILEGES;

-- Database setup complete
-- Total tables created: 15
-- Sample data inserted for all service categories
-- Indexes created for optimal performance
