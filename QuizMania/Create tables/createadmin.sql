drop table admin;

create table admin
( adminno varchar2(25),
  fname varchar2(20),
  lname varchar2(20),
  country varchar2(25),
  password varchar2(20),
  gender varchar2(1),
  primary key (adminno)
);

insert into admin values ('kapil_sharma','Kapil','Sharma','India','hellojiit','M');
insert into admin values ('aakash_jain','Aakash','Jain','India','hellojiit','M');
insert into admin values ('shubhanshu12','Shubhanshu','Kumar','India','hellojiit','M');
insert into admin values ('vivek_singh','Vivek','Singh','India','hellojiit','M');

commit;
