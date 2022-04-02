CREATE DATABASE lessons;

USE lessons;

CREATE TABLE userInfo {
    userID          INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
    userFullName    CHAR(50) NOT NULL,
    userAddress     CHAR(100) NOT NULL,
    classId         INT UNSIGNED auto_increment,
    userCreatedAt   TIMESTAMP NOT NULL,
    password        CHAR(200) NOT NULL,


    FOREIGN KEY (classId) REFERENCES class(classId)
};

INSERT INTO usersInfo VALUES {

};

CREATE TABLE teacher {
    teacherID          INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
    teacherFullName     CHAR(50) NOT NULL,
    teacherAddress      CHAR(50) NOT NUll,
    roomNumber          INT UNSIGNED NOT NULL auto_increment,
    teacherCreatedAt    TIMESTAMP NOT NULL,

    FOREIGN KEY (roomNumber) REFERENCES class(roomNumber)

};

CREATE TABLE class {
    classId     INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
    className   CHAR(50) NOT NULL,
    roomNumber  CHAR(50),
};

CREATE TABLE student {
    studentID           INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
    studentFullName     CHAR(50) NOT NULL,
    studentAddress       CHAR(100) NOT NULL,
    classId             INT UNSIGNED auto_increment,

    FOREIGN KEY (classId) REFERENCES class(classId)
};

CREATE TABLE appointment {
    appointmentID       INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
    teachersID          INT UNSIGNED NOT NULL auto_increment,
    studentID           INT UNSIGNED NOT NULL auto_increment,
    appointmentNotes     CHAR(200),
    appointmentSubject   CHAR (150),
    appCreatedAt        TIMESTAMP,
    appointmentTime     DATETIME,

    FOREIGN KEY (studentID) REFERENCES student (studentID)
};

CREATE TABLE notification{
    notificationID      INT UNSIGNED NOT NULL auto_increment PRIMARY KEY,
    notificationMessage CHAR(100),
    appointmentID       INT UNSIGNED NOT NULL auto_increment,
    notificationRead    BOOLEAN,

    FOREIGN KEY (appointmentID) REFERENCES appointment(appointmentID)
};

