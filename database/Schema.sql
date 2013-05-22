-- Headers {{{
SET storage_engine=MYISAM;
-- }}}
-- ImgRequest {{{
DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
 `id` int NOT NULL AUTO_INCREMENT,
 `username` varchar(10) NOT NULL,
 `password` char(32) NOT NULL,
 PRIMARY KEY (`id`)
); 
insert into users (username, password) values ('Charles', MD5('123'));
insert into users (username, password) values ('Bond', MD5('123'));
DROP TABLE IF EXISTS menu;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL,
  `name` varchar(20),
  PRIMARY KEY (`id`)
)
INSERT INTO `menu` (`id`, `fid`, `name`) VALUES
(1, 0, 'School A'),
(2, 0, 'School B'),
(3, 1, 'Class1'),
(4, 1, 'Class2'),
(5, 2, 'Class1'),
(6, 4, 'Group1'),
(7, 6, 'David'),
(8, 6, 'Jono'),
(9, 0, 'School C'),
(10, 0, 'School D');