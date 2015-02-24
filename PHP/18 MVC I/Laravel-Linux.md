# How to Install Laravel on Ubuntu machines

## Steps:
- Install mcrypt
- Install composer and laravel

## Install mcrypt
- use apt-get to install the php-mcrypt library
- create links to the mcrypt ini file
```bash
$ sudo apt-get install php5-mcrypt
$ cd /etc/php5/apache2/conf.d
$ sudo ln -s ../../mods-available/mcrypt.ini ./50-mcrypt.ini
$ cd ../../cli/conf.d
$ sudo ln -s ../../mods-available/mcrypt.ini ./50-mcrypt.ini
# verify that php is loading the mcrypt library
$ php -i | grep mcrypt
# should output something like:
/etc/php5/cli/conf.d/50-mcrypt.ini
Registered Stream Filters => zlib.*, bzip2.*, convert.iconv.*, string.rot13, string.toupper, string.tolower, string.strip_tags, convert.*, consumed, dechunk, mcrypt.*, mdecrypt.*
mcrypt
mcrypt support => enabled
mcrypt_filter support => enabled
mcrypt.algorithms_dir => no value => no value
mcrypt.modes_dir => no value => no value
```

## Install composer and laravel
- install composer
- make composer globally available
- install laravel
- make laravel globally available
- create test laravel project
- test the test project
$ sudo mv composer.phar /usr/local/bin/composer
$ composer global require "laravel/installer=~1.1"
# prepend '~/.composer/vendor/bin' to the $PATH shell variable

# now let's test it out
$ cd junk
$ laravel new blog
$ cd blog
$ php artisan serve
# should output this:
Laravel development server started on http://localhost:8000

```
