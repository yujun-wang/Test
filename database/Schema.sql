-- Headers {{{
SET storage_engine=MYISAM;
-- }}}
-- ImgRequest {{{
DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
 `id` tinyint(4) NOT NULL AUTO_INCREMENT,
 `username` varchar(10) NOT NULL,
 `password` varchar(100) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
insert into users (username, password) values ('Charles', MD5('123'));
insert into users (username, password) values ('Bond', MD5('123'));