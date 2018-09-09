drop table usertopicwisestats;

create table usertopicwisestats
( USERNO                                             VARCHAR2(25),
TOPICNAMEPLAYED                                    VARCHAR2(20),
TOTALSCORE                                         NUMBER(8),
BESTSCORE                                          NUMBER(38),
AVGSCORE                                           NUMBER(4,2),
NOOFTIMESPLAYED                                    NUMBER(2),
AVGTIMETAKEN                                       NUMBER(7,2),
TOTALTIME                                          NUMBER(7,2)
);