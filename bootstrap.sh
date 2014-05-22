#!/usr/bin/env bash

apt-get update

# Apache, PHP5 and Yii Framework
apt-get install -y apache2
rm -rf /var/www/html
ln -fs /vagrant /var/www/html

apt-get install -y php5

# Get yii
wget https://github.com/yiisoft/yii/releases/download/1.1.14/yii-1.1.14.f0fee9.tar.gz
# TODO: tar ? 
