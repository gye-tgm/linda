#!/usr/bin/env bash

apt-get update

# Apache and PHP5
apt-get install -y apache2
rm -rf /var/www
ln -fs /vagrant /var/www

apt-get install -y php5

