-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 06:12 PM
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

--
-- Dumping data for table `card_1`
--

INSERT INTO `card_1` (`id`, `user_id`, `work_1`, `work_2`, `work_3`, `which_work_is_selected`, `sectors`, `one_sector`, `have_certificate`, `certificate_name`, `another_certificate`, `another_certificate_name`, `have_certificate_cannot_view`, `ion_certificate`, `ion_certificate_name`, `ion_certificate_file`, `work_with_certificate`, `reason_no_certificate`, `experience`, `experience_certificate`, `experience_certificate_file`, `reason_no_experience`, `no_experience_certificate`, `checked_with_teacher`, `edit_allow`, `needs_correction_by_student`, `correction_notes`) VALUES
(2, 9, 'Kapper', 'Kok', 'Schilder', 2, 'oreca', 'Horeca', 0, '', 1, NULL, 0, 0, '', '', 0, '', 0, 0, '', '', 1, 1, 0, 0, 'الكارت مو منيح'),
(3, 10, 'Kapper', 'Kok', 'Schilder', 2, 'hORECA', 'Horeca', 0, '', 1, NULL, 0, 0, '', '', 0, '', 0, 0, '', '', 1, 1, 0, 0, ''),
(4, 157, 'etset', 'test', 'asdasdasdads', 2, '', 'asdasd', 0, '', 0, '', 1, 0, '', '', 0, '', 1, 0, '', '', 0, 1, 0, 0, '');

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

--
-- Dumping data for table `card_2`
--

INSERT INTO `card_2` (`id`, `user_id`, `tasks`, `work_with_team`, `same_work_time`, `alot_of_mony`, `uniform`, `travel_far`, `work_one_place`, `with_materials`, `is_dangerous`, `physical_work`, `work_outside`, `work_at_night`, `work_weekend`, `work_condetions`, `good_with_me`, `driving_license`, `speake_another_lang`, `sport`, `swimming_diploma`, `other_requirements`, `good_requirements`, `another_special_requirements`, `in_my_home`, `in_my_health`, `in_my_age`, `in_my_motivation`, `in_my_address`, `other_circumstance`, `yes_change_circumstance`, `no_change_circumstance`, `checked_with_teacher`, `edit_allow`, `needs_correction_by_student`, `correction_notes`) VALUES
(1, 10, 'تكبير المربع', 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 1, 1, 0, '', 1, '', 1, 0, 0, 1, 0, '', 'بيبيبيبي', '', 1, 1, 0, ''),
(2, 157, 'asdasd', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 1, 0, '', 1, '', 1, 0, 0, 0, 0, '', 'sdfsdfsdf', '', 0, 1, 1, 'انتبه هناك خطا');

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

--
-- Dumping data for table `card_3`
--

INSERT INTO `card_3` (`id`, `user_id`, `properties_1`, `have_properties_1`, `properties_2`, `have_properties_2`, `properties_7`, `have_properties_7`, `properties_3`, `why_properties_3`, `have_properties_3`, `properties_4`, `why_properties_4`, `have_properties_4`, `properties_5`, `why_properties_5`, `have_properties_5`, `properties_6`, `why_properties_6`, `have_properties_6`, `checked_with_teacher`, `edit_allow`, `needs_correction_by_student`, `correction_notes`) VALUES
(1, 10, '00', 1, '00', 0, '00', 0, '00', '00', 1, '00', '00', 0, '00', '', 1, '00', '', 0, 1, 1, 0, '');

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

--
-- Dumping data for table `card_4`
--

INSERT INTO `card_4` (`id`, `user_id`, `place_vacancies_find_1`, `place_vacancies_find_2`, `place_vacancies_find_3`, `num_vacancies_find`, `chance_work`, `job_offer_1_date`, `job_offer_1_profession`, `job_offer_1_company`, `job_offer_1_place`, `job_offer_1_file`, `job_offer_1_yes_no`, `job_offer_1_reason`, `job_offer_2_date`, `job_offer_2_profession`, `job_offer_2_company`, `job_offer_2_place`, `job_offer_2_file`, `job_offer_2_yes_no`, `job_offer_2_reason`, `is_enough_work`, `is_little_work`, `another_work`, `go_first`, `go_first_reason`, `checked_with_teacher`, `edit_allow`, `needs_correction_by_student`, `correction_notes`) VALUES
(1, 10, 'a', 'a', 'a', 20, 0, '', '', '', '', '1b8c281e0ec3a9e1d87b5cab5fc2105b.pdf', 0, NULL, '0000-00-00', '', '', '', '10cee67367fb33d40586af717686358d.pdf', 0, NULL, 1, '', '', '', '', 1, 1, 0, '');

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

--
-- Dumping data for table `card_5`
--

INSERT INTO `card_5` (`id`, `user_id`, `one_course`, `one_complate_training`, `training_one_year`, `training_multi_year`, `days_work`, `days_school`, `course_full_time`, `course_part_time`, `in_day`, `at_night`, `at_school`, `at_home`, `another_course`, `course_name`, `course_school`, `course_period`, `period_time`, `no_diploma`, `get_diplomas`, `have_diploma`, `cost_diploma`, `get_lend`, `can_pay`, `owner_pay`, `another_pay`, `Living_money`, `dutch_level`, `have_Level`, `have_diploma_Level`, `can_speak_with_people`, `instructions`, `meet`, `email`, `telephone`, `report`, `speak_client`, `contact_colleague`, `work_paper`, `short_report`, `another_report`, `can_good`, `language_trajectory`, `work_language_trajectory`, `study_lang`, `study_lang_type`, `study_lang_where`, `study_lang_when`, `study_lang_no`, `checked_with_teacher`, `edit_allow`, `needs_correction_by_student`, `correction_notes`) VALUES
(1, 10, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, '', '', '', '', '', 0, '00', 1, '', '', 0, 0, '', '', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', 0, '', '', '', 0, 1, 1, 0, '');

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

--
-- Dumping data for table `card_6`
--

INSERT INTO `card_6` (`id`, `user_id`, `close_friend`, `colleague`, `study_friend`, `sports_club_friend`, `parents`, `another_parents`, `client_manger`, `knowledge`, `friend`, `family`, `another`, `name_help_me_1`, `name_help_me_2`, `name_help_me_3`, `no_one_help_me`, `who_work`, `when_work`, `checked_with_teacher`, `edit_allow`, `needs_correction_by_student`, `correction_notes`) VALUES
(1, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', 1, 1, 0, '');

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

--
-- Dumping data for table `employment_letter_template`
--

INSERT INTO `employment_letter_template` (`id`, `student_id`, `street_name`, `apartment_no`, `city`, `company_name`, `postal_code`, `company_street_name`, `company_building_no`, `company_city`, `company_postal_code`, `future_vocation_name`, `future_vocation_city`, `future_vocation_date`, `future_vocation_company_employer`, `future_vocation_website`, `company_business_field`, `experience_acquired_from_company`) VALUES
(1, 10, 'asd', 'asdf', 'aasd', 'asd', '6702AM', 'asd', 'asd', 'asd', '6702AM', 'asd', 'asd', '2018-03-27', 'adfsdc', 'https://facebook.com', 'sdcsdf', 'asdcsdf'),
(2, 10, 'asdasd', '123123', 'asdasd', 'asdasd', '6702AM', 'asdasd', 'dasdasd', 'asdasdasdasd', '6702AM', 'asdasd', 'asdasd', '1991-12-12', 'zxczxczcx', 'https://new.whoffice.nl', '123', '123'),
(3, 10, 'asdasd', 'asdasd', 'asdasdasd', 'asdasd', '6702AM', 'xcvxcv', 'asdasdasdxcv  ', 'asdasd', '6702AM', 'adsfasd', 'asdasd', '2003-02-11', 'dfgdfgdfg', 'https://facebook.com', '1234123', '111'),
(4, 10, 'asdasd', 'asdasd', 'asdasdasd', 'asdasd', '6702AM', 'xcvxcv', 'asdasdasdxcv  ', 'asdasd', '6702AM', 'adsfasd', 'asdasd', '2003-02-11', 'dfgdfgdfg', 'https://facebook.com', '1234123', '111');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `exam_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `exam_name`) VALUES
(1, 'Vragen bij de les hoe schrijf ik een goede sollicitatiebrief'),
(2, 'Vragen bij de les hoe wordt ik een zzp''er'),
(3, 'Vragen bij de les van bijstand naar werk'),
(4, 'Vragen bij de les_ wat moet je doen bij een sol gesprek');

-- --------------------------------------------------------

--
-- Table structure for table `exams_questions`
--

CREATE TABLE `exams_questions` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `question_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exams_questions`
--

INSERT INTO `exams_questions` (`id`, `exam_id`, `question`, `question_no`) VALUES
(1, 1, 'Waar schrijf ik mijn eigen naam?', 1),
(2, 1, 'Waar schrijf ik de naam van het bedrijf?', 2),
(3, 1, 'Hoe begin je de brief?', 3),
(4, 1, 'Wat ga je nu opschrijven?', 4),
(5, 1, 'Schrijf je ook op welke dingen je, volgens je vrienden, goed kunt en die heel goed passen bij de baan?', 5),
(6, 1, 'Wat ga je dan opschrijven?', 6),
(7, 1, 'Vraag je of je op een persoonlijk gesprek mag komen?', 7),
(8, 1, 'Moet je nog andere documenten meesturen met je sollicitatiebrief?', 8),
(9, 2, 'Loop ik en mijn familie een risico door ZZP’er te worden?', 1),
(10, 2, 'Welk risico loop ik?', 2),
(11, 2, 'Kan ik vanuit de bijstand ZZP’er worden?', 3),
(12, 2, 'Hoeveel tijd krijg ik om mij voor te bereiden op de start van mijn bedrijf?', 4),
(13, 2, 'Gaat mijn uitkering tijdens de voorbereiding van mijn bedrijf door?', 5),
(14, 2, 'Hoe betaal ik de kosten voor het starten van mijn bedrijf?', 6),
(15, 2, 'Wie beslist of mijn nieuwe bedrijf levensvatbaar is?', 7),
(16, 2, 'Wanneer stopt mijn bijstand uitkering?', 8),
(17, 2, 'Komt er nog iets in de plaats voor de weggevallen bijstand uitkering?', 9),
(19, 3, 'Als je een bijstandsuitkering krijgt, moet je dan iets doen als je gaat werken?', 1),
(20, 3, 'Wat gebeurt er als je een baan of extra inkomsten niet doorgeeft aan de gemeente?', 2),
(21, 3, 'Moet je alles over je werk en veranderingen in je gezin doorgeven aan de gemeente?', 3),
(22, 3, 'Is het wel de moeite waard om te gaan werken; ik krijg toch ook geld van de bijstanduitkering?', 4),
(23, 3, 'Zijn er vaste regels als ik in de bijstand zit?', 5),
(24, 3, 'Moet ik meewerken als de gemeente een onderzoek instelt naar mijn leefomstandigheden?', 6),
(25, 3, 'Ben ik verplicht om werk aan te nemen?', 7),
(26, 3, 'Kan ik altijd stoppen met het werk dat ik niet leuk vind?', 8),
(27, 3, 'Als de gemeente contact met mij opneemt via de mail of telefoon; moet ik reageren?', 9),
(28, 3, 'Kan de contactpersoon van de gemeente mij een boete opleggen als ik geen contact opneem?', 10),
(29, 4, 'Wat doe je als je een sollicitatiegesprek hebt?', 1),
(30, 4, 'Is het belangrijk om op tijd te zijn?', 2),
(31, 4, 'Op welk moment geef ik de ander een hand?', 3),
(32, 4, 'Vinden mensen in Nederland het belangrijk of je een hand geeft?', 4),
(33, 4, 'Wat zou je kunnen doen als dat echt vanuit je geloofsovertuiging niet mag?', 5),
(34, 4, 'Wat doe je als er wordt gevraagd of je iets te drinken wilt hebben?', 6),
(35, 4, 'Is het tijdens een gesprek belangrijk dat je de ander in zijn/haar ogen kijkt?', 7),
(36, 4, 'Mag je zelf tijdens het gesprek ook vragen stellen?', 8),
(37, 4, 'Wat is een hele belangrijke regel in Nederland? (vul in)', 9),
(38, 4, 'Mag je in Nederland zeggen wat je denkt?', 10);

-- --------------------------------------------------------

--
-- Table structure for table `exams_questions_answers`
--

CREATE TABLE `exams_questions_answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `answer_no` varchar(5) NOT NULL,
  `is_correct` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exams_questions_answers`
--

INSERT INTO `exams_questions_answers` (`id`, `question_id`, `answer`, `answer_no`, `is_correct`) VALUES
(1, 1, 'rechts bovenaan de  brief', 'a', 0),
(2, 1, 'links bovenaan de brief', 'b', 1),
(3, 1, 'in het midden', 'c', 0),
(4, 2, 'aan de rechterkant van de brief', 'a', 0),
(5, 2, 'in het midden', 'b', 0),
(6, 2, '3 witregels onder mijn eigen naam', 'c', 1),
(7, 3, 'ik vraag of het goed gaat', 'a', 0),
(8, 3, 'ik schrijf op welke datum  ik de vacature heb gevonden  en waar', 'b', 1),
(9, 4, 'ik schrijf op wat ik nu doe en waarom ik deze nieuwe baan zo leuk vindt', 'a', 1),
(10, 4, 'ik schrijf dat ik nu geen tijd heb maar dat ik de baan wel leuk vindt', 'b', 0),
(11, 5, 'nee dat is niet nodig', 'a', 0),
(12, 5, 'ja, dan weten ze wat mij heel geschikt maakt', 'b', 1),
(13, 6, 'wat ik niet leuk vind aan de baan', 'a', 0),
(14, 6, 'wat ik wel leuk vind aan de baan', 'b', 1),
(15, 7, 'ja dat vraag ik', 'a', 1),
(16, 7, 'nee dat vraag ik niet', 'b', 0),
(17, 8, 'nee, dat is niet nodig', 'a', 0),
(18, 8, 'ja, mijn cv', 'b', 1),
(19, 9, 'Ja', 'a', 1),
(20, 9, 'Nee', 'b', 0),
(21, 10, 'Dat ik teveel werk krijg', 'a', 0),
(22, 10, 'Dat ik te weinig werk krijg', 'b', 1),
(23, 11, 'Nee, dat kan niet', 'a', 0),
(24, 11, 'Ja, dat kan wel', 'b', 1),
(25, 13, '1 jaar', 'a', 0),
(26, 13, 'Dat hangt af van de gemeente waarin ik woon', 'b', 1),
(27, 14, 'Nee, die stopt', 'a', 0),
(28, 14, 'Ja, die gaat door', 'b', 1),
(29, 15, 'Die moet ik zelf betalen', 'a', 0),
(30, 15, 'Ik kan een renteloze lening krijgen', 'b', 1),
(31, 16, 'Dat beslist de gemeente', 'a', 1),
(32, 16, 'Dat beslis ikzelf', 'b', 1),
(33, 17, 'Als mijn bedrijf goed loopt', 'a', 0),
(34, 17, 'Als mijn bedrijf start', 'b', 1),
(37, 19, 'Ja, dan moet ik dat doorgeven aan de gemeente', 'a', 1),
(38, 19, 'Nee, ik kijk eerst of het werk goed gaat', 'b', 0),
(39, 20, 'Niets, dat vinden ze niet zo erg', 'a', 0),
(40, 20, 'Dan krijg je een boete en moet je al het verdiende geld terugbetalen', 'b', 1),
(41, 21, 'Ja, alles wat veranderingen geeft in je inkomen', 'a', 1),
(42, 21, 'Nee, daar hebben ze niets mee te maken', 'b', 0),
(43, 22, 'Nee, ik krijg niet zoveel meer geld dus ik blijf gewoon thuis', 'a', 0),
(44, 22, 'Ja, ik ben weer baas over mijn eigen inkomen en de gemeente kijkt niet meer mee over mijn schouder', 'b', 1),
(45, 23, 'Ja; behoorlijk veel', 'a', 1),
(46, 23, 'Nee, gelukkig niet', 'b', 0),
(47, 24, 'Nee, dat zijn mijn eigen zaken', 'a', 0),
(48, 24, 'Ja, ik moet helemaal meewerken in alles dat zij vragen', 'b', 1),
(49, 25, 'Nee, dat mag ik zelf weten', 'a', 1),
(50, 25, 'Ja, dat is verplicht', 'b', 0),
(51, 26, 'Ja, dat kan', 'a', 0),
(52, 26, 'Nee, dat kan pas als ik ander werk heb', 'b', 1),
(53, 27, 'Ja, altijd', 'a', 1),
(54, 27, 'Nee, dat vind ik niet belangrijk', 'b', 0),
(55, 28, 'Nee, dat kan niet', 'a', 0),
(56, 28, 'Ja, dan krijg ik tijdelijk geen of een veel lagere uitkering', 'b', 1),
(57, 29, 'je gaat van tevoren douchen en trekt schone leuke kleding aan met je beste sneakers', 'a', 1),
(58, 29, 'je gaat erheen; gewoon zoals je je thuis kleed', 'b', 0),
(59, 30, 'nee hoor; want ik weet niet hoe ik daar moet komen', 'a', 0),
(60, 30, 'nee, want ik heb eerst nog een andere belangrijke afspraak', 'b', 0),
(61, 30, 'ja, om een goede indruk te maken heb ik nagekeken hoe ik er moet komen en ben ik \r\n5 minuten voor het gesprek begint aanwezig', 'c', 1),
(62, 31, 'meteen als ik hem of haar zie', 'a', 0),
(63, 31, 'als de andere persoon zijn of haar hand naar je uitsteekt', 'b', 1),
(64, 32, 'Dat mag ik zelf weten', 'a', 0),
(65, 32, 'Nederlanders vinden dat heel belangrijk; voor hen is het een vorm van beleefdheid', 'b', 1),
(66, 33, 'Ik kan proberen mij aan te passen omdat ik in Nederland ben en dit de Nederlandse cultuur is', 'a', 1),
(67, 33, 'Ik zeg: “het spijt mij, dat mag ik niet vanuit mijn geloof”; misschien kun je je hand dan op je hart leggen', 'b', 1),
(68, 34, 'Dan zeg ik: “ik zou graag een kop koffie of willen of een glas water”', 'a', 1),
(69, 34, 'Dan zeg ik: “nee dank u”want dat vind ik lastig', 'b', 0),
(70, 35, 'Ja, dan kom je beleefd en zekerder over', 'a', 1),
(71, 35, 'Nee, dat durf ik niet', 'b', 0),
(72, 36, 'Nee, dat is onbeleefd', 'a', 0),
(73, 36, 'Ja, daarmee laat ik zien dat ik belangstelling heb', 'b', 1),
(74, 38, 'Ja, je moet het natuurlijk wel met tact zeggen maar Nederlanders stellen dat op prijs', 'a', 1),
(75, 38, 'Nee want dan weten ze wat ik denk en dat is ook onbeleefd', 'b', 0);

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

--
-- Dumping data for table `page_text`
--

INSERT INTO `page_text` (`id`, `name`, `text`, `text_ar`, `page_nr`) VALUES
(1, 'text1', 'Ik wil werken in een van deze drie beroepen', 'أرغب في ممارسة واحدة من هذه المهن الثلاثة\r\n', '1'),
(2, 'text2', 'Ik kies uit deze 3 beroepen 1 beroep . Dit is mijn gewenste beroep', 'اختار مهنة واحدة من بين المهن الثلاث السابقة', '1'),
(5, 'text3', 'Het volgende antwoord past bij mijn gewenste beroep', 'الجواب التالي مناسب للمهنة التي اخترتها', '1'),
(6, 'text4', 'Mijn gewenste beroep past in veel branches/sectoren , bijvoorbeeld :', 'المهنة التي أريدها تتوافق مع عدة فروع / قطاعات ، على سبيل المثال:', '1'),
(7, 'text5', 'Mijn gewenste beroep past alleen in de volgende branche / sector', 'المهنة التي أود أن أدخلها فقط في الفرع / القطاع التالي', '1'),
(8, 'text6', 'De volgende situaties passen bij mij :', 'الحالات التالية تناسبني', '1'),
(9, 'text7', 'ik heb een diploma voor mijn gewenste beroep, ik kan het bewijs laten zien', 'لدي شهادة في المهنة المطلوبة ، يمكنني أن أثبت البرهان', '1'),
(10, 'text8', 'Kies document - voeg een kopie van het diploma toe', 'اختيار وثيقة - إضافة نسخة من الدبلوم', '1'),
(11, 'text9', 'Ik heb geen diploma voor mijn gewenste beroep, maar wel een ander diploma. Ik kan het bewijs laten zien.', 'ليس لديّ شهادة عن المهنة المطلوبة ، لكن لديّ شهادة مختلفة. يمكنني عرض الأدلة', '1'),
(12, 'text10', 'Kies document - voeg een kopie van het diploma toe', '.اختيار وثيقة - إضافة نسخة من الدبلوم', '1'),
(13, 'text11', 'Ik heb wel een diploma, maar ik kan het diploma niet laten zien.', 'لديّ درجة ، لكني لا أستطيع إظهار الدرجة', '1'),
(14, 'text12', 'Ik heb mijn diploma laten waarderen / een Indicatie Onderwijs Niveau (ION). Ik kan het bewijs laten zien. Mijn diploma is gelijk aan het volgende type opleiding in  Nederland  ', 'حصلت على شهادتي في التخرج / مستوى تعليمي (ION). يمكنني عرض الأدلة. شهادتي هي نفس نوع التعليم التالي في هولندا', '1'),
(15, 'text13', 'Kies document - voeg een kopie van het diploma toe', 'اختيار وثيقة - إضافة نسخة من الدبلوم', '1'),
(16, 'text14', 'Met mijn diploma / diplomawaardering / ION kan ik werken in mijn gewenste beroep.', 'مع دبلوم / دبلوم / ION التقييم يمكنني العمل في المهنة المطلوبة.', '1'),
(17, 'text15', 'Ik heb geen diplomawaardering / ION nodig want :', 'لا أحتاج تقييم الدبلوم  ION بسبب', '1'),
(18, 'text16', 'Ik heb ervaring in dit gewenste beroep', 'لدي خبرة في هذه المهنة المطلوبة', '1'),
(19, 'text17', 'Ik heb een EVC-procedure aangevraagd of gevolgd. Ik kan het bewijs laten zien.', 'طلبت أو اتبعت إجراء EVC. يمكنني عرض الأدلة.', '1'),
(20, 'text18', 'Kies document - voeg een kopie van het diploma toe', 'اختيار وثيقة - إضافة نسخة من الدبلوم', '1'),
(21, 'text19', 'Ik heb geen ervaring certificaat nodig, want :', 'لست بحاجة إلى شهادة خبرة بسبب', '1'),
(22, 'text20', 'Ik heb geen diploma''s en geen werkervaring in mijn gewenste beroep.', 'ليس لدي أي مؤهلات ولا خبرة مهنية في المهنة المطلوبة', '1'),
(24, 'text21', 'Aaals ik het werk van mijn gewenste beroep doe, heb ik de volgende taken :', 'عندما أقوم بمهمة المهنة المطلوبة ، لدي المهام التالية:', '2'),
(25, 'text22', 'Dit gewenste beroep heeft de volgende werkomstandigheden : ', 'هذه التجارة المرغوبة لديها شروط العمل التالية', '2'),
(26, 'text23', 'Je werkt in een team', 'أنت تعمل في فريق', '2'),
(27, 'text24', 'Je hebt altijd dezelfde werktijden', 'لديك دائما ساعات العمل نفسها', '2'),
(28, 'text25', 'Je verdient veel geld', 'تكسب الكثير من المال', '2'),
(29, 'text26', 'Je draagt een uniform of werkkleding', 'أنت ترتدي زي موحد أو ملابس العمل', '2'),
(30, 'text27', 'Je moet veel reizen', 'عليك أن تسافر كثيرا', '2'),
(31, 'text28', 'Je werkt op een plaats', 'أنت تعمل في نفس المكان', '2'),
(32, 'text29', 'Je werkt met machines of materialen', 'أنت تعمل مع الآلات أو المواد', '2'),
(33, 'text30 ', 'Het is gevaarlijk werk', 'إنها مهمة خطيرة', '2'),
(34, 'text31', 'Je doet lichamelijk werk', 'أنت تقوم بعمل بدني', '2'),
(35, 'text32', 'Je werkt buiten', 'أنت تعمل في الخارج', '2'),
(36, 'text33', 'Je hebt (soms) nachtdiensten of avonddiensten', 'لديك (في بعض الأحيان) خدمات ليلية أو خدمات مسائية', '2'),
(37, 'text34', 'Je werkt (soms) in het weekend', 'كنت تعمل (في بعض الأحيان) في عطلة نهاية الأسبوع', '2'),
(38, 'text35', 'Er zijn nog andere verstandigheden bij dit gewenste beroep : ', 'هناك ظروف عمل أخرى لهذه المهنة المطلوبة', '2'),
(39, 'text36', 'Deze werkomstandigheden passen bij mij : ', 'ظروف العمل هذه تناسبني', '2'),
(40, 'text37', 'Ja ', 'نعم', '2'),
(41, 'text38', 'Nee', 'لا', '2'),
(42, 'text39', 'Dit werk stelt speciale eisen aan mij.', 'هذه الوظيفة تفرض علي متطلبات خاصة', '2'),
(43, 'text40', 'Voor dit werk moet ik : ', 'في هذا العمل يجب علي', '2'),
(44, 'text41', 'Een rijbewijs hebben', 'الحصول على رخصة قيادة', '2'),
(45, 'text42', 'Goed andere talen spreken', 'تكلم جيدًا مع اللغات الأخرى', '2'),
(46, 'text43', 'Sportief of sterk zijn', 'ليكون رياضيًا أو قويًا', '2'),
(47, 'text44', 'Een zwemdiploma hebben', 'لديك شهادة السباحة', '2'),
(48, 'text45', 'Er zijn nog andere speciale eisen bij dit gewenste beroep : ', 'هناك متطلبات خاصة أخرى لهذا المهنة المطلوبة:', '2'),
(49, 'text46', 'Deze eisen passen bij mij ', 'هذه المتطلبات تناسبني', '2'),
(50, 'text47', 'Ja ', 'نعم لا', '2'),
(51, 'text48', 'Nee', '', ''),
(52, 'text49', 'Als ik dit werk wil doen, dan moet ik nog werken aan de volgende speciale eisen', 'إذا كنت أرغب في القيام بهذا العمل ، لا يزال يتعين علي العمل على المتطلبات الخاصة التالية', '2'),
(53, 'text50', 'Dit werk past bij mijn persoonlijke omstandigheden : ', 'هذا العمل يناسب حالتي الشخصية', '2'),
(54, 'text51', 'Bij  mijn thuissituatie', 'في المنزل', '2'),
(55, 'text52', 'Bij mijn gezondheid', 'مع صحتي', '2'),
(56, 'text53', 'Bij mijn leeftijd', 'في سني', '2'),
(57, 'text54', 'Bij mijn motivatie', 'مع دافعي', '2'),
(58, 'text55', 'Bij mijn woonplaats', 'في المنزل', '2'),
(59, 'text56', 'Ik heb  nog andere omstandigheden ', 'لدي ظروف أخرى', '2'),
(60, 'text57', 'Ik kan mijn persoonlijke omstandigheden veranderen voor het gewenste beroep: ', 'يمكنني تغيير وضعي الشخصي للوظيفة المطلوبة', '2'),
(61, 'text58', 'Ja, want :', 'نعم ، لأن', '2'),
(62, 'text59', 'Nee, want', 'لا ، لأن', '2'),
(63, 'text60', 'Ik kan de eigenschappen/competenties noemen die belangrijk zijn als je werkt in Nederland. Ik kan van de eigenschappen/competenties zeggen of ik deze heb of niet.', 'يمكنني تسمية خصائص / مهارات مهمة عند العمل في هولندا. استنادًا إلى الخصائص / المهارات ، يمكنني معرفة ما إذا كنت أملكها أم لا', '3'),
(64, 'text61', 'Deze eigenschappen/competenties zijn voor iedereen belangrijk', 'هذه الصفات / المهارات مهمة للجميع', '3'),
(65, 'text62', '', '', '3'),
(66, 'text63', 'Heb ik de eigenschap/ competentie?', 'هل لدي الخاصية / المهارة؟', '3'),
(67, 'text64', 'Ja', 'نعم لا', '3'),
(68, 'text65', 'Nee', '', ''),
(69, 'text66', 'Ja', '', ''),
(70, 'text67', 'Nee', '', ''),
(71, 'text68', 'Ik kan de eigenschappen/competenties noemen die belangrijk zijn voor mijn gewenste beroep. Ik kan voorbeelden geven waarom deze eigenschappen/ competenties belangrijk zijn. Ik kan van de eigenschappen/competenties zeggen of ik deze heb of niet.', 'يمكنني تسمية الصفات / المهارات التي تهم المهمة التي أريدها. يمكنني إعطاء أمثلة عن أهمية هذه الصفات / المهارات. من الصفات / المهارات ، يمكنني معرفة ما إذا كنت أملكها أم لا', '3'),
(72, 'text69', 'Deze eigenschappen / competenties zijn belangrijk voor mijn gewenste beroep ', 'هذه الصفات / المهارات مهمة للوظيفة التي أريدها', '3'),
(73, 'text70', 'Waarom is deze eigenschap / competentie belangrijk?', 'لماذا أعتبر هذه الخاصية / المهارة مهمة. أعطي مثالاً', '3'),
(74, 'text71', 'Ik geef een voorbeeld', 'أعطي مثالا', '3'),
(75, 'text72', 'Heb ik de eigenschap/competentie', 'هل لدي هذه الخاصية / المهارة؟', '3'),
(76, 'text73', 'Ja', 'نعم لا', '3'),
(77, 'text74', 'Nee', '', '3'),
(78, 'text75', 'Ja', 'نعم لا', '3'),
(79, 'text76', 'Nee', '', '3'),
(80, 'text77', 'Ja', 'نعم لا', '3'),
(81, 'text78', 'Nee', '', '3'),
(82, 'text79', 'Ja', 'نعم لا', '3'),
(83, 'text80', 'Nee', '', '3'),
(84, 'text81', 'Ik kan op deze plekken vacatures vinden voor mijn gewenste beroep', 'يمكنني العثور على أماكن شاغرة في هذه الأماكن لمهنتي المطلوبة', '4'),
(85, 'text82', 'Ik heb (aantal) ', 'لقد وجدت (عدد) من الوظائف الشاغرة للمهنة المطلوبة', '4'),
(86, 'text83', 'va/catures gevonden voor mijn gewenste beroep', '', '4'),
(87, 'text84', 'De kans op werk in dit gewenste beroep is', 'فرصة العمل في هذه المهنة المطلوبة', '4'),
(88, 'text85', 'Groot', 'ضخم', '4'),
(89, 'text86', 'Redelijk ', 'معقول', '4'),
(90, 'text87', 'Klein ', 'صغير', '4'),
(91, 'text88', 'Ik kan 2 vacatures laten zien. Ik vul de gegevens hieronder in.', 'يمكنني عرض 2 شواغر. أكمل التفاصيل أدناه', '4'),
(92, 'text89', 'Vacature 1', 'عرض العمل 1', '4'),
(93, 'text90', 'Datum ', 'تاريخ', '4'),
(94, 'text91', 'Beroep ', 'توظيف', '4'),
(95, 'text92', 'Naam bedrijf', 'اسم الشركة', '4'),
(96, 'text93', 'Plaats ', 'مكان', '4'),
(97, 'text94', 'voeg een kopie van de vacature toe', 'اختر وثيقة - أضف عنوان شغور', '4'),
(98, 'text95', 'Documenten ', 'وثائق', '4'),
(99, 'text96', 'Vacature 1 is geschikt voor mij', 'عرض العمل 1 يناسبني', '4'),
(100, 'text97', 'Ja want', 'نعم ، لأن', '4'),
(101, 'text98', 'Nee want', 'لا ، لأن', '4'),
(102, 'text99', 'Vacature 2', 'عرض العمل 2', '4'),
(103, 'text100', 'Datum ', 'تاريخ', '4'),
(104, 'text101', 'Beroep ', 'توظيف', '4'),
(105, 'text102', 'Naam bedrijf', 'اسم الشركة', '4'),
(106, 'text103', 'Plaats ', 'مكان', '4'),
(107, 'text104', 'voeg een kopie van de vacature toe', 'اختر وثيقة - أضف عنوان شغور', '4'),
(108, 'text105', 'Documenten ', 'وثائق', '4'),
(109, 'text106', 'Vacature 1 is geschikt voor mij', 'عرض العمل 2 يناسبني', '4'),
(110, 'text107', 'Ja want', 'نعم ، لأن', '4'),
(111, 'text108', 'Nee want', 'لا ، لأن', '4'),
(112, 'text109', 'Hoe ga ik nu verder?', 'كيف سأستمر الان', '4'),
(113, 'text110', 'De volgende situaties passen bij mij', 'الحالات التالية تناسبني', '4'),
(114, 'text111', 'Er is genoeg werk, ik ga verder met dit gewenste beroep', 'هناك ما يكفي من العمل ، أستمر في هذه المهنة المطلوبة', '4'),
(115, 'text112', 'Er is weinig werk. Ik ga toch verder met dit gewenste beroep, want', 'هناك القليل من العمل ، وأستمر في المهنة المطلوبة ، لأن', '4'),
(116, 'text113', 'Ik ga eerst ander werk zoeken, want', 'سأبحث أولاً عن وظيفة أخرى ، لأن', '4'),
(117, 'text114', 'Ik ga eerst', 'أنا ذاهب أولاً', '4'),
(118, 'text115', 'Want ', 'لان', '4'),
(119, 'text116', 'Een opleiding of cursus die past bij mijn persoonlijke omstandigheden/ voorkeur is : ', 'التدريب أو الدورة التي تناسب وضعي / تفضيلي الشخصي هو', '5'),
(120, 'text117', 'Een cursus', 'دورة', '5'),
(121, 'text118', 'Een complete opleiding', 'تدريب كامل', '5'),
(122, 'text119', 'Een opleiding van maximaal 1 jaar', 'تدريب لمدة عام واحد كحد أقصى', '5'),
(123, 'text120', 'Een opleiding van meerdere jaren', 'تدريب لعدة سنوات', '5'),
(124, 'text121', 'Een voltijdopleiding of cursus', 'دورة بدوام كامل أو التدريب', '5'),
(125, 'text122', 'Een deeltijdopleiding of cursus', 'دورة بدوام جزئي أو تدريب', '5'),
(126, 'text123', 'Overdag ', 'خلال اليوم', '5'),
(127, 'text124', '’s Avonds of in het weekend', 'في المساء أو في عطلة نهاية الأسبوع', '5'),
(128, 'text125', 'Op een school', 'في المدرسة', '5'),
(129, 'text126', 'Thuis via een computer en zelfstudie', 'في المنزل عبر الكمبيوتر والتعلم الذاتي', '5'),
(130, 'text127', 'Anders, namelijk', 'خلاف ذلك ، وهي', '5'),
(131, 'text128', 'De volgende opleiding of cursus voor mijn gewenste beroep past bij mijn persoonlijke omstandigheden ', 'التدريب أو الدورة التالية المقابلة لمهنة الاختيار الذي يناسب اختياراتي الشخصية', '5'),
(132, 'text129', 'Naam opleiding of cursus', 'اسم التدريب أو الدورة', '5'),
(133, 'text130', 'Naam instituut of school', 'اسم المدرسة أو المدرسة', '5'),
(134, 'text131', 'Duur van de opleiding of cursus', 'مدة التدريب أو الدورة', '5'),
(135, 'text132', 'Overdag of ’s avonds/weekend', 'خلال النهار أو في المساء / نهاية الأسبوع', '5'),
(136, 'text133', 'Om deze opleiding te mogen beginnen', 'لبدء هذا التدريب', '5'),
(137, 'text134', 'Heb ik geen diploma nodig', 'لا أحتاج إلى دبلوم', '5'),
(138, 'text135', 'Moet ik het volgende diploma hebben', 'يجب أن أحصل على الدبلوم التالي', '5'),
(139, 'text136', 'Ik heb dit diploma', 'لدي الدبلوم', '5'),
(140, 'text137', 'Ja', 'نعم لا', '5'),
(141, 'text138', 'Nee', '', ''),
(142, 'text139', 'Deze opleiding of cursus kost', 'هذه الدورة أو تكاليف الدورة .... يورو في السنة', '5'),
(143, 'text140', 'Ik kan geld lenen voor deze opleiding of cursus. Dat kan bij :', 'يمكنني اقتراض المال لهذا التدريب أو هذه الدورة. من الممكن بفضل', '5'),
(144, 'text141', 'Ik kan de opleiding of cursus zelf betalen', 'يمكنني أن أدفع التدريب أو الدورة بنفسي', '5'),
(145, 'text142', 'Mijn werkgever wil de opleiding of cursus voor mij betalen ', 'يرغب صاحب العمل في دفع التدريب أو الدورة الدراسية بالنسبة لي', '5'),
(146, 'text143', 'Anders, namelijk', 'على خلاف ذلك ، أي', '5'),
(147, 'text144', 'Ik zorg dat ik genoeg geld heb om van te leven als ik deze opleiding of cursus doe.', 'أتأكد من أن لدي ما يكفي من المال للعيش إذا قمت بهذا التدريب أو الدورة التدريبية', '5'),
(148, 'text145', 'Dat doe ik zo', 'أنا أفعل ذلك', '5'),
(149, 'text146', 'Voor deze opleiding of cursus moet ik dit taalniveau in het Nederlands hebben', 'لهذه الدورة أو الدورة يجب أن يكون مستوى اللغة باللغة الهولندية', '5'),
(150, 'text147', 'Taalniveau : niet belangrijk', 'مستوى اللغة: غير مهم', '5'),
(151, 'text148', 'Onder 1F : onder A2', 'تحت 1F: تحت A2', '5'),
(152, 'text149', '1F (A2)', '1F : A2)', '5'),
(153, 'text150', '2F (B1)', '2F :B1)', '5'),
(154, 'text151', '3F (B2)', '3F :B2)', '5'),
(155, 'text152', '4F (C1)', '4F :C1', '5'),
(156, 'text153', 'Ik heb dit taalniveau ', 'لدي هذا المستوى اللغوي', '5'),
(157, 'text154', 'Ja', 'نعم لا', '5'),
(158, 'text155', 'Nee', '', ''),
(159, 'text156', 'Ik heb een diploma voor dit taalniveau', 'لدي درجة لهذا المستوى من اللغة', '5'),
(160, 'text157', 'Ja', 'نعم لا', '5'),
(161, 'text158', 'Nee', '', '5'),
(162, 'text159', 'Als ik werk in mijn gewenste beroep, dan moet ik in het Nederlands kunnen', 'إذا كنت أعمل في مهنة من اختياري ، يجب أن أكون قادرًا على فعل ذلك باللغة الهولندية', '5'),
(163, 'text160', 'overleggen met andere mensen', 'التشاور مع أشخاص آخرين', '5'),
(164, 'text161', 'instructies begrijpen', 'فهم التعليمات', '5'),
(165, 'text162', 'vergaderen', ' مقابلات', '5'),
(166, 'text163', 'e-mailen', 'إرسال البريد الإلكتروني', '5'),
(167, 'text164', 'telefoneren', 'مكالمة هاتفية', '5'),
(168, 'text165', 'rapporten schrijven', 'كتابة التقارير', '5'),
(169, 'text166', 'met klanten of patiënten spreken', 'التحدث مع العملاء أو المرضى', '5'),
(170, 'text167', 'contact met collega''s', 'الاتصال مع الزملاء', '5'),
(171, 'text168', 'werkbriefjes invullen', 'ملء أوراق العمل', '5'),
(172, 'text169', 'kort verslagje schrijven', 'اكتب تقريرا قصير', '5'),
(173, 'text170', 'anders, namelijk', 'على خلاف ذلك ، أي', '5'),
(174, 'text171', 'ik kan dit goed', 'أستطيع أن أفعل ذلك جيداً', '5'),
(175, 'text172', 'ja/nee', 'نعم لا', '5'),
(176, 'text173', 'Nee', '', '5'),
(177, 'text174', 'ik moet aan mijn taal werken voor dit gewenste beroep of de opleiding/cursus ', 'لا بد لي من العمل على لغتي لهذه المهنة أو هذه الدورة المرغوبة', '5'),
(178, 'text175', 'ja, ik volg een taaltraject dat bij mij past', 'نعم ، أنا دورة لغة تناسبني', '5'),
(179, 'text176', 'ja, ik werk zelfstanding aan mijn taal voor het beroep of de opleiding / cursus. ', 'نعم ، أعمل بشكل مستقل في لغتي للمهنة أو للتدريب', '5'),
(180, 'text177', 'Ik doe dat zo  :', 'أفعل هذا', '5'),
(181, 'text178', 'ja, ik ga een taaltraject volgen. Ik heb een plan gemaakt : ', 'نعم ، سأدرس دورة في اللغة. لقد وضعت خطة', '5'),
(182, 'text179', 'soort traject', 'نوع من المسار', '5'),
(183, 'text180', 'waar', 'حيث', '5'),
(184, 'text181', 'wanneer', 'عندما', '5'),
(185, 'text182', 'Nee, ik hoef niet aan mijn taal te werken voor dit gewenste beroep of de opleiding / cursus', 'لا ، ليس عليّ أن أعمل لغتي لهذه المهنة أو هذه الدورة', '5'),
(186, 'text183', 'ik heb een netwerk van mensen die mij kunnen helpen. de mensen in mijn netwerk zijn', 'لدي شبكة من الأشخاص يمكنهم مساعدتي. الناس في شبكتي', '6'),
(187, 'text184', 'vakgenoten', 'الزملاء', '6'),
(188, 'text185', 'collega''s', 'الزملاء', '6'),
(189, 'text186', 'studievrienden', 'اصدقاء الكلية', '6'),
(190, 'text187', 'mensen die ik ken van de sportclub, vereniging of organisaties waarvan ik lid ben', 'أشخاص أعرفهم عن النادي الرياضي أو الجمعية أو المنظمات التي أنا عضو فيها', '6'),
(191, 'text188', 'klantmanagers', 'مديري العملاء', '6'),
(192, 'text189', 'kennissen', 'معرفة', '6'),
(193, 'text190', 'vrienden', 'أصدقاء', '6'),
(194, 'text191', 'Familie', 'العائلة', '6'),
(195, 'text192', 'anders', 'آخر', '6'),
(196, 'text193', 'in mijn netwerk zitten mensen die mij kunnen helpen om werk te vinden in mijn gewenste beroep of een werkervaringsplek of stage : ', 'في شبكتي ، هناك أشخاص يمكنهم مساعدتي في العثور على عمل في مهنة اختياري ، أو تدريب داخلي أو تدريب داخلي', '6'),
(197, 'text194', 'ja deze mensen in mijn netwerk kunnen mij helpen', 'نعم ، يمكن أن يساعدني هؤلاء الأشخاص في شبكتي', '6'),
(198, 'text195', 'voornaam en achternaam', 'الإسم واللقب', '6'),
(199, 'text196', 'voornaam en achternaam', 'الإسم واللقب', '6'),
(200, 'text197', 'voornaam en achternaam', 'الإسم واللقب', '6'),
(201, 'text198', 'nee in mijn netwerk zitten geen mensen die mij kunnen helpen', 'لا يمكن لأي عضو في شبكتي مساعدتي', '6'),
(202, 'text199', 'ik ga mijn kans op werk vergroten. ik ga (nog meer) mensen zoeken die mij kunnen helpen. Ik schrijf hier op hoe en wanneer ik ga zoeken', 'سأزيد فرصي في العمل. سأبحث عن (أكثر) من الناس الذين يمكنهم مساعدتي. أنا أكتب هنا كيف ومتى سأبحث', '6'),
(203, 'text200', 'hoe', 'كيف', '6'),
(204, 'text201', 'wanneer', 'عندما', '6'),
(205, 'text202', 'ik kan op deze manieren werk vinden in mijn gewenste beroep', 'يمكنني العثور على عمل في وظيفتي بهذه الطريقة', '7'),
(206, 'text203', 'via vacatures', 'عبر الوظائف الشاغرة', '7'),
(207, 'text204', 'via een open sollicitatie', 'عبر تطبيق مفتوح', '7'),
(208, 'text205', 'op een andere manier, namelijk', 'بطريقة مختلفة ، وهي', '7'),
(209, 'text206', 'een werkervaringsplaats, stageplaats of vrijwilligerswerk is voor mij belangrijk', 'خبرة العمل ، والتدريب الداخلي أو التطوع أمر مهم بالنسبة لي', '7'),
(210, 'text207', 'ja want', 'نعم لان', '7'),
(211, 'text208', 'nee want', 'لا لان', '7'),
(212, 'text209', 'ik heb werk, een werkervaringsplaats of stageplaats en/of doe vrijwilligerswerk: ', 'لدي وظيفة أو تدريب داخلي أو تدريب داخلي و / أو تطوعي', '7'),
(213, 'text210', 'ja ik werk/loop stage / doe vrijwilligerswerk bij ', 'نعم أنا أعمل / أقوم بتدريب داخلي / أنا متطوع', '7'),
(214, 'text211', 'nee, want ', 'لا ، لأن', '7'),
(215, 'text212', 'nee, maar ik ga werk/stage/vrijwilligerswerk zoeken. Dat ga ik zo doen', 'لا ، ولكن أنا أبحث عن العمل / التدريب / التطوع. سأفعل ذلك', '7'),
(216, 'text213', 'ik kan 3 redenen noemen waarom sollicitatieformulieren en sollicitatiebrieven worden gebruikt', 'يمكنني أن أذكر 3 أسباب لاستخدام نماذج الطلبات ورسائل التغطية', '7'),
(217, 'text214', 'ik kan de volgende bewijzen laten zien', 'يمكنني إظهار الأدلة التالية', '7'),
(218, 'text215', 'bij mijn gewenste beroep gebruiken werkgevers vaak sollicitatieformulieren.', '', '7'),
(219, 'text216', 'Ik heb 2 sollicitatieformulieren voor mijn gewenste beroep ingevuld. Op deze formulieren heb ik mijn eigen gegevens ingevuld. Ik kan de formulieren laten zien.', 'غالباً ما يستخدم أصحاب العمل نماذج الطلب للمهنة التي يختارونها. ملأت استمارتي طلب للحصول على مهنة من اختياري. لقد أدخلت بياناتي الخاصة في هذه النماذج. يمكنني عرض الاستمارات', '7'),
(220, 'text217', 'voeg een kopie van de sollicitatieformulieren toe', 'اختر وثيقة - أضف عنوان طلب النماذج', '7'),
(221, '', ' ', 'يمكنني إظهار الأدلة التالية', '7'),
(222, 'text218', 'bij mijn gewenste beroep gebruiken  werkgevers geen sollicitatieformulieren. Ik heb 2 sollicitatieformulieren voor een ander beroep ingevuld. Op deze formulieren heb ik mijn eigen gegevens ingevuld. Ik kan de formulieren laten zien', 'لا يستخدم أصحاب العمل نماذج الطلب للمهنة التي أختارها. أكملت شكلي طلب لمهنة أخرى. لقد أدخلت بياناتي الخاصة في هذه النماذج. يمكنني عرض الاستمارات', '7'),
(223, 'text219', ' voeg een kopie van de sollicitatieformulieren toe ', 'اختر وثيقة - أضف عنوان طلب النماذج', '7'),
(224, 'text220', 'Documenten ', 'وثائق', '7'),
(225, 'text221', 'ik heb een sollicitatiebrief geschreven die ik kan gebruiken bij andere sollicitaties. ', 'كتبت رسالة مقدمة يمكنني استخدامها في تطبيقات أخرى. ', '7'),
(226, 'text222', 'Ik kan deze sollicitatiebrief laten zien', 'يمكنني إظهار خطاب الطلب هذا', '7'),
(227, 'text223', 'voeg een kopie van de sollicitatieformulieren toe', 'اختر وثيقة - أضف عنوان طلب النماذج', '7'),
(228, 'text224', 'Documenten ', 'وثائق', '7'),
(229, 'text225', 'Ik heb een cv gemaakt. Ik kan dit cv ', 'أنا قدمت السيرة الذاتية. يمكنني إظهار هذه السيرة الذاتية', '7'),
(230, 'text226', 'laten zien. ', '', '7'),
(231, 'text227', 'voeg een kopie van de sollicitatieformulieren toe', 'اختر وثيقة - أضف عنوان طلب النماذج', '7'),
(232, 'text228', 'documenten', 'وثائق', '7'),
(233, 'text229', 'als ik hulp nodig heb bij het schrijven van een sollicitatiebrief, kan ik die hier vinden:', 'إذا احتجت إلى مساعدة في كتابة رسالة مقدمة ، فيمكنني العثور عليها هنا:', '7'),
(234, 'text230', 'ik weet dat het belangrijk is om in een sollicitatiegesprek een goede indruk te maken. Ik kan een goede indruk maken op de volgende punten ', 'أعلم أنه من المهم ترك انطباع جيد أثناء مقابلة العمل. يمكنني ترك انطباع جيد على النقاط التالية', '7'),
(235, 'text231', 'de volgende punten kan ik nog verbeteren', 'لا يزال بإمكاني تحسين النقاط التالية', '7'),
(236, 'text232', 'verbeterpunt ', 'نقطة التحسن', '7'),
(237, 'text233', 'ik ga dit op de volgende manier doen', 'سأفعلها بالطريقة التالية', '7'),
(238, 'text234', 'verbeterpunt ', 'نقطة التحسن', '7'),
(239, 'text235', 'ik ga dit op de volgende manier doen', 'سأفعلها بالطريقة التالية', '7'),
(240, 'text236', 'verbeterpunt ', 'نقطة التحسن', '7'),
(241, 'text237', 'ik ga dit op de volgende manier doen', 'سأفعلها بالطريقة التالية', '7'),
(242, 'text238', 'In Nederland is de cultuur op het werk in mijn gewenste beroep anders dan in mijn land van herkomst', 'في هولندا ، تختلف الثقافة في العمل في مهنتي المطلوبة عن بلد المنشأ', '8'),
(243, 'text239', 'Ik noem 3 verschillen', 'أذكر 3 الاختلافات', '8'),
(244, 'text240', 'verschil 1. in mijn land van herkomst', 'الفرق 1. في بلدي الأصل', '8'),
(245, 'text241', 'verschil 2. in mijn land van herkomst', 'الفرق 2. في بلدي', '8'),
(246, 'text242', 'in Nederland', 'في هولندا', '8'),
(247, 'text243', 'verschil 3. in mijn land van herkomst', 'الفرق 3. في بلدي', '8'),
(248, 'text244', 'in Nederland', 'في هولندا', '8');

-- --------------------------------------------------------

--
-- Table structure for table `scheduled_emails_to_sent`
--

CREATE TABLE `scheduled_emails_to_sent` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `postal_code` varchar(25) NOT NULL,
  `email` varchar(150) NOT NULL,
  `student_group` varchar(255) DEFAULT NULL,
  `sent_completion_time_email` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `password`, `active`, `firstname`, `lastname`, `postal_code`, `email`, `student_group`, `sent_completion_time_email`) VALUES
(8, 'smerrrrrtttttnaser', '260da27bd5fe13c17ecd14fc338acd47f9ef5e1a', 1, 'smerrrrrttttt', 'naser', '1234aa', 'amer91_13@hotmail.com', '1123', 0),
(9, 'AmjadTest', '2657b276970ffd792673b98a41856fa395d83760', 1, 'Amjad', 'Test', '5914LP', 'arch.amjad89@gmail.com', 'g1', 0),
(10, 'AmjadTest2', '9ca25faa48beb23d2c23b474d255403bcb9b82fb', 1, 'Amjad', 'Test2', '6702AM', 'amjad.rahal@whoffice.nl', '', 0),
(11, 'AbdAlrzzaqAlommar', 'c129b324aee662b04eccf68babba85851346dff9', 1, 'AbdAlrzzaq', 'Alommar', '1234', 'rn_mad@hotmail.com', 'A++', 0),
(12, 'studentstudent', '81291dee22e3be6d899743420c20764845b74dc0', 1, 'student', 'student', 'student', 'anaser9113@gmail.com', '2', 0),
(13, 'Saad Bitar', 'e4e36859bc0183078dd53ac9182bc8638873baa3', 1, 'Saad', 'Bitar', '3901NK', 'msbitar@gmail.com', '', 0),
(14, 'Hasan Ghazal', '34271d981b5dbf7a11faac3da5df43c11c10a0da', 1, 'Hasan', 'Ghazal', '3901NP', 'hasan.m.ghazal@gmail.com', '', 0),
(15, 'Mohamed Ghazal', '8b15a60f5a5a4a2cb00e523c94eadde8f4426e1e', 1, 'Mohamed', 'Ghazal', '5321VA', 'ghazal.sy1998@gmail.com', '', 0),
(16, 'Mountaha Ghazal', '34271d981b5dbf7a11faac3da5df43c11c10a0da', 1, 'Mountaha', 'Ghazal', '3901NP', 'mountahag@gmail.com', '', 0),
(17, 'Qusai Alobeidi', '818146af32f77a79b110a2db836ff71e33a7e31d', 1, 'Qusai', 'Alobeidi', '8061GA', 'Www.qusai.sh77@gmail.com', '', 0),
(18, 'Frial Alkhatib', 'dafc04c752bef2956c56ea0fa52a7f588df149db', 1, 'Frial', 'Alkhatib', '5628RM', 'Frealalkhateeb7@gmail.com', '', 0),
(19, 'Suha Abdulmaula', 'a30443ec60f03d733979a71c2ed463e09ae76144', 1, 'Suha', 'Abdulmaula', '7391WC', 'Souhaahmad.fe@gmail.com', '', 0),
(20, 'Yasmeen Askar', '1d6d841af4076fcac64ab776943a4f0d322ff9a1', 1, 'Yasmeen', 'Askar', '5951Ej', 'Fade878787@gemil.com', '', 0),
(21, 'Issam Jnied', '429e61a3b473d405afb814ec57430e7d946df67b', 1, 'Issam', 'Jnied', '6702AL', 'Issamjnied69@gmail.com', '', 0),
(22, 'Abir Yonsso', '429e61a3b473d405afb814ec57430e7d946df67b', 1, 'Abir', 'Yonsso', '6702AL', 'abiryonsso@gmail.com', '', 0),
(23, 'Bushra Hmeidi', '9353f60ab481ed11f2be030d7468e71ec32c2210', 1, 'Bushra', 'Hmeidi', '5625JB', 'bushrahmeidi1980@gmail.com', '', 0),
(24, 'Hiba Atiki', '92df988dacf9afea1fff0085260c4dd25e64cdc3', 1, 'Hiba', 'Atiki', '8022GB', 'Hiba.tete93@gmail.com', '', 0),
(25, 'Razan Lababidy', '6466b218f81d90f4c3770520722d0dd089dc32df', 1, 'Razan', 'Lababidy', '5062HE', 'razanlab82@gmail.com', '', 0),
(26, 'Mohammed Ghalaieney', '53589d63c20051f6245a4d3d487f32023604178e', 1, 'Mohammed', 'Ghalaieney', '3351GD', 'Mohghgh92@gmail.com', '', 0),
(27, 'Mohamad Abdou', 'b1e1487f69f32ca9b19e29ae960ee0a4270727f8', 1, 'Mohamad', 'Abdou', '3024VH', 'mohamad.abdou82@gmail.com', '', 0),
(28, 'Bushra Mustafa', 'b1e1487f69f32ca9b19e29ae960ee0a4270727f8', 1, 'Bushra', 'Mustafa', '3024VH', 'Bushra.2392@gmail.com', '', 0),
(29, 'Maram Munfakh', 'b4a914e150b3f4ca13f265fba5a21f36a6a54e86', 1, 'Maram', 'Munfakh', '8024bt', 'marammnfakh@gmail.com', '', 0),
(30, 'Hanna Abdulnour', '42275391d0722f432bb65485dcfa8414f52a49f9', 1, 'Hanna', 'Abdul Nour', '6265BG', 'H.abdulnour.92@gmail.com', '', 0),
(31, 'Wassim Hassan', '967b413fb16c06075068546091ffe932cff8c835', 1, 'Wassim', 'Hassan', '6544VZ', 'wassimhco@gmail.com', '', 0),
(32, 'Ibrahim Salhibrahim', 'a960707603d659dbf091c22c7550ae6f2c9cb43d', 1, 'Ibrahim', 'Salh Ibrahim', '3992 SG', 'ibrahimboka9@gmail.com', '', 0),
(33, 'Ameera Milhim', '4e62cf8c5a47591b63c5d5dc1cfa7d0dd63e8f16', 1, 'Ameera', 'Milhim', '7131DL', 'amiramihm@gmail.com', '', 0),
(34, 'Hussein Alattar', '79b30566e09395689b9950b73fd8f6db674dd2a8', 1, 'Hussein', 'Al Attar', '6537LS', 'husiyen1982ates@gmail.com', '', 0),
(35, 'Mirvat Orabi', '0d1965b7b9fb98221ce26e967838338c164a0243', 1, 'Mirvat', 'Orabi', '1399KS', 'Hussam3f78@gmail.com', '', 0),
(36, 'Belal Aljundi', '6403996dc527a85e59df6115a5ecedfb295bd5fd', 1, 'Belal', 'Aljundi', '7141BD', 'Bilaljendi1@gmail.com', '', 0),
(37, 'Majida Alnimalmasri', '7e8207537e9dd0bf230f22376384dc3f07ba7d4a', 1, 'Majida', 'Alnims Almasri', '8072GB', 'jadda2010@hotmail.com', '', 0),
(38, 'Ahmad Almaleeh', '196964dd6de244f414a450dc3409335b76583952', 1, 'Ahmad', 'Almaleeh', '5951 jc', 'ah.almaleeh@gmail.com', '', 0),
(39, 'Ammar Matar', '3c64b4741af990a9daf2daf9895ea7e1ec759136', 1, 'Ammar', 'Matar', '8325XM', 'ammar-matar84@hotmail.com', '', 0),
(40, 'Dalia Alhajdiab', '3c64b4741af990a9daf2daf9895ea7e1ec759136', 1, 'Dalia', 'Al Haj Diab', '8325XM', 'daliahaj88@gmail.com', '', 0),
(41, 'Ali Katsheh', '99423d7d25c6ab69ac9668d8631a23b46fd69b7a', 1, 'Ali', 'Katsheh', '5447 AL', 'alikatsha@gmail.com', '', 0),
(42, 'Shiyar Mesto', 'e6c1c82d6b00b8d23f4c0b804b8ff6ae550f7ef8', 1, 'Shiyar', 'Mesto', '6538 KA', 'shiyarmesto@hotmail.com', '', 0),
(43, 'Lilav Mesto', 'e6c1c82d6b00b8d23f4c0b804b8ff6ae550f7ef8', 1, 'Lilav', 'Mesto', '6538 KA', 'lilavmesto1994@gmail.com', '', 0),
(44, 'Fouad Alsabbagh', 'b2f43bdfdaf915cba0a29e0ea36f41a5d0c8b7a3', 1, 'Fouad', 'Alsabbagh', '1115DH', 'fouadsabag@gmail.com', '', 0),
(45, 'Patricia Lutfi', '5d4d3d50737155aac7a604721bea2c28775f9a8b', 1, 'Patricia', 'Lutfi', '1412AH', 'patricia333lu@gmail.com', '', 0),
(46, 'Abdullah Lutfi', '5d4d3d50737155aac7a604721bea2c28775f9a8b', 1, 'Abdullah', 'Lutfi', '1412AH', 'abd28lu@gmail.com', '', 0),
(47, 'Bilal Sultan', 'ebdb0426e17463cd3501c5dacbdb19a1486cc647', 1, 'Bilal', 'Sultan', '4902XL', 'belal.soultan@gmail.com', '', 0),
(48, 'Ahmad Naefaldarwesh', 'af90eca3f468041e141ced5bbb46df5f8206274b', 1, 'ahmad', 'naef al darwesh', '3994DA', 'ahmad_aldarwesh@hotmail.com', '', 0),
(49, 'Mona Turaani', '6221625ce7007f11c6567c79e4c7b1a6634e6438', 1, 'Mona', 'Turaani', '4941 ZH', 'talal_ka@yahoo.com', '', 0),
(50, 'Hekmat Sharshara', '05fb1782c730aa195a7370507393f5299361cd23', 1, 'Hekmat', 'Sharshara', '3951BC', 'mohummed.moede77@gmail.com', '', 0),
(51, 'Hanen Lafi', '05fb1782c730aa195a7370507393f5299361cd23', 1, 'Hanen', 'Lafi', '3951BC', 'modehanen77@gmail.com', '', 0),
(52, 'Dyana Almaleeh', 'bc0d9c2679656306d98f357bf97fd30781a5d5b7', 1, 'Dyana', 'Almaleeh', '5995 CG', 'dyana.almaleeh@gmail.com', '', 0),
(53, 'Goson Alkhalil', 'a6497c1d4bcc5a64e86155177ff80b2e7190f265', 1, 'Goson', 'Alkhalil', '4908AA', 'nezar9883@gmail.com', '', 0),
(54, 'Haitham Trro', '745232e8b900e02cc26145b14071870c9ad70141', 1, 'Haitham', 'Trro', '8255CM', 'hi.them@hotmail.com', '', 0),
(55, 'Nebal Danki', '745232e8b900e02cc26145b14071870c9ad70141', 1, 'Nebal', 'Danki', '8255CM', 'Ndanki1983@hotmail.com', '', 0),
(56, 'Bader Yousef', '557eabb7beea84c1be571c478345ca3c4033a3ed', 1, 'Bader Aldeen', 'AL-Sheikh Yousef', '7443 Jv', 'abomahmood2013@gmail.com', '', 0),
(57, 'Mhd Momo', 'ea382d41cee9c4987ed6e9eb640de9590ae480ab', 1, 'Mhd Ayman', 'Mezyan Momo', '6585 XZ', 'ayman.mzian81@outlook.com', '', 0),
(58, 'Mahmood Alkeem', 'cfdbe8a2d8f43c19ba05e53ca99a38d8109ea73e', 1, 'Mahmood', 'Alkeem', '6585XD', 'mahmoodkem@gmail.com', '', 0),
(59, 'Randa Kheireldine', 'ec3b6c04b983623ba18e861c42f277c4229fb63c', 1, 'Randa', 'Kheireldine', '3564BR', 'dr.randakheireldine@gmail.com', '', 0),
(60, 'Mohammad Alhaboul', '62b5ded8de48fdfb6e8a79449983ee4a9343064d', 1, 'Mohammad Hamza', 'Alhaboul', '5591LN', 'hamzaalhaboul@yahoo.com', '', 0),
(61, 'Abdalrhman Mohammad', '61175524a94337445da445f733edc75ca7169965', 1, 'Abdalrhman', 'Mohammad', '8926RE', 'Abdurhman.alkurdi1@gmail.com', '', 0),
(62, 'Mohammad Aldarwesh', '15575b08219ed38a329d231e4c9aaca31e5520cc', 1, 'mohammad', 'naef al darwesh', '3994da', 'mohammad_86dr@hotmail.com', '', 0),
(63, 'Bassam Barkal', '6bf3f56d7f5bd5ce0c8e12caca4f6aeb7f78920c', 1, 'Bassam', 'Barkal', '3851 AH', 'bassambarkal06@gmail.com', '', 0),
(64, 'Omid Safari', 'ec3b6c04b983623ba18e861c42f277c4229fb63c', 1, 'Omid', 'Safari', '3564BR', 'azadi734@gmail.com', '', 0),
(65, 'Rakan Douli', '5ead220669e1f89e5c80fd674cd7e6c8a65f232a', 1, 'Rakan', 'Douli', '3564VK', 'Rakandouli@gmail.com', '', 0),
(66, 'Jamal Izzeddin', '6b2b985a7a5d88cdd2aba58e7a23cb04c58d45b4', 1, 'Jamal', 'Izzeddin', '3844 CT', 'azaldenn123@gmail.com', '', 0),
(67, 'Nezar Alshekh', 'a6497c1d4bcc5a64e86155177ff80b2e7190f265', 1, 'Nezar', 'Alshekh', '4908AA', 'Nezar.hamza@outlook.com', '', 0),
(68, 'Mohamad Alqujak', 'dae95b9379d1090136d299b0bad871062c13548b', 1, 'Mohamad', 'Alqujak', '9648BL', 'sins.man1996@gmail.com', '', 0),
(69, 'Adnan Aldeeb', '4229367c8d5425e6505b47d53de6772207a7f96a', 1, 'Adnan', 'Aldeeb', '5628 RM', 'dradnandentist@gmail.com', '', 0),
(70, 'Samar Jneid', 'f83696ad4b5d6e1a88b4498ebf5b2e9bab3edb87', 1, 'Samar', 'Jneid', '2526RL', 'samarjneid@gmail.com', '', 0),
(71, 'Mona Jayab', 'b10edfb62389a21fc0c08a8f2c9a3d42a2524cba', 1, 'Mona', 'Jayab', '7415DG', 'Mona.jayab2@gmail.com', '', 0),
(72, 'Sadah Alabd', '3dfd2d9f8fd8a2893b8a79182c13f52c284c5aec', 1, 'Sadah', 'Alabd', '1338BM', 'aljasem.dana@gmail.com', '', 0),
(73, 'Nousaiba Hijazi', 'd8414c7478d50c8c12b0171a28daf3b35bb14941', 1, 'Nousaiba', 'Hijazi', '5653AH', 'nousaiba.hijazi1@gmail.com', '', 0),
(74, 'Sana Mohamedali', '3a727e8681c9022bb6ba439b8844fca948a88b95', 1, 'Sana', 'Mohamed ali', '5451BB', 'Wasim8116@hotmail.com', '', 0),
(75, 'Nour Badinjki', 'fcca51440a94947500c405e8eada9558929011f6', 1, 'Nour', 'Badinjki', '1102 WV', 'nourbadinjki@gmail.com', '', 0),
(76, 'Nawal Bakdaliyeh', 'c840a9f416ac5f668c297b90ad3e54502e5b6d44', 1, 'Nawal', 'BAKDALIYEH', '9675LL', 'noalalahmad4@gmail.com', '', 0),
(77, 'Shahama Kabbani', 'dfaa17b3312cfd867f9ea01870aaad983a7090f6', 1, 'Shahama', 'Kabbani', '3991AW', 'skabani28@gmail.com', '', 0),
(78, 'Zakaria Jafar', '6d0d77af9865e00bd15ba8d60970455fa6bd0776', 1, 'Zakaria', 'Jafar', '6707BC', 'Jafarzakaria1980@gmail.com', '', 0),
(79, 'Mohamad Nouralagha', '0773c30a0502254c79c6c86ad8711cada57fd0d4', 1, 'Mohamad Nour', 'Alagha', '9733AW', 'n.alagha.1995@gmail.com', '', 0),
(80, 'Sally Koujan', '0773c30a0502254c79c6c86ad8711cada57fd0d4', 1, 'Sally', 'Koujan', '9733AW', 'Sally1997k@gmail.com', '', 0),
(81, 'Mohamed Osmanabou', '048772f14108f9a44caed6a4b2ee16ddab9a2d3c', 1, 'Mohamed', 'Osman Abou', '5384HC', 'aboface.free@gmail.com', '', 0),
(82, 'Rulya Issa', 'c7947781c1a0eb6b46e88860e892a9d2da1795a1', 1, 'Rulya', 'Issa', '9831 RR', 'Rulyaissa@gmail.com', '', 0),
(83, 'Fade Kisle', '4146f474500158d8401af216a9001df7692fa4cc', 1, 'Fade', 'Kisle', '9715TA', 'Fa1997di-love@hotmail.com', '', 0),
(84, 'Hussain Salama', 'f0659c894e2538de55d3dbdd0cad3edab31361cf', 1, '201806-658', '354541924', '9074AV', 'Hussain', '', 0),
(85, 'Shaznan Renno', 'f0659c894e2538de55d3dbdd0cad3edab31361cf', 1, 'Shaznan', 'Renno', '9074AV', 'shaznanrenno1993@gmail.com', '', 0),
(86, 'Fadwa Omar', '92278727604f5020b287745794138dcb919cfdc7', 1, 'Fadwa', 'Omar', '9736 BS', 'fadwa.abaza.1969@gmail.com', '', 0),
(87, 'Nidal Alagha', '92278727604f5020b287745794138dcb919cfdc7', 1, 'Nidal', 'Alagha', '9736 BS', 'nidal.alagha.1965@gmail.com', '', 0),
(88, 'Yacoub Yacoub', 'cac16dd690d30c6fd6b12b2cb242abcc02d1a6ea', 1, 'Yacoub', 'Yacoub', '8922AD', 'yacoubyacoub1983@gmail.com', '', 0),
(89, 'Youssef  Alagha', '92278727604f5020b287745794138dcb919cfdc7', 1, 'Youssef', 'Alagha', '9736 BS', 'yousefkiki156@gmail.com', '', 0),
(90, 'Kholod Khalili', '23c466e70843b8fd28ac861df230aead6873cfd2', 1, 'Kholod', 'Khalili', '3402 HA', 'kholod.abed22@gmail.com', '', 0),
(91, 'Rana Alwarda', '2778bb408a9600731b9a6c5a7120a51dc14615b7', 1, 'Rana', 'Alwarda', '2801VZ', 'rana.wardeh123@gmail.com', '', 0),
(92, 'Mahmoud Rihawi', '73d2cd052071e07d8f7374c46ba521f03db79709', 1, 'Mahmoud', 'Rihawi', '8442AX', 'm.rihawi.66@gmail.com', '', 0),
(93, 'Ghosoun Obaji', '73d2cd052071e07d8f7374c46ba521f03db79709', 1, 'Ghosoun', 'Obaji', '8442AX', 'ghosounobaji@gmail.com', '', 0),
(94, 'Alaa Almasalma', '223e07309a24049308394883a151f8436b5b8fd0', 1, 'Alaa', 'Al barkat al masalma', '3417Eh', 'Alaaalmasa88@gmail.com', '', 0),
(95, 'Faten Almtwali', 'f0659c894e2538de55d3dbdd0cad3edab31361cf', 1, 'Fatin', 'AL Mtwali', '9074AV', 'faalmooi@hotmail.com', '', 0),
(96, 'Amira Mezal', '6c1fe2b9774ea59ba259a56bd78dba358a99aafe', 1, 'Amira', 'Mezal', '9251JN', 'aliahmd19712000@gmail.com', '', 0),
(97, 'Abdulhalim Hajhassoun', '2e45aed52dfe9e59fba8943f2f5bd26137d5dcb0', 1, 'Abdulhalim', 'Haj Hassoun', '9713TD', 'haleemhattab@yahoo.com', '', 0),
(98, 'Hanadi Alatrash', '190ce2f3eb38c78b50bad6f58faad154c2394b70', 1, 'Hanadi', 'Al Atrash', '5625ll', 'alatrash783@gmail.com', '', 0),
(99, 'Mohsen Alhussein', 'ecc44f09d7182cd5cf0bd1f3d63a068aef5f84f5', 1, 'Mohsen', 'Alhussein', '4401HM', 'mehsenalhosen@gmail.com', '', 0),
(100, 'Noura Hamshokhrma', 'ada1f9e9c796167bea60979015b8ee14b19e8f06', 1, 'Noura', 'Hamsho khrma', '2597JW', 'noura81saad@gmail.com', '', 0),
(101, 'Rawan Qbaa', 'fd17816e2278902e223cd3a5830e817e9ed79aba', 1, 'Rawan', 'Qbaa', '5531DB', 'rawanqbaa8@gmail.com', '', 0),
(102, 'Obada Oda', 'ee006ae13035cda6fab003627d5d521ae41b96bb', 1, 'obada', 'oda', '5404NN', 'odeobada@gmail.com', '', 0),
(103, 'Reham Bdiwi', '07ee53944a8e112869c84794c14a916894bb12a8', 1, 'Reham', 'Bdiwi', '5233HT', 'bdiwi.reham@gmail.com', '', 0),
(104, 'Nour Shaban', '6607a92879984f19c187485b912fd304dc19afd9', 1, 'Nour', 'Shaban', '7061CB', 'Nanoshaaban95@gmail.com', '', 0),
(105, 'Mohmad Jamil', '291c35faf7cca7dc8f8ddd0962279e649e6cf821', 1, 'Mohmad Jamil', 'Issa', '8281GA', 'gamilissa33@gmail.com', '', 0),
(106, 'Ola Hariri', '291c35faf7cca7dc8f8ddd0962279e649e6cf821', 1, 'Ola', 'Hariri', '8281GA', 'Olaharira2018@gmail.com', '', 0),
(107, 'Ghazi Alkhalaf', '7c849223183efa85d869b8abdd7b8c6b236578fa', 1, 'Ghazi', 'Alkhalaf', '5754TE', 'Ghazi.syrian1987@gmail.com', '', 0),
(108, 'Ruboaa Alnserat', '223e07309a24049308394883a151f8436b5b8fd0', 1, 'Ruboaa', 'Al nserat', '3417Eh', 'Remans686@gmail.com', '', 0),
(109, 'Fadi Alkojok', 'dae95b9379d1090136d299b0bad871062c13548b', 1, 'Fadi', 'Alkojok', '9648BL', 'fadifame3@gmail.com', '', 0),
(110, 'Rada Alrahim', 'ffb398c6f603834cab856f5a6aead5c2cd719107', 1, 'Rada', 'Alrahim', '9645NB', 'RadaAlrahim@gmail.com', '', 0),
(111, 'Barin Doudakh', 'f0c35294a5fa84c0c2186c479871fc367025d47a', 1, 'Barin', 'Doudakh', '5554MZ', 'barindoudakh88@gmail.com', '', 0),
(112, 'Evin Salman', 'f63c2407ddf86b5034a3a586c8faf02f4562efca', 1, 'Evin', 'Salman', '6714LJ', 'hevasalman@gmail.com', '', 0),
(113, 'Sahar Amer', '0779f1bba9d5ad0f65e959f440ae4d6ee3562fb4', 1, 'Sahar', 'Amer', '1092 CD', 'sahar.aamer2016@gmail.com', '', 0),
(114, 'Rebal Korkmaz', '0779f1bba9d5ad0f65e959f440ae4d6ee3562fb4', 1, 'Rebal', 'Korkmaz', '1092 CD', 'k_rebal94@yahoo.com', '', 0),
(115, 'Hiba Razzouk', '8eb52db8f56977b49a0ef202601acb0e85d08a35', 1, 'Hiba', 'Razzouk', '2547GR', 'Hiba.razzouk@hotmail.com', '', 0),
(116, 'Jneed Alahmad', '0fa2fd8028734ad0fc54537a04728a160d590ede', 1, 'Jneed', 'Alahmad', '6701DB', 'Jneed1959@gmail.com', '', 0),
(117, 'Khadijeh Alfaouri', 'daf79906ebacd506ff71f63d0ae380ceec2e4c4e', 1, 'Khadijeh', 'Alfaouri', '8161XS', 'alomari119@outlook.com', '', 0),
(118, 'Mohamad Estanbouli', 'ffb398c6f603834cab856f5a6aead5c2cd719107', 1, 'Mohamad', 'Estanbouli', '9645NB', 'Mestanbouli9@gmail.com', '', 0),
(119, 'Ebrahim Albaradan', '834042f35c7f1d9384703ad33ac97dd32f7df814', 1, 'Ebrahim', 'Albaradan', '2211 KJ', 'amiersy8@gmail.com', '', 0),
(120, 'Nour Aljebraeil', 'acb5a487492243215d7869313f55c4e70cd25652', 1, 'Nour', 'Aljebraeil', '6114BM', 'Nouraljebraeilfaisal@gmail.com', '', 0),
(121, 'Mohammad Kattout', 'acb5a487492243215d7869313f55c4e70cd25652', 1, 'Mohammad zyad', 'Kattout', '6114BM', 'kattoutmohamadzyad@gmail.com', '', 0),
(122, 'Mohammed Alibrahim', 'f659eaca7030fe632d8629fb01726ae3377e649c', 1, 'Mohammed kheir', 'Alibrahim', '2273ED', 'mhmadab221@gmail.com', '', 0),
(123, 'Waseem Ghorabi', '1799647d319439bc15bd94b0bbc3abbd11dac99a', 1, 'Waseem', 'Ghorabi', '5553BP', 'waseemghorabi@yahoo.com', '', 0),
(124, 'Kseniya Lebedyeva', '9eb409c9e322937caaee0131dff78bb6585ee132', 1, 'Kseniya', 'Lebedyeva', '7329dc', 'imado980@Yahoo.com', '', 0),
(125, 'Mirvat Alsoufi', 'c6ad2494fff70352783d9f68601f06f734c11828', 1, 'Mirvat', 'Alsoufi', '3564HH', 'mirvatalsufi@gmail.com', '', 0),
(126, 'Mohamed Mohder', 'bed0d11666093d8b8d56f50198ab945cdfe0d105', 1, 'Mohamed Emad', 'Mohder', '8015DA', 'memadm86@gmail.com', '', 0),
(127, 'Feras Trabichi', 'a714d1c50f05ae5d9a5695c6ee0c7f3f1002cacc', 1, 'Feras', 'Trabichi', '1055AA', 'Ftttarabechi@gmail.com', '', 0),
(128, 'Faten Kanji', '5c810eb872efc66cd27b6116a86e54f5a34e42e3', 1, 'Faten', 'Kanj', '6708JL', 'fatenk84@hotmail.com', '', 0),
(129, 'Bayan Musallab', '42e88ff63a3e386b0127c927dcec1d2654504ee2', 1, 'Bayan', 'Musallab', '7206ED', 'bayan.musallab1@gmail.com', '', 0),
(130, 'Raneem Musallab', '42e88ff63a3e386b0127c927dcec1d2654504ee2', 1, 'Raneem', 'Musallab', '7206ED', 'Raneemmusallab@gmail.com', '', 0),
(131, 'Mohammad Musallab', '42e88ff63a3e386b0127c927dcec1d2654504ee2', 1, 'Mohamad', 'Musallab', '7206ED', 'Musallab1@gmail.com', '', 0),
(132, 'Mohammad Dhimesh', '371751d70776a716ec4c43126715566498bba51d', 1, 'Mohammad', 'Dhimesh', '3766GV', 'Mohammaddhimesh@gmail.com', '', 0),
(133, 'Ismail Alradi', 'cd1b621dadbabcc2a12629b046fb49a9a5d538bf', 1, 'Ismail', 'Alradi', '8331AX', 'tobhto27@gmail.com', '', 0),
(134, 'Rima Helli', 'd239dba688b0d29046d84abe8fc87e0738231cab', 1, 'Rima', 'Helli', '7091 DV', 'helli1684@gmail.com', '', 0),
(135, 'Omar Barkal', 'a7533b8d0016f72d72549c66729d421f0219be76', 1, 'Omar', 'Barkal', '7321MS', 'Omarbarkal2015@gmail.com', '', 0),
(136, 'Ali Alomari', 'daf79906ebacd506ff71f63d0ae380ceec2e4c4e', 1, 'Ali', 'Alomari', '8161XS', 'ali123omari@gmail.com', '', 0),
(137, 'Murhaf Tarakji', '3cc66268b6fc3fbcfcdcf717693e26f0b55499bd', 1, 'Murhaf', 'Tarakji', '6707AA', 'tarakji.m71@yahoo.com', '', 0),
(138, 'Zahida Aalammo', '3cc66268b6fc3fbcfcdcf717693e26f0b55499bd', 1, 'Zahida', 'Aal Ammo', '6707AA', 'abbudetarakji98@gmail.com', '', 0),
(139, 'Feras Abdullah', '303829d579967d3c8cdee581bdd64af835df40b8', 1, 'Feras', 'Abdullah', '7687AC', 'Abo.omar88x@gmail.com', '', 0),
(140, 'Muhannad Bitar', 'b4aacdb30667407c6b877708794ec46cfea49cd1', 1, 'Muhannad', 'Bitar', '5702XT', 'semson55@gmail.com', '', 0),
(141, 'Raja Ibrahim', '884831fbc2fcd4148ff81ac4928cef011a5943cb', 1, 'Raja', 'Ibrahim', '3552HH', 'rajaaibrahim94@gmail.com', '', 0),
(142, 'Mohamed Shaalan', 'f9f62f2553487348dbdddd862ed35b4d0bb2b7f5', 1, 'Mohamed', 'Shaalan', '2631LB', 'messam_rms@yahoo.com', '', 0),
(143, 'Yasmin Darwish', 'f9f62f2553487348dbdddd862ed35b4d0bb2b7f5', 1, 'Yasmin', 'Darwish', '2631LB', 'yasmin.darwish23@gmail.com', '', 0),
(144, 'Niamat Alkadour', '3a70b938d19bdc862ee48cbdc8dad08f65e8aea4', 1, 'Niamat', 'Al Kadour', '6541WZ', 'niamatkadour@gmail.com', '', 0),
(145, 'Aziza Jabara', 'b4aacdb30667407c6b877708794ec46cfea49cd1', 1, 'Aziza', 'Jabara', '5702XT', 'azizajabara@gmail.com', '', 0),
(146, 'Naela Mohamad', 'ec1d5ce189d1917bb4244b12e60038000124bf6d', 1, 'Naela', 'Mohamad', '2805EB', 'bavyjan@hotmail.com', '', 0),
(147, 'Nadwa Smooneh', 'c9acd8cf37d33c73cd5aff7694f5db9a5f8d3749', 1, 'Nadwa', 'Smooneh', '3561KJ', 'nadwa.smooneh@gmail.com', '', 0),
(148, 'Layla Motlaq', 'be5df50deca7e9b86a96b80004543af899e5a805', 1, 'Layla', 'Motlaq', '3552CT', 'laylamutlaq@gmail.com', '', 0),
(149, 'Marwan Farid', '9d841562c501bdf0bc207237936fb699b7d0a8c9', 1, 'Marwan', 'Farid', '6532RH', 'marwanobidye@gmail.com', '', 0),
(150, 'Aya Ali', 'fb36a69f0776ab930dfcfaeb1fa9612ead09d101', 1, 'Aya', 'Mohammad Ali', '1335GK', 'Dark.blackama@gmail.com', '', 0),
(151, 'Mohamad Almasri', 'e4aa83d07b875af31eafd8f0d5bec5017b853caa', 1, 'Mohamad Feras', 'Almasri', '1335 GK', 'Firas4almassre@gmail.com', '', 0),
(152, 'Ziena Shaban', 'fa9cc57b0c953701b1fb14a706ddf4ad701fc051', 1, 'Ziena', 'Shaban', '5142CW', 'amiraljouma3@gmail.com', '', 0),
(153, 'Jamil Ibesh', 'fcba68e699564c1941fa9328d65c92f68b057980', 1, 'Jamila', 'Ibesh', '7255 WJ', 'jamilaibesh1959@gmail.com', '', 0),
(154, 'Bayan Zayat', '7a34475474a3a1b1084fb52dda3f6b033fc813eb', 1, 'Bayan', 'Zayat', '7551BT', 'bayanzayat1@gmail.com', '', 0),
(155, 'Mustafa Ghalia', '8527452a4f95a28af78c6924a766f32545842179', 1, 'Mustafa', 'Ghalia', '5591LR', 'Mustafagh96@gmail.com', '', 0),
(156, 'Abeer Abohamda', '435a91b6050ff10609cbcc03187b2bd4c9e6bccd', 1, 'Abeer', 'Abohamda', '7061AH', 'Abaar488@gmail.com', '', 0),
(157, 'Wissam Hamideh', '9ca25faa48beb23d2c23b474d255403bcb9b82fb', 1, 'Wissam', 'Hamideh', '6702AM', 'whamideh@whoffice.nl', '', 0);

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

--
-- Dumping data for table `student_visites`
--

INSERT INTO `student_visites` (`id`, `student_id`, `login_time`, `last_action_time`) VALUES
(65, 9, 1545679835, 1545683588),
(66, 9, 1545683589, 1545687081),
(67, 10, 1545685080, 1545687839),
(68, 11, 1545694636, 1545694683),
(69, 10, 1545749481, 1545756206),
(70, 12, 1545772330, 1545772370),
(71, 12, 1545810198, 1545810290),
(72, 10, 1545846427, 1545850166),
(73, 10, 1545858490, 1545859742),
(74, 12, 1545900113, 1545900463),
(75, 12, 1546113832, 1546115299),
(76, 12, 1546121289, 1546124971),
(77, 11, 1546121393, 1546121460),
(78, 12, 1546168851, 1546170457),
(79, 11, 1546219353, 1546219396),
(80, 12, 1546243521, 1546243574),
(81, 12, 1546274025, 1546274026),
(82, 12, 1546274077, 1546274078),
(83, 12, 1546274097, 1546274098),
(84, 12, 1546274307, 1546274307),
(85, 12, 1546274321, 1546274322),
(86, 12, 1546274406, 1546274408),
(87, 12, 1546274717, 1546274718),
(88, 12, 1546274730, 1546274732),
(89, 12, 1546275087, 1546275144),
(90, 12, 1546275289, 1546275402),
(91, 10, 1546275763, 1546277392),
(92, 10, 1546277393, 1546278150),
(93, 11, 1546277414, 1546277499),
(94, 11, 1546277723, 1546277731),
(95, 10, 1546278151, 1546278204),
(96, 10, 1546278204, 1546278272),
(97, 10, 1546278273, 1546278309),
(98, 10, 1546278310, 1546278330),
(99, 10, 1546278331, 1546278362),
(100, 10, 1546278363, 1546279048),
(101, 11, 1546278493, 1546278493),
(102, 11, 1546278503, 1546278503),
(103, 10, 1546279048, 1546279258),
(104, 10, 1546279258, 1546279327),
(105, 10, 1546279860, 1546280102),
(106, 10, 1546280103, 1546280385),
(107, 10, 1546280385, 1546294115),
(108, 157, 1546281743, 1546286223),
(109, 11, 1546292650, 1546292711),
(110, 11, 1546297465, 1546297482),
(111, 10, 1546300560, 1546300560),
(112, 10, 1546300581, 1546300581),
(113, 12, 1546339443, 1546339468),
(114, 12, 1546339575, 1546339588),
(115, 11, 1546340000, 1546340014),
(116, 11, 1546340074, 1546340087),
(117, 11, 1546343591, 1546343591),
(118, 12, 1546343705, 1546343712),
(119, 10, 1546343790, 1546344350),
(120, 157, 1546344143, 1546344480),
(121, 12, 1546344512, 1546345402),
(122, 12, 1546345745, 1546346085),
(123, 11, 1546346002, 1546346007),
(124, 12, 1546346087, 1546346087),
(125, 12, 1546346087, 1546346340),
(126, 12, 1546346344, 1546346380),
(127, 12, 1546346664, 1546347020),
(128, 11, 1546347963, 1546347963),
(129, 12, 1546348057, 1546348080),
(130, 12, 1546348167, 1546348176),
(131, 11, 1546348683, 1546348684),
(132, 11, 1546348933, 1546348933),
(133, 12, 1546349007, 1546349023),
(134, 11, 1546349198, 1546349203),
(135, 11, 1546353677, 1546353691),
(136, 12, 1546353947, 1546353993),
(137, 12, 1546354037, 1546354077),
(138, 12, 1546354157, 1546354181),
(139, 157, 1546355197, 1546355959),
(140, 12, 1546361387, 1546361397),
(141, 12, 1546371069, 1546372867),
(142, 10, 1546372878, 1546374434),
(143, 10, 1546376147, 1546376314),
(144, 10, 1546425941, 1546426438),
(145, 10, 1546431528, 1546434166),
(146, 10, 1546437663, 1546437949),
(147, 12, 1546457369, 1546462125),
(148, 12, 1546465063, 1546465087),
(149, 10, 1546465435, 1546469593),
(150, 11, 1546472831, 1546472897),
(151, 12, 1546474452, 1546474625),
(152, 12, 1546495531, 1546495778),
(153, 12, 1546496105, 1546496309),
(154, 12, 1546505312, 1546505577),
(155, 12, 1546510898, 1546510904),
(156, 12, 1546510904, 1546511092),
(157, 12, 1546514335, 1546514631),
(158, 10, 1546514916, 1546519063),
(159, 10, 1546519068, 1546520438);

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
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `password`, `active`, `firstname`, `lastname`, `postal_code`, `email`) VALUES
(1, 'teacher', '4a82cb6db537ef6c5b53d144854e146de79502e8', 1, 'Amjad', 'Rahal', '', '');

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
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams_questions`
--
ALTER TABLE `exams_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `exams_questions_answers`
--
ALTER TABLE `exams_questions_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `page_text`
--
ALTER TABLE `page_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheduled_emails_to_sent`
--
ALTER TABLE `scheduled_emails_to_sent`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `card_2`
--
ALTER TABLE `card_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `card_3`
--
ALTER TABLE `card_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `card_8`
--
ALTER TABLE `card_8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employment_letter_template`
--
ALTER TABLE `employment_letter_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `exams_questions`
--
ALTER TABLE `exams_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `exams_questions_answers`
--
ALTER TABLE `exams_questions_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `page_text`
--
ALTER TABLE `page_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;
--
-- AUTO_INCREMENT for table `scheduled_emails_to_sent`
--
ALTER TABLE `scheduled_emails_to_sent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1630;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
--
-- AUTO_INCREMENT for table `student_visites`
--
ALTER TABLE `student_visites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
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
-- Constraints for table `exams_questions`
--
ALTER TABLE `exams_questions`
  ADD CONSTRAINT `exams_questions_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exams_questions_answers`
--
ALTER TABLE `exams_questions_answers`
  ADD CONSTRAINT `exams_questions_answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `exams_questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_visites`
--
ALTER TABLE `student_visites`
  ADD CONSTRAINT `student_visites_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
