drop table topics;

create table topics
( TOPICNO                                   NUMBER(3),
 TOPICNAME                                          VARCHAR2(40),
 DESCRIPTION                                        VARCHAR2(80)
);

insert into topics values (1, 'Cricket', 'How Much You Know About Your Favourite Game ?');
insert into topics values (2, 'IT', 'Check Yourself Out In IT Field');
insert into topics values (3, 'Riddles', 'Time To Use Your Brain');
insert into topics values (4, 'Reptiles', 'Cold Blooded Animals');
insert into topics values (5, 'Finish The Saying', 'Finish These Sentences');

