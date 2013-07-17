DROP TABLE contacts;rgmerp

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_first` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `contact_last` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `contact_email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;rgmerp

INSERT INTO contacts VALUES("4","Joe","Tester","joe@tester.com");rgmerp
INSERT INTO contacts VALUES("3","Jim","Smith","jim@tester.com");rgmerp



DROP TABLE def;rgmerp

CREATE TABLE `def` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `jfee` int(10) NOT NULL,
  `pfee` int(10) NOT NULL,
  `bfeek` int(10) NOT NULL,
  `bfeen` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;rgmerp

INSERT INTO def VALUES("1","4000","5000","18000","10000");rgmerp



DROP TABLE receipt;rgmerp

CREATE TABLE `receipt` (
  `rc_id` int(10) NOT NULL AUTO_INCREMENT,
  `accid` varchar(30) NOT NULL,
  `stu_roll` varchar(12) NOT NULL,
  `date` varchar(20) NOT NULL,
  `day` int(10) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `accyr` varchar(20) NOT NULL,
  `jntu` varchar(20) NOT NULL,
  `placement` varchar(20) NOT NULL,
  `bus` varchar(20) NOT NULL,
  `tutionfee` varchar(30) NOT NULL,
  `path` varchar(50) NOT NULL,
  `total` varchar(20) NOT NULL,
  `payopt` varchar(50) NOT NULL,
  PRIMARY KEY (`rc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=199 DEFAULT CHARSET=latin1;rgmerp

INSERT INTO receipt VALUES("180","ACC09590","09091a0590","12-Feb-2013","12","Feb","2013","sy","","5000","","3000","receipts/09091a0590/09091a0590_39_12-Feb-2013.pdf","8000","CASH");rgmerp
INSERT INTO receipt VALUES("179","ACC09590","09091a0590","12-Feb-2013","12","Feb","2013","ty","","","","3000","receipts/09091a0590/09091a0590_41_12-Feb-2013.pdf","3000","CASH");rgmerp
INSERT INTO receipt VALUES("178","ACC09563","09091a0563","12-Feb-2013","12","Feb","2013","ny","1500","","","","receipts/09091a0563/09091a0563_158_12-Feb-2013.pdf","1500","CASH");rgmerp
INSERT INTO receipt VALUES("177","ACC09563","09091a0563","12-Feb-2013","12","Feb","2013","ny","","5000","","","receipts/09091a0563/09091a0563_174_12-Feb-2013.pdf","5000","CASH");rgmerp
INSERT INTO receipt VALUES("176","ACC09540","09091a0540","11-Feb-2013","11","Feb","2013","ny","1500","5000","7000","","receipts/09091a0540/09091a0540_156_11-Feb-2013.pdf","13500","CASH");rgmerp
INSERT INTO receipt VALUES("175","ACC09522","09091a0522","11-Feb-2013","11","Feb","2013","ny","1500","5000","7000","30200","receipts/09091a0522/09091a0522_113_11-Feb-2013.pdf","43700","CASH");rgmerp
INSERT INTO receipt VALUES("174","ACC09522","09091a0522","11-Feb-2013","11","Feb","2013","ny","1500","5000","7000","30200","receipts/09091a0522/09091a0522_117_11-Feb-2013.pdf","43700","CASH");rgmerp
INSERT INTO receipt VALUES("173","ACC09585","09091a0585","11-Feb-2013","11","Feb","2013","ny","1500","","","","receipts/09091a0585/09091a0585_115_11-Feb-2013.pdf","1500","CASH");rgmerp
INSERT INTO receipt VALUES("172","ACC09585","09091a0585","11-Feb-2013","11","Feb","2013","ny","","5000","","3000","receipts/09091a0585/09091a0585_64_11-Feb-2013.pdf","8000","CASH");rgmerp
INSERT INTO receipt VALUES("171","ACC09563","09091a0563","11-Feb-2013","11","Feb","2013","ny","","","7000","","receipts/09091a0563/09091a0563_51_11-Feb-2013.pdf","7000","CASH");rgmerp
INSERT INTO receipt VALUES("170","ACC09515","09091a0515","11-Feb-2013","11","Feb","2013","ny","","5000","18000","3000","receipts/09091a0515/09091a0515_41_11-Feb-2013.pdf","26000","CASH");rgmerp
INSERT INTO receipt VALUES("169","ACC095a1","09091a05a1","11-Feb-2013","11","Feb","2013","fy","","","","65000","receipts/09091a05a1/09091a05a1_76_11-Feb-2013.pdf","65000","CASH");rgmerp
INSERT INTO receipt VALUES("168","ACC095a1","09091a05a1","11-Feb-2013","11","Feb","2013","fy","1500","","7000","","receipts/09091a05a1/09091a05a1_162_11-Feb-2013.pdf","8500","asjjfe57");rgmerp
INSERT INTO receipt VALUES("167","ACC09563","09091a0563","11-Feb-2013","11","Feb","2013","ny","","","","65000","receipts/09091a0563/09091a0563_90_11-Feb-2013.pdf","65000","AS995");rgmerp
INSERT INTO receipt VALUES("166","ACC09563","09091a0563","10-Feb-2013","10","Feb","2013","fy","","","","65000","receipts/09091a0563/09091a0563_63_10-Feb-2013.pdf","65000","CASH");rgmerp
INSERT INTO receipt VALUES("165","ACC09563","09091a0563","10-Feb-2013","10","Feb","2013","fy","1500","5000","","","receipts/09091a0563/09091a0563_47_10-Feb-2013.pdf","6500","1a05562");rgmerp
INSERT INTO receipt VALUES("164","ACC08507","08091a0507","10-Feb-2013","10","Feb","2013","ty","","","7000","30000","receipts/08091a0507/08091a0507_34_10-Feb-2013.pdf","37000","CASH");rgmerp
INSERT INTO receipt VALUES("163","ACC08507","08091a0507","10-Feb-2013","10","Feb","2013","ty","1500","5000","","","receipts/08091a0507/08091a0507_80_10-Feb-2013.pdf","6500","CASH");rgmerp
INSERT INTO receipt VALUES("162","ACC08507","08091a0507","10-Feb-2013","10","Feb","2013","ny","","","","30000","receipts/08091a0507/08091a0507_200_10-Feb-2013.pdf","30000","CASH");rgmerp
INSERT INTO receipt VALUES("161","ACC08507","08091a0507","10-Feb-2013","10","Feb","2013","ny","1500","5000","7000","","receipts/08091a0507/08091a0507_11_10-Feb-2013.pdf","13500","56985412");rgmerp
INSERT INTO receipt VALUES("160","ACC09562","09091a0562","10-Feb-2013","10","Feb","2013","ty","","5000","7000","","receipts/09091a0562/09091a0562_16_10-Feb-2013.pdf","12000","114541");rgmerp
INSERT INTO receipt VALUES("159","ACC09562","09091a0562","10-Feb-2013","10","Feb","2013","ty","1500","","","","receipts/09091a0562/09091a0562_13_10-Feb-2013.pdf","1500","CASH");rgmerp
INSERT INTO receipt VALUES("157","ACC09562","09091a0562","10-Feb-2013","10","Feb","2013","ny","","5000","7000","3000","receipts/09091a0562/09091a0562_10-Feb-2013.pdf","15000","CASH");rgmerp
INSERT INTO receipt VALUES("158","ACC09562","09091a0562","10-Feb-2013","10","Feb","2013","ny","1500","","","","receipts/09091a0562/09091a0562_12_10-Feb-2013.pdf","1500","CASH");rgmerp
INSERT INTO receipt VALUES("181","ACC095a1","09091a05a1","12-Feb-2013","12","Feb","2013","sy","","5000","","","receipts/09091a05a1/09091a05a1_44_12-Feb-2013.pdf","5000","CASH");rgmerp
INSERT INTO receipt VALUES("182","ACC095a3","09091a05a3","13-Feb-2013","13","Feb","2013","ny","1500","5000","","","receipts/09091a05a3/09091a05a3_103_13-Feb-2013.pdf","6500","CASH");rgmerp
INSERT INTO receipt VALUES("183","ACC09562","09091a0562","13-Feb-2013","13","Feb","2013","ty","","","","3000","receipts/09091a0562/09091a0562_41_13-Feb-2013.pdf","3000","CASH");rgmerp
INSERT INTO receipt VALUES("184","ACC09590","09091a0590","13-Feb-2013","13","Feb","2013","ny","","","","3000","receipts/09091a0590/09091a0590_27_13-Feb-2013.pdf","3000","CASH");rgmerp
INSERT INTO receipt VALUES("185","ACC09597","09091a0597","14-Feb-2013","14","Feb","2013","ny","","5000","","3000","receipts/09091a0597/09091a0597_66_14-Feb-2013.pdf","8000","CASH");rgmerp
INSERT INTO receipt VALUES("186","ACC08213","08w51a1213","14-Feb-2013","14","Feb","2013","ty","","5000","","3000","receipts/08w51a1213/08w51a1213_128_14-Feb-2013.pdf","8000","CASH");rgmerp
INSERT INTO receipt VALUES("187","ACC095a3","09091a05a3","14-Feb-2013","14","Feb","2013","ty","","5000","","3000","receipts/09091a05a3/09091a05a3_18_14-Feb-2013.pdf","8000","CASH");rgmerp
INSERT INTO receipt VALUES("188","ACC095a3","09091a05a3","14-Feb-2013","14","Feb","2013","ty","","5000","","3000","receipts/09091a05a3/09091a05a3_181_14-Feb-2013.pdf","8000","CASH");rgmerp
INSERT INTO receipt VALUES("189","ACC095a3","09091a05a3","14-Feb-2013","14","Feb","2013","ty","","5000","","3000","receipts/09091a05a3/09091a05a3_106_14-Feb-2013.pdf","8000","CASH");rgmerp
INSERT INTO receipt VALUES("190","ACC095a3","09091a05a3","14-Feb-2013","14","Feb","2013","ny","","","18000","3000","receipts/09091a05a3/09091a05a3_46_14-Feb-2013.pdf","21000","CASH");rgmerp
INSERT INTO receipt VALUES("191","ACC09563","09091a0563","14-Feb-2013","14","Feb","2013","ty","1500","5000","","","receipts/09091a0563/09091a0563_53_14-Feb-2013.pdf","6500","CASH");rgmerp
INSERT INTO receipt VALUES("192","ACC09563","09091a0563","14-Feb-2013","14","Feb","2013","ty","","","","65000","receipts/09091a0563/09091a0563_95_14-Feb-2013.pdf","65000","CASH");rgmerp
INSERT INTO receipt VALUES("193","ACC10425","10x51a0425","14-Feb-2013","14","Feb","2013","ty","","5000","","32500","receipts/10x51a0425/10x51a0425_50_14-Feb-2013.pdf","37500","CASH");rgmerp
INSERT INTO receipt VALUES("194","","","14-Feb-2013","14","Feb","2013","","","","","","receipts//_74_14-Feb-2013.pdf","","CASH");rgmerp
INSERT INTO receipt VALUES("195","ACC09563","09091a0563","14-Feb-2013","14","Feb","2013","sy","1500","","7000","","receipts/09091a0563/09091a0563_133_14-Feb-2013.pdf","8500","CASH");rgmerp
INSERT INTO receipt VALUES("196","ACC09563","09091a0563","14-Feb-2013","14","Feb","2013","sy","1500","","7000","","receipts/09091a0563/09091a0563_101_14-Feb-2013.pdf","8500","CASH");rgmerp
INSERT INTO receipt VALUES("197","ACC09786","09091a0786","15-Feb-2013","15","Feb","2013","ny","1500","5000","18000","","receipts/09091a0786/09091a0786_43_15-Feb-2013.pdf","24500","ASDFR678");rgmerp
INSERT INTO receipt VALUES("198","ACC095a3","09091a05a3","15-Feb-2013","15","Feb","2013","ty","1500","","7000","","receipts/09091a05a3/09091a05a3_31_15-Feb-2013.pdf","8500","CASH");rgmerp



DROP TABLE smsfee;rgmerp

CREATE TABLE `smsfee` (
  `accid` varchar(20) NOT NULL,
  `stu_roll` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jobid` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;rgmerp

INSERT INTO smsfee VALUES("ACC09585","","","","Status=1"," Receipient Number d","1");rgmerp
INSERT INTO smsfee VALUES("ACC09585","09091a0585","1500","11-Feb-2013","Status=0","JOB_ins37_1360578759","1");rgmerp
INSERT INTO smsfee VALUES("ACC09522","09091a0522","43700","11-Feb-2013","<!DOCTYPE HTML PUBLI"," 11 Feb 2013 10:39:2","1");rgmerp
INSERT INTO smsfee VALUES("ACC09522","09091a0522","43700","11-Feb-2013","Status=0","JOB_ins37_1360579213","1");rgmerp
INSERT INTO smsfee VALUES("ACC09540","09091a0540","13500","11-Feb-2013","Status=0","JOB_ins37_1360579617","1");rgmerp
INSERT INTO smsfee VALUES("ACC09563","09091a0563","5000","12-Feb-2013","Status=1"," API Time Expired ","1");rgmerp
INSERT INTO smsfee VALUES("ACC09590","09091a0590","8000","12-Feb-2013","Status=0","JOB_ins37_1360645007","1");rgmerp
INSERT INTO smsfee VALUES("ACC095a1","09091a05a1","5000","12-Feb-2013","Status=0","JOB_ins37_1360645448","1");rgmerp
INSERT INTO smsfee VALUES("ACC095a3","09091a05a3","6500","13-Feb-2013","Status=0","JOB_ins37_1360736359","1");rgmerp
INSERT INTO smsfee VALUES("ACC09562","09091a0562","3000","13-Feb-2013","Status=0","JOB_ins37_1360745387","1");rgmerp
INSERT INTO smsfee VALUES("ACC09590","09091a0590","3000","13-Feb-2013","Status=0","JOB_ins37_1360748315","1");rgmerp
INSERT INTO smsfee VALUES("ACC09597","09091a0597","8000","14-Feb-2013","Status=0","JOB_ins37_1360833969","1");rgmerp
INSERT INTO smsfee VALUES("ACC08213","08w51a1213","8000","14-Feb-2013","Status=0","JOB_ins37_1360852894","1");rgmerp
INSERT INTO smsfee VALUES("ACC095a3","09091a05a3","8000","14-Feb-2013","Status=0","JOB_ins37_1360853338","1");rgmerp
INSERT INTO smsfee VALUES("ACC095a3","09091a05a3","8000","14-Feb-2013","Status=0","JOB_ins37_1360853373","1");rgmerp
INSERT INTO smsfee VALUES("ACC095a3","09091a05a3","8000","14-Feb-2013","Status=0","JOB_ins37_1360853472","1");rgmerp
INSERT INTO smsfee VALUES("ACC095a3","09091a05a3","21000","14-Feb-2013","Status=0","JOB_ins37_1360853525","1");rgmerp
INSERT INTO smsfee VALUES("ACC10425","10x51a0425","37500","14-Feb-2013","Status=0","JOB_ins37_1360855703","1");rgmerp
INSERT INTO smsfee VALUES("","","","14-Feb-2013","Status=1"," API Time Expired ","1");rgmerp
INSERT INTO smsfee VALUES("ACC09563","09091a0563","8500","14-Feb-2013","Status=1"," API Time Expired ","1");rgmerp
INSERT INTO smsfee VALUES("ACC09563","09091a0563","8500","14-Feb-2013","Status=1"," API Time Expired ","1");rgmerp
INSERT INTO smsfee VALUES("ACC09786","09091a0786","24500","15-Feb-2013","Status=0","JOB_ins37_1360906460","1");rgmerp
INSERT INTO smsfee VALUES("ACC095a3","09091a05a3","8500","15-Feb-2013","Status=1"," API Time Expired 
","1");rgmerp



DROP TABLE smsstatus;rgmerp

CREATE TABLE `smsstatus` (
  `accid` varchar(10) NOT NULL,
  `stu_roll` varchar(20) NOT NULL,
  `otp` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `jobid` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`accid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;rgmerp

INSERT INTO smsstatus VALUES("ACC08213","08w51a1213","A08490213","Status=0","JOB_ins37_1360852724","14-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC08507","08091a0507","A08832507","Status=0","JOB_ins37_1360501582","10-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC09463","09091a0463","A09341463","Status=1"," API Time Expired ","15-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC09515","09091a0515","A09622515","Status=0","JOB_ins37_1360560065","11-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC09522","09091a0522","A09379522","Status=0","JOB_ins37_1360579013","11-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC09540","09091a0540","A09727540","Status=0","JOB_ins37_1360565822","11-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC09553","09091a0553","A09114553","Status=0","JOB_ins37_1361264073","19-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC09561","09091a0561","A09473561","Status=0","JOB_ins37_1360502444","10-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC09562","09091a0562","A09152562","Status=0","JOB_ins37_1360480750","10-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC09563","09091a0563","A09431563","Status=0","JOB_ins37_1360479798","10-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC09577","09091a0577","A09796577","","","13-Feb-2013","0");rgmerp
INSERT INTO smsstatus VALUES("ACC09585","09091a0585","A09509585","Status=0","JOB_ins37_1360578252","11-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC09590","09091a0590","A09499590","Status=0","JOB_ins37_1360643409","12-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC09592","09091a0592","A09736592","Status=0","JOB_ins37_1360559837","11-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC09596","09091a0596","A09561596","","","13-Feb-2013","0");rgmerp
INSERT INTO smsstatus VALUES("ACC09597","09091a0597","A09690597","","","14-Feb-2013","0");rgmerp
INSERT INTO smsstatus VALUES("ACC095a1","09091a05a1","A092205a1","Status=0","JOB_ins37_1360507716","10-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC095a3","09091a05a3","A099535a3","","","13-Feb-2013","0");rgmerp
INSERT INTO smsstatus VALUES("ACC095b0","09091a05b0","A093345b0","Status=0","JOB_ins37_1360477339","10-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC09786","09091a0786","A09407786","Status=0","JOB_ins37_1360906365","15-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC09w0i","0910929w0i","A09345w0i","Status=0","JOB_ins37_1360644167","12-Feb-2013","1");rgmerp
INSERT INTO smsstatus VALUES("ACC10425","10x51a0425","A10745425","Status=0","JOB_ins37_1360855639","14-Feb-2013","1");rgmerp



DROP TABLE stdet;rgmerp

CREATE TABLE `stdet` (
  `stu_roll` varchar(11) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `stu_father` varchar(50) NOT NULL,
  `stu_branch` varchar(10) NOT NULL,
  `stu_email` varchar(50) NOT NULL,
  `stu_mob` varchar(20) NOT NULL,
  `tutionfee` varchar(20) NOT NULL,
  `accid` varchar(20) NOT NULL,
  PRIMARY KEY (`stu_roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;rgmerp

INSERT INTO stdet VALUES("09091a0563","09-13","Teja","Ravi","Diwakar","CSE","ravi-tej@live.com","8142547078","65000","ACC09563");rgmerp
INSERT INTO stdet VALUES("09091a0562","09-13","R.N","Rasagna","R.N","CSE","reddyvarirasagna@gmail.com","9908042550","3000","ACC09562");rgmerp
INSERT INTO stdet VALUES("09091a05b0","09-13","bathini","Yoganand","Father","CSE","yoganand.bathini@live.com","9985565366","3000","ACC095b0");rgmerp
INSERT INTO stdet VALUES("08091a0507","09-13","Modem","bharath","Krishnaiah","CSE","bharathm2012@gmail.com","9642717696","30000","ACC08507");rgmerp
INSERT INTO stdet VALUES("09091a0561","09-13","m","Ramesh","Father","CSE","tejasweets@gmail.com","8121213775","9200","ACC09561");rgmerp
INSERT INTO stdet VALUES("09091a05a1","09-13","reddy","Varadha","Father","CSE","varadamohanreddy@gmail.com","9494810420","65000","ACC095a1");rgmerp
INSERT INTO stdet VALUES("09091a0592","09-13","Gunda","Taruni","Murali Krishna","CSE","taruni592@gmail.com","9494810420","33000","ACC09592");rgmerp
INSERT INTO stdet VALUES("09091a0515","09-13","Shaik","Fahad","Mehboob","CSE","mdfahadcse@gmail.com","9959466954","3000","ACC09515");rgmerp
INSERT INTO stdet VALUES("09091a05a3","09-13","Yadala","Niharika","suresh","CSE","saiharika310@gmail.com","9885375145","3000","ACC095a3");rgmerp
INSERT INTO stdet VALUES("09091a0585","09-13","Kundan","Sujith","Viswanath","CSE","sujithkundan@gmail.com","9160102095","3000","ACC09585");rgmerp
INSERT INTO stdet VALUES("09091a0522","09-13","pandillapalli","hari krishna","p srinivasulu","CSE","krishna.hari522@gmail.com","8125612856","30200","ACC09522");rgmerp
INSERT INTO stdet VALUES("09091a0590","09-13","syed","Tabrez","Syed Basha","CSE","prince.tabrez7@gmail.com","9441688663","3000","ACC09590");rgmerp
INSERT INTO stdet VALUES("0910929w0i","09-13","j","test","jncls","CSE","ljvsd@gmail.cjsd","8142547078","","ACC09w0i");rgmerp
INSERT INTO stdet VALUES("09091a0596","09-13","B.S","UMA","manjunath","CSE","uma.bs596@gmail.com","8121632629","600000","ACC09596");rgmerp
INSERT INTO stdet VALUES("09091a0577","09-13","gopireddy","Sireesha","Shiv Shankar Reddy","CSE","sireesha577@gmail.com","9704523461","3000","ACC09577");rgmerp
INSERT INTO stdet VALUES("09091a0597","09-13","Kuruba","Uma Maheshwari","virupakshi","CSE","usharima@gmail.com","8500139325","3000","ACC09597");rgmerp
INSERT INTO stdet VALUES("08w51a1213","09-13","M","Roofi","Azzez","IT","aman.fouzia@gmail.com","8951771942","3000","ACC08213");rgmerp
INSERT INTO stdet VALUES("10x51a0425","09-13","Nagella","Mani","Nagella Guru","ECE","nagella.manikanta@gmail.com","9866779205","32500","ACC10425");rgmerp
INSERT INTO stdet VALUES("09091a0786","09-13","Gunda","Praveen","Hanumanthaiah","CSE","praveen@gmail.com","9490452066","90000","ACC09786");rgmerp
INSERT INTO stdet VALUES("09091a0463","09-13","","someone","Father","CSE","tejasweets@gmail.com","8142547078","45000","ACC09463");rgmerp
INSERT INTO stdet VALUES("09091a0553","09-13","v","radhika","Viswanath","CSE","radhika@gmail.com","9390025099","5000","ACC09553");rgmerp



DROP TABLE stud1;rgmerp

CREATE TABLE `stud1` (
  `stu_roll` varchar(20) NOT NULL,
  `accid` varchar(10) NOT NULL,
  `stu_name` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `jntu` varchar(20) NOT NULL DEFAULT '0',
  `bus` varchar(20) NOT NULL DEFAULT '0',
  `placement` varchar(20) NOT NULL DEFAULT '0',
  `tutionfee` varchar(20) NOT NULL DEFAULT '0',
  `jdate` varchar(20) NOT NULL DEFAULT '0',
  `bdate` varchar(20) NOT NULL DEFAULT '0',
  `pdate` varchar(20) NOT NULL DEFAULT '0',
  `tdate` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stu_roll`),
  UNIQUE KEY `stu_ref` (`stu_roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;rgmerp

INSERT INTO stud1 VALUES("09091a0563","ACC09563","Ravi","09-13","CSE","1500","0","5000","65000","10-Feb-2013","0","10-Feb-2013","10-Feb-201");rgmerp
INSERT INTO stud1 VALUES("09091a05b0","ACC095b0","Yoganand","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("09091a0562","ACC09562","Rasagna","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("08091a0507","ACC08507","bharath","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("09091a0561","ACC09561","Ramesh","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("09091a05a1","ACC095a1","Varadha","09-13","CSE","1500","7000","0","65000","11-Feb-2013","11-Feb-2013","0","11-Feb-201");rgmerp
INSERT INTO stud1 VALUES("09091a0592","ACC09592","Taruni","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("09091a0515","ACC09515","Fahad","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("09091a05a3","ACC095a3","Niharika","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("09091a0585","ACC09585","Sujith","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("09091a0522","ACC09522","hari krishna","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("09091a0590","ACC09590","Tabrez","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("0910929w0i","ACC09w0i","test","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("09091a0596","ACC09596","UMA","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("09091a0577","ACC09577","Sireesha","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("09091a0597","ACC09597","Uma Maheshwari","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("08w51a1213","ACC08213","Roofi","09-13","IT","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("10x51a0425","ACC10425","Mani","09-13","ECE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("09091a0786","ACC09786","Praveen","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("09091a0463","ACC09463","someone","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud1 VALUES("09091a0553","ACC09553","radhika","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp



DROP TABLE stud2;rgmerp

CREATE TABLE `stud2` (
  `stu_roll` varchar(20) NOT NULL,
  `accid` varchar(10) NOT NULL,
  `stu_name` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `jntu` varchar(20) NOT NULL DEFAULT '0',
  `bus` varchar(20) NOT NULL DEFAULT '0',
  `placement` varchar(20) NOT NULL DEFAULT '0',
  `tutionfee` varchar(20) NOT NULL DEFAULT '0',
  `tdate` varchar(20) NOT NULL DEFAULT '0',
  `jdate` varchar(20) NOT NULL DEFAULT '0',
  `bdate` varchar(20) NOT NULL DEFAULT '0',
  `pdate` varchar(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stu_roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;rgmerp

INSERT INTO stud2 VALUES("09091a0563","ACC09563","Ravi","09-13","CSE","1500","7000","0","0","0","14-Feb-2013","14-Feb-2013","0");rgmerp
INSERT INTO stud2 VALUES("09091a05b0","ACC095b0","Yoganand","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a0562","ACC09562","Rasagna","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("08091a0507","ACC08507","bharath","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a0561","ACC09561","Ramesh","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a05a1","ACC095a1","Varadha","09-13","CSE","0","0","5000","0","0","0","0","12-Feb-2013");rgmerp
INSERT INTO stud2 VALUES("09091a0592","ACC09592","Taruni","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a0515","ACC09515","Fahad","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a0540","ACC09540","uday","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a0585","ACC09585","Sujith","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a0522","ACC09522","hari krishna","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a0590","ACC09590","Tabrez","09-13","CSE","0","0","5000","3000","12-Feb-2013","0","0","12-Feb-2013");rgmerp
INSERT INTO stud2 VALUES("0910929w0i","ACC09w0i","test","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a05a3","ACC095a3","Niharika","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a0596","ACC09596","UMA","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a0577","ACC09577","Sireesha","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a0597","ACC09597","Uma Maheshwari","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("08w51a1213","ACC08213","Roofi","09-13","IT","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("10x51a0425","ACC10425","Mani","09-13","ECE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a0786","ACC09786","Praveen","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a0463","ACC09463","someone","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud2 VALUES("09091a0553","ACC09553","radhika","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp



DROP TABLE stud3;rgmerp

CREATE TABLE `stud3` (
  `stu_roll` varchar(20) NOT NULL,
  `accid` varchar(10) NOT NULL,
  `stu_name` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `jntu` varchar(20) NOT NULL DEFAULT '0',
  `bus` varchar(20) NOT NULL DEFAULT '0',
  `placement` varchar(20) NOT NULL DEFAULT '0',
  `tutionfee` varchar(20) NOT NULL DEFAULT '0',
  `tdate` varchar(20) NOT NULL DEFAULT '0',
  `jdate` varchar(20) NOT NULL DEFAULT '0',
  `bdate` varchar(20) NOT NULL DEFAULT '0',
  `pdate` varchar(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stu_roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;rgmerp

INSERT INTO stud3 VALUES("09091a0563","ACC09563","Ravi","09-13","CSE","1500","0","5000","65000","14-Feb-2013","14-Feb-2013","0","14-Feb-2013");rgmerp
INSERT INTO stud3 VALUES("09091a05b0","ACC095b0","Yoganand","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud3 VALUES("09091a0562","ACC09562","Rasagna","09-13","CSE","1500","7000","5000","3000","13-Feb-2013","10-Feb-2013","10-Feb-2013","10-Feb-2013");rgmerp
INSERT INTO stud3 VALUES("08091a0507","ACC08507","bharath","09-13","CSE","1500","7000","5000","30000","10-Feb-2013","10-Feb-2013","10-Feb-2013","10-Feb-2013");rgmerp
INSERT INTO stud3 VALUES("09091a0561","ACC09561","Ramesh","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud3 VALUES("09091a05a1","ACC095a1","Varadha","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud3 VALUES("09091a0592","ACC09592","Taruni","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud3 VALUES("09091a0515","ACC09515","Fahad","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud3 VALUES("09091a0540","ACC09540","uday","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud3 VALUES("09091a0585","ACC09585","Sujith","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud3 VALUES("09091a0522","ACC09522","hari krishna","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud3 VALUES("09091a0590","ACC09590","Tabrez","09-13","CSE","0","0","0","3000","12-Feb-2013","0","0","0");rgmerp
INSERT INTO stud3 VALUES("0910929w0i","ACC09w0i","test","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud3 VALUES("09091a05a3","ACC095a3","Niharika","09-13","CSE","1500","7000","5000","3000","14-Feb-2013","15-Feb-2013","15-Feb-2013","14-Feb-2013");rgmerp
INSERT INTO stud3 VALUES("09091a0596","ACC09596","UMA","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud3 VALUES("09091a0577","ACC09577","Sireesha","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud3 VALUES("09091a0597","ACC09597","Uma Maheshwari","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud3 VALUES("08w51a1213","ACC08213","Roofi","09-13","IT","0","0","5000","3000","14-Feb-2013","0","0","14-Feb-2013");rgmerp
INSERT INTO stud3 VALUES("10x51a0425","ACC10425","Mani","09-13","ECE","0","0","5000","32500","14-Feb-2013","0","0","14-Feb-2013");rgmerp
INSERT INTO stud3 VALUES("09091a0786","ACC09786","Praveen","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud3 VALUES("09091a0463","ACC09463","someone","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud3 VALUES("09091a0553","ACC09553","radhika","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp



DROP TABLE stud4;rgmerp

CREATE TABLE `stud4` (
  `stu_roll` varchar(20) NOT NULL,
  `accid` varchar(10) NOT NULL,
  `stu_name` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `jntu` varchar(20) NOT NULL DEFAULT '0',
  `bus` varchar(20) NOT NULL DEFAULT '0',
  `placement` varchar(20) NOT NULL DEFAULT '0',
  `tutionfee` varchar(20) NOT NULL DEFAULT '0',
  `tdate` varchar(20) NOT NULL DEFAULT '0',
  `jdate` varchar(20) NOT NULL DEFAULT '0',
  `bdate` varchar(20) NOT NULL DEFAULT '0',
  `pdate` varchar(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stu_roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;rgmerp

INSERT INTO stud4 VALUES("09091a0563","ACC09563","Ravi","09-13","CSE","1500","7000","5000","65000","11-Feb-2013","12-Feb-2013","11-Feb-2013","12-Feb-2013");rgmerp
INSERT INTO stud4 VALUES("09091a05b0","ACC095b0","Yoganand","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud4 VALUES("08091a0507","ACC08507","bharath","09-13","CSE","1500","7000","5000","30000","10-Feb-2013","10-Feb-2013","10-Feb-2013","10-Feb-2013");rgmerp
INSERT INTO stud4 VALUES("09091a0562","ACC09562","Rasagna","09-13","CSE","1500","7000","5000","3000","10-Feb-2013","10-Feb-2013","10-Feb-2013","10-Feb-2013");rgmerp
INSERT INTO stud4 VALUES("09091a0561","ACC09561","Ramesh","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud4 VALUES("09091a05a1","ACC095a1","Varadha","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud4 VALUES("09091a0592","ACC09592","Taruni","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud4 VALUES("09091a0515","ACC09515","Fahad","09-13","CSE","0","18000","5000","3000","11-Feb-2013","0","11-Feb-2013","11-Feb-2013");rgmerp
INSERT INTO stud4 VALUES("09091a0540","ACC09540","uday","09-13","CSE","1500","7000","5000","0","0","11-Feb-2013","11-Feb-2013","11-Feb-2013");rgmerp
INSERT INTO stud4 VALUES("09091a0585","ACC09585","Sujith","09-13","CSE","1500","0","5000","3000","11-Feb-2013","11-Feb-2013","0","11-Feb-2013");rgmerp
INSERT INTO stud4 VALUES("09091a0522","ACC09522","hari krishna","09-13","CSE","1500","7000","5000","30200","11-Feb-2013","11-Feb-2013","11-Feb-2013","11-Feb-2013");rgmerp
INSERT INTO stud4 VALUES("09091a0590","ACC09590","Tabrez","09-13","CSE","0","0","0","3000","13-Feb-2013","0","0","0");rgmerp
INSERT INTO stud4 VALUES("0910929w0i","ACC09w0i","test","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud4 VALUES("09091a05a3","ACC095a3","Niharika","09-13","CSE","1500","18000","5000","3000","14-Feb-2013","13-Feb-2013","14-Feb-2013","13-Feb-2013");rgmerp
INSERT INTO stud4 VALUES("09091a0596","ACC09596","UMA","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud4 VALUES("09091a0577","ACC09577","Sireesha","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud4 VALUES("09091a0597","ACC09597","Uma Maheshwari","09-13","CSE","0","0","5000","3000","14-Feb-2013","0","0","14-Feb-2013");rgmerp
INSERT INTO stud4 VALUES("08w51a1213","ACC08213","Roofi","09-13","IT","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud4 VALUES("10x51a0425","ACC10425","Mani","09-13","ECE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud4 VALUES("09091a0786","ACC09786","Praveen","09-13","CSE","1500","18000","5000","0","0","15-Feb-2013","15-Feb-2013","15-Feb-2013");rgmerp
INSERT INTO stud4 VALUES("09091a0463","ACC09463","someone","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp
INSERT INTO stud4 VALUES("09091a0553","ACC09553","radhika","09-13","CSE","0","0","0","0","0","0","0","0");rgmerp



DROP TABLE user;rgmerp

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;rgmerp

INSERT INTO user VALUES("admin","5f4dcc3b5a");rgmerp



DROP TABLE users;rgmerp

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;rgmerp

INSERT INTO users VALUES("1","admin","08443609a5a6cdb032ac635dff9e0b99","ravi","teja","tejasweets@gmail.com","1");rgmerp



