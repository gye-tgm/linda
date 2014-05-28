USE linda;

INSERT INTO User(username, password) VALUES
('user1', 'password1'),
('user2', 'password2'),
('user3', 'password3'),
('user4', 'password4');

INSERT INTO Event(name, ort, beschreibung, organisatorid) VALUES
('event1','ort1','beschreibung', 1),
('event2','ort2','beschreibung', 2),
('event3','ort3','beschreibung', 3),
('event4','ort4','beschreibung', 4);

INSERT INTO Kommentar(text, zeit, userid, eventid) VALUES
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
INSERT INTO Notification (eventid, typ, zeit) VALUES
(1, 0, NOW()),
(2, 1, NOW()),
(3, 2, NOW()),
(4, 3, NOW());

INSERT INTO Termin (eventid, zeit) VALUES
(1, NOW()),
(2, NOW()),
(3, NOW()),
(4, NOW());

INSERT INTO TerminVereinbarung (terminid, userid, eventid) VALUES
(1, 1, 1),
(1, 2, 1),
(2, 2, 1),
(2, 1, 1),
(2, 3, 4),
(2, 4, 1),
(2, 2, 4);

INSERT INTO Notification_User (notificationid, userid, gelesen) VALUES
(1, 1, 1),
(1, 2, 0),
(1, 3, 1),
(2, 3, 1),
(3, 3, 1);
