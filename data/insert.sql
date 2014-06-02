-- Inserts for testing

INSERT INTO User(username, password) VALUES
('user1', 'password1'),
('user2', 'password2'),
('user3', 'password3'),
('user4', 'password4');

INSERT INTO Event(name, location, description, hostid) VALUES
('event1','location1','description', 1),
('event2','location2','description', 2),
('event3','location3','description', 3),
('event4','location4','description', 4),
('event5','location4','description', 1);

INSERT INTO Comment(text, time, userid, eventid) VALUES
('Voll cool!', NOW(), 1, 1),
('Voll toll!', NOW(), 2, 1),
('Voll top!', NOW(), 3, 1),
('Voll awesome!', NOW(), 4, 1),
('Voll leiwand!', NOW(), 1, 2),
('Voll voll!', NOW(), 1, 3);

INSERT INTO User_Event(userid, eventid, signedup) VALUES
(1, 1, 0),
(2, 1, 1),
(1, 2, 0),
(1, 3, 1),
(1, 4, 1),
(2, 4, 1),
(3, 4, 1),
(4, 4, 1);


-- Notification types {EINLADUNG, VERAENDERUNG, GELOESCHT, EVENT_READY}
INSERT INTO Notification (eventid, type, time) VALUES
(1, 0, NOW()),
(2, 1, NOW()),
(3, 2, NOW()),
(4, 3, NOW());

INSERT INTO Appointment (eventid, time) VALUES
(1, NOW()),
(2, NOW()),
(3, NOW()),
(4, NOW());

INSERT INTO AppointmentArrangement (terminid, userid, eventid) VALUES
(1, 1, 1),
(1, 2, 1),
(2, 2, 1),
(2, 1, 1),
(2, 3, 4),
(2, 4, 1),
(2, 2, 4);

INSERT INTO Notification_User (notificationid, userid, isread) VALUES
(1, 1, 1),
(1, 2, 0),
(1, 3, 1),
(2, 3, 1),
(3, 3, 1);
