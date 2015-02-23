Gettings STarted with Laravel

# Install Composer

```
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

# Downlaod Laravel
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

