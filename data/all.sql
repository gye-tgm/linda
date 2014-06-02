

-- Database for production
DROP DATABASE IF EXISTS linda;
CREATE DATABASE linda;
USE linda;
GRANT ALL PRIVILEGES ON linda.*  TO 'linda'@'%' IDENTIFIED BY 'passwd';

-- TODO: insert.sql should be removed, when in production
source /vagrant/data/create.sql
source /vagrant/data/insert.sql
source /vagrant/data/pinsert.sql
source /home/vagrant/opt/yii/framework/web/auth/schema-mysql.sql

DROP DATABASE IF EXISTS lindatest;
CREATE DATABASE lindatest;
USE lindatest;
GRANT ALL PRIVILEGES ON lindatest.*  TO 'lindatest'@'%' IDENTIFIED BY 'passwd';

source /vagrant/data/create.sql
source /vagrant/data/insert.sql
source /vagrant/data/pinsert.sql
source /home/vagrant/opt/yii/framework/web/auth/schema-mysql.sql


