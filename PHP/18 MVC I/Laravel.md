Gettings STarted with Laravel

# What version of PHP are you running
```
which php

ls /path/to/php
```
check apache version
```
vi /etc/apache2/httpd.conf

; LoadModule php5_module /path/to/php
```

# Install Composer

```
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

# Downlaod Laravel
Don't get 5.
```
composer global require "laravel/installer=~1.1"
```

## Add Laravel to your paths
Add the following to your bash_profile file

```
vi ~/.bash_profile

# added laravel to Path
export PATH="/Users/brlamore/.composer/vendor/bin:$PATH"
```
Relaod bash file

```
source ~/.bash_profile
```

# Problems
mcrypt

## Try Brew first
```
brew install mcrypt php53-mcrypt
```

## Manual Install 

**Install mcrypt for php on Mac OSX 10.10**

Create working Directory for mcrypt
```
cd ~ ; mkdir mcrypt ; cd mcrypt
cd ~/mcrypt
```

Download files
```
curl -sS http://php.net/get/php-5.5.14.tar.gz/from/this/mirror
curl -sS http://downloads.sourceforge.net/project/mcrypt/Libmcrypt/2.5.8/libmcrypt-2.5.8.tar.gz?r=http%3A%2F%2Fcoolestguidesontheplanet.com%2Finstall-mcrypt-php-mac-osx-10-10-yosemite-development-server%2F&ts=1424719831&use_mirror=iweb
```

Unzip files
```
tar -zxvf libmcrypt-2.5.8.tar.gz
tar -zxvf php-5.5.14.tar.gz

rm *.gz
```

Configure mcrypt
```
cd libmcrypt-2.5.8
./configure
make
sudo make install
```

Install Autoconf
```
cd ~/mcrypt
curl -O http://ftp.gnu.org/gnu/autoconf/autoconf-latest.tar.gz
tar xvfz autoconf-latest.tar.gz
cd autoconf-2.69/
./configure
make
sudo make install
```

## Compile mcrypt php Extension
```
cd ~/mcrypt/php-5.5.14/ext/mcrypt/
/usr/bin/phpize

./configure
make 
sudo make install
```

## Enabling mcrypt.so  php Extension
```
sudo vi /etc/php.ini

# Add the following line to end of file
extension=mcrypt.so


sudo apachectl restart
```

#Extra
### Point apache to homebrew php
```
$brew uninstall php55
$brew install php55 --with-fpm --with-apache

# Read comment
# To enable PHP in Apache add the following to httpd.conf and restart Apache:
#     LoadModule php5_module    /usr/local/opt/php55/libexec/apache2/libphp5.so

vi /etc/apache2/httpd.conf

```

### Brew Install
```

```

# references
http://laravel.com/docs/4.2/quick
http://coolestguidesontheplanet.com/install-mcrypt-php-mac-osx-10-10-yosemite-development-server/

#Notes
Installed in:
/usr/local/Cellar/php55/5.5.19/lib/php/extensions/no-debug-non-zts-20121212/


