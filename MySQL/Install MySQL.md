## For Mac Users
- go to: http://dev.mysql.com/downloads/
- click `MySQL Community Server`
- click `download` next to the correct OS X version you have for the `DMG Archive`
- you'll get prompted to sign up for an Oracle web account; go to the bottom and click 'no thanks, just start my download'
- once downloaded, open the dmg file and follow the directions

## For Linux
- open terminal
- type the command `sudo apt-get update`. This updates the list of available packages.
- type `dpkg --get-selections | grep -v deinstall | grep -i mysql`. This is to check if MySQL is installed.
- type `apt-cache search mysql | less`. This will list the packages; you want to look for MySQL-server with "(metapackage depending on the latest version)." This is the package you will be installing, it is the latest stable version.
- type `sudo apt-get install mysql-server` to install MySQL.
- when prompted with the question 'Do you want to continue [Y/n]?', hit enter
- when prompted to create a password, just hit enter
- type `dpkg --get-selections | grep -v deinstall | grep -i mysql | grep -i php` to check for php5-mysql
- type `sudo apt-get install php5-mysql` to install it, if you don't have it.
- when prompted with the question 'Do you want to continue [Y/n]?', hit enter
