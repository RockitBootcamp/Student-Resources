# OS X Install MySQL

## Install

- See [Official Guide](http://dev.mysql.com/doc/refman/5.6/en/osx-installation-pkg.html) for reference
- Visit the [MySQL Download Page](https://dev.mysql.com/downloads/mysql/)
    - Download the appropriate DMG file for the version of OS X you have
    - Download the latest version if your version of OS X isn't present
- Unpack and follow the installation wizard

## Verify

Go to `System Preferences` on the Mac. See if there is a new icon for MySQL at the bottom. Click on it and see if MySQl is started. If it's not, then start it

Edit your bash profile (at `~/.bash_profile`) to have the following path to MySQL:

```sh
export PATH="/usr/local/mysql/bin:$PATH"
```

Save and exit.

In Terminal, type:

```sh
mysql -uroot
```

This command says, "Login to MySQL with the user of root". By Default, you will have one user for the database with a username of `root` and no password.