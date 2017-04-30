insert into location VALUES (12345, 'Alcatraz');
insert into location values (66666, 'San Quentin');
insert into location values (23459, 'Bang Kwang');
insert into location values (10067, 'La Sabaneta');
insert into location values (37038, 'Tadmor');

insert into staff VALUES ('James', 'Gordon', 67890, null, 12345, 'Gotham City', 'MALE', '1972-05-13 15:30:27');
insert into staff VALUES ('Lucius', 'Fox', 43291, null, 66666, 'New York City', 'MALE', '1969-11-05 08:45:07');
insert into staff VALUES ('Tom', 'Benson', 70691, null, 23459, 'New Orleans', 'MALE', '1961-04-23 12:15:13');
insert into staff VALUES ('Morty', 'Sanchez', 88823, null, 10067, 'Los Angeles', 'MALE', '1974-03-11 09:35:17');
insert into staff values ('Isabella', 'White', 54321, null, 37038, 'Portland', 'FEMALE', '1962-12-27 04:54:27');
insert into staff VALUES ('Ricardo', 'Herrera', 10106, 67890, 12345, 'Mexico City', 'MALE', '1984-11-15 21:28:13');
insert into staff VALUES ('John', 'LayField', 69685, 67890, 12345, 'New Jersey', 'MALE', '1983-07-11 09:12:23');
insert into staff VALUES ('Michael', 'McNamara', 20346, 43291, 66666, 'Salt Lake City', 'MALE', '1979-9-11 12:48:55');
insert into staff VALUES ('Jude', 'Black', 77777, 43291, 66666, 'Washington DC', 'FEMALE', '1989-04-14 03:23:19');
insert into staff values ('Tony', 'Stark', 45001, 70691, 23459, 'Windy City', 'MALE', '1984-02-21 22:04:12');
insert into staff values ('Wardell', 'Curry', 97021, 70691, 23459, 'North Carolina', 'MALE', '1972-01-01 05:27:48');
insert into staff values ('Carla', 'Kutsher', 39602, 88823, 10067, 'South Dakota', 'FEMALE', '1990-11-01 23:51:41');
insert into staff values ('Bob', 'Petit', 11902, 88823, 10067, 'West Virginia', 'MALE', '1980-09-15 17:41:28');
insert into staff values ('Patrick', 'Star', 25810, 54321, 37038, 'Baton Rouge', 'MALE', '1971-10-18 19:34:10');
insert into staff values ('Willie', 'Stein', 80734, 54321, 37038, 'Motor City', 'MALE', '1986-05-27 20:12:01');

insert into victim values('Antawn', 'Jamison', 25258, '1994-01-23 10:11:34');
insert into victim values('Stephen', 'Jackson', 10279, '1960-03-14 11:23:19');
insert into victim values('Johnny', 'Cage', 13082, '19953-06-06 07:45:29');
insert into victim values('Kate', 'Winslett', 75093, '1947-10-29 08:37:51');
insert into victim values('Carlos', 'Rojo', 67930, '1997-05-26 18:36:22');
insert into victim values('Alice', 'Tetch', 97814, '2005-04-13 19:27:05');
insert into victim values('Paul', 'White', 85904, '1996-09-30 12:59:31');
insert into victim values('James', 'Franco', 30928, '1987-06-12 10:11:03');
insert into victim values('Stephanie', 'Baker', 84321, '1984-08-27 08:09:30');
insert into victim values('Hannah', 'Smith', 59372, '1991-12-19 02:01:38');

insert into visitor values('Theresa', 'White', 'FEMALE', 49327, '1953-09-12 03:45:12');
insert into visitor values('Mike', 'Brown', 'MALE', 10938, '1984-10-21 12:25:19');
insert into visitor values('Devin', 'Booker', 'MALE', 20183, '1996-12-22 09:05:17');
insert into visitor values('Julia', 'Parker', 'FEMALE', 10098, '1990-06-02 07:15:02');
insert into visitor values('Gwen', 'Walker', 'FEMALE', 30853, '1992-10-30 13:27:28');
insert into visitor values('Demi', 'Moore', 'FEMALE', 70948, '1973-08-21 09:56:32');
insert into visitor values('Joseph', 'Thevenin', 'MALE', 38651, '1963-02-06 10:28:20');
insert into visitor values('Blake', 'Jordan', 'MALE', 67291, '1960-11-09 11:01:22');
insert into visitor values('Sophie', 'Smart', 'FEMALE', 24872, '1997-04-29 12:08:42');
insert into visitor values('Christina', 'Bloom', 'FEMALE', 12108, '1994-07-22 23:55:02');

insert into prisoner values('Edward', 'Nygma', 35092, 12345, 29853, 25, '2015-05-13 03:32:04', 'New York City', 37, 90946643, 2, 2, '2040-05-13 03:32:04', '1985-09-13 12:34:42');
insert into prisoner values('Oswald', 'Cobblepot', 29853, 12345, 35092, 37, '2013-04-21 05:22:14', 'Los Angeles', 37, 90948632, 1, 3, '2050-04-21 05:22:14', '1986-11-03 10:21:32');
insert into prisoner values('Fish', 'Mooney', 97326, 66666, 63752, 17, '2008-12-03 13:33:54', 'San Fransisco', 07, 90945712, 4, 2, '2025-12-03 13:33:54', '1961-02-23 10:04:21');
insert into prisoner values('Barbara', 'Kean', 63752, 66666, 97326, 15, '2010-12-23 10:41:54', 'La Fayette', 07, 90951843, 2, 2, '2025-12-23 10:41:54', '1990-04-03 11:20:34');
insert into prisoner values('Jerome', 'Valeska', 19832, 23459, 70862, 45, '2012-10-03 23:02:12', 'West Virginia', 12, 90974245, 3, 4, '2057-10-03 23:02:12', '1991-01-28 03:04:56');
insert into prisoner values('Theo', 'Galavan', 70862, 23459, 19832, 15, '2009-07-11 08:27:49', 'Washington DC', 12, 90952143, 4, 1, '2024-07-11 08:27:49', '1965-03-23 19:31:02');
insert into prisoner values('Hugo', 'Strange', 29601, 10067, 98629, 70, '2000-03-03 17:28:27', 'Motor City', 42, 90967620, 1, 1, '2070-03-03 17:28:27', '1969-04-12 07:25:38');
insert into prisoner values('Victor', 'Fries', 98629, 10067, 29601, 12, '2016-10-02 21:33:17', 'Salt Lake City', 42, 90900614, 3, 3, '2028-10-02 21:33:17', '1975-12-27 06:21:00');
insert into prisoner values('Butch', 'Gilzean', 76249, 37038, 10083, 10, '2010-03-24 12:42:22', 'Indianapolis', 11, 90900513, 2, 1, '2020-03-24 12:42:22', '1970-05-11 06:21:37');
insert into prisoner values('Salvador', 'Maroni', 10083, 37038, 76249, 35, '2015-07-23 11:22:14', 'New York City', 11, 90965611, 2, 3, '2050-07-23 11:22:14', '1960-01-01 20:24:22');

insert into crime values(10928, 35092, 'Homocide', 3, 25258, '2015-05-11 12:22:44');
insert into crime values(11182, 29853, 'Rape and Homocide', 4, 10279, '2013-04-20 12:02:44');
insert into crime values(29861, 97326, 'Homocide', 2, 13082, '2008-12-01 03:24:24');
insert into crime values(98621, 63752, 'Robbery', 2, 75093, '2010-12-20 11:01:27');
insert into crime values(87653, 19832, 'Homocide', 4, 67930, '2012-10-02 20:12:34');
insert into crime values(28628, 70862, 'Rape', 3, 97814, '2009-07-09 07:26:10');
insert into crime values(78264, 29601, 'Drug Trafficking', 5, 30928, '2000-03-02 20:13:28');
insert into crime values(65371, 98629, 'Stalking', 1, 85904, '2016-10-02 17:24:07');
insert into crime values(49875, 76249, 'Sexual Harassment', 1, 84321, '2010-03-22 01:23:02');
insert into crime values(29761, 10083, 'Robbery and Homicide', 3, 59372, '2015-07-20 23:20:45');

insert into visit values(49327, 35092, '2016-01-23 15:30:45', 15150);
insert into visit values(10938, 29853, '2014-05-26 18:24:57', 25552);
insert into visit values(20183, 97326, '2015-08-30 12:35:21', 39765);
insert into visit values(10098, 63752, '2011-04-03 10:20:44', 86530);
insert into visit values(30853, 19832, '2016-12-23 18:30:45', 75932);
insert into visit values(70948, 70862, '2010-03-13 15:24:16', 80652);
insert into visit values(38651, 29601, '2001-09-11 18:30:00', 30722);
insert into visit values(67291, 98629, '2017-02-21 12:23:12', 68621);
insert into visit values(24872, 76249, '2012-11-03 13:20:54', 55555);
insert into visit values(12108, 10083, '2016-04-06 14:15:37', 69691);



