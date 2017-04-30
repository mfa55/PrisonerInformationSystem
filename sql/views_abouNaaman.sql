
/*=================================================*/
/* view that returns any prisoner's ssn, fname,    
lname, prison location and cell number with his
crime and the tyoe of his crime 				   */
/*=================================================*/
CREATE VIEW PRISONER_CRIME_INFO AS
SELECT p.SSN, p.FIRSTNAME, p.LASTNAME, p.LOCATIONID, p.CELLNUMBER, c.CRIMEID, c.CRIMETYPE
FROM PRISONER p JOIN CRIME c ON c.SSN = p.SSN ;

/*
returns the visit id and date with the visitor id fname and lname
and the prisoner id, fname and lname
*/
CREATE VIEW PRISONER_VISITED AS
SELECT VISIT.VISITID, VISIT.VISITDATE, VISITOR.VISITORID, VISITOR.FIRSTNAME AS visitor_firstname, VISITOR.LASTNAME AS visitor_lastname, p.SSN, p.FIRSTNAME AS prisoner_firstname, p.LASTNAME AS prisoner_lastname
FROM VISIT visit JOIN PRISONER p JOIN VISITOR visitor ON VISIT.VISITORID = VISITOR.VISITORID AND VISIT.PRISONERSSN = p.SSN


/*
returns the location name with all its employees' fnames and lnames
*/
CREATE VIEW STAFF_IN_LOCATION AS
SELECT l.NAME, s.FIRSTNAME, s.LASTNAME
FROM STAFF s JOIN LOCATION l ON s.LOCATIONID = l.LOCATIONID


/*
returns all prisoners fname and lname in a location with the location's id and name
*/
CREATE VIEW prisoners_in_location AS
SELECT l.LOCATIONID, l.NAME, p.SSN, p.FIRSTNAME, p.LASTNAME
FROM PRISONER p JOIN LOCATION l ON l.LOCATIONID = p.LOCATIONID

/*
returns every prisoner with his cellmate with their location name and cellnumber
*/
CREATE VIEW prisoners_cellmate AS
SELECT p1.SSN AS ID1, p1.FIRSTNAME AS p1_firstname, p1.LASTNAME p1_lastname, p2.SSN AS ID2, p2.FIRSTNAME AS p2_firstname, p2.LASTNAME AS p2_lastname, p1.LOCATIONID AS location, p1.CELLNUMBER AS cellnumber
FROM PRISONER p1 JOIN PRISONER p2 ON p1.CELLMATEID = p2.SSN

/*
returns all staff's id, fname, lname and location with their managers' id, fname, lname and location
*/
CREATE VIEW staff_with_manager AS
SELECT l2.NAME AS manager_location, s2.SSN AS managerID, s2.FIRSTNAME AS manager_firstname, s2.LASTNAME AS manager_lastname, l1.NAME AS staff_location, s1.SSN AS staffID, s1.FIRSTNAME AS staff_firstname, s1.LASTNAME AS staff_lastname
FROM STAFF s1 JOIN STAFF s2 JOIN LOCATION l1 JOIN LOCATION l2 ON s1.MANAGERID = s2.SSN AND s1.LOCATIONID = l1.LOCATIONID AND s2.LOCATIONID = l2.LOCATIONID