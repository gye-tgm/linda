#!/usr/bin/env bash

# Make the Vagrant directory as the website root directory
rm -rf /var/www
ln -fs /vagrant /var/www

# Get Yii from official website if not already done.
HOME=/home/vagrant
YII=$HOME/yii
if [ !-d $HOME/opt ]; then
				mkdir -p $HOME/opt
				cd $HOME/opt
				wget https://github.com/yiisoft/yii/releases/download/1.1.14/yii-1.1.14.f0fee9.tar.gz

				tar xf yii-1.1.14.f0fee9.tar.gz

				# Create a link /home/vagrant/opt/yii pointing to the yii directory
				mv yii-1.1.14.f0fee9 yii
				chown -R www-data yii
				chgrp -R www-data yii

				mysql -u root < /vagrant/data/all.sql 
fi
