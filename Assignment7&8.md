
//exp-7
Create TABLE EMPLOYEE {
    Emp_no varchar(50);
    E_name varchar(50);
    E_address varchar(50);
    E_ph_no varchar(50);
    Dept_no varchar(50);
    Dept_name varchar(50);
    job_id varchar(50);
    designation VARCHAR(50);
    Salary int(7);
}
//1
SELECT Dept_no from emp UNION select FROM dept;
//2
SELECT Dept_no from emp UNION all SELECT Dept_no from dept;
//3
select Dept_no from emp minus SELECT dept_no from dept;

//exp-8

create table sailors[

    sid intger not null,
    sname varchar(10),
    raiting intger,
    age reak,
    CONSTRAINT PK_sailors PRIMARY KEY (sid);
]

Create TABLE REVERVES[
     sid integer not null,
bid integer not null,
day datetime not null,
CONSTRAINT PK_reserves PRIMARY KEY (sid, bid, day),
FOREIGN KEY (sid) REFERENCES sailors(sid),
FOREIGN KEY (bid) REFERENCES boats(bid);
]

CREATE TABLE boats[
    sid intger not null,
    bname srting not null,
    color string not null,
    CONSTRAIN PK_boats PRIMARY KEY (sid,bname,color),
    FOREIGN KEY (sid) REFERENCES sailors(sid),
    FOREIGN KEY(sid) REFERENCES RESERVES(sid)
    ]
//1    
SELECT sailors* from sailors,RESERVES  where PK_sailors.sid=REVERVES.sid and RESERVES.bid=103 
//2
SELECT boat from sailor S , RESERVES R, Boat b WHERE r.sid=s.sid AND r.bid=b.bid AND
 sname= 'bob'
//3
SELECT sailors.sname, sailors.age from sailors, RESERVES, boats where sailors.sid=RESERVES.sid AND RESERVES.bid=D RESERVES.bid = boats.bid AND boats.color = 'red'
ORDER BY sailor.age

//4
SELECT sname FROM Sailors S, Reserves R WHERE S.sid = R.sid
//5
SELECT DISTINCT S.sid, S.sname FROM Sailors S, Reserves R1, Reserves R2
WHERE S.sid = R1.sid AND S.sid = R2.sid AND R1.day = R2.day AND R1.bid <> R2.bid
//6
SELECT R.sid FROM Boats B, Reserves R WHERE R.bid = B.bid 
AND B.color = 'red'
UNION SELECT R2.sid FROM Boats B2, Reserves R2
WHERE R2.bid = B2.bid AND B2.color = 'green'
//7
SELECT S.sname, S.age
FROM Sailors S
WHERE S.age <= ALL 
//8
SELECT COUNT( DISTINCT S.sname )
FROM Sailors S
//9
SELECT AVG(s.age)
FROM Sailors S
//10
SELECT S.rating, AVG(S.age) AS avg_age
FROM Sailors S
GROUP BY S.rating
HAVING COUNT(*) > 1
