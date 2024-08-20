-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 07:19 AM
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
-- Database: `thcorner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_mst`
--

CREATE TABLE `admin_mst` (
  `a_name` varchar(20) NOT NULL,
  `a_email` varchar(40) NOT NULL,
  `a_pass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_mst`
--

INSERT INTO `admin_mst` (`a_name`, `a_email`, `a_pass`) VALUES
('anita chavda', 'anita123@gmail.com', 'Anita@123'),
('Ketan', 'solankiketan156@gmail.com', 'Ketan@123');

-- --------------------------------------------------------

--
-- Table structure for table `like_mst`
--

CREATE TABLE `like_mst` (
  `like_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `quote_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `like_mst`
--

INSERT INTO `like_mst` (`like_id`, `user_id`, `quote_id`) VALUES
(154, 16, 46);

-- --------------------------------------------------------

--
-- Table structure for table `quotes_mst`
--

CREATE TABLE `quotes_mst` (
  `quote_id` int(11) NOT NULL,
  `quote` varchar(150) NOT NULL,
  `author` varchar(30) NOT NULL,
  `cate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quotes_mst`
--

INSERT INTO `quotes_mst` (`quote_id`, `quote`, `author`, `cate`) VALUES
(1, 'Success usually comes to those who are too busy to be looking for it.', 'Henry David Thoreau', 'motivation'),
(2, 'Dream big. Start small. But most of all, start.', 'Simon Sinek', 'motivation'),
(3, 'Your life does not get better by chance, it gets better by change.', 'Jim Rohn', 'motivation'),
(4, 'What lies behind us and what lies before us are tiny matters compared to what lies within us.', 'Ralph Waldo Emerson', 'motivation'),
(5, 'Success is stumbling from failure to failure with no loss of enthusiasm.', 'Winston S. Churchill', 'motivation'),
(6, 'Don\'t be afraid to give up the good to go for the great.', 'John D. Rockefeller', 'motivation'),
(7, 'Your attitude, not your aptitude, will determine your altitude.', 'Zig Ziglar', 'motivation'),
(8, 'It\'s not about how hard you hit. It\'s about how hard you can get hit and keep moving forward.', 'Rocky Balboa', 'motivation'),
(9, 'Every morning brings new potential, but only if you rise with determination.', 'Zig Ziglar', 'motivation'),
(10, 'The only limit to our realization of tomorrow will be our doubts of today.', 'Franklin D. Roosevelt', 'motivation'),
(11, 'If you are not willing to risk the usual, you will have to settle for the ordinary.', 'Jim Rohn', 'motivation'),
(12, 'You are never too old to set another goal or to dream a new dream.', 'C.S. Lewis', 'motivation'),
(13, 'Success is walking from failure to failure with no loss of enthusiasm.', 'Winston Churchill', 'motivation'),
(14, 'Don\'t let yesterday take up too much of today.', 'Will Rogers', 'motivation'),
(15, 'The only place where success comes before work is in the dictionary.', 'Vidal Sassoon', 'motivation'),
(16, 'A year from now you may wish you had started today.', 'Karen Lamb', 'motivation'),
(17, 'Success is not final, failure is not fatal: It is the courage to continue that counts.', 'Winston Churchill', 'motivation'),
(18, 'Don\'t watch the clock; do what it does. Keep going.', 'Sam Levenson', 'motivation'),
(19, 'The only way to do great work is to love what you do.', 'Steve Jobs', 'motivation'),
(20, 'Success is not in what you have, but who you are.', 'Bo Bennett', 'motivation'),
(21, 'Don\'t be pushed around by the fears in your mind. Be led by the dreams in your heart.', 'Roy T. Bennett', 'motivation'),
(22, 'It always seems impossible until it is done.', 'Nelson Mandela', 'motivation'),
(23, 'Believe you can and you\'re halfway there.', 'Theodore Roosevelt', 'motivation'),
(24, 'It always seems impossible until it is done.', 'Nelson Mandela', 'motivation'),
(25, 'Don\'t watch the clock; do what it does. Keep going.', 'Sam Levenson', 'motivation'),
(26, 'Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.', 'Christian D. Larson', 'motivation'),
(27, 'Success is not final, failure is not fatal: It is the courage to continue that counts.', 'Winston Churchill', 'motivation'),
(28, 'The only way to do great work is to love what you do.', 'Steve Jobs', 'motivation'),
(29, 'Your time is limited, don\'t waste it living someone else\'s life.', 'Steve Jobs', 'motivation'),
(30, 'The future belongs to those who believe in the beauty of their dreams.', 'Eleanor Roosevelt', 'motivation'),
(31, 'It\'s not whether you get knocked down, it\'s whether you get up.', 'Vince Lombardi', 'motivation'),
(32, 'Strive not to be a success, but rather to be of value.', 'Albert Einstein', 'motivation'),
(33, 'The only limit to our realization of tomorrow will be our doubts of today.', 'Franklin D. Roosevelt', 'motivation'),
(34, 'Do not wait to strike till the iron is hot, but make it hot by striking.', 'William Butler Yeats', 'motivation'),
(35, 'It is not the strongest of the species that survive, nor the most intelligent, but the one most responsive to change.', 'Charles Darwin', 'motivation'),
(36, 'Start where you are. Use what you have. Do what you can.', 'Arthur Ashe', 'motivation'),
(37, 'Believe in yourself, take on your challenges, dig deep within yourself to conquer fears. Never let anyone bring you down. You got this.', 'Chantal Sutherland', 'motivation'),
(38, 'The only way to achieve the impossible is to believe it is possible.', 'Charles Kingsleigh', 'motivation'),
(39, 'Don\'t be pushed around by the fears in your mind. Be led by the dreams in your heart.', 'Roy T. Bennett', 'motivation'),
(40, 'The purpose of our lives is to be happy.', 'Dalai Lama XIV', 'motivation'),
(41, 'You are never too old to set another goal or to dream a new dream.', 'C.S. Lewis', 'motivation'),
(42, 'Art is the most beautiful of all lies.', 'Claude Debussy', 'art'),
(43, 'Every artist was first an amateur.', 'Ralph Waldo Emerson', 'art'),
(44, 'Art is the lie that enables us to realize the truth.', 'Pablo Picasso', 'art'),
(45, 'The best artist has no conception that a marble block does not contain within itself.', 'Michelangelo', 'art'),
(46, 'Art is the only way to run away without leaving home.', 'Twyla Tharp', 'art'),
(47, 'Art is not freedom from discipline, but disciplined freedom.', 'John F. Kennedy', 'art'),
(48, 'Every artist dips his brush in his own soul, and paints his own nature into his pictures.', 'Henry Ward Beecher', 'art'),
(49, 'The more I paint, the more I like everything.', 'Pierre-Auguste Renoir', 'art'),
(50, 'Art is the most intense mode of individualism that the world has known.', 'Oscar Wilde', 'art'),
(51, 'Art enables us to find ourselves and lose ourselves at the same time.', 'Thomas Merton', 'art'),
(52, 'The painter tries to master color, while the musician tries to master time.', 'Robert Guillaume', 'art'),
(53, 'Art is the lie that enables us to realize the truth.', 'Pablo Picasso', 'art'),
(54, 'Art is not what you see, but what you make others see.', 'Edgar Degas', 'art'),
(55, 'Art is the most intense mode of individualism that the world has known.', 'Oscar Wilde', 'art'),
(56, 'Every artist dips his brush in his own soul, and paints his own nature into his pictures.', 'Henry Ward Beecher', 'art'),
(57, 'The best artist has no conception that a marble block does not contain within itself.', 'Michelangelo', 'art'),
(58, 'Art is the only way to run away without leaving home.', 'Twyla Tharp', 'art'),
(59, 'The painter tries to master color, while the musician tries to master time.', 'Robert Guillaume', 'art'),
(60, 'Art enables us to find ourselves and lose ourselves at the same time.', 'Thomas Merton', 'art'),
(61, 'Every artist was first an amateur.', 'Ralph Waldo Emerson', 'art'),
(62, 'Art is the most beautiful of all lies.', 'Claude Debussy', 'art'),
(63, 'Art is not what you see, but what you make others see.', 'Edgar Degas', 'art'),
(64, 'Art is the lie that enables us to realize the truth.', 'Pablo Picasso', 'art'),
(65, 'The best artist has no conception that a marble block does not contain within itself.', 'Michelangelo', 'art'),
(66, 'Art is the only way to run away without leaving home.', 'Twyla Tharp', 'art'),
(67, 'Every artist dips his brush in his own soul, and paints his own nature into his pictures.', 'Henry Ward Beecher', 'art'),
(68, 'The more I paint, the more I like everything.', 'Pierre-Auguste Renoir', 'art'),
(69, 'Art is the most intense mode of individualism that the world has known.', 'Oscar Wilde', 'art'),
(70, 'Art enables us to find ourselves and lose ourselves at the same time.', 'Thomas Merton', 'art'),
(71, 'The painter tries to master color, while the musician tries to master time.', 'Robert Guillaume', 'art'),
(72, 'Art is the lie that enables us to realize the truth.', 'Pablo Picasso', 'art'),
(73, 'Art is not what you see, but what you make others see.', 'Edgar Degas', 'art'),
(74, 'Art is the most intense mode of individualism that the world has known.', 'Oscar Wilde', 'art'),
(75, 'Every artist dips his brush in his own soul, and paints his own nature into his pictures.', 'Henry Ward Beecher', 'art'),
(76, 'The best artist has no conception that a marble block does not contain within itself.', 'Michelangelo', 'art'),
(77, 'Art is the only way to run away without leaving home.', 'Twyla Tharp', 'art'),
(78, 'The more I paint, the more I like everything.', 'Pierre-Auguste Renoir', 'art'),
(79, 'Art is the most beautiful of all lies.', 'Claude Debussy', 'art'),
(80, 'Art is not what you see, but what you make others see.', 'Edgar Degas', 'art'),
(81, 'Art is the lie that enables us to realize the truth.', 'Pablo Picasso', 'art'),
(82, 'The best artist has no conception that a marble block does not contain within itself.', 'Michelangelo', 'art'),
(83, 'Art is the only way to run away without leaving home.', 'Twyla Tharp', 'art'),
(84, 'Every artist dips his brush in his own soul, and paints his own nature into his pictures.', 'Henry Ward Beecher', 'art'),
(85, 'The more I paint, the more I like everything.', 'Pierre-Auguste Renoir', 'art'),
(86, 'Do not feel guilty of seeking comfort.', 'jacqueline', 'Wisdom'),
(87, 'Working hard on what you love, is a very important thing', 'jacqueline', 'Wisdom'),
(88, 'There is more canvas in the world', 'jacqueline', 'art'),
(89, 'Irony of pain is that, you want to be comforted by the one who hurt you.', 'unknown', 'special'),
(90, 'Love is composed of a single soul inhabiting two bodies.', 'Aristotle', 'love'),
(91, 'The greatest happiness of life is the conviction that we are loved; loved for ourselves, or rather, loved in spite of ourselves.', 'Victor Hugo', 'love'),
(92, 'Love is not just looking at each other, it\'s looking in the same direction.', 'Antoine de Saint-Exupéry', 'love'),
(93, 'In dreams and in love, there are no impossibilities.', 'Janos Arnay', 'love'),
(94, 'Love is an irresistible desire to be irresistibly desired.', 'Robert Frost', 'love'),
(95, 'The best thing to hold onto in life is each other.', 'Audrey Hepburn', 'love'),
(96, 'Love is an act of endless forgiveness, a tender look which becomes a habit.', 'Peter Ustinov', 'love'),
(97, 'Love is when the other person\'s happiness is more important than your own.', 'H. Jackson Brown, Jr.', 'love'),
(98, 'Being deeply loved by someone gives you strength, while loving someone deeply gives you courage.', 'Lao Tzu', 'love'),
(99, 'The best love is the kind that awakens the soul and makes us reach for more, that plants a fire in our hearts and brings peace to our minds.', 'Nicholas Sparks', 'love'),
(100, 'Love is a game that two can play and both win.', 'Eva Gabor', 'love'),
(101, 'Love is like the wind, you can\'t see it but you can feel it.', 'Nicholas Sparks', 'love'),
(102, 'Love is when you meet someone who tells you something new about yourself.', 'Andre Breton', 'love'),
(103, 'To love is nothing. To be loved is something. But to love and be loved, that’s everything.', 'T. Tolis', 'love'),
(104, 'Love is not only something you feel, it is something you do.', 'David Wilkerson', 'love'),
(105, 'Love cures people - both the ones who give it and the ones who receive it.', 'Karl A. Menninger', 'love'),
(106, 'Love is like the wind, you can\'t control it but you can feel it.', 'Nicholas Sparks', 'love'),
(107, 'Love is an endless mystery, for it has nothing else to explain it.', 'Rabindranath Tagore', 'love'),
(108, 'Love is a better teacher than duty.', 'Albert Einstein', 'love'),
(109, 'True love stories never have endings.', 'Richard Bach', 'love'),
(110, 'Love is like the sea. It\'s calm and reassuring. It rages in a storm.', 'Diane Ackerman', 'love'),
(111, 'The only thing we never get enough of is love; and the only thing we never give enough of is love.', 'Henry Miller', 'love'),
(112, 'Love is not about possession. Love is about appreciation.', 'Osho', 'love'),
(113, 'Love is of all passions the strongest, for it attacks simultaneously the head, the heart, and the senses.', 'Lao Tzu', 'love'),
(114, 'Love is a friendship set to music.', 'Joseph Campbell', 'love'),
(115, 'Love is the beauty of the soul.', 'Saint Augustine', 'love'),
(116, 'The art of love is largely the art of persistence.', 'Albert Ellis', 'love'),
(117, 'Love is the silent saying and saying of a single name.', 'Mignon McLaughlin', 'love'),
(118, 'Love is the flower you\'ve got to let grow.', 'John Lennon', 'love'),
(119, 'Love is the magician that pulls man out of his own hat.', 'Ben Hecht', 'love'),
(120, 'Love is the emblem of eternity; it confounds all notion of time; effaces all memory of a beginning, all fear of an end.', 'Madame de Stael', 'love'),
(121, 'Love is a fire. But whether it is going to warm your heart or burn down your house, you can never tell.', 'Joan Crawford', 'love'),
(122, 'Love is like a virus. It can happen to anybody at any time.', 'Maya Angelou', 'love'),
(123, 'Love is a game that two can play and both win.', 'Eva Gabor', 'love'),
(124, 'Love is a friendship that has caught fire.', 'Ann Landers', 'love'),
(125, 'Love is the greatest refreshment in life.', 'Pablo Picasso', 'love'),
(126, 'Love is a canvas furnished by nature and embroidered by imagination.', 'Voltaire', 'love'),
(127, 'Love is like an hourglass, with the heart filling up as the brain empties.', 'Jules Renard', 'love'),
(128, 'Love is when you sit beside someone doing nothing yet you feel perfectly happy.', 'Anon', 'love'),
(129, 'Love is a fruit in season at all times, and within reach of every hand.', 'Mother Teresa', 'love'),
(130, 'Love is the enchanted dawn of every heart.', 'Lamartine', 'love'),
(131, 'Love is the poetry of the senses.', 'Honore de Balzac', 'love'),
(132, 'Love is an endless act of forgiveness. Forgiveness is the only real antidote to the poison of resentment.', 'Rachel Naomi Remen', 'love'),
(133, 'The only true wisdom is in knowing you know nothing.', 'Socrates', 'wisdom'),
(134, 'The greatest enemy of knowledge is not ignorance, it is the illusion of knowledge.', 'Stephen Hawking', 'wisdom'),
(135, 'The only way to do great work is to love what you do.', 'Steve Jobs', 'wisdom'),
(136, 'Wisdom is the reward you get for a lifetime of listening when you\'d have preferred to talk.', 'Doug Larson', 'wisdom'),
(137, 'The journey of a thousand miles begins with one step.', 'Lao Tzu', 'wisdom'),
(138, 'The only thing we have to fear is fear itself.', 'Franklin D. Roosevelt', 'wisdom'),
(139, 'It is the mark of an educated mind to be able to entertain a thought without accepting it.', 'Aristotle', 'wisdom'),
(140, 'Knowing yourself is the beginning of all wisdom.', 'Aristotle', 'wisdom'),
(141, 'The unexamined life is not worth living.', 'Socrates', 'wisdom'),
(142, 'Success is not final, failure is not fatal: It is the courage to continue that counts.', 'Winston S. Churchill', 'wisdom'),
(143, 'In the end, it\'s not the years in your life that count. It\'s the life in your years.', 'Abraham Lincoln', 'wisdom'),
(144, 'Do not go where the path may lead, go instead where there is no path and leave a trail.', 'Ralph Waldo Emerson', 'wisdom'),
(145, 'The only source of knowledge is experience.', 'Albert Einstein', 'wisdom'),
(146, 'Life is not measured by the number of breaths we take, but by the moments that take our breath away.', 'Maya Angelou', 'wisdom'),
(147, 'Life is 10% what happens to us and 90% how we react to it.', 'Charles R. Swindoll', 'wisdom'),
(148, 'The only thing necessary for the triumph of evil is for good men to do nothing.', 'Edmund Burke', 'wisdom'),
(149, 'It does not matter how slowly you go as long as you do not stop.', 'Confucius', 'wisdom'),
(150, 'Our greatest glory is not in never falling, but in rising every time we fall.', 'Confucius', 'wisdom'),
(151, 'The only way to make sense out of change is to plunge into it, move with it, and join the dance.', 'Alan Watts', 'wisdom'),
(152, 'The mind is everything. What you think you become.', 'Buddha', 'wisdom'),
(153, 'Yesterday is history, tomorrow is a mystery, today is a gift of God, which is why we call it the present.', 'Bil Keane', 'wisdom'),
(154, 'The only limit to our realization of tomorrow will be our doubts of today.', 'Franklin D. Roosevelt', 'wisdom'),
(155, 'To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment.', 'Ralph Waldo Emerson', 'wisdom'),
(156, 'You must be the change you wish to see in the world.', 'Mahatma Gandhi', 'wisdom'),
(157, 'Change is the law of life. And those who look only to the past or present are certain to miss the future.', 'John F. Kennedy', 'wisdom'),
(158, 'The only thing we know about the future is that it will be different.', 'Peter Drucker', 'wisdom'),
(159, 'If you want to lift yourself up, lift up someone else.', 'Booker T. Washington', 'wisdom'),
(160, 'Happiness is not something ready made. It comes from your own actions.', 'Dalai Lama', 'wisdom'),
(161, 'The greatest glory in living lies not in never falling, but in rising every time we fall.', 'Nelson Mandela', 'wisdom'),
(162, 'Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful.', 'Albert Schweitzer', 'wisdom'),
(163, 'The only thing worse than being blind is having sight but no vision.', 'Helen Keller', 'wisdom'),
(164, 'The best way to predict the future is to create it.', 'Peter Drucker', 'wisdom'),
(165, 'It is never too late to be what you might have been.', 'George Eliot', 'wisdom'),
(166, 'Darkness cannot drive out darkness; only light can do that. Hate cannot drive out hate; only love can do that.', 'Martin Luther King, Jr.', 'wisdom'),
(167, 'In the end, it\'s not the years in your life that count. It\'s the life in your years.', 'Abraham Lincoln', 'wisdom'),
(168, 'The only true wisdom is in knowing you know nothing.', 'Socrates', 'wisdom'),
(169, 'The greatest enemy of knowledge is not ignorance, it is the illusion of knowledge.', 'Stephen Hawking', 'wisdom'),
(170, 'The only way to do great work is to love what you do.', 'Steve Jobs', 'wisdom'),
(171, 'Wisdom is the reward you get for a lifetime of listening when you\'d have preferred to talk.', 'Doug Larson', 'wisdom'),
(172, 'The journey of a thousand miles begins with one step.', 'Lao Tzu', 'wisdom'),
(173, 'The only thing we have to fear is fear itself.', 'Franklin D. Roosevelt', 'wisdom'),
(174, 'It is the mark of an educated mind to be able to entertain a thought without accepting it.', 'Aristotle', 'wisdom'),
(175, 'Knowing yourself is the beginning of all wisdom.', 'Aristotle', 'wisdom'),
(176, 'The unexamined life is not worth living.', 'Socrates', 'wisdom'),
(177, 'Success is not final, failure is not fatal: It is the courage to continue that counts.', 'Winston S. Churchill', 'wisdom'),
(178, 'In the end, it\'s not the years in your life that count. It\'s the life in your years.', 'Abraham Lincoln', 'wisdom'),
(179, 'Do not go where the path may lead, go instead where there is no path and leave a trail.', 'Ralph Waldo Emerson', 'wisdom'),
(180, 'The only source of knowledge is experience.', 'Albert Einstein', 'wisdom'),
(181, 'Life is not measured by the number of breaths we take, but by the moments that take our breath away.', 'Maya Angelou', 'wisdom'),
(182, 'Friendship is the comfort of knowing that even when you feel alone, you aren\'t.', 'Unknown', 'friendship'),
(183, 'A true friend never gets in your way unless you happen to be going down.', 'Arnold H. Glasgow', 'friendship'),
(184, 'Friendship is the only cement that will ever hold the world together.', 'Woodrow Wilson', 'friendship'),
(185, 'Friendship is always a sweet responsibility, never an opportunity.', 'Khalil Gibran', 'friendship'),
(186, 'A friend is someone who believes in you when you have ceased to believe in yourself.', 'Unknown', 'friendship'),
(187, 'Friendship is the only cement that will ever hold the world together.', 'Woodrow Wilson', 'friendship'),
(188, 'Friendship is the shadow of the evening, which increases with the setting sun of life.', 'Jean de La Fontaine', 'friendship'),
(189, 'Friendship is a wildly underrated medication.', 'Anna Deavere Smith', 'friendship'),
(190, 'True friendship comes when the silence between two people is comfortable.', 'David Tyson', 'friendship'),
(191, 'A friend is someone who gives you total freedom to be yourself.', 'Jim Morrison', 'friendship'),
(192, 'Friendship marks a life even more deeply than love. Love risks degenerating into obsession, friendship is never anything but sharing.', 'Elie Wiesel', 'friendship'),
(193, 'Friendship is a single soul dwelling in two bodies.', 'Aristotle', 'friendship'),
(194, 'Friendship is a wildly underrated medication.', 'Anna Deavere Smith', 'friendship'),
(195, 'Friendship isn\'t about who you\'ve known the longest. It\'s about who walked into your life, said \'I\'m here for you\', and proved it.', 'Unknown', 'friendship'),
(196, 'True friendship multiplies the good in life and divides its evils. Strive to have friends, for life without friends is like life on a desert island...', 'Baltasar Gracian', 'friendship'),
(197, 'Friendship is the only ship big enough to carry all our sorrows.', 'Unknown', 'friendship'),
(198, 'Friendship is born at that moment when one person says to another, \'What! You too? I thought I was the only one.\'', 'C.S. Lewis', 'friendship'),
(199, 'A friend is someone who knows all about you and still loves you.', 'Elbert Hubbard', 'friendship'),
(200, 'Friendship is the only cement that will ever hold the world together.', 'Woodrow Wilson', 'friendship'),
(201, 'True friendship comes when the silence between two people is comfortable.', 'David Tyson', 'friendship'),
(202, 'Friendship marks a life even more deeply than love. Love risks degenerating into obsession, friendship is never anything but sharing.', 'Elie Wiesel', 'friendship'),
(203, 'A real friend is one who walks in when the rest of the world walks out.', 'Walter Winchell', 'friendship'),
(204, 'Friendship is the golden thread that ties the heart of all the world.', 'John Evelyn', 'friendship'),
(205, 'Friendship is the shadow of the evening, which increases with the setting sun of life.', 'Jean de La Fontaine', 'friendship'),
(206, 'Friendship is a wildly underrated medication.', 'Anna Deavere Smith', 'friendship'),
(207, 'True friendship comes when the silence between two people is comfortable.', 'David Tyson', 'friendship'),
(208, 'A friend is someone who gives you total freedom to be yourself.', 'Jim Morrison', 'friendship'),
(209, 'A true friend never gets in your way unless you happen to be going down.', 'Arnold H. Glasgow', 'friendship'),
(210, 'Friendship is the only cement that will ever hold the world together.', 'Woodrow Wilson', 'friendship'),
(211, 'Friendship is always a sweet responsibility, never an opportunity.', 'Khalil Gibran', 'friendship'),
(212, 'A friend is someone who believes in you when you have ceased to believe in yourself.', 'Unknown', 'friendship'),
(213, 'Friendship is the only cement that will ever hold the world together.', 'Woodrow Wilson', 'friendship'),
(214, 'Friendship is the shadow of the evening, which increases with the setting sun of life.', 'Jean de La Fontaine', 'friendship'),
(215, 'Friendship is a wildly underrated medication.', 'Anna Deavere Smith', 'friendship'),
(216, 'True friendship comes when the silence between two people is comfortable.', 'David Tyson', 'friendship'),
(217, 'A friend is someone who gives you total freedom to be yourself.', 'Jim Morrison', 'friendship'),
(218, 'Friendship marks a life even more deeply than love. Love risks degenerating into obsession, friendship is never anything but sharing.', 'Elie Wiesel', 'friendship'),
(219, 'Friendship is a single soul dwelling in two bodies.', 'Aristotle', 'friendship'),
(220, 'Friendship is a wildly underrated medication.', 'Anna Deavere Smith', 'friendship'),
(221, 'Friendship isn\'t about who you\'ve known the longest. It\'s about who walked into your life, said \'I\'m here for you\', and proved it.', 'Unknown', 'friendship'),
(222, 'True friendship multiplies the good in life and divides its evils. Strive to have friends, for life without friends is like life on a desert island...', 'Baltasar Gracian', 'friendship'),
(223, 'Friendship is the only ship big enough to carry all our sorrows.', 'Unknown', 'friendship'),
(224, 'Friendship is born at that moment when one person says to another, \'What! You too? I thought I was the only one.\'', 'C.S. Lewis', 'friendship'),
(225, 'A friend is someone who knows all about you and still loves you.', 'Elbert Hubbard', 'friendship'),
(226, 'Friendship is the only cement that will ever hold the world together.', 'Woodrow Wilson', 'friendship'),
(227, 'True friendship comes when the silence between two people is comfortable.', 'David Tyson', 'friendship'),
(228, 'Friendship marks a life even more deeply than love. Love risks degenerating into obsession, friendship is never anything but sharing.', 'Elie Wiesel', 'friendship'),
(229, 'A real friend is one who walks in when the rest of the world walks out.', 'Walter Winchell', 'friendship'),
(230, 'Friendship is the golden thread that ties the heart of all the world.', 'John Evelyn', 'friendship'),
(231, 'Friendship is the shadow of the evening, which increases with the setting sun of life.', 'Jean de La Fontaine', 'friendship'),
(232, 'Friendship is a wildly underrated medication.', 'Anna Deavere Smith', 'friendship'),
(233, 'True friendship comes when the silence between two people is comfortable.', 'David Tyson', 'friendship'),
(234, 'A friend is someone who gives you total freedom to be yourself.', 'Jim Morrison', 'friendship'),
(235, 'A true friend never gets in your way unless you happen to be going down.', 'Arnold H. Glasgow', 'friendship'),
(236, 'Friendship is the only cement that will ever hold the world together.', 'Woodrow Wilson', 'friendship'),
(237, 'Friendship is always a sweet responsibility, never an opportunity.', 'Khalil Gibran', 'friendship'),
(238, 'A friend is someone who believes in you when you have ceased to believe in yourself.', 'Unknown', 'friendship'),
(239, 'Friendship is the only cement that will ever hold the world together.', 'Woodrow Wilson', 'friendship'),
(240, 'Friendship is the shadow of the evening, which increases with the setting sun of life.', 'Jean de La Fontaine', 'friendship'),
(241, 'Friendship is a wildly underrated medication.', 'Anna Deavere Smith', 'friendship'),
(242, 'True friendship comes when the silence between two people is comfortable.', 'David Tyson', 'friendship'),
(243, 'A friend is someone who gives you total freedom to be yourself.', 'Jim Morrison', 'friendship'),
(244, 'Friendship marks a life even more deeply than love. Love risks degenerating into obsession, friendship is never anything but sharing.', 'Elie Wiesel', 'friendship'),
(245, 'Friendship is a single soul dwelling in two bodies.', 'Aristotle', 'friendship'),
(246, 'Believe you can and you\'re halfway there.', 'Theodore Roosevelt', 'positivity'),
(247, 'In every day, there are 1,440 minutes. That means we have 1,440 daily opportunities to make a positive impact.', 'Les Brown', 'positivity'),
(248, 'Optimism is the faith that leads to achievement. Nothing can be done without hope and confidence.', 'Helen Keller', 'positivity'),
(249, 'Positive thinking will let you do everything better than negative thinking will.', 'Zig Ziglar', 'positivity'),
(250, 'The only limit to our realization of tomorrow will be our doubts of today.', 'Franklin D. Roosevelt', 'positivity'),
(251, 'You are never too old to set another goal or to dream a new dream.', 'C.S. Lewis', 'positivity'),
(252, 'The way to get started is to quit talking and begin doing.', 'Walt Disney', 'positivity'),
(253, 'Positive thinking is more than just a tagline. It changes the way we behave. And I firmly believe that when I am positive, it not only makes me better', 'Harvey Mackay', 'positivity'),
(254, 'Positive anything is better than negative nothing.', 'Elbert Hubbard', 'positivity'),
(255, 'Keep your face always toward the sunshine - and shadows will fall behind you.', 'Walt Whitman', 'positivity'),
(256, 'Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful.', 'Albert Schweitzer', 'positivity'),
(257, 'Happiness is not something you postpone for the future; it is something you design for the present.', 'Jim Rohn', 'positivity'),
(258, 'Once you replace negative thoughts with positive ones, you\'ll start having positive results.', 'Willie Nelson', 'positivity'),
(259, 'The only way to do great work is to love what you do.', 'Steve Jobs', 'positivity'),
(260, 'Positive thinking is a valuable tool that can help you overcome obstacles, deal with pain, and reach new goals.', 'Amy Morin', 'positivity'),
(261, 'No matter what you\'re going through, there\'s a light at the end of the tunnel.', 'Demi Lovato', 'positivity'),
(262, 'I always like to look on the optimistic side of life, but I am realistic enough to know that life is a complex matter.', 'Walt Disney', 'positivity'),
(263, 'Positive thoughts breed positive results.', 'Unknown', 'positivity'),
(264, 'The pessimist sees difficulty in every opportunity. The optimist sees opportunity in every difficulty.', 'Winston Churchill', 'positivity'),
(265, 'Start each day with a positive thought and a grateful heart.', 'Roy T. Bennett', 'positivity'),
(266, 'Believe you can and you\'re halfway there.', 'Theodore Roosevelt', 'positivity'),
(267, 'In every day, there are 1,440 minutes. That means we have 1,440 daily opportunities to make a positive impact.', 'Les Brown', 'positivity'),
(268, 'Optimism is the faith that leads to achievement. Nothing can be done without hope and confidence.', 'Helen Keller', 'positivity'),
(269, 'Positive thinking will let you do everything better than negative thinking will.', 'Zig Ziglar', 'positivity'),
(270, 'The only limit to our realization of tomorrow will be our doubts of today.', 'Franklin D. Roosevelt', 'positivity'),
(271, 'You are never too old to set another goal or to dream a new dream.', 'C.S. Lewis', 'positivity'),
(272, 'The way to get started is to quit talking and begin doing.', 'Walt Disney', 'positivity'),
(273, 'Positive thinking is more than just a tagline. It changes the way we behave. And I firmly believe that when I am positive, it not only makes me better', 'Harvey Mackay', 'positivity'),
(274, 'Positive anything is better than negative nothing.', 'Elbert Hubbard', 'positivity'),
(275, 'Keep your face always toward the sunshine - and shadows will fall behind you.', 'Walt Whitman', 'positivity'),
(276, 'Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful.', 'Albert Schweitzer', 'positivity'),
(277, 'Happiness is not something you postpone for the future; it is something you design for the present.', 'Jim Rohn', 'positivity'),
(278, 'Once you replace negative thoughts with positive ones, you\'ll start having positive results.', 'Willie Nelson', 'positivity'),
(279, 'The only way to do great work is to love what you do.', 'Steve Jobs', 'positivity'),
(280, 'Positive thinking is a valuable tool that can help you overcome obstacles, deal with pain, and reach new goals.', 'Amy Morin', 'positivity'),
(281, 'No matter what you\'re going through, there\'s a light at the end of the tunnel.', 'Demi Lovato', 'positivity'),
(282, 'I always like to look on the optimistic side of life, but I am realistic enough to know that life is a complex matter.', 'Walt Disney', 'positivity'),
(283, 'Positive thoughts breed positive results.', 'Unknown', 'positivity'),
(284, 'The pessimist sees difficulty in every opportunity. The optimist sees opportunity in every difficulty.', 'Winston Churchill', 'positivity'),
(285, 'Start each day with a positive thought and a grateful heart.', 'Roy T. Bennett', 'positivity'),
(286, 'Your positive action combined with positive thinking results in success.', 'Shiv Khera', 'positivity'),
(287, 'Positive thinking is powerful thinking. If you want happiness, fulfillment, success and inner peace, start thinking you have the power to achieve thos', 'Germany Kent', 'positivity'),
(288, 'Positive anything is better than negative nothing.', 'Elbert Hubbard', 'positivity'),
(289, 'The only limit to our realization of tomorrow will be our doubts of today.', 'Franklin D. Roosevelt', 'positivity'),
(290, 'Start each day with a positive thought and a grateful heart.', 'Roy T. Bennett', 'positivity'),
(291, 'Your positive action combined with positive thinking results in success.', 'Shiv Khera', 'positivity'),
(292, 'Positive thinking is powerful thinking. If you want happiness, fulfillment, success and inner peace, start thinking you have the power to achieve thos', 'Germany Kent', 'positivity'),
(293, 'Positive anything is better than negative nothing.', 'Elbert Hubbard', 'positivity'),
(294, 'The only limit to our realization of tomorrow will be our doubts of today.', 'Franklin D. Roosevelt', 'positivity'),
(295, 'Start each day with a positive thought and a grateful heart.', 'Roy T. Bennett', 'positivity'),
(296, 'Your positive action combined with positive thinking results in success.', 'Shiv Khera', 'positivity'),
(297, 'Positive thinking is powerful thinking. If you want happiness, fulfillment, success and inner peace, start thinking you have the power to achieve thos', 'Germany Kent', 'positivity'),
(298, 'Positive anything is better than negative nothing.', 'Elbert Hubbard', 'positivity'),
(299, 'The only limit to our realization of tomorrow will be our doubts of today.', 'Franklin D. Roosevelt', 'positivity'),
(300, 'Start each day with a positive thought and a grateful heart.', 'Roy T. Bennett', 'positivity'),
(301, 'Your positive action combined with positive thinking results in success.', 'Shiv Khera', 'positivity'),
(302, 'Positive thinking is powerful thinking. If you want happiness, fulfillment, success and inner peace, start thinking you have the power to achieve thos', 'Germany Kent', 'positivity'),
(303, 'Positive anything is better than negative nothing.', 'Elbert Hubbard', 'positivity'),
(304, 'The only limit to our realization of tomorrow will be our doubts of today.', 'Franklin D. Roosevelt', 'positivity'),
(305, 'Start each day with a positive thought and a grateful heart.', 'Roy T. Bennett', 'positivity'),
(306, 'Your positive action combined with positive thinking results in success.', 'Shiv Khera', 'positivity'),
(307, 'Positive thinking is powerful thinking. If you want happiness, fulfillment, success and inner peace, start thinking you have the power to achieve thos', 'Germany Kent', 'positivity'),
(308, 'In three words I can sum up everything I’ve learned about life: it goes on.', 'Robert Frost', 'life'),
(309, 'Life is what happens when you\'re busy making other plans.', 'John Lennon', 'life'),
(310, 'The only way to do great work is to love what you do.', 'Steve Jobs', 'life'),
(311, 'Not how long, but how well you have lived is the main thing.', 'Seneca', 'life'),
(312, 'The purpose of our lives is to be happy.', 'Dalai Lama', 'life'),
(313, 'Life is 10% what happens to us and 90% how we react to it.', 'Charles R. Swindoll', 'life'),
(314, 'Life is not a problem to be solved, but a reality to be experienced.', 'Søren Kierkegaard', 'life'),
(315, 'Life is really simple, but we insist on making it complicated.', 'Confucius', 'life'),
(316, 'The biggest adventure you can take is to live the life of your dreams.', 'Oprah Winfrey', 'life'),
(317, 'Life is 10% what happens to us and 90% how we react to it.', 'Charles R. Swindoll', 'life'),
(318, 'Life isn’t about finding yourself. Life is about creating yourself.', 'George Bernard Shaw', 'life'),
(319, 'Life is a journey that must be traveled no matter how bad the roads and accommodations.', 'Oliver Goldsmith', 'life'),
(320, 'Life is a series of natural and spontaneous changes. Don’t resist them; that only creates sorrow. Let reality be reality. Let things flow naturally fo', 'Lao Tzu', 'life'),
(321, 'Life is a succession of lessons which must be lived to be understood.', 'Helen Keller', 'life'),
(322, 'Life is 10% what happens to us and 90% how we react to it.', 'Charles R. Swindoll', 'life'),
(323, 'Life is a daring adventure or nothing at all.', 'Helen Keller', 'life'),
(324, 'Life is like riding a bicycle. To keep your balance, you must keep moving.', 'Albert Einstein', 'life'),
(325, 'Life is short, and it is up to you to make it sweet.', 'Sarah Louise Delany', 'life'),
(326, 'The biggest adventure you can take is to live the life of your dreams.', 'Oprah Winfrey', 'life'),
(327, 'Life is not measured by the number of breaths we take, but by the moments that take our breath away.', 'Maya Angelou', 'life'),
(328, 'Life is a long lesson in humility.', 'James M. Barrie', 'life'),
(329, 'Life is what we make it, always has been, always will be.', 'Grandma Moses', 'life'),
(330, 'Life is really simple, but we insist on making it complicated.', 'Confucius', 'life'),
(331, 'Life is a journey that must be traveled no matter how bad the roads and accommodations.', 'Oliver Goldsmith', 'life'),
(332, 'Life is a series of natural and spontaneous changes. Don’t resist them; that only creates sorrow. Let reality be reality. Let things flow naturally fo', 'Lao Tzu', 'life'),
(333, 'Life is a succession of lessons which must be lived to be understood.', 'Helen Keller', 'life'),
(334, 'Life is 10% what happens to us and 90% how we react to it.', 'Charles R. Swindoll', 'life'),
(335, 'Life is a daring adventure or nothing at all.', 'Helen Keller', 'life'),
(336, 'Life is like riding a bicycle. To keep your balance, you must keep moving.', 'Albert Einstein', 'life'),
(337, 'Life is short, and it is up to you to make it sweet.', 'Sarah Louise Delany', 'life'),
(338, 'The biggest adventure you can take is to live the life of your dreams.', 'Oprah Winfrey', 'life'),
(339, 'Life is not measured by the number of breaths we take, but by the moments that take our breath away.', 'Maya Angelou', 'life'),
(340, 'Life is a long lesson in humility.', 'James M. Barrie', 'life'),
(341, 'Life is what we make it, always has been, always will be.', 'Grandma Moses', 'life'),
(342, 'Life is really simple, but we insist on making it complicated.', 'Confucius', 'life'),
(343, 'Life is a journey that must be traveled no matter how bad the roads and accommodations.', 'Oliver Goldsmith', 'life'),
(344, 'Life is a series of natural and spontaneous changes. Don’t resist them; that only creates sorrow. Let reality be reality. Let things flow naturally fo', 'Lao Tzu', 'life'),
(345, 'Life is a succession of lessons which must be lived to be understood.', 'Helen Keller', 'life'),
(346, 'Life is 10% what happens to us and 90% how we react to it.', 'Charles R. Swindoll', 'life'),
(347, 'Life is a daring adventure or nothing at all.', 'Helen Keller', 'life'),
(348, 'Life is like riding a bicycle. To keep your balance, you must keep moving.', 'Albert Einstein', 'life'),
(349, 'Life is short, and it is up to you to make it sweet.', 'Sarah Louise Delany', 'life'),
(350, 'The biggest adventure you can take is to live the life of your dreams.', 'Oprah Winfrey', 'life'),
(351, 'Life is not measured by the number of breaths we take, but by the moments that take our breath away.', 'Maya Angelou', 'life'),
(352, 'Life is a long lesson in humility.', 'James M. Barrie', 'life'),
(353, 'Life is what we make it, always has been, always will be.', 'Grandma Moses', 'life'),
(354, 'Time is what we want most, but what we use worst.', 'William Penn', 'time'),
(355, 'Time is free, but it\'s priceless. You can\'t own it, but you can use it. You can\'t keep it, but you can spend it. Once you\'ve lost it, you can never ge', 'Harvey Mackay', 'time'),
(356, 'Time is the wisest counselor of all.', 'Pericles', 'time'),
(357, 'They always say time changes things, but you actually have to change them yourself.', 'Andy Warhol', 'time'),
(358, 'Time is a created thing. To say ‘I don’t have time,’ is like saying, ‘I don’t want to.', 'Lao Tzu', 'time'),
(359, 'Time flies over us, but leaves its shadow behind.', 'Nathaniel Hawthorne', 'time'),
(360, 'Time you enjoy wasting is not wasted time.', 'Marthe Troly-Curtin', 'time'),
(361, 'Lost time is never found again.', 'Benjamin Franklin', 'time'),
(362, 'Time is the most valuable thing a man can spend.', 'Theophrastus', 'time'),
(363, 'Time is a game played beautifully by children.', 'Heraclitus', 'time'),
(364, 'Time changes everything except something within us which is always surprised by change.', 'Thomas Hardy', 'time'),
(365, 'Time is the longest distance between two places.', 'Tennessee Williams', 'time'),
(366, 'Time is the coin of your life. You spend it. Do not allow others to spend it for you.', 'Carl Sandburg', 'time'),
(367, 'Time is the most valuable asset you don’t own. You may or may not realize it yet, but how you use or don’t use your time is going to be the best indic', 'Mark Cuban', 'time'),
(368, 'Time is like a handful of sand- the tighter you grasp it, the faster it runs through your fingers.', 'Anonymous', 'time'),
(369, 'Time is the most precious element of human existence. The successful person knows how to put energy into time and how to draw success from time.', 'Denis Waitley', 'time'),
(370, 'Time is what we want most, but what we use worst.', 'William Penn', 'time'),
(371, 'Time is free, but it\'s priceless. You can\'t own it, but you can use it. You can\'t keep it, but you can spend it. Once you\'ve lost it, you can never ge', 'Harvey Mackay', 'time'),
(372, 'Time is the wisest counselor of all.', 'Pericles', 'time'),
(373, 'They always say time changes things, but you actually have to change them yourself.', 'Andy Warhol', 'time'),
(374, 'Time is a created thing. To say ‘I don’t have time,’ is like saying, ‘I don’t want to.', 'Lao Tzu', 'time'),
(375, 'Time flies over us, but leaves its shadow behind.', 'Nathaniel Hawthorne', 'time'),
(376, 'Time you enjoy wasting is not wasted time.', 'Marthe Troly-Curtin', 'time'),
(377, 'Lost time is never found again.', 'Benjamin Franklin', 'time'),
(378, 'Time is the most valuable thing a man can spend.', 'Theophrastus', 'time'),
(379, 'Time is a game played beautifully by children.', 'Heraclitus', 'time'),
(380, 'Time changes everything except something within us which is always surprised by change.', 'Thomas Hardy', 'time'),
(381, 'Time is the longest distance between two places.', 'Tennessee Williams', 'time'),
(382, 'Time is the coin of your life. You spend it. Do not allow others to spend it for you.', 'Carl Sandburg', 'time'),
(383, 'Time is the most valuable asset you don’t own. You may or may not realize it yet, but how you use or don’t use your time is going to be the best indic', 'Mark Cuban', 'time'),
(384, 'Time is like a handful of sand- the tighter you grasp it, the faster it runs through your fingers.', 'Anonymous', 'time'),
(385, 'Time is the most precious element of human existence. The successful person knows how to put energy into time and how to draw success from time.', 'Denis Waitley', 'time'),
(386, 'Time is what we want most, but what we use worst.', 'William Penn', 'time'),
(387, 'Time is free, but it\'s priceless. You can\'t own it, but you can use it. You can\'t keep it, but you can spend it. Once you\'ve lost it, you can never ge', 'Harvey Mackay', 'time'),
(388, 'Time is the wisest counselor of all.', 'Pericles', 'time'),
(389, 'They always say time changes things, but you actually have to change them yourself.', 'Andy Warhol', 'time'),
(390, 'Time is a created thing. To say ‘I don’t have time,’ is like saying, ‘I don’t want to.', 'Lao Tzu', 'time'),
(391, 'Time flies over us, but leaves its shadow behind.', 'Nathaniel Hawthorne', 'time'),
(392, 'Time you enjoy wasting is not wasted time.', 'Marthe Troly-Curtin', 'time'),
(393, 'Lost time is never found again.', 'Benjamin Franklin', 'time'),
(394, 'Time is the most valuable thing a man can spend.', 'Theophrastus', 'time'),
(395, 'Time is a game played beautifully by children.', 'Heraclitus', 'time'),
(396, 'Time changes everything except something within us which is always surprised by change.', 'Thomas Hardy', 'time'),
(397, 'Time is the longest distance between two places.', 'Tennessee Williams', 'time'),
(398, 'Time is the coin of your life. You spend it. Do not allow others to spend it for you.', 'Carl Sandburg', 'time'),
(399, 'Time is the most valuable asset you don’t own. You may or may not realize it yet, but how you use or don’t use your time is going to be the best indic', 'Mark Cuban', 'time'),
(400, 'Time is like a handful of sand- the tighter you grasp it, the faster it runs through your fingers.', 'Anonymous', 'time'),
(401, 'Time is the most precious element of human existence. The successful person knows how to put energy into time and how to draw success from time.', 'Denis Waitley', 'time'),
(402, 'I\'m not clumsy, it\'s just the floor hates me, the tables and chairs are bullies, and the walls get in my way.', 'Unknown', 'humor'),
(403, 'I\'m not lazy, I\'m on energy-saving mode.', 'Unknown', 'humor'),
(404, 'I told my wife she was drawing her eyebrows too high. She looked surprised.', 'Unknown', 'humor'),
(405, 'My bed is a magical place where I suddenly remember everything I forgot to do.', 'Unknown', 'humor'),
(406, 'I\'m not arguing, I\'m just explaining why I\'m right.', 'Unknown', 'humor'),
(407, 'I\'m not a complete idiot, some parts are missing.', 'Unknown', 'humor'),
(408, 'I followed my heart and it led me to the fridge.', 'Unknown', 'humor'),
(409, 'I don\'t need anger management, I need people to stop making me angry.', 'Unknown', 'humor'),
(410, 'I\'m not short, I\'m concentrated awesome.', 'Unknown', 'humor'),
(411, 'I\'m not shy, I\'m just holding back my awesomeness so I don\'t intimidate you.', 'Unknown', 'humor'),
(412, 'I don’t need a hair stylist, my pillow gives me a new hairstyle every morning.', 'Unknown', 'humor'),
(413, 'I told my computer I needed a break and now it won\'t stop sending me vacation ads.', 'Unknown', 'humor'),
(414, 'My superpower is making people laugh. Which would be great if I were trying to be funny.', 'Unknown', 'humor'),
(415, 'I don\'t think inside the box and I don\'t think outside the box... I don\'t even know where the box is.', 'Unknown', 'humor'),
(416, 'My wallet is like an onion, opening it makes me cry.', 'Unknown', 'humor'),
(417, 'I\'m not clumsy, it\'s just the floor hates me, the tables and chairs are bullies, and the walls get in my way.', 'Unknown', 'humor'),
(418, 'I\'m not lazy, I\'m on energy-saving mode.', 'Unknown', 'humor'),
(419, 'I told my wife she was drawing her eyebrows too high. She looked surprised.', 'Unknown', 'humor'),
(420, 'My bed is a magical place where I suddenly remember everything I forgot to do.', 'Unknown', 'humor'),
(421, 'I\'m not arguing, I\'m just explaining why I\'m right.', 'Unknown', 'humor'),
(422, 'I\'m not a complete idiot, some parts are missing.', 'Unknown', 'humor'),
(423, 'I followed my heart and it led me to the fridge.', 'Unknown', 'humor'),
(424, 'I don\'t need anger management, I need people to stop making me angry.', 'Unknown', 'humor'),
(425, 'I\'m not short, I\'m concentrated awesome.', 'Unknown', 'humor'),
(426, 'I\'m not shy, I\'m just holding back my awesomeness so I don\'t intimidate you.', 'Unknown', 'humor'),
(427, 'I don’t need a hair stylist, my pillow gives me a new hairstyle every morning.', 'Unknown', 'humor'),
(428, 'I told my computer I needed a break and now it won\'t stop sending me vacation ads.', 'Unknown', 'humor'),
(429, 'My superpower is making people laugh. Which would be great if I were trying to be funny.', 'Unknown', 'humor'),
(430, 'I don\'t think inside the box and I don\'t think outside the box... I don\'t even know where the box is.', 'Unknown', 'humor'),
(431, 'My wallet is like an onion, opening it makes me cry.', 'Unknown', 'humor'),
(432, 'I\'m not clumsy, it\'s just the floor hates me, the tables and chairs are bullies, and the walls get in my way.', 'Unknown', 'humor'),
(433, 'I\'m not lazy, I\'m on energy-saving mode.', 'Unknown', 'humor'),
(434, 'I told my wife she was drawing her eyebrows too high. She looked surprised.', 'Unknown', 'humor'),
(435, 'My bed is a magical place where I suddenly remember everything I forgot to do.', 'Unknown', 'humor'),
(436, 'I\'m not arguing, I\'m just explaining why I\'m right.', 'Unknown', 'humor'),
(437, 'I\'m not a complete idiot, some parts are missing.', 'Unknown', 'humor'),
(438, 'I followed my heart and it led me to the fridge.', 'Unknown', 'humor'),
(439, 'I don\'t need anger management, I need people to stop making me angry.', 'Unknown', 'humor'),
(440, 'I\'m not short, I\'m concentrated awesome.', 'Unknown', 'humor'),
(441, 'I\'m not shy, I\'m just holding back my awesomeness so I don\'t intimidate you.', 'Unknown', 'humor'),
(442, 'I don’t need a hair stylist, my pillow gives me a new hairstyle every morning.', 'Unknown', 'humor'),
(443, 'I told my computer I needed a break and now it won\'t stop sending me vacation ads.', 'Unknown', 'humor'),
(444, 'My superpower is making people laugh. Which would be great if I were trying to be funny.', 'Unknown', 'humor'),
(445, 'I don\'t think inside the box and I don\'t think outside the box... I don\'t even know where the box is.', 'Unknown', 'humor'),
(446, 'My wallet is like an onion, opening it makes me cry.', 'Unknown', 'humor'),
(447, 'One bad chapter does not mean that your story is over.', 'Smit Solanki', 'special'),
(448, 'Life without coffee is depresso.', 'jacqueline', 'special'),
(449, 'We are all museums of fear', 'unknown', 'special'),
(450, 'Hide your eyes darling, people can see your heart.', 'unknown', 'special');

-- --------------------------------------------------------

--
-- Table structure for table `user_mst`
--

CREATE TABLE `user_mst` (
  `user_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_mst`
--

INSERT INTO `user_mst` (`user_id`, `name`, `email`, `pass`) VALUES
(15, 'anita', 'anita@gmail.com', '1234567890'),
(16, 'Ketan ', 'solankiketan156@gmail.com', 'Ketan@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `like_mst`
--
ALTER TABLE `like_mst`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `user_constraintlike` (`user_id`),
  ADD KEY `quote_constraintlike` (`quote_id`);

--
-- Indexes for table `quotes_mst`
--
ALTER TABLE `quotes_mst`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `user_mst`
--
ALTER TABLE `user_mst`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `like_mst`
--
ALTER TABLE `like_mst`
  MODIFY `like_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `quotes_mst`
--
ALTER TABLE `quotes_mst`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;

--
-- AUTO_INCREMENT for table `user_mst`
--
ALTER TABLE `user_mst`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `like_mst`
--
ALTER TABLE `like_mst`
  ADD CONSTRAINT `quote_constraintlike` FOREIGN KEY (`quote_id`) REFERENCES `quotes_mst` (`quote_id`),
  ADD CONSTRAINT `user_constraintlike` FOREIGN KEY (`user_id`) REFERENCES `user_mst` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
