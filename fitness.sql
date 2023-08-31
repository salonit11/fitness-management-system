-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 04:27 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cat`
--

CREATE TABLE `tbl_cat` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(20) DEFAULT NULL,
  `cat_status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cat`
--

INSERT INTO `tbl_cat` (`cat_id`, `cat_name`, `cat_status`) VALUES
(1, 'Yoga', '1'),
(2, 'HIIT', '1'),
(3, 'Cardio', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `c_email` varchar(50) DEFAULT NULL,
  `c_phone` varchar(20) DEFAULT NULL,
  `c_message` varchar(200) DEFAULT NULL,
  `c_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`c_id`, `c_name`, `c_email`, `c_phone`, `c_message`, `c_status`) VALUES
(1, 'user7', 'user7@gmail.com', '9823456791', 'Enquiry to join', '1'),
(2, 'user1', 'user1@gmail.com', '9898989898', 'Request to solve my complain', '1'),
(3, 'User8', 'user8@gmail.com', '9898989777', 'Want to join as a Yoga Teacher', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diet`
--

CREATE TABLE `tbl_diet` (
  `d_id` int(11) NOT NULL,
  `d_type` varchar(20) DEFAULT NULL,
  `d_food` varchar(50) DEFAULT NULL,
  `d_desc` longtext,
  `d_img` varchar(70) NOT NULL,
  `d_status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_diet`
--

INSERT INTO `tbl_diet` (`d_id`, `d_type`, `d_food`, `d_desc`, `d_img`, `d_status`) VALUES
(1, 'Lunch', 'Veggie quesadillas', 'Veggie quesadillas are one of the easiest recipes to make, and they are a good way to get kids to eat more veggies. Eating vegetables is linked to a lower risk of disease and longer life.\r\nYou can use sliced onions and peppers, or any kind of leftover roasted or sauted veggies that you have on hand.', 'food1.jpg', '1'),
(2, 'Breakfast', 'Chocolate cherry chia pudding', 'With only a handful of ingredients, chia pudding is a simple but filling option for breakfast. The best part is that you can put the recipe together at night and wake up to a creamy and delicious pudding the next morning.', 'food2.jpg', '1'),
(3, 'Breakfast', 'Loaded avocado toast', 'Avocado toast can be a nutritious breakfast, as avocados are a good source of healthy fats and very filling.\r\n\r\nStart with a toasted slice of 100% whole grain, rye, or sourdough bread. In a small bowl, smash together half of an avocado with some lime or lemon juice. Spread this on top of the toast.', 'food3.jpg', '1'),
(4, 'Dinner', ' Healthy mac and cheese (with veggies)', 'Mac and cheese is always a crowd-pleaser, and adding veggies to it brings the nutrition up a notch.\r\n\r\nMaking mac and cheese from scratch also means that you can control the ingredients and avoid excess sodium or unnecessary additives.', 'food4.jpg', '1'),
(5, 'Breakfast', 'Overnight oats', 'Overnight oats are an easy breakfast option that requires no prep time in the morning. Plus, they are made with basic ingredients that wont break the bank.\r\nOats are also a good source of beta glucan fiber, which may help lower your cholesterol levels and reduce your risk of heart disease.', 'food5.jpg', '1'),
(6, 'Dinner', 'Italian pasta salad', 'Pasta salad can be a balanced, nutritious meal. Its often made with cooked pasta, non-starchy vegetables, and meat, cheese, or beans.\r\n\r\nPlus, pasta salad is served cold and keeps well in the fridge and lunch boxes.', 'food6.jpg', '0'),
(7, 'Lunch', 'Cauliflower Rice Bowl', 'Replacing regular rice with cauliflower rice is one way to cut back on your carb intake at lunchtime, especially if you eat burrito bowls or other dishes that typically contain rice. Using cauliflower not only lowers the carb content of the meal but also provides a ton of vitamin C. This water-soluble nutrient is important for skin health, wound.', 'Cauliflower rice bowls.jpg.jpg', '1'),
(8, 'Lunch', 'Veggie Wraps', 'A healthy wrap is a great lunch choice, especially if you need something that you can make ahead of time to eat at your desk or in between meetings. Fortunately, it’s really easy to make plant-based wraps. To ensure that they’re filling, delicious, and help you lose weight, choose whole wheat wraps (or use lettuce) and add a protein source, heal.', 'Veggie wraps.jpg.jpg', '1'),
(9, 'Dinner', 'Vegetable Paella', 'This dish takes inspiration from traditional Spanish-style paella but leaves out the meat and fish for extra veggies instead!', 'vegan-paella.jpg.jpg', '1'),
(10, 'Dinner', 'Cauliflower Alfredo', 'The comfort food you''ve been waiting for: This deceptively decadent-looking pasta contains no cream or butter, is packed with fiber (and flavor!), and just happens to be vegan.', 'Cauliflower alfredo.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `f_id` int(11) NOT NULL,
  `feedback` varchar(150) DEFAULT NULL,
  `f_status` varchar(5) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`f_id`, `feedback`, `f_status`, `l_id`) VALUES
(1, 'Nice ', '1', 21),
(2, 'Very Nice Instructions. Thank You Team Fitness', '1', 20),
(3, 'Very Nice Service. Loose weight by following diet and doing regular workout.', '1', 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `l_email` varchar(50) DEFAULT NULL,
  `l_phone` varchar(20) DEFAULT NULL,
  `l_pass` varchar(20) DEFAULT NULL,
  `l_add` varchar(100) DEFAULT NULL,
  `l_img` varchar(20) DEFAULT NULL,
  `l_height` int(5) DEFAULT NULL,
  `l_weight` int(5) DEFAULT NULL,
  `l_status` varchar(10) DEFAULT NULL,
  `l_role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`l_id`, `l_name`, `l_email`, `l_phone`, `l_pass`, `l_add`, `l_img`, `l_height`, `l_weight`, `l_status`, `l_role`) VALUES
(1, 'admin1', 'admin1@gmail.com', '9898989897', 'admin1', ' abad', 'photos/user3.jpg', 150, 44, '1', '1'),
(2, 'admin2', 'admin2@gmail.com', '9898989898', 'Admin123', '   abad', 'photos/user7.png', 143, 43, '1', '1'),
(15, 'admin3', 'admin3@gmail.com', '9898989898', '4BPCK8', ' abad', 'photos/Default.png', 152, 41, '1', '1'),
(20, 'user1', 'user1@gmail.com', '9898989898', 'User@456', '  Ahmedabad', 'photos/user5.png', 151, 39, '1', '2'),
(21, 'user2', 'user2@gmail.com', '9898989898', '5FOYCW', ' abad', 'photos/user8.png', 147, 38, '1', '2'),
(23, 'admin4', 'admin4@gmail.com', '938458435894', '1F2ORM', 'abad', 'photos/Default.png', 153, 49, '1', '1'),
(24, 'user3', 'user3@gmail.com', '9898989898', 'User@123', 'hatkeshwar, Ahmedabad', 'photos/user9.png', 150, 51, '1', '2'),
(27, 'kimti', 'kimtiprajapati2004@gmail.com', '7487838216', '', 'abcefsd', '', 152, 50, '1', '1'),
(30, '', '', '', '2DL185', '', 'photos/Default.png', 155, 48, '1', '1'),
(31, 'Abc', 'abc123@gmail.com', '7456372345', 'Abc12345678', 'abcdef', 'photos/tadasanamodha', 157, 42, '1', '2'),
(32, 'Saloni ', 'abc@mail.com', '96895435678', '70IVWJ', '19, times street, nyc', 'photos/Default.png', 158, 40, '1', '1'),
(34, 'DEF', 'def@gmail.com', '9647834567', 'uSER@345', '20, 17th avenue, NYC', 'photos/easy_pose.gif', 160, 46, '1', '2'),
(35, 'testing', 'testing@gmail.com', '7485967485', 'Test@123', 'ahmedabad', 'photos/user4.jpg', 153, 45, '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_music`
--

CREATE TABLE `tbl_music` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(55) NOT NULL,
  `m_audio` varchar(55) DEFAULT NULL,
  `m_status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_music`
--

INSERT INTO `tbl_music` (`m_id`, `m_name`, `m_audio`, `m_status`) VALUES
(1, 'Smells Like Teen Spirit', 'song2.mp3', '1'),
(2, 'Believer', 'y2mate.com - Believer Workout Remix.mp3', '1'),
(3, 'calm-ocean-wave', 'calm-ocean-waves.mp3', '1'),
(4, 'rain-and-thunderstorm', 'rain-and-thunderstorm.mp3', '1'),
(5, 'watching-the-stars', 'watching-the-stars.mp3', '1'),
(6, 'relax-in-the-forest', 'relax-in-the-forest.mp3', '1'),
(7, 'waterfall-ambient-chill', 'waterfall-ambient-chill.mp3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_otp`
--

CREATE TABLE `tbl_otp` (
  `o_id` int(11) NOT NULL,
  `otp` varchar(10) DEFAULT NULL,
  `o_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `l_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_otp`
--

INSERT INTO `tbl_otp` (`o_id`, `otp`, `o_time`, `l_id`) VALUES
(29, '338115', '2022-02-09 11:34:45', 9),
(31, '598867', '2022-03-09 08:17:17', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_remainder`
--

CREATE TABLE `tbl_remainder` (
  `r_id` int(11) NOT NULL,
  `r_date` date NOT NULL,
  `r_time` time NOT NULL,
  `r_status` varchar(5) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_remainder`
--

INSERT INTO `tbl_remainder` (`r_id`, `r_date`, `r_time`, `r_status`, `l_id`) VALUES
(1, '2022-03-10', '11:20:00', '1', 20),
(2, '2022-03-10', '13:30:00', '1', 20),
(3, '2022-03-10', '16:00:00', '1', 20),
(4, '2022-03-10', '18:30:00', '1', 20),
(5, '2022-03-30', '13:25:00', '1', 31),
(6, '2022-03-30', '14:49:00', '1', 34);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_workout`
--

CREATE TABLE `tbl_workout` (
  `w_id` int(11) NOT NULL,
  `w_name` varchar(55) NOT NULL,
  `w_desc` varchar(500) DEFAULT NULL,
  `w_time` time NOT NULL,
  `w_img` varchar(50) NOT NULL,
  `w_status` varchar(5) NOT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_workout`
--

INSERT INTO `tbl_workout` (`w_id`, `w_name`, `w_desc`, `w_time`, `w_img`, `w_status`, `cat_id`) VALUES
(1, 'Vrikshasana', 'Tree Pose (Vrksansana) is usually the first standing balance pose that is taught to yoga beginners because it''s the simplest. Keep your sense of humor about learning to stand on one leg. It''s harder than it looks at first and will be different every day. Don''t get frustrated if you wobble or even fall over at first.\r\n\r\nIf you are building a sequence around Tree Pose, start with some seated hip openers such as Cobbler''s Pose and Eye of the Needle Pose to prepare you.\r\n', '06:35:00', 'photos/tree_pose.gif', '1', 1),
(2, 'Squats', 'A squat is a strength exercise in which the trainee lowers their hips from a standing position and then stands back up. During the descent of a squat, the hip and knee joints flex while the ankle joint dorsiflexes; conversely the hip and knee joints extend and the ankle joint plantarflexes when standing up.', '07:30:00', 'photos/squats.gif', '1', 3),
(4, 'Tadasana', 'The alignment in Mountain pose draws a straight line from the crown of your head to your heels, with the shoulders and pelvis stacked along the line. Every person''s body is different, so focus on rooting down with your feet and lengthening up with your spine.', '07:00:00', 'photos/tadasana.gif', '1', 1),
(5, 'Virabhadrasana', 'The important thing to remember in Warrior I is that the hips face forward. Think of your hip points as headlights—they should be roughly parallel with the front of your mat. This may require you to take a wider stance.', '07:00:00', 'photos/virabhadrasana.gif', '1', 1),
(6, 'Adho Mukha Swanasana', 'Beginners often lean too far forward in this posture, making it more like a plank. Instead, remember to keep your weight mostly in your legs and reach your hips high, with your heels stretching toward the floor. Bend your knees a little to facilitate the move if you have tight hamstrings. Keep feet parallel.', '07:00:00', 'photos/adhomukhaswanasana.gif', '1', 1),
(7, 'Uttanasana', 'To do Standing Forward Bend, exhale and fold over your legs. If the hamstrings feel a little tight at first, bend the knees so that you can release your spine. Let the head hang heavy. Keep the legs gently bent with feet hip-width apart for better stability (you can straighten the legs, but it is not necessary). You can clasp opposite elbows with opposite hands while swaying gently side to side.', '07:00:00', 'photos/uttanasana.gif', '1', 1),
(9, 'Single Leg Stand', 'This exercise works the abdominal muscles.\r\n\r\nTo perform:\r\nStart with the feet together or no more than 3 inches (in) apart.\r\nBend the knees slightly and lift one leg 3–6 in off the floor.\r\nHold this position for 10–15 seconds and return the foot to the floor.\r\nRepeat for the opposite leg.\r\nTo increase difficulty, a person can lift their leg higher off the floor or jump from one leg to the other more quickly.', '06:00:00', 'photos/Single_Leg_Stand.gif', '1', 3),
(10, 'Arm Circles', 'A person can perform arm circles while sitting or standing, making them ideal for all skill levels.\r\n\r\nTo perform:\r\n\r\nRotate the arms in a circular motion, both clockwise and counterclockwise. The movement may resemble a butterfly or backstroke.\r\nIf a person has limited mobility in their arms, they can extend their arms to their sides and draw small circles.', '06:00:00', 'photos/Arm_Circles.gif', '1', 3),
(11, 'Lateral Shuffles', 'This shuffling motion closely resembles a football or speed-skating warm-up.\r\n\r\nTo perform:\r\n\r\nStart on one end of a room and squat slightly.\r\nShuffle toward the other side of the room, with the feet meeting together before shuffling out and forward again.\r\nPick up speed and increase the squat depth to increase the exercise intensity.', '06:00:00', 'photos/Lateral_Shuffle.gif', '1', 3),
(12, 'Bear Crawl', 'Start on all fours and lift your knees so they’re at a 90-degree angle and hovering an inch off the ground. Keep your back flat, your legs hip-width apart, and your arms shoulder-width apart.\r\nMove your right hand and left foot forward an equal distance while staying low to the ground.\r\nSwitch sides, moving your left hand and right foot. This is one rep.\r\nRepeat the movement, going forward and backward.', '07:00:00', 'photos/Bear_Crawl_001.gif', '1', 2),
(13, 'Diamond Push-ups', 'Start in a high plank with your palms flat, hands shoulder-width apart, shoulders stacked directly above your wrists, legs extended behind you, and your core and glutes engaged.\r\nWalk your hands together so that your thumbs and forefingers form a triangle.\r\nBend your elbows to lower your chest toward the floor. Straighten your arms and push your body back up. This is one rep.\r\nContinue for your work interval.', '07:00:00', 'photos/diamond-push-up.gif', '1', 2),
(14, 'Donkey Kick', 'Start in an all fours position, with your wrists under your shoulders, knees under your hips, and core engaged.\r\nKick your right foot up and toward the ceiling, engaging your glutes and using your hamstrings to pull your foot upward.\r\nKeep your core engaged, so you stay stable and don’t tip to the left; and stop lifting before you arch your low back. Remember: This is a strength move, not a flexibility exercise.\r\nReturn your leg to the starting position. This is one rep.\r\nPerform your reps on on', '07:00:00', 'photos/donkeykick.gif', '1', 2),
(15, 'Forearm Side Plank with Twist', 'Start in a forearm side plank by propping your body up on your left forearm, with your elbow stacked underneath your shoulder and your hand in front of your body. Extend your legs and stack your right foot on top of your left, and then squeeze your abs and glutes to lift your hips off the floor.\r\nPlace your right arm behind your head, with your elbow bent and pointing up toward the ceiling. This is the starting position.\r\nRotate your torso toward the floor, bringing your right elbow to meet your', '07:00:00', 'photos/forearm-side-plank-twist.gif', '1', 2),
(16, 'Marching in place', 'Marching in place can elevate the heart rate, making this exercise a suitable choice for a warm-up or single cardio activity. To increase the intensity, a person can increase the speed they march or raise the knees higher.', '06:00:00', 'photos/marching.gif', '1', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_diet`
--
ALTER TABLE `tbl_diet`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tbl_music`
--
ALTER TABLE `tbl_music`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `tbl_remainder`
--
ALTER TABLE `tbl_remainder`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tbl_workout`
--
ALTER TABLE `tbl_workout`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_diet`
--
ALTER TABLE `tbl_diet`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_music`
--
ALTER TABLE `tbl_music`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tbl_remainder`
--
ALTER TABLE `tbl_remainder`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_workout`
--
ALTER TABLE `tbl_workout`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
