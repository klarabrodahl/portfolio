-- Table structure for table `users`

CREATE TABLE IF NOT EXISTS `users` (

  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) 
VALUES ('admin', 'admin123') ;