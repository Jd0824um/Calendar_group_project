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
    teachersID          INT UNSIGNED NOT NULL,
    studentID           INT UNSIGNED NOT NULL,
    appointmentNotes    CHAR(200),
    appointmentSubject  CHAR (150),
    appCreatedAt        TIMESTAMP,
    appointmentTime     DATETIME,

    FOREIGN KEY (studentID) REFERENCES student (studentID)
);
