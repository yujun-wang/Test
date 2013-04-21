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