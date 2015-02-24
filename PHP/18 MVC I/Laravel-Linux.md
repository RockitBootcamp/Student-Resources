# How to Install Laravel on Ubuntu machines

## Install mcrypt
- use apt-get to install the php-mcrypt library
- create links to the mcrypt ini file
```bash
$ sudo apt-get install php5-mcrypt
$ cd /etc/php5/apache2/conf.d
$ sudo ln -s ../../mods-available/mcrypt.ini ./50-mcrypt.ini
$ cd ../../cli/conf.d
$ sudo ln -s ../../mods-available/mcrypt.ini ./50-mcrypt.ini
```
