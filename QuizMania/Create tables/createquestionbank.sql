drop table questionbank;

create table questionbank
( QNO 		                                     NUMBER(2),
  QUES                                               VARCHAR2(150),
  A1                                                 VARCHAR2(30),
  A2                                                 VARCHAR2(30),
  A3                                                 VARCHAR2(30),
  A4                                                 VARCHAR2(30),
  CORRECTANS                                         VARCHAR2(30),
  CORRECTLYANSD                                      NUMBER(3),
  WRONGLYANSD                                        NUMBER(3),
  TOPICNO                                            NUMBER(3),
  DIFFICULTY                                         VARCHAR2(1),
  primary key (qno)
);