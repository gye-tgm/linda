Linda
=====

Das beste Terminvereinbarungssystem im TGM.

Setup
=====
Vagrant
-------

Download und Installation findet man auf der offiziellen Website [1].

Nach der Installation muss man die Box "hashicorp/precise32" hinzufügen.

$ vagrant box add hashicorp/precise32

Danach kann man das System einfach mit vagrant up starten. Achtung: davor sollte man aber im src/ Verzeichnis befinden! Sollte man dies nicht gemacht haben, so muss man die Seite mit localhost:1234/src aufrufen.

$ vagrant up

Dabei müssen die Files "Vagrantfile" und "bootstraph.sh" vorhanden sein, damit die Dependencies von Vagrant verwalten werden.

Die Website kann man danach mit dem Webbrowser unter der Adresse http://127.0.0.1:1234 aufrufen.

Wenn ihr mal den Computer stoppen müsst, dann die virtuelle Maschine einfach mit vagrant suspend beenden.

$ vagrant suspend

Firefox
--------

Wer Firefox nicht hat, bitte diesen zu installieren. Danach sind folgende Add Ons bzw. Extensions zu installieren.

* Selenium IDE [2]
* PHP Formatter (damit man den Testcase zu PHP Code exportieren kann) [3] 

Workflow
========

Jedes mal, wenn man am Projekt arbeitet, sollte man sicherstellen, dass das Projekt, das lokal auf der Festplatte liegt, auch auf dem neusten Stand ist. Dies erreicht man durch 

$ git pull

Um die Maschine zu starten, verwendet man Vagrant wie oben beschrieben.

Die Seite kann man am Webbrowser mit localhost:1234/src sehen.

Die zu bearbeitenden Files liegen im src/protected/ Ordner, wobei view der Ordner für die Website-Interface-Designer (Medientechniker) ist. 


Referenzen
==========
[1] http://www.vagrantup.com/downloads

[2] http://docs.seleniumhq.org/download/ 

[3] https://addons.mozilla.org/en-US/firefox/addon/selenium-ide-php-formatters/
