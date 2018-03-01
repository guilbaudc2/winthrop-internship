Create TABLE STUDENT1 
( 
	FormID MEDIUMINT NOT NULL,
	LastName VARCHAR 24 NOT NULL,
	FirstName VARCHAR 24 NOT NULL,
	PhoneNum INTEGER NOT NULL,
	StudentId CHAR 9 NOT NULL,
	SemEnroll CHAR 1 NOT NULL,
	YrEnrolled INTEGER 4 NOT NULL,
	SemGrad CHAR 1 NOT NULL,
	YrGrad INTEGER 4 NOT NULL,
	ClassEnrolled CHAR 8 NOT NULL,
	NumCredits INTEGER 3 NOT NULL,
	Major VARCHAR 63 NOT NULL,
	Minor VARCHAR 63 NOT NULL,
	Authorized BOOLEAN NOT NULL,
	SSEmail VARCHAR 63 NOT NULL,
	Foreign KEY FormID references Studentform1 (FORM)
)

CREATE TABLE SITESUPERVISOR
(
	FormID MEDIUMINT NOT NULL,
	OrgName VARCHAR 50 NOT NULL,
	BusinessNum VARCHAR 15 NOT NULL,
	Profit BOOLEAN NOT NULL,
	TheState CHAR 2 NOT NULL,
	DirSupervisor VARCHAR 63 NOT NULL,
	SupervisorTitle VARCHAR 63 NOT NULL,
	Address VARCHAR 127 NOT NULL,
	SupervisorPhone INTEGER 10 NOT NULL,
	StartDate VARCHAR 15 NOT NULL,
	EndDate VARCHAR 15 NOT NULL,
	HoursPWeek INTEGER 2 NOT NULL,
	Paid BOOLEAN NOT NULL,
	Salary FLOAT 5,
	PayMethod BOOLEAN,
	Stipend INTEGER 8,
	Task BLOB 2000 NOT NULL,
	Projects BLOB 2000 NOT NULL,
	Outcomes BLOB 2000 NOT NULL,
	Additional BLOB 2000,
	Foreign KEY FormID references SiteSupervisor (FORM)
	
)

CREATE TABLE STUDENT2
(
	FormID MEDIUMINT NOT NULL,
	Experience BLOB 5000 NOT NULL,
	Goals BLOB 5000 NOT NULL,
	Foreign KEY FormID references Studentform2 (FORM)
)

CREATE TABLE FACULTYLIAISON
(
	FormID MEDIUMINT NOT NULL,
	Aprove BOOLEAN NOT NULL,
	ILA BOOLEAN NOT NULL,
	MPEE BOOLEAN NOT NULL,
	SiteVisit BOOLEAN NOT NULL,
	Report BOOLEAN NOT NULL,
	Evaluation BOOLEAN NOT NULL,
	Extra BLOB 200,
	Foreign KEY FormID references FacultyLiaison (FORM)
)

CREATE TABLE FORM
(
	UserID VARCHAR 25,
	FormID MediumINT AUTOMATIC,
	Studentform1 MEDIUMINT,
	SiteSupervisor MEDIUMINT,
	Studentform2 MEDIUMINT,
	FacultyLiaison MEDIUMINT 
	Foreign KEY UserID references Username (Users)
)

CREATE TABLE CLASSLIST
(
	ProfessorID VARCHAR 24,
	Course VARCHAR 10
)

