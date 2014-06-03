#!/usr/bin/env bash

# ~~~~~~~~~~~~~~~~~~~~~~~~~~~
# Download and Instatllation
# ~~~~~~~~~~~~~~~~~~~~~~~~~~~

# Make the Vagrant directory as the website root directory
rm -rf /var/www
ln -fs /vagrant /var/www

# Get Yii from official website if not already done.
HOME=/home/vagrant
YII=$HOME/yii
OPT=$HOME/opt

# Yii

if [ ! -d $OPT/yii ]; then
	mkdir -p $OPT/yii
	wget https://github.com/yiisoft/yii/releases/download/1.1.14/yii-1.1.14.f0fee9.tar.gz

	tar xf yii-1.1.14.f0fee9.tar.gz

	# Create a link /home/vagrant/opt/yii pointing to the yii directory
	mv yii-1.1.14.f0fee9 yii
fi

# Installing selenium 

if [ ! -d $OPT/selenium ]; then
	mkdir -p $OPT/selenium
	cd $OPT/selenium		
	wget http://selenium-release.storage.googleapis.com/2.42/selenium-server-standalone-2.42.1.jar
fi

# Installing PHPUnit Selenium 
pear upgrade PEAR
pear config-set auto_discover 1
pear install pear.phpunit.de/PHPUnit
pear install pear.phpunit.de/PHPUnit_Selenium

# Downloading the web driver for Chrome Selenium
wget -nc http://chromedriver.storage.googleapis.com/2.9/chromedriver_linux64.zip
unzip chromedriver_linux64.zip

chown -R www-data $OPT
chgrp -R www-data $OPT

# MySQL Database setup
mysql -u root < /vagrant/data/all.sql 


# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
# SETUP
# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

# Selenium server start
DISPLAY=:1 xvfb-run java -jar $OPT/selenium/selenium -Dwebdriver.chrome.driver=$OPT/chromedriver


