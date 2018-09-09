drop table useroverallstats

create table useroverallstats
( USERNO                                             VARCHAR2(25),
TOTALTOPICSPLAYED                                  NUMBER(2),
AVGSCORE                                           NUMBER(4,2),
MAXSCORE                                           NUMBER(3),
NOOFTIMESPLAYED                                    NUMBER(3),
TOPICMAX                                           VARCHAR2(20),
BESTTOPIC                                          VARCHAR2(20),
AVGTIMETAKEN                                       NUMBER(7,2),
TOTALTIME                                          NUMBER(7,2),
TOTALSCORE                                         NUMBER(5)
);