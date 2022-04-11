DROP DATABASE IF EXISTS lessons;
CREATE DATABASE lessons;

USE lessons;

CREATE TABLE class (
    classId     INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
    className   CHAR(50) NOT NULL,
    roomNumber  CHAR(50)
);

CREATE TABLE userInfo (
    userID          INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
    username        CHAR(50) NOT NULL UNIQUE,
    email           CHAR(50) NOT NULL,
    classId         INT UNSIGNED,
    userCreatedAt   TIMESTAMP NOT NULL,
    password        CHAR(200) NOT NULL,

    FOREIGN KEY (classId) REFERENCES class(classId)
);

CREATE TABLE teacher (
    teacherID           INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
    teacherFullName     CHAR(50) NOT NULL,
    roomNumber          INT UNSIGNED NOT NULL,
    teacherCreatedAt    TIMESTAMP NOT NULL
);

CREATE TABLE student (
    studentID           INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
    studentFullName     CHAR(50) NOT NULL,
    classId             INT UNSIGNED,

    FOREIGN KEY (classId) REFERENCES class(classId)
);

CREATE TABLE appointment (
    appointmentID       INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
    studentID           INT UNSIGNED NOT NULL,
    appointmentNotes    CHAR(200),
    appCreatedAt        TIMESTAMP NOT NULL,
    timeFrom            CHAR(10) NOT NULL,
    timeTo              CHAR(10) NOT NULL,
    dateYear            INT UNSIGNED NOT NULL,
    dateMonth           INT UNSIGNED NOT NULL,
    dateDay             INT UNSIGNED NOT NULL,

    FOREIGN KEY (studentID) REFERENCES student (studentID) ON DELETE CASCADE
);
