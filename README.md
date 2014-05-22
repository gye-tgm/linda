Linda
=====

Das beste Terminvereinbarungssystem im TGM.

Setup
=====
Vagrant
-------

Download und Installation findet man auf der offiziellen Website [1].

Nach der Installation muss man die Box "ubuntu/trusty64" hinzufügen.

$ vagrant box add ubuntu/trusty64

Danach kann man das System einfach mit vagrant up starten.

$ vagrant up

Dabei müssen die Files "Vagrantfile" und "bootstraph.sh" vorhanden sein, damit die Dependencies von Vagrant verwalten werden.

Die Website kann man danach mit dem Webbrowser unter der Adresse http://127.0.0.1:1234 aufrufen.

[1] http://www.vagrantup.com/downloads
