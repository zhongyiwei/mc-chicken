-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2011 at 10:11 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `s91149`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` VALUES(13, '2011-07-31', '2011-07-31', 'Call my family members', 'Talk to my family members through phone', 14, 'Completed');
INSERT INTO `activity` VALUES(21, '2011-12-06', '2012-02-19', 'Outing with family.', 'Plan outing. Check everyone timing.', 28, 'New');
INSERT INTO `activity` VALUES(22, '2011-12-11', '2011-12-11', 'Go out shopping with my family', 'We all should be able present and we will go some shopping mall even if it is Bukit Panjang Plaza to have at least a simple dinner or shopping around at the plaze', 58, 'New');
INSERT INTO `activity` VALUES(23, '2011-12-06', '2013-03-31', 'study period', 'study one hour each day.', 39, 'New');
INSERT INTO `activity` VALUES(24, '2011-12-16', '2011-12-16', 'Have dinner/lunch together.', 'BUffet at Sakuar', 27, 'New');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `coat_of_arm`
--

INSERT INTO `coat_of_arm` VALUES(8, 'web_images/coa_image/shield/coa5.png', 9);
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
  `achievement_criteria` varchar(100) NOT NULL,
  `actual_end_date` date DEFAULT NULL,
  `goal_completion_status` varchar(30) NOT NULL,
  PRIMARY KEY (`seeker_goal_id`),
  KEY `fk_seeker_goal_seeker1` (`seeker_id`),
  KEY `fk_seeker_goal_goal_category1` (`goal_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `goal`
--

INSERT INTO `goal` VALUES(14, 'Spend more time with family', 9, 1, '2011-07-31', 'Talk to my family members at least once a week', '2011-12-05', 'Completed');
INSERT INTO `goal` VALUES(21, 'do what a son should do.', 30, 1, '2011-12-06', 'support my family.', NULL, 'Active');
INSERT INTO `goal` VALUES(22, 'Spend time with them.', 26, 1, '2011-12-06', 'Stay at home more often.', NULL, 'Active');
INSERT INTO `goal` VALUES(23, 'Meals with family', 31, 1, '2011-12-06', 'eating with them at least thrice a week', NULL, 'Active');
INSERT INTO `goal` VALUES(24, 'To achieve good grades in UT2', 37, 1, '2011-12-06', 'At lease get C for each module.', NULL, 'Active');
INSERT INTO `goal` VALUES(25, 'Have deeper relationship with them', 25, 1, '2011-12-06', '1. Visit my daddy at least once a week\r\n2. Go out for a dinner with bro and mummy soon', NULL, 'Active');
INSERT INTO `goal` VALUES(26, 'have a good career no matter in which aspect.', 30, 2, '2011-12-06', 'must be able to stay in the job long enough to earn money.', NULL, 'Active');
INSERT INTO `goal` VALUES(27, 'Don''t be an insolent daughter.', 36, 1, '2011-12-06', 'Understand and be patient.\r\nDo not talk back in harsh way, but explain and pacify amicably when heat', NULL, 'Active');
INSERT INTO `goal` VALUES(28, 'Able to speak out all my thoughts with my fam', 34, 1, '2011-12-06', 'Be more open.', NULL, 'Active');
INSERT INTO `goal` VALUES(29, 'complete my diploma', 30, 3, '2011-12-06', 'pass my diploma and complete my studies.', NULL, 'Active');
INSERT INTO `goal` VALUES(30, 'Better relationship with my family', 24, 1, '2011-12-06', '1. Have a heart to heart talk with my family at least once a month.\r\n2. Attend and be more punctual ', NULL, 'Active');
INSERT INTO `goal` VALUES(31, 'stable family.', 33, 1, '2011-12-06', 'financially rich', NULL, 'Active');
INSERT INTO `goal` VALUES(32, 'spend more time with family members', 35, 1, '2011-12-06', 'make time to talk to my parents', NULL, 'Active');
INSERT INTO `goal` VALUES(33, 'Get into a Career that i have an interest in', 25, 2, '2011-12-06', '1. Graduate from my diploma\r\n2. Get a GPA that is at least 2.7 and above.', NULL, 'Active');
INSERT INTO `goal` VALUES(34, 'To be a secondary maths teacher', 36, 2, '2011-12-06', 'Get good GPA in diploma and recevie a well diploma certificate.\r\nEnrol to NIE and finish it within 2', NULL, 'Active');
INSERT INTO `goal` VALUES(35, 'Be a businessman', 24, 2, '2011-12-06', '1. study hard and learn how to do business.\r\n2. Upgrade myself more oftenly.', NULL, 'Active');
INSERT INTO `goal` VALUES(36, 'do well in rp', 35, 3, '2011-12-06', 'study, practice', NULL, 'Active');
INSERT INTO `goal` VALUES(37, 'not to let my family go hungry', 30, 5, '2011-12-06', 'save regularly to avoid sudden incident.', NULL, 'Active');
INSERT INTO `goal` VALUES(38, 'able to make new friends', 33, 6, '2011-12-06', 'friendly', NULL, 'Active');
INSERT INTO `goal` VALUES(39, 'Learn what I want and guaduate.', 34, 3, '2011-12-06', 'Study hard, work toward.', NULL, 'Active');
INSERT INTO `goal` VALUES(40, 'Graduate from my diploma', 25, 3, '2011-12-06', '1. Get at least a 2.7 GPA.', NULL, 'Active');
INSERT INTO `goal` VALUES(41, 'Moderate my time between family and friends', 23, 1, '2011-12-06', 'Spend at least a day in a week with them.', NULL, 'Active');
INSERT INTO `goal` VALUES(42, 'Find a job in IT field', 31, 2, '2011-12-06', 'A basic pay of 2k.', NULL, 'Active');
INSERT INTO `goal` VALUES(43, 'able to support myself with the wants i want', 35, 5, '2011-12-06', 'save money', NULL, 'Active');
INSERT INTO `goal` VALUES(44, 'Pay my own phone bill', 34, 5, '2011-12-06', 'Manage my spending.', NULL, 'Active');
INSERT INTO `goal` VALUES(45, 'Become a pilot', 23, 2, '2011-12-06', 'Geting my Diploma\r\nGetting my Degree\r\nEnroll in private pilot license course', NULL, 'Active');
INSERT INTO `goal` VALUES(46, 'maintain relationship with friends.', 30, 6, '2011-12-06', 'try to meet up and have regular outings to maintian the relationship.', NULL, 'Active');
INSERT INTO `goal` VALUES(47, 'make more friends', 35, 6, '2011-12-06', 'be friendly', NULL, 'Active');
INSERT INTO `goal` VALUES(48, 'Get into a local university', 24, 3, '2011-12-06', '1. Make sure I graduate from university by studying hard.', NULL, 'Active');
INSERT INTO `goal` VALUES(49, 'good and healthy', 33, 7, '2011-12-06', 'watch my diet and activity of my life.', NULL, 'Active');
INSERT INTO `goal` VALUES(50, 'Able to show my thoughts in front of stranger', 34, 6, '2011-12-06', 'Never be afraid to show my real thoughts.', NULL, 'Active');
INSERT INTO `goal` VALUES(51, 'Doing something I''m passionate about.', 26, 2, '2011-12-06', 'Doing what I''m good at.', NULL, 'Active');
INSERT INTO `goal` VALUES(52, 'Get good GPA in diploma certificate.', 36, 3, '2011-12-06', 'Do well in school, hardworking and do not lack of disciplinary.', NULL, 'Active');
INSERT INTO `goal` VALUES(53, 'Getting diploma, then degree', 23, 3, '2011-12-06', 'Graduating with a overall GPA of 3 and above.\r\nGrades that can get me to the university i want.', NULL, 'Active');
INSERT INTO `goal` VALUES(54, 'stay fit until i finish my reservist', 30, 7, '2011-12-06', 'exercise regularly and watch my diet.', NULL, 'Active');
INSERT INTO `goal` VALUES(55, 'Good grade', 31, 3, '2011-12-06', 'a gpa of 3.8', NULL, 'Active');
INSERT INTO `goal` VALUES(56, 'Have at least a constant 1k in my personal ba', 25, 5, '2011-12-06', '1. Spend less money. (DUH)\r\n2. save at least 10bucks a month. \r\n3. Don''t withdraw more then what i p', NULL, 'Active');
INSERT INTO `goal` VALUES(57, 'silm down, better health.', 34, 7, '2011-12-06', 'Watch what I eat.', NULL, 'Active');
INSERT INTO `goal` VALUES(58, 'To spend at least Sundays with my family', 28, 1, '2011-12-06', 'Spend Sundays with my brother, father and my mother as not everyone of us are present on Sundays.', NULL, 'Active');
INSERT INTO `goal` VALUES(59, 'To at least one main bank account', 24, 5, '2011-12-06', '1. Start a bank account now.\r\n2. save money and start saving up.', NULL, 'Active');
INSERT INTO `goal` VALUES(60, 'Rise up', 31, 4, '2011-12-06', 'Be a cellgroup leader.', NULL, 'Active');
INSERT INTO `goal` VALUES(61, 'Have different group of friends', 23, 6, '2011-12-06', 'Spending time with them', NULL, 'Active');
INSERT INTO `goal` VALUES(62, 'healthy living', 35, 7, '2011-12-06', 'exercise and eat healthy', NULL, 'Active');
INSERT INTO `goal` VALUES(63, 'rich', 33, 5, '2011-12-06', 'earn big bucks.', NULL, 'Active');
INSERT INTO `goal` VALUES(64, 'To have more friends.', 24, 6, '2011-12-06', '1. be more friendly.', NULL, 'Active');
INSERT INTO `goal` VALUES(65, 'To be financially independent as soon as poss', 23, 5, '2011-12-06', 'saving up\r\nplan early', NULL, 'Active');
INSERT INTO `goal` VALUES(66, 'Have good grades.', 26, 3, '2011-12-06', 'Spend on time studying\r\nRevise before UT', NULL, 'Active');
INSERT INTO `goal` VALUES(67, 'Have more friends that I can depend on', 25, 6, '2011-12-06', '1. Make more friends\r\n2. Try to befriend more kinds of people.', NULL, 'Active');
INSERT INTO `goal` VALUES(68, 'Have a good health.', 24, 7, '2011-12-06', '1. Eat more, do less dieting.', NULL, 'Active');
INSERT INTO `goal` VALUES(69, 'Be fit', 23, 7, '2011-12-06', 'Exercising at least twice a week.\r\nHave a plan to keep fit.', NULL, 'Active');
INSERT INTO `goal` VALUES(70, 'Get rid of my Asthma', 25, 7, '2011-12-06', '1. Do not eat stuff that i cant eat.', NULL, 'Active');
INSERT INTO `goal` VALUES(71, 'healthy', 37, 7, '2011-12-06', 'to have balanced diet.', NULL, 'Active');
INSERT INTO `goal` VALUES(72, 'Save up for future usage', 31, 5, '2011-12-06', 'At least 4k', NULL, 'Active');
INSERT INTO `goal` VALUES(73, 'Earn at least 3k/mth, better to get 5k :)', 36, 5, '2011-12-06', 'Good certificate, good career.\r\nGood career of what i really want, will give me more interest in it.', NULL, 'Active');
INSERT INTO `goal` VALUES(74, 'Earn sufficient money to support my family', 26, 5, '2011-12-06', 'Work hard when working', NULL, 'Active');
INSERT INTO `goal` VALUES(75, 'Be more friendly', 26, 6, '2011-12-06', 'Be more outgoing', NULL, 'Active');
INSERT INTO `goal` VALUES(76, 'get a diploma', 33, 3, '2011-12-06', 'get good grades.', NULL, 'Active');
INSERT INTO `goal` VALUES(77, 'Not hurting people''s feelings.', 36, 6, '2011-12-06', 'Be friendly.\r\nBe patient.\r\nBe more out-going.\r\nDon''t be a shy person.\r\nAll these have limits.', NULL, 'Active');
INSERT INTO `goal` VALUES(78, 'More healthier.', 36, 7, '2011-12-06', 'Eat well, sleep well, have a balanced diet.', NULL, 'Active');
INSERT INTO `goal` VALUES(79, 'Keep fit', 26, 7, '2011-12-06', 'Do more exercise and jogs.', NULL, 'Active');
INSERT INTO `goal` VALUES(80, 'Train for my nafa for army', 31, 7, '2011-12-06', 'Get gold', NULL, 'Active');
INSERT INTO `goal` VALUES(81, 'To be able to get into uni', 28, 3, '2011-12-06', 'Look at the different GPA that i am getting for my semsters and try to get more than 0.2 more than m', NULL, 'Active');
INSERT INTO `goal` VALUES(82, 'Be more fit', 44, 7, '2011-12-06', 'Excercise at least 2 times per week, 2 hours per session', NULL, 'Active');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` VALUES(10, 'abc', 9);
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

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

INSERT INTO `question` VALUES(1, 'The project you are in charge of is a great success.', 1);
INSERT INTO `question` VALUES(2, 'You and your best friend make up after a fight.', 1);
INSERT INTO `question` VALUES(3, 'You get lost driving to a friend''s house.', 1);
INSERT INTO `question` VALUES(4, 'Your best friend surprises you with a gift.', 1);
INSERT INTO `question` VALUES(5, 'You forget your best friend''s birthday.', 1);
INSERT INTO `question` VALUES(6, 'You get a box of chocolates from a someone you don''t know.', 1);
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
INSERT INTO `question` VALUES(28, 'Your teacher/boss gives you too little time in which to inish a project, but you get it finished anyway.', 1);
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
  `reminder_sms` int(11) NOT NULL,
  PRIMARY KEY (`reminder_id`),
  KEY `fk_reminder_seeker1` (`seeker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` VALUES(6, 'monthly', 1, 9, 0);

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
  PRIMARY KEY (`seeker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `seeker`
--

INSERT INTO `seeker` VALUES(1, 'admin@oxygen.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'male', '2000-12-12', 'Singaporean', NULL, 'admin');
INSERT INTO `seeker` VALUES(9, 'ariansah@hotmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'Arian', 'male', '1990-04-15', 'Indonesia', '82361465', 'member');
INSERT INTO `seeker` VALUES(21, '104720@myrp.edu.sg', '1b09b49b872ae2277a033917a7abdae87bfa0a61', 'Ricky', 'male', '1993-11-01', 'Singapore', '92263794', 'member');
INSERT INTO `seeker` VALUES(22, '103948@myrp.edu.sg', '4128637b7e274d18844718aa5a21fdb2c0a8bcbc', 'mei ting', 'female', '1993-04-27', 'Singapore', '91234567', 'member');
INSERT INTO `seeker` VALUES(23, 'abelho@Live.com.sg', '8ca885d6bb70267261dc774520a7b6a4817acb19', 'Abel', 'male', '1992-05-08', 'Singapore', '94245212', 'member');
INSERT INTO `seeker` VALUES(24, 'yijian93@hotmail.com', 'd63da343d280b2c3c9ab91759f382d99431eb414', 'verayj', 'female', '2011-12-06', 'Singapore', '96641828', 'member');
INSERT INTO `seeker` VALUES(25, 'drey-chanel@hotmail.sg', '7945f1d67dc3eb14866a39c80f80d2453a355738', 'Audrey', 'female', '1993-05-31', 'Singapore', '98204520', 'member');
INSERT INTO `seeker` VALUES(26, 'wellofshadows@hotmail.com', '8be68582e5e1704fbc2146d083e3dfd409657c12', 'Zhao Kiat', 'Male', '1992-05-15', 'Singaporean', '90905368', 'member');
INSERT INTO `seeker` VALUES(27, 'mokhuiwen@hotmail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 'Mabel Mok', 'female', '1990-02-21', 'Singapore', '91123633', 'member');
INSERT INTO `seeker` VALUES(28, 'playful_devil10@hotmail.com', '9a9e78afe382a9724e049d98465deea9f998009f', 'Man Ru', 'female', '1993-06-13', 'Singapore', '96757803', 'member');
INSERT INTO `seeker` VALUES(29, 'oc3an_blue@hotmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'grace', 'female', '0000-00-00', 'Singapore', '81333797', 'member');
INSERT INTO `seeker` VALUES(30, 'papercup86@hotmail.com', '666fb4efc648dce655c4daf6d921579f4c90f63f', 'kenneth', 'male', '1986-05-30', 'Burma', '82686630', 'member');
INSERT INTO `seeker` VALUES(31, 'justinrtw@gmail.com', 'bdfa312781ab66b1d0714eb1deebd21d22613c70', 'justinrtw', 'Male', '0000-00-00', 'Burma', '91278511', 'member');
INSERT INTO `seeker` VALUES(32, 'kwanshyan@live.com', '0ae9e4deba26021986ffd99636da6601f6393631', 'Ang Kwan Shyan', 'Male', '1992-08-29', 'Singaporean', '81130644', 'member');
INSERT INTO `seeker` VALUES(33, '102169@myrp.edu.sg', 'a635f6a522379d34010c8d9ae5c42195757ec9ca', 'ronald', 'male', '1992-02-02', 'Singapore', '91712562', 'member');
INSERT INTO `seeker` VALUES(34, '105019@myrp.edu.sg', '2ffbbb401af71f0b7c5026c674cefc0087a3d6bb', 'SsinyiI', 'female', '0000-00-00', 'Malaysia', '96158221', 'member');
INSERT INTO `seeker` VALUES(35, '103260@myrp.edu.sg', '67f8718b0cb893ae4ffeeae6bd2e6cda4b2defc0', 'amanda', 'female', '0000-00-00', 'Singapore', '96215565', 'member');
INSERT INTO `seeker` VALUES(36, '105209@myrp.edu.sg', '8a429531b205cf4eca9c6f36ed32b53c11f04175', 'Hazirah', 'female', '1992-11-26', 'Singapore', '90563750', 'member');
INSERT INTO `seeker` VALUES(37, 'christina_510@hotmail.com', '379784e41c3d7dca2df845d9a244769a066882f6', 'christina', 'female', '1991-01-30', 'Burma', '85002015', 'member');
INSERT INTO `seeker` VALUES(38, '101380@myrp.edu.sg', 'eedcdf6cd9e8f046bf224592e4131bdf96120da2', 'Foo Shi Tian', 'female', '1991-08-05', 'Malaysia', '85011557', 'member');
INSERT INTO `seeker` VALUES(39, 'zirasyazyra@hotmail.com', 'acd9e9c20606cc19871f5ed63ff65ad1e6aeafea', 'Nadzirah Binte isa', 'female', '2011-05-18', 'Singapore', '90422198', 'member');
INSERT INTO `seeker` VALUES(40, '105630@myrp.edu.sg', '64aafbf95e8ebbd6c66a004e5b730201e26a1faa', 'Larry', 'male', '1988-12-25', 'Singapore', '97690804', 'member');
INSERT INTO `seeker` VALUES(41, '103690@myrp.edu.sg', '15b2f3c591c67ec5b591ad6ea17eff04a155cc42', 'Myra', 'female', '1993-02-28', 'Singapore', '92312226', 'member');
INSERT INTO `seeker` VALUES(42, '102274@myrp.edu.sg', '048077835e114f25592e2e010af21ab56e829465', 'amirah', 'female', '1992-02-25', 'Singapore', '93841249', 'member');
INSERT INTO `seeker` VALUES(43, 'syazana_29@hotmail.com', '695c7d1ad99521cf3deb11fa45cf0c4e2e8abe07', 'Syazana', 'female', '1992-05-15', 'Singapore', '98659704', 'member');
INSERT INTO `seeker` VALUES(44, 'real_devilz107@hotmail.com', '1dbc81ef07709a7f4aef6a41ec6151f7fbb686f2', 'Ang Zhi Wei Widdy', 'male', '1987-12-23', 'Singapore', '92974293', 'member');
INSERT INTO `seeker` VALUES(45, '105121@MYRP.EDU.SG', '85906c718f83e3770a24ccc673e7716caddf5404', 'Firdaus', 'male', '1991-10-29', 'Burma', '94569124', 'member');

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

INSERT INTO `seeker_value` VALUES(21, 37);
INSERT INTO `seeker_value` VALUES(21, 44);
INSERT INTO `seeker_value` VALUES(23, 24);
INSERT INTO `seeker_value` VALUES(23, 26);
INSERT INTO `seeker_value` VALUES(25, 9);
INSERT INTO `seeker_value` VALUES(25, 31);
INSERT INTO `seeker_value` VALUES(25, 44);
INSERT INTO `seeker_value` VALUES(26, 22);
INSERT INTO `seeker_value` VALUES(26, 39);
INSERT INTO `seeker_value` VALUES(26, 45);
INSERT INTO `seeker_value` VALUES(28, 21);
INSERT INTO `seeker_value` VALUES(29, 25);
INSERT INTO `seeker_value` VALUES(29, 31);
INSERT INTO `seeker_value` VALUES(29, 34);
INSERT INTO `seeker_value` VALUES(29, 35);
INSERT INTO `seeker_value` VALUES(29, 37);
INSERT INTO `seeker_value` VALUES(29, 39);
INSERT INTO `seeker_value` VALUES(29, 45);
INSERT INTO `seeker_value` VALUES(33, 21);
INSERT INTO `seeker_value` VALUES(34, 9);
INSERT INTO `seeker_value` VALUES(34, 21);
INSERT INTO `seeker_value` VALUES(37, 22);
INSERT INTO `seeker_value` VALUES(37, 23);
INSERT INTO `seeker_value` VALUES(37, 25);
INSERT INTO `seeker_value` VALUES(37, 28);
INSERT INTO `seeker_value` VALUES(37, 30);
INSERT INTO `seeker_value` VALUES(37, 37);
INSERT INTO `seeker_value` VALUES(38, 33);
INSERT INTO `seeker_value` VALUES(38, 34);
INSERT INTO `seeker_value` VALUES(38, 36);
INSERT INTO `seeker_value` VALUES(39, 21);
INSERT INTO `seeker_value` VALUES(39, 36);
INSERT INTO `seeker_value` VALUES(39, 45);
INSERT INTO `seeker_value` VALUES(40, 9);
INSERT INTO `seeker_value` VALUES(40, 33);
INSERT INTO `seeker_value` VALUES(41, 23);
INSERT INTO `seeker_value` VALUES(41, 28);
INSERT INTO `seeker_value` VALUES(46, 25);
INSERT INTO `seeker_value` VALUES(46, 34);
INSERT INTO `seeker_value` VALUES(47, 31);
INSERT INTO `seeker_value` VALUES(47, 36);
INSERT INTO `seeker_value` VALUES(48, 33);
INSERT INTO `seeker_value` VALUES(49, 31);
INSERT INTO `seeker_value` VALUES(49, 35);
INSERT INTO `seeker_value` VALUES(49, 37);
INSERT INTO `seeker_value` VALUES(49, 39);
INSERT INTO `seeker_value` VALUES(51, 26);
INSERT INTO `seeker_value` VALUES(52, 22);
INSERT INTO `seeker_value` VALUES(53, 25);
INSERT INTO `seeker_value` VALUES(54, 45);
INSERT INTO `seeker_value` VALUES(55, 35);
INSERT INTO `seeker_value` VALUES(55, 44);
INSERT INTO `seeker_value` VALUES(56, 35);
INSERT INTO `seeker_value` VALUES(58, 23);
INSERT INTO `seeker_value` VALUES(59, 36);
INSERT INTO `seeker_value` VALUES(60, 24);
INSERT INTO `seeker_value` VALUES(60, 26);
INSERT INTO `seeker_value` VALUES(61, 23);
INSERT INTO `seeker_value` VALUES(61, 24);
INSERT INTO `seeker_value` VALUES(61, 30);
INSERT INTO `seeker_value` VALUES(63, 22);
INSERT INTO `seeker_value` VALUES(63, 28);
INSERT INTO `seeker_value` VALUES(63, 34);
INSERT INTO `seeker_value` VALUES(63, 44);
INSERT INTO `seeker_value` VALUES(64, 9);
INSERT INTO `seeker_value` VALUES(64, 24);
INSERT INTO `seeker_value` VALUES(64, 28);
INSERT INTO `seeker_value` VALUES(64, 30);
INSERT INTO `seeker_value` VALUES(65, 26);
INSERT INTO `seeker_value` VALUES(65, 30);
INSERT INTO `seeker_value` VALUES(67, 39);
INSERT INTO `seeker_value` VALUES(69, 33);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

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
  PRIMARY KEY (`value_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `value`
--

INSERT INTO `value` VALUES(1, 'Justice', 'web_images/value_symbol/adult/_0001_Justice.png');
INSERT INTO `value` VALUES(18, 'Altruism', 'web_images/value_symbol/adult/_0002_Altruism.png');
INSERT INTO `value` VALUES(19, 'Authority', 'web_images/value_symbol/adult/_0003_Authority.png');
INSERT INTO `value` VALUES(20, 'Accuracy', 'web_images/value_symbol/adult/_0004_Accuracy.png');
INSERT INTO `value` VALUES(21, 'Creativity', 'web_images/value_symbol/adult/_0005_Creativity.png');
INSERT INTO `value` VALUES(22, 'Acceptance', 'web_images/value_symbol/adult/_0006_Acceptance.png');
INSERT INTO `value` VALUES(23, 'Loyalty', 'web_images/value_symbol/adult/_0007_Loyalty.png');
INSERT INTO `value` VALUES(24, 'Recognition', 'web_images/value_symbol/adult/_0008_Recognition.png');
INSERT INTO `value` VALUES(25, 'Knowledge', 'web_images/value_symbol/adult/_0009_Knowledge.png');
INSERT INTO `value` VALUES(26, 'Achievement', 'web_images/value_symbol/adult/_0010_Achievement.png');
INSERT INTO `value` VALUES(27, 'Autonomy', 'web_images/value_symbol/adult/_0011_Autonomy.png');
INSERT INTO `value` VALUES(28, 'Security', 'web_images/value_symbol/adult/_0012_Security.png');
INSERT INTO `value` VALUES(29, 'Love', 'web_images/value_symbol/adult/_0013_Love.png');
INSERT INTO `value` VALUES(30, 'Aesthetics', 'web_images/value_symbol/adult/_0014_Aesthetics.png');
INSERT INTO `value` VALUES(31, 'Beauty', 'web_images/value_symbol/adult/_0015_Beauty.png');
INSERT INTO `value` VALUES(32, 'Health', 'web_images/value_symbol/adult/_0016_Health.png');
INSERT INTO `value` VALUES(33, 'Competence', 'web_images/value_symbol/adult/_0017_Competence.png');
INSERT INTO `value` VALUES(34, 'Wisdom', 'web_images/value_symbol/adult/_0018_Wisdom.png');
INSERT INTO `value` VALUES(35, 'Dependability', 'web_images/value_symbol/adult/_0019_Dependability.png');
INSERT INTO `value` VALUES(36, 'Systematic', 'web_images/value_symbol/adult/_0020_Systematic.png');
INSERT INTO `value` VALUES(37, 'Family', 'web_images/value_symbol/adult/_0021_Family.png');
INSERT INTO `value` VALUES(38, 'Adventure', 'web_images/value_symbol/adult/_0022_Adventure.png');
INSERT INTO `value` VALUES(39, 'Caring', 'web_images/value_symbol/adult/_0023_Caring.png');
INSERT INTO `value` VALUES(40, 'Challenge', 'web_images/value_symbol/adult/_0024_Challenge.png');
INSERT INTO `value` VALUES(41, 'Adaptability', 'web_images/value_symbol/adult/_0025_Adaptability.png');
INSERT INTO `value` VALUES(42, 'Commitment', 'web_images/value_symbol/adult/_0026_Commitment.png');
INSERT INTO `value` VALUES(43, 'Contribution', 'web_images/value_symbol/adult/_0027_Contribution.png');
INSERT INTO `value` VALUES(44, 'Cooperation', 'web_images/value_symbol/adult/_0028_Cooperation.png');
INSERT INTO `value` VALUES(45, 'Fame', 'web_images/value_symbol/adult/_0029_Fame.png');
INSERT INTO `value` VALUES(46, 'Passion', 'web_images/value_symbol/adult/_0030_Passion.png');
INSERT INTO `value` VALUES(47, 'Honesty', 'web_images/value_symbol/adult/_0031_Honesty.png');
INSERT INTO `value` VALUES(48, 'Morality', 'web_images/value_symbol/adult/_0032_Morality.png');
INSERT INTO `value` VALUES(49, 'Spirituality', 'web_images/value_symbol/adult/_0033_Spirituality.png');
INSERT INTO `value` VALUES(50, 'Compassion', 'web_images/value_symbol/adult/_0034_Compassion.png');
INSERT INTO `value` VALUES(51, 'Openness', 'web_images/value_symbol/adult/_0035_Openness.png');
INSERT INTO `value` VALUES(52, 'Responsibility', 'web_images/value_symbol/adult/_0036_Responsibility.png');
INSERT INTO `value` VALUES(53, 'Faithfulness', 'web_images/value_symbol/adult/_0037_Faithfulness.png');
INSERT INTO `value` VALUES(54, 'Independence', 'web_images/value_symbol/adult/_0038_Independence.png');
INSERT INTO `value` VALUES(55, 'Peace', 'web_images/value_symbol/adult/_0039_Peace.png');
INSERT INTO `value` VALUES(56, 'Generosity', 'web_images/value_symbol/adult/_0040_Generosity.png');
INSERT INTO `value` VALUES(57, 'Perfection', 'web_images/value_symbol/adult/_0041_Perfection.png');
INSERT INTO `value` VALUES(58, 'Farsightedness', 'web_images/value_symbol/adult/_0042_Farsightedness.png');
INSERT INTO `value` VALUES(59, 'Brave', 'web_images/value_symbol/adult/_0043_Brave.png');
INSERT INTO `value` VALUES(60, 'Teamwork', 'web_images/value_symbol/adult/_0044_Teamwork.png');
INSERT INTO `value` VALUES(61, 'Perseverance', 'web_images/value_symbol/adult/_0045_Perseverance.png');
INSERT INTO `value` VALUES(62, 'Service', 'web_images/value_symbol/adult/_0046_Service.png');
INSERT INTO `value` VALUES(63, 'Freedom', 'web_images/value_symbol/adult/_0047_Freedom.png');
INSERT INTO `value` VALUES(64, 'Hardworking', 'web_images/value_symbol/adult/_0048_Hardworking.png');
INSERT INTO `value` VALUES(65, 'Patience', 'web_images/value_symbol/adult/_0049_Patrience.png');
INSERT INTO `value` VALUES(66, 'Energetic', 'web_images/value_symbol/adult/_0050_Energetic.png');
INSERT INTO `value` VALUES(67, 'Resourcefulness', 'web_images/value_symbol/adult/_0051_Resourcefulness.png');
INSERT INTO `value` VALUES(68, 'Gratitude', 'web_images/value_symbol/adult/_0052_Gratitude.png');
INSERT INTO `value` VALUES(69, 'Invulnerability', 'web_images/value_symbol/adult/_0053_Invulnerability.png');

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
