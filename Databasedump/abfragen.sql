SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;
TRUNCATE TABLE `user`;

DROP TABLE IF EXISTS `scoreboard`;CREATE TABLE IF NOT EXISTS `scoreboard` (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id),
  quizID varchar(5),
  userID int unsigned,
    score int unsigned,
    compleTime int unsigned,
  FOREIGN KEY (userID) REFERENCES `user`(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8 AUTO_INCREMENT = 6;


INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'Jason', '$2y$10$sbWJ77.MBJXg0ad95GVKgukoz6yHiwOoaL2N4eLR7OaiOOgc/PRNa'),
(2, 'Julia', '$2y$10$j13lwPCSUihW7Z15LVrSGOf5uoZmQhUntLNkNXnBYYidPZSbuC9B2'),
(3, 'Hans', '$2y$10$mkhCAoQYHVcFXYBKPIFTUuvOwu/CDeiFXInX8K0fL9XkDDC9LEqpO'),
(4, 'Dorie', '$2y$10$7lE/IB7FtsLch76Eqzc4Oe/5nfGbZNsKFm1w21eaNlKuGHVi7..Di'),
(5, 'test', '$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq');

insert into scoreboard(quizID,userId,score,compleTime) values ('quiz1','3',3000,43000),('quiz2','4',5000,33000),('quiz1','4',7000,38000),('quiz1','2',7300,38200),('quiz3','1',500,2000),('quiz3','3',8000,42000),('quiz3','4',11500,12000),('quiz3','4',5000,82000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;