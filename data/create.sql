-- MySQL CREATE Script for Linda
SET foreign_key_checks = 0;

CREATE TABLE User (
id INTEGER NOT NULL AUTO_INCREMENT,
username VARCHAR(255) UNIQUE,
password VARCHAR(20),
PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE Event (
id INTEGER NOT NULL AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
eventtype INTEGER NOT NULL,
location VARCHAR(255),
description VARCHAR(8192),
hostid INTEGER NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(hostid) REFERENCES User (id) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

CREATE TABLE Comment(
id INTEGER NOT NULL AUTO_INCREMENT,
text VARCHAR(255) NOT NULL,
time DATE NOT NULL,
userid INTEGER NOT NULL,
eventid INTEGER NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(userid) REFERENCES User (id) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(eventid) REFERENCES Event (id) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

CREATE TABLE User_Event (
userid INTEGER NOT NULL,
eventid INTEGER NOT NULL,
signedup TINYINT(1),
PRIMARY KEY (userid, eventid),
FOREIGN KEY(userid) REFERENCES User (id) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(eventid) REFERENCES Event (id) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

CREATE TABLE Notification (
id INTEGER NOT NULL AUTO_INCREMENT,
eventid INTEGER,
type INTEGER,
time  TIMESTAMP,
PRIMARY KEY(id),
FOREIGN KEY (eventid) REFERENCES Event(id) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

CREATE TABLE Appointment(
id INTEGER NOT NULL AUTO_INCREMENT,
eventid INTEGER NOT NULL,
time DATETIME NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY (eventid) REFERENCES Event(id) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

-- old one : TerminVereinbarung
CREATE TABLE AppointmentArrangement (
id INTEGER NOT NULL AUTO_INCREMENT,
terminid INTEGER NOT NULL,
userid INTEGER NOT NULL,
eventid INTEGER NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(eventid) REFERENCES Event(id) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(terminid) REFERENCES Appointment(id) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(userid) REFERENCES User(id) ON UPDATE CASCADE ON DELETE CASCADE 
)ENGINE=InnoDB;

CREATE TABLE Notification_User(
notificationid INTEGER NOT NULL,
userid INTEGER NOT NULL,
isread TINYINT(1),
PRIMARY KEY(notificationid, userid),
FOREIGN KEY(notificationid) REFERENCES Notification (id) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(userid) REFERENCES User (id) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

SET foreign_key_checks = 1; 
