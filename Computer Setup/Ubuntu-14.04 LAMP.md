# Configure Student Machine (Ubuntu 14.04)

This guide will install the following software:

- Apache
- PHP
- MySQL

## Install Apache

```sh
apt-get update
sudo apt-get install apache2

# Verify Install
apache2 -v
```

## Install MySQL

```sh
sudo apt-get install mysql-server

# Do not enter a password when prompted. In other words we want our password to be blank.

# Verify Install
mysql -v
```

## Install PHP

```sh
apt-get install php5-common libapache2-mod-php5 php5-cli php5-mysql

# Verify Install
php -v
```

## Restart Apache
```sh
sudo service apache2 restart
```

## Ensure everything is working

Verify apache is running: 
[http://localhost/](http://localhost/)

Verify PHP is installed and running: 
[http://localhost/phpinfo.php](http://localhost/phpinfo.php)



