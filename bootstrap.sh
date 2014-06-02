#!/usr/bin/env bash

# Make the Vagrant directory as the website root directory
rm -rf /var/www
ln -fs /vagrant /var/www

# Get Yii from official website if not already done.
HOME=/home/vagrant
YII=$HOME/yii
OPT=$HOME/opt

if [ ! -d $OPT/yii ]; then
	mkdir -p $OPT/yii
	wget https://github.com/yiisoft/yii/releases/download/1.1.14/yii-1.1.14.f0fee9.tar.gz

	tar xf yii-1.1.14.f0fee9.tar.gz

	# Create a link /home/vagrant/opt/yii pointing to the yii directory
	mv yii-1.1.14.f0fee9 yii
fi

if [ ! -d $OPT/selenium ]; then
	mkdir -p $OPT/selenium
	cd $OPT/selenium		
	wget http://selenium-release.storage.googleapis.com/2.42/selenium-server-standalone-2.42.1.jar
fi

chown -R www-data $OPT
chgrp -R www-data $OPT

mysql -u root < /vagrant/data/all.sql 
java -jar $OPT/selenium/selenium-server-standalone-2.42.1.jar &
