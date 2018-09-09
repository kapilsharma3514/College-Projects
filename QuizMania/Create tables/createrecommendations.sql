drop table recommendations;

create table recommendations
( RECNO		number(3),
  USERNO	varchar2(25),
  QUES		varchar2(150),
  A1		varchar2(30),
  A2		varchar2(30),
  A3		varchar2(30),
  A4 		varchar2(30),
  CORRECTANS	varchar2(30),
  TOPICNO	number(3),
  primary key (RECNO)
);