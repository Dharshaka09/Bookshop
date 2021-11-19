CREATE TABLE `Admin`` (
  `Admin_id` INT(11) NOT NULL AUTO_INCREMENT,
  `Admin_name` VARCHAR(30) NOT NULL,
  `password` VARCHAR(30) NOT NULL,
  `fullname` VARCHAR(60) NOT NULL,
   PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;