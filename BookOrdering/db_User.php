CREATE TABLE `user` (
  `userid` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(30) NOT NULL,
  `password` VARCHAR(30) NOT NULL,
  `fullname` VARCHAR(60) NOT NULL,
   PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;