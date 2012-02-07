-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2012 at 10:06 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `s91150`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `activity_name` varchar(45) NOT NULL,
  `activity_desc` varchar(255) NOT NULL,
  `seeker_goal_id` int(11) NOT NULL,
  `activity_status` varchar(15) NOT NULL DEFAULT 'new',
  PRIMARY KEY (`activity_id`),
  KEY `fk_activity_seeker_goal1` (`seeker_goal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` VALUES(13, '2011-07-31', '2011-07-31', 'Call my family members', 'Talk to my family members through phone', 14, 'Completed');
INSERT INTO `activity` VALUES(21, '2011-12-06', '2012-02-19', 'Outing with family.', 'Plan outing. Check everyone timing.', 28, 'New');
INSERT INTO `activity` VALUES(22, '2011-12-11', '2011-12-11', 'Go out shopping with my family', 'We all should be able present and we will go some shopping mall even if it is Bukit Panjang Plaza to have at least a simple dinner or shopping around at the plaze', 58, 'New');
INSERT INTO `activity` VALUES(23, '2011-12-06', '2013-03-31', 'study period', 'study one hour each day.', 39, 'New');
INSERT INTO `activity` VALUES(24, '2011-12-16', '2011-12-16', 'Have dinner/lunch together.', 'BUffet at Sakuar', 27, 'New');
INSERT INTO `activity` VALUES(25, '0000-00-00', '0000-00-00', 'asdasd', 'asdasd', 83, 'In Progress');
INSERT INTO `activity` VALUES(26, '2011-12-12', '2012-01-13', 'Attend Class Everyday', 'Attend Class Everyday', 90, 'In Progress');
INSERT INTO `activity` VALUES(27, '2011-12-12', '2012-02-02', 'Attend to the class', 'NA', 99, 'In Progress');
INSERT INTO `activity` VALUES(28, '2011-12-12', '2011-12-13', 'Call Parents', 'Call My Parent weekend', 94, 'New');
INSERT INTO `activity` VALUES(29, '2011-12-13', '2011-12-14', 'aa', 'aaaa', 92, 'New');
INSERT INTO `activity` VALUES(30, '2012-03-03', '2012-03-23', 'Travel', 'Go for a overseas trip.', 102, 'New');
INSERT INTO `activity` VALUES(31, '2011-12-15', '2012-01-18', 'Happy', 'Happy', 164, 'In Progress');
INSERT INTO `activity` VALUES(32, '2011-12-17', '2011-12-18', 'Call my parents at this weekend', 'Call my parents and tell them about my plan after graduation', 14, 'Completed');
INSERT INTO `activity` VALUES(33, '0000-00-00', '0000-00-00', 'learn more study less', 'read books for all subjects magazinesreading gains knowledge and knowledge is power\r\nbooks:list down the books to read', 251, 'New');
INSERT INTO `activity` VALUES(34, '2012-01-03', '2012-10-24', 'revise at home the work  the teacher taught', 'read through notes and do assesments.', 263, 'New');
INSERT INTO `activity` VALUES(35, '2011-12-29', '2012-10-31', 'Read before hand and revise', 'Read the topics before my teacher teaches me to understand more and revise what I had learnt that day.', 275, 'New');
INSERT INTO `activity` VALUES(36, '2012-01-02', '2012-10-06', 'do finish all homework', 'once come home eat lunch and then finish homework', 265, 'New');
INSERT INTO `activity` VALUES(37, '2012-01-01', '2012-01-31', 'Science', 'Complete all science topics revision 1', 268, 'New');
INSERT INTO `activity` VALUES(38, '2012-01-01', '2012-01-31', 'Math', 'Do extra 15 sums per week excluding school assigned homework & tuition homework', 268, 'New');
INSERT INTO `activity` VALUES(39, '2012-01-01', '2012-01-31', 'English', 'Per week: - Write 1 new compo, Do 2 chapters of Vocabulary, 1 chapter of Grammar & Synthesis, 1 open-ended & MCQ Comprehension', 268, 'New');
INSERT INTO `activity` VALUES(40, '2012-01-01', '2012-01-31', 'Chinese', 'Do 1 additional chapter on own initiative excluding homework from school, tuition & papa', 268, 'New');
INSERT INTO `activity` VALUES(41, '2012-01-01', '2012-01-31', 'Violin', 'Practice violin on Sunday, Monday, Wednesday & Friday for half hour', 268, 'New');
INSERT INTO `activity` VALUES(42, '2012-01-09', '2012-01-20', 'jknjkn', 'mnl', 293, 'New');
INSERT INTO `activity` VALUES(43, '2012-01-31', '2012-01-31', 'Tell my mother about the interesting things h', 'Tell her the funny story I heard in school', 295, 'Completed');
INSERT INTO `activity` VALUES(44, '2012-02-01', '2012-02-08', 'test', 'erggsfdg', 296, 'New');
INSERT INTO `activity` VALUES(45, '2012-01-31', '2012-01-31', 'Tell my mother about the interesting things h', 'Tell her the funny story I heard in school', 295, 'Completed');
INSERT INTO `activity` VALUES(46, '2012-01-31', '2012-02-16', 'Looking for job online', 'Go to JobStreet.com to find job', 298, 'New');
INSERT INTO `activity` VALUES(47, '2012-02-02', '2012-02-02', 'Review the UT3 for Business Intelligence', '1.Review the worksheet from week 1 to week 15 and identify the doubts\r\n2.Look at the supplement sheet to remember how to use the SAS tool', 299, 'New');
INSERT INTO `activity` VALUES(48, '2012-02-07', '2012-02-10', 's', 'never validate? '';'';''''//', 294, 'New');
INSERT INTO `activity` VALUES(49, '2012-02-07', '2012-02-11', 'a', '233', 302, 'In Progress');
INSERT INTO `activity` VALUES(50, '2012-02-08', '2012-02-25', 'Testing123', 'Testing123 Description', 89, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `article` text NOT NULL,
  `date` date NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` VALUES(2, 'Our Philosophy', 'We wanted to develop  an application that helps youth increase their level of achievements not only academically but in life.  Hence the team started to identify core life skills and learned that the ability of a person’s ability to maintain his/her locus of control is essential to achievement but also happiness.  To this end, the team’s research led them to the field of positive psychology and that positive thinking can not only enhance likelihood of attainment of life goals but also build a person’s resilience capability. \r\nThe main target users of the system are youth aged from 15 to 22.  The system is designed to support the users over their lifetime as they change their goals as they grow in age. \r\n', '2011-07-30', 1);
INSERT INTO `article` VALUES(3, 'Our Objectives', 'The application ’s objectives are to:\r\n\r\n• Increase self-awareness of users on their locus of control inclinations and their values systems\r\n• Facilitate development of self-resilience capabilities\r\n• Provide guidance in goal setting and monitoring of achievement of their goals\r\n', '2011-07-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coat_of_arm`
--

CREATE TABLE `coat_of_arm` (
  `coat_of_arm_id` int(11) NOT NULL AUTO_INCREMENT,
  `shield` varchar(255) NOT NULL,
  `seeker_id` int(11) NOT NULL,
  PRIMARY KEY (`coat_of_arm_id`),
  KEY `fk_code_of_arm_seeker1` (`seeker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `coat_of_arm`
--

INSERT INTO `coat_of_arm` VALUES(8, 'web_images/coa_image/shield/coa7.png', 9);
INSERT INTO `coat_of_arm` VALUES(11, 'web_images/coa_image/shield/coa8.png', 21);
INSERT INTO `coat_of_arm` VALUES(12, 'undefined', 34);
INSERT INTO `coat_of_arm` VALUES(13, 'web_images/coa_image/shield/coa9.png', 24);
INSERT INTO `coat_of_arm` VALUES(14, 'web_images/coa_image/shield/coa9.png', 36);
INSERT INTO `coat_of_arm` VALUES(15, 'undefined', 34);
INSERT INTO `coat_of_arm` VALUES(16, 'web_images/coa_image/shield/coa10.png', 31);
INSERT INTO `coat_of_arm` VALUES(17, 'web_images/coa_image/shield/coa5.png', 26);
INSERT INTO `coat_of_arm` VALUES(18, 'web_images/coa_image/shield/coa8.png', 44);
INSERT INTO `coat_of_arm` VALUES(19, 'web_images/coa_image/shield/coa8.png', 28);
INSERT INTO `coat_of_arm` VALUES(20, 'web_images/coa_image/shield/coa8.png', 28);
INSERT INTO `coat_of_arm` VALUES(21, 'web_images/coa_image/shield/coa8.png', 28);
INSERT INTO `coat_of_arm` VALUES(22, 'web_images/coa_image/shield/coa8.png', 28);
INSERT INTO `coat_of_arm` VALUES(23, 'web_images/coa_image/shield/coa8.png', 28);
INSERT INTO `coat_of_arm` VALUES(24, 'web_images/coa_image/shield/coa9.png', 22);
INSERT INTO `coat_of_arm` VALUES(25, 'web_images/coa_image/shield/coa2.png', 45);
INSERT INTO `coat_of_arm` VALUES(26, 'web_images/coa_image/shield/coa9.png', 30);
INSERT INTO `coat_of_arm` VALUES(27, 'web_images/coa_image/shield/coa6.png', 59);
INSERT INTO `coat_of_arm` VALUES(28, 'web_images/coa_image/shield/coa6.png', 71);
INSERT INTO `coat_of_arm` VALUES(29, 'web_images/coa_image/shield/coa5.png', 47);
INSERT INTO `coat_of_arm` VALUES(30, 'web_images/coa_image/shield/coa6.png', 67);
INSERT INTO `coat_of_arm` VALUES(31, 'web_images/coa_image/shield/coa1.png', 56);
INSERT INTO `coat_of_arm` VALUES(32, 'web_images/coa_image/shield/coa1.png', 57);
INSERT INTO `coat_of_arm` VALUES(33, 'web_images/coa_image/shield/coa7.png', 55);
INSERT INTO `coat_of_arm` VALUES(34, 'web_images/coa_image/shield/coa1.png', 52);
INSERT INTO `coat_of_arm` VALUES(35, 'web_images/coa_image/shield/coa1.png', 60);
INSERT INTO `coat_of_arm` VALUES(36, 'web_images/coa_image/shield/coa6.png', 66);
INSERT INTO `coat_of_arm` VALUES(37, 'web_images/coa_image/shield/coa6.png', 48);
INSERT INTO `coat_of_arm` VALUES(38, 'web_images/coa_image/shield/coa6.png', 52);
INSERT INTO `coat_of_arm` VALUES(39, 'web_images/coa_image/shield/coa3.png', 50);
INSERT INTO `coat_of_arm` VALUES(40, 'web_images/coa_image/shield/coa1.png', 61);
INSERT INTO `coat_of_arm` VALUES(41, 'web_images/coa_image/shield/coa8.png', 54);
INSERT INTO `coat_of_arm` VALUES(42, 'undefined', 79);
INSERT INTO `coat_of_arm` VALUES(43, 'web_images/coa_image/shield/coa10.png', 84);
INSERT INTO `coat_of_arm` VALUES(44, 'undefined', 90);
INSERT INTO `coat_of_arm` VALUES(45, 'web_images/coa_image/shield/coa8.png', 85);
INSERT INTO `coat_of_arm` VALUES(46, 'undefined', 79);
INSERT INTO `coat_of_arm` VALUES(47, 'undefined', 79);
INSERT INTO `coat_of_arm` VALUES(48, 'undefined', 78);
INSERT INTO `coat_of_arm` VALUES(49, 'web_images/coa_image/shield/coa6.png', 77);
INSERT INTO `coat_of_arm` VALUES(50, 'undefined', 75);
INSERT INTO `coat_of_arm` VALUES(51, 'undefined', 90);
INSERT INTO `coat_of_arm` VALUES(52, 'undefined', 90);
INSERT INTO `coat_of_arm` VALUES(53, 'web_images/coa_image/shield/coa9.png', 74);
INSERT INTO `coat_of_arm` VALUES(54, 'web_images/coa_image/shield/coa10.png', 89);
INSERT INTO `coat_of_arm` VALUES(55, 'web_images/coa_image/shield/coa3.png', 83);
INSERT INTO `coat_of_arm` VALUES(56, 'web_images/coa_image/shield/coa7.png', 51);
INSERT INTO `coat_of_arm` VALUES(57, 'web_images/coa_image/shield/coa5.png', 86);
INSERT INTO `coat_of_arm` VALUES(58, 'undefined', 104);
INSERT INTO `coat_of_arm` VALUES(59, 'undefined', 105);
INSERT INTO `coat_of_arm` VALUES(60, 'web_images/coa_image/shield/coa10.png', 111);
INSERT INTO `coat_of_arm` VALUES(61, 'web_images/coa_image/shield/coa5.png', 110);
INSERT INTO `coat_of_arm` VALUES(62, 'web_images/coa_image/shield/coa1.png', 106);
INSERT INTO `coat_of_arm` VALUES(63, 'web_images/coa_image/shield/coa8.png', 103);
INSERT INTO `coat_of_arm` VALUES(64, 'web_images/coa_image/shield/coa8.png', 103);
INSERT INTO `coat_of_arm` VALUES(65, 'web_images/coa_image/shield/coa8.png', 103);
INSERT INTO `coat_of_arm` VALUES(66, 'web_images/coa_image/shield/coa8.png', 103);
INSERT INTO `coat_of_arm` VALUES(67, 'web_images/coa_image/shield/coa8.png', 103);
INSERT INTO `coat_of_arm` VALUES(68, 'web_images/coa_image/shield/coa8.png', 103);
INSERT INTO `coat_of_arm` VALUES(69, 'web_images/coa_image/shield/coa5.png', 112);
INSERT INTO `coat_of_arm` VALUES(70, 'web_images/coa_image/shield/coa5.png', 113);
INSERT INTO `coat_of_arm` VALUES(71, 'web_images/coa_image/shield/coa5.png', 113);
INSERT INTO `coat_of_arm` VALUES(72, 'web_images/coa_image/shield/coa9.png', 115);
INSERT INTO `coat_of_arm` VALUES(73, 'undefined', 96);
INSERT INTO `coat_of_arm` VALUES(74, 'undefined', 96);
INSERT INTO `coat_of_arm` VALUES(75, 'web_images/coa_image/shield/coa2.png', 117);
INSERT INTO `coat_of_arm` VALUES(76, 'web_images/coa_image/shield/coa7.png', 1);
INSERT INTO `coat_of_arm` VALUES(77, 'web_images/coa_image/shield/coa7.png', 118);

-- --------------------------------------------------------

--
-- Table structure for table `goal`
--

CREATE TABLE `goal` (
  `seeker_goal_id` int(11) NOT NULL AUTO_INCREMENT,
  `goal_desc` varchar(45) NOT NULL,
  `seeker_id` int(11) NOT NULL,
  `goal_cat_id` int(11) NOT NULL,
  `goal_set_date` date DEFAULT NULL,
  `target_end_date` date NOT NULL,
  `achievement_criteria` varchar(100) NOT NULL,
  `actual_end_date` date DEFAULT NULL,
  `goal_completion_status` varchar(30) NOT NULL,
  PRIMARY KEY (`seeker_goal_id`),
  KEY `fk_seeker_goal_seeker1` (`seeker_id`),
  KEY `fk_seeker_goal_goal_category1` (`goal_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=303 ;

--
-- Dumping data for table `goal`
--

INSERT INTO `goal` VALUES(14, 'Spend more time with family', 9, 1, '2011-12-11', '0000-00-00', 'Talk to my family members at least once a week', '2011-12-11', 'Active');
INSERT INTO `goal` VALUES(21, 'do what a son should do.', 30, 1, '2011-12-06', '0000-00-00', 'support my family.', NULL, 'Active');
INSERT INTO `goal` VALUES(22, 'Spend time with them.', 26, 1, '2011-12-06', '0000-00-00', 'Stay at home more often.', NULL, 'Active');
INSERT INTO `goal` VALUES(23, 'Meals with family', 31, 1, '2011-12-06', '0000-00-00', 'eating with them at least thrice a week', NULL, 'Active');
INSERT INTO `goal` VALUES(24, 'To achieve good grades in UT2', 37, 1, '2011-12-06', '0000-00-00', 'At lease get C for each module.', NULL, 'Active');
INSERT INTO `goal` VALUES(25, 'Have deeper relationship with them', 25, 1, '2011-12-06', '0000-00-00', '1. Visit my daddy at least once a week\r\n2. Go out for a dinner with bro and mummy soon', NULL, 'Active');
INSERT INTO `goal` VALUES(26, 'have a good career no matter in which aspect.', 30, 2, '2011-12-06', '0000-00-00', 'must be able to stay in the job long enough to earn money.', NULL, 'Active');
INSERT INTO `goal` VALUES(27, 'Don''t be an insolent daughter.', 36, 1, '2011-12-06', '0000-00-00', 'Understand and be patient.\r\nDo not talk back in harsh way, but explain and pacify amicably when heat', NULL, 'Active');
INSERT INTO `goal` VALUES(28, 'Able to speak out all my thoughts with my fam', 34, 1, '2011-12-06', '0000-00-00', 'Be more open.', NULL, 'Active');
INSERT INTO `goal` VALUES(29, 'complete my diploma', 30, 3, '2011-12-06', '0000-00-00', 'pass my diploma and complete my studies.', NULL, 'Active');
INSERT INTO `goal` VALUES(30, 'Better relationship with my family', 24, 1, '2011-12-06', '0000-00-00', '1. Have a heart to heart talk with my family at least once a month.\r\n2. Attend and be more punctual ', NULL, 'Active');
INSERT INTO `goal` VALUES(31, 'stable family.', 33, 1, '2011-12-06', '0000-00-00', 'financially rich', NULL, 'Active');
INSERT INTO `goal` VALUES(32, 'spend more time with family members', 35, 1, '2011-12-06', '0000-00-00', 'make time to talk to my parents', NULL, 'Active');
INSERT INTO `goal` VALUES(33, 'Get into a Career that i have an interest in', 25, 2, '2011-12-06', '0000-00-00', '1. Graduate from my diploma\r\n2. Get a GPA that is at least 2.7 and above.', NULL, 'Active');
INSERT INTO `goal` VALUES(34, 'To be a secondary maths teacher', 36, 2, '2011-12-06', '0000-00-00', 'Get good GPA in diploma and recevie a well diploma certificate.\r\nEnrol to NIE and finish it within 2', NULL, 'Active');
INSERT INTO `goal` VALUES(35, 'Be a businessman', 24, 2, '2011-12-06', '0000-00-00', '1. study hard and learn how to do business.\r\n2. Upgrade myself more oftenly.', NULL, 'Active');
INSERT INTO `goal` VALUES(36, 'do well in rp', 35, 3, '2011-12-06', '0000-00-00', 'study, practice', NULL, 'Active');
INSERT INTO `goal` VALUES(37, 'not to let my family go hungry', 30, 5, '2011-12-06', '0000-00-00', 'save regularly to avoid sudden incident.', NULL, 'Active');
INSERT INTO `goal` VALUES(38, 'able to make new friends', 33, 6, '2011-12-06', '0000-00-00', 'friendly', NULL, 'Active');
INSERT INTO `goal` VALUES(39, 'Learn what I want and guaduate.', 34, 3, '2011-12-06', '0000-00-00', 'Study hard, work toward.', NULL, 'Active');
INSERT INTO `goal` VALUES(40, 'Graduate from my diploma', 25, 3, '2011-12-06', '0000-00-00', '1. Get at least a 2.7 GPA.', NULL, 'Active');
INSERT INTO `goal` VALUES(41, 'Moderate my time between family and friends', 23, 1, '2011-12-06', '0000-00-00', 'Spend at least a day in a week with them.', NULL, 'Active');
INSERT INTO `goal` VALUES(42, 'Find a job in IT field', 31, 2, '2011-12-06', '0000-00-00', 'A basic pay of 2k.', NULL, 'Active');
INSERT INTO `goal` VALUES(43, 'able to support myself with the wants i want', 35, 5, '2011-12-06', '0000-00-00', 'save money', NULL, 'Active');
INSERT INTO `goal` VALUES(44, 'Pay my own phone bill', 34, 5, '2011-12-06', '0000-00-00', 'Manage my spending.', NULL, 'Active');
INSERT INTO `goal` VALUES(45, 'Become a pilot', 23, 2, '2011-12-06', '0000-00-00', 'Geting my Diploma\r\nGetting my Degree\r\nEnroll in private pilot license course', NULL, 'Active');
INSERT INTO `goal` VALUES(46, 'maintain relationship with friends.', 30, 6, '2011-12-06', '0000-00-00', 'try to meet up and have regular outings to maintian the relationship.', NULL, 'Active');
INSERT INTO `goal` VALUES(47, 'make more friends', 35, 6, '2011-12-06', '0000-00-00', 'be friendly', NULL, 'Active');
INSERT INTO `goal` VALUES(48, 'Get into a local university', 24, 3, '2011-12-06', '0000-00-00', '1. Make sure I graduate from university by studying hard.', NULL, 'Active');
INSERT INTO `goal` VALUES(49, 'good and healthy', 33, 7, '2011-12-06', '0000-00-00', 'watch my diet and activity of my life.', NULL, 'Active');
INSERT INTO `goal` VALUES(50, 'Able to show my thoughts in front of stranger', 34, 6, '2011-12-06', '0000-00-00', 'Never be afraid to show my real thoughts.', NULL, 'Active');
INSERT INTO `goal` VALUES(51, 'Doing something I''m passionate about.', 26, 2, '2011-12-06', '0000-00-00', 'Doing what I''m good at.', NULL, 'Active');
INSERT INTO `goal` VALUES(52, 'Get good GPA in diploma certificate.', 36, 3, '2011-12-06', '0000-00-00', 'Do well in school, hardworking and do not lack of disciplinary.', NULL, 'Active');
INSERT INTO `goal` VALUES(53, 'Getting diploma, then degree', 23, 3, '2011-12-06', '0000-00-00', 'Graduating with a overall GPA of 3 and above.\r\nGrades that can get me to the university i want.', NULL, 'Active');
INSERT INTO `goal` VALUES(54, 'stay fit until i finish my reservist', 30, 7, '2011-12-06', '0000-00-00', 'exercise regularly and watch my diet.', NULL, 'Active');
INSERT INTO `goal` VALUES(55, 'Good grade', 31, 3, '2011-12-06', '0000-00-00', 'a gpa of 3.8', NULL, 'Active');
INSERT INTO `goal` VALUES(56, 'Have at least a constant 1k in my personal ba', 25, 5, '2011-12-06', '0000-00-00', '1. Spend less money. (DUH)\r\n2. save at least 10bucks a month. \r\n3. Don''t withdraw more then what i p', NULL, 'Active');
INSERT INTO `goal` VALUES(57, 'silm down, better health.', 34, 7, '2011-12-06', '0000-00-00', 'Watch what I eat.', NULL, 'Active');
INSERT INTO `goal` VALUES(58, 'To spend at least Sundays with my family', 28, 1, '2011-12-06', '0000-00-00', 'Spend Sundays with my brother, father and my mother as not everyone of us are present on Sundays.', NULL, 'Active');
INSERT INTO `goal` VALUES(59, 'To at least one main bank account', 24, 5, '2011-12-06', '0000-00-00', '1. Start a bank account now.\r\n2. save money and start saving up.', NULL, 'Active');
INSERT INTO `goal` VALUES(60, 'Rise up', 31, 4, '2011-12-06', '0000-00-00', 'Be a cellgroup leader.', NULL, 'Active');
INSERT INTO `goal` VALUES(61, 'Have different group of friends', 23, 6, '2011-12-06', '0000-00-00', 'Spending time with them', NULL, 'Active');
INSERT INTO `goal` VALUES(62, 'healthy living', 35, 7, '2011-12-06', '0000-00-00', 'exercise and eat healthy', NULL, 'Active');
INSERT INTO `goal` VALUES(63, 'rich', 33, 5, '2011-12-06', '0000-00-00', 'earn big bucks.', NULL, 'Active');
INSERT INTO `goal` VALUES(64, 'To have more friends.', 24, 6, '2011-12-06', '0000-00-00', '1. be more friendly.', NULL, 'Active');
INSERT INTO `goal` VALUES(65, 'To be financially independent as soon as poss', 23, 5, '2011-12-06', '0000-00-00', 'saving up\r\nplan early', NULL, 'Active');
INSERT INTO `goal` VALUES(66, 'Have good grades.', 26, 3, '2011-12-06', '0000-00-00', 'Spend on time studying\r\nRevise before UT', NULL, 'Active');
INSERT INTO `goal` VALUES(67, 'Have more friends that I can depend on', 25, 6, '2011-12-06', '0000-00-00', '1. Make more friends\r\n2. Try to befriend more kinds of people.', NULL, 'Active');
INSERT INTO `goal` VALUES(68, 'Have a good health.', 24, 7, '2011-12-06', '0000-00-00', '1. Eat more, do less dieting.', NULL, 'Active');
INSERT INTO `goal` VALUES(69, 'Be fit', 23, 7, '2011-12-06', '0000-00-00', 'Exercising at least twice a week.\r\nHave a plan to keep fit.', NULL, 'Active');
INSERT INTO `goal` VALUES(70, 'Get rid of my Asthma', 25, 7, '2011-12-06', '0000-00-00', '1. Do not eat stuff that i cant eat.', NULL, 'Active');
INSERT INTO `goal` VALUES(71, 'healthy', 37, 7, '2011-12-06', '0000-00-00', 'to have balanced diet.', NULL, 'Active');
INSERT INTO `goal` VALUES(72, 'Save up for future usage', 31, 5, '2011-12-06', '0000-00-00', 'At least 4k', NULL, 'Active');
INSERT INTO `goal` VALUES(73, 'Earn at least 3k/mth, better to get 5k :)', 36, 5, '2011-12-06', '0000-00-00', 'Good certificate, good career.\r\nGood career of what i really want, will give me more interest in it.', NULL, 'Active');
INSERT INTO `goal` VALUES(74, 'Earn sufficient money to support my family', 26, 5, '2011-12-06', '0000-00-00', 'Work hard when working', NULL, 'Active');
INSERT INTO `goal` VALUES(75, 'Be more friendly', 26, 6, '2011-12-06', '0000-00-00', 'Be more outgoing', NULL, 'Active');
INSERT INTO `goal` VALUES(76, 'get a diploma', 33, 3, '2011-12-06', '0000-00-00', 'get good grades.', NULL, 'Active');
INSERT INTO `goal` VALUES(77, 'Not hurting people''s feelings.', 36, 6, '2011-12-06', '0000-00-00', 'Be friendly.\r\nBe patient.\r\nBe more out-going.\r\nDon''t be a shy person.\r\nAll these have limits.', NULL, 'Active');
INSERT INTO `goal` VALUES(78, 'More healthier.', 36, 7, '2011-12-06', '0000-00-00', 'Eat well, sleep well, have a balanced diet.', NULL, 'Active');
INSERT INTO `goal` VALUES(79, 'Keep fit', 26, 7, '2011-12-06', '0000-00-00', 'Do more exercise and jogs.', NULL, 'Active');
INSERT INTO `goal` VALUES(80, 'Train for my nafa for army', 31, 7, '2011-12-06', '0000-00-00', 'Get gold', NULL, 'Active');
INSERT INTO `goal` VALUES(81, 'To be able to get into uni', 28, 3, '2011-12-06', '0000-00-00', 'Look at the different GPA that i am getting for my semsters and try to get more than 0.2 more than m', NULL, 'Active');
INSERT INTO `goal` VALUES(82, 'Be more fit', 44, 7, '2011-12-06', '0000-00-00', 'Excercise at least 2 times per week, 2 hours per session', NULL, 'Active');
INSERT INTO `goal` VALUES(83, 'asdasd', 40, 1, '2011-12-11', '0000-00-00', 'asdasd', '2011-12-11', 'Active');
INSERT INTO `goal` VALUES(84, 'asdasd', 40, 1, '2011-12-11', '0000-00-00', 'asdasd', '2011-12-11', 'Active');
INSERT INTO `goal` VALUES(85, 'asdasd', 40, 1, '2011-12-11', '0000-00-00', 'asdasd', '2011-12-11', 'Active');
INSERT INTO `goal` VALUES(86, 'asdasd', 40, 1, '2011-12-11', '0000-00-00', 'asdasd', '2011-12-11', 'Active');
INSERT INTO `goal` VALUES(87, 'asdasd', 40, 1, '2011-12-11', '0000-00-00', 'asdasd', '2011-12-11', 'Active');
INSERT INTO `goal` VALUES(88, 'asdasd', 40, 1, '2011-12-11', '0000-00-00', 'asdasd', NULL, 'Active');
INSERT INTO `goal` VALUES(89, 'asdasd', 9, 1, '2011-12-11', '0000-00-00', 'asdsa', NULL, 'Active');
INSERT INTO `goal` VALUES(90, 'Excel and be able to get into local universit', 59, 3, '2011-12-12', '0000-00-00', 'Get ''A'' for all modules', NULL, 'Active');
INSERT INTO `goal` VALUES(91, 'Healthy Family', 60, 1, '2011-12-12', '0000-00-00', 'Have more healthy food', NULL, 'Active');
INSERT INTO `goal` VALUES(92, 'back home ', 46, 1, '2011-12-12', '0000-00-00', 'be back home in 3 years ', NULL, 'Active');
INSERT INTO `goal` VALUES(93, 'Family Orientated', 48, 1, '2011-12-12', '0000-00-00', '-Go home by 7pm.\r\n-Having dinner at home.\r\n-Know every members.', NULL, 'Active');
INSERT INTO `goal` VALUES(94, 'Love Parent', 50, 1, '2011-12-12', '0000-00-00', 'Make parents laugh once', '2011-12-12', 'Active');
INSERT INTO `goal` VALUES(95, 'Spend more time with family members', 70, 1, '2011-12-12', '0000-00-00', '- Have more time\r\n- Have good time management\r\n- Being initiative to plan outings', NULL, 'Active');
INSERT INTO `goal` VALUES(96, 'Software Engineer', 47, 2, '2011-12-12', '0000-00-00', '- Mobile app developer\r\n- Game programmer\r\n- Kinect\r\n- Hardware on Android', NULL, 'Active');
INSERT INTO `goal` VALUES(97, 'Become Richer', 66, 1, '2011-12-12', '0000-00-00', 'Bigger Car\r\n\r\nBetter lifestyle', NULL, 'Active');
INSERT INTO `goal` VALUES(98, 'To get into NTU', 67, 3, '2011-12-12', '0000-00-00', 'Good GPA, good involvement in school activities, good involvement in outside activities, testimonial', NULL, 'Active');
INSERT INTO `goal` VALUES(99, 'Graduate From RP', 58, 3, '2011-12-12', '0000-00-00', 'NA', NULL, 'Active');
INSERT INTO `goal` VALUES(100, 'Have more time with family', 52, 1, '2011-12-12', '0000-00-00', 'Quit school', NULL, 'Active');
INSERT INTO `goal` VALUES(101, 'Be at least Managerial Position', 55, 2, '2011-12-12', '0000-00-00', 'Good Qualification (Diploma/Degree)', NULL, 'Active');
INSERT INTO `goal` VALUES(102, 'Spend more time with my parents after I gradu', 62, 1, '2011-12-12', '0000-00-00', '1. Complete my studies\r\n2. Go back to my hometown and stay with my parents', NULL, 'Active');
INSERT INTO `goal` VALUES(103, 'Having a job after ORD.', 48, 2, '2011-12-12', '0000-00-00', 'Diploma.\r\nORD; NS.', NULL, 'Active');
INSERT INTO `goal` VALUES(104, 'Be the incharge for a big event', 66, 2, '2011-12-12', '0000-00-00', 'The event must be sucessful', NULL, 'Active');
INSERT INTO `goal` VALUES(105, 'gpa', 46, 3, '2011-12-12', '0000-00-00', '3.5', NULL, 'Active');
INSERT INTO `goal` VALUES(106, 'Achieve higher GPA.', 48, 3, '2011-12-12', '0000-00-00', 'Higher GPA than my current.', NULL, 'Active');
INSERT INTO `goal` VALUES(107, 'Finish Polytechnic', 66, 3, '2011-12-12', '0000-00-00', 'Graduate', NULL, 'Active');
INSERT INTO `goal` VALUES(108, 'Get into university', 71, 3, '2011-12-12', '0000-00-00', 'Good GPA, money', NULL, 'Active');
INSERT INTO `goal` VALUES(109, 'Have a nice body', 60, 7, '2011-12-12', '0000-00-00', 'go gym 3 times a week', NULL, 'Active');
INSERT INTO `goal` VALUES(110, 'To be a successful artiste and excel in my ca', 69, 2, '2011-12-12', '0000-00-00', 'To work hard for what i want and to make sure that i do not give up easily. To work hard to get more', NULL, 'Active');
INSERT INTO `goal` VALUES(111, 'Finacially Stabilised', 61, 5, '2011-12-12', '0000-00-00', 'Have enough money to get through', NULL, 'Active');
INSERT INTO `goal` VALUES(112, 'get into a uni', 61, 3, '2011-12-12', '0000-00-00', 'when i get into a uni', NULL, 'Active');
INSERT INTO `goal` VALUES(113, 'Be rich', 66, 5, '2011-12-12', '0000-00-00', 'Earn 1 million', NULL, 'Active');
INSERT INTO `goal` VALUES(114, 'Work in a bank', 60, 2, '2011-12-12', '0000-00-00', 'Read more about the job', NULL, 'Active');
INSERT INTO `goal` VALUES(115, 'Spend more time with family', 47, 1, '2011-12-12', '0000-00-00', '- Family outing\r\n- Talk / learn about the old times', NULL, 'Active');
INSERT INTO `goal` VALUES(116, 'Get along with my family', 71, 1, '2011-12-12', '0000-00-00', 'spend time with my family', NULL, 'Active');
INSERT INTO `goal` VALUES(117, 'Live life without worries.', 48, 5, '2011-12-12', '0000-00-00', 'Able to spend without worries.\r\nAble to support my family.', NULL, 'Active');
INSERT INTO `goal` VALUES(118, 'To achieve my final roll of honors', 55, 3, '2011-12-12', '0000-00-00', 'Make effort in studying and understanding my modules.', NULL, 'Active');
INSERT INTO `goal` VALUES(119, 'Have better relationship with Friends', 66, 6, '2011-12-12', '0000-00-00', 'Have more friends', NULL, 'Active');
INSERT INTO `goal` VALUES(120, 'To be able to have good family relationship', 69, 1, '2011-12-12', '0000-00-00', 'Start to spend more time with my dad and also to improve the relationship between me and my sisters.', NULL, 'Active');
INSERT INTO `goal` VALUES(121, 'Go further study in Monash', 56, 3, '2011-12-12', '0000-00-00', 'Finish all the application of Monash Uni', NULL, 'Active');
INSERT INTO `goal` VALUES(122, 'Good pay job', 71, 2, '2011-12-12', '0000-00-00', 'university certificate, attitude', NULL, 'Active');
INSERT INTO `goal` VALUES(123, 'Health in tip top condition.', 48, 7, '2011-12-12', '0000-00-00', 'Say NO to hospital.', NULL, 'Active');
INSERT INTO `goal` VALUES(124, 'University', 47, 3, '2011-12-12', '0000-00-00', '- Learn more on programming\r\n- Socialise', NULL, 'Active');
INSERT INTO `goal` VALUES(125, 'Go on a self finding trip', 61, 4, '2011-12-12', '0000-00-00', 'When i go on a trip and see things through my own viewpoint', NULL, 'Active');
INSERT INTO `goal` VALUES(126, 'To excel in my studies', 69, 3, '2011-12-12', '0000-00-00', 'To work hard and to study something that i like and what i want. So i can achieve good results and m', NULL, 'Active');
INSERT INTO `goal` VALUES(127, 'Become thinner', 66, 7, '2011-12-12', '0000-00-00', '65 Kg', NULL, 'Active');
INSERT INTO `goal` VALUES(128, 'Peace', 47, 4, '2011-12-12', '0000-00-00', 'Learn about the world\r\nCare about both me and the others', NULL, 'Active');
INSERT INTO `goal` VALUES(129, 'Having a career which is what I like', 70, 2, '2011-12-12', '0000-00-00', '- Do not just focus on the pay of the job\r\n- Working hard towards the job aiming for', NULL, 'Active');
INSERT INTO `goal` VALUES(130, 'To go overseas with my family', 55, 1, '2011-12-12', '0000-00-00', 'Money\r\nTime', NULL, 'Active');
INSERT INTO `goal` VALUES(131, 'Having people to lend a helping hand when nee', 48, 6, '2011-12-12', '0000-00-00', 'Friends don''t say NO when I ask for help.', NULL, 'Active');
INSERT INTO `goal` VALUES(132, 'To have a good and fit figure', 69, 7, '2011-12-12', '0000-00-00', 'To train and also to have a good figure. Maintain the figure and make myself healthy and fit. To als', NULL, 'Active');
INSERT INTO `goal` VALUES(133, 'Above average', 47, 5, '2011-12-12', '0000-00-00', '- From my passion', NULL, 'Active');
INSERT INTO `goal` VALUES(134, 'Having at least a Degree from a recognise uni', 70, 3, '2011-12-12', '0000-00-00', '- Do well in polytechnic\r\n- Working hard for the final year', NULL, 'Active');
INSERT INTO `goal` VALUES(135, 'Financial Stable', 55, 5, '2011-12-12', '0000-00-00', 'Find a job that pays me well.', NULL, 'Active');
INSERT INTO `goal` VALUES(136, 'Spend more time with my family.', 57, 1, '2011-12-12', '0000-00-00', '- Ensure I stay at home more often.- Converse more with my family.', NULL, 'Active');
INSERT INTO `goal` VALUES(137, 'Atheist', 48, 4, '2011-12-12', '0000-00-00', 'I believe in myself.', NULL, 'Active');
INSERT INTO `goal` VALUES(138, 'More patience', 66, 4, '2011-12-12', '0000-00-00', 'Be more calm', NULL, 'Active');
INSERT INTO `goal` VALUES(139, 'More FYP bonding', 55, 6, '2011-12-12', '0000-00-00', 'To have time and money for bonding activities.', NULL, 'Active');
INSERT INTO `goal` VALUES(140, 'To have enough money to live my life and to f', 69, 5, '2011-12-12', '0000-00-00', 'To earn more money and to work hard for my career.', NULL, 'Active');
INSERT INTO `goal` VALUES(141, 'Make friends with all I see', 47, 6, '2011-12-12', '0000-00-00', 'Closes one = a few\r\nnormal one = as many as possible', NULL, 'Active');
INSERT INTO `goal` VALUES(142, 'Earn my first million dollar before the age o', 70, 5, '2011-12-12', '0000-00-00', '- Have my business start up and run well, do not give up and move towards all plans', NULL, 'Active');
INSERT INTO `goal` VALUES(143, 'Train to be fit and healthy', 47, 7, '2011-12-12', '0000-00-00', 'Excercising every morning', NULL, 'Active');
INSERT INTO `goal` VALUES(144, 'Be healthier', 61, 7, '2011-12-12', '0000-00-00', 'when I slim down', NULL, 'Active');
INSERT INTO `goal` VALUES(145, 'To be physical fit', 55, 7, '2011-12-12', '0000-00-00', 'To visit gym regularly', NULL, 'Active');
INSERT INTO `goal` VALUES(146, 'To be contented with what i have', 69, 4, '2011-12-12', '0000-00-00', 'To be happy and also to think postively in everything that i have done. To be contented with what i ', NULL, 'Active');
INSERT INTO `goal` VALUES(147, 'Build my own company.', 57, 2, '2011-12-12', '0000-00-00', '- Manage my resources well.\r\n- Be knowledgable in what I do.\r\n- Understanding the market demands.', NULL, 'Active');
INSERT INTO `goal` VALUES(148, 'Be physically healthy.', 54, 7, '2011-12-12', '0000-00-00', 'Exercise and have a good diet.', NULL, 'Active');
INSERT INTO `goal` VALUES(149, 'Good Personal Reflection', 55, 4, '2011-12-12', '0000-00-00', 'Have peace', NULL, 'Active');
INSERT INTO `goal` VALUES(150, 'Work out', 67, 7, '2011-12-12', '0000-00-00', 'Train out.', NULL, 'Active');
INSERT INTO `goal` VALUES(151, 'Being likable within my social circle', 70, 6, '2011-12-12', '0000-00-00', '- Being nice to people around\r\n- Those that are flaws try to change it away', NULL, 'Active');
INSERT INTO `goal` VALUES(152, 'Have better relationship with my family.', 54, 1, '2011-12-12', '0000-00-00', 'Spend more time and have closer relationship with my family.', NULL, 'Active');
INSERT INTO `goal` VALUES(153, 'Having Chris Evans Body', 70, 7, '2011-12-12', '0000-00-00', 'Start hitting the gym and running', NULL, 'Active');
INSERT INTO `goal` VALUES(154, 'Achieve education as much as I needed.', 57, 3, '2011-12-12', '0000-00-00', '- Study till a certain extent where I am knowledgable enough.\r\n- Graduate from school.\r\n- Ensure I s', NULL, 'Active');
INSERT INTO `goal` VALUES(155, 'Run a social enterprise.', 54, 2, '2011-12-12', '0000-00-00', 'Able to receive funding by Feb 2012. \r\nSucessful launch of business', NULL, 'Active');
INSERT INTO `goal` VALUES(156, 'Get into a university', 54, 3, '2011-12-12', '0000-00-00', 'When i get into a desired choice of university.', NULL, 'Active');
INSERT INTO `goal` VALUES(157, 'Earn my first million before I am 40', 57, 5, '2011-12-12', '0000-00-00', '- Manage my fund well.\r\n- Make sure I earn more and efficiently.', NULL, 'Active');
INSERT INTO `goal` VALUES(158, 'Be financially capable.', 54, 5, '2011-12-12', '0000-00-00', 'Able to support myself at the age of 21. Already working.', NULL, 'Active');
INSERT INTO `goal` VALUES(159, 'Be financially stable', 60, 5, '2011-12-12', '0000-00-00', 'Save up money\r\ninvest wisely', NULL, 'Active');
INSERT INTO `goal` VALUES(160, 'Maintain friends as life goes on.', 57, 6, '2011-12-12', '0000-00-00', '- Keep in contact with friends once in awhile.\r\n- Hangout with friends.', NULL, 'Active');
INSERT INTO `goal` VALUES(161, 'Spend more time with friends.', 54, 6, '2011-12-12', '0000-00-00', 'Better relationship with friends.', NULL, 'Active');
INSERT INTO `goal` VALUES(162, 'To achieve a fit body.', 57, 7, '2011-12-12', '0000-00-00', '- Work out daily.\r\n- Visit the gym regularly.\r\n- Maintain good healthy lifestyle.', NULL, 'Active');
INSERT INTO `goal` VALUES(163, 'To start a family before I reach 30', 63, 1, '2011-12-12', '0000-00-00', 'The family should be established on a stable financial and social basis', NULL, 'Active');
INSERT INTO `goal` VALUES(164, 'Being happy with my family', 89, 1, '2011-12-13', '0000-00-00', 'Being a friend of mom and grandma', NULL, 'Active');
INSERT INTO `goal` VALUES(165, 'getting more insight of Asian economy', 89, 2, '2011-12-13', '0000-00-00', 'I will continue reading economic news ', NULL, 'Active');
INSERT INTO `goal` VALUES(166, 'A for this semester', 89, 3, '2011-12-13', '0000-00-00', 'No more B', NULL, 'Active');
INSERT INTO `goal` VALUES(167, 'spend time with family', 88, 1, '2011-12-13', '0000-00-00', 'find a free time', NULL, 'Active');
INSERT INTO `goal` VALUES(168, 'Happy', 89, 4, '2011-12-13', '0000-00-00', 'Happy', NULL, 'Active');
INSERT INTO `goal` VALUES(169, 'Happy', 89, 5, '2011-12-13', '0000-00-00', 'Happy', NULL, 'Active');
INSERT INTO `goal` VALUES(170, 'Happy', 89, 6, '2011-12-13', '0000-00-00', 'Happy', NULL, 'Active');
INSERT INTO `goal` VALUES(171, 'Spend more time with family', 86, 1, '2011-12-13', '0000-00-00', 'keep my sundays free', NULL, 'Active');
INSERT INTO `goal` VALUES(172, 'Being healthy', 89, 7, '2011-12-13', '0000-00-00', 'Remember to take medicine everyday, do exercise at least 16 hours a week', NULL, 'Active');
INSERT INTO `goal` VALUES(173, 'high salary', 88, 2, '2011-12-13', '0000-00-00', 'do as much as possible to show that i am hardworking', NULL, 'Active');
INSERT INTO `goal` VALUES(174, 'graduate successfully', 88, 3, '2011-12-13', '0000-00-00', 'study hard', NULL, 'Active');
INSERT INTO `goal` VALUES(175, 'Good relationship with family', 83, 1, '2011-12-13', '0000-00-00', '- Spend more time with family \r\n- Understanding their situation\r\n- Be more mature in handling.', NULL, 'Active');
INSERT INTO `goal` VALUES(176, 'Happy family', 80, 1, '2011-12-13', '0000-00-00', 'Good relationship and love between family members', NULL, 'Active');
INSERT INTO `goal` VALUES(177, 'Good career', 80, 2, '2011-12-13', '0000-00-00', 'High salary', NULL, 'Active');
INSERT INTO `goal` VALUES(178, 'To create closer bonds with my family', 72, 1, '2011-12-13', '0000-00-00', 'Setting aside more time for my family.', NULL, 'Active');
INSERT INTO `goal` VALUES(179, 'High education', 80, 3, '2011-12-13', '0000-00-00', 'Be in an Uni', NULL, 'Active');
INSERT INTO `goal` VALUES(180, 'High spirit', 80, 4, '2011-12-13', '0000-00-00', 'Be positive always', NULL, 'Active');
INSERT INTO `goal` VALUES(181, 'Good financial status', 80, 5, '2011-12-13', '0000-00-00', 'Never in debt\r\nHave money to buy things I want', NULL, 'Active');
INSERT INTO `goal` VALUES(182, 'Good social', 80, 6, '2011-12-13', '0000-00-00', 'Good', NULL, 'Active');
INSERT INTO `goal` VALUES(183, 'Healthy', 80, 7, '2011-12-13', '0000-00-00', 'never get sick', NULL, 'Active');
INSERT INTO `goal` VALUES(184, 'Be more positive', 86, 4, '2011-12-13', '0000-00-00', 'Think Positive', NULL, 'Active');
INSERT INTO `goal` VALUES(185, 'healthy', 86, 7, '2011-12-13', '0000-00-00', 'have sufficient sleep and proper diet', NULL, 'Active');
INSERT INTO `goal` VALUES(186, 'Get a good job in future', 86, 2, '2011-12-13', '0000-00-00', 'Work harder', NULL, 'Active');
INSERT INTO `goal` VALUES(187, 'Graduate with a diploma', 86, 3, '2011-12-13', '0000-00-00', 'Pass my fyp', NULL, 'Active');
INSERT INTO `goal` VALUES(188, 'Earn big bucks', 86, 5, '2011-12-13', '0000-00-00', 'Work hard', NULL, 'Active');
INSERT INTO `goal` VALUES(189, 'Get many reliable friends', 86, 6, '2011-12-13', '0000-00-00', 'Choose your own friends', NULL, 'Active');
INSERT INTO `goal` VALUES(190, 'To be financially dependent.', 90, 5, '2011-12-13', '0000-00-00', 'I intend to be a millionaire by 25.', NULL, 'Active');
INSERT INTO `goal` VALUES(191, 'I want to talk to my family', 84, 1, '2011-12-13', '0000-00-00', 'Talking to at least one of them', NULL, 'Active');
INSERT INTO `goal` VALUES(192, 'Increase my GPA', 83, 3, '2011-12-13', '0000-00-00', '-Pre class research before going class-Study for UT -Work hard for FYP - Listen to class', NULL, 'Active');
INSERT INTO `goal` VALUES(193, 'to build better relationship with my family m', 90, 1, '2011-12-13', '0000-00-00', 'spend more time with them.', NULL, 'Active');
INSERT INTO `goal` VALUES(194, 'save money', 88, 5, '2011-12-13', '0000-00-00', 'spend less on expensive stuff', NULL, 'Active');
INSERT INTO `goal` VALUES(195, 'Attain grades good enough to graduate', 76, 3, '2011-12-13', '0000-00-00', 'Increasing GPA and passing UTs', NULL, 'Active');
INSERT INTO `goal` VALUES(196, 'improve relationship with family members', 77, 1, '2011-12-13', '0000-00-00', 'family dinner at least once a week, and a overseas trip together after graduating', NULL, 'Active');
INSERT INTO `goal` VALUES(197, 'Save enough to go holidays with friends/famil', 83, 5, '2011-12-13', '0000-00-00', '-Work part time whenever possible-Spend wisely like a week having maximum of $50 ', NULL, 'Active');
INSERT INTO `goal` VALUES(198, 'improve family relationship by spend time wit', 75, 1, '2011-12-13', '0000-00-00', 'stay at home during the chinese new year.', NULL, 'Active');
INSERT INTO `goal` VALUES(199, 'I want to get a job before I turn 25', 84, 2, '2011-12-13', '0000-00-00', 'Getting a job before i reach 25 year old', NULL, 'Active');
INSERT INTO `goal` VALUES(200, 'Get a good GPA this Semester', 85, 3, '2011-12-13', '0000-00-00', 'GPA of 4.0 this Semester', NULL, 'Active');
INSERT INTO `goal` VALUES(201, 'loss weight', 88, 7, '2011-12-13', '0000-00-00', 'do more exercise during the free time', NULL, 'Active');
INSERT INTO `goal` VALUES(202, 'Increase the number of close friends -Help ar', 83, 6, '2011-12-13', '0000-00-00', '- Being more caring to them- Think about them and spend more time with them', NULL, 'Active');
INSERT INTO `goal` VALUES(203, 'I want to increase my GPA', 84, 3, '2011-12-13', '0000-00-00', 'GPA increase of 0.1 or more', NULL, 'Active');
INSERT INTO `goal` VALUES(204, 'make more friends', 88, 6, '2011-12-13', '0000-00-00', 'talk more', NULL, 'Active');
INSERT INTO `goal` VALUES(205, 'Be fit enough to endure army', 83, 7, '2011-12-13', '0000-00-00', '- Run every week at least 3-4 hours a week\r\n- Exercise or work out at home every 2 days at least 30 ', NULL, 'Active');
INSERT INTO `goal` VALUES(206, 'Watch TV with family tonight', 85, 1, '2011-12-13', '0000-00-00', 'Go home later and spent time watching TV with my family.', NULL, 'Active');
INSERT INTO `goal` VALUES(207, 'Get a job after NS/Uni', 85, 2, '2011-12-13', '0000-00-00', 'Get a job', NULL, 'Active');
INSERT INTO `goal` VALUES(208, 'Talk nicely to people', 84, 4, '2011-12-13', '0000-00-00', 'Don''t lose temper in 3 days', NULL, 'Active');
INSERT INTO `goal` VALUES(209, 'Healthy', 72, 7, '2011-12-13', '0000-00-00', 'To work out frequently', NULL, 'Active');
INSERT INTO `goal` VALUES(210, 'Have saving in my account', 84, 5, '2011-12-13', '0000-00-00', 'Have at least 100 SGD in my bank by this week', NULL, 'Active');
INSERT INTO `goal` VALUES(211, 'Go to church every sunday', 85, 4, '2011-12-13', '0000-00-00', 'Go to church', NULL, 'Active');
INSERT INTO `goal` VALUES(212, 'graduate from RP', 77, 3, '2011-12-13', '0000-00-00', 'graduating with gpa not lower than last semester', NULL, 'Active');
INSERT INTO `goal` VALUES(213, 'Attain higher education', 72, 3, '2011-12-13', '0000-00-00', 'Get my diploma and work my way up', NULL, 'Active');
INSERT INTO `goal` VALUES(214, 'graduate from RP', 75, 3, '2011-12-13', '0000-00-00', 'get better daily grades and pass uts', NULL, 'Active');
INSERT INTO `goal` VALUES(215, 'Have abit of income', 72, 5, '2011-12-13', '0000-00-00', 'Get a part time job', NULL, 'Active');
INSERT INTO `goal` VALUES(216, 'Do not violate the law', 84, 6, '2011-12-13', '0000-00-00', 'No record in police station', NULL, 'Active');
INSERT INTO `goal` VALUES(217, 'Be healthy', 84, 7, '2011-12-13', '0000-00-00', 'Pass my medical screening', NULL, 'Active');
INSERT INTO `goal` VALUES(218, 'Have a good amount of money in my savings acc', 85, 5, '2011-12-13', '0000-00-00', 'More than $4000.', NULL, 'Active');
INSERT INTO `goal` VALUES(219, 'I want to achieve inner peace in my life time', 79, 4, '2011-12-13', '0000-00-00', 'I will be likable with most people that i meet and i am not hated by most people.', NULL, 'Active');
INSERT INTO `goal` VALUES(220, 'Open-mindedness', 72, 6, '2011-12-13', '0000-00-00', 'Be more open and try new things, meet new people', NULL, 'Active');
INSERT INTO `goal` VALUES(221, 'Build my contacts and social circle to furthe', 90, 6, '2011-12-13', '0000-00-00', 'have influential friends in every industry', NULL, 'Active');
INSERT INTO `goal` VALUES(222, 'Be Fit', 85, 7, '2011-12-13', '0000-00-00', 'Pass my coming NAPFA', NULL, 'Active');
INSERT INTO `goal` VALUES(223, 'save around $400 by May', 75, 5, '2011-12-13', '0000-00-00', '20 bucks per week\r\n4 months', NULL, 'Active');
INSERT INTO `goal` VALUES(224, 'be a merit scholar', 90, 3, '2011-12-13', '0000-00-00', 'reach the top 10% of DBIS', NULL, 'Active');
INSERT INTO `goal` VALUES(225, 'to grow spritually with a god', 90, 4, '2011-12-13', '0000-00-00', 'go to church more frequently', NULL, 'Active');
INSERT INTO `goal` VALUES(226, 'Go out with friends', 85, 6, '2011-12-13', '0000-00-00', 'Hang out with friends this week', NULL, 'Active');
INSERT INTO `goal` VALUES(227, 'be more healthy physically and mentally', 90, 7, '2011-12-13', '0000-00-00', 'lose 5 more kg and get a tattoo', NULL, 'Active');
INSERT INTO `goal` VALUES(228, 'to be successful and earn lots if money in wa', 90, 2, '2011-12-13', '0000-00-00', 'study and graduate from uc berkeley', NULL, 'Active');
INSERT INTO `goal` VALUES(229, 'I want to travel around Asia with my friends ', 78, 6, '2011-12-13', '0000-00-00', 'Work hard, earn more money and have enough saving.', NULL, 'Active');
INSERT INTO `goal` VALUES(230, 'Get into a good USA university', 97, 3, '2011-12-21', '0000-00-00', 'Good scores for SAT\r\nget a scholarship', NULL, 'Active');
INSERT INTO `goal` VALUES(231, 'Spend more time with close friends', 97, 6, '2011-12-21', '0000-00-00', 'doing constructive stuff with them', NULL, 'Active');
INSERT INTO `goal` VALUES(232, 'Run a half marathon', 97, 7, '2011-12-21', '0000-00-00', 'train everyday', NULL, 'Active');
INSERT INTO `goal` VALUES(233, 'I want to spend more time with them', 98, 1, '2011-12-21', '0000-00-00', 'try not to go out too often.', NULL, 'Active');
INSERT INTO `goal` VALUES(234, 'Good health', 96, 7, '2011-12-21', '0000-00-00', 'Exercise regularly.', NULL, 'Active');
INSERT INTO `goal` VALUES(235, 'Spend more time with them and get along with ', 100, 1, '2011-12-21', '0000-00-00', 'Be more patient to my father.\r\nDon''t spend so much time with my job.', NULL, 'Active');
INSERT INTO `goal` VALUES(236, 'Spend more time with my family', 97, 1, '2011-12-21', '0000-00-00', 'like weekend dinners', NULL, 'Active');
INSERT INTO `goal` VALUES(237, 'Get good grades for O levels, and get into Un', 100, 3, '2011-12-21', '0000-00-00', 'STUDY HARD! AND PRAY LOL!', NULL, 'Active');
INSERT INTO `goal` VALUES(238, 'happy loving', 96, 1, '2011-12-21', '0000-00-00', 'communicate more to each other.', NULL, 'Active');
INSERT INTO `goal` VALUES(239, 'Just have enought o live a good life', 100, 5, '2011-12-21', '0000-00-00', 'Work hard and play hard', NULL, 'Active');
INSERT INTO `goal` VALUES(240, 'get good results. go to a good university', 98, 3, '2011-12-21', '0000-00-00', 'study, study and STUDY!', NULL, 'Active');
INSERT INTO `goal` VALUES(241, 'I only want true friends around me', 100, 6, '2011-12-21', '0000-00-00', 'Treasure who I must treasure properly', NULL, 'Active');
INSERT INTO `goal` VALUES(242, 'Be fit and have 6 pacs', 100, 7, '2011-12-21', '0000-00-00', 'Train hard and do not slack.', NULL, 'Active');
INSERT INTO `goal` VALUES(243, 'make more friends.', 98, 6, '2011-12-21', '0000-00-00', 'hang out more with friends after school', NULL, 'Active');
INSERT INTO `goal` VALUES(244, 'make more friend', 96, 6, '2011-12-21', '0000-00-00', 'through social media', NULL, 'Active');
INSERT INTO `goal` VALUES(245, 'be more sporty', 98, 7, '2011-12-21', '0000-00-00', 'play more sports', NULL, 'Active');
INSERT INTO `goal` VALUES(246, 'Live in happines & a well bonded family .', 102, 1, '2011-12-21', '0000-00-00', 'Smile in everyone''s face almost everyday. Commited family member.', NULL, 'Active');
INSERT INTO `goal` VALUES(247, 'A Satisfying Grade', 102, 3, '2011-12-21', '0000-00-00', 'Strong willpower that''s able to overcome all the obstacle. And eventually obtain my goal.', NULL, 'Active');
INSERT INTO `goal` VALUES(248, 'A balance wellbeing .', 102, 4, '2011-12-21', '0000-00-00', 'A sastified reflection at the end of everyday.', NULL, 'Active');
INSERT INTO `goal` VALUES(249, 'Financially independent in terms of the fee f', 102, 5, '2011-12-21', '0000-00-00', 'Not asking for help from my parents .', NULL, 'Active');
INSERT INTO `goal` VALUES(250, 'Recover from my back injury & release my full', 102, 7, '2011-12-21', '0000-00-00', 'Refrain from vigorous physical activies for 6 months.....', NULL, 'Active');
INSERT INTO `goal` VALUES(251, 'become the best in studies in my class', 110, 3, '2011-12-29', '0000-00-00', 'A-Maths A1E-Maths A1English A2Chinese A2Chemistry A1Biology A2Physics A2history B3 ', NULL, 'Active');
INSERT INTO `goal` VALUES(252, 'To get along with siblings.', 105, 1, '2011-12-29', '0000-00-00', 'Get them appropriate gifts on their birthday.', NULL, 'Active');
INSERT INTO `goal` VALUES(253, 'Get 3 A''s and 1 B''s', 105, 3, '2011-12-29', '0000-00-00', 'get above 250 for PSLE', NULL, 'Active');
INSERT INTO `goal` VALUES(254, 'To get silver for the physical fitness test', 110, 7, '2011-12-29', '0000-00-00', 'sit ups 30+ chin ups at least 3 2.4 13 mins broad jump 180 cm  ', NULL, 'Active');
INSERT INTO `goal` VALUES(255, 'to spend tme with family', 110, 1, '2011-12-29', '0000-00-00', 'go out with family once a week', NULL, 'Active');
INSERT INTO `goal` VALUES(256, 'save up to $50 by the end of the year.', 105, 5, '2011-12-29', '0000-00-00', 'to get a new toy\r\nsave $5 a week', NULL, 'Active');
INSERT INTO `goal` VALUES(257, 'to study the bible pray to god praise him', 110, 4, '2011-12-29', '0000-00-00', 'go to church every week and study the bible at home once a week and pray perpare two days in advance', NULL, 'Active');
INSERT INTO `goal` VALUES(258, 'help others in need of cash ( maximum lend $3', 110, 5, '2011-12-29', '0000-00-00', 'to find out who is in short of cash in school i will save $0.50 a day', NULL, 'Active');
INSERT INTO `goal` VALUES(259, 'spend more quality time with my parents', 108, 1, '2011-12-29', '0000-00-00', 'spend at least 10 hours of heart to heart talk with my parents in 2 weeks.', NULL, 'Active');
INSERT INTO `goal` VALUES(260, 'To meet and befriend new strangers make at le', 110, 6, '2011-12-29', '0000-00-00', 'talk to them and ask about their interest 10 normal friends 5 Close friends ', NULL, 'Active');
INSERT INTO `goal` VALUES(261, 'spend more time with my family', 111, 1, '2011-12-29', '0000-00-00', 'Organise 2 outings a month', NULL, 'Active');
INSERT INTO `goal` VALUES(262, 'help friends by giving them tips in the games', 105, 6, '2011-12-29', '0000-00-00', 'to win the competition\r\nget closer to friends through video games', NULL, 'Active');
INSERT INTO `goal` VALUES(263, 'Get in to the IB programme', 108, 3, '2011-12-29', '0000-00-00', 'get at least 4 As and 4 Bs in all my exams', NULL, 'Active');
INSERT INTO `goal` VALUES(264, 'Learn more about God', 108, 4, '2011-12-29', '0000-00-00', 'Read the Bible every night and pray more regularly in 2012', NULL, 'Active');
INSERT INTO `goal` VALUES(265, 'do  better in exams', 111, 3, '2011-12-29', '0000-00-00', 'get 65 and above for chinese in ca1.Get 75 and above for all subjects by the end of the year', NULL, 'Active');
INSERT INTO `goal` VALUES(266, 'reduce my handicap by 5 next year', 105, 7, '2011-12-29', '0000-00-00', 'practice every week', NULL, 'Active');
INSERT INTO `goal` VALUES(267, 'Save more money', 108, 5, '2011-12-29', '0000-00-00', 'save at least 30 cents everyday in 2012', NULL, 'Active');
INSERT INTO `goal` VALUES(268, 'To get back to MGS in secondary school', 109, 3, '2012-01-01', '0000-00-00', 'Achieve A* for all subj & B for MT, 250 pts, min Merit for Violin', NULL, 'Active');
INSERT INTO `goal` VALUES(269, 'love God more', 105, 4, '2011-12-29', '0000-00-00', 'read the bible more (5-6 times a week) do devotion more frequently', NULL, 'Active');
INSERT INTO `goal` VALUES(270, 'talk to God more often', 111, 4, '2011-12-29', '0000-00-00', 'every night and every morning', NULL, 'Active');
INSERT INTO `goal` VALUES(271, 'To bond better with family', 109, 1, '2011-12-29', '0000-00-00', 'Go out with family 4 times/month & have heart-to-heart talks with each parent monthly', NULL, 'Active');
INSERT INTO `goal` VALUES(272, 'be more friendly and open.', 108, 6, '2011-12-29', '0000-00-00', 'take the initiative to talk to at least 1 new friend in church or school in 2 months', NULL, 'Active');
INSERT INTO `goal` VALUES(273, 'save more money', 111, 5, '2011-12-29', '0000-00-00', 'every week save $1', NULL, 'Active');
INSERT INTO `goal` VALUES(274, 'To spend more time with my family and bond wi', 106, 1, '2011-12-29', '0000-00-00', 'Have planned 10 outings for the year', NULL, 'Active');
INSERT INTO `goal` VALUES(275, 'Get back to SCGS', 106, 3, '2011-12-29', '0000-00-00', 'My aim is to get 260 points for my PSLE. I will finish my work every day before going to bed.', NULL, 'Active');
INSERT INTO `goal` VALUES(276, 'To get a gold trophy for golf', 109, 7, '2012-01-01', '0000-00-00', 'Improve handicap to 15', NULL, 'Active');
INSERT INTO `goal` VALUES(277, 'To save money', 109, 5, '2011-12-29', '0000-00-00', 'To save at least $10 a month', NULL, 'Active');
INSERT INTO `goal` VALUES(278, 'To get a gold for my NAFA', 106, 7, '2011-12-29', '0000-00-00', 'Achieve more than 25 points', NULL, 'Active');
INSERT INTO `goal` VALUES(279, 'To save money', 106, 5, '2011-12-29', '0000-00-00', 'Save $3 every week.', NULL, 'Active');
INSERT INTO `goal` VALUES(280, 'To bond better with my friends', 109, 6, '2012-01-01', '0000-00-00', 'To have 10 close friends by year''s end', NULL, 'Active');
INSERT INTO `goal` VALUES(281, 'be closer to my friends', 111, 6, '2011-12-29', '0000-00-00', 'Have no more than 1 argument in a week', NULL, 'Active');
INSERT INTO `goal` VALUES(282, 'To bond better with my friends', 106, 6, '2011-12-29', '0000-00-00', 'To go to my friends house twice a month.', NULL, 'Active');
INSERT INTO `goal` VALUES(283, 'To have a very good bond with my family ', 107, 1, '2011-12-29', '0000-00-00', 'Not more than 2 quarrels per month', NULL, 'Active');
INSERT INTO `goal` VALUES(284, 'Get good grades for PSLE', 107, 3, '2011-12-29', '0000-00-00', 'Get at least A for each subject and at least 255', NULL, 'Active');
INSERT INTO `goal` VALUES(285, 'To be a good  leader', 107, 4, '2011-12-29', '0000-00-00', 'Be responsible and  know how to handle situations that arise 75% of the time', NULL, 'Active');
INSERT INTO `goal` VALUES(286, 'Save money for future use', 107, 5, '2011-12-29', '0000-00-00', 'save $5 every week', NULL, 'Active');
INSERT INTO `goal` VALUES(287, 'to be more out-going', 107, 6, '2011-12-29', '0000-00-00', 'To make 5 new friends in the year', NULL, 'Active');
INSERT INTO `goal` VALUES(288, 'To play badminton well', 107, 7, '2011-12-29', '0000-00-00', 'Train three times a week for one hour', NULL, 'Active');
INSERT INTO `goal` VALUES(289, 'To be a better christian  ', 109, 4, '2012-01-01', '0000-00-00', 'Read the bible 5 times a week', NULL, 'Active');
INSERT INTO `goal` VALUES(290, 'exercise regulerly', 111, 7, '2011-12-29', '0000-00-00', 'Be able to swim 50 laps and run 1.6 in 8 minutes', NULL, 'Active');
INSERT INTO `goal` VALUES(291, 'increase my stamina', 108, 7, '2011-12-29', '0000-00-00', 'swim or run at least an hour 3 times a week.', NULL, 'Active');
INSERT INTO `goal` VALUES(292, 'To understand other relegions', 106, 4, '2011-12-29', '0000-00-00', 'Have read 2 books on religion in the year', NULL, 'Active');
INSERT INTO `goal` VALUES(293, 'kkjkj', 1, 1, '2012-01-09', '0000-00-00', 'hjkhk', NULL, 'Active');
INSERT INTO `goal` VALUES(294, 'New', 1, 1, '2012-01-27', '0000-00-00', 'New', NULL, 'Active');
INSERT INTO `goal` VALUES(295, 'Spend more time with family', 51, 1, '2012-01-31', '0000-00-00', 'Talk to my family member at least once a week', '2012-02-01', 'Completed');
INSERT INTO `goal` VALUES(296, 'Spend more time with my family', 118, 1, '2012-01-31', '0000-00-00', '3times per week', NULL, 'Active');
INSERT INTO `goal` VALUES(297, 'Spend more time with family', 51, 1, '2012-01-31', '0000-00-00', 'Talk to my family member at least once a week', NULL, 'Active');
INSERT INTO `goal` VALUES(298, 'Get a fulltime job by the end of May', 9, 2, '2012-01-31', '0000-00-00', 'Get a job in IT field with the monthly salary of $1800 and above', NULL, 'Active');
INSERT INTO `goal` VALUES(299, 'Get GPA 3.7 and above in this semester', 51, 3, '2012-02-02', '0000-00-00', '1. get A for Business Intelligence in UT2 and UT3 \r\n2. get at least B+ for Sales and Marketing in UT', NULL, 'Active');
INSERT INTO `goal` VALUES(300, 'Spend more time with my family test1', 118, 1, '2012-02-02', '2012-03-16', 'sadfasfasgsregesrge', NULL, 'Active');
INSERT INTO `goal` VALUES(301, 'find a job', 118, 2, '2012-02-02', '2012-03-31', 'salary need to be above $1800 per month', NULL, 'Active');
INSERT INTO `goal` VALUES(302, 'a', 122, 1, '2012-02-07', '2012-02-11', 'a', NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `goal_category`
--

CREATE TABLE `goal_category` (
  `goal_cat_id` int(11) NOT NULL,
  `goal_category` varchar(45) NOT NULL,
  PRIMARY KEY (`goal_cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goal_category`
--

INSERT INTO `goal_category` VALUES(1, 'Family');
INSERT INTO `goal_category` VALUES(2, 'Career');
INSERT INTO `goal_category` VALUES(3, 'Educational');
INSERT INTO `goal_category` VALUES(4, 'Spiritual');
INSERT INTO `goal_category` VALUES(5, 'Financial');
INSERT INTO `goal_category` VALUES(6, 'Social');
INSERT INTO `goal_category` VALUES(7, 'Physical');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `mission_id` int(11) NOT NULL AUTO_INCREMENT,
  `mission_statement` varchar(255) NOT NULL,
  `seeker_id` int(11) NOT NULL,
  PRIMARY KEY (`mission_id`),
  KEY `fk_mission_statement_seeker1` (`seeker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` VALUES(10, 'Strive for the best!', 9);
INSERT INTO `mission` VALUES(13, 'i want to graduate from RP.', 34);
INSERT INTO `mission` VALUES(14, 'get my diploma at the end of 3 years and start working to takeover the burden of the family and maybe start a family of my own. to be able to support my family.', 30);
INSERT INTO `mission` VALUES(15, 'travel around the world.', 33);
INSERT INTO `mission` VALUES(16, 'To achieve better grades in the follow days especially in year 3.', 37);
INSERT INTO `mission` VALUES(17, 'I WANT TO GRADUATE FROM RP WITH GOOD GPA!', 22);
INSERT INTO `mission` VALUES(18, 'give back to society often and think of others less fortunate than me. Get out of my mundane life and make a difference in people''s life.', 25);
INSERT INTO `mission` VALUES(19, 'Shine in the marketplace.\r\n\r\nFinding a need of others and to meet it.\r\n\r\nAble to have the capacity to love those who are unlovable.', 31);
INSERT INTO `mission` VALUES(20, 'To be more appreciative in life and stop complaining.', 24);
INSERT INTO `mission` VALUES(21, 'My mission is to get a better career which is to become a successful teacher by getting a good education certificate. This is actually would able to help my future and lead to a better life and happiness with my loves one and not even worries of any finan', 36);
INSERT INTO `mission` VALUES(22, 'I want to create an impact on the next generation.', 26);
INSERT INTO `mission` VALUES(23, 'Work hard and score good grades in diploma, get into University. Also score well in University. Get a stable and long term job. Save money for the future. Get married and build a family and retire early and spend time with family/', 45);
INSERT INTO `mission` VALUES(24, 'To go around the world look around and know more people about their cultures and lifestyles.', 44);
INSERT INTO `mission` VALUES(25, 'Do not have any regrets in life. Overcome any difficulties with optimism.', 23);
INSERT INTO `mission` VALUES(26, 'Always look on the bright side of life no matter what happens.', 28);
INSERT INTO `mission` VALUES(27, 'I want to always be ready to accept challenges in life.', 39);
INSERT INTO `mission` VALUES(28, 'when i serve/teach, i hope i am able to humble myself down.', 35);
INSERT INTO `mission` VALUES(29, 'LALALAL', 40);
INSERT INTO `mission` VALUES(30, 'To be able to create a positive difference to the society', 59);
INSERT INTO `mission` VALUES(31, 'To inspire, lift and provide tools for change and growth of individuals throughout the world to significantly increase every individual performances capability in order to achieve a purpose of understanding and living principle-centered leadership!', 48);
INSERT INTO `mission` VALUES(32, 'To do stuffs that I am afraid to do in the past.\r\n- Riding a bike.', 57);
INSERT INTO `mission` VALUES(33, 'I want to get along with my family well. And work hard to get good GPA and complete FYP', 71);
INSERT INTO `mission` VALUES(34, 'Get a good job', 52);
INSERT INTO `mission` VALUES(35, 'Programming games to entertain people\r\nSpend time with family and friends\r\nSpend time to go out experience as many things as possible', 47);
INSERT INTO `mission` VALUES(36, 'The objective of this examination is to bring into conscious focus what you are expressing in your life. Your life can be interpreted like a dream. Every little detail isn''t necessarily important, but the events, people, and activities of your daily life ', 60);
INSERT INTO `mission` VALUES(37, 'Become a successful business man and have a close family', 70);
INSERT INTO `mission` VALUES(38, 'Make my idea spread the world.', 50);
INSERT INTO `mission` VALUES(39, 'My mission is to complete all my mission and goals.', 67);
INSERT INTO `mission` VALUES(40, 'It does not matter how slowly you go so long as you do not stop.', 55);
INSERT INTO `mission` VALUES(41, 'Stay hungry, stay foolish. -Steve Jobs', 54);
INSERT INTO `mission` VALUES(42, '''What you do not wish for yourself, do not do to others''', 66);
INSERT INTO `mission` VALUES(43, 'Have my chance to start my own business', 56);
INSERT INTO `mission` VALUES(44, 'Don''t lose who you are in the blur of the stars.', 61);
INSERT INTO `mission` VALUES(45, '???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????', 69);
INSERT INTO `mission` VALUES(46, 'Having fun and being happy', 89);
INSERT INTO `mission` VALUES(47, 'short term goal :Complete my FYP and get out of RP. long term goal :get a good job in future.', 86);
INSERT INTO `mission` VALUES(48, 'I want to travel around the world!', 78);
INSERT INTO `mission` VALUES(49, 'To become a great artist or a designer', 88);
INSERT INTO `mission` VALUES(50, 'Stay strong at what i encounter.', 83);
INSERT INTO `mission` VALUES(51, 'Live an interesting life and make beloved people around me happy.', 80);
INSERT INTO `mission` VALUES(52, 'I want to be someone responsible for my own life', 84);
INSERT INTO `mission` VALUES(53, 'have a happy life and be optimistic looking in life', 75);
INSERT INTO `mission` VALUES(54, 'To always keep in mind my values and morals.', 72);
INSERT INTO `mission` VALUES(55, 'I want to be a performing musician that earns a lot of money', 79);
INSERT INTO `mission` VALUES(56, 'achive balance between my life,studies or career and maintaining family relationship', 77);
INSERT INTO `mission` VALUES(57, 'Life is Short. Love More, Give More, Hate Less and Laugh Uncontrollably', 74);
INSERT INTO `mission` VALUES(58, 'I want to have better bonds with my family members, a good GPA (currently), a succesful and enjoying job with a good pay.', 85);
INSERT INTO `mission` VALUES(59, 'I want to be successful and live a high and rich lifestyle. Socialize with mega superstars.', 90);
INSERT INTO `mission` VALUES(60, 'Do to others what you want others to do unto you', 76);
INSERT INTO `mission` VALUES(61, 'Giving family a better life.', 94);
INSERT INTO `mission` VALUES(62, 'Live life to the fullest and grab every opportunity that comes by. Treasure and love my loved ones.', 97);
INSERT INTO `mission` VALUES(63, 'to motivate and impact people''s lives postively', 96);
INSERT INTO `mission` VALUES(64, 'Live everyday as if it is going to be my last day.', 98);
INSERT INTO `mission` VALUES(65, 'Live everyday as if it is going to be my last day.', 98);
INSERT INTO `mission` VALUES(66, 'to motivate and impact people''s lives postively', 96);
INSERT INTO `mission` VALUES(67, 'Live everyday as if it is going to be my last day.', 98);
INSERT INTO `mission` VALUES(68, 'Live everyday as if it is my last day.', 98);
INSERT INTO `mission` VALUES(69, 'wqh', 98);
INSERT INTO `mission` VALUES(70, 'I want to get 8 points for my L1R4.\r\nI want to get into the Business Studies course at Ngee Ann Poly.\r\nI want to live a happy life.\r\nI want to kiss Samantha See.\r\nI want to move out of Singapore once I can.\r\nI want to just be awesome no matter where I am.', 100);
INSERT INTO `mission` VALUES(71, 'I want to get all A''s for my ''n'' and ''O'' level.\r\nI want to let my family members how much I love them.\r\nNever let my parents down.', 98);
INSERT INTO `mission` VALUES(72, 'I’m going to do all the adventure that I has thought of all this while. Firstly I’ll try cliff diving, scuba diving & treat my parents to a vacation in whatever means possible. Added on, I would like to have a competition in all the activities I participa', 98);
INSERT INTO `mission` VALUES(73, 'Live life heathly. Use natural products and eat natural fruits.', 98);
INSERT INTO `mission` VALUES(74, 'Explore new stuff \r\nLearn more information about positive psychology.', 98);
INSERT INTO `mission` VALUES(75, 'I’m going to do all the adventure that I has thought of all this while. Firstly I’ll try cliff diving, scuba diving & treat my parents to a vacation in whatever means possible. Added on, I would like to have a competition in all the activities I participa', 98);
INSERT INTO `mission` VALUES(76, 'to go to a university and spend time with family', 110);
INSERT INTO `mission` VALUES(77, 'My mission is to help unwanted dogs find owners who care for them.', 106);
INSERT INTO `mission` VALUES(78, 'To donate some money to charity from my salary to motivate poor people and help animal shelters.', 109);
INSERT INTO `mission` VALUES(79, 'Put 100% into whatever I do.', 108);
INSERT INTO `mission` VALUES(80, 'to help people when they are down or upset:(', 111);
INSERT INTO `mission` VALUES(81, 'To help homeless poor people and make them happy and to give   hope.', 107);
INSERT INTO `mission` VALUES(82, 'Live my life to the fullest!', 51);

-- --------------------------------------------------------

--
-- Table structure for table `motto`
--

CREATE TABLE `motto` (
  `motto_id` int(11) NOT NULL AUTO_INCREMENT,
  `motto` varchar(255) NOT NULL,
  `seeker_id` int(255) NOT NULL,
  PRIMARY KEY (`motto_id`),
  KEY `fk_motto_seeker1` (`seeker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `motto`
--


-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `test_question_num` int(11) NOT NULL,
  `option` varchar(255) NOT NULL,
  `option_score` int(1) NOT NULL,
  PRIMARY KEY (`test_question_num`,`option`),
  KEY `fk_options_question1` (`test_question_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` VALUES(1, 'Everyone devoted a lot of time and energy to it.', 1);
INSERT INTO `options` VALUES(1, 'I kept a close watch over everyone''s work.', 0);
INSERT INTO `options` VALUES(2, 'I forgave him/her.', 0);
INSERT INTO `options` VALUES(2, 'I''m usually forgiving.', 1);
INSERT INTO `options` VALUES(3, 'I missed a turn.', 1);
INSERT INTO `options` VALUES(3, 'My friend gave me bad directions.', 0);
INSERT INTO `options` VALUES(4, 'He/she just got a raise at work.', 0);
INSERT INTO `options` VALUES(4, 'I took him/her out to a special dinner the night before.', 1);
INSERT INTO `options` VALUES(5, 'I was preoccupied with other things.', 1);
INSERT INTO `options` VALUES(5, 'I''m not good at remembering birthdays.', 0);
INSERT INTO `options` VALUES(6, 'I am a popular person.', 0);
INSERT INTO `options` VALUES(6, 'I am attractive to him/her.', 1);
INSERT INTO `options` VALUES(7, 'I devote a lot of time and energy to campaigning.', 0);
INSERT INTO `options` VALUES(7, 'I work very hard at everything I do.', 1);
INSERT INTO `options` VALUES(8, 'I sometimes forget to check my appointment book.', 1);
INSERT INTO `options` VALUES(8, 'Sometimes my memory fails me.', 0);
INSERT INTO `options` VALUES(9, 'I didn''t campaign hard enough.', 1);
INSERT INTO `options` VALUES(9, 'The person who won knew more people.', 0);
INSERT INTO `options` VALUES(10, 'I am a good host.', 0);
INSERT INTO `options` VALUES(10, 'I was particularly charming that night.', 1);
INSERT INTO `options` VALUES(11, 'A strange noise caught my attention.', 0);
INSERT INTO `options` VALUES(11, 'I was alert that day.', 1);
INSERT INTO `options` VALUES(12, 'Few people around me were sick, so I wasn''t exposed.', 0);
INSERT INTO `options` VALUES(12, 'I made sure I ate well and got enough rest.', 1);
INSERT INTO `options` VALUES(13, 'I was so involved in writing the report that I forgot to return the book.', 1);
INSERT INTO `options` VALUES(13, 'When I am really involved in what I am reading, I often forget when it''s due.', 0);
INSERT INTO `options` VALUES(14, 'My broker decided to take on something new.', 0);
INSERT INTO `options` VALUES(14, 'My broker is a top-notch investor.', 1);
INSERT INTO `options` VALUES(15, 'I train hard.', 0);
INSERT INTO `options` VALUES(15, 'I was feeling unbeatable.', 1);
INSERT INTO `options` VALUES(16, 'I didn''''t prepare for it well.', 1);
INSERT INTO `options` VALUES(16, 'I wasn''t as smart as other people taking the exam.', 0);
INSERT INTO `options` VALUES(17, 'I made the meal in a rush.', 1);
INSERT INTO `options` VALUES(17, 'I wasn''t a good cook.', 0);
INSERT INTO `options` VALUES(18, 'I''m not good at that sport.', 1);
INSERT INTO `options` VALUES(18, 'I''m not very athletic.', 0);
INSERT INTO `options` VALUES(19, 'I didn''t check to see how much gas was in the tank.', 1);
INSERT INTO `options` VALUES(19, 'The gas gauge was broken.', 0);
INSERT INTO `options` VALUES(20, 'He/she is always nagging at me.', 1);
INSERT INTO `options` VALUES(20, 'He/she was in a hostile mood.', 0);
INSERT INTO `options` VALUES(21, 'I always put off doing my assignment.', 1);
INSERT INTO `options` VALUES(21, 'I was lazy about getting my assignment done this year.', 0);
INSERT INTO `options` VALUES(22, 'I got tongue-tied when I asked him/her on the date.', 1);
INSERT INTO `options` VALUES(22, 'I was a wreck that day.', 0);
INSERT INTO `options` VALUES(23, 'I looked the most enthusiastic.', 0);
INSERT INTO `options` VALUES(23, 'I was sitting in the right seat.', 1);
INSERT INTO `options` VALUES(24, 'I am outgoing at parties.', 1);
INSERT INTO `options` VALUES(24, 'I was in perfect form that night.', 0);
INSERT INTO `options` VALUES(25, 'He/she has very picky tastes.', 1);
INSERT INTO `options` VALUES(25, 'I don''t put enough thought into things like that.', 0);
INSERT INTO `options` VALUES(26, 'I felt extremely confident during the presentation.', 0);
INSERT INTO `options` VALUES(26, 'I present well.', 1);
INSERT INTO `options` VALUES(27, 'My timing was perfect.', 0);
INSERT INTO `options` VALUES(27, 'The joke was funny.', 1);
INSERT INTO `options` VALUES(28, 'I am an efficient person.', 0);
INSERT INTO `options` VALUES(28, 'I am good at my job.', 1);
INSERT INTO `options` VALUES(29, 'I never get a chance to relax.', 1);
INSERT INTO `options` VALUES(29, 'I was exceptionally busy this week.', 0);
INSERT INTO `options` VALUES(30, 'He/she doesn''t like to dance.', 1);
INSERT INTO `options` VALUES(30, 'I am not a good enough dancer.', 0);
INSERT INTO `options` VALUES(31, 'I know a technique to stop someone from choking.', 0);
INSERT INTO `options` VALUES(31, 'I know what to do in crisis situations.', 1);
INSERT INTO `options` VALUES(32, 'I don''t spend enough time with him/her.', 1);
INSERT INTO `options` VALUES(32, 'I''m too self-centered.', 0);
INSERT INTO `options` VALUES(33, 'My friend was in a bad mood and took it out on me.', 1);
INSERT INTO `options` VALUES(33, 'She always blurts things out without thinking of others.', 0);
INSERT INTO `options` VALUES(34, 'I am an expert in the area about which I was asked.', 0);
INSERT INTO `options` VALUES(34, 'I am good at giving useful advice.', 1);
INSERT INTO `options` VALUES(35, 'I care about people.', 0);
INSERT INTO `options` VALUES(35, 'I enjoy helping him/her through tough times.', 1);
INSERT INTO `options` VALUES(36, 'Everyone was friendly.', 0);
INSERT INTO `options` VALUES(36, 'I was friendly.', 1);
INSERT INTO `options` VALUES(37, 'I am very health-conscious.', 0);
INSERT INTO `options` VALUES(37, 'I make sure I exercise frequently.', 1);
INSERT INTO `options` VALUES(38, 'He/she likes to explore new areas.', 0);
INSERT INTO `options` VALUES(38, 'He/she needed to get away for a few days.', 1);
INSERT INTO `options` VALUES(39, 'I don''t pay much attention to my diet.', 1);
INSERT INTO `options` VALUES(39, 'You can''t avoid sugar, it''s in everything.', 0);
INSERT INTO `options` VALUES(40, 'I am a good supervisor.', 0);
INSERT INTO `options` VALUES(40, 'I just successfully completed a similar project.', 1);
INSERT INTO `options` VALUES(41, 'He/she has been hostile lately.', 1);
INSERT INTO `options` VALUES(41, 'I have been feeling cranky and pressured lately.', 0);
INSERT INTO `options` VALUES(42, 'Skiing is difficult.', 1);
INSERT INTO `options` VALUES(42, 'The trails were icy.', 0);
INSERT INTO `options` VALUES(43, 'I solved an important problem.', 0);
INSERT INTO `options` VALUES(43, 'I was the best employee.', 1);
INSERT INTO `options` VALUES(44, 'I didn''t realise my poor health condition', 1);
INSERT INTO `options` VALUES(44, 'I performed badly this time.', 0);
INSERT INTO `options` VALUES(45, 'I picked the right numbers.', 0);
INSERT INTO `options` VALUES(45, 'It was pure chance.', 1);
INSERT INTO `options` VALUES(46, 'Diets don''t work in the long run.', 1);
INSERT INTO `options` VALUES(46, 'The diet I tried didn''t work.', 0);
INSERT INTO `options` VALUES(47, 'I''m irritable when I am sick.', 1);
INSERT INTO `options` VALUES(47, 'My friends are negligent about things like that.', 0);
INSERT INTO `options` VALUES(48, 'I sometimes forget to pay my credit-card bill.', 1);
INSERT INTO `options` VALUES(48, 'I sometimes overestimate how much money I have.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `test_question_num` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `test_type_id` int(11) NOT NULL,
  PRIMARY KEY (`test_question_num`),
  KEY `fk_question_test_type1` (`test_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` VALUES(1, 'The project you are in charge is a great success.', 1);
INSERT INTO `question` VALUES(2, 'You and your best friend make up after a fight.', 1);
INSERT INTO `question` VALUES(3, 'You get lost driving to a friend''s house.', 1);
INSERT INTO `question` VALUES(4, 'Your best friend surprises you with a gift.', 1);
INSERT INTO `question` VALUES(5, 'You forget your best friend''s birthday.', 1);
INSERT INTO `question` VALUES(6, 'You get a box of chocolates from someone you don''t know.', 1);
INSERT INTO `question` VALUES(7, 'You run for a leadership position and you win.', 1);
INSERT INTO `question` VALUES(8, 'You miss an important engagement.', 1);
INSERT INTO `question` VALUES(9, 'You run for a community office position and you lose.', 1);
INSERT INTO `question` VALUES(10, 'You host a successful dinner.', 1);
INSERT INTO `question` VALUES(11, 'You stop a crime by calling the police.', 1);
INSERT INTO `question` VALUES(12, 'You were extremely healthy all year.', 1);
INSERT INTO `question` VALUES(13, 'You owe the library ten dollars for an overdue book.', 1);
INSERT INTO `question` VALUES(14, 'Your stocks made you a lot of money.', 1);
INSERT INTO `question` VALUES(15, 'You win an athletic contest.', 1);
INSERT INTO `question` VALUES(16, 'You fail an important examination.', 1);
INSERT INTO `question` VALUES(17, 'You prepared a special meal for a friend and he/she barely touched the food.', 1);
INSERT INTO `question` VALUES(18, 'You lose a sporting event for which you have been training for a long time.', 1);
INSERT INTO `question` VALUES(19, 'Your car runs out of petrol on a dark street late at night.', 1);
INSERT INTO `question` VALUES(20, 'You lose your temper with a friend.', 1);
INSERT INTO `question` VALUES(21, 'You are penalized for not submitting your assignment on time.', 1);
INSERT INTO `question` VALUES(22, 'You ask a person out for an outing and he/she says no.', 1);
INSERT INTO `question` VALUES(23, 'A game-show host picks you out on the audience to participate in the show.', 1);
INSERT INTO `question` VALUES(24, 'You are frequently asked to dance at a party.', 1);
INSERT INTO `question` VALUES(25, 'You buy your best friend a gift and he/she doesn''t like it.', 1);
INSERT INTO `question` VALUES(26, 'You do exceptionally well in a presentation.', 1);
INSERT INTO `question` VALUES(27, 'You tell a joke and everyone laughs.', 1);
INSERT INTO `question` VALUES(28, 'Your teacher/boss gives you too little time to finish a project, but you get it finished anyway.', 1);
INSERT INTO `question` VALUES(29, 'You''ve been feeling run-down lately.', 1);
INSERT INTO `question` VALUES(30, 'You ask someone to dance and he/she says no.', 1);
INSERT INTO `question` VALUES(31, 'You save a person from choking to death.', 1);
INSERT INTO `question` VALUES(32, 'Your best friend wants to have some time to him/herself.', 1);
INSERT INTO `question` VALUES(33, 'A friend says something that hurts your feelings.', 1);
INSERT INTO `question` VALUES(34, 'Your elder sibling comes to you for advice.', 1);
INSERT INTO `question` VALUES(35, 'A friend thanks you for helping him/her get through a bad time.', 1);
INSERT INTO `question` VALUES(36, 'You have a wonderful time at a party.', 1);
INSERT INTO `question` VALUES(37, 'Your doctor tells you that you are in good physical shape.', 1);
INSERT INTO `question` VALUES(38, 'Your parents takes you away for a vacation.', 1);
INSERT INTO `question` VALUES(39, 'Your doctors tell you that you eat too much sugar.', 1);
INSERT INTO `question` VALUES(40, 'You are asked to head an important project.', 1);
INSERT INTO `question` VALUES(41, 'You and your best friend have been fighting a great deal.', 1);
INSERT INTO `question` VALUES(42, 'You fall down a great deal while skiing.', 1);
INSERT INTO `question` VALUES(43, 'You win a prestigious award.', 1);
INSERT INTO `question` VALUES(44, 'Your performance are at an all-time low.', 1);
INSERT INTO `question` VALUES(45, 'You win the lottery.', 1);
INSERT INTO `question` VALUES(46, 'You gain weight over the holidays and you can''t lose it.', 1);
INSERT INTO `question` VALUES(47, 'You are in the hospital and few people come to visit.', 1);
INSERT INTO `question` VALUES(48, 'They won''t honor your credit card at a store.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `reminder_id` int(11) NOT NULL AUTO_INCREMENT,
  `reminder_frequency` varchar(45) NOT NULL,
  `reminder_email` int(11) NOT NULL,
  `seeker_id` int(11) NOT NULL,
  PRIMARY KEY (`reminder_id`),
  KEY `fk_reminder_seeker1` (`seeker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` VALUES(6, 'daily', 1, 9);
INSERT INTO `reminder` VALUES(10, 'daily', 1, 40);
INSERT INTO `reminder` VALUES(11, 'weekly', 1, 62);
INSERT INTO `reminder` VALUES(12, 'none', 1, 47);
INSERT INTO `reminder` VALUES(13, 'daily', 1, 89);
INSERT INTO `reminder` VALUES(14, 'daily', 1, 122);

-- --------------------------------------------------------

--
-- Table structure for table `resilience_game_result`
--

CREATE TABLE `resilience_game_result` (
  `resilience_game_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `seeker_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`resilience_game_result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `resilience_game_result`
--

INSERT INTO `resilience_game_result` VALUES(1, 1, 0);
INSERT INTO `resilience_game_result` VALUES(2, 1, 1410);
INSERT INTO `resilience_game_result` VALUES(3, 1, 1870);
INSERT INTO `resilience_game_result` VALUES(4, 0, 4500);
INSERT INTO `resilience_game_result` VALUES(5, 0, 5960);
INSERT INTO `resilience_game_result` VALUES(6, 0, 5520);
INSERT INTO `resilience_game_result` VALUES(7, 0, 5770);
INSERT INTO `resilience_game_result` VALUES(8, 51, 5200);
INSERT INTO `resilience_game_result` VALUES(9, 51, 8430);
INSERT INTO `resilience_game_result` VALUES(10, 0, 4990);
INSERT INTO `resilience_game_result` VALUES(11, 51, 6180);
INSERT INTO `resilience_game_result` VALUES(12, 51, 12920);
INSERT INTO `resilience_game_result` VALUES(13, 51, 5520);
INSERT INTO `resilience_game_result` VALUES(14, 51, 5520);
INSERT INTO `resilience_game_result` VALUES(15, 122, 7150);

-- --------------------------------------------------------

--
-- Table structure for table `seeker`
--

CREATE TABLE `seeker` (
  `seeker_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `date_of_birth` date NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `mobile_number` varchar(45) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `referee_name` varchar(50) NOT NULL,
  `referee_email` varchar(100) NOT NULL,
  PRIMARY KEY (`seeker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

--
-- Dumping data for table `seeker`
--

INSERT INTO `seeker` VALUES(1, 'admin@oxygen.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'male', '2000-12-12', 'Singaporean', NULL, 'admin', '', '');
INSERT INTO `seeker` VALUES(9, 'ariansah@hotmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'Arian', 'male', '1990-04-15', 'Indonesia', '82361465', 'member', 'Wei Qiang', '91149@myrp.edu.sg');
INSERT INTO `seeker` VALUES(21, '104720@myrp.edu.sg', '1b09b49b872ae2277a033917a7abdae87bfa0a61', 'Ricky', 'male', '1993-11-01', 'Singapore', '92263794', 'member', '', '');
INSERT INTO `seeker` VALUES(22, '103948@myrp.edu.sg', '4128637b7e274d18844718aa5a21fdb2c0a8bcbc', 'mei ting', 'female', '1993-04-27', 'Singapore', '91234567', 'member', '', '');
INSERT INTO `seeker` VALUES(23, 'abelho@Live.com.sg', '8ca885d6bb70267261dc774520a7b6a4817acb19', 'Abel', 'male', '1992-05-08', 'Singapore', '94245212', 'member', '', '');
INSERT INTO `seeker` VALUES(24, 'yijian93@hotmail.com', 'd63da343d280b2c3c9ab91759f382d99431eb414', 'verayj', 'female', '2011-12-06', 'Singapore', '96641828', 'member', '', '');
INSERT INTO `seeker` VALUES(25, 'drey-chanel@hotmail.sg', '7945f1d67dc3eb14866a39c80f80d2453a355738', 'Audrey', 'female', '1993-05-31', 'Singapore', '98204520', 'member', '', '');
INSERT INTO `seeker` VALUES(26, 'wellofshadows@hotmail.com', '8be68582e5e1704fbc2146d083e3dfd409657c12', 'Zhao Kiat', 'Male', '1992-05-15', 'Singaporean', '90905368', 'member', '', '');
INSERT INTO `seeker` VALUES(27, 'mokhuiwen@hotmail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 'Mabel Mok', 'female', '1990-02-21', 'Singapore', '91123633', 'member', '', '');
INSERT INTO `seeker` VALUES(28, 'playful_devil10@hotmail.com', '9a9e78afe382a9724e049d98465deea9f998009f', 'Man Ru', 'female', '1993-06-13', 'Singapore', '96757803', 'member', '', '');
INSERT INTO `seeker` VALUES(29, 'oc3an_blue@hotmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'grace', 'female', '0000-00-00', 'Singapore', '81333797', 'member', '', '');
INSERT INTO `seeker` VALUES(30, 'papercup86@hotmail.com', '666fb4efc648dce655c4daf6d921579f4c90f63f', 'kenneth', 'male', '1986-05-30', 'Burma', '82686630', 'member', '', '');
INSERT INTO `seeker` VALUES(31, 'justinrtw@gmail.com', 'bdfa312781ab66b1d0714eb1deebd21d22613c70', 'justinrtw', 'Male', '0000-00-00', 'Burma', '91278511', 'member', '', '');
INSERT INTO `seeker` VALUES(32, 'kwanshyan@live.com', '0ae9e4deba26021986ffd99636da6601f6393631', 'Ang Kwan Shyan', 'Male', '1992-08-29', 'Singaporean', '81130644', 'member', '', '');
INSERT INTO `seeker` VALUES(33, '102169@myrp.edu.sg', 'a635f6a522379d34010c8d9ae5c42195757ec9ca', 'ronald', 'male', '1992-02-02', 'Singapore', '91712562', 'member', '', '');
INSERT INTO `seeker` VALUES(34, '105019@myrp.edu.sg', '2ffbbb401af71f0b7c5026c674cefc0087a3d6bb', 'SsinyiI', 'female', '0000-00-00', 'Malaysia', '96158221', 'member', '', '');
INSERT INTO `seeker` VALUES(35, '103260@myrp.edu.sg', '67f8718b0cb893ae4ffeeae6bd2e6cda4b2defc0', 'amanda', 'female', '0000-00-00', 'Singapore', '96215565', 'member', '', '');
INSERT INTO `seeker` VALUES(36, '105209@myrp.edu.sg', '8a429531b205cf4eca9c6f36ed32b53c11f04175', 'Hazirah', 'female', '1992-11-26', 'Singapore', '90563750', 'member', '', '');
INSERT INTO `seeker` VALUES(37, 'christina_510@hotmail.com', '379784e41c3d7dca2df845d9a244769a066882f6', 'christina', 'female', '1991-01-30', 'Burma', '85002015', 'member', '', '');
INSERT INTO `seeker` VALUES(38, '101380@myrp.edu.sg', 'eedcdf6cd9e8f046bf224592e4131bdf96120da2', 'Foo Shi Tian', 'female', '1991-08-05', 'Malaysia', '85011557', 'member', '', '');
INSERT INTO `seeker` VALUES(39, 'zirasyazyra@hotmail.com', 'acd9e9c20606cc19871f5ed63ff65ad1e6aeafea', 'Nadzirah Binte isa', 'female', '2011-05-18', 'Singapore', '90422198', 'member', '', '');
INSERT INTO `seeker` VALUES(40, '105630@myrp.edu.sg', '88ea39439e74fa27c09a4fc0bc8ebe6d00978392', 'Larry', 'Male', '1988-12-25', 'Singaporean', '97690804', 'member', '', '');
INSERT INTO `seeker` VALUES(41, '103690@myrp.edu.sg', '15b2f3c591c67ec5b591ad6ea17eff04a155cc42', 'Myra', 'female', '1993-02-28', 'Singapore', '92312226', 'member', '', '');
INSERT INTO `seeker` VALUES(42, '102274@myrp.edu.sg', '048077835e114f25592e2e010af21ab56e829465', 'amirah', 'female', '1992-02-25', 'Singapore', '93841249', 'member', '', '');
INSERT INTO `seeker` VALUES(43, 'syazana_29@hotmail.com', '695c7d1ad99521cf3deb11fa45cf0c4e2e8abe07', 'Syazana', 'female', '1992-05-15', 'Singapore', '98659704', 'member', '', '');
INSERT INTO `seeker` VALUES(44, 'real_devilz107@hotmail.com', '1dbc81ef07709a7f4aef6a41ec6151f7fbb686f2', 'Ang Zhi Wei Widdy', 'male', '1987-12-23', 'Singapore', '92974293', 'member', '', '');
INSERT INTO `seeker` VALUES(45, '105121@MYRP.EDU.SG', '85906c718f83e3770a24ccc673e7716caddf5404', 'Firdaus', 'male', '1991-10-29', 'Burma', '94569124', 'member', '', '');
INSERT INTO `seeker` VALUES(46, '91244@myrp.edu.sg', '8377bf5a92faefaacfd76307b02e9a262cba04de', 'jia hao', 'male', '1989-03-06', 'China', '90287306', 'member', '', '');
INSERT INTO `seeker` VALUES(47, 'sharkrik@hotmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'Teo Jin Shui', 'male', '1991-10-04', 'Singapore', '94554315', 'member', '', '');
INSERT INTO `seeker` VALUES(48, '93080@myrp.edu.sg', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Low Yong Jie', 'male', '1991-10-25', 'Singapore', '81139527', 'member', '', '');
INSERT INTO `seeker` VALUES(49, 'da-rk384@hotmail.com', '10d223e1516ebfb04c807650e5957302709bd23d', 'shaun', 'male', '1991-04-29', 'Singapore', '91259567', 'member', '', '');
INSERT INTO `seeker` VALUES(50, '91212@myrp.edu.sg', '7a1892b5566716154645bf11425425ac6d8f0035', 'Wang Gao Xiang', 'male', '1989-02-24', 'China', '+6596583790', 'member', '', '');
INSERT INTO `seeker` VALUES(51, '91234@myrp.edu.sg', '320bee55fc39eee99cb97b7d84d795db7d424934', 'ZHONG YIWEI', 'male', '1989-10-18', 'China', '97798295', 'member', '', '');
INSERT INTO `seeker` VALUES(52, '91078@myrp.edu.sg', 'cacd2a4d3b6c6fd1a284ee520d937d42d62966dd', 'Du Yuanbo', 'male', '1989-02-26', 'China', '93796805', 'member', '', '');
INSERT INTO `seeker` VALUES(53, '91149@myrp.edu.sg', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 'Ariansah', 'male', '1990-04-15', 'Indonesia', '86118382', 'member', '', '');
INSERT INTO `seeker` VALUES(54, 'weilinggg.ang@gmail.com', '81f1762cc9e18475e77d88bb5c901fbb66070ea2', 'Weiling', 'female', '1992-10-25', 'Singapore', '90184758', 'member', '', '');
INSERT INTO `seeker` VALUES(55, 'edmund.leehm@gmail.com', '246ad519280dc4e25378660e45f5022202f4314b', 'Edmund', 'male', '1991-11-18', 'Burma', '96701593', 'member', '', '');
INSERT INTO `seeker` VALUES(56, 'deng.tong@live.cn', 'e72c7c22beb1e6d2e12e34de52c2c07cc287a5e4', 'DENG TONG', 'male', '1991-01-27', 'China', '90448302', 'member', '', '');
INSERT INTO `seeker` VALUES(57, 'OMG@wtf.com', 'cbfdac6008f9cab4083784cbd1874f76618d2a97', 'LOL!', 'Male', '0000-00-00', 'Indonesia', '93331293', 'member', '', '');
INSERT INTO `seeker` VALUES(58, '91337@myrp.edu.sg', 'b45e02a24d5e8f26ff06522193dd586d17c2215d', 'Febrina', 'female', '1992-02-02', 'Indonesia', '83549852', 'member', '', '');
INSERT INTO `seeker` VALUES(59, '92865@myrp.edu.sg', '4061c2ee636f985a548b64734e5cbb406ce6953b', 'WenJie', 'male', '1991-12-30', 'Singapore', '91111111', 'member', '', '');
INSERT INTO `seeker` VALUES(60, 'nba_gallary_69@hotmail.com', 'b45243564753bf3c5552a8613688fcbcc97248b6', 'Eugene', 'male', '1990-07-06', 'Singapore', '92283384', 'member', '', '');
INSERT INTO `seeker` VALUES(61, '91864@myrp.edu.sg', 'ae1debb54b17ca8ab9959c2522a48a1483c92e88', 'Felice', 'Male', '1992-06-22', 'Burma', '96836315', 'member', '', '');
INSERT INTO `seeker` VALUES(62, 'lalacqy@hotmail.com', '7a7a716373c2fd76d66cf4bcb9b1eb218a410e6a', 'Chen Qiyuan', 'female', '1989-05-07', 'Singapore', '98814685', 'member', '', '');
INSERT INTO `seeker` VALUES(63, '91202@myrp.edu.sg', 'fe4f9dc3dfd56f92b1f8d1e8f4a0ff1af61baf5e', 'Fred', 'male', '1989-10-19', 'China', '83438451', 'member', '', '');
INSERT INTO `seeker` VALUES(64, 'kian@hotmail.com', 'fb2b09fa66517fd642d41a18a006d2ca98fc201c', 'Kian Tong', 'male', '1990-05-12', 'Malaysia', '91231232', 'member', '', '');
INSERT INTO `seeker` VALUES(65, '92788@myrp.edu.sg', 'e17a11ce647850135b2c5f25235d57f4fe8fe1c6', 'Ong Yi Xi', 'female', '1991-06-25', 'Singapore', '97564525', 'member', '', '');
INSERT INTO `seeker` VALUES(66, 'shepherdqbs@hotmail.com', '303db75d47b85dc505662122f80b9c55e0b5633a', 'Shepherd', 'male', '1991-05-16', 'China', '96348577', 'member', '', '');
INSERT INTO `seeker` VALUES(67, 'Jack9213636@hotmail.com', 'f785612187dc49638245dc3e5b202d0475af50bc', 'Tan Boon Jun', 'Male', '0000-00-00', 'Singaporean', '81332572', 'member', '', '');
INSERT INTO `seeker` VALUES(68, 'thekian@hotmail.com', 'a9993e364706816aba3e25717850c26c9cd0d89d', 'Kian Tong', 'male', '1990-05-12', 'Malaysia', '94444444', 'member', '', '');
INSERT INTO `seeker` VALUES(69, '92027@myrp.edu.sg', '8407dd20865f9c259255371c17d08db5ba2a010a', 'PAY XIN NI CARIN', 'female', '1990-02-18', 'Singapore', '92375500', 'member', '', '');
INSERT INTO `seeker` VALUES(70, 'life_fullofpassion@hotmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'Gary Wong', 'male', '0000-00-00', 'Singapore', '96655153', 'member', '', '');
INSERT INTO `seeker` VALUES(71, 'theskykian@hotmail.com', '4061c2ee636f985a548b64734e5cbb406ce6953b', 'Kian Tong', 'male', '1990-05-12', 'Burma', '94444444', 'member', '', '');
INSERT INTO `seeker` VALUES(72, 'sweet-replicas@hotmail.com', '02b37c02290a5bdd4f27db87504e3a0609420573', 'Pamela', 'female', '1992-06-09', 'Singapore', '90626683', 'member', '', '');
INSERT INTO `seeker` VALUES(73, '92469@myrp.edu.sg', '48c8b108fac55b49dcb2375da65fd2831fc0264b', 'Claire', 'female', '1992-03-12', 'Singapore', '93278293', 'member', '', '');
INSERT INTO `seeker` VALUES(74, 'mans--@hotmail.com', '660b4acd8e530eac949a5e0218e2d380bcd411a1', 'Mansurah', 'female', '1990-11-29', 'Singapore', '90684788', 'member', '', '');
INSERT INTO `seeker` VALUES(75, 'yuki_ryostar@hotmail.com', '830d0ec4707bcd764785419b311c7dcf0a3a3275', 'biqin', 'female', '1989-08-29', 'Singapore', '96428652', 'member', '', '');
INSERT INTO `seeker` VALUES(76, '93551@myrp.edu.sg', '333da9aed4213809a60f384dff48b37fac8ec4bb', 'Bernice', 'female', '1992-09-07', 'Singapore', '96189178', 'member', '', '');
INSERT INTO `seeker` VALUES(77, 'ishe_911@hotmail.com', '04c43f40e6b9848bd99a4b3808d439381f909f6e', 'sooping', 'female', '1992-09-04', 'Singapore', '83189618', 'member', '', '');
INSERT INTO `seeker` VALUES(78, 'bless_rocknroll@hotmail.com', 'd1dbb4abe49ee4c52f1f783d2a07504e2b066f4f', 'Khafiz', 'male', '1990-01-25', 'Singapore', '94368894', 'member', '', '');
INSERT INTO `seeker` VALUES(79, 'qinrocks@hotmail.com', 'e56927eb0a11d1124f5b999fc052fbcd89b7b930', 'Syadiqqin', 'male', '1990-09-05', 'Singapore', '92332682', 'member', '', '');
INSERT INTO `seeker` VALUES(80, '91165@myrp.edu.sg', '0e3d1767480e2c01b3fb3d96834bc2d969093084', 'HA BICH NGOC', 'female', '1991-10-10', 'Burma', '82119182', 'member', '', '');
INSERT INTO `seeker` VALUES(81, '92995@myrp.edu.sg', '7c222fb2927d828af22f592134e8932480637c0d', 'Daphanie Seow', 'male', '1992-08-15', 'Singapore', '81216351', 'member', '', '');
INSERT INTO `seeker` VALUES(82, '92142@myrp.edu.sg', '71bfe33b5105308a652978b801f608ae98a58999', 'dawn', 'female', '1990-10-31', 'Singapore', '96900254', 'member', '', '');
INSERT INTO `seeker` VALUES(83, '92710@myrp.edu.sg', '24dab1e24126b5a730e2b7541636496a0dc0e432', 'Kris', 'Male', '1991-11-14', 'Singaporean', '87878787', 'member', '', '');
INSERT INTO `seeker` VALUES(84, '93040@myrp.edu.sg', '554538b1583b2e386f7ac4681677c04488e0ea83', 'MingWei', 'male', '1990-03-22', 'Singapore', '96212783', 'member', '', '');
INSERT INTO `seeker` VALUES(85, '93024@myrp.edu.sg', '1cf4aa245cbe50b74846359285ba49ce0bd9d038', 'Zachary', 'male', '1992-08-30', 'Singapore', '93854227', 'member', '', '');
INSERT INTO `seeker` VALUES(86, '82993@myrp.edu.sg', '26474528d63fef8a6ec355876ca3f5426af0388c', 'terencelee', 'male', '0000-00-00', 'Burma', '97557628', 'member', '', '');
INSERT INTO `seeker` VALUES(87, 'cool_nice_73@hotmail.com', '71bfe33b5105308a652978b801f608ae98a58999', 'dawn', 'female', '1990-10-31', 'Singapore', '96900254', 'member', '', '');
INSERT INTO `seeker` VALUES(88, '91636@myrp.edu.sg', '2eda849c85d46978d591dde67954d28e43ed2070', 'Shi Ru', 'female', '1990-02-07', 'Singapore', '98824960', 'member', '', '');
INSERT INTO `seeker` VALUES(89, '91199@myrp.edu.sg', '88ea39439e74fa27c09a4fc0bc8ebe6d00978392', 'Phan Huong Ly', 'female', '2011-12-16', 'Burma', '123123123', 'member', '', '');
INSERT INTO `seeker` VALUES(90, '92905@myrp.edu.sg', 'dff0af59db00b6fbd21ab35c054c8ec1ea032d63', 'Jessica', 'female', '0000-00-00', 'Indonesia', '92706792', 'member', '', '');
INSERT INTO `seeker` VALUES(91, '94958@myrp.edu.sg', '7c222fb2927d828af22f592134e8932480637c0d', 'Elina', 'female', '1992-12-03', 'Singapore', '88889999', 'member', '', '');
INSERT INTO `seeker` VALUES(92, 'xinyi_happy@hotmail.com', '0109605c3fe2adf2d12da80704eb96d6613966dd', 'xinyi', 'female', '1992-02-29', 'Singapore', '12434568', 'member', '', '');
INSERT INTO `seeker` VALUES(93, 'zhu.yen@hotmail.com', '45f3a1da4a6ddbbe1c34ab52099fbcf5b74dc2c6', 'Lim Zhu Yen', 'male', '2011-12-28', 'Singapore', '91169466', 'member', '', '');
INSERT INTO `seeker` VALUES(94, 'patpoohm@yahoo.com.sg', '04e6f3bca0d940b47b477d89cc9d3e92d03f22dd', 'patricia', 'female', '1988-11-17', 'Singapore', '83283880', 'member', '', '');
INSERT INTO `seeker` VALUES(95, 'tsl1407@gmail.com', 'f5031d53351e787a667c4762e2d668bfd9c38066', 'Tan Siew Ling', 'female', '1987-07-14', 'Singapore', '82375844', 'member', '', '');
INSERT INTO `seeker` VALUES(96, 'ricky@hotmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'teytr', 'male', '2011-12-14', 'Burma', '563546456', 'member', '', '');
INSERT INTO `seeker` VALUES(97, 'yi1234335@hotmail.com', '5811ef812aa959f52b2d14c8800e1a59610b979a', 'yiting', 'female', '1994-05-02', 'Singapore', '98201133', 'member', '', '');
INSERT INTO `seeker` VALUES(98, 'jiajing96@hotmail.com', '1b5b6d8cf5aff3cca5f7ccec5938388f6b27c3ff', 'chua jia jing', 'Female', '1996-03-11', 'Burma', '94510702', 'member', '', '');
INSERT INTO `seeker` VALUES(99, 'qwerty@hotmail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 'qwertyuio', 'male', '2011-12-27', 'Burma', '83092370', 'member', '', '');
INSERT INTO `seeker` VALUES(100, 'beldriccc@yahoo.com.sg', 'ea37465fb521aec86e4b9aee783ca772d25774a7', 'Beldric Chua', 'male', '1995-05-22', 'Singapore', '91098098', 'member', '', '');
INSERT INTO `seeker` VALUES(101, 'hirza_1st@hotmail.com', 'fefa789d1a69d8a689c2cd3f5e08e126753879b0', 'Zahier', 'male', '1987-02-23', 'Singapore', '98189020', 'member', '', '');
INSERT INTO `seeker` VALUES(102, 'debbie-04@hotmail.com', '144a973c33fd02df52c3c967206a1e46ab611a14', 'Chua', 'female', '1995-12-19', 'Singapore', '90115792', 'member', '', '');
INSERT INTO `seeker` VALUES(103, 'qwert@gmail.com', 'cd12de08b6122942b5d6a26b9c6912c9c1318f81', 'qwert', 'male', '1999-12-10', 'Singapore', '87654321', 'member', '', '');
INSERT INTO `seeker` VALUES(104, 'testkid@testkid.com', '775612da871c026926f67dfba89aa557a27ac1ee', 'Test Kid', 'Male', '1993-12-22', 'Indonesia', '92222222', 'member', '', '');
INSERT INTO `seeker` VALUES(105, 'jtoh2000@gmail.com', '816798002eb9a8a685157054da57669d13c1c26b', 'Jerry', 'male', '1999-12-02', 'Singapore', '90229671', 'member', '', '');
INSERT INTO `seeker` VALUES(106, 'hfmee61@gmail.com', '935c8161016a60f996a704b5ed21d95ad93c5c34', 'Yeoh Su Min', 'female', '2000-06-06', 'Singapore', '82308616', 'member', '', '');
INSERT INTO `seeker` VALUES(107, 'amandalim15@yahoo.com.sg', '0cfc6dd4a7a84ad75acbd595ee05709bcc31f704', 'Amanda Lim', 'female', '2000-02-03', 'Singapore', '90884519', 'member', '', '');
INSERT INTO `seeker` VALUES(108, 'ineztan99@hotmail.com', '32c951385b8ebd22e7754a286d7ccb8cbee77deb', 'Inez', 'female', '1999-04-21', 'Singapore', '82479106', 'member', '', '');
INSERT INTO `seeker` VALUES(109, 'aynho@live.com', '2f094c111c1193996cb744397645e697106efeb2', 'Ayn Ho', 'female', '2000-07-01', 'Singapore', '93646867', 'member', '', '');
INSERT INTO `seeker` VALUES(110, 'russ.sia@hotmail.com', '2a87bde437d2414f563e9b1c08bf97b29f6db29e', 'Russell Sia', 'male', '0000-00-00', 'Singapore', '92972370', 'member', '', '');
INSERT INTO `seeker` VALUES(111, 'elsataney@hotmail.com', 'ebe53c61982711f13af8bbc09844e4e2849268ba', 'Elsa Tan', 'female', '2001-06-16', 'Singapore', '95478944', 'member', '', '');
INSERT INTO `seeker` VALUES(112, 'trewq@gmail.com', 'cd12de08b6122942b5d6a26b9c6912c9c1318f81', 'trewq', 'male', '1999-12-30', 'India', '87654321', 'member', '', '');
INSERT INTO `seeker` VALUES(113, 'oxygen@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'oxygen', 'male', '1991-12-24', 'India', '87654321', 'member', '', '');
INSERT INTO `seeker` VALUES(114, 'oxygen2@gmaill.com', '7c222fb2927d828af22f592134e8932480637c0d', 'oxygen2', 'male', '1999-12-31', 'Burma', '98765432', 'member', '', '');
INSERT INTO `seeker` VALUES(115, 'oxygen2@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'oxygen2', 'male', '1940-12-20', 'Indonesia', '87654321', 'member', '', '');
INSERT INTO `seeker` VALUES(116, '104463@myrp.edu.sg', 'b6c01b398fddf5ef6dfc3c305401594a3f82f681', 'Aishah', 'female', '1993-09-06', 'Singapore', '85118072', 'member', '', '');
INSERT INTO `seeker` VALUES(117, '103475@myrp.edu.sg', '60b033419a0cd915dfd85c27f1c14212da757a34', 'Tan Siow Han', 'male', '1993-01-05', 'Singapore', '91388839', 'member', '', '');
INSERT INTO `seeker` VALUES(118, 'cai906.love@163.com', '248b52ee184f7128e7c125bb6860a65bf2e229fe', 'cai bowen', 'male', '1990-05-01', 'China', '96133959', 'member', 'baobao', 'tom.caibowen@gmail.com');
INSERT INTO `seeker` VALUES(119, 'teowenjie@yahoo.com.sg', '894082cc22bf0c0f4a5069f3b6a52c5f890f548b', 'abcc', 'male', '2012-01-18', 'Singapore', '12345678', 'member', '', '');
INSERT INTO `seeker` VALUES(120, 'tan_chin_pei@rp.sg', 'f850d0f076feda4056642e6714a12045aca9924c', 'Chin Pei', 'female', '1959-01-01', 'Singapore', '92222111', 'member', '', '');
INSERT INTO `seeker` VALUES(121, '91150@myrp.edu.sg', '7c222fb2927d828af22f592134e8932480637c0d', 'CAI BAOBAO', 'male', '2012-02-15', 'Burma', '12345678', 'member', 'mE', 'tom.caibowen@gmail.com');
INSERT INTO `seeker` VALUES(122, 'teowenjie@hotmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'abcbbbb', 'male', '1985-02-15', 'Burma', '12345678', 'member', 'asd', 'teowenjie@yahoo.com.sg');

-- --------------------------------------------------------

--
-- Table structure for table `seeker_value`
--

CREATE TABLE `seeker_value` (
  `value_id` int(11) NOT NULL,
  `seeker_id` int(11) NOT NULL,
  PRIMARY KEY (`value_id`,`seeker_id`),
  KEY `fk_seeker_value_value` (`value_id`),
  KEY `fk_seeker_value_seeker1` (`seeker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seeker_value`
--

INSERT INTO `seeker_value` VALUES(1, 52);
INSERT INTO `seeker_value` VALUES(1, 56);
INSERT INTO `seeker_value` VALUES(1, 59);
INSERT INTO `seeker_value` VALUES(1, 86);
INSERT INTO `seeker_value` VALUES(1, 94);
INSERT INTO `seeker_value` VALUES(18, 63);
INSERT INTO `seeker_value` VALUES(18, 92);
INSERT INTO `seeker_value` VALUES(18, 103);
INSERT INTO `seeker_value` VALUES(19, 63);
INSERT INTO `seeker_value` VALUES(19, 71);
INSERT INTO `seeker_value` VALUES(19, 103);
INSERT INTO `seeker_value` VALUES(19, 112);
INSERT INTO `seeker_value` VALUES(20, 1);
INSERT INTO `seeker_value` VALUES(20, 56);
INSERT INTO `seeker_value` VALUES(20, 63);
INSERT INTO `seeker_value` VALUES(20, 103);
INSERT INTO `seeker_value` VALUES(20, 112);
INSERT INTO `seeker_value` VALUES(21, 1);
INSERT INTO `seeker_value` VALUES(21, 37);
INSERT INTO `seeker_value` VALUES(21, 44);
INSERT INTO `seeker_value` VALUES(21, 50);
INSERT INTO `seeker_value` VALUES(21, 52);
INSERT INTO `seeker_value` VALUES(21, 56);
INSERT INTO `seeker_value` VALUES(21, 63);
INSERT INTO `seeker_value` VALUES(21, 66);
INSERT INTO `seeker_value` VALUES(21, 76);
INSERT INTO `seeker_value` VALUES(21, 79);
INSERT INTO `seeker_value` VALUES(21, 88);
INSERT INTO `seeker_value` VALUES(21, 89);
INSERT INTO `seeker_value` VALUES(21, 100);
INSERT INTO `seeker_value` VALUES(21, 103);
INSERT INTO `seeker_value` VALUES(21, 106);
INSERT INTO `seeker_value` VALUES(21, 107);
INSERT INTO `seeker_value` VALUES(21, 112);
INSERT INTO `seeker_value` VALUES(21, 113);
INSERT INTO `seeker_value` VALUES(21, 115);
INSERT INTO `seeker_value` VALUES(22, 47);
INSERT INTO `seeker_value` VALUES(22, 61);
INSERT INTO `seeker_value` VALUES(22, 72);
INSERT INTO `seeker_value` VALUES(22, 90);
INSERT INTO `seeker_value` VALUES(23, 24);
INSERT INTO `seeker_value` VALUES(23, 26);
INSERT INTO `seeker_value` VALUES(23, 51);
INSERT INTO `seeker_value` VALUES(23, 56);
INSERT INTO `seeker_value` VALUES(23, 60);
INSERT INTO `seeker_value` VALUES(23, 70);
INSERT INTO `seeker_value` VALUES(23, 80);
INSERT INTO `seeker_value` VALUES(23, 94);
INSERT INTO `seeker_value` VALUES(23, 108);
INSERT INTO `seeker_value` VALUES(23, 112);
INSERT INTO `seeker_value` VALUES(24, 116);
INSERT INTO `seeker_value` VALUES(25, 9);
INSERT INTO `seeker_value` VALUES(25, 31);
INSERT INTO `seeker_value` VALUES(25, 44);
INSERT INTO `seeker_value` VALUES(25, 47);
INSERT INTO `seeker_value` VALUES(25, 60);
INSERT INTO `seeker_value` VALUES(25, 61);
INSERT INTO `seeker_value` VALUES(25, 89);
INSERT INTO `seeker_value` VALUES(25, 98);
INSERT INTO `seeker_value` VALUES(25, 101);
INSERT INTO `seeker_value` VALUES(25, 115);
INSERT INTO `seeker_value` VALUES(26, 22);
INSERT INTO `seeker_value` VALUES(26, 39);
INSERT INTO `seeker_value` VALUES(26, 45);
INSERT INTO `seeker_value` VALUES(26, 55);
INSERT INTO `seeker_value` VALUES(26, 59);
INSERT INTO `seeker_value` VALUES(26, 85);
INSERT INTO `seeker_value` VALUES(26, 88);
INSERT INTO `seeker_value` VALUES(26, 102);
INSERT INTO `seeker_value` VALUES(26, 113);
INSERT INTO `seeker_value` VALUES(27, 84);
INSERT INTO `seeker_value` VALUES(28, 21);
INSERT INTO `seeker_value` VALUES(28, 90);
INSERT INTO `seeker_value` VALUES(28, 116);
INSERT INTO `seeker_value` VALUES(29, 25);
INSERT INTO `seeker_value` VALUES(29, 31);
INSERT INTO `seeker_value` VALUES(29, 34);
INSERT INTO `seeker_value` VALUES(29, 35);
INSERT INTO `seeker_value` VALUES(29, 37);
INSERT INTO `seeker_value` VALUES(29, 39);
INSERT INTO `seeker_value` VALUES(29, 45);
INSERT INTO `seeker_value` VALUES(29, 50);
INSERT INTO `seeker_value` VALUES(29, 66);
INSERT INTO `seeker_value` VALUES(29, 67);
INSERT INTO `seeker_value` VALUES(29, 70);
INSERT INTO `seeker_value` VALUES(29, 74);
INSERT INTO `seeker_value` VALUES(29, 75);
INSERT INTO `seeker_value` VALUES(29, 77);
INSERT INTO `seeker_value` VALUES(29, 83);
INSERT INTO `seeker_value` VALUES(29, 94);
INSERT INTO `seeker_value` VALUES(29, 97);
INSERT INTO `seeker_value` VALUES(29, 108);
INSERT INTO `seeker_value` VALUES(29, 111);
INSERT INTO `seeker_value` VALUES(29, 115);
INSERT INTO `seeker_value` VALUES(29, 122);
INSERT INTO `seeker_value` VALUES(31, 113);
INSERT INTO `seeker_value` VALUES(32, 57);
INSERT INTO `seeker_value` VALUES(32, 67);
INSERT INTO `seeker_value` VALUES(32, 85);
INSERT INTO `seeker_value` VALUES(32, 88);
INSERT INTO `seeker_value` VALUES(32, 94);
INSERT INTO `seeker_value` VALUES(32, 102);
INSERT INTO `seeker_value` VALUES(32, 106);
INSERT INTO `seeker_value` VALUES(32, 122);
INSERT INTO `seeker_value` VALUES(33, 21);
INSERT INTO `seeker_value` VALUES(33, 58);
INSERT INTO `seeker_value` VALUES(33, 105);
INSERT INTO `seeker_value` VALUES(33, 115);
INSERT INTO `seeker_value` VALUES(33, 116);
INSERT INTO `seeker_value` VALUES(33, 118);
INSERT INTO `seeker_value` VALUES(34, 21);
INSERT INTO `seeker_value` VALUES(34, 79);
INSERT INTO `seeker_value` VALUES(34, 117);
INSERT INTO `seeker_value` VALUES(34, 118);
INSERT INTO `seeker_value` VALUES(35, 72);
INSERT INTO `seeker_value` VALUES(35, 118);
INSERT INTO `seeker_value` VALUES(36, 113);
INSERT INTO `seeker_value` VALUES(36, 118);
INSERT INTO `seeker_value` VALUES(37, 9);
INSERT INTO `seeker_value` VALUES(37, 22);
INSERT INTO `seeker_value` VALUES(37, 23);
INSERT INTO `seeker_value` VALUES(37, 25);
INSERT INTO `seeker_value` VALUES(37, 28);
INSERT INTO `seeker_value` VALUES(37, 30);
INSERT INTO `seeker_value` VALUES(37, 37);
INSERT INTO `seeker_value` VALUES(37, 50);
INSERT INTO `seeker_value` VALUES(37, 52);
INSERT INTO `seeker_value` VALUES(37, 54);
INSERT INTO `seeker_value` VALUES(37, 67);
INSERT INTO `seeker_value` VALUES(37, 70);
INSERT INTO `seeker_value` VALUES(37, 72);
INSERT INTO `seeker_value` VALUES(37, 77);
INSERT INTO `seeker_value` VALUES(37, 80);
INSERT INTO `seeker_value` VALUES(37, 85);
INSERT INTO `seeker_value` VALUES(37, 89);
INSERT INTO `seeker_value` VALUES(37, 90);
INSERT INTO `seeker_value` VALUES(37, 92);
INSERT INTO `seeker_value` VALUES(37, 95);
INSERT INTO `seeker_value` VALUES(37, 101);
INSERT INTO `seeker_value` VALUES(37, 107);
INSERT INTO `seeker_value` VALUES(37, 108);
INSERT INTO `seeker_value` VALUES(37, 109);
INSERT INTO `seeker_value` VALUES(38, 33);
INSERT INTO `seeker_value` VALUES(38, 34);
INSERT INTO `seeker_value` VALUES(38, 36);
INSERT INTO `seeker_value` VALUES(38, 47);
INSERT INTO `seeker_value` VALUES(38, 60);
INSERT INTO `seeker_value` VALUES(38, 86);
INSERT INTO `seeker_value` VALUES(38, 102);
INSERT INTO `seeker_value` VALUES(38, 105);
INSERT INTO `seeker_value` VALUES(38, 110);
INSERT INTO `seeker_value` VALUES(38, 116);
INSERT INTO `seeker_value` VALUES(39, 21);
INSERT INTO `seeker_value` VALUES(39, 36);
INSERT INTO `seeker_value` VALUES(39, 45);
INSERT INTO `seeker_value` VALUES(39, 58);
INSERT INTO `seeker_value` VALUES(39, 83);
INSERT INTO `seeker_value` VALUES(39, 86);
INSERT INTO `seeker_value` VALUES(39, 88);
INSERT INTO `seeker_value` VALUES(39, 98);
INSERT INTO `seeker_value` VALUES(39, 100);
INSERT INTO `seeker_value` VALUES(39, 109);
INSERT INTO `seeker_value` VALUES(39, 111);
INSERT INTO `seeker_value` VALUES(40, 33);
INSERT INTO `seeker_value` VALUES(40, 55);
INSERT INTO `seeker_value` VALUES(40, 105);
INSERT INTO `seeker_value` VALUES(41, 9);
INSERT INTO `seeker_value` VALUES(41, 23);
INSERT INTO `seeker_value` VALUES(41, 28);
INSERT INTO `seeker_value` VALUES(41, 48);
INSERT INTO `seeker_value` VALUES(41, 66);
INSERT INTO `seeker_value` VALUES(41, 83);
INSERT INTO `seeker_value` VALUES(41, 98);
INSERT INTO `seeker_value` VALUES(41, 100);
INSERT INTO `seeker_value` VALUES(42, 48);
INSERT INTO `seeker_value` VALUES(42, 69);
INSERT INTO `seeker_value` VALUES(42, 95);
INSERT INTO `seeker_value` VALUES(42, 97);
INSERT INTO `seeker_value` VALUES(44, 9);
INSERT INTO `seeker_value` VALUES(44, 51);
INSERT INTO `seeker_value` VALUES(44, 78);
INSERT INTO `seeker_value` VALUES(45, 58);
INSERT INTO `seeker_value` VALUES(45, 90);
INSERT INTO `seeker_value` VALUES(46, 25);
INSERT INTO `seeker_value` VALUES(46, 34);
INSERT INTO `seeker_value` VALUES(46, 50);
INSERT INTO `seeker_value` VALUES(46, 52);
INSERT INTO `seeker_value` VALUES(46, 79);
INSERT INTO `seeker_value` VALUES(46, 97);
INSERT INTO `seeker_value` VALUES(46, 106);
INSERT INTO `seeker_value` VALUES(46, 111);
INSERT INTO `seeker_value` VALUES(47, 31);
INSERT INTO `seeker_value` VALUES(47, 36);
INSERT INTO `seeker_value` VALUES(47, 59);
INSERT INTO `seeker_value` VALUES(47, 71);
INSERT INTO `seeker_value` VALUES(47, 75);
INSERT INTO `seeker_value` VALUES(47, 77);
INSERT INTO `seeker_value` VALUES(47, 109);
INSERT INTO `seeker_value` VALUES(48, 33);
INSERT INTO `seeker_value` VALUES(48, 47);
INSERT INTO `seeker_value` VALUES(48, 60);
INSERT INTO `seeker_value` VALUES(48, 71);
INSERT INTO `seeker_value` VALUES(49, 1);
INSERT INTO `seeker_value` VALUES(49, 31);
INSERT INTO `seeker_value` VALUES(49, 35);
INSERT INTO `seeker_value` VALUES(49, 37);
INSERT INTO `seeker_value` VALUES(49, 39);
INSERT INTO `seeker_value` VALUES(49, 54);
INSERT INTO `seeker_value` VALUES(49, 74);
INSERT INTO `seeker_value` VALUES(50, 72);
INSERT INTO `seeker_value` VALUES(50, 76);
INSERT INTO `seeker_value` VALUES(50, 92);
INSERT INTO `seeker_value` VALUES(50, 93);
INSERT INTO `seeker_value` VALUES(51, 26);
INSERT INTO `seeker_value` VALUES(51, 51);
INSERT INTO `seeker_value` VALUES(52, 22);
INSERT INTO `seeker_value` VALUES(52, 48);
INSERT INTO `seeker_value` VALUES(52, 54);
INSERT INTO `seeker_value` VALUES(52, 55);
INSERT INTO `seeker_value` VALUES(52, 61);
INSERT INTO `seeker_value` VALUES(52, 70);
INSERT INTO `seeker_value` VALUES(52, 78);
INSERT INTO `seeker_value` VALUES(52, 80);
INSERT INTO `seeker_value` VALUES(52, 95);
INSERT INTO `seeker_value` VALUES(52, 107);
INSERT INTO `seeker_value` VALUES(53, 25);
INSERT INTO `seeker_value` VALUES(54, 45);
INSERT INTO `seeker_value` VALUES(54, 61);
INSERT INTO `seeker_value` VALUES(54, 74);
INSERT INTO `seeker_value` VALUES(54, 84);
INSERT INTO `seeker_value` VALUES(54, 93);
INSERT INTO `seeker_value` VALUES(54, 102);
INSERT INTO `seeker_value` VALUES(54, 110);
INSERT INTO `seeker_value` VALUES(55, 1);
INSERT INTO `seeker_value` VALUES(55, 35);
INSERT INTO `seeker_value` VALUES(55, 44);
INSERT INTO `seeker_value` VALUES(55, 59);
INSERT INTO `seeker_value` VALUES(55, 66);
INSERT INTO `seeker_value` VALUES(55, 71);
INSERT INTO `seeker_value` VALUES(55, 75);
INSERT INTO `seeker_value` VALUES(55, 77);
INSERT INTO `seeker_value` VALUES(55, 79);
INSERT INTO `seeker_value` VALUES(55, 80);
INSERT INTO `seeker_value` VALUES(55, 89);
INSERT INTO `seeker_value` VALUES(55, 96);
INSERT INTO `seeker_value` VALUES(55, 98);
INSERT INTO `seeker_value` VALUES(55, 101);
INSERT INTO `seeker_value` VALUES(55, 109);
INSERT INTO `seeker_value` VALUES(55, 110);
INSERT INTO `seeker_value` VALUES(56, 35);
INSERT INTO `seeker_value` VALUES(56, 117);
INSERT INTO `seeker_value` VALUES(57, 96);
INSERT INTO `seeker_value` VALUES(58, 23);
INSERT INTO `seeker_value` VALUES(59, 36);
INSERT INTO `seeker_value` VALUES(59, 57);
INSERT INTO `seeker_value` VALUES(59, 96);
INSERT INTO `seeker_value` VALUES(59, 110);
INSERT INTO `seeker_value` VALUES(59, 122);
INSERT INTO `seeker_value` VALUES(60, 24);
INSERT INTO `seeker_value` VALUES(60, 26);
INSERT INTO `seeker_value` VALUES(60, 57);
INSERT INTO `seeker_value` VALUES(60, 93);
INSERT INTO `seeker_value` VALUES(60, 106);
INSERT INTO `seeker_value` VALUES(60, 111);
INSERT INTO `seeker_value` VALUES(60, 117);
INSERT INTO `seeker_value` VALUES(61, 23);
INSERT INTO `seeker_value` VALUES(61, 24);
INSERT INTO `seeker_value` VALUES(61, 30);
INSERT INTO `seeker_value` VALUES(61, 54);
INSERT INTO `seeker_value` VALUES(61, 55);
INSERT INTO `seeker_value` VALUES(61, 57);
INSERT INTO `seeker_value` VALUES(61, 67);
INSERT INTO `seeker_value` VALUES(61, 69);
INSERT INTO `seeker_value` VALUES(61, 74);
INSERT INTO `seeker_value` VALUES(61, 78);
INSERT INTO `seeker_value` VALUES(61, 93);
INSERT INTO `seeker_value` VALUES(61, 95);
INSERT INTO `seeker_value` VALUES(61, 107);
INSERT INTO `seeker_value` VALUES(61, 108);
INSERT INTO `seeker_value` VALUES(62, 100);
INSERT INTO `seeker_value` VALUES(63, 22);
INSERT INTO `seeker_value` VALUES(63, 28);
INSERT INTO `seeker_value` VALUES(63, 34);
INSERT INTO `seeker_value` VALUES(63, 44);
INSERT INTO `seeker_value` VALUES(63, 58);
INSERT INTO `seeker_value` VALUES(63, 76);
INSERT INTO `seeker_value` VALUES(63, 84);
INSERT INTO `seeker_value` VALUES(63, 96);
INSERT INTO `seeker_value` VALUES(63, 101);
INSERT INTO `seeker_value` VALUES(63, 105);
INSERT INTO `seeker_value` VALUES(63, 122);
INSERT INTO `seeker_value` VALUES(64, 24);
INSERT INTO `seeker_value` VALUES(64, 28);
INSERT INTO `seeker_value` VALUES(64, 30);
INSERT INTO `seeker_value` VALUES(64, 51);
INSERT INTO `seeker_value` VALUES(64, 69);
INSERT INTO `seeker_value` VALUES(64, 75);
INSERT INTO `seeker_value` VALUES(64, 83);
INSERT INTO `seeker_value` VALUES(64, 85);
INSERT INTO `seeker_value` VALUES(64, 117);
INSERT INTO `seeker_value` VALUES(65, 26);
INSERT INTO `seeker_value` VALUES(65, 30);
INSERT INTO `seeker_value` VALUES(65, 78);
INSERT INTO `seeker_value` VALUES(65, 86);
INSERT INTO `seeker_value` VALUES(66, 40);
INSERT INTO `seeker_value` VALUES(66, 48);
INSERT INTO `seeker_value` VALUES(66, 104);
INSERT INTO `seeker_value` VALUES(67, 39);
INSERT INTO `seeker_value` VALUES(67, 40);
INSERT INTO `seeker_value` VALUES(67, 104);
INSERT INTO `seeker_value` VALUES(68, 40);
INSERT INTO `seeker_value` VALUES(68, 69);
INSERT INTO `seeker_value` VALUES(68, 76);
INSERT INTO `seeker_value` VALUES(68, 84);
INSERT INTO `seeker_value` VALUES(68, 92);
INSERT INTO `seeker_value` VALUES(68, 97);
INSERT INTO `seeker_value` VALUES(68, 104);
INSERT INTO `seeker_value` VALUES(69, 33);
INSERT INTO `seeker_value` VALUES(69, 40);
INSERT INTO `seeker_value` VALUES(69, 104);

-- --------------------------------------------------------

--
-- Table structure for table `test_result`
--

CREATE TABLE `test_result` (
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  `PmB_score` int(2) NOT NULL,
  `PmG_score` int(2) NOT NULL,
  `PvB_score` int(2) NOT NULL,
  `PvG_score` int(2) NOT NULL,
  `PsB_score` int(2) NOT NULL,
  `PsG_score` int(2) NOT NULL,
  `test_type_id` int(11) NOT NULL,
  `seeker_id` int(11) NOT NULL,
  PRIMARY KEY (`result_id`),
  KEY `fk_test_result_test_type1` (`test_type_id`),
  KEY `fk_test_result_seeker1` (`seeker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=153 ;

--
-- Dumping data for table `test_result`
--

INSERT INTO `test_result` VALUES(9, 3, 4, 5, 5, 5, 5, 1, 9);
INSERT INTO `test_result` VALUES(15, 1, 4, 5, 5, 4, 4, 1, 23);
INSERT INTO `test_result` VALUES(16, 2, 5, 3, 5, 4, 4, 1, 30);
INSERT INTO `test_result` VALUES(17, 3, 4, 3, 4, 2, 4, 1, 24);
INSERT INTO `test_result` VALUES(18, 6, 4, 2, 3, 4, 4, 1, 25);
INSERT INTO `test_result` VALUES(19, 6, 2, 4, 3, 4, 4, 1, 31);
INSERT INTO `test_result` VALUES(20, 3, 5, 3, 7, 5, 4, 1, 28);
INSERT INTO `test_result` VALUES(21, 2, 3, 4, 5, 5, 4, 1, 34);
INSERT INTO `test_result` VALUES(22, 4, 3, 4, 4, 4, 6, 1, 26);
INSERT INTO `test_result` VALUES(23, 1, 5, 4, 6, 5, 6, 1, 27);
INSERT INTO `test_result` VALUES(24, 3, 1, 4, 6, 3, 2, 1, 35);
INSERT INTO `test_result` VALUES(25, 6, 3, 3, 4, 5, 3, 1, 36);
INSERT INTO `test_result` VALUES(26, 6, 4, 6, 3, 6, 5, 1, 38);
INSERT INTO `test_result` VALUES(27, 2, 7, 3, 2, 5, 3, 1, 33);
INSERT INTO `test_result` VALUES(28, 2, 4, 4, 6, 3, 6, 1, 29);
INSERT INTO `test_result` VALUES(29, 4, 2, 5, 3, 4, 6, 1, 37);
INSERT INTO `test_result` VALUES(30, 6, 3, 6, 6, 6, 5, 1, 41);
INSERT INTO `test_result` VALUES(31, 2, 5, 3, 4, 5, 2, 1, 32);
INSERT INTO `test_result` VALUES(32, 2, 5, 3, 4, 5, 2, 1, 32);
INSERT INTO `test_result` VALUES(33, 3, 6, 2, 6, 6, 3, 1, 42);
INSERT INTO `test_result` VALUES(34, 3, 5, 4, 3, 6, 4, 1, 39);
INSERT INTO `test_result` VALUES(35, 3, 3, 4, 3, 5, 2, 1, 22);
INSERT INTO `test_result` VALUES(36, 2, 5, 3, 4, 5, 2, 1, 32);
INSERT INTO `test_result` VALUES(37, 1, 3, 2, 3, 2, 6, 1, 44);
INSERT INTO `test_result` VALUES(38, 3, 1, 4, 5, 5, 5, 1, 43);
INSERT INTO `test_result` VALUES(39, 4, 3, 6, 5, 3, 5, 1, 45);
INSERT INTO `test_result` VALUES(66, 1, 3, 5, 3, 5, 2, 1, 9);
INSERT INTO `test_result` VALUES(67, 2, 5, 3, 4, 4, 5, 1, 9);
INSERT INTO `test_result` VALUES(68, 6, 5, 3, 3, 5, 2, 1, 9);
INSERT INTO `test_result` VALUES(69, 6, 6, 3, 4, 4, 3, 1, 1);
INSERT INTO `test_result` VALUES(70, 3, 2, 7, 3, 4, 5, 1, 40);
INSERT INTO `test_result` VALUES(72, 2, 5, 3, 6, 4, 4, 1, 60);
INSERT INTO `test_result` VALUES(73, 4, 5, 2, 7, 1, 5, 1, 59);
INSERT INTO `test_result` VALUES(74, 4, 3, 4, 5, 6, 4, 1, 49);
INSERT INTO `test_result` VALUES(75, 1, 5, 2, 3, 5, 4, 1, 61);
INSERT INTO `test_result` VALUES(76, 3, 5, 3, 3, 4, 5, 1, 55);
INSERT INTO `test_result` VALUES(77, 4, 4, 3, 4, 6, 6, 1, 52);
INSERT INTO `test_result` VALUES(78, 4, 4, 4, 6, 6, 6, 1, 57);
INSERT INTO `test_result` VALUES(79, 4, 5, 6, 5, 4, 4, 1, 53);
INSERT INTO `test_result` VALUES(80, 3, 1, 5, 6, 6, 4, 1, 48);
INSERT INTO `test_result` VALUES(81, 5, 3, 4, 4, 6, 2, 1, 54);
INSERT INTO `test_result` VALUES(82, 7, 2, 5, 1, 6, 3, 1, 56);
INSERT INTO `test_result` VALUES(83, 3, 3, 4, 5, 5, 5, 1, 50);
INSERT INTO `test_result` VALUES(84, 3, 2, 4, 5, 4, 5, 1, 47);
INSERT INTO `test_result` VALUES(85, 4, 3, 5, 2, 6, 4, 1, 66);
INSERT INTO `test_result` VALUES(86, 6, 0, 4, 4, 6, 5, 1, 62);
INSERT INTO `test_result` VALUES(87, 3, 3, 2, 4, 5, 4, 1, 58);
INSERT INTO `test_result` VALUES(88, 3, 3, 6, 6, 5, 4, 1, 46);
INSERT INTO `test_result` VALUES(89, 3, 6, 4, 5, 3, 5, 1, 71);
INSERT INTO `test_result` VALUES(90, 4, 3, 4, 4, 4, 2, 1, 69);
INSERT INTO `test_result` VALUES(91, 2, 3, 3, 3, 5, 5, 1, 67);
INSERT INTO `test_result` VALUES(92, 5, 2, 5, 5, 5, 3, 1, 65);
INSERT INTO `test_result` VALUES(93, 6, 3, 7, 4, 7, 4, 1, 70);
INSERT INTO `test_result` VALUES(94, 5, 2, 4, 4, 5, 1, 1, 63);
INSERT INTO `test_result` VALUES(95, 5, 3, 3, 3, 3, 3, 1, 9);
INSERT INTO `test_result` VALUES(96, 5, 3, 6, 4, 5, 3, 1, 56);
INSERT INTO `test_result` VALUES(97, 3, 4, 4, 5, 6, 5, 1, 74);
INSERT INTO `test_result` VALUES(98, 3, 3, 4, 4, 5, 7, 1, 81);
INSERT INTO `test_result` VALUES(99, 4, 3, 4, 7, 4, 6, 1, 78);
INSERT INTO `test_result` VALUES(100, 6, 2, 3, 3, 8, 4, 1, 72);
INSERT INTO `test_result` VALUES(101, 2, 4, 3, 5, 5, 4, 1, 86);
INSERT INTO `test_result` VALUES(102, 2, 2, 1, 5, 6, 4, 1, 84);
INSERT INTO `test_result` VALUES(103, 3, 4, 6, 4, 5, 6, 1, 73);
INSERT INTO `test_result` VALUES(104, 2, 6, 3, 3, 3, 7, 1, 79);
INSERT INTO `test_result` VALUES(105, 4, 4, 3, 4, 4, 3, 1, 87);
INSERT INTO `test_result` VALUES(106, 4, 3, 3, 6, 4, 4, 1, 89);
INSERT INTO `test_result` VALUES(107, 5, 4, 4, 1, 5, 3, 1, 77);
INSERT INTO `test_result` VALUES(108, 6, 3, 4, 4, 6, 4, 1, 75);
INSERT INTO `test_result` VALUES(109, 4, 3, 2, 3, 4, 4, 1, 76);
INSERT INTO `test_result` VALUES(110, 3, 2, 4, 4, 6, 4, 1, 88);
INSERT INTO `test_result` VALUES(111, 6, 1, 4, 6, 5, 3, 1, 80);
INSERT INTO `test_result` VALUES(112, 5, 3, 3, 6, 6, 4, 1, 83);
INSERT INTO `test_result` VALUES(113, 2, 6, 3, 1, 4, 5, 1, 85);
INSERT INTO `test_result` VALUES(114, 2, 3, 3, 3, 5, 4, 1, 90);
INSERT INTO `test_result` VALUES(115, 5, 3, 5, 3, 3, 5, 1, 73);
INSERT INTO `test_result` VALUES(116, 4, 4, 5, 6, 5, 5, 1, 92);
INSERT INTO `test_result` VALUES(119, 3, 2, 1, 4, 7, 4, 1, 95);
INSERT INTO `test_result` VALUES(120, 4, 2, 3, 2, 4, 4, 1, 94);
INSERT INTO `test_result` VALUES(121, 0, 0, 0, 0, 0, 0, 1, 96);
INSERT INTO `test_result` VALUES(123, 0, 0, 0, 0, 0, 0, 1, 96);
INSERT INTO `test_result` VALUES(124, 6, 4, 3, 6, 3, 5, 1, 96);
INSERT INTO `test_result` VALUES(125, 3, 4, 7, 5, 6, 1, 1, 97);
INSERT INTO `test_result` VALUES(126, 4, 5, 6, 5, 6, 3, 1, 96);
INSERT INTO `test_result` VALUES(127, 2, 6, 4, 3, 6, 7, 1, 100);
INSERT INTO `test_result` VALUES(128, 2, 4, 2, 6, 6, 4, 1, 98);
INSERT INTO `test_result` VALUES(129, 5, 4, 5, 4, 3, 4, 1, 93);
INSERT INTO `test_result` VALUES(130, 6, 4, 4, 6, 4, 4, 1, 1);
INSERT INTO `test_result` VALUES(131, 3, 5, 2, 6, 0, 4, 1, 1);
INSERT INTO `test_result` VALUES(132, 2, 4, 3, 7, 0, 5, 1, 1);
INSERT INTO `test_result` VALUES(133, 0, 0, 0, 0, 0, 0, 1, 9);
INSERT INTO `test_result` VALUES(134, 3, 4, 0, 6, 2, 4, 1, 1);
INSERT INTO `test_result` VALUES(135, 2, 7, 3, 7, 1, 8, 1, 1);
INSERT INTO `test_result` VALUES(136, 0, 2, 2, 4, 1, 2, 1, 1);
INSERT INTO `test_result` VALUES(137, 3, 0, 3, 0, 5, 2, 1, 46);
INSERT INTO `test_result` VALUES(138, 4, 6, 4, 4, 4, 3, 1, 47);
INSERT INTO `test_result` VALUES(139, 2, 2, 3, 4, 4, 1, 1, 47);
INSERT INTO `test_result` VALUES(140, 5, 4, 7, 2, 6, 4, 1, 46);
INSERT INTO `test_result` VALUES(141, 4, 3, 3, 2, 1, 6, 1, 1);
INSERT INTO `test_result` VALUES(142, 6, 3, 1, 5, 3, 4, 1, 1);
INSERT INTO `test_result` VALUES(143, 5, 5, 4, 2, 6, 5, 1, 51);
INSERT INTO `test_result` VALUES(144, 4, 6, 5, 7, 4, 4, 1, 51);
INSERT INTO `test_result` VALUES(145, 3, 1, 6, 3, 7, 2, 1, 120);
INSERT INTO `test_result` VALUES(146, 4, 2, 5, 2, 3, 5, 1, 51);
INSERT INTO `test_result` VALUES(147, 1, 6, 4, 6, 4, 4, 1, 9);
INSERT INTO `test_result` VALUES(148, 4, 5, 5, 3, 3, 6, 1, 51);
INSERT INTO `test_result` VALUES(149, 3, 7, 4, 2, 5, 4, 1, 51);
INSERT INTO `test_result` VALUES(150, 5, 6, 7, 6, 5, 3, 1, 51);
INSERT INTO `test_result` VALUES(151, 1, 4, 4, 3, 4, 2, 1, 51);
INSERT INTO `test_result` VALUES(152, 4, 6, 3, 7, 4, 4, 1, 51);

-- --------------------------------------------------------

--
-- Table structure for table `test_type`
--

CREATE TABLE `test_type` (
  `test_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_type_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`test_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `test_type`
--

INSERT INTO `test_type` VALUES(1, 'There is evidence that the ASQ is a predictor of depression, physical health, and achievement in various domains including academics, work, and sports.  The test was designed by eminent psychologist Dr Martin Seligman who is a pioneer n the field of posit');

-- --------------------------------------------------------

--
-- Table structure for table `value`
--

CREATE TABLE `value` (
  `value_id` int(11) NOT NULL AUTO_INCREMENT,
  `value_name` varchar(45) NOT NULL,
  `value_symbol` varchar(255) NOT NULL,
  `value_symbol_kids` varchar(255) NOT NULL,
  `value_definition` varchar(255) NOT NULL,
  PRIMARY KEY (`value_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `value`
--

INSERT INTO `value` VALUES(1, 'Justice', 'web_images/value_symbol/adult/_0001_Justice.png', 'web_images/value_symbol/kids/_0001_Justice.png', 'the quality of being just; righteousness, equitableness, ormoral rightness: to uphold the justice of a cause.');
INSERT INTO `value` VALUES(18, 'Altruism', 'web_images/value_symbol/adult/_0002_Altruism.png', 'web_images/value_symbol/kids/_0002_Altruism.png', 'the principle or practice of unselfish concern for or devotionto the welfare of others ( opposed to egoism).');
INSERT INTO `value` VALUES(19, 'Authority', 'web_images/value_symbol/adult/_0003_Authority.png', 'web_images/value_symbol/kids/_0003_Authority.png', 'the power to determine, adjudicate, or otherwise settle issues or disputes; jurisdiction; the right to control,command, or determine.');
INSERT INTO `value` VALUES(20, 'Accuracy', 'web_images/value_symbol/adult/_0004_Accuracy.png', 'web_images/value_symbol/kids/_0004_Accuracy.png', 'the condition or quality of being true, correct, or exact;freedom from error or defect; precision or exactness;correctness.');
INSERT INTO `value` VALUES(21, 'Creativity', 'web_images/value_symbol/adult/_0005_Creativity.png', 'web_images/value_symbol/kids/_0005_Creativity.png', 'the ability to transcend traditional ideas, rules, patterns,relationships, or the like, and to create meaningful newideas, forms, methods, interpretations, etc.; originality,progressiveness, or imagination: the need for creativity inmodern industry; creat');
INSERT INTO `value` VALUES(22, 'Acceptance', 'web_images/value_symbol/adult/_0006_Acceptance.png', 'web_images/value_symbol/kids/_0006_Acceptance.png', 'the act of taking or receiving something offered.');
INSERT INTO `value` VALUES(23, 'Loyalty', 'web_images/value_symbol/adult/_0007_Loyalty.png', 'web_images/value_symbol/kids/_0007_Loyalty.png', 'the state or quality of being loyal;  faithfulness tocommitments or obligations.');
INSERT INTO `value` VALUES(24, 'Recognition', 'web_images/value_symbol/adult/_0008_Recognition.png', 'web_images/value_symbol/kids/_0008_Recognition.png', 'an act of recognizing  or the state of being recognized.');
INSERT INTO `value` VALUES(25, 'Knowledge', 'web_images/value_symbol/adult/_0009_Knowledge.png', 'web_images/value_symbol/kids/_0009_Knowledge.png', 'acquaintance with facts, truths, or principles, as from studyor investigation; general erudition: knowledge of many things.');
INSERT INTO `value` VALUES(26, 'Achievement', 'web_images/value_symbol/adult/_0010_Achievement.png', 'web_images/value_symbol/kids/_0010_Achievement.png', 'something accomplished, especially by superior ability,special effort, great courage, etc.; a great or heroic deed:his remarkable achievements in art.');
INSERT INTO `value` VALUES(27, 'Autonomy', 'web_images/value_symbol/adult/_0011_Autonomy.png', 'web_images/value_symbol/kids/_0011_Autonomy.png', 'independence or freedom, as of the will or one''s actions: theautonomy of the individual.');
INSERT INTO `value` VALUES(28, 'Security', 'web_images/value_symbol/adult/_0012_Security.png', 'web_images/value_symbol/kids/_0012_Security.png', 'something that secures or makes safe; protection; defense.');
INSERT INTO `value` VALUES(29, 'Love', 'web_images/value_symbol/adult/_0013_Love.png', 'web_images/value_symbol/kids/_0013_Love.png', 'a feeling of warm personal attachment or deep affection, asfor a parent, child, or friend.');
INSERT INTO `value` VALUES(30, 'Aesthetics', 'web_images/value_symbol/adult/_0014_Aesthetics.png', 'web_images/value_symbol/kids/_0014_Aesthetics.png', 'the branch of philosophy dealing with such notions as thebeautiful, the ugly, the sublime, the comic, etc., asapplicable to the fine arts, with a view to establishing themeaning and validity of critical judgments concerning worksof art, and the principles');
INSERT INTO `value` VALUES(31, 'Beauty', 'web_images/value_symbol/adult/_0015_Beauty.png', 'web_images/value_symbol/kids/_0015_Beauty.png', 'the quality present in a thing or person that gives intensepleasure or deep satisfaction to the mind, whether arisingfrom sensory manifestations (as shape, color, sound, etc.), ameaningful design or pattern, or something else (as apersonality in which hig');
INSERT INTO `value` VALUES(32, 'Health', 'web_images/value_symbol/adult/_0016_Health.png', 'web_images/value_symbol/kids/_0016_Health.png', 'the general condition of the body or mind with reference tosoundness and vigor: good health; poor health.');
INSERT INTO `value` VALUES(33, 'Competence', 'web_images/value_symbol/adult/_0017_Competence.png', 'web_images/value_symbol/kids/_0017_Competence.png', 'the quality of being competent;  adequacy; possession ofrequired skill, knowledge, qualification, or capacity: He hiredher because of her competence as an accountant');
INSERT INTO `value` VALUES(34, 'Wisdom', 'web_images/value_symbol/adult/_0018_Wisdom.png', 'web_images/value_symbol/kids/_0018_Wisdom.png', 'the quality or state of being wise;  knowledge of what istrue or right coupled with just judgment as to action;sagacity, discernment, or insight.');
INSERT INTO `value` VALUES(35, 'Dependability', 'web_images/value_symbol/adult/_0019_Dependability.png', 'web_images/value_symbol/kids/_0019_Dependability.png', 'capable of being depended  on; worthy of trust; reliable: adependable employee.');
INSERT INTO `value` VALUES(36, 'Systematic', 'web_images/value_symbol/adult/_0020_Systematic.png', 'web_images/value_symbol/kids/_0020_Systematic.png', 'having, showing, or involving a system,  method, or plan: asystematic course of reading; systematic efforts.');
INSERT INTO `value` VALUES(37, 'Family', 'web_images/value_symbol/adult/_0021_Family.png', 'web_images/value_symbol/kids/_0021_Family.png', 'the children of one person or one couple collectively:  a basic social unit consisting of parents and their children ');
INSERT INTO `value` VALUES(38, 'Adventure', 'web_images/value_symbol/adult/_0022_Adventure.png', 'web_images/value_symbol/kids/_0022_Adventure.png', 'an exciting or very unusual experience. a bold, usually risky undertaking; hazardous action ofuncertain outcome. ');
INSERT INTO `value` VALUES(39, 'Caring', 'web_images/value_symbol/adult/_0023_Caring.png', 'web_images/value_symbol/kids/_0023_Caring.png', 'to be concerned or solicitous; have thought or regard.');
INSERT INTO `value` VALUES(40, 'Challenge', 'web_images/value_symbol/adult/_0024_Challenge.png', 'web_images/value_symbol/kids/_0024_Challenge.png', 'to summon to a contest of skill, strength, etc. to take exception to; call in question: to challenge thewisdom of a procedure. ');
INSERT INTO `value` VALUES(41, 'Adaptability', 'web_images/value_symbol/adult/_0025_Adaptability.png', 'web_images/value_symbol/kids/_0025_Adaptability.png', 'to adjust (someone or something, esponeself) to different conditions, a new environment, etc');
INSERT INTO `value` VALUES(42, 'Commitment', 'web_images/value_symbol/adult/_0026_Commitment.png', 'web_images/value_symbol/kids/_0026_Commitment.png', 'an obligation, promise, etc that restricts one''s freedom ofaction');
INSERT INTO `value` VALUES(43, 'Contribution', 'web_images/value_symbol/adult/_0027_Contribution.png', 'web_images/value_symbol/kids/_0027_Contribution.png', 'something contributed, such as money or ideas');
INSERT INTO `value` VALUES(44, 'Cooperation', 'web_images/value_symbol/adult/_0028_Cooperation.png', 'web_images/value_symbol/kids/_0028_Cooperation.png', 'an act or instance of working or acting together for acommon purpose or benefit; joint action.');
INSERT INTO `value` VALUES(45, 'Fame', 'web_images/value_symbol/adult/_0029_Fame.png', 'web_images/value_symbol/kids/_0029_Fame.png', 'widespread reputation, especially of a favorable character;renown; public eminence: to seek fame as an opera singer.');
INSERT INTO `value` VALUES(46, 'Passion', 'web_images/value_symbol/adult/_0030_Passion.png', 'web_images/value_symbol/kids/_0030_Passion.png', 'any powerful or compelling emotion or feeling, as love or hate.');
INSERT INTO `value` VALUES(47, 'Honesty', 'web_images/value_symbol/adult/_0031_Honesty.png', 'web_images/value_symbol/kids/_0031_Honesty.png', 'uprightness andfairness. truthfulness, sincerity, or frankness. ');
INSERT INTO `value` VALUES(48, 'Morality', 'web_images/value_symbol/adult/_0032_Morality.png', 'web_images/value_symbol/kids/_0032_Morality.png', 'conformity to the rules of right conduct; moral  or virtuousconduct.');
INSERT INTO `value` VALUES(49, 'Spirituality', 'web_images/value_symbol/adult/_0033_Spirituality.png', 'web_images/value_symbol/kids/_0033_Spirituality.png', 'the state or quality of being dedicated to God, religion, orspiritual things or values, esp as contrasted with material ortemporal ones');
INSERT INTO `value` VALUES(50, 'Compassion', 'web_images/value_symbol/adult/_0034_Compassion.png', 'web_images/value_symbol/kids/_0034_Compassion.png', 'a feeling of deep sympathy and sorrow for another who isstricken by misfortune, accompanied by a strong desire toalleviate the suffering.');
INSERT INTO `value` VALUES(51, 'Openness', 'web_images/value_symbol/adult/_0035_Openness.png', 'web_images/value_symbol/kids/_0035_Openness.png', 'ready to entertain new ideas; not biased or prejudiced: anopen mind');
INSERT INTO `value` VALUES(52, 'Responsibility', 'web_images/value_symbol/adult/_0036_Responsibility.png', 'web_images/value_symbol/kids/_0036_Responsibility.png', 'a particular burden of obligation upon one who is responsible:the responsibilities of authority.');
INSERT INTO `value` VALUES(53, 'Faithfulness', 'web_images/value_symbol/adult/_0037_Faithfulness.png', 'web_images/value_symbol/kids/_0037_Faithfulness.png', 'steady in allegiance or affection; loyal; constant: faithfulfriends.');
INSERT INTO `value` VALUES(54, 'Independence', 'web_images/value_symbol/adult/_0038_Independence.png', 'web_images/value_symbol/kids/_0038_Independence.png', 'not influenced or controlled by others in matters of opinion,conduct, etc.; thinking or acting for oneself: an independentthinker.');
INSERT INTO `value` VALUES(55, 'Peace', 'web_images/value_symbol/adult/_0039_Peace.png', 'web_images/value_symbol/kids/_0039_Peace.png', 'a state of mutual harmony between people or groups,especially in personal relations: Try to live in peace with yourneighbors.');
INSERT INTO `value` VALUES(56, 'Generosity', 'web_images/value_symbol/adult/_0040_Generosity.png', 'web_images/value_symbol/kids/_0040_Generosity.png', 'willingness and liberality in giving away one''s money, time, etc;magnanimity');
INSERT INTO `value` VALUES(57, 'Perfection', 'web_images/value_symbol/adult/_0041_Perfection.png', 'web_images/value_symbol/kids/_0041_Perfection.png', 'conforming absolutely to the description or definition of anideal type: a perfect sphere; a perfect gentleman.');
INSERT INTO `value` VALUES(58, 'Farsightedness', 'web_images/value_symbol/adult/_0042_Farsightedness.png', 'web_images/value_symbol/kids/_0042_Farsightedness.png', 'seeing objects at a distance more clearly than those near athand; hyperopic.');
INSERT INTO `value` VALUES(59, 'Brave', 'web_images/value_symbol/adult/_0043_Brave.png', 'web_images/value_symbol/kids/_0043_Brave.png', 'possessing or exhibiting courage or courageous endurance.');
INSERT INTO `value` VALUES(60, 'Teamwork', 'web_images/value_symbol/adult/_0044_Teamwork.png', 'web_images/value_symbol/kids/_0044_Teamwork.png', 'cooperative or coordinated effort on the part of a group ofpersons acting together as a team  or in the interests of acommon cause.');
INSERT INTO `value` VALUES(61, 'Perseverance', 'web_images/value_symbol/adult/_0045_Perseverance.png', 'web_images/value_symbol/kids/_0045_Perseverance.png', 'continued steady belief or efforts, withstanding discouragementor difficulty; persistence');
INSERT INTO `value` VALUES(62, 'Service', 'web_images/value_symbol/adult/_0046_Service.png', 'web_images/value_symbol/kids/_0046_Service.png', 'an act of helpful activity; help; aid: to do someone a service.');
INSERT INTO `value` VALUES(63, 'Freedom', 'web_images/value_symbol/adult/_0047_Freedom.png', 'web_images/value_symbol/kids/_0047_Freedom.png', 'the state of being free  or at liberty rather than inconfinement or under physical restraint: He won his freedomafter a retrial.');
INSERT INTO `value` VALUES(64, 'Hardworking', 'web_images/value_symbol/adult/_0048_Hardworking.png', 'web_images/value_symbol/kids/_0048_Hardworking.png', 'industrious; zealous:');
INSERT INTO `value` VALUES(65, 'Patience', 'web_images/value_symbol/adult/_0049_Patience.png', 'web_images/value_symbol/kids/_0049_Patience.png', 'an ability or willingness to suppress restlessness orannoyance when confronted with delay: to have patiencewith a slow learner.');
INSERT INTO `value` VALUES(66, 'Energetic', 'web_images/value_symbol/adult/_0050_Energetic.png', 'web_images/value_symbol/kids/_0050_Energetic.png', 'possessing or exhibiting energy,  especially in abundance;vigorous: an energetic leader.');
INSERT INTO `value` VALUES(67, 'Resourcefulness', 'web_images/value_symbol/adult/_0051_Resourcefulness.png', 'web_images/value_symbol/kids/_0051_Resourcefulness.png', 'able to deal skillfully and promptly with new situations, difficulties,etc.');
INSERT INTO `value` VALUES(68, 'Gratitude', 'web_images/value_symbol/adult/_0052_Gratitude.png', 'web_images/value_symbol/kids/_0052_Gratitude.png', 'the quality or feeling of being grateful or thankful: He expressed hisgratitude to everyone on the staff.');
INSERT INTO `value` VALUES(69, 'Invulnerability', 'web_images/value_symbol/adult/_0053_Invulnerability.png', 'web_images/value_symbol/kids/_0053_Invulnerability.png', 'incapable of being wounded, hurt, damaged, etc, eitherphysically or emotionally');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `fk_activity_seeker_goal1` FOREIGN KEY (`seeker_goal_id`) REFERENCES `goal` (`seeker_goal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `coat_of_arm`
--
ALTER TABLE `coat_of_arm`
  ADD CONSTRAINT `fk_code_of_arm_seeker1` FOREIGN KEY (`seeker_id`) REFERENCES `seeker` (`seeker_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `goal`
--
ALTER TABLE `goal`
  ADD CONSTRAINT `fk_seeker_goal_goal_category1` FOREIGN KEY (`goal_cat_id`) REFERENCES `goal_category` (`goal_cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_seeker_goal_seeker1` FOREIGN KEY (`seeker_id`) REFERENCES `seeker` (`seeker_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `fk_mission_statement_seeker1` FOREIGN KEY (`seeker_id`) REFERENCES `seeker` (`seeker_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `motto`
--
ALTER TABLE `motto`
  ADD CONSTRAINT `fk_motto_seeker1` FOREIGN KEY (`seeker_id`) REFERENCES `seeker` (`seeker_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `fk_options_question1` FOREIGN KEY (`test_question_num`) REFERENCES `question` (`test_question_num`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `fk_question_test_type1` FOREIGN KEY (`test_type_id`) REFERENCES `test_type` (`test_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reminder`
--
ALTER TABLE `reminder`
  ADD CONSTRAINT `fk_reminder_seeker1` FOREIGN KEY (`seeker_id`) REFERENCES `seeker` (`seeker_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `seeker_value`
--
ALTER TABLE `seeker_value`
  ADD CONSTRAINT `fk_seeker_value_seeker1` FOREIGN KEY (`seeker_id`) REFERENCES `seeker` (`seeker_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_seeker_value_value` FOREIGN KEY (`value_id`) REFERENCES `value` (`value_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `test_result`
--
ALTER TABLE `test_result`
  ADD CONSTRAINT `fk_test_result_seeker1` FOREIGN KEY (`seeker_id`) REFERENCES `seeker` (`seeker_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_test_result_test_type1` FOREIGN KEY (`test_type_id`) REFERENCES `test_type` (`test_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
