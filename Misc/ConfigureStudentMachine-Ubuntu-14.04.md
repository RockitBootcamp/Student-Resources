# Configure Student Machine (Ubuntu 14.04)
This guide will isntall the following software:

* Apache
* PHP
* MySQL
* PHP MySQL Connector

## Install Apache

`
apt-get update
sudo apt-get install apache2
`

Verify it's installed with
`
apache2 -v
`

## Install PHP

`
apt-get install php5-common libapache2-mod-php5 php5-cli
`

Verify with
`
php -v
`

## Install MySQL
`
sudo apt-get install mysql-server
`

Do not enter a password when prompted.

Verify with

`
mysql -u root -p
`

## Install php5-mysql

`
sudo apt-get install php5-mysql
`


## Restart Apache
`
sudo service apache2 restart
`


## Ensure everything is workig
Verify apache is running: 
[http://localhost/](http://localhost/)

Verify PHP is installed and running: 
[http://localhost/phpinfo.php](http://localhost/phpinfo.php)



