-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2018 at 11:46 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whoffice_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_1`
--

CREATE TABLE `card_1` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `work_1` varchar(255) DEFAULT NULL,
  `work_2` varchar(255) DEFAULT NULL,
  `work_3` varchar(255) DEFAULT NULL,
  `which_work_is_selected` int(11) NOT NULL,
  `sectors` text,
  `one_sector` varchar(255) DEFAULT NULL,
  `have_certificate` tinyint(1) NOT NULL DEFAULT '0',
  `certificate_name` varchar(255) DEFAULT NULL,
  `another_certificate` tinyint(1) NOT NULL DEFAULT '0',
  `another_certificate_name` varchar(255) DEFAULT NULL,
  `have_certificate_cannot_view` tinyint(1) NOT NULL DEFAULT '0',
  `ion_certificate` tinyint(1) NOT NULL DEFAULT '0',
  `ion_certificate_name` varchar(255) DEFAULT NULL,
  `ion_certificate_file` varchar(255) DEFAULT NULL,
  `work_with_certificate` tinyint(1) NOT NULL DEFAULT '0',
  `reason_no_certificate` varchar(255) DEFAULT NULL,
  `experience` tinyint(1) DEFAULT '0',
  `experience_certificate` tinyint(1) NOT NULL DEFAULT '0',
  `experience_certificate_file` varchar(255) DEFAULT NULL,
  `reason_no_experience` varchar(255) DEFAULT NULL,
  `no_experience_certificate` tinyint(1) NOT NULL DEFAULT '0',
  `checked_with_teacher` tinyint(1) NOT NULL DEFAULT '0',
  `edit_allow` tinyint(1) NOT NULL DEFAULT '1',
  `needs_correction_by_student` int(11) NOT NULL DEFAULT '0',
  `correction_notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `card_2`
--

CREATE TABLE `card_2` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tasks` text,
  `work_with_team` tinyint(1) NOT NULL DEFAULT '0',
  `same_work_time` tinyint(1) NOT NULL DEFAULT '0',
  `alot_of_mony` tinyint(1) NOT NULL DEFAULT '0',
  `uniform` tinyint(1) NOT NULL DEFAULT '0',
  `travel_far` tinyint(1) NOT NULL DEFAULT '0',
  `work_one_place` tinyint(1) NOT NULL DEFAULT '0',
  `with_materials` tinyint(1) NOT NULL DEFAULT '0',
  `is_dangerous` tinyint(1) NOT NULL DEFAULT '0',
  `physical_work` tinyint(1) NOT NULL DEFAULT '0',
  `work_outside` tinyint(1) NOT NULL DEFAULT '0',
  `work_at_night` tinyint(1) NOT NULL DEFAULT '0',
  `work_weekend` tinyint(1) NOT NULL DEFAULT '0',
  `work_condetions` text,
  `good_with_me` tinyint(1) NOT NULL DEFAULT '0',
  `driving_license` tinyint(1) NOT NULL DEFAULT '0',
  `speake_another_lang` tinyint(1) NOT NULL DEFAULT '0',
  `sport` tinyint(1) NOT NULL DEFAULT '0',
  `swimming_diploma` tinyint(1) NOT NULL DEFAULT '0',
  `other_requirements` text NOT NULL,
  `good_requirements` tinyint(1) NOT NULL DEFAULT '0',
  `another_special_requirements` text,
  `in_my_home` tinyint(1) NOT NULL DEFAULT '0',
  `in_my_health` tinyint(1) NOT NULL DEFAULT '0',
  `in_my_age` tinyint(1) NOT NULL DEFAULT '0',
  `in_my_motivation` tinyint(1) NOT NULL DEFAULT '0',
  `in_my_address` tinyint(1) NOT NULL DEFAULT '0',
  `other_circumstance` text,
  `yes_change_circumstance` varchar(255) DEFAULT NULL,
  `no_change_circumstance` varchar(255) DEFAULT NULL,
  `checked_with_teacher` tinyint(1) NOT NULL DEFAULT '0',
  `edit_allow` tinyint(1) NOT NULL DEFAULT '1',
  `needs_correction_by_student` int(11) NOT NULL DEFAULT '0',
  `correction_notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `card_3`
--

CREATE TABLE `card_3` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `properties_1` varchar(255) DEFAULT NULL,
  `have_properties_1` tinyint(1) NOT NULL DEFAULT '0',
  `properties_2` varchar(255) DEFAULT NULL,
  `have_properties_2` tinyint(1) NOT NULL DEFAULT '0',
  `properties_7` varchar(255) NOT NULL,
  `have_properties_7` tinyint(4) NOT NULL,
  `properties_3` varchar(255) DEFAULT NULL,
  `why_properties_3` varchar(255) DEFAULT NULL,
  `have_properties_3` tinyint(1) NOT NULL DEFAULT '0',
  `properties_4` varchar(255) DEFAULT NULL,
  `why_properties_4` varchar(255) DEFAULT NULL,
  `have_properties_4` tinyint(1) NOT NULL DEFAULT '0',
  `properties_5` varchar(255) DEFAULT NULL,
  `why_properties_5` varchar(255) DEFAULT NULL,
  `have_properties_5` tinyint(1) NOT NULL DEFAULT '0',
  `properties_6` varchar(255) DEFAULT NULL,
  `why_properties_6` varchar(255) DEFAULT NULL,
  `have_properties_6` tinyint(1) NOT NULL DEFAULT '0',
  `checked_with_teacher` tinyint(1) NOT NULL DEFAULT '0',
  `edit_allow` tinyint(1) NOT NULL DEFAULT '1',
  `needs_correction_by_student` int(11) NOT NULL DEFAULT '0',
  `correction_notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `card_4`
--

CREATE TABLE `card_4` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `place_vacancies_find_1` varchar(255) DEFAULT NULL,
  `place_vacancies_find_2` varchar(255) DEFAULT NULL,
  `place_vacancies_find_3` varchar(255) DEFAULT NULL,
  `num_vacancies_find` int(11) NOT NULL DEFAULT '0',
  `chance_work` int(11) NOT NULL,
  `job_offer_1_date` varchar(100) DEFAULT NULL,
  `job_offer_1_profession` varchar(100) DEFAULT NULL,
  `job_offer_1_company` varchar(100) DEFAULT NULL,
  `job_offer_1_place` varchar(100) DEFAULT NULL,
  `job_offer_1_file` varchar(100) DEFAULT NULL,
  `job_offer_1_yes_no` tinyint(1) NOT NULL DEFAULT '0',
  `job_offer_1_reason` varchar(255) DEFAULT NULL,
  `job_offer_2_date` date DEFAULT NULL,
  `job_offer_2_profession` varchar(100) DEFAULT NULL,
  `job_offer_2_company` varchar(100) DEFAULT NULL,
  `job_offer_2_place` varchar(100) DEFAULT NULL,
  `job_offer_2_file` varchar(100) DEFAULT NULL,
  `job_offer_2_yes_no` tinyint(1) NOT NULL DEFAULT '0',
  `job_offer_2_reason` varchar(255) DEFAULT NULL,
  `is_enough_work` tinyint(1) NOT NULL DEFAULT '0',
  `is_little_work` varchar(255) DEFAULT NULL,
  `another_work` varchar(255) DEFAULT NULL,
  `go_first` varchar(255) DEFAULT NULL,
  `go_first_reason` varchar(255) DEFAULT NULL,
  `checked_with_teacher` tinyint(1) NOT NULL DEFAULT '0',
  `edit_allow` tinyint(1) NOT NULL DEFAULT '1',
  `needs_correction_by_student` int(11) NOT NULL DEFAULT '0',
  `correction_notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `card_5`
--

CREATE TABLE `card_5` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `one_course` tinyint(1) NOT NULL DEFAULT '0',
  `one_complate_training` tinyint(1) NOT NULL DEFAULT '0',
  `training_one_year` tinyint(1) NOT NULL DEFAULT '0',
  `training_multi_year` tinyint(1) NOT NULL DEFAULT '0',
  `days_work` tinyint(4) NOT NULL,
  `days_school` tinyint(4) NOT NULL,
  `course_full_time` tinyint(1) NOT NULL DEFAULT '0',
  `course_part_time` tinyint(1) NOT NULL DEFAULT '0',
  `in_day` tinyint(1) NOT NULL DEFAULT '0',
  `at_night` tinyint(1) NOT NULL DEFAULT '0',
  `at_school` tinyint(1) NOT NULL DEFAULT '0',
  `at_home` tinyint(1) NOT NULL DEFAULT '0',
  `another_course` text,
  `course_name` varchar(255) DEFAULT NULL,
  `course_school` varchar(255) DEFAULT NULL,
  `course_period` varchar(255) DEFAULT NULL,
  `period_time` varchar(255) DEFAULT NULL,
  `no_diploma` tinyint(1) NOT NULL DEFAULT '0',
  `get_diplomas` varchar(255) DEFAULT NULL,
  `have_diploma` tinyint(1) NOT NULL DEFAULT '0',
  `cost_diploma` varchar(100) DEFAULT NULL,
  `get_lend` text,
  `can_pay` tinyint(1) NOT NULL DEFAULT '0',
  `owner_pay` tinyint(1) NOT NULL DEFAULT '0',
  `another_pay` varchar(255) DEFAULT NULL,
  `Living_money` text,
  `dutch_level` varchar(10) DEFAULT NULL,
  `have_Level` tinyint(1) NOT NULL DEFAULT '0',
  `have_diploma_Level` tinyint(1) NOT NULL DEFAULT '0',
  `can_speak_with_people` tinyint(1) NOT NULL DEFAULT '0',
  `instructions` tinyint(1) NOT NULL DEFAULT '0',
  `meet` tinyint(1) NOT NULL DEFAULT '0',
  `email` tinyint(1) NOT NULL DEFAULT '0',
  `telephone` tinyint(1) NOT NULL DEFAULT '0',
  `report` tinyint(1) NOT NULL DEFAULT '0',
  `speak_client` tinyint(1) NOT NULL DEFAULT '0',
  `contact_colleague` tinyint(1) NOT NULL DEFAULT '0',
  `work_paper` tinyint(1) NOT NULL DEFAULT '0',
  `short_report` tinyint(1) NOT NULL DEFAULT '0',
  `another_report` text,
  `can_good` tinyint(1) NOT NULL DEFAULT '0',
  `language_trajectory` text,
  `work_language_trajectory` text,
  `study_lang` tinyint(1) NOT NULL DEFAULT '0',
  `study_lang_type` varchar(100) DEFAULT NULL,
  `study_lang_where` varchar(100) DEFAULT NULL,
  `study_lang_when` varchar(100) DEFAULT NULL,
  `study_lang_no` tinyint(1) NOT NULL DEFAULT '0',
  `checked_with_teacher` tinyint(1) NOT NULL DEFAULT '0',
  `edit_allow` tinyint(1) NOT NULL DEFAULT '1',
  `needs_correction_by_student` int(11) NOT NULL DEFAULT '0',
  `correction_notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `card_6`
--

CREATE TABLE `card_6` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `close_friend` tinyint(1) NOT NULL DEFAULT '0',
  `colleague` tinyint(1) NOT NULL DEFAULT '0',
  `study_friend` tinyint(1) NOT NULL DEFAULT '0',
  `sports_club_friend` tinyint(1) NOT NULL DEFAULT '0',
  `parents` tinyint(4) NOT NULL,
  `another_parents` tinyint(4) NOT NULL,
  `client_manger` tinyint(1) NOT NULL DEFAULT '0',
  `knowledge` tinyint(1) NOT NULL DEFAULT '0',
  `friend` tinyint(1) NOT NULL DEFAULT '0',
  `family` tinyint(1) NOT NULL DEFAULT '0',
  `another` text,
  `name_help_me_1` varchar(100) DEFAULT NULL,
  `name_help_me_2` varchar(100) DEFAULT NULL,
  `name_help_me_3` varchar(100) DEFAULT NULL,
  `no_one_help_me` tinyint(1) NOT NULL DEFAULT '0',
  `who_work` varchar(100) DEFAULT NULL,
  `when_work` varchar(100) DEFAULT NULL,
  `checked_with_teacher` tinyint(1) NOT NULL DEFAULT '0',
  `edit_allow` tinyint(1) NOT NULL DEFAULT '1',
  `needs_correction_by_student` int(11) NOT NULL DEFAULT '0',
  `correction_notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `card_7`
--

CREATE TABLE `card_7` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vacancies` tinyint(1) NOT NULL DEFAULT '0',
  `open_application` tinyint(1) NOT NULL DEFAULT '0',
  `other_way` varchar(255) DEFAULT NULL,
  `volunteering` varchar(255) NOT NULL,
  `no_volunteering` varchar(255) NOT NULL,
  `have_job` text,
  `no_job` text,
  `search_job` text,
  `way_application_form_1` varchar(255) NOT NULL,
  `way_application_form_2` varchar(255) NOT NULL,
  `way_application_form_3` varchar(255) NOT NULL,
  `app_form_work` tinyint(1) NOT NULL DEFAULT '0',
  `app_form_work_file` varchar(255) DEFAULT NULL,
  `app_form_another_work` tinyint(1) NOT NULL DEFAULT '0',
  `app_form_another_work_file_1` varchar(255) DEFAULT NULL,
  `app_form_another_work_file_2` varchar(255) DEFAULT NULL,
  `motivation` tinyint(1) NOT NULL DEFAULT '0',
  `motivation_file` varchar(255) DEFAULT NULL,
  `have_cv` tinyint(1) NOT NULL DEFAULT '0',
  `cv` varchar(255) DEFAULT NULL,
  `help_letter` text,
  `good_points` text,
  `need_to_be_good_1` varchar(255) DEFAULT NULL,
  `way_to_be_good_1` text,
  `need_to_be_good_2` varchar(255) DEFAULT NULL,
  `way_to_be_good_2` text,
  `need_to_be_good_3` varchar(255) DEFAULT NULL,
  `way_to_be_good_3` text,
  `checked_with_teacher` tinyint(1) NOT NULL DEFAULT '0',
  `edit_allow` tinyint(1) NOT NULL DEFAULT '1',
  `needs_correction_by_student` int(11) NOT NULL DEFAULT '0',
  `correction_notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `card_8`
--

CREATE TABLE `card_8` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `in_my_country_1` text,
  `in_my_country_2` text,
  `in_my_country_3` text,
  `in_netherlands_1` text,
  `in_netherlands_2` text,
  `in_netherlands_3` text,
  `checked_with_teacher` tinyint(1) NOT NULL DEFAULT '0',
  `edit_allow` tinyint(1) NOT NULL DEFAULT '1',
  `needs_correction_by_student` int(11) NOT NULL DEFAULT '0',
  `correction_notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employment_letter_template`
--

CREATE TABLE `employment_letter_template` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `street_name` varchar(500) NOT NULL,
  `apartment_no` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `postal_code` varchar(25) NOT NULL,
  `company_street_name` varchar(500) NOT NULL,
  `company_building_no` varchar(50) NOT NULL,
  `company_city` varchar(100) NOT NULL,
  `company_postal_code` varchar(25) NOT NULL,
  `future_vocation_name` varchar(100) NOT NULL,
  `future_vocation_city` varchar(100) NOT NULL,
  `future_vocation_date` date NOT NULL,
  `future_vocation_company_employer` varchar(100) NOT NULL,
  `future_vocation_website` varchar(250) NOT NULL,
  `company_business_field` varchar(500) NOT NULL,
  `experience_acquired_from_company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `page_text`
--

CREATE TABLE `page_text` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `text` text,
  `text_ar` text,
  `page_nr` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `postal_code` varchar(25) NOT NULL,
  `email` varchar(150) NOT NULL,
  `student_group` varchar(255) NOT NULL,
  `sent_completion_time_email` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_visites`
--

CREATE TABLE `student_visites` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `login_time` double NOT NULL,
  `last_action_time` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `postal_code` varchar(25) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_1`
--
ALTER TABLE `card_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_2`
--
ALTER TABLE `card_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_3`
--
ALTER TABLE `card_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_4`
--
ALTER TABLE `card_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_5`
--
ALTER TABLE `card_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_6`
--
ALTER TABLE `card_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_7`
--
ALTER TABLE `card_7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_8`
--
ALTER TABLE `card_8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employment_letter_template`
--
ALTER TABLE `employment_letter_template`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `page_text`
--
ALTER TABLE `page_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_visites`
--
ALTER TABLE `student_visites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_1`
--
ALTER TABLE `card_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `card_2`
--
ALTER TABLE `card_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `card_3`
--
ALTER TABLE `card_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `card_4`
--
ALTER TABLE `card_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `card_5`
--
ALTER TABLE `card_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `card_6`
--
ALTER TABLE `card_6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `card_7`
--
ALTER TABLE `card_7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `card_8`
--
ALTER TABLE `card_8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employment_letter_template`
--
ALTER TABLE `employment_letter_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `page_text`
--
ALTER TABLE `page_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
--
-- AUTO_INCREMENT for table `student_visites`
--
ALTER TABLE `student_visites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employment_letter_template`
--
ALTER TABLE `employment_letter_template`
  ADD CONSTRAINT `employment_letter_template_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_visites`
--
ALTER TABLE `student_visites`
  ADD CONSTRAINT `student_visites_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
